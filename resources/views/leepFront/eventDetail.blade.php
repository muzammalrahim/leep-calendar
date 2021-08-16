{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    <div class="hero-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="">
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol> -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    @if(File::exists(public_path()."/leep_calender/event/img/".$event->extra_image1) && isset($event->extra_image1))
                        <img src="{{asset('leep_calender/event/img/'.$event->extra_image1)}}" class="d-block w-100" alt="...">
                    @else
                       {{-- <img src="{{asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg')}}" class="d-block w-100" alt="..."> --}}
                      @isset(App\Models\participants::first()->banner)
                        <img src="{{URL::asset('/leep_calender/images/Developer Assets/'.App\Models\participants::first()->banner)}}" class="d-block w-100" alt="..." >
                      @endif
                    @endif
 
                    <div class="carousel-caption  d-md-block">
                      <div class="warmup-after mt-5">


                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    @if(File::exists(public_path()."/leep_calender/event/img/".$event->extra_image2) && isset($event->extra_image2))
                        <img src="{{asset('leep_calender/event/img/'.$event->extra_image2)}}" class="d-block w-100" alt="...">
                    @else
                       {{-- <img src="{{asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg')}}" class="d-block w-100" alt="..."> --}}
                      @isset(App\Models\participants::first()->banner)
                        <img src="{{URL::asset('/leep_calender/images/Developer Assets/'.App\Models\participants::first()->banner)}}" class="d-block w-100" alt="..." >
                      @endif
                    @endif
 
                    <div class="carousel-caption  d-md-block">
                      <div class="warmup-after mt-5">

                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    @if( File::exists(public_path()."/leep_calender/event/img/".$event->extra_image3) &&  isset($event->extra_image3))
                        <img src="{{asset('leep_calender/event/img/'.$event->extra_image3)}}"
                      class="d-block w-100" alt="...">
                    @else
                       {{-- <img src="{{asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg')}}"
                      class="d-block w-100" alt="..."> --}}
                      @isset(App\Models\participants::first()->banner)
                        <img src="{{URL::asset('/leep_calender/images/Developer Assets/'.App\Models\participants::first()->banner)}}" class="d-block w-100" alt="..." >
                      @endif
                    @endif
                    <div class="carousel-caption  d-md-block">
                      <div class="warmup-after mt-5">


                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <!-- <span class="sr-only">Previous</span> -->
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <!-- <span class="sr-only">Next</span> -->
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="calender">
              <div class="calender-head">
                <h4>WHAT'S HAPPENING ...</h4>
              </div>
              <!-- Tabs -->
              <section id="tabs">
                <div class="container">

                  <div class="row">
                    <div class="col-xs-12 ">
                      <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Day</a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Week</a>
                          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Month</a>

                        </div>
                      </nav>
                      <div class="tab-content  px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                          aria-labelledby="nav-home-tab">
                          <div class="calender-scroll">
                            @foreach($d_events as $d_e)
                            <div class="calender-body">
                              <div class="row">
                                <!--<div class="col-md-2 date-box">-->
                                <!--  <span>{{$d_e->d_start}}</span>-->
                                <!--  <b> {{date("M", strtotime(date("Y")."-".$d_e->m_start."-01"))}}</b>-->
                                <!--</div>-->
                                <div class="col-md-11 date-data" style='padding-left: 30px;'>
                                  <h6  onclick="window.location.replace('{{URL::asset('event/'.$d_e->id)}}','self'); " style=" cursor:pointer;">
                                    {{\Illuminate\Support\Str::limit($d_e->name,17)}}
                                  </h6>
                                  <p>{{\Illuminate\Support\Str::limit($d_e->description,60)}}</p>
                                </div>
                              </div>

                            </div>
                            @endforeach
                          </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                          <div class="calender-scroll">
                            @isset($m_events[0]->id)
                              @foreach($m_events as $m_e)
                                <div class="calender-body">
                                  <div class="row">
                                    <!--<div class="col-md-2 date-box">-->
                                    <!--  <span>{{$m_e->d_start}}</span>-->
                                    <!--  <b> {{date("M", strtotime(date("Y")."-".$m_e->m_start."-01"))}}</b>-->
                                    <!--</div>-->
                                    <div class="col-md-11 date-data" style='padding-left: 30px;'>
                                      <h6  onclick="window.location.replace('{{URL::asset('event/'.$m_e->id)}}','self'); " style=" cursor:pointer;">
                                        {{\Illuminate\Support\Str::limit($m_e->name,17)}}
                                      </h6>
                                      <p>{{\Illuminate\Support\Str::limit($m_e->description,60)}}</p>
                                    </div>
                                  </div>

                                </div>
                              @endforeach
                              @else
                                 {{--<div class="calender-body">
                                  <div class="row">
                                    <div class="col-md-2 date-box">
                                    </div>
                                    <div class="col-md-9 date-data">
                                      <h6></h6>
                                      <p></p>
                                    </div>
                                  </div>
                                </div>--}}
 
                              @endif
                          </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="calender-scroll">
                            @isset($week_events[0]->id)
                              @foreach($week_events as $w_e)
                                <div class="calender-body">
                                  <div class="row">
                                    <!--<div class="col-md-2 date-box">-->
                                    <!--  <span>{{$w_e->d_start}}</span>-->
                                    <!--  <b> {{date("M", strtotime(date("Y")."-".$w_e->m_start."-01"))}}</b>-->
                                    <!--</div>-->
                                    <div class="col-md-11 date-data" style='padding-left: 30px;'>
                                      <h6  onclick="window.location.replace('{{URL::asset('event/'.$w_e->id)}}','self'); " style=" cursor:pointer;">
                                        {{\Illuminate\Support\Str::limit($w_e->name,17)}}
                                      </h6>
                                      <p>{{\Illuminate\Support\Str::limit($w_e->description,60)}}</p>
                                    </div>
                                  </div>

                                </div>
                              @endforeach
                              @else
                                 {{--<div class="calender-body">
                                  <div class="row">
                                    <div class="col-md-2 date-box">
                                    </div>
                                    <div class="col-md-9 date-data">
                                      <h6></h6>
                                      <p></p>
                                    </div>
                                  </div>
                                </div>--}}
 
                              @endif
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </section>
              <!-- ./Tabs -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="green">
    </div>
    
    <!-- End hero-box -->
    

    <div class="event-main">
        <div class="container">
            <div class="event-detail-wrapper">
                  @if(session()->has('errorMsg'))
                      <div class="alert alert-danger">
                          <ul style="text-align: center;">
                              {{session('errorMsg')}}
                          </ul>
                      </div>
                  @endif
                  @if(session()->has('successMsg'))
                      <div class="alert alert-success">
                          <ul style="text-align: center;">
                              {{session('successMsg')}}
                          </ul>
                      </div>
                  @endif
                  @if ($errors->any())
                      <div class="alert alert-danger  col-12">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                <div class="row">
                    <div class="col-md-6 event-detail-left">
                        <h4>@isset($event->name){{$event->name}}@endif</h4>
                        <p>
                            @isset($event->cat1->name)
                                {{$event->cat1->name}}   
                            @elseif(isset($event->cat2->name))
                                {{$event->cat2->name}}                                
                            @elseif(isset($event->cat3->name))
                                {{$event->cat3->name}}                                
                            @elseif(isset($event->cat4->name))
                                {{$event->cat4->name}}                                
                            @elseif(isset($event->cat5->name))
                                {{$event->cat5->name}}                                
                            @elseif(isset($event->cat6->name))
                                {{$event->cat6->name}}                                
                            @endif


                        </p>
                    </div>
                    @if(Auth::id()==$event->user_id)
                      <div class="col-md-6 event-detail-right">
                          <div> <a href="{{URL::asset('deleteEvent/'.$event->id)}}" class="btn btn-outline-secondary" type="submit">Delete Event</a>
                              <a href="{{URL::asset('editEvent/'.$event->id)}}" class="btn btn-outline-success" type="submit">Edit Event</a>
                          </div>
                      </div>
                    @endif
                    <div class="col-md-12">
                        <div class="event-description">
                            <h6>Event Description</h6>
                            <p>@isset($event->description){{$event->description}}@endif</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- event-schedule-box -->
            <div class="schedule">
                <div class="row">
                    <div class="col-md-5">
                        <div class="schedule-one">
                            <h6>Event Details</h6>
                            <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            </p>
                            <div class="row">
                                <div class="col-md-1"> <img
                                        src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon material-location-on.svg')}}"
                                        alt=""></div>
                                <div class="col-md-11 location-img">
                                    <p>
                                      @isset($event->location_based){{$event->location_based}}@endif
                                        
                                    </p>
                                </div>
                            </div>



                            <div class="row cell-mail">
                                <div class="col-md-6">
                                    <p> <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon ionic-ios-call.svg')}}"
                                            alt=""> {{$event->ph_num}}</p>
                                </div>
                                <div class="col-md-6">
                                    <p> <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon ionic-md-mail.svg')}}"
                                            alt="">{{$event->email_form}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="schedule-one">
                            <h6>Event Schedule</h6>
                            <div class="schedule-detail text-center">
                                <p class="estimate-date">Estimated Start Date</p>
                                <p class="estimate-date-one"> {{date("F", strtotime(date("Y")."-".$event->m_start."-01")).' '. $event->d_start}} , {{$event->y_start}}</p>
                                <p class="estimate-date">Estimated End Date</p>
                                <p class="estimate-date-one"> {{date("F", strtotime(date("Y")."-".$event->m_end."-01")).' '. $event->d_end}} , {{$event->y_end}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="schedule-one" style="height: auto;min-height: 280px;">
                            <h6>Event Categories</h6>
                            <div class="row">
                                @isset($event->cat1->name)
                                    <div class="col-md-6">
                                        <label class="container" style="margin-bottom: 5px !important; ">{{($event->cat1->name)}}

                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endif
                                @isset($event->cat2->name)
                                    <div class="col-md-6">
                                        <label class="container" style="margin-bottom: 5px !important; ">{{($event->cat2->name)}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endif
                                @isset($event->cat3->name)
                                    <div class="col-md-6">
                                        <label class="container" style="margin-bottom: 5px !important; ">{{($event->cat3->name)}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endif
                                @isset($event->cat4->name)
                                <div class="col-md-6">
                                    <label class="container" style="margin-bottom: 5px !important; ">{{($event->cat4->name)}}
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                @endif
                                @isset($event->cat5->name)
                                    <div class="col-md-6">
                                        <label class="container" style="margin-bottom: 5px !important; ">@isset($event->cat5->name){{($event->cat5->name)}}@endif
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endif
                                @isset($event->cat3->name)
                                    <div class="col-md-6">
                                        <label class="container" style="margin-bottom: 5px !important; ">{{($event->cat3->name)}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- champion-box -->


            <div class="event-card">
                <div class="row">

                    <div class="col-md-8" style="display: none;">
                        <div class="event-champion">
                            <h6>Event Champion</h6>
                        </div>
                        <div class="focal-contact">

                            <div class="row">
                                <div class="col-md-4 focal-person">
                                    <div><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 256.svg')}}"
                                            alt=""></div>
                                    <div class="user-name"><b>Domenico Lehner</b>
                                        <p>Darrel_Hn87@yahoo.com</p>
                                    </div>
                                    <!-- hover-box-start-->
                                    <div class="hover-card">
                                        <div class="col-md-12 focal-hover">
                                            <div><img
                                                    src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 256.svg')}}"
                                                    alt=""></div>
                                            <div class="user-name"><b>Domenico Lehner</b>
                                                <p>Darrel_Hn87@yahoo.com</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-1"> <i class="fa fa-map-marker"
                                                    aria-hidden="true"></i></div>
                                            <div class="col-md-11 location-img">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing
                                                    elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                                                    dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et
                                                </p>
                                            </div>
                                        </div>



                                        <div class="row cell-mail">
                                            <div class="col-md-6">
                                                <p><i class="fa fa-phone" aria-hidden="true"></i>Lorem ipsum dolor
                                                    sit</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <i class="fa fa-envelope"></i> Lorem ipsum dolor sit</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- hover-box-end-->
                                </div>
                                <div class="col-md-4 focal-person">
                                    <div><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" alt="">
                                    </div>
                                    <div class="user-name"><b>Ms. Misael Schiller</b>
                                        <p>Kaylin.McClure@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4 focal-person">
                                    <div><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" alt="">
                                    </div>
                                    <div class="user-name"><b>Rowena Kuhn I</b>
                                        <p>Dustin71@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4 focal-person">
                                    <div><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 256.svg')}}"
                                            alt=""></div>
                                    <div class="user-name"><b>Allie Gerlach</b>
                                        <p>Ruthe_Terry@yahoo.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4 focal-person">
                                    <div><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" alt="">
                                    </div>
                                    <div class="user-name"><b>Dagmar Becker</b>
                                        <p>Sally72@hotmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-4 focal-person">
                                    <div><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" alt="">
                                    </div>
                                    <div class="user-name"><b>Kitty West</b>
                                        <p>Petra86@hotmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- To be removed --}}
                    @if($event->socail_link1!='' || $event->socail_link1!='' || $event->socail_link1!='')
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                          <div class="schedule-four">
                              <h6>Champion Social Media Links</h6>
                              <div class="schedule-detail text-center mt-1">
                                {{-- fb --}}
                                  @if($event->socail_link1!='')
                                    <p class="estimate-date" style="    clear: both;float: left;"> <a href="{{URL::asset('$event->socail_link1')}}"><img style="float: left;padding-left: 43px;" 
                                              src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-facebook-square.svg')}}"
                                              alt=""> {{$event->socail_link1}} </a></p>
                                              {{-- Twiter --}}
                                  @endif
                                  @if($event->socail_link3!='')                              
                                    <p class="estimate-date" style="    clear: both;float: left;"><a href="{{URL::asset('$event->socail_link3')}}"><img style="float: left;padding-left: 43px;" 
                                              src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-instagram.svg')}}"
                                              alt=""> {{$event->socail_link3}} </a> </p>
                                              {{-- youtube --}}
                                  @endif
                                  @if($event->socail_link2!='')                              
                                    <p class="estimate-date" style="  float: left;  clear: both;"><a href="{{URL::asset('$event->socail_link2')}}"><img style="float: left;padding-left: 43px;"
                                              src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-twitter-square.svg')}}"
                                              alt=""> {{$event->socail_link2}}</a> </p>
                                  @endif
                              </div>

                          </div>
                      </div>
                    @endif
                    {{-- End to be removed --}}
                </div>
            </div>
            <!-- champion-box-end-->

            <!-- champion-contact-information -->
            @isset((Auth::user()->membership->type))
                @if(Auth::user()->membership->type!='Silver' || Auth::id()==$event->user_id)
                  <div class="champion-info-wrapper">
                      <h6>EVENT CHAMPION CONTACT INFORMATION</h6>
                      <div class="champion-box">
                          <div class="text-center">
                              <p>Champion/Recommended Resource:</p>
                              <span class="text-center">Multiple Sponsors. See PENGON for information</span>
                          </div>
                          <div class="champ-address">
                              <div class="row">
                                  <div class="col-md-3 address-one">
                                      <p class="addresing">Address 1 / Referral Name:</p>
                                      <p class="address-height">Address 2: State / Province:</p>
                                      <p class="addresing">Country: </p>
                                      <p class="addresing">Zip Code:</p>
                                  </div>
                                  <div class="col-md-3 address-two">
                                      <p class="addresing-one">{{$event->champ_name}}</p>
                                      <p  class="address-height-one">{{$event->champ_address}}</p>
                                      <p class="addresing-one">{{$event->champ_country}}</p>
                                      <p class="addresing-one">{{$event->zip}}</p>
                                  </div>

                                  <div class="col-md-3 address-one">
                                      <p class="addresing">Contact Person:</p>
                                      <p class="addresing">E-mail or Social Media Handle:</p>
                                      <p class="addresing">Phone Number:</p>
                                      <p class="addresing">Contact Url</p>
                                  </div>
                                  <div class="col-md-3 address-four">
                                      <p class="addresing-two">{{$event->contact_person}}</p>
                                      <p class="addresing-two">{{$event->email_form}}</p>
                                      <p class="addresing-two">{{$event->ph_num}}</p>
                                      <p class="addresing-two">{{$event->contact_link}}</p>
                                  </div>

                              </div>
                          </div>
                      </div>
                  </div>
                @else
                  <div class="champion-info-wrapper"  style="padding-bottom: 90px;">
                    <h6>EVENT CHAMPION CONTACT INFORMATION</h6>
                    <div class="blurr-back">
                      <div class="blurry text-center">
                        <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Group1657_blur_Image.png')}}" alt="">
                        <h4>PREMIUM ACCESS ONLY</h4>
                        <h6>Upgrade to Premium/Gold Membership to View</h6>
                        <a href="{{URL::asset('becomeMember')}}" class="btn btn-outline-secondary" type="submit">Upgrade Membership</a>
                      </div>
                    </div>                      
                  </div>
                @endif
                @else
                  <div class="champion-info-wrapper"  style="padding-bottom: 90px;">
                    <h6>EVENT CHAMPION CONTACT INFORMATION</h6>
                    <div class="blurr-back">
                      <div class="blurry text-center">
                        <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Group1657_blur_Image.png')}}" alt="">
                        <h4>PREMIUM ACCESS ONLY</h4>
                        <h6>Upgrade to Premium/Gold Membership to View</h6>
                        <a href="{{URL::asset('becomeMember')}}" class="btn btn-outline-secondary" type="submit">Upgrade Membership</a>
                      </div>
                    </div>                      
                  </div>
            @endif
            <!-- Video-box-->
            <div class="video-wrapper">
                <div class="container">
                    <p>TOPIC & SUPPORTING VIDEOS</p>
                    <div class="videos">
                        <div class="one">
                            <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/photo-1.svg')}}" alt="">
                        </div>
                        <div class="two"> <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Image 1.svg')}}" alt="">
                        </div>
                        <div class="one"> <img
                                src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/photo-1511578314322-379afb476865.svg')}}"
                                alt=""></div>
                    </div>
                </div>
            </div>


            <!-- supporting-box -->
            <div class="supporting-wrapper">
                <p>TOPIC & SUPPORTING DOCUMENTS</p>
                <div class="download-header">
                  @isset($event->download1)
                    <div class="download-box">
                            <div class="col-md-12 text-right download">
                            <a  href="{{URL::asset('downloadPdf/'.$event->id.'/1')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                    alt=""></a>
                        </div>
                        <div class="col-md-12 text-center media-link">
                            <a href=""><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                    alt=""></a>
                            <p>{{substr($event->download_title1,0,22)}}</p>
                        </div>

                    </div>
                  @endif
                  @isset($event->download2)
                    <div class="download-box">
                        <div class="col-md-12 text-right download">
                            <a href="{{URL::asset('downloadPdf/'.$event->id.'/2')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                    alt=""></a>
                        </div>
                        <div class="col-md-12 text-center media-link">
                            <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                    alt=""></a>
                            <p>{{substr($event->download_title2,0,20)}}</p>
                        </div>

                    </div>
                  @endif
                  @isset($event->download3)
                    <div class="download-box">
                        <div class="col-md-12 text-right download">
                            <a href="{{URL::asset('downloadPdf/'.$event->id.'/3')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                    alt=""></a>
                        </div>
                        <div class="col-md-12 text-center media-link">
                            <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                    alt=""></a>
                            <p>{{substr($event->download_title3,0,20)}}</p>
                        </div>

                    </div>
                  @endif
                </div>
            </div>
        </div>

    </div> 
{{--     @if(session()->has('error'))
        <script>
            alert("{{ session()->get('error') }}");
        </script>
    @endif 
 --}}

@endsection