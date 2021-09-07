<div class="hero-wrapper mb-4">

  <div class="container123">

    <div class="row">

      <div class="col-12 col-sm-12 col-md-5 col-lg-5" style="bottom:10px">

        <div class="calender m-auto">

          <div class="calender-head mt-3">

            <h3> Today Is ...</h3>

          </div>

          <!-- Tabs -->

          <section id="tabs">

              @include('leepFront.parts.categoryDetail.calendar') {{-- leepFront/parts/categoryDetail/calendar --}} 
            
          </section>

          <!-- ./Tabs -->

        </div>

      </div>


      <div class="col-12 col-sm-12 col-md-7 col-lg-7">
        @include('leepFront.parts.categoryDetail.header')  {{-- leepFront/parts/categoryDetail/header --}}
      </div>

    </div>

   </div>

</div>