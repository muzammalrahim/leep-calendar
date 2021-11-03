{{-- Extends layout --}}
@extends('layout.layoutLeep') {{-- layout/layoutLeep --}}

@section('content')



{{-- Content --}}

    <!-- hero-box -->

    <div class="hero-wrapper mb-4">

      <div class="container123">

        <div class="row m-0">

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 px-lg-6 px-md-5 px-lg-3 px-0">

            <div class="calender m-auto px-sm-0 px-md-0 px-lg-5 mx-lg-4 mx-md-0 mx-sm-3">

              <div class="calender-head mt-3 mt-md-0">

                <h3> Today Is ...</h3>

              </div>

              <!-- Tabs -->

              <section id="tabs">

                  @include('leepFront.parts.calendar') {{-- leepFront/parts/calendar --}}  
                
              </section>

              <!-- ./Tabs -->

            </div>

          </div>


          <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-0">
            @include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}
          </div>

        </div>

      </div>

    </div>

    {{-- <div class="green"></div> --}}

    <!-- End hero-box -->

    

    <!--today feature events-->

    <div class="feature-events-wrapper">

      {{-- <div class="container"> --}}

        <div class="row p-3 m-0">

          <div class="col-md-8 col-lg-8 col-sm-7 col-12">

            <div class="today-events">

              <h6 class="font-weight-bold font-italic">Today's Featured Events</h6>

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

                <h6 class="font-weight-bold font-italic">Today's Featured Events</h6>



                <p class="main-featured-data text-justify"><b><i>LEEP Calendar</i></b> is created by marketing and editorial professionals, public relations professionals, journalists, digital media professionals, teachers and event planners. Over <b><i>7,000</i></b> events in the <b><i>United States, </i></b> <b><i>United Kingdom, </i></b><b><i>Canada, </i></b><b><i>Australia </i></b>and the world are accessible by industry, location, keyword, date, event champion, length, topic and type of event. Events are meticulously researched, verified and added by our staff and event champions daily. The dynamic nature of <b><i>LEEP </i></b>allows you to focus on your business, generate topic specific editorial and/or event calendars, plan travel, and execute strategy in minutes, rather than weeks. <b><i>Memberships </i></b> view <b><i>LEEP </i></b> free of 3rd party advertising and can import results. Learn more. <b><i>JOIN TODAY!</i></b></p>

              </div>

            </div>

            <div class="row">

              <div class="main-featured-events">

                <h6 class="font-weight-bold font-italic">Event Champions</h6>



                <p class="main-featured-data text-justify">Event champions, <b><i>LEEP Calendar</i></b> provides you a rich media platform to promote your on-site event, awareness campaign or promotion. Each event includes <b><i>date, location, URL to your site, contact information (Contact information is only visible to Professional Paid Members), description, a header image, </i></b>and up to <b><i>six category</i></b> classifications.  Event Champions can add a <b><i>purchase tickets </i></b>/ make a <b><i>reservation link, </i></b>three <b><i>social media </i></b>follow links, and up to three <b><i>supporting videos, document  </i></b>downloads and <b><i>images.</i></b><b><i>LEEP Calendar</i></b> is the highly <b><i>targeted, efficient and cost effective</i></b> addition to your <b><i>marketing and communications strategy. </i></b>Each paid event champion membership comes with a minum of one <b><i>Professional membership.</i></b> <b><i>GET STARTED!</i></b></p>

              </div>

            </div>

          </div>

          <div class="col-md-4 col-lg-4 col-sm-5 col-12">

            <div class="today-events">

              <h6 class="font-weight-bold font-italic">Twitter Feed</h6>

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

                        <h6 class="font-weight-bold font-italic">{{$t['user']['name']}}</h6>

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

            {{-- @if (Auth::check()) --}}

              @if (Auth::check())
                @if (hasMemberShip())
                  {{-- @dump('hi how are you') --}}
                  @else
                    <div class="advertising-box">

                      <h6>Advertising Space</h6>

                      <div class="advertising-pic">

                        <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg" alt="">

                      </div>

                    </div>
                @endif
                {{-- @dump('EVent Champ here') --}}
                @else
                
                <div class="advertising-box">

                  <h6 class="font-weight-bold font-italic">Advertising Space</h6>

                  <div class="advertising-pic">

                    <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg" alt="">

                  </div>

                </div>

              @endif
            
            {{-- @else --}}
              

            {{-- @endif --}}
            


          </div>

        </div>

      {{-- </div> --}}

    </div>



@endsection