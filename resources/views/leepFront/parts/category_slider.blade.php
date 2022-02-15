




<div class="hero-wrapper mb-4 py-3">

      <div class="container123">

        <div class="row m-0">

          <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-md-5 px-lg-0 px-0 bg-site">

            <div class="calender m-auto px-sm-5 px-md-0 px-lg-5 mx-lg-0 mx-md-0 mx-sm-5  mt-lg-2 mt-md-2">

              <div class="calender-head mb-4">

                <h3 class="pb-2 pt-3"> Today is: &nbsp {{ getMonthFullName($m) }}<span class="ml-2"></span> {{ $d  }}</h3>
                
              </div>

              <!-- Tabs -->

              <section id="tabs">

                  @include('leepFront.parts.calendar') {{-- leepFront/parts/calendar --}}  
                
              </section>

              <!-- ./Tabs -->

            </div>

          </div>


          <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-0">
            @include('leepFront.parts.categoryDetail.header') {{-- leepFront/parts/categoryDetail/header --}}
          </div>

        </div>

      </div>

    </div>