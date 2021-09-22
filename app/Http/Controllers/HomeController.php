<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\events;
use App\Models\category;
use App\Models\featuredEvents;
use App\Models\country;
// use App\Models\category;
use App\Models\membership;
use App\Models\User;
use App\Models\blogs;
use GuzzleHttp\Client;
use Response;
use File;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Stripe;

use App\Models\Comments;
use App\Models\EventCategory;
use App\Models\EventAttachment;



// use TwitterStreamingApi;
use Twitter;

class HomeController extends Controller
{
    // public function __construct()
    // {
        // $this->middleware('auth');
    // }
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    public function index()
    {
        
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        $d=date('d');     
        $m=date('m');
        $y=date('Y');     
        $events=events::all();   
        $date=date("Y-m-d");
        $tweets=Twitter::getUserTimeline(['count' => 10, 'format' => 'array']);
        $d_events=events::where('start_date','=',$date)->where('type','Daily')
        // ->where('status','Approved')
        ->get();
        $m_events=events::where('start_date','=',$date)->where('type','Monthly')
        // ->where('status','Approved')
        ->orderBy('created_at','desc')->get();
        $week_events=events::where('start_date','=',$date)->where('type','Weekly')
        // ->where('status','Approved')
        ->orderBy('created_at','desc')->get();
        $wSD=date("Y-m-d", strtotime( 'monday this week' ));
        $wED=date("Y-m-d", strtotime( 'sunday this week' ));

        $featureEvents=featuredEvents::all()->take(3) ;
        return view('leepFront.index',compact('events','page_title', 'page_description','d_events','m_events','week_events','featureEvents','tweets','d','m'));
        // return view('auth.verify');
        //  leepFront/index
    }
    public function categoryDetail($id)
    {
        $category=category::where('id',$id)->first();
        // dd($category);
        $m=date('m');
        $d=date('d');
        $date=date("Y-m-d");
        $d_events=events::where('start_date','=',$date)->where('type','Daily')
                // ->where('status','Approved') 
        ->get();
        
        if(!isset($category->id))
            return redirect()->back()->with(['errorMsg','Undefined Category']);

        $eventCategory=EventCategory::where('category_1',$category->cat_id)->orWhere('category_2',$category->cat_id)->orWhere('category_3',$category->cat_id)->orWhere('category_4',$category->cat_id)->orWhere('category_5',$category->cat_id)->orWhere('category_6',$category->cat_id)->paginate(10);

        // dd($eventCategory);
        return view('leepFront.categoryDetail',compact('eventCategory', 'm','d','d_events', 'category', 'id')); // leepFront/categoryDetail
    }
    public function downloadpdf($eveId,$filesId)
    {
        $filename='val';$filenameN='';
        $ev=events::find($eveId);//->select('download'.$filesId)
        if($ev->id!=''){
            if($filesId==='1'){
                $filename=$ev->download1;
                $filenameN=$ev->download_title1;
            }
            elseif($filesId==='2'){
                $filename=$ev->download2;
                $filenameN=$ev->download_title2;
            }
            elseif($filesId==='3'){
                $filename=$ev->download3;
                $filenameN=$ev->download_title3;
            }
            if($filenameN==''){
                $filenameN=$filename;
            }
        }
         // dd($filenameN);
        if($filename=='' || $filename=='val')
            $filename='val';            
        $error='No file found';
        $headers = array(
              'Content-Type: application/pdf',
            );
        // dd($filename);
        $file= public_path(). "/leep_calender/event/pdf/".$filename;
        if(File::exists($file))
            return Response::download($file,$filenameN , $headers);
        else
            return redirect()->back()->with(['errorMsg'=>'File Not found']);
    }
    public function userSearchEvents(Request $request){
        
        $search='';
        $events=events::select('events.*');
        $events->where('status','Approved');
        if (isset($request->event_Name)) {
            $search=$request->event_Name;
            $events->where('name','like','%'.$request->event_Name .'%');
        }
        // dd($request->all());
        if(isset($request->country)){
            $search=$search.' , '.$request->country;
            $events->where('country1',$request->country);
        }

        if (isset($request->category)) {
            $cat=category::where('name',$request->category)->first();
            if(isset($cat->id))
            $search=$search.' , '.$cat->name;
            // $events->where('cat_1',$request->category)->Orwhere('cat_2',$request->category)->Orwhere('cat_3',$request->category)->Orwhere('cat_4',$request->category)->Orwhere('cat_5',$request->category)->Orwhere('cat_6',$request->category);
            $cat=$cat->cat_id;
            $events->where(function($q) use($cat){
                $q->where('cat_1',$cat)->orWhere('cat_2',$cat)->orWhere('cat_3',$cat)->orWhere('cat_4',$cat)->orWhere('cat_5',$cat)->orWhere('cat_6',$cat);
            });
        }

        if (isset($request->daily) && isset($request->weekly) && isset($request->annual) || isset($request->type_all)) {
            
            $daily='Daily';//$request->daily;
            $weekly='Weekly';//$request->weekly;
            $annual='Annual';//$request->annual;

            $search=$search.' , '. $daily .' , '.$weekly.' , '.$annual;

            $events->where(function($q) use($daily,$weekly,$annual){$q->where('type',$daily)->orWhere('type',$weekly)->orWhere('type',$annual);});
        }
        elseif (isset($request->daily) && !isset($request->weekly) && !isset($request->annual)) {
            $search=$search.' , '.$request->daily;
            $daily='Daily';//$request->daily;
            $events->where('type',$request->daily);
        }
        // Dail
        elseif (isset($request->daily) && isset($request->weekly) && !isset($request->annual)) {
            $search=$search.' , '.$request->daily.' , '.$request->weekly;

            $daily='Daily';//$request->daily;
            $weekly='Weekly';//$request->weekly;

            $events->where(function($q) use($daily,$weekly){$q->where('type',$daily)->orWhere('type',$weekly);});
        }
        // Dail
        elseif (isset($request->daily) && !isset($request->weekly) && isset($request->annual)) {
            $search=$search.' , '.$request->daily;

            $daily='Daily';//$request->daily;
            $weekly='Weekly';//$request->weekly;
            $annual='Annual';//$request->annual;

            $search=$search.' , '.$request->daily.' , '.$request->annual;

            $events->where(function($q) use($daily,$annual){$q->where('type',$daily)->orWhere('type',$annual);});
        }
        // Weekly
        elseif (isset($request->weekly) && !isset($request->annual) && !isset($request->daily)  ) {
            $search=$search.' , '.$request->weekly;

            $daily='Daily';//$request->daily;
            $weekly='Weekly';//$request->weekly;
            $annual='Annual';//$request->annual;

            $events->where('type',$request->weekly);
        }
        // annualy
        elseif (isset($request->annual) && !isset($request->weekly) && !isset($request->daily)  ) {
            $search=$search.' , '.$request->annual;
            $daily='Daily';//$request->daily;
            $weekly='Weekly';//$request->weekly;
            $annual='Annual';//$request->annual;

            $events->where('type',$request->annual);
        }
        // Weekly
        elseif (isset($request->weekly) && isset($request->annual) && !isset($request->daily)  ) {
            $search=$search.' , '.$request->weekly.' , '.$request->annual;

            $daily='Daily';//$request->daily;
            $weekly='Weekly';//$request->weekly;
            $annual='Annual';//$request->annual;

            $events->where(function($q) use($weekly,$annual){$q->where('type',$weekly)->orWhere('type',$annual);});
        }
        // dd($events->toSql());        // dd($events->get());
        $events=$events->paginate(8);// $events=$events->simplePaginate(1);        // dd($events);

        return view('leepFront.searchEvents',compact('events','search'));
        // return view('leepFront.searchEvents');
    }
    public function eventDetail($id){
        $eventCategory=EventCategory::find($id);
        if(isset($eventCategory->event->id)){
            if($eventCategory->event->status=='Approved' || Auth::id()==$event->user_id){

            }else{
                return redirect()->back()->with(['error'=>'Unknown Event']);                
            }
            $category = category::where('cat_id',$eventCategory->category_1)->first();
            $d=date('d');
            $m=date('m');   
            $events=events::all();   
            $date=date("Y-m-d");
            $d_events=events::where('start_date','=',$date)->where('type','Daily')->where('status','Approved')->get();
            $m_events=events::where('start_date','=',$date)->where('type','Monthly')->where('status','Approved')->orderBy('created_at','desc')->get();
            $week_events=events::where('start_date','=',$date)->where('type','Weekly')->where('status','Approved')->orderBy('created_at','desc')->get();
            $wSD=date("Y-m-d", strtotime( 'monday this week' ));
            $wED=date("Y-m-d", strtotime( 'sunday this week' ));

            // dd(events::distinct('country1,country2')->get(['country1','country2']));              
            
            return view('leepFront.eventDetail',compact('eventCategory','d_events','m_events','week_events','d','m','category')); // leepFront/eventDetail
        }else
            return redirect()->back()->with(['error'=>'Unknown Event']);
    }
    public function addNewEvent($value='')
    {
        if(Auth::user()->membership_id==''){
            return redirect('becomeMember')->with(['errorMsg'=>'Please Select Membership TO Add Event']);
        }
        $memberRegDate=Auth::user()->membership_date;
        $e=events::where('user_id',Auth::id())->where('created_at','>=',$memberRegDate)->count();           
        if(Auth::user()->membership->limitation<=$e){
            return redirect('becomeMember')->with(['errorMsg'=>'Please Upgrade Your Membership Plan']);
        }
        $this->middleware('auth');
        return view('leepFront.addEvent'); // leepFront/addEvent
    }
    public function editEvent($value='')
    {
        $this->middleware('auth');
        $event=events::find($value);
        if($event->status!='Deleted'){}
        else{
            return redirect()->back()->with(['errorMsg'=>'Unknown Events']);            
        }
        if(Auth::id()==$event->user_id)
        {
            return view('leepFront.editEvent',compact('event'));            
        }else{
            return redirect()->back()->with(['errorMsg'=>'Unknown Events']);
        }
    }
    public function deleteEvent($id){
        $this->middleware('auth');
        $event=events::find($id);
        if(Auth::id()==$event->user_id)
        {
            $event->status='Deleted';
            $event->save();
            return redirect('myEvents')->with(['successMsg'=>'Event Deleted Successfully']);
        }else{
            return redirect()->back()->with(['errorMsg'=>'Unknown Events']);
        }
    }

