{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
  
    <!-- <div class="green">
    </div> -->
    
    <!-- End hero-box -->
    {{-- LEGEND --}}
    <div class="legend-wrapper">
        <div class="container ">
            <div class="card mb-3 py-5" style="width: 100% !important; height: auto !important;">
              <div class="row  d-flex">
                <div class="col-lg-4 py-0 py-lg-5 d-flex align-items-center">
                  <img src="{{asset('leep_calender/images')}}/{{$blog->images}}" class="img-fluid rounded-start img-thumbnail w-100"  alt="...">
                </div>
                <div class="col-lg-8 py-0 py-md-5">
                  <div class="card-body">
                    <h2 class="card-title " style="color: #60012c;">{{$blog->title}}</h2>
                    <p class="card-text">{!! $blog->description !!}</p>
                    <p class="card-text"><small class="text-muted"> <span>Last updated: </span> <span style="color: #60012c;"> {{\Carbon\Carbon::parse($blog->updated_at)->isoFormat('MMM Do YYYY')}}</span></small></p>
                  </div>
                </div>
              </div>
            </div>
    </div>
    {{-- END LENGEND --}}
@endsection