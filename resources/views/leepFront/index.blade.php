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

                <div class="carousel-inner">

                  <div class="carousel-item active">

                    @isset(App\Models\participants::first()->banner)
                    <img src="{{URL::asset('leep_calender/images/Developer Assets/'.App\Models\participants::first()->banner)}}"
                      class="d-block w-100" alt="...">
                    @endif

                    <div class="carousel-caption  d-md-block">

                      <div class="warmup-after mt-5">





                      </div>

                    </div>

                  </div>

                  <!--<div class="carousel-item">-->

                  <!--  <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg"-->

                  <!--    class="d-block w-100" alt="...">-->

                  <!--  <div class="carousel-caption  d-md-block">-->

                  <!--    <div class="warmup-after mt-5">-->



                  <!--    </div>-->

                  <!--  </div>-->

                  <!--</div>-->

                  <!--<div class="carousel-item">-->

                  <!--  <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg"-->

                  <!--    class="d-block w-100" alt="...">-->

                  <!--  <div class="carousel-caption  d-md-block">-->

                  <!--    <div class="warmup-after mt-5">-->





                  <!--    </div>-->

                  <!--  </div>-->

                  <!--</div>-->

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

                              @isset($d_e->id)

                                <div class="calender-body">

                                  <div class="row">

                                    <!--<div class="col-md-2 date-box">-->

                                    <!--  <span>{{$d_e->d_start}}</span>-->

                                    <!--  <b> {{date("M", strtotime(date("Y")."-".$d_e->m_start."-01"))}}</b>-->

                                    <!--</div>-->

                                    <div style=" padding-left:30px;   width: 221px;" class="col-md-11 date-data">

                                      <h6  onclick="window.location.replace('{{URL::asset('event/'.$d_e->id)}}','self'); " style=" cursor:pointer;">

                                        {{\Illuminate\Support\Str::limit($d_e->name,17)}}

                                      </h6>

                                      <p>{{\Illuminate\Support\Str::limit($d_e->description,60)}}</p>

                                    </div>

                                  </div>

                                </div>

                                @endif

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

    

    <!--today feature events-->

    <div class="feature-events-wrapper">

      <div class="container">

        <div class="row">

          <div class="col-md-9">

            <div class="today-events">

              <h6>Today's Featured Events</h6>

            </div>

            <div class="row">

              @foreach($featureEvents as $eve)

              <div class="col-md-4">

                <div class="card" style="width: 16rem;">

                  @if(File::exists(public_path()."/leep_calender/event/img/".$eve->events->extra_image1) && isset($eve->events->extra_image1))

                    <img src="{{asset('leep_calender/event/img/'.$eve->event->extra_image1)}}" class="card-img-top" alt="...">

                  @elseif(File::exists(public_path()."/leep_calender/event/img/".$eve->events->extra_image2) && isset($eve->events->extra_image2))

                    <img src="{{asset('leep_calender/event/img/'.$eve->event->extra_image2)}}" class="card-img-top" alt="...">

                  @elseif(File::exists(public_path()."/leep_calender/event/img/".$eve->events->extra_image3) && isset($eve->events->extra_image3))

                    <img src="{{asset('leep_calender/event/img/'.$eve->event->extra_image3)}}" class="card-img-top" alt="...">

                  @else

                    <img src="leep_calender/images/Developer Assets/Event View Page/photo-1511578314322-379afb476865.svg" class="card-img-top" alt="...">

                  @endif

                  <div class="card-body">

                    <h5 class="card-title">

                      {{\Illuminate\Support\Str::limit($eve->events->name,20)}}

                    </h5>

                    <p class="card-text">

                      {{\Illuminate\Support\Str::limit($eve->events->description,70)}}

                      

                    </p>

                  </div>

                  <div class="card-body text-right">

                    <a href="{{URL::asset('event/'.$eve->id)}}" style="color:#007bff !important"  class="card-link">Learn more</a>

                  </div>

                </div>

              </div>

              @endforeach

             </div>

            <div class="row">

              <div class="main-featured-events">

                <h6>Today's Featured Events</h6>



                <p class="main-featured-data">LEEP Calendar is created by marketing and editorial professionals, public

                  relations professionals,

                  journalists, digital media professionals, teachers and event planners. Over 7,000 events in the United

                  States, United Kingdom, Canada, Australia and the world are accessible by industry, location, keyword,

                  date, event champion, length, topic and type of event. Events are meticulously researched, verified

                  and

                  added by our staff and event champions daily. The dynamic nature of LEEP allows you to focus on your

                  business, generate topic specific editorial and/or event calendars, plan travel, and execute strategy

                  in

                  minutes, rather than weeks. Memberships view LEEP free of 3rd party advertising and can import

                  results.

                  Learn more. JOIN TODAY!</p>

              </div>

            </div>

            <div class="row">

              <div class="main-featured-events">

                <h6>Event Champions</h6>



                <p class="main-featured-data">Event champions, LEEP Calendar provides you a rich media platform to

                  promote your on-site event,

                  awareness campaign or promotion. Each event includes date, location, URL to your site, contact

                  information (Contact information is only visible to Professional Paid Members), description, a header

                  image, and up to six category classifications. Event Champions can add a purchase tickets / make a

                  reservation link, three social media follow links, and up to three supporting videos, document

                  downloads

                  and images. LEEP Calendar is the highly targeted, efficient and cost effective addition to your

                  marketing and communications strategy. Each paid event champion membership comes with a minum of one

                  Professional membership. GET STARTED!</p>

              </div>

            </div>

          </div>

          <div class="col-md-3">

            <div class="today-events">

              <h6>Twitter Feed</h6>

            </div>

            <div class="media-object-wrappper">

              @foreach($tweets as $t)

              <div class="media-objects">

                <div class="row">

                  <div class="col-md-12">



                    <div class="media">

                      <div class="media-left">

                        <img src="{{$t['user']['profile_image_url']}}" class="media-object"

                          style="width:60px;border-radius: 20%">

                      </div>

                      <div class="media-body">

                        <h6 class="media-heading">{{$t['user']['name']}}</h6>

                        <span>@ {{$t['user']['screen_name']}}</span>

                      </div>

                    </div>

                  </div>

                  {{-- <div class="col-md-4"> --}}

                    {{-- <a href="#" class="btn btn-outline-primary"><i class="fa fa-twitter">Follow</i> </a> --}}

                  {{-- </div> --}}

                </div>

                <div class="media-detail">

                  <p>

                    {{ preg_replace("@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@",' ',$t['text'])}}

                  </p>



                </div>

                <div class="date">

                  <p>{{date('h:i A',strtotime($t['created_at']))}} | {{date('d M Y',strtotime($t['created_at']))}}</p>

                </div>

              </div>

              @endforeach

            </div>

            <div class="advertising-box">

              <h6>Advertising Space</h6>

              <div class="advertising-pic">

                <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg" alt="">

              </div>

            </div>





          </div>

        </div>

      </div>

    </div>



@endsection