{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    <div class="hero-wrapper mb-4">

      <div class="container123">

        <div class="row m-0">

          <div class="col-12 col-sm-12 col-md-5 col-lg-5" style="bottom:10px">

            <div class="calender m-auto">

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


    
    <!-- End hero-box -->
    {{-- LEGEND --}}
    <div class="legend-wrapper p-4">
        <div class="row">
          <div class="col-2">
                @include('layout.leftSidebar')
          </div>

          <div class="col-8">
            <div class="legend-content">
                <h2 class="font-weight-bold"> {{ $page_title }} </h2>
            </div>
          </div>

          <div class="col-2">
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