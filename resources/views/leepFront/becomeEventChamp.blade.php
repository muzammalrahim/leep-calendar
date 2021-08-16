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
                    @if(isset($event->extra_image1))
                        <img src="{{asset('leep_calender/event/img/'.$event->extra_image1)}}" class="d-block w-100" alt="...">
                    @else
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
                    @if(isset($event->extra_image2))
                        <img src="{{asset('leep_calender/event/img/'.$event->extra_image2)}}" class="d-block w-100" alt="...">
                    @else
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
                    @if(isset($event->extra_image3))
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
    

        <div class="become-wrapper">
            <div class="container">
                <div class="event-box">
                    <h5>Become an Event Champion</h5>
                    <p>Events and promotions are started by individuals, organizations and governments for a number of
                        reasons: public education, raise awareness, foster action, memorialize an event or person, or
                        even to celebrate something a person or organization has a passion for. Most of the food days
                        would fall in this final category. The point is, you don’t need to be the United Nations in
                        order to create and champion an event. You only need to be organized and publicly declare it. To
                        create an event as an event champion, you’ll need to assemble some information first.</p>


                    <div class="bold-box">
                        <b> 1. Name of your event <br>
                            2. An objective for your event (why are you creating it and what do you want people to do?)
                            <br>
                            3. Date/Dates <br>
                            4. A website or social media page about the event. <br>
                            5. A legitimate contact person with an address, email and phone number. <br>
                            6. A description of your event. <br>
                            7. A masthead image for your event.</b>
                    </div>
                    <p>LEEP Calendar also allows you to include up to three downloadable files (PDF, Word, Excel,
                        PowerPoint), three embedded videos, three additional images, up to three social media links, a
                        physical event address if it is a location based event and a URL for ticket purchases or
                        reservations. </p>
                    <p>The Silver Champion Membership is created for individuals and small organizations
                        with up to three events a year. It’s free. You just need to establish your membership. Gold and
                        Platinum Champion Memberships are for larger organizations and allow for multiple event uploads
                        and multiple event management.</p> <br>
                    <div class="leeps-event">
                        <h6>Is your event a LEEP event?</h6>
                        <p>This is the basic criteria:</p>
                        <div class="leeps-event-bold"><b>1. The event must be open to the public (or a specific
                                membership such as a recognized trade
                                group, government body, faith-based group or association).
                                <br>
                                2. The event cannot violate any
                                laws governing the location of the event.
                                <br>
                                3. All events must have an administrative contact,
                                including name, title, valid phone number and valid email address. This information is
                                viewable by all professional members of LEEP Calendar, but not to the general public.
                                <br>
                                4. The event must have a valid source URL, whether a social media page or its own
                                website.
                            </b>
                        </div>

                    </div>
                    <div class="learn text-center">
                        <b>Learn more about <span>Location-based Event Champions.</span>
                        </b>
                    </div>
                    <div class="note-box text-center">
                        <b>Please Note: <br></b> 
                        <p>Inclusion of your event in LEEP Calendar does not imply endorsement, partnership, affiliation
                            or support for your event by Jubilee LLC, LEEP Calendar, our stakeholders or our members.
                            You may refer to your listing as “As seen on LEEP Calendar”, solely. Jubilee LLC reserves
                            the right to edit or remove events that violate the above or laws governing the location.
                        </p>

                    </div>
                    <div class="ready-event">
                        <b>Are you ready to add your event(s) to LEEP Calendar? Choose the Champion Membership that best
                            matches your needs.</b>
                    </div>

                </div>
            </div>
        </div>
        {{-- ENd become Wrapper --}}

@endsection