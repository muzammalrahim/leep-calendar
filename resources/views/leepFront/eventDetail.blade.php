{{-- Extends layout --}}
@extends('layout.eventDetail.eventDetailMaster')
@section('content')


{{-- Content --}}

<!-- hero-box -->
{{-- @dd($event->EventComments); --}}
@php
$event = $eventCategory->event
@endphp

@include('leepFront.parts.category_slider') {{-- leepFront/parts/category_slider --}}

<div class="eventDetailDiv m-4">
    <div class="row">
        <div class="col-lg-4 col-md-4 pt-4"> 

            @include('layout.leftSidebar')

            {{-- NON-MEMBER Slidebar Ad --}}
            <div class="advertising-box">
                {{-- <div class="row m-0">
                    <div class="col-12 col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1 mt-5" style="border: 1px solid; height: 600px;"> 
                        <p class="text-center text_black">Sidebar Ad</p>
                    </div>
                </div> --}}
                <div class="row m-0">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-3 left-sidebar-ad"> 
                    {{-- <div class="" style="border: 1px solid; height: 250px; width: 250px !important;">  --}}
                        <p class="text-center text-light m-auto">Sidebar Ad2</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-7 col-md-7 pt-4 ml-lg-5 ml-md-3"> 
          <div class="event-main blockCopy">
            <div class="eventsDetail">
                <div class="event-detail-container">

                    @include('layout.errorMsg')


                    <div class="borderBottom1">
                        <div class="container">
                         <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 event-detail-left">
                                @if(isset($event->name))
                                <h1 class="text-dark top-heading event-detail-heading">{{$event->alt_text}}</h1>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <span class="float-left font-color font20 font-weight-bold estimate-date event-detail-country"> United States </span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eventDetailAndRegions m-4 ">
                    <div class="eventInfo">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                                <div class="country"> 
                                    <span class="font-weight-bold font20 font-detail-title"> EVENT NAME: </span> 
                                </div>
                                <div class="country pl-3 "> 
                                    <span class="font18 font-detail-detail"> Safe Toys & Gifts Month, Ntl. {{ $event->country1 }} </span>
                                </div> 
                            </div>

                            <div class="col-0 col-sm-0 col-md-0 col-lg-0">
                                <div class="eventDate eventInfo mb-3"> 
                                    {{-- <span class="font-weight-bold"> Event Date(s):</span>  --}}
                                    {{-- July 1, 2019 - July 31, 2019  --}}

                                    {{-- {{date("F", strtotime(date("Y")."-".$event->m_start."-01")).' '. $event->d_start}} , {{$event->y_start}} -  --}}
                                    {{-- {{date("F", strtotime(date("Y")."-".$event->m_end."-01")).' '. $event->d_end}} , {{$event->y_end}} --}}
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                                <div class="eventCategories">
                                    <span class="font-weight-bold font20 font-detail-title"> EVENT CATEGORIES:</span>
                                </div>
                                <div class="eventCategories pl-3 ">
                                    <span class="font18 font-detail-detail"> Safety & Security, Children, Retail, United States </span>
                                    @isset($event->cat1->name)
                                    <span style="margin-bottom: 5px !important; ">{{($event->cat1->name)}}, </span>
                                    @endif
                                    @isset($event->cat2->name)
                                    <span style="margin-bottom: 5px !important; ">{{($event->cat2->name)}}, </span>
                                    @endif
                                    @isset($event->cat3->name)
                                    <span style="margin-bottom: 5px !important; ">{{($event->cat3->name)}}, </span>
                                    @endif
                                    @isset($event->cat4->name)
                                    <span style="margin-bottom: 5px !important; ">{{($event->cat4->name)}}, </span>
                                    @endif
                                    @isset($event->cat5->name)
                                    <span style="margin-bottom: 5px !important; ">{{($event->cat5->name)}}, </span>
                                    @endif
                                    @isset($event->cat3->name)
                                    <span style="margin-bottom: 5px !important; ">{{($event->cat3->name)}} </span>
                                    @endif
                                </div>


                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                                <div class="lenghtOfFamily"> 
                                    <span class="font-weight-bold font20 font-detail-title font-detail-title"> DATE(S): </span>
                                </div>
                                <div class="lenghtOfFamily pl-3 "> 
                                    <span class="font18 font-detail-detail"> {{ $event->type }}  </span> 
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                                <div class="eventChampion">
                                    <span class="font-weight-bold font20 font-detail-title font-detail-title"> INFORMATION URL:</span> {{ $event->champ_name }}
                                </div>
                                <div class="eventChampion pl-3 ">
                                    <span class="font18 text_marron font-detail-detail"> https://www.preventblind-ness.org/safe-toy-checklist {{ $event->champ_name }} </span> 
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                                <div class="source">
                                   <span class="font-weight-bold font20 font-detail-title font-detail-title"> EVENT ADDRESS: </span> <!-- {{ $event->url }} -->
                               </div>
                               <div class="source pl-3 ">
                                   <span class="font18 font-detail-detail"> <!-- {{ $event->url }} --> </span>
                               </div>
                           </div>
                       </div>

                       <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                            <div class="socialLinks">
                                <span class="font-weight-bold font20 font-detail-title"> SOCIAL MEDIA LINKS:</span>
                            </div>
                            <div class="socialLinks pl-3 ">
                                <span class="font18 text_marron font-detail-detail"> https://www.faceook.com </span>
                                @if (isset($event->socail_link1))
                                <a href="{{ $event->socail_link1 }}"> {{ $event->socail_link1 }}  </a>
                                @endif

                                @if (isset($event->socail_link2))
                                <a href="{{ $event->socail_link2 }}"> {{ $event->socail_link2 }}  </a>
                                @endif

                                @if (isset($event->socail_link3))
                                <a href="{{ $event->socail_link3 }}"> {{ $event->socail_link3 }}  </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-5">
                            <div class="eventAddress">
                               <span class="font-weight-bold font20 font-detail-title"> RESERVE TICKETS: </span> 
                           </div>
                           <div class="eventAddress pl-3 ">
                               <span class="font18 font-detail-detail font-detail-detail"> {{ $event->address1 }} </span>
                           </div>

                           {{-- <div class="registerPurchase mb-3"> --}}
                            {{-- <span class="font-weight-bold"> Register or Purchase Tickets to this Event (if available): </span> --}}
                            {{-- {{ $event->purchas_reserve }} --}}
                        </div>

                    </div>
                </div>

            </div>

            <div class="descript">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="events-description">
                            <h4 class="font-weight-bold bg_black text-light p-2 pl-4 event-detail-headings">DESCRIPTION:</h4>
                            <p class="line-height-1 p-2 pl-4 text_black font20 event-detail-descriptions">
                                Prevent Blindness America sponsors Safe Toys and Gifts Awareness Month each December in an effort to help adults make the best decisions on how to keep the holiday season joyful for everyone. In 2010, the United States. Consumer Product Safety Commission (CPSC) estimated that hospital emergency rooms across the country treated 251,700 toy-related injuries. And, 72 percent of those injuries were to those under the age of 15.
                                @isset($event->description){{$event->description}}@endif
                            </p>
                            <p class="line-height-2 m-5 text_marron font18 font-italic text-center"> Continute Reading... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- champion-box -->

    <div class="event-card1 pb-2">

        <div class="row">

          

            @if($event->socail_link1!='' || $event->socail_link1!='' || $event->socail_link1!='')
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="schedule-four">
                    <h6>Champion Social Media Links</h6>
                    <div class="schedule-detail text-center mt-1">
                        {{-- fb --}}
                        @if($event->socail_link1!='')
                        <p class="estimate-date" style="    clear: both;float: left;"> 
                            <a href="{{URL::asset('$event->socail_link1')}}"><img style="float: left;padding-left: 43px;"src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-facebook-square.svg')}}" alt=""> {{$event->socail_link1}}  </a>
                        </p>
                        {{-- Twiter --}}
                        @endif
                        @if($event->socail_link3!='')                              
                        <p class="estimate-date" style="    clear: both;float: left;">
                            <a href="{{URL::asset('$event->socail_link3')}}">
                                <img style="float: left;padding-left: 43px;" src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-instagram.svg')}}" alt=""> {{$event->socail_link3}} 
                            </a> 
                        </p>
                        {{-- youtube --}}
                        @endif
                        @if($event->socail_link2!='')                              
                        <p class="estimate-date" style="  float: left;  clear: both;">
                            <a href="{{URL::asset('$event->socail_link2')}}"><img style="float: left;padding-left: 43px;"src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-twitter-square.svg')}}" alt=""> {{$event->socail_link2}}
                            </a> 
                        </p>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="champ-contact-info">

        <h4 class="font-weight-bold bg_black text-light p-2 pl-4 mb-0 event-detail-headings">EVENT CHAMPION</h4>

            @isset((Auth::user()->membership->type))
            
            @if(Auth::user()->membership->type!='Silver' || Auth::id()==$event->user_id)

                {{-- @include('leepFront.eventDetail.contactInfo')  --}}
                @include('leepFront.eventDetail.championInformation')

            @else
            <div class="champion-info-wrapper"  style="padding-bottom: 90px;">
                <div class="blurr-back">
                  <div class="blurry text-center">
                    <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Group1657_blur_Image.png')}}" alt="">
                    <h4 class="font-weight-bold">PREMIUM ACCESS ONLY</h4>
                    <h6>Upgrade to Premium/Gold Membership to View</h6>
                    <a href="{{URL::asset('becomeMember')}}" class="btn btn-outline-secondary" type="submit">Upgrade Membership</a>
                </div>
            </div>                      
        </div>
        @endif
        @else
        <div class="champion-info-wrapper"  style="padding-bottom: 90px;">
            {{-- <h6>EVENT CHAMPION CONTACT INFORMATION</h6> --}}
            <div class="blurr-back">
              <div class="blurry text-center">
                {{-- <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Group1657_blur_Image.png')}}" alt=""> --}}
                <h4 class="font-weight-bold mb-3">PREMIUM CONTENT</h4>
                <h6 class="text-center m-0 p-0 font-weight-normal">Login to your account to view </h6>
                <h6 class="text-center m-0 p-0 font-weight-normal">Event Champion contact</h6>
                <h6 class="text-center m-0 p-0 font-weight-normal"> information.</h6>
                <a href="{{URL::asset('login')}}" class="rounded-0 px-4 mx-sm-3 mx-md-3 mx-lg-3 my-3 text_marron font20 font-weight-bold" type="submit">Login</a> <br>
                <a href="{{URL::asset('register')}}" class="rounded-0 px-4 text-success font20 font-weight-bold" type="submit">Register</a>
            </div>
        </div>                      
        </div>
        @endif
    </div>
                        <!-- Video-box-->

                        {{-- @dump($event->eventAttachment->id) --}}
                            {{-- expr --}}
                        <div class="supporting-wrapper p ">
                            <div class=""> </div>
                            <h4 class="font-weight-bold bg_black text-light p-2 pl-4 m-0 event-detail-headings">VIDEOS</h4>
                            @if ($event->eventAttachment->video1 != '' || $event->eventAttachment->video2 != '' || $event->eventAttachment->video3 != '')


                            <div class="row row d-flex justify-content-around ">
                                @if ($event->eventAttachment->video1 != '')
                                    <div class="col-md-3 bg-dark text-center my-5 mx-3 text-warning">
                                        VIDEO 1
                                    </div>
                                @else

                                @endif

                                @if ($event->eventAttachment->video2 != '')
                                    <div class="col-md-3 bg-dark text-center my-5 mx-3 text-warning">
                                        VIDEO 2
                                    </div>
                                @else
                                @endif

                                @if ($event->eventAttachment->video3 != '')
                                    <div class="col-md-3 bg-dark text-center my-5 mx-3 text-warning">
                                        VIDEO 3
                                    </div>
                                @else
                                @endif
                                
                            </div>

                            @else
                            <p> None supporting video found </p>
                            @endif

                        </div>

                        <!-- supporting-box -->
                        <div class="supporting-wrapper">
                            <div class=""> </div> 
                            <h4 class="font-weight-bold bg_black text-light p-2 pl-4 m-0 event-detail-headings">SUPPORTING DOCUMENTS</h4>
                            {{-- <div class="row d-flex justify-content-around">
                                <div class="col-md-3 text-center">
                                    <span class="imagenum ">Doucement 1</span>
                                    <div class="supportimg bg-dark text-warning my-2">DOUCEMENT 1</div>
                                    <p>Text from column AO</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <span class="imagenum">Document 2</span>
                                    <div class="supportimg bg-dark text-warning my-2">DOUCEMENT 2</div>
                                    <p>Text from column AP</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <span class="imagenum">Document 3</span>
                                    <div class="supportimg bg-dark text-warning my-2">DOUCEMENT 3</div>
                                    <p>Text from column AQ</p>
                                </div>
                            </div> --}}
                            @if ($event->eventAttachment->download1 != '' || $event->eventAttachment->download2 != '' || $event->eventAttachment->download3 != '')

                            <div class="download-header">
                                @if($event->eventAttachment->download1 != '')
                                <div class="download-box">
                                    <div class="col-md-12 text-right download">
                                        <a  href="{{URL::asset('downloadPdf/'.$event->id.'/1')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}" alt=""></a>
                                    </div>
                                    <div class="col-md-12 text-center media-link">
                                        <a href="">
                                            <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"alt="">
                                        </a>
                                        <p>{{substr($event->download_title1,0,22)}}</p>
                                    </div>
                                </div>
                                @endif
                                @if($event->eventAttachment->download2 != '')
                                <div class="download-box">
                                    <div class="col-md-12 text-right download">
                                        <a href="{{URL::asset('downloadPdf/'.$event->id.'/2')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-12 text-center media-link">
                                        <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"alt=""></a>
                                        <p>{{substr($event->download_title2,0,20)}}</p>
                                    </div>
                                </div>
                                @endif

                                @if($event->eventAttachment->download3 != '')
                                <div class="download-box">
                                    <div class="col-md-12 text-right download">
                                        <a href="{{URL::asset('downloadPdf/'.$event->id.'/3')}}">
                                            <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-12 text-center media-link">
                                        <a href="#">
                                            <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}" alt="">
                                        </a>
                                        <p>{{substr($event->download_title3,0,20)}}</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                            @else
                                <p> None Supporting document found </p>
                            @endif
                        </div>

                        <!-- Supporting Images  -->
                        <div class="supporting-wrapper">
                            <div class=""> </div> 
                            <h4 class="font-weight-bold bg_black text-light p-2 pl-4 m-0 event-detail-headings">ADDITIONAL IMAGES</h4> 
                            
                            @if ($event->eventAttachment->extra_image1 != '' || $event->eventAttachment->extra_image2 != '' || $event->eventAttachment->extra_image3 != '')
                            
                            <div class="row d-flex justify-content-around">
                                <div class="col-md-3 text-center">
                                    <div class="supportimg bg-dark text-warning my-2">IMAGE 1</div>
                                    <p class="font18 text_black font-weight-bold">Text from column AU</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="supportimg bg-dark text-warning my-2">IMAGE 2</div>
                                    <p class="font18 text_black font-weight-bold">Text from column AU</p>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="supportimg bg-dark text-warning my-2">IMAGE 3</div>
                                    <p class="font18 text_black font-weight-bold">Text from column AU</p>
                                </div>
                            </div>
                            @else
                                <p> None Supporting image found </p>
                                
                            @endif
                        </div>
                        <!-- ============Event Update============ -->

                        <div class=""> </div>
                        <div class="eventupdate bg_lightyellow py-1">
                            <div class="row row m-5 d-flex justify-content-around">
                                <div class="col-md-4 text-center">
                                    <p class="font-weight-bold font20 text_black mb-0">LAST UPDATED:</p>
                                    <span class="font20">{{ $event->updated_at->format('d-m-y') }}</span>
                                </div>
                                <div class="col-md-4 text-center">
                                    <a href="#" class="font-weight-bold font20 text_marron mb-0 underline">Report a Correction</a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <p class="font-weight-bold font20 text_black mb-0">EVENT MANAGER:</p>
                                </div>
                            </div>
                        </div> 
                            {{-- NON-MEMBER Bottom Ad --}}
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-3 left-sidebar-ad1" style="border: 1px solid; height: 90px;"> 
                                    <p class="text-center text_black">Bottom Ad</p>
                                </div>
                            </div>
                    </div>
                </div>

         {{-- Comments on event --}}

                {{-- <div class="borderBottom">

                    <h4 class="font-weight-bold ml-4 eventHeadings">COMMENTS</h4>

                </div>

                    <div class="container mt-5">
                        <div class="d-flex justify-content-center row">
                            <div class="col-md-12">
                                <div class="d-flex flex-column comment-section">
                                    <div class="bg-white p-2">

                                        @foreach ($event->EventComments as $comment)

                                        <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                            <div class="d-flex flex-column justify-content-start ml-2">
                                                <span class="d-block font-weight-bold name">{{ $comment->user->fname, $comment->user->lname }}</span>
                                                <span class="date text-black-50">
                                                    {{ Carbon\Carbon::parse($comment->created_at)->format('Y-m-d') }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="mt-2"> <p class="comment-text"> {{ $comment->comment }} </p> </div>

                                        @endforeach

                                    </div>
                                    <div class="bg-white">
                                        
                                    </div>

                                    @if (Auth::check())
                                        @if (isEventChamp())
                                            <div class="bg-light p-2">
                                            <form class="postCommentForm" method="POST" action="">
                                                @csrf
                                                <div class="d-flex flex-row align-items-start">
                                                    <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                                    <textarea class="form-control ml-1 shadow-none textarea" name="comment"></textarea>
                                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                                                </div>
                                                <div class="mt-2 text-right">
                                                    <a class="btn btn-primary btn-sm shadow-none postComment" >Post comment</a>
                                                    <a class="btn btn-outline-primary btn-sm ml-1 shadow-none">Cancel</a>
                                                </div>
                                            </form>
                                        </div>
                                        
                                        @endif

                                    
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>









            </div>
        </div>
    {{--     @if(session()->has('error'))
            <script>
                alert("{{ session()->get('error') }}");
            </script>
        @endif 
        --}}

        @endsection


        <style type="text/css">
            .date { font-size: 11px }
            .comment-text { font-size: 12px}
            .fs-12 { font-size: 12px }
            .shadow-none { box-shadow: none }
            .name { color: #007bff }
            .cursor:hover { color: blue }
            .cursor { cursor: pointer }
            .textarea { resize: none}
        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script src="{{ asset('js/blockcopy/pastepreventer.js') }}"></script>
        <script type="text/javascript">

    // ================================= Block Copy and Paste =================================

    $(".blockCopy").blockCopy({
      blockPasteClass : "prevent-paste",
      // message:"Shame on you!"
  });


    // ================================= Post Comment while viewing event =================================

    $(document).on('click','.postComment', function(){
        console.log('Post Comment Clicked');
        var formData = $('.postCommentForm').serializeArray();
        console.log(formData);
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
            type: 'POST',
            url: '{{ route('addComment') }}',
            data:formData,
            success: function(response){
                if (response.status == 1) {
                    // alert('Comment added successfully');
                    setTimeout(function(){ 
                        location.reload(); 
                    }, 2000);

                }
                else{
                    alert('Something went wrong');
                }
            }
        });
    })


</script>