    public function addNewEventFrom(Request $request)
    {

        $request->validate([
            // 'name' =>'required',
            // 'location' =>'required',
            // 'description' =>'required',
            // 'category' =>'required',
            // 'champ_name' =>'required',
            // 'province' =>'required',
            // 'zip' =>'required',
            // 'contactName' =>'required',
            // 'ph_number' =>'required',
            // 'email' =>'required',
            // // 'contactUrl' =>'required',
            // 'startDate'    => 'required|date',
            // 'endDate'      => 'required|date|after_or_equal:startDate',

            'name' =>'required', 
            'physical_address' =>'required',
            'description' =>'required',
            'category' =>'required',
            'event_champion' =>'required',
            'champ_address1' =>'required',
            'zip' =>'required',
            'contact_person' =>'required',
            'ph_num' =>'required',
            'email' =>'required',
            'email' =>'required',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after_or_equal:start_date',


        ]);
        // dd($request->all());
        $memberRegDate=Auth::user()->membership_date;
        $e=events::where('user_id',Auth::id())->where('created_at','>=',$memberRegDate)->count();           
        if(Auth::user()->membership->limitation<=$e){
            return redirect('becomeMember')->with(['errorMsg'=>'Please Upgrade Your Membership Plan']);
        } 
        $a=0;
        $reqImage='mediaImage'.$a;
        $reqImageN='mediaImage'.$a;

        $events=new events();
        if(isset($request->mediaImage0))
        {
            $image1 =$request->mediaImage0;

            $image_parts = explode(";base64,", $image1);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/img/' . $imgN;
            // dd($file);
            $events->extra_image1=$imgN;
            file_put_contents($file, $image_base64);
            // file_put_contents($file, $image_base64);
        }
        if(isset($request->mediaImage1))
        {
            $image1 =$request->mediaImage1;
    
            $image_parts = explode(";base64,", $image1);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/img/' . $imgN;
            $events->extra_image2=$imgN;
            file_put_contents($file, $image_base64);
            // file_put_contents($file, $image_base64);
        }
        if(isset($request->mediaImage2))
        {
            $image1 =$request->mediaImage2;

            $image_parts = explode(";base64,", $image1);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/img/' . $imgN;
            $events->extra_image3=$imgN;
            file_put_contents($file, $image_base64);
            // file_put_contents($file, $image_base64);
        }
        // FILE
        if(isset($request->mediaFile0))
        {
            $image1 =$request->mediaFile0;
            $mediaFile0 = explode(";base64,", $image1);
            $image_type_aux = explode("application/", $mediaFile0[0]);
            $image_type = $image_type_aux[1];
            // dd($mediaFile0[1]);    
            $image_base64 = base64_decode($mediaFile0[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/pdf/' . $imgN;
            $events->download1=$imgN;
            $events->download_title1=$request->mediaFileN0;
            file_put_contents($file, $image_base64);
            // file_put_contents($file, $image_base64);
        }
        if(isset($request->mediaFile1))
            if($request->mediaFile1!=null)
        {
            $image1 =$request->mediaFile1;
            $mediaFile1 = explode(";base64,", $image1);
            $image_type_aux = explode("application/", $mediaFile1[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($mediaFile1[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/pdf/' . $imgN;
            $events->download2=$imgN;
            $events->download_title2=$request->mediaFileN1;
            file_put_contents($file, $image_base64);
            // dd($image_type);
            // file_put_contents($file, $image_base64);
        }
        if(isset($request->mediaFile2))
            if($request->mediaFile2!='')
        {
            $image1 =$request->mediaFile2;
    
            $mediaFile2 = explode(";base64,", $image1);
            $image_type_aux = explode("application/", $mediaFile2[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($mediaFile2[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/pdf/' . $imgN;
            $events->download3=$imgN;
            $events->download_title3=$request->mediaFileN2;
            file_put_contents($file, $image_base64);
            // file_put_contents($file, $image_base64);
        }

        // dd($request->all());

        $sd=(date("d",strtotime($request->startDate)));
        $sm=(date("m",strtotime($request->startDate)));
        $sy=(date("y",strtotime($request->startDate)));
        
        $ed=(date("d",strtotime($request->endDate)));
        $em=(date("m",strtotime($request->endDate)));
        $ey=(date("y",strtotime($request->endDate)));
        $country=explode(' ', $request->country);
        // =======================================  EVENT DETAILS ======================================= 
        $events->name=$request->name;
        $events->physical_address=$request->physical_address;
        $events->states=$country[0];//$request->country;
        $events->country_code= str_replace(' ', '', $country[1]);//$request->country;
        $events->description=$request->description;
        $events->url=$request->url;
        $events->type=$request->type;
        $events->start_day=$sd;
        $events->start_month=$sm;
        $events->start_year=$sy;
        $events->end_day=$ed;
        $events->end_month=$em;
        $events->end_year=$ey;
        $events->start_date=$request->start_date;
        $events->end_date=$request->end_date;

        // =======================================  Event Champion Details ======================================= 
        // dd('sdjkfjdsf');

        $events->event_champion=$request->event_champion;
        // $Champ_country=explode(',', $request->country);
        // $events->champ_country=$Champ_country[0];//$request->champ_country; // issue
        $events->champ_address1=$request->champ_address1;
        $events->zip=$request->zip;
        $events->contact_link=$request->contact_link;
        $events->ph_num=$request->ph_num;
        $events->email_form=$request->email;
        $events->contact_link=$request->contactUrl;
        // $events->eventAttachments->socail_link1=$request->facebook;
        // $events->eventAttachments->socail_link2=$request->twitter;
        // $events->eventAttachments->socail_link3=$request->instagram;
        $events->user_id=Auth::id();
        $events->save();


        $eventCategory = new eventCategory;
        $eventCategory->event_id = $events->id;
        for($c=0;$c<count($request->category);$c++)
        {
            $c_no='category_'.($c+1);
            if($c<=5)
            $eventCategory->$c_no=$request->category[$c];
        }
        $eventCategory->save();

        $events->save();
        $eventAttachment = new EventAttachment;
        $eventAttachment->event_id = $events->id;
        $eventAttachment->socail_link1=$request->facebook;
        $eventAttachment->socail_link2=$request->twitter;
        $eventAttachment->socail_link3=$request->instagram;
        $eventAttachment->save();

        // $events->=$request->;
        // $events->=$request->;

        return redirect()->back()->with(['successMsg'=>"Event added successfully"]);
        // (leepFront.addEvent)
    }

    public function editEventFrom(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' =>'required', 
            'physical_address' =>'required',
            'description' =>'required',
            'category' =>'required',
            'event_champion' =>'required',
            'champ_address1' =>'required',
            'zip' =>'required',
            'contact_person' =>'required',
            'ph_num' =>'required',
            'email' =>'required',
            'email' =>'required',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date|after_or_equal:start_date',
        ]);  
        // dd($request->all());
        $a=0;
        $reqImage='mediaImage'.$a;
        $reqImageN='mediaImage'.$a;
        $events=events::find($request->event_id); 

        if(!isset($request->oDoc1)){
            if($request->oDoc1=='' && $events->download1!=''){ 
               $image_path1=public_path()."/leep_calender/event/pdf/".$events->download1;
                if (File::exists($image_path1)) {
                    File::delete($image_path1);
                }
                    $events->download_title1=null;
            }
        }
        if(!isset($request->oDoc2)){
            if($request->oDoc2=='' && $events->download2!=''){ 
               $image_path1=public_path()."/leep_calender/event/pdf/".$events->download2;
                if (File::exists($image_path1)) {
                    File::delete($image_path1);
                }
                    $events->download2=null;
                    $events->download_title2=null;
            }
        }
        if(!isset($request->oDoc3)){
            if($request->oDoc3=='' && $events->download3!=''){ 
               $image_path1=public_path()."/leep_calender/event/pdf/".$events->download3;
                if (File::exists($image_path1)) {
                    File::delete($image_path1);
                }
                    $events->download3=null;
                    $events->download_title3=null;
            }
        }
        // Images
        if(!isset($request->oImg1)){
            if($request->oImg1=='' && $events->extra_image1!=''){ 
               $image_path1=public_path()."/leep_calender/event/img/".$events->extra_image1;
               // dd($image_path1);
                if (File::exists($image_path1)) {
                    File::delete($image_path1);
                }
                $events->extra_image1=null;
            }
        }
        if(!isset($request->oImg2)){
            if($request->oImg2=='' && $events->extra_image2!=''){ 
               $image_path1=public_path()."/leep_calender/event/img/".$events->extra_image2;
                if (File::exists($image_path1)) {
                    File::delete($image_path1);
                }
                $events->extra_image2=null;
            }
        }
        if(!isset($request->oImg3)){
            if($request->oImg3=='' && $events->extra_image3!=''){ 
               $image_path1=public_path()."/leep_calender/event/img/".$events->extra_image3;
                if (File::exists($image_path1)) {
                    File::delete($image_path1);
                }
                $events->extra_image3=null;
            }
        }

        $im1=0;
        $im2=0;
        if(isset($request->mediaImage0)  && $events->extra_image1=='')
            if($events->extra_image1==null)
        {
            $image1 =$request->mediaImage0;
            $im1=1;
            $image_parts = explode(";base64,", $image1);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/img/' . $imgN;
            $events->extra_image1=$imgN;
            file_put_contents($file, $image_base64);
        } 
        if(isset($request->mediaImage0) || isset($request->mediaImage1) || isset($request->mediaImage2) )
            if($events->extra_image2==null)
        {
            $mImage2='';
            if($im1==0){
                if($request->mediaImage0!=''){
                    $mImage2 =$request->mediaImage0;
                    $im1=1;
                }
            }elseif($request->mediaImage1!=''){
                $mImage2 =$request->mediaImage1;
                $im2=1;
            }
            if($mImage2!=''){
                $image_parts = explode(";base64,", $mImage2);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $imgN= uniqid().date('mdyhms').'.'.$image_type;
                $file = public_path().'/leep_calender/event/img/' . $imgN;
                $events->extra_image2=$imgN;
                file_put_contents($file, $image_base64);
            }
        }
        if(isset($request->mediaImage0) || isset($request->mediaImage1) || isset($request->mediaImage2))
            if($events->extra_image3=='')
        {
           $mImage3='';
           if($im1==0){
                if($request->mediaImage0!='')
                    $mImage3 =$request->mediaImage0;
            }elseif($im2==0){
                if($request->mediaImage1!=''){
                    $mImage3 =$request->mediaImage1;                   
                }
            }else
                    $mImage3 =$request->mediaImage2;                    

            if($mImage3!=''){
                $image_parts = explode(";base64,", $mImage3);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);
                $imgN= uniqid().date('mdyhms').'.'.$image_type;
                $file = public_path().'/leep_calender/event/img/' . $imgN;
                $events->extra_image3=$imgN;
                file_put_contents($file, $image_base64);
            }
        }
        $f1=0;
        $f2=0;
        $f3=0;

        if(isset($request->mediaFile0)  && $events->download1=='')
            if($events->download1==null)
        {
            $image1 =$request->mediaFile0;
            $f1=1;
            $mediaFile0 = explode(";base64,", $image1);
            $image_type_aux = explode("application/", $mediaFile0[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($mediaFile0[1]);
            $imgN= uniqid().date('mdyhms').'.'.$image_type;
            $file = public_path().'/leep_calender/event/pdf/' . $imgN;
            $events->download1=$imgN;
            $events->download_title1=$request->mediaFileN0;
            file_put_contents($file, $image_base64);
        }
        if(isset($request->mediaFile0) || isset($request->mediaFile1) || isset($request->mediaFile2)  && $events->download1!='' || $events->download2=='')
            if($events->download2==null)
        {
            $doc2='';
            if($f1==0){
                if($request->mediaFile0!='')
                    $doc2 =$request->mediaFile0;
                    $events->eventAttachments->download_title2=$request->mediaFileN0;
            }elseif($request->mediaFile1!=''){
                    $doc2 =$request->mediaFile1; 
                    $f2=1;
                    $events->eventAttachments->download_title2=$request->mediaFileN1;
            }
            if($doc2!=''){
                $mediaFile1 = explode(";base64,", $doc2);
                $image_type_aux = explode("application/", $mediaFile1[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($mediaFile1[1]);
                $imgN= uniqid().date('mdyhms').'.'.$image_type;
                $file = public_path().'/leep_calender/event/pdf/' . $imgN;
                $events->download2=$imgN;
                file_put_contents($file, $image_base64);
            }

        }
        if(isset($request->mediaFile0) || isset($request->mediaFile1) || isset($request->mediaFile2))
            if($events->download3=='')
        {
           $doc3=0;
           if($f1==0){
                if($request->mediaFile0!='')
                    $doc3 =$request->mediaFile0;
            }elseif($f2==0){
                if($request->mediaFile1!=''){
                    $doc3 =$request->mediaFile1;                   
                }
            }else
                    $doc3 =$request->mediaFile2;                    
            if($doc3!=''){
                $mediaFile2 = explode(";base64,", $doc3);
                $image_type_aux = explode("application/", $mediaFile2[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($mediaFile2[1]);
                $imgN= uniqid().date('mdyhms').'.'.$image_type;
                $file = public_path().'/leep_calender/event/pdf/' . $imgN;
                $events->download3=$imgN;
               file_put_contents($file, $image_base64);
           }
        }

        $sd=(date("d",strtotime($request->start_date)));
        // dd($sd);
        $sm=(date("m",strtotime($request->start_date)));
        $sy=(date("y",strtotime($request->start_date)));
        $ed=(date("d",strtotime($request->end_date)));
        $em=(date("m",strtotime($request->end_date)));
        $ey=(date("y",strtotime($request->end_date)));
        $country=explode(' ', $request->country);
        // ======================================= EVENT DETAILS =======================================
        $events->name=$request->name;
        $events->physical_address=$request->physical_address;
        $events->states=$country[0];//$request->country;    
        $events->country_code= str_replace(' ', '', $country[1]);//$request->country;
        $events->description=$request->description;
        $events->url=$request->url;
        $events->type=$request->type;
        $events->start_day=$sd;
        $events->start_month=$sm;
        $events->start_year=$sy;
        $events->end_day=$ed;
        $events->end_month=$em;
        $events->end_year=$ey;
        $events->start_date=$request->start_date;
        $events->end_date=$request->end_date;
        // $events->time_start=$request->startTime;
        // dd($request->endTime);
        // $events->time_end=$request->endTime;
        // $events->duration=$request->eventDuration;
        // $events->year_date=$request->eventYDate;


        for($c=0;$c<count($request->category);$c++)
        {
            $c_no='category_'.($c+1);
            if($c<=5)
            $events->eventCategory->$c_no=$request->category[$c];
        }
        // ======================================= Event Champion Details =======================================

        // dd('sdjkfjdsf');

        $events->event_champion=$request->event_champion;
        // $Champ_country=explode(',', $request->country);
        // $events->champ_country=$Champ_country[0];//$request->champ_country; // issue
        $events->champ_address1=$request->champ_address1;
        $events->zip=$request->zip;
        $events->contact_link=$request->contact_link;
        $events->ph_num=$request->ph_num;
        $events->email_form=$request->email;
        $events->contact_link=$request->contactUrl;
        $events->eventAttachments->socail_link1=$request->facebook;
        $events->eventAttachments->socail_link2=$request->twitter;
        $events->eventAttachments->socail_link3=$request->instagram;
        $events->user_id=Auth::id();

        

        $events->save();

        // dd('com');

        // $events->=$request->;
        // $events->=$request->;

        return redirect()->back()->with(['successMsg'=>"Event Updated successfully"]);
        // (leepFront.addEvent)
    }
    public function becomeMember($value='')
    {
        return view('leepFront.becomeMember'); // leepFront/becomeMember
    }
    public function myEvents($value='')
    {
        $events=events::where('user_id',Auth::id())->where('status','!=','Deleted')->paginate(8);
        // dd($events);
        $d=date('d');  
        $m=date('m');
        $date=date("Y-m-d");

        $d_events=events::where('start_date','=',$date)->where('type','Daily')->get();;
        $featureEvents=featuredEvents::all()->take(3) ;

        // $y=date('Y');
        return view('leepFront.myEvents.events',compact('events','m','d','d_events','featureEvents')); // leepFront/myEvents 
    }
    public function becomeEventChamp($value='')
    {
        $page_title = 'Become A Champ';
        $page_description = 'Become A Champ';
        $events=events::all();   
        $date=date("Y-m-d");
        $d_events=events::where('start_date','=',$date)->where('type','Daily')->where('status','Approved')->get();
        $m_events=events::where('start_date','=',$date)->where('type','Monthly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $week_events=events::where('start_date','=',$date)->where('type','Weekly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $wSD=date("Y-m-d", strtotime( 'monday this week' ));
        $wED=date("Y-m-d", strtotime( 'sunday this week' ));

        $featureEvents=featuredEvents::all()->take(3) ;
        return view('leepFront.becomeEventChamp',compact('events','page_title', 'page_description','d_events','m_events','week_events','featureEvents'));
        // return view('leepFront.becomeEventChamp');
    }
    public function contactUs($value='')
    {
        return view('leepFront.contactUs');        
    }
    public function contactUsForm(Request $request)
    {
        // dd($request->all());
        $data = array('name'=>$request->fName.$request->lName,'uEmail'=>$request->email,'messagess'=>$request->message);
        Mail::send('mail', $data, function($message) {
         $message->to('mzirsolutions@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         // $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         // $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('mzirsolutions@gmail.com','Zaheer');
      });
        return redirect()->back()->with(['successMsg'=>'email sended successfully']);
    }
    public function legend($value='')
    {
        $page_title = 'Legend';
        $page_description = 'Legend Page';
        $events=events::all();
        $m=date('m');
        $d=date('d');     
        
        $date=date("Y-m-d"); 
        $d_events=events::where('start_date','=',$date)->where('type','Daily')->where('status','Approved')->get();
        $m_events=events::where('start_date','=',$date)->where('type','Monthly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $week_events=events::where('start_date','=',$date)->where('type','Weekly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $wSD=date("Y-m-d", strtotime( 'monday this week' ));
        $wED=date("Y-m-d", strtotime( 'sunday this week' ));


        $featureEvents=featuredEvents::all()->take(3) ;
        return view('leepFront.legend',compact('events','page_title', 'page_description','d_events','m_events','week_events','featureEvents','m','d'));
        // return view('leepFront.legend');        
    }
    public function aboutUs($value='')
    {
        return view('leepFront.aboutUs');        
    }
    public function categories($value='')
    {
        return view('leepFront.category'); // leepFront/category        
    }
    public function becomeFreeMember($value='')
    {
        $mem=membership::where('type','Silver')->first();
        if(Auth::user()->membership_id!=''){
            $u=User::find(Auth::user()->id);
            $u->membership_id=$mem->id;
            $u->events_limitation=$mem->limitation;
            $u->membership_date=date('Y-m-d h:i:s');
            $u->save();
        }
        return redirect()->back()->with(['successMsg'=>'You Had Successfully Subscribed To Silver Event Champion Membership']);
    }
    public function becomeGoldMember($value='')
    {
        $mem=membership::where('type','Gold')->first();
        if(Auth::user()->membership_id=='' || Auth::user()->membership_id!='Gold'){
            $u=User::find(Auth::user()->id);
            $u->membership_id=$mem->id;
            $u->events_limitation=$mem->limitation;
            $u->membership_date=date('Y-m-d h:i:s');
            $u->save();
        }
        return redirect()->back()->with(['successMsg'=>'You Had Successfully Subscribed To Gold Event Champion Membership']);
    }
    public function becomePremiumMember($value='')
    {
        $mem=membership::where('type','Premium')->first();
        if(Auth::user()->membership_id=='' || Auth::user()->membership_id!='Premium'){
            $u=User::find(Auth::user()->id);
            $u->membership_id=$mem->id;
            $u->events_limitation=$mem->limitation;
            $u->membership_date=date('Y-m-d h:i:s');
            $u->save();
        }
        return redirect()->back()->with(['successMsg'=>'You Had Successfully Subscribed To Premium Event Champion Membership']);
    }
    public function paymentProcess(Request $request)
    {
        $token=$_POST['stripeToken'];
                // dd($request->all());
        if(isset($request->member)){
            try {
                $fee=0;
                if($request->member=='gold'){
                    $fee=6995;
                    // dd($fee);
                }
                elseif($request->member=='premium'){
                    $fee=12995;
                }else{
                    return redirect()->back()->with(['errorMsg'=>"Unknown Error"]);                    
                }
                // dd($request->all());
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                $intent=Stripe\Charge::create ([
                        "amount" => $fee,
                        "currency" => "usd",
                        "source" => $request->stripeToken,
                        "description" => "This payment is testing purpose of creativetech-solutions.com",
                ]);
                if($request->member==='premium'){
                    $mem=membership::where('type','Premium')->first();
                    $u=User::where('email',$request->userId)->first();
                    $u->membership_id=$mem->id;
                    $u->events_limitation=$mem->limitation;
                    $u->membership_date=date('Y-m-d h:i:s');
                    $u->save();
                    return redirect()->back()->with(['successMsg'=>'You Had Successfully Subscribed To Premium Event Champion Membership']);
                }
                if($request->member==="gold"){
                    $u=User::where('email',$request->userId)->first();
                    $mem=membership::where('type','Gold')->first();
                    $u->membership_id=$mem->id;
                    $u->events_limitation=$mem->limitation;
                    $u->membership_date=date('Y-m-d h:i:s');
                    $u->save();
                    return redirect()->back()->with(['successMsg'=>'You Had Successfully Subscribed To Gold Event Champion Membership']);
                } 
            }catch(\Exception $ex){
                $m=$ex->getMessage();
                // dd($m);
                return redirect()->back()->with(['errorMsg'=>$m]);
            }
        }else{
            return redirect()->back()->with(['errorMsg'=>"Something Went Wrong"]);
        }           
    }    
    public function stripeCheck($value='')
    {
        return view('leepFront.stripeCheck');
    }
    public function settings($value='')
    {
        return view('leepFront.settings');
    }
    public function updateUserPic(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName =  time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/leep_calender/images/userProfilePic'),$imageName);
        $u=User::find(Auth::id());
        if (File::exists(public_path()."/leep_calender/images/userProfilePic/".$u->image)) {
            File::delete(public_path()."/leep_calender/images/userProfilePic/".$u->image);
        }
        $u->image=$imageName;
        $u->save();
        return redirect()->back()->with(['successMsg'=>'Image Updated successfully']);
    }
    public function userUpdatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);
        $a=User::find(Auth::id());
        $a->password=Hash::make($request->password);
        $a->save();
        return redirect()->back()->with(['successMsg'=>'Password Updated successfully']);
    }
    public function userViewBlogDetail($id)
    {
        $events=events::all();   
        $date=date("Y-m-d"); 
        $d_events=events::where('start_date','=',$date)->where('type','Daily')->where('status','Approved')->get();
        $m_events=events::where('start_date','=',$date)->where('type','Monthly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $week_events=events::where('start_date','=',$date)->where('type','Weekly')->where('status','Approved')->orderBy('created_at','desc')->get();
       
        $blog=blogs::where('id',$id)->first();
        $page_title = $blog->page_title;
        return view('leepFront.blogDetail',compact('blog','d_events','m_events','week_events','page_title'));
    }
    public function userBlogs()
    {
        $page_title = 'Blogs';
        $page_description = 'Blogs Page';
        $events=events::all();
        $m=date('m');
        $d=date('d');     
        
        $date=date("Y-m-d"); 
        $d_events=events::where('start_date','=',$date)->where('type','Daily')->where('status','Approved')->get();
        $m_events=events::where('start_date','=',$date)->where('type','Monthly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $week_events=events::where('start_date','=',$date)->where('type','Weekly')->where('status','Approved')->orderBy('created_at','desc')->get();
        $wSD=date("Y-m-d", strtotime( 'monday this week' ));
        $wED=date("Y-m-d", strtotime( 'sunday this week' ));
        $featureEvents=featuredEvents::all()->take(3) ;
        
        // return view('leepFront.legend',compact('events','page_title', 'page_description','d_events','m_events','week_events','featureEvents','m','d'));

        // $events=events::all();   
        // $date=date("Y-m-d"); 
        // $d_events=events::where('start_date','=',$date)->where('type','Daily')->where('status','Approved')->get();
        // $m_events=events::where('start_date','=',$date)->where('type','Monthly')->where('status','Approved')->orderBy('created_at','desc')->get();
        // $week_events=events::where('start_date','=',$date)->where('type','Weekly')->where('status','Approved')->orderBy('created_at','desc')->get();
       
        $blogs=blogs::paginate(8);
        $page_title = "Blogs";
            return view('leepFront.blogs',compact('blogs','events','page_title', 'page_description','d_events','m_events','week_events','featureEvents','m','d'));
    }
}
