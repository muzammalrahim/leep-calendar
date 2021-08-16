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
                        <img src="{{URL::asset('leep_calender/event/img/'.$event->extra_image1)}}" class="d-block w-100" alt="...">
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
                        <img src="{{URL::asset('leep_calender/event/img/'.$event->extra_image2)}}" class="d-block w-100" alt="...">
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
                    @if(isset($event->extra_image3))
                        <img src="{{URL::asset('leep_calender/event/img/'.$event->extra_image3)}}"
                      class="d-block w-100" alt="...">
                    @else
                      {{--  <img src="{{asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg')}}"
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
    {{-- LEGEND --}}
    <div class="legend-wrapper">
        <div class="container">
            <div class="legend-page">
                {{-- <div class="legend-head">
                    <h3>Legend<sub>How Events in LEEP Calendar are Coded</sub></h3>
                    <p><b>Format Events:</b>All events titles (2018 forward) have a hierarchy of information and
                        their namesadhere to the following structure:</p>
                    <p><b>1) Keyword</b>(if needed), followed by a coma.</p>
                    <b>2) Event name</b>
                    <p class="pl-3"> a) Coma followed by Ntl., Intl., World, Global or other location designation.
                        <br>
                        b) Parenthesis (Descriptive Word) if applicable <br>
                        c) Parenthesis (Religious Abbreviation) if applicable <br>
                        d) Parenthesis (Country / State Abbreviations) if applicable <br>
                        e) Parenthesis (Anniversary Year) if applicable
                    </p>

                    <p><b>3) Date:</b> Start Month/Day/Year through End Month/Day/Year</p>

                    <h5> <i>The United States of America is the default country.</i> </h5>

                    <div class="example-box">
                        <h6>Example: iPod Day, Intl. (2001): October 23</h6>
                        <p>Translation: International iPod Day celebrates the anniversary of the premiere of theiPod
                            on October 23, 2001.</p>
                        <h6>Example: Sausage Week, (UK): October 28 - November 3 (est)</h6>
                    </div>
                </div> --}}
                <div class="legend-title">
                    <h1 class="">{{$blog->title}}</h1>
                    <div class="row">
                        <div class="col-md-12">
                            {!! $blog->description !!}
                        </div>
                    </div>
                    <br>
                </div>

            </div>
        </div>
    </div>
    {{-- END LENGEND --}}
@endsection