{{-- Extends layout --}}
@extends('layout.layoutLeep')
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
        <div class="col-lg-2 col-md-3 pt-4"> 

            @include('layout.leftSidebar')

        </div>
        <div class="col-lg-8 col-md-7 pt-4 ml-lg-5 ml-md-3"> 
          <div class="event-main blockCopy">
            <div class="eventsDetail">
                <div class="event-detail-container">

                    @include('layout.errorMsg')


                    <div class="borderBottom">
                        <div class="container">
                         <div class="row">
                            <div class="col-md-10 event-detail-left">
                                @if(isset($event->name))
                                <h1 class="text-dark top-heading">{{$event->alt_text}}</h1>
                                @endif
                            </div>

                            <div class="col-md-12">
                                <span class="float-right font-color font18 font-weight-bold estimate-date"> This Date is Estimated </span> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="eventDetailAndRegions m-4 ">
                    <div class="borderBottom eventInfo">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="country mb-3"> 
                                    <span class="font-weight-bold "> Country/Region: </span> {{ $event->country1 }} 
                                </div> 
                            </div>

                            <div class="col-md-6">
                                <div class="eventDate eventInfo mb-3"> 
                                    <span class="font-weight-bold"> Event Date(s):</span> 
                                    {{-- July 1, 2019 - July 31, 2019  --}}

                                    {{date("F", strtotime(date("Y")."-".$event->m_start."-01")).' '. $event->d_start}} , {{$event->y_start}} - 
                                    {{date("F", strtotime(date("Y")."-".$event->m_end."-01")).' '. $event->d_end}} , {{$event->y_end}}
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="eventCategories">
                                    <span class="font-weight-bold"> Event Categories:</span> 
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
                            <div class="col-md-6">
                                <div class="lenghtOfFamily mb-3"> <span class="font-weight-bold"> Length of Event: </span> {{ $event->type }}  </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="eventChampion mb-3">
                                    <span class="font-weight-bold"> Event Champion:</span> {{ $event->champ_name }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="source mb-3">
                                   <span class="font-weight-bold"> Source/Reference URL: </span> <!-- {{ $event->url }} -->
                               </div>
                           </div>
                       </div>

                       <div class="row">
                        <div class="col-md-6">
                            <div class="socialLinks mb-3">
                                <span class="font-weight-bold"> Event Champion Social Media Links:</span>
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
                        <div class="col-md-6">
                            <div class="eventAddress mb-3">
                               <span class="font-weight-bold"> Event Address (if available): </span> {{ $event->address1 }}
                           </div>

                           <div class="registerPurchase mb-3">
                            <span class="font-weight-bold"> Register or Purchase Tickets to this Event (if available): </span>
                            {{ $event->purchas_reserve }}
                        </div>

                    </div>
                </div>

            </div>

            <div class="descript borderBottom">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="events-description">
                            <h4 class="font-weight-bold">Description</h4>
                            <p class="description-text">@isset($event->description){{$event->description}}@endif</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- champion-box -->

    <div class="m-4 event-card1 borderBottom pb-2">

        <div class="row">


            <div class="col-md-12">
                <div class="event-champion">
                    <h4 class="font-weight-bold">Event Champion</h4>
                </div>

                
                    <div class="focal-contact1 mt-4">
                        <div class="row m-0">

                            <div class="focal-person">
                                <div class="col-md-4 ">
                                    <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 256.svg')}}"
                                    alt="">
                                </div>
                                <div class="col-md-8 ser-name">
                                    <a href="{{ route('champion.detail',['id' => $event->id]) }}" target="_blank" class="eventChampionLink font-weight-bold">{{ $event->event_champion }}</a>

                                        

                                    {{-- <p>Darrel_Hn87@yahoo.com</p> --}}
                                </div>
                                <!-- hover-box-start-->
                                                       {{--  <div class="hover-card">
                                                            <div class="col-md-12 focal-hover">
                                                                <div><img
                                                                        src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 256.svg')}}"
                                                                        alt=""></div>
                                                                <div class="user-name"><b> {{ $event->event_champion }} </b>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <hr>
                                                            </div>                                                    
                                                        </div> --}}
                                                        <!-- hover-box-end-->
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </a>


                                    {{-- To be removed --}}
                                    @if($event->socail_link1!='' || $event->socail_link1!='' || $event->socail_link1!='')
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                      <div class="schedule-four">
                                          <h6>Champion Social Media Links</h6>
                                          <div class="schedule-detail text-center mt-1">
                                            {{-- fb --}}
                                            @if($event->socail_link1!='')
                                            <p class="estimate-date" style="    clear: both;float: left;"> <a href="{{URL::asset('$event->socail_link1')}}"><img style="float: left;padding-left: 43px;" 
                                              src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-facebook-square.svg')}}"
                                              alt=""> {{$event->socail_link1}} </a></p>
                                              {{-- Twiter --}}
                                              @endif
                                              @if($event->socail_link3!='')                              
                                              <p class="estimate-date" style="    clear: both;float: left;"><a href="{{URL::asset('$event->socail_link3')}}"><img style="float: left;padding-left: 43px;" 
                                                  src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-instagram.svg')}}"
                                                  alt=""> {{$event->socail_link3}} </a> </p>
                                                  {{-- youtube --}}
                                                  @endif
                                                  @if($event->socail_link2!='')                              
                                                  <p class="estimate-date" style="  float: left;  clear: both;"><a href="{{URL::asset('$event->socail_link2')}}"><img style="float: left;padding-left: 43px;"
                                                      src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon awesome-twitter-square.svg')}}"
                                                      alt=""> {{$event->socail_link2}}</a> </p>
                                                      @endif
                                                  </div>

                                              </div>
                                          </div>
                                          @endif
                                          {{-- End to be removed --}}
                                      </div>
                                  </div>
                                  <!-- champion-box-end-->

                                  <!-- champion-contact-information -->
                                  <div class="champ-contact-info m-4">

                                    <h4 class="font-weight-bold event-champ">EVENT CHAMPION CONTACT INFORMATION</h4>

                                    @isset((Auth::user()->membership->type))
                                    
                                    @if(Auth::user()->membership->type!='Silver' || Auth::id()==$event->user_id)

                                    @include('leepFront.eventDetail.contactInfo') {{-- leepFront/eventDetail/contactInfo --}}

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
                                        <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Group1657_blur_Image.png')}}" alt="">
                                        <h4 class="font-weight-bold">PREMIUM ACCESS ONLY</h4>
                                        <h6>Upgrade to Premium/Gold Membership to View</h6>
                                        <a href="{{URL::asset('becomeMember')}}" class="btn btn-outline-secondary" type="submit">Upgrade Membership</a>
                                    </div>
                                </div>                      
                            </div>
                            @endif
                        </div>
                        <!-- Video-box-->
                        <div class="support-wrapper m-4">
                            <div class="borderBottom"> </div>
                            <h4 class="font-weight-bold ml-5 mt-4">TOPIC & SUPPORTING VIDEOS</h4>
                            
                            <div class="row row d-flex justify-content-around ">
                               <div class="col-md-3 bg-dark text-center my-5 mx-3 text-warning">
                                   VIDEO 1
                               </div>
                               <div class="col-md-3 bg-dark text-center my-5 mx-3 text-warning">
                                VIDEO 2
                            </div>
                            <div class="col-md-3 bg-dark text-center my-5 mx-3 text-warning">
                             VIDEO 3
                         </div>

                     </div>


                 </div>


                 <!-- supporting-box -->
                 <div class="supporting-wrapper m-4">
                   <div class="borderBottom"> </div> 
                   <h4 class="font-weight-bold mt-4">TOPIC & SUPPORTING DOCUMENTS</h4>
                   <div class="row d-flex justify-content-around">
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
             </div>
             <div class="download-header">
              @isset($event->download1)
              <div class="download-box">
                <div class="col-md-12 text-right download">
                    <a  href="{{URL::asset('downloadPdf/'.$event->id.'/1')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                        alt=""></a>
                    </div>
                    <div class="col-md-12 text-center media-link">
                        <a href=""><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                            alt=""></a>
                            <p>{{substr($event->download_title1,0,22)}}</p>
                        </div>

                    </div>
                    @endif
                    @isset($event->download2)
                    <div class="download-box">
                        <div class="col-md-12 text-right download">
                            <a href="{{URL::asset('downloadPdf/'.$event->id.'/2')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                alt=""></a>
                            </div>
                            <div class="col-md-12 text-center media-link">
                                <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                    alt=""></a>
                                    <p>{{substr($event->download_title2,0,20)}}</p>
                                </div>

                            </div>
                            @endif
                            @isset($event->download3)
                            <div class="download-box">
                                <div class="col-md-12 text-right download">
                                    <a href="{{URL::asset('downloadPdf/'.$event->id.'/3')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Icon feather-download.svg')}}"
                                        alt=""></a>
                                    </div>
                                    <div class="col-md-12 text-center media-link">
                                        <a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/media-link.svg')}}"
                                            alt=""></a>
                                            <p>{{substr($event->download_title3,0,20)}}</p>
                                        </div>

                                    </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Supporting Images  -->
                            <div class="supporting-wrapper m-4">
                             <div class="borderBottom"> </div> 
                             <h4 class="font-weight-bold ml-5 mt-4">TOPIC & SUPPORTING IMAGES</h4> 
                             <div class="row d-flex justify-content-around">
                                 <div class="col-md-3 text-center">
                                     <span class="imagenum ">Image 1</span>
                                     <div class="supportimg bg-dark text-warning my-2">IMAGE 1</div>
                                     <p>Text from column AU</p>
                                 </div>
                                 <div class="col-md-3 text-center">
                                   <span class="imagenum">Image 2</span>
                                   <div class="supportimg bg-dark text-warning text- my-2">IMAGE 2</div>
                                   <p>Text from column AV</p>
                               </div>
                               <div class="col-md-3  supportingimg text-center">
                                  <span class="imagenum">Image 3</span>
                                  <div class="supportimg bg-dark text-warning my-2">IMAGE 3</div>
                                  <p>Text from column AW</p>
                              </div>
                          </div>
                      </div>
                      <!-- ============Event Update============ -->

                      <div class="borderBottom"> </div>
                      <div class="eventupdate">
                        <div class="row row m-5 d-flex justify-content-around">
                           <div class="col-md-4 text-center">
                              <p>Event Last Updated:</p>
                              <span>January 15, 2021</span>
                          </div>
                          <div class="col-md-4 text-center">
                              <p>REPORT CHANGES TO THIS EVENT</p>
                          </div>
                          <div class="col-md-4 text-center">
                             <p>Event Maintenance:</p>
                             <span>Column BD Text</span>
                         </div>
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