<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\admin;
use Illuminate\Http\Request;
use App\Imports\eventImport;
use App\Models\featuredEvents;
use App\Models\User;
use App\Models\participants;
use App\Models\category;
use App\Models\blogs;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\membership;
use Excel;
use TwitterStreamingApi;
use PublicStream;
use DateTime;
use DateInterval;
use DatePeriod;

class EventsController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('admin');
    }
    public function events(){
        $events=events::all();
        $user=User::all();
        $page_title = 'Events';
        $page_Heading1='Events';
        return view('admin.events',compact('events','user','page_Heading1')); // admin/events
    }
    public function evecc(){
        $events=events::all();
        return view('admin.userEvents',compact('events'));
    }
    public function eventRegUsers($id)
    {
        // dd($id);
        $event=participants::where('event_id',$id)->get();
        // dd($event->users);
        // dd($events);

        $page_Heading1='Events';
        $page_Heading2='Registered Members';
        // return view('admin.userEvents',compact('events'));
        return view('admin.userRegisteredEvents',compact('event','page_Heading1','page_Heading2'));
    }
    public function feature($id){
        $events=events::find($id);
        // dd($events);
        if(isset($events->id))
        {
            $feC=featuredEvents::count();
            $ev=featuredEvents::where('events_id',$id)->first();
            $newF=new featuredEvents();
            $newF->events_id=$id;
            if(!isset($ev->id) && $feC<3)
            {
                $newF->save();
                return redirect('admin/events')->with(['successMsg'=>'added successfully']);
            }
            else{
                return redirect()->back()->with(['errorMsg'=>"Can't add more than 3 featured events"]);
            }
        }else{
            return redirect()->back()->with("['successMsg'=>'Already added']");
        }
    }
    public function unFeature($id){
        $events=featuredEvents::where('events_id',$id)->first();
        if(isset($events->id)){
            $events->delete;
            featuredEvents::where('events_id',$id)->delete();
            // featuredEvents::where('events_id',$id)->first();
        }
        // return view('admin.events',compact('events'));
        return redirect('admin/events')->with("['successMsg'=>'added']");
    }
    public function publishEvent($id){
        $events=events::find($id);
        // dd($events);
        if(isset($events->id))
        {
            // $newF=new featuredEvents();
            $events->status="Approved";
            $events->save();
            return redirect('admin/events')->with(['success'=>'added successfully']);
        }else{
            return redirect()->back()->with("['success'=>'added']");

        }
    }
    public function unPublishEvent($id){
        $events=events::find($id);
        if(isset($events->id)){
            // $newF=new featuredEvents();
            $events->status="Pending";
            $events->save();
            // featuredEvents::where('events_id',$id)->first();
        }
        // return view('admin.events',compact('events'));
        return redirect('admin/events')->with("['success'=>'added']");
    }
    public function searchEvents(Request $request){

      // $msg='hi a.o.a';
      // return response()->json(array('msg'=> $msg), 200);
        $sDate=null;
        if(isset($request->startDate))
        $sDate=//'2022-5-16';
        date('Y-m-d',strtotime($request->startDate));
            // dd($sDate);
        $eDate=null;
        if(isset($request->endDate))
        $eDate=//'2022-5-16';
                date('Y-m-d',strtotime($request->endDate));
        $name=//'Buddha Purnima (H): May 16';
              $request->name;
        $type=$request->type;
        $fetured=$request->fetured;
        $status=$request->status;
        $userid=$request->user;
        $sd= date('d', strtotime($sDate));
        $sm= date('m', strtotime($sDate));
        $sy= date('Y', strtotime($sDate));
        $ed= date('d', strtotime($eDate));
        $em= date('m', strtotime($eDate));
        $ey= date('Y', strtotime($eDate));
        $country= $request->country;

        $events=events::select('events.*');
        if(isset($fetured) && $fetured!=''){
            $events->Join('featured_events','featured_events.events_id','=','events.id');
        }
        if (isset($name)) {
            $events->where('name', 'like','%'.$name.'%');
        }
        if(isset($userid) ){
            $events->where('user_id',$userid);
        }
        // dd($request->endDate);
        if(isset($sDate) && isset($eDate)){
            $events->whereBetween('start_date',[$sDate,$eDate]);
        }
        if(isset($sDate) && !isset($eDate)){
            $events->where('start_date',$sDate);
            // $events->where('m_start',$sm)->where('d_start',$sd)->where('y_start',$sy);
        }
        if(isset($eDate) && !isset($sDate)){
            $events->where('end_date',$eDate);
            // $events->where('d_end'  ,$ed)->where('y_end'  ,$ey)->where('m_end'  ,$em);            
        }
        if(isset($country) && $country!=''){
            $events->where('country1',$country);
        }
        if(isset($type) && $type!=''){
            $events->where('static_change',$type);
        }
        if(isset($status) && $status!=''){
            $events->where('status',$status);
        }
        $events=$events->get();
        // dd($events);
        $msg=$events;
        // return response()->json(array('msg'=> $msg), 200);
        $page_Heading1='Events';
        $page_Heading2='Event Detail';
        return view('admin.events',compact('events','page_Heading1','page_Heading2'));
    }

    public function searchUsers(Request $request){
        $f_name=$request->f_name;
        $l_name=$request->l_name;
        $email=$request->email;
        $memb_type=$request->memb_type;

        $users=User::select('users.*');
        if (isset($f_name)) {
            $users->where('fname', 'like','%'.$f_name.'%');
        }
        // dd($sm);
        if(isset($l_name)){
            $users->where('lname','like','%'.$l_name.'%');
        }
        if(isset($email)){
            $users->where('email'  ,$email);            
        }
        if(isset($memb_type)){
            $m_type=membership::where('type',$memb_type)->first();
            // dd($memb_type);
            $users->where('membership_id'  ,$m_type->id);            
        }
        $users=$users->get();

        $page_Heading1='User';
        $page_Heading2='User Details';

        return view('admin.users',compact('users','page_Heading1','page_Heading2'));
    }

    public function users(){
    $accessToken ='2346194124-vE2QEi7yqt3frb7seEhXvs07nJuztd9zBQiTWig';

    $access_token_secret ='TCZafwEQz23wDgKdDft8uzmuLdwBH7RkzB5DB6yhu07x0';

    $consumer_key ='tMVVRyr7uojm8Y9X2zo13Bi2d';

    $consumer_secret ='0Q9QEvIn40ludvqylfsvODaQYagjoCJUevPLk9ixapVhR658oi';

        // PublicStream::create(
        //     $accessToken,
        //     $access_token_secret,
        //     $consumer_key,
        //     $consumer_secret
        // )->whenHears('@spatie_be', function(array $tweet) {
        //     echo "We got mentioned by {$tweet['user']['screen_name']} who tweeted {$tweet['text']}";
        // })->startListening();
        // dd('');
        $users=User::all();
        $page_Heading1='Users';
        return view('admin.users',compact('users','page_Heading1'));
    }

    public function addBtcAddress(Request $request)
    {

        // try {
            $path = $request->file('file');

            Excel::import(new eventImport, $path);
            return redirect('admin/events');

        // }catch(\Exception $e){
        //     dd('error');
        // }
    }

    public function adminSetting()
    {
        return view('admin.settings');
    }
    public function updateBannerPic(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName =  time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('/leep_calender/images/Developer Assets/'),$imageName);
        $p=participants::first();
        if(!isset($p->id))
            $p=new participants();
        $p->banner=$imageName;
        $p->save();
        return redirect()->back()->with(['successMsg'=>' Updated successfully']);
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|same:password_confirmation',
            'password_confirmation' => 'required',
        ]);
        // dd('z');
        $a=admin::find(Auth::id());
        // dd($request->password);
        $a->password=Hash::make($request->password);
        $a->save();
        return redirect()->back()->with(['successMsg'=>'Password Updated successfully']);
    }
    public function Blogs(){
        $blogs=blogs::all();
        return view('admin.blogs',compact('blogs'));
    }
    public function addBlogs(){
        // $blogs=blogs::all();
        return view('admin.addBlogs');
    }
    public function addBlog(Request $request){
        // dd($request->all());
        $blogs=new blogs();
        $blogs->Page_title=$request->page_title;
        $blogs->title=$request->title;
        $blogs->description=$request->description;
        $blogs->save();
            return redirect()->back()->with(['successMsg'=>"Blog Successfully Added"]);
    }
    public function deleteBlog($id){
        $blogs=blogs::where('id',$id)->first();
        // dd($blogs);
        if(isset($blogs->id)){
            $blogs->delete();
            return redirect()->back()->with(['successMsg'=>"Blog deleted Successfully"]);
        }else{
            return redirect()->back()->with(['errorMsg'=>"Blog deleted Successfully"]);
        }
        return view('admin.blogs',compact('blogs'));
    }
}
