{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

    {{-- @dd($events);    --}}
    {{-- @include('leepFront.parts.category_slider') --}}



    <div class="hero" style="background-image:linear-gradient(#60012c, rgba(0, 0, 0, 0.7)) ,url('{{ asset('leep_calender/event/img/Events.jpg')}}');">
        <h1>My Events</h1>
    </div>


    {{-- <div class="hero-wrapper mb-4">
        <div class="container123">
            <div class="row">
                <div class="col-12 col-sm-12">
                </div>
            </div>
        </div>
    </div>
 --}}

    <div class="borderline"></div>
 
    <div class="my-eventsDiv m-4">

        <div class="row">

            <div class="col-md-3 col-lg-2"> 
                {{-- @include('layout.leftSidebar') --}}
            </div>

            <div class="col-md-8">
                <div class="events mx-3">
                    <div class="event-box">
                        @foreach($events as $e)
                        <div class="event-title">
                            <div class="row">                           
                                <div class="col-md-8">
                                    <h5>{{\Illuminate\Support\Str::limit($e->name,42)}}</h5>
                                    <p class="event-type">{{$e->type}}</p>
                                    <p>{{\Illuminate\Support\Str::limit($e->description,204)}}</p>

                                </div>
                                <div class="col-md-2" style="padding-left: 0px; text-align: center;">
                                    <h5 class="date-year">{{$e->d_start}} {{date("F", strtotime(date("Y")."-".$e->m_start."-01"))}}</h5>
                                    <label class = "labelclass">{{$e->status}}</label>
                                </div>
                                <div class="col-md-2">
                                    <a class="btn btn-sm btn-primary"href="{{ route('editEvent',['id'=>$e->id]) }}" > <i class="fa fa-edit"></i> </a>
                                    <a class="btn btn-sm btn-danger deleteEventModal" data-toggle ="modal" data-target ="#deleteEventModal" 
                                    data-id = "{{ $e->id }}"> <i class="fa fa-trash"></i> 
                                    </a>
                                    
                                     {{-- href="{{ route('deleteEvent', ['id'=>$e->id]) }}" --}}
                                </div>                      
                            </div>
                        </div>
                        <div class="borderBottom"></div>
                        @endforeach
                    </div>

                </div>
            </div>
            
            <div class="col-md-2">
                {{-- @include('layout.rightSidebar') --}}
            </div>

        </div>

    </div>


    {{-- Delete Event Modal --}}

    <div class="modal fade" id="deleteEventModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-danger" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <p class="heading lead text-white">Delete Event</p>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <p>This action cannot be undone. Are you sure you wish to continue </p>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <a class="btn btn-danger text-white confrimDeleteEvent">Delete </a>
                    <a class="btn btn-outline-danger waves-effect" data-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>

@endsection