{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')


        <div class="event-main">
            <div class="container">
                <div class="event-detail-wrapper">
                    <div class="row">
                        <div class="col-md-6 event-detail-left">
                            <h4>@isset($event->name){{$event->name}}@endif</h4>
                            <p>Event Category</p>
                        </div>
                        <div class="col-md-6 event-detail-right">
                            <div> <a href="#" class="btn btn-outline-secondary" type="submit">Delete Event</a>
                                <a href="#" class="btn btn-outline-success" type="submit">Edit Event</a>
                            </div>
                        </div>
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
                                                alt="">	{{$event->ph_num}}</p>
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
                            <div class="schedule-one">
                                <h6>Event Categories</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="container">{{"Category 1"}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">{{"Category 2"}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">{{"Category 3"}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">{{"Category 4"}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">{{"Category 5"}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="container">{{"Category 6"}}
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- champion-box -->


                <div class="event-card">
                    <div class="row">

                        <div class="col-md-8">
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
                        <div class="col-md-4">
                            <div class="schedule-four">
                                <h6>Champion Social Media Links</h6>
                                <div class="schedule-detail text-center mt-1">
                                	{{-- fb --}}
                                    <p class="estimate-date"> <a href="#"><img
                                                src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-facebook-square.svg')}}"
                                                alt=""> {{$event->social_link1}} </a></p>
                                                {{-- Twiter --}}
                                    <p class="estimate-date"><a href="#"><img
                                                src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-instagram.svg')}}"
                                                alt=""> {{$event->social_link2}} </a> </p>
                                                {{-- youtube --}}
                                    <p class="estimate-date"><a href="#"><img
                                                src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-twitter-square.svg')}}"
                                                alt=""> {{$event->social_link3}}</a> </p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- champion-box-end-->

                <!-- champion-contact-information -->
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
                                    <p>Address 1 / Referral Name:</p>
                                    <p>Address 2: State / Province:</p>
                                    <p>Country: </p>
                                    <p>Zip Code:</p>
                                </div>
                                <div class="col-md-3 address-two">
                                    <p>{{$event->event_champion}}</p>
                                    <p>{{$event->state}}</p>
                                    <p>{{$event->country1}}</p>
                                    <p>{{$event->zip}}</p>
                                </div>

                                <div class="col-md-3 address-one">
                                    <p>Contact Person:</p>
                                    <p>E-mail or Social Media Handle:</p>
                                    <p>Phone Number:</p>
                                    <p>Contact Url</p>
                                </div>
                                <div class="col-md-3 address-four">
                                    <p>{{$event->contact_person}}</p>
                                    <p>mobilize@stopthewall.org</p>
                                    <p>{{$event->email_form}}</p>
                                    <p>{{$event->contact_link}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
                        <div class="download-box">
                            <div class="col-md-12 text-right download">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                        alt=""></a>
                            </div>
                            <div class="col-md-12 text-center media-link">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                        alt=""></a>
                                <p>Title of the Document will go here</p>
                            </div>

                        </div>
                        <div class="download-box">
                            <div class="col-md-12 text-right download">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                        alt=""></a>
                            </div>
                            <div class="col-md-12 text-center media-link">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                        alt=""></a>
                                <p>Title of the Document will go here</p>
                            </div>

                        </div>
                        <div class="download-box">
                            <div class="col-md-12 text-right download">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                        alt=""></a>
                            </div>
                            <div class="col-md-12 text-center media-link">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                        alt=""></a>
                                <p>Title of the Document will go here</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>



@endsection