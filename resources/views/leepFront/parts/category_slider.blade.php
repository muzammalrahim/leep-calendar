<div class="hero-wrapper mb-4">

  <div class="container123">

    <div class="row m-0">

      <div class="col-12 col-sm-12 col-md-5 col-lg-5" style="bottom:10px">

        <div class="calender m-auto px-sm-0 px-md-0 px-lg-5">

          <div class="calender-head mt-3">

            <h3> Today Is ...</h3>

          </div>

          <!-- Tabs -->

          <section id="tabs">

              @include('leepFront.parts.calendar') {{-- leepFront/parts/categoryDetail/calendar --}} 
            
          </section>

          <!-- ./Tabs -->

        </div>

      </div>


      <div class="col-12 col-sm-12 col-md-7 col-lg-7 p-0">
        @include('leepFront.parts.categoryDetail.header')  {{-- leepFront/parts/categoryDetail/header --}}
      </div>

    </div>

   </div>

</div>