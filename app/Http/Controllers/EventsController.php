<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Imports\eventImport;

use App\Imports\eventsImport; // Added on 24-09-2021


use App\Models\events;
use App\Models\membership;
use App\Models\admin;
use App\Models\featuredEvents;
use App\Models\User;
use App\Models\participants;
use App\Models\category;
use App\Models\blogs;
use App\Models\country;

use Excel;
use TwitterStreamingApi;
use PublicStream;
use DateTime;
use DateInterval;
use DatePeriod;
use Validator;
use Crypt;

class EventsController extends Controller
{
    
    private $event, $country, $user;
    
    public function __construct()
    {
        // $this->middleware('admin');
        $this->event = new events;
        $this->country = new country;
        $this->category = new category;
        $this->user = new User;
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
        // dd($request->all());


        Excel::import(new eventsImport, $request->file('file')->store('temp'));
        return back();

        $data = [];
        $request->validate([
            'file' => ['required',function ($attribute, $value, $fail) {
                if (!in_array($value->getClientOriginalExtension(), ['csv'])) {
                    $fail('Incorrect :attribute type chosen.');
                }
            }]
        ]);

        $file = file($request->file->getRealPath());

        // Inorder to remove header use: // $data = array_slice($file, 1);
        // Splitting data after every 1000 lines
        $parts = (array_chunk($file, 5000));
        foreach ($parts as $index=>$part) {
            $file_name = public_path('pending-files/'.date('y-m-d-H-i-s').$index. '.csv');
            file_put_contents($file_name, $part);
        }

        $this->event->importToDb();
        session()->flash('status', 'Queued for importing');
        return redirect()->route('admin.events')->with($data);
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

    // ========================================== Login user's event ==========================================

    public function usersEvents(Request $request){
        $user = Auth::user();
        $events = events::where('user_id',$user->id)->where('status', '!=', 'Deleted')->get();
        $data['user'] = $user;
        $data['events'] = $events;
        return view('user.events.index',$data);
    }

    // ========================================== Edit event of user ==========================================

    public function editEvent($value=''){
        $this->middleware('auth');
        $user = Auth::user();
        $event=events::find($value);
        if($user->id ==$event->user_id)
        {
            return view('user.events.editEvent',compact('event')); // user/events/editEvent
        }else{
            return redirect('/');
        }
    }

    // ========================================== Delete event of user ==========================================

    public function deleteEvent($id){
        $this->middleware('auth');
        $user = Auth::user();
        $event=events::find($id);
        if($user->id == $event->user_id){
            $event->status='Deleted';
            $event->save();
            // dd($event);
            return redirect('my-events')->with(['successMsg'=>'Event Deleted Successfully']);
        }else{
            return redirect()->back()->with(['errorMsg'=>'Unknown Events']);
        }
    }


    /* Start: Zeeshan code */
    // Admin add new event
    public function addEventByAdmin( Request $request )
    {
        try 
        {
            // dd($request->file('download1'));
            if($request->isMethod('get'))
            {
                // Initialization
                    $data = [];
                // End Initialization

                $data['countries_list'] = $this->country->getCountriesList();
            
                $data['categories_list'] = $this->category->getCategoriesList();

                $data['event_champions'] = $this->user->getUserByRoleSlug('event_champ');

                return view('admin.events.add_event', $data);
            }
            else
            {
                // Initialization
                    $data = $request->input();
                    $feature_image  = $request->file('feature_picture');
                    $download1      = $request->file('download1');
                    $download2      = $request->file('download2');
                    $download3      = $request->file('download3');
                    $extra_image1   = $request->file('extra_image1');
                    $extra_image2   = $request->file('extra_image2');
                    $extra_image3   = $request->file('extra_image3');
                // End Initialization

                $rules = $this->event->validations();
                $validator = Validator::make($request->all(), $rules);


                if ($validator->fails()) {
                    return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $event = $this->event->storeEvent($data);

                if ( $event->id ) {
                    // storing event feature image
                    if ( isset($feature_image) ) {
                        $path = '/assets/events/images';
                        $table = $event->getTable();
                        $where_clause = [
                            'id' => $event->id,
                        ];
                        $column_name = 'feature_picture';
                        

                        $status = storeFiles($path, $table, $where_clause, $column_name, $feature_image);
                        if ( $status && $status != 1 ) {
                            return redirect()->back()->with('error', 'Feature image not stored!');
                        }
                    }

                    /* Start: Store Attachments */
                        // storing Attachment download1
                        if ( $download1 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'download1';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $download1);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Download 1 attachment not stored!');
                            }
                        }

                        // storing Attachment download2
                        if ( $download2 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'download2';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $download2);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Download 2 attachment not stored!');
                            }
                        }

                        // storing Attachment download3
                        if ( $download3 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'download3';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $download3);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Download 3 attachment not stored!');
                            }
                        }
                    /* End: Store Attachments */

