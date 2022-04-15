{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')
         <?php
            $d= date('Y');
            ?>
         <div class="container">
            <div class="event-page">
               <div class="search-title-box">
                <div class="row">
                    <div class="col-md-8">
                        <h3><small>Showing results for! <b>{{$search}}</b> </small></h3>
                    </div>

                    <div class="col-md-4 text-right">
                        <h6>{{$events->total()}} Results</h6>
                    </div>
                </div>
            </div>
                <div class="event-box">
                @foreach($events as $e)
                <a href="{{ route('eventDetail', ['id'=>$e->id] ) }}">
	                <div class="event-title" style=" cursor:pointer;">
	                    <div class="row">	                    	
		                        <div class="col-md-10">
		                            <h4>{{\Illuminate\Support\Str::limit($e->name,42)}}</h4>
		                            <p class="event-type">{{$e->type}}</p>
                                    @if(($e->description) == "0")
                                    <p>There is no description for this event.</p>
                                    @else
		                            <p>{{\Illuminate\Support\Str::limit($e->description,204)}}</p>
                                    @endif
		                        </div>
		                        <div class="col-md-2" style="padding-left: 0px; text-align: center;">
		                            <h5 class="date-year">{{ Carbon\Carbon::parse($e->start_date)->format('F')}} </h5>
		                        </div>	                    	
	                    </div>
	                </div>
                </a>
                @endforeach
                {{-- {{ $events->links() }} --}}
                 <style type="text/css">
                 	/*w-5 h-5                 	*/
                 </style>

                {{-- <div class="event-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Title of the event</h4>
                            <p class="event-type">Event Type</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>

                        </div>
                        <div class="col-md-2">
                            <h5 class="date-year">February 1</h5>
                        </div>
                    </div>
                </div>
                <div class="event-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Title of the event</h4>
                            <p class="event-type">Event Type</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>

                        </div>
                        <div class="col-md-2">
                            <h5 class="date-year">February 1</h5>
                        </div>
                    </div>
                </div>
                <div class="event-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Title of the event</h4>
                            <p class="event-type">Event Type</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>

                        </div>
                        <div class="col-md-2">
                            <h5 class="date-year">February 1</h5>
                        </div>
                    </div>
                </div>
                <div class="event-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Title of the event</h4>
                            <p class="event-type">Event Type</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>

                        </div>
                        <div class="col-md-2">
                            <h5 class="date-year">February 1</h5>
                        </div>
                    </div>
                </div>
                <div class="event-title">
                    <div class="row">
                        <div class="col-md-10">
                            <h4>Title of the event</h4>
                            <p class="event-type">Event Type</p>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et</p>

                        </div>
                        <div class="col-md-2">
                            <h5 class="date-year">February 1</h5>
                        </div>
                    </div>
                </div> --}}

            </div>
                <div class="w3-center w3-bar w3-border w3-round" style="text-align: center;">
                     {{$events->appends(Request::except('page'))->links('pagination::default') }}
                 </div>

            {{-- <div class="w3-center">

                <div class="w3-bar w3-border w3-round">
                  <a href="#" class="w3-bar-item w3-button">&laquo;</a>
                  <a href="#" class="w3-bar-item w3-button">Previous</a>
                  <a href="#" class="w3-bar-item w3-button">1</a>
                  <a href="#" class="w3-bar-item w3-button">2</a>
                  <a href="#" class="w3-bar-item w3-button">3</a>
                  <a href="#" class="w3-bar-item w3-button">4</a>
                  <a href="#" class="w3-bar-item w3-button">5</a>
                  <a href="#" class="w3-bar-item w3-button">6</a>

                  <a href="#" class="w3-bar-item w3-button">7</a>
                  <a href="#" class="w3-bar-item w3-button">8</a>
                  <a href="#" class="w3-bar-item w3-button">9</a>
                  <a href="#" class="w3-bar-item w3-button">Next</a>
                  <a href="#" class="w3-bar-item w3-button">&raquo;</a>
                </div>
                </div>
                
            </div> --}}

      
        </div>

@endsection