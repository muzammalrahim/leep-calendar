
            <div class="">

              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                  <div class="carousel-item active">

                    @isset(App\Models\participants::first()->banner)
                    <img src="{{URL::asset('leep_calender/images/Developer Assets/'.App\Models\participants::first()->banner)}}"
                      class="d-block w-100" alt="...">
                    @endif

                    <div class="carousel-caption  d-md-block">

                      <div class="warmup-after mt-5">





                      </div>

                    </div>

                  </div>

                  <div class="carousel-item">

                  <img src="{{URL::asset('leep_calender/images/Developer Assets/slider2.jpg')}}"

                   class="d-block w-100" alt="...">

                  <div class="carousel-caption  d-md-block">

                  <div class="warmup-after mt-5">



                  </div>

                  </div>

                  </div>

                  <div class="carousel-item">

                  {{-- <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Component1711.svg" --}}
                  <img src="{{URL::asset('leep_calender/images/Developer Assets/slider3.jpg')}}"


                  class="d-block w-100" alt="...">

                  <div class="carousel-caption  d-md-block">

                  <div class="warmup-after mt-5">





                     </div>

                  </div>

                  </div>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">

                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                  <!-- <span class="sr-only">Previous</span> -->

                </a>

                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">

                  <span class="carousel-control-next-icon" aria-hidden="true"></span>

                  <!-- <span class="sr-only">Next</span> -->

                </a>

              </div>

            </div>
