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
          <div class="col-lg-3 col-md-4">
                @include('layout.leftSidebar')
          </div>

          <div class="col-lg-9 col-md-7 pl-lg-5 pl-md-3">
            <div class="legend-content">
        <div class="cards-1 bg-white">
        <div class="container">
             <h2 class="text-center py-5 fw-bold">Our Blog Section</h2>
            <div class="row">
               @foreach($blogs as $b)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href=""><div class="card card-blog" style="width: auto !important; height: auto !important;">
                        <div class="card-image">
                            <a href="{{ action('HomeController@userViewBlogDetail', $b->id) }}" style="text-decoration: none; color:#000;"> <img class="img" src="{{asset('leep_calender/images')}}/{{$b->images}}">
                                <!-- <div class="card-caption"> {{$b->title}} </div> -->
                            <div class="ripple-cont"></div>
                        </div>
                        <div class="table" style="border-bottom: 2px solid #000;">
                            <h3 style="text-align: start !important; color: #60012c !important;">{{$b->title}}</h3>
                            <p class="card-description" style="color: #000;"> {!! Str::limit(($b->description), 100) !!} 
                              @if (strlen(Str::limit(($b->description))) > 100)
                              <a href="{{ action('HomeController@userViewBlogDetail', $b->id) }}" class="btn  btn-sm" style="background: #60012c !important;color:#fff !important;">Read More</a>
                            @endif
                            </p>
                        </div>
                        <div class="footer px-2">
                          <p style="font-size: 14px !important;">Last updated : <span><small><span style="color: #60012c; font-size: 12px !important;"> {{\Carbon\Carbon::parse($b->updated_at)->isoFormat('MMM Do YYYY')}}</span></small></span></p>
                        </div>
                    </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
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
  a{
    text-decoration: none;
  }
  a::hover{
    text-decoration: none;
  }
  p{
    color: black !important;
  }
  /*---------------------------------------------------------------------- /
SECTIONS
----------------------------------------------------------------------- */
.section-cards {
    z-index: 3;
    position: relative;
}
.section-gray {
    background: #E5E5E5;
    padding: 30px 0 30px 0;
}
/*---------------------------------------------------------------------- /
CARDS
----------------------------------------------------------------------- */
.card {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: rgba(0, 0, 0, 0.87);
    background: #fff;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.card .card-image {
    /*height: 60%;*/
    position: relative;
    overflow: hidden;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: -30px;
    border-radius: 6px;
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.card .card-image img {
    width: 100%;
 /*   height: 100%;*/
    border-radius: 6px;
    pointer-events: none;
}
.card .card-image .card-caption {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: #fff;
    font-size: 1.3em;
    text-shadow: 0 2px 5px rgba(33, 33, 33, 0.5);
}
.card img {
    width: 100%;
    height: auto;
}
.img-raised {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
.card .ftr {
    margin-top: 15px;
}
.card .ftr div {
    display: inline-block;
}
.card .ftr .author {
    color: #888;
}
.card .ftr .stats {
    float: right;
    line-height: 30px;
}
.card .ftr .stats {
    position: relative;
    top: 1px;
    font-size: 14px;
}
/* ============ Card Table ============ */
.table {
    margin-bottom: 0px;
}
.card .table {
    padding: 15px 30px;
}
.card .table-primary {
    background: linear-gradient(60deg, #ab47bc, #7b1fa2);
}
.card .table-info {
    background: linear-gradient(60deg, #26c6da, #0097a7);
}
.card .table-success {
    background: linear-gradient(60deg, #66bb6a, #388e3c);
}
.card .table-warning {
    background: linear-gradient(60deg, #ffa726, #f57c00);
}
.card .table-danger {
    background: linear-gradient(60deg, #ef5350, #d32f2f);
}
.card .table-rose {
    background: linear-gradient(60deg, #ec407a, #c2185b);
}
.card [class*="table-"] {
    color: #FFFFFF;
    border-radius: 6px;
}
.card [class*="table-"] .card-caption a,
.card [class*="table-"] .card-caption,
.card [class*="table-"] .icon i {
    color: #FFFFFF;
}
.card [class*="table-"] .icon i {
    border-color: rgba(255, 255, 255, 0.25);
}
.card [class*="table-"] .author a,
.card [class*="table-"] .ftr .stats,
.card [class*="table-"] .category,
.card [class*="table-"] .card-description {
    color: rgba(255, 255, 255, 0.8);
    font-size: 14px;
}
.card [class*="table-"] h1 small,
.card [class*="table-"] h2 small,
.card [class*="table-"] h3 small {
    color: rgba(255, 255, 255, 0.8);
}
/* ============ Card Blog ============ */
.card-blog {
    margin-top: 30px;
}
.card-blog .card-caption {
    margin-top: 5px;
}
.card-blog .card-image + .category {
    margin-top: 20px;
}
.card-raised {
    box-shadow: 0 16px 38px -12px rgba(0, 0, 0, 0.56), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
}
/* ============ Card Background ============ */
.card-background {
    background-position: center;
    background-size: cover;
    text-align: center;
}
.card-background .table {
    position: relative;
    z-index: 2;
    min-height: 280px;
    padding-top: 40px;
    padding-bottom: 40px;
    max-width: 440px;
    margin: 0 auto;
}
.card-background .category,
.card-background .card-description,
.card-background small {
    color: rgba(255, 255, 255, 0.8);
}
.card-background .card-caption {
    color: #FFFFFF;
    margin-top: 10px;
}
.card-background:after {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: block;
    left: 0;
    top: 0;
    background-color: rgba(0, 0, 0, 0.56);
    border-radius: 6px;
}
/* ============ Card Category ============ */
/* ============ Card Product ============ */
.card-description p {
    color: #888;
}
/* ============ Text Color ============ */
.text-warning {
    color: #ff9800;
}
.text-primary {
    color: #9c27b0;
}
.text-danger {
    color: #f44336;
}
.text-success {
    color: #4caf50;
}
.text-info {
    color: #00bcd4;
}
.text-rose {
    color: #e91e63;
}
.text-gray {
    color: #888;
}
/*---------------------------------------------------------------------- /
BOOTSTRAP COL-MD-12 CLASS
----------------------------------------------------------------------- */
.col-md-12 {
    padding-right: 0px;
    padding-left: 0px;
}
/**************************************/
/* ======= GENERAL  ======= */
body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4 {
    font-family: "Roboto", "Helvetica", "Arial", sans-serif;
    font-weight: 300;
    line-height: 1.5em;
}
a {
    color: #9c27b0;
    text-decoration: none;
}
a:hover {
    color: #9c27b0;
    text-decoration: underline;
}
p {
    color: #3C4857;
}
header {
    border-bottom: 1px solid #dedede;
    text-align: center;
}
h1, .h1 {
  font-size: 3.8em;
}
h2, .h2 {
  font-size: 2.0em;
  line-height: 1.6em;
  margin: 15px 0 15px;
  font-weight: 700;
  font-family: "Roboto Slab", "Times New Roman", serif;
  text-align: center;
}
h3, .h3 {
  font-size: 1.825em;
  line-height: 1.4em;
  margin: 30px 0 30px;
  font-weight: 700;
  font-family: "Roboto Slab", "Times New Roman", serif;
  text-align: center;
}
h4, .h4 {
  font-size: 1.3em;
  line-height: 1.55em;
}
h5, .h5 {
  font-size: 1.25em;
  line-height: 1.55em;
  margin-bottom: 15px;
}
h6, .h6 {
  font-size: 0.9em;
  font-weight: 500;
}
</style>