{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    {{-- @dd($event->cat1->image); --}}
    
    @include('leepFront.parts.category_slider')
    
    <div class="eventDetailDiv m-4">
        <div class="row">
            <div class="col-md-2"> 

                @include('layout.leftSidebar')

            </div>
            <div class="col-md-8"> 
                <div class="event-main">
                    <div class="eventsDetail">
                        <div class="event-detail-container">

                            @include('layout.errorMsg')
                              

                            <div class="borderBottom">
                                <div class="row">
                                    <div class="col-md-10 event-detail-left">
                                        @if(isset($event->name))
                                            <h1 class="font-weight-bold text-dark">{{$event->alt_text}}</h1>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <span class="float-right font-color font18 font-weight-bold"> This Date is Estimated </span> 
                                    </div>
                                </div>
                            </div>
                            <div class="eventDetailAndRegions m-4 ">
                                <div class="borderBottom">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="country mb-3"> 
                                                <span class="font-weight-bold"> Country/Region: </span> {{ $event->country1 }} 
                                            </div> 
                                        </div>

                                        <div class="col-md-6">
                                            <div class="eventDate mb-3"> 
                                                <span class="font-weight-bold"> Event Date(s):</span> 
                                                {{-- July 1, 2019 - July 31, 2019  --}}

                                                {{date("F", strtotime(date("Y")."-".$event->m_start."-01")).' '. $event->d_start}} , {{$event->y_start}} - 
                                                    {{date("F", strtotime(date("Y")."-".$event->m_end."-01")).' '. $event->d_end}} , {{$event->y_end}}
                                            </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="eventCategories">
                                                <span class="font-weight-bold"> Event Categories:</span> 
                                                @isset($event->cat1->name)
                                                    <span style="margin-bottom: 5px !important; ">{{($event->cat1->name)}}, </span>
                                                @endif
                                                @isset($event->cat2->name)
                                                    <span style="margin-bottom: 5px !important; ">{{($event->cat2->name)}}, </span>
                                                @endif
                                                @isset($event->cat3->name)
                                                    <span style="margin-bottom: 5px !important; ">{{($event->cat3->name)}}, </span>
                                                @endif
                                                @isset($event->cat4->name)
                                                    <span style="margin-bottom: 5px !important; ">{{($event->cat4->name)}}, </span>
                                                @endif
                                                @isset($event->cat5->name)
                                                    <span style="margin-bottom: 5px !important; ">{{($event->cat5->name)}}, </span>
                                                @endif
                                                @isset($event->cat3->name)
                                                    <span style="margin-bottom: 5px !important; ">{{($event->cat3->name)}} </span>
                                                @endif
                                            </div>

                                            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="lenghtOfFamily mb-3"> <span class="font-weight-bold"> Length of Event: </span> {{ $event->type }}  </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="eventChampion mb-3">
                                                <span class="font-weight-bold"> Event Champion:</span> {{ $event->champ_name }}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="source mb-3">
                                               <span class="font-weight-bold"> Source/Reference URL: </span> {{ $event->url }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="socialLinks mb-3">
                                                <span class="font-weight-bold"> Event Champion Social Media Links:</span>
                                                @if (isset($event->socail_link1))
                                                    <a href="{{ $event->socail_link1 }}"> {{ $event->socail_link1 }}  </a>
                                                @endif

                                                @if (isset($event->socail_link2))
                                                    <a href="{{ $event->socail_link2 }}"> {{ $event->socail_link2 }}  </a>
                                                @endif

                                                @if (isset($event->socail_link3))
                                                    <a href="{{ $event->socail_link3 }}"> {{ $event->socail_link3 }}  </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="eventAddress mb-3">
                                               <span class="font-weight-bold"> Event Address (if available): </span> {{ $event->address1 }}
                                            </div>

                                            <div class="registerPurchase mb-3">
                                                <span class="font-weight-bold"> Register or Purchase Tickets to this Event (if available): </span>
                                                {{ $event->purchas_reserve }}
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row mt-3 borderBottom">
                                    <div class="col-md-12">
                                        <div class="events-description">
                                            <h4 class="font-weight-bold">Description</h4>
                                            <p>@isset($event->description){{$event->description}}@endif</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- event-schedule-box -->
                        <div class="champion-info">
                            
                            <div class="professional-heading">
                                <h6>EVENT CHAMPION CONTACT INFORMATION.</h6>
                            </div>

                            <div class="row m-0">
                               
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
                            <div class="champ-info">
                                <div class="champ-box px-5">
                                    <span class="font-weight-bold"> Champion/Recommended Resource: </span>
                                    <span>Multiple Sponsors. See PENGON for information</span>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> Address 1 / Referral Name:</span>  
                                            {{$event->champ_name}}
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> Address 2:</span>
                                            {{$event->champ_address}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> City:</span>
                                            {{$event->city}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> State / Province:</span>
                                            {{$event->state}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> Country:</span>
                                            {{$event->country2}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> Zip Code:</span>
                                            {{$event->zip}}
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> Contact Person:</span>
                                            {{$event->contact_person}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> E-mail or Social Media Handle:</span>
                                            {{$event->email_form}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> Phone Number:</span>
                                            {{$event->ph_num}}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="font-weight-bold"> PContact URL:</span>
                                            {{$event->contact_link}}
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
            </div> 

            <div class="col-md-2">

                @include('layout.rightSidebar')

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