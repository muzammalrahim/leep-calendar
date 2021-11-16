<div class="hero-wrapper mb-4">

  <div class="container123">

    <div class="row m-0">

      <div class="col-12 col-sm-12 col-md-6 col-lg-6 px-lg-6 px-md-5 px-lg-3 px-0">

        <div class="calender m-auto px-sm-5 px-md-0 px-lg-5 mx-lg-5 mx-md-0 mx-sm-5">

          <div class="calender-head mt-3 mt-md-0">

            <h3> Today Is ...</h3>

          </div>

          <!-- Tabs -->

          <section id="tabs">

              @include('leepFront.parts.calendar') {{-- leepFront/parts/categoryDetail/calendar --}} 
            
          </section>

          <!-- ./Tabs -->

        </div>

      </div>


      <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-0">
        @include('leepFront.parts.categoryDetail.header')  {{-- leepFront/parts/categoryDetail/header --}}
      </div>

    </div>

   </div>

</div>