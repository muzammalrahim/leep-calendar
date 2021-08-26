{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

    {{-- @dd($category);    --}}
    @include('leepFront.parts.category_slider')
 
    <div class="eventsDiv m-4">

        <div class="row">

            <div class="col-md-2"> 

                {{-- Icons Would go Here --}}
                <div class="follow-us">
                    <h5 class="border-bottom border-danger font-weight-bold"> Follow Us </h5>
                </div>

                <div class="icons m-3">
                    <img src="https://img.icons8.com/color/50/000000/linkedin.png"/>
                    <img src="https://img.icons8.com/color/50/000000/twitter.png"/>
                    <img src="https://img.icons8.com/nolan/50/facebook.png"/> </br>
                    <img src="https://img.icons8.com/color/50/000000/instagram-new.png"/>
                    <img src="https://img.icons8.com/color/48/000000/youtube-play.png"/>
                    <img src="https://img.icons8.com/ios/50/000000/wordpress.png"/>
                </div>


            </div>
            <div class="col-md-8">
                <div class="events mx-3">
                   <div class="search-title-box">

                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="font-weight-bold"> Events in {{ $category->name }}</h3>
                            </div>

                            <div class="col-md-4 text-right">
                                <h6>{{$events->total()}} Results</h6>
                            </div>
                        </div>
                    </div>

                    <div class="event-box">
                        @foreach($events as $e)
        	                <div class="event-title"  onclick="window.location.replace('{{URL::asset('event/'.$e->id)}}','self'); " style=" cursor:pointer;">
        	                    <div class="row">	                    	
        		                        <div class="col-md-10">
        		                            <h4>{{\Illuminate\Support\Str::limit($e->name,42)}}</h4>
        		                            <p class="event-type">{{$e->type}}</p>
        		                            <p>{{\Illuminate\Support\Str::limit($e->description,204)}}</p>

        		                        </div>
        		                        <div class="col-md-2" style="padding-left: 0px; text-align: center;">
        		                            <h5 class="date-year">{{$e->d_start}} {{date("F", strtotime(date("Y")."-".$e->m_start."-01"))}}</h5>
                                            <label class = "labelclass">{{$e->status}}</label>
        		                        </div>	                    	
        	                    </div>
        	                </div>
                        @endforeach
                    </div>

                    <div class="w3-center w3-bar w3-border w3-round" style="text-align: center;">
                         {{$events->appends(Request::except('page'))->links('pagination::default') }}
                     </div>

                </div>
            </div>
            
            <div class="col-md-2">

                <h5 class="font-weight-bold text-center"> BECOME A MEMBER </h5>
                <a href="#" class="text-center text-dark d-block my-2"> Professionals </a>
                <a href="#" class="text-center text-dark d-block my-2"> Event Champions </a>

            </div>

        </div>
    </div>

@endsection