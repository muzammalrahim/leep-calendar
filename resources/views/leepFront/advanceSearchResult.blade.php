@extends('site.master')


@section('calendar-slider')

@include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}

@endsection

@section('content')

<div class="random">
	   <div class="row  border-bottom">
         	<div class="col-md-3">
         		<h3 class="text-maroon">Event Name</h3>
         	</div>
         	<div class="col-md-6"><h3>Event Description</h3></div>
         	<div class="col-md-3"><h3>Event States</h3></div>
         </div>	
          <div class="row">
          @foreach ($Events as $event) 
         	<div class="col-md-3">
         		<h4>{{$event->name}}</h4>
         	</div>
         	<div class="col-md-6">
         		@if(($event->event_champion) == "0")
         			<h4 style="font-family: impact; ">There is no Event tittle for this event</h4>
         		@else
         			<a href="{{'../event/'.$event->id}}"><h4 style="font-family: impact; ">{{$event->event_champion}}</h1></a>
         		@endif
         		
         		@if(($event->description) == "0")
         			<p>There is no description for this event</p>
         		@else
         			<a href="{{'../event/'.$event->id}}"><p>{!! Str::limit($event->description, 300) !!}</p></a>
         		@endif
         	</div>
         	<div class="col-md-3"><h4>{{$event->states}}</h4></div>
         </h4>	
         @endforeach
          </div>
          @if($Events->count()<1)
	        		 <h1 class=" px-auto font-weight-bold pt-5" style="color: #7a003b; font-size: 80px; text-align: center;">Oops!</h2><br/>
	        		 	<h5 class="text-center Text-secondary m-auto">Sorry! No Events Founds against the Data. Please Try again with another Query</h5>
	         @endif
         {!! $Events->appends(Request::except('page'))->links() !!}
</div>

@endsection
