{{-- Extends layout --}}

@extends('site.master')


@section('calendar-slider')

@include('leepFront.parts.categoryDetail.category_image') {{-- leepFront/parts/slider --}}

@endsection

@section('content')


    <div class="eventsDiv">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 mt-4 mx-sm-1 mx-md-2 mx-lg-4"> 
                @include('layout.leftSidebar')
            </div>
            <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                <div class="events mx-3">
                    <div class="search-title-box">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="mb-lg-3" style="font-family: 'impact';"> Events in {{ $category->name }}</h1>
                                <div class="pl-lg-5 ml-lg-4 pl-md-5 ml-md-4">
                                    <p class="">For the current year, this category includes: <b> {{ $eventCount }} </b> events.
                                    </p>
                                    <h4 class="mb-4 font-color font-weight-bold">
                                        {{ $category->description }}
                                    </h4>
                                    {{-- <p class="mb-4">Africa is defined as:</p> --}}
                                    <p class="">

                                        
                                        {!! $category->countries !!}
                                    </p>
                                    

                                    <p class="mb-4">
                                        A partial list of events will be displayed in the search results for non-members. To view the full results, login to your LEEP Membership account and search this category again, (requires paid subscription).
                                    </p>
                                    {{-- <p class="mb-4 text-center">
                                        A partial list of events will be displayed in the search results for<br> non-members. To view the full results, login to your LEEP<br> Membership account and search this category again, (requires<br> paid subscription).
                                    </p> --}}
                                </div>
                            </div>
                            <div class="container mt-5">
                                <div class="row pl-lg-5 ml-lg-5 pl-md-0 ml-md-0 ">
                                    <div class="col-4">
                                        <a href="{{route('advance.search')}}" class="custom_btn btn rounded-0 font-weight-bold px-3 px-lg-5 px-md-5 px-sm-5 py-3 text-white bg_maroon webkit-app-none" type="submit">Search</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{URL::asset('login')}}" class="custom_btn btn btn-outline-secondary rounded-0 text-white font-weight-bold px-3 px-lg-5 px-md-5 px-sm-5 py-3 text_marron "  type="submit">Login</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{URL::asset('register')}}" class="custom_btn btn rounded-0 font-weight-bold px-3 px-lg-5 px-md-5 px-sm-5 py-3 text-white register-btn" type="submit">Register</a>
                                    </div>
                                </div>
                                <?php
                                $cat_name =  $category->name ;
                                ?>
                                @if ($cat_name == 'Religion')
                                <div class="row pl-lg-5 ml-lg-5 pl-md-0 ml-md-0 ">
                                    <div class="col-12 w-100 pt-4">
                                        <a href="{{url('leep_calender/pdf/Faiths.pdf')}}" class="w-100" download><img src="{{asset('images/religion.png')}}" alt="" width="100%"/> </a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    {{-- <div class="event-box">       
                        @foreach($eventCategory as $e)
                            @php
                                $event_name = $e->event->name;
                                $event_name = str_replace(' ', '_', $event_name);
                                $event_name = str_replace("\'", '_', $event_name);
                            @endphp
        	               <a href=" {{ route('eventDetail',['name'=>$event_name, 'id'=>$e->event_id]  )}} ">
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
                         {{$eventCategory->appends(Request::except('page'))->links('pagination::default') }}
                        @endif
                    </div> --}}


                </div>
            </div>
        </div>
    </div>
@endsection
<style type="text/css">
    p{
        color: #000000 !important;
    }
</style>