                    /* Start: Store Extra Images */
                        // storing Attachment extra_image1
                        if ( $extra_image1 ) {
                            $path = '/assets/events/images';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'extra_image1';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $extra_image1);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Extra image1 attachment not stored!');
                            }
                        }

                        // storing Attachment extra_image2
                        if ( $extra_image2 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'extra_image2';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $extra_image2);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Extra image 2 attachment not stored!');
                            }
                        }

                        // storing Attachment extra_image3
                        if ( $extra_image3 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'extra_image3';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $extra_image3);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Extra image3 attachment not stored!');
                            }
                        }
                    /* End: Store Extra Images */

                    return redirect()->route('admin.events')->with('success', 'Event Has Been Successfully Stored.');
                }
                else {
                    return redirect()->back()->with('error', 'Something Went Wrong!');
                }
            }
        } catch (DecryptException $e) {
            //
        }
    }

    public function editEventByAdmin( Request $request, $id = null )
    {
        try 
        {
            if($request->isMethod('get'))
            {
                // Initialization
                    $id = Crypt::decrypt($id);
                    $data = [];
                // End Initialization
                   
                $data['countries_list'] = $this->country->getCountriesList();
            
                $data['categories_list'] = $this->category->getCategoriesList();

                $data['event_champions'] = $this->user->getUserByRoleSlug('event_champ');

                $data['event'] = $this->event->getEventDetail( $id, null );
                
                return view('admin.events.edit_event', $data);
            }
            else
            {
                // Initialization
                    $data = $request->input();
                    $data['event_id'] = Crypt::decrypt($data['event_id']);
                    $feature_image  = $request->file('feature_picture');
                    $download1      = $request->file('download1');
                    $download2      = $request->file('download2');
                    $download3      = $request->file('download3');
                    $extra_image1   = $request->file('extra_image1');
                    $extra_image2   = $request->file('extra_image2');
                    $extra_image3   = $request->file('extra_image3');
                // End Initialization

                $rules = $this->event->validations(
                    [
                        'name' => 'required|unique:events,name,'.$data['event_id'],
                        'states' => 'nullable',
                    ]
                );
                $validator = Validator::make($request->all(), $rules);


                if ($validator->fails()) {
                    return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $event = $this->event->updateEvent($data); 

                if ( $event->id ) {
                    // storing event feature image
                    if ( isset($feature_image) ) {
                        $path = '/assets/events/images';
                        $table = $event->getTable();
                        $where_clause = [
                            'id' => $event->id,
                        ];
                        $column_name = 'feature_picture';
                        

                        $status = storeFiles($path, $table, $where_clause, $column_name, $feature_image);
                        if ( $status && $status != 1 ) {
                            return redirect()->back()->with('error', 'Feature image not stored!');
                        }
                    }

                    /* Start: Store Attachments */
                        // storing Attachment download1
                        if ( $download1 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'download1';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $download1);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Download 1 attachment not stored!');
                            }
                        }

                        // storing Attachment download2
                        if ( $download2 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'download2';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $download2);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Download 2 attachment not stored!');
                            }
                        }

                        // storing Attachment download3
                        if ( $download3 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'download3';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $download3);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Download 3 attachment not stored!');
                            }
                        }
                    /* End: Store Attachments */

                    /* Start: Store Extra Images */
                        // storing Attachment extra_image1
                        if ( $extra_image1 ) {
                            $path = '/assets/events/images';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'extra_image1';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $extra_image1);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Extra image1 attachment not stored!');
                            }
                        }

                        // storing Attachment extra_image2
                        if ( $extra_image2 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'extra_image2';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $extra_image2);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Extra image 2 attachment not stored!');
                            }
                        }

                        // storing Attachment extra_image3
                        if ( $extra_image3 ) {
                            $path = '/assets/events/attachments';
                            $table = 'event_attachments';
                            $where_clause = [
                                'event_id' => $event->id,
                            ];
                            $column_name = 'extra_image3';

                            $status = storeFiles($path, $table, $where_clause, $column_name, $extra_image3);
                            if ( $status && $status != 1 ) {
                                return redirect()->back()->with('error', 'Extra image3 attachment not stored!');
                            }
                        }
                    /* End: Store Extra Images */

                    return redirect()->route('admin.events')->with('success', 'Event Has Been Successfully Updated.');
                }
                else {
                    return redirect()->back()->with('success', 'Event Has Been Successfully Updated.');
                    //return redirect()->back()->with('error', 'Something Went Wrong!');
                }

            }
        } 
        catch (DecryptException $e) {
            //
        }
    }
    /* End: Zeeshan code */
}
