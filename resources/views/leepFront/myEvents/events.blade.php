{{-- Extends layout --}}

@section('content')

@extends('layout.layoutLeep') {{-- layout/layoutLeep --}}

 

{{-- Content --}}



    <!-- hero-box -->

    <div class="hero-wrapper mb-4">

      <div class="container123">

        <div class="row">

          <div class="col-12 col-sm-12 col-md-5 col-lg-5" style="bottom:10px">

            <div class="calender m-auto ">

              <div class="calender-head mt-3">

                <h3> Today Is ...</h3>

              </div>

              <!-- Tabs -->

              <section id="tabs">

                  @include('leepFront.parts.calendar') {{-- leepFront/parts/calendar --}}  
                
              </section>

              <!-- ./Tabs -->

            </div>

          </div>


          <div class="col-12 col-sm-12 col-md-7 col-lg-7">
            @include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}
          </div>

        </div>

      </div>

    </div>

    {{-- <div class="green"></div> --}}

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

            {{-- <div class="media-object-wrappper">
              @foreach($tweets as $t)
              <div class="media-objects">
                <div class="row">
                  <div class="col-md-12">
                    <div class="media">
                      <div class="media-left">
                        <img src="{{$t['user']['profile_image_url']}}" class="media-object" style="width:60px;border-radius: 20%">
                      </div>
                      <div class="media-body">
                        <h6 class="media-heading">{{$t['user']['name']}}</h6>
                        <span>@ {{$t['user']['screen_name']}}</span>
                      </div>
                    </div>
                  </div>
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
            </div> --}}

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