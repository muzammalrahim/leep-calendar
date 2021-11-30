{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

    {{-- @dd($eventCategory->count()); --}}
    @include('leepFront.parts.category_slider')
 
    <div class="eventsDiv m-4">

        <div class="row">

            <div class="col-md-2"> 
                @include('layout.leftSidebar')
            </div>

            <div class="col-md-8">
                <div class="events mx-3">
                   <div class="search-title-box">

                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="font-weight-bold"> Events in {{ $category->name }}</h3>
                            </div>

                            <div class="col-md-4 text-right">
                                <h6>{{$eventCategory->count()}} Results</h6>
                            </div> 
                        </div>
                    </div>

                    <div class="event-box">

                        
                        @foreach($eventCategory as $e)
                            {{-- @dump($e->id) --}}
        	               <a href=" {{ route('eventDetail',['id'=>$e->event_id]) }} ">
                            <div class="event-title" style=" cursor:pointer;">
        	                    <div class="row">	                    	
        		                        <div class="col-md-10 categoryEvent">
        		                            <h4>{{\Illuminate\Support\Str::limit($e->event->name,42)}}</h4>
        		                            <p class="event-type">{{$e->event->type}}</p>
        		                            <p>{{\Illuminate\Support\Str::limit($e->event->description,204)}}</p>

        		                        </div>
        		                        <div class="col-md-2" style="padding-left: 0px; text-align: center;">
        		                            <h5 class="date-year">{{$e->event->d_start}} {{date("F", strtotime(date("Y")."-".$e->event->m_start."-01"))}}</h5>
                                            <label class = "labelclass">{{$e->event->status}}</label>
        		                        </div>	                    	
        	                    </div>
        	                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="borderline my-3"></div>


                    <div class="w3-center w3-bar w3-border w3-round" style="text-align: center;">
                        @if (Auth::check() && hasMemberShip())
                            {{-- expr --}}
                         {{$eventCategory->appends(Request::except('page'))->links('pagination::default') }}

                        @endif
                     </div>

                </div>
            </div>
            
            <div class="col-md-2">
                @include('layout.rightSidebar')
            </div>

        </div>

                    {{-- <div class="borderline my-3"></div> --}}

    </div>

@endsection