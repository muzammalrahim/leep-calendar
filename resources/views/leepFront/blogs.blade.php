{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    <div class="hero-wrapper mb-4">

      <div class="container123">

        <div class="row m-0 py-2">

          <div class="col-12 col-sm-12 col-md-6 col-lg-4 px-md-5 px-lg-0 px-0 bg-site">

            <div class="calender m-auto px-sm-5 px-md-0 px-lg-0 mx-lg-5 mx-md-0 mx-sm-5 mt-lg-2 mt-md-2">

              <div class="calender-head">

                <h3> Today Is ... {{ getMonthFullName($m) }} <span class="ml-2"></span>{{ $d  }}</h3>
              </div>

              <!-- Tabs -->

              <section id="tabs">

                  @include('leepFront.parts.calendar') {{-- leepFront/parts/calendar --}}  
                
              </section>

              <!-- ./Tabs -->

            </div>

          </div>


          <div class="col-12 col-sm-12 col-md-6 col-lg-8 p-0">
            @include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}
          </div>

        </div>

      </div>

    </div>


    
    <!-- End hero-box -->
    {{-- LEGEND --}}
    <div class="legend-wrapper p-4">
        <div class="row">
          <div class="col-lg-4 col-md-4">
                @include('layout.leftSidebar')
          </div>

          <div class="col-lg-8 col-md-7 pl-lg-5 pl-md-3">
            <div class="legend-content">
                <h2 class="font-weight-bold"> {{ $page_title }} </h2>
                <h1 class="text-center pt-5">All Post of events will be shown here.</h6>
            </div>
          </div>

          <div class="col-md-2">
                @include('layout.rightSidebar')
          </div>
        </div>
    </div>
    {{-- END LENGEND --}}
@endsection

<style type="text/css">
  p{
    color: black !important;
  }
</style>