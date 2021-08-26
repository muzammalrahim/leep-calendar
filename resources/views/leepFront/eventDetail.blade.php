{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    {{-- @dd($event->cat1->image); --}}
    
    @include('leepFront.parts.category_slider')
    
    
    <div class="event-main">
        <div class="eventsDetail">
            <div class="event-detail-box">
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

                <div class="row m-0">
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
                <div class="row m-0">
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
                <div class="row m-0">

                    <div class="col-md-8" style="display: none;">
                        <div class="event-champion">
                            <h6>Event Champion</h6>
                        </div>
                        <div class="focal-contact">

                            <div class="row m-0">
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