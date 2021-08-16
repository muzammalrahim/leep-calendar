{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')
 
         <div class="container">
            <div class="event-page">
               <div class="search-title-box">
                <div class="row">
                    <div class="col-md-8">
                        <h3><small>Your Events <b></b> </small></h3>
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
                                    <lable>{{$e->status}}</label>
		                        </div>	                    	
	                    </div>
	                </div>
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