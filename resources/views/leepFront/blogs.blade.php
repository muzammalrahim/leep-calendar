{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    <div class="hero-wrapper mb-4">

      <div class="container123">

        <div class="row m-0">

          <div class="col-12 col-sm-12 col-md-6 col-lg-6 px-lg-3 px-md-5 px-0">

            <div class="calender m-auto px-sm-0 px-md-0 px-lg-5 mx-lg-5 mx-md-0 mx-sm-3">

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


    
    <!-- End hero-box -->
    {{-- LEGEND --}}
    <div class="legend-wrapper p-4">
        <div class="row">
          <div class="col-lg-2 col-md-3">
                @include('layout.leftSidebar')
          </div>

          <div class="col-lg-8 col-md-7 ml-lg-5 ml-md-3">
            <div class="legend-content">
                <h2 class="font-weight-bold"> {{ $page_title }} </h2>
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