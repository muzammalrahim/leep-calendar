{{-- Extends layout --}}
@extends('site.master') {{-- site/master --}}


@section('calendar-slider')

@include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}

@endsection

@section('content')



 <!--today feature events-->

    <div class="feature-events-wrapper">

      {{-- <div class="container"> --}}
        <div class="row m-0 p-0">
          <div class="col-0 col-sm-0 col-md-4 col-lg-4"></div>
          <div class="col-7 col-sm-7 col-md-6 col-lg-6">
            <div class="today-events">
              <h1 class="ml-lg-1 ml-md-3 ml-sm-3 p-0 welcome_heading">Welcome to LEEP Calendar</h1>
           </div>
          </div>
          <div class="col-5 col-sm-5 col-md-2 col-lg-2">
            <div class="followLeep float-right">
              <a href="https://twitter.com/PromoCalendar?ref_src=twsrc%5Etfw" class="mr-md-5 mr-sm-5 font-weight-bold">Follow LEEP</a>
            </div>
          </div>
        </div>
       

        <div class="row m-0">

          <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4 mx-sm-1 mx-md-2 mx-lg-4"> 
            {{-- ============================== left Side bar included ============================== --}}
              @include('layout.leftSidebar') {{-- layout/leftSidebar --}}
          </div>

          <div class="col-12 col-sm-12 col-md-7 col-lg-7">
            {{-- <div class="row"> --}}
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

             {{-- </div> --}}

            {{-- <div class="row"> --}}

              <div class="main-featured-events">
                <h6>Today's Featured Events</h6>
                <p class="main-featured-data text-justify">LEEP Calendar is created by marketing and editorial professionals, public relations professionals, journalists, digital media professionals, teachers and event planners. Over 7,000 events in the United States,  United Kingdom, Canada, Australia and the world are accessible by industry, location, keyword, date, event champion, length, topic and type of event. Events are meticulously researched, verified and added by our staff and event champions daily. The dynamic nature of LEEP allows you to focus on your business, generate topic specific editorial and/or event calendars, plan travel, and execute strategy in minutes, rather than weeks. Memberships  view LEEP free of 3rd party advertising and can import results. Learn more. JOIN TODAY!
              </div>

            {{-- </div> --}}

            {{-- <div class="row"> --}}

              <div class="main-featured-events">

                <h6>Event Champions</h6>



                <p class="main-featured-data text-justify">Event champions, LEEP Calendar provides you a rich media platform to promote your on-site event, awareness campaign or promotion. Each event includes date, location, URL to your site, contact information (Contact information is only visible to Professional Paid Members), description, a header image, and up to six category classifications.  Event Champions can add a purchase tickets / make a reservation link, three social media follow links, and up to three supporting videos, document downloads and images.LEEP Calendar is the highly targeted, efficient and cost effective addition to your marketing and communications strategy. Each paid event champion membership comes with a minum of one Professional membership.GET STARTED!

              </div>

            {{-- </div> --}}

          </div>

          {{-- <div class="col-md-3 col-lg-3 col-sm-5 col-12">
            @include('layout.twitterFeed')
          </div> --}}


        </div>

      {{-- </div> --}}

    </div>



@endsection