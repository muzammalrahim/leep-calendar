<?php
// Initialiazation
	$page = new \App\Models\Page;
// End Initialiazation
?>
<!DOCTYPE html>

<html lang="en">



<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NNTKK5C');</script>
	<!-- End Google Tag Manager -->

    <meta name="csrf-token" content="{{ csrf_token() }}">


	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

  	<title>Leep Calender | @yield('title', $page_title ?? '')</title>

  	<link rel="stylesheet" href="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}"/>

	{{--   <link rel="stylesheet" href="{{URL::asset('css/bootstrap-steps.min.css')}}"/> --}}

  	<link rel="stylesheet" href="{{URL::asset('leep_calender/css/style.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('leep_calender/css/login-leep.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('leep_calender/css/event-search.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('css/contactus-page/contactus.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('leep_calender/css/event-detail.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('leep_calender/css/signup-page/signup-leep.css')}}"/>

  	<link rel="stylesheet" href="{{URL::asset('css/add event page/add-event-2.css')}}"/>

  	<link href="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css')}}" rel="stylesheet" />

  	<link href="{{URL::asset('css/membership-card-page/membership-card.css')}}" rel="stylesheet" />

  	<link href="{{URL::asset('css/legend-page/legend.css')}}" rel="stylesheet" />

  	<link href="{{URL::asset('css/aboutus-page/aboutus.css')}}" rel="stylesheet" />

  	<link href="{{URL::asset('css/categories/categories1.css')}}" rel="stylesheet" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">



	{{-- <script src="{{URL::asset('https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js')}}"></script> --}}


</head>

<body>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNTKK5C"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->


    @if (config('layout.page-loader.type') != '')

        @include('layout.partials._page-loader')

    @endif

    <div class="wrapper">

	<div class="sticky-top">

		{{-- ========================== Header ========================== --}}

	    <header>

            {{-- NON-MEMBER Top Ad --}}
           
            @yield('add_1')
            

	    	@include('layout.header') {{-- layout/header --}}
	    	<hr>
	    </header>

		{{-- ========================== Header ========================== --}}

    	<form  method="POST" action="{{url('searchEvents') }}">

    		@csrf

    		    <div class="search_bar">
    			    <div class="row m-0">	
    			    	<div class="col-7 col-sm-7 col-md-7 col-lg-7 mb-3">
    			    		<div class="search1 d-flex">
    					    	<input type="text" class="searchTerm1" style="width:84%" name="event_Name"  placeholder="Search for an event">
    					    	<button type="submit" class="searchButton">
    					    		<i class="fa fa-search"></i>
    					    	</button>
    					    </div>
    			    	</div>

    			    	<div class="col-4 col-sm-4 col-md-4 col-lg-4 float-left {{-- advanceSearch --}} mt-3 text-nowrap">
    	            		<a href="{{route('advance.search')}}" class="bg_maroon text-white py-1 px-2">Advanced Search</a>
                       </div>
    			    </div>	
    		    </div>

    	</form>

  	</div>


  	<div class="mt-3 mb-3 professional-event">

        <div class="row m-0">
        	{{-- <div class="col-lg-1 mr-lg-3"></div> --}}
        	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        		<div class="professional-heading editorial_heading">
			        <h6>The PROFESSIONAL Event, Editorial and Promotional Calendar</h6>
			    </div>
        	</div>

            <div class="col-md-4 drop-right">
                {{-- <i class="fa fa-filter"> Advanced Filters</i> --}}
                <div class="grey-wrapper" style="display: none;">
                	<div class="container">
                		<div class="wrapper1">
                			<div class="div1">
                				<div class="heading"> <h6>Country</h6> </div>

                                <div class="input-group md-form form-sm form-2">
                                    <input class="form-control my-0 py-1 red-border" type="text"
                                        placeholder="Search a country" aria-label="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text red lighten-3" id="basic-text1">
                                        	<i class="fa fa-search text-grey" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                </div>

                                <div>
                                    <ul>
                                        <li><input type="checkbox"> Africa</li>

                                        <li><input type="checkbox"> Alcohol, Tobacco & Drugs</li>

                                        <li><input type="checkbox"> Animals, Fish, Insects & Birds</li>

                                        <li><input type="checkbox"> Anniversaries</li>

                                        <li class="no-check"> Australia</li>

                                        <li class="no-check"> Books</li>

                                        <li class="no-check"> Brazil & S.America</li>

                                        <li class="no-check"> Buddhism</li>

                                    </ul>

                                </div>

                            </div>

                            <div class="div2">
                            	<div class="heading"> <h6>Category</h6> </div>
                                <div class="input-group md-form form-sm form-2">
                                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search a category" aria-label="Search">
                                    <div class="input-group-append">
                                        <span class="input-group-text red lighten-3" id="basic-text1">
                                        	<i class="fa fa-search text-grey" aria-hidden="true"></i>
                                        </span>

                                    </div>
                                </div>

                                <div>
                                    <ul>
                                        <li><input type="checkbox"> Afghanistan, AF</li>

                                        <li><input type="checkbox"> Aland Island, AX</li>

                                        <li><input type="checkbox"> Albania, AL</li>

                                        <li><input type="checkbox"> Algeria, DZ</li>

                                        <li class="no-check"> American, Samoa, AS</li>

                                        <li class="no-check"> Andarra, AD</li>

                                        <li class="no-check"> Angola, AO</li>

                                        <li class="no-check"> Anguilla, Al</li>

                                    </ul>
                                </div>

                            </div>



                            <div class="div3">
                                <div class="heading"><h6>Event Type</h6></div>
                                <div>
                                    <ul>
                                        <li><input type="checkbox"> Daily</li>
                                        <li><input type="checkbox"> Weekly</li>
                                        <li><input type="checkbox"> Annual</li>
                                        <li><input type="checkbox"> Recurring</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="div4">
                                <div class="heading"><h6>Duration</h6></div>
                                <div>
                                    <ul>
                                        <li><input type="checkbox"> All</li>
                                        <li><input type="checkbox"> 1 Day</li>
                                        <li><input type="checkbox"> 2 Day</li>
                                        <li><input type="checkbox"> 3 Day</li>
                                        <li><input type="checkbox"> 4 Day</li>
                                        <li><input type="checkbox"> 5 Day</li>
                                        <li><input type="checkbox"> 6 Day</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="div5">

                                <div class="heading">

                                    <h6>Event Type</h6>

                                </div>

                                <div>

                                    <ul>

                                        <li class="no-check"> Daily</li>

                                        <li class="no-check"> weekly</li>

                                        <li class="no-check"> Annual</li>

                                        <li class="no-check"> Recurring</li>

                                    </ul>

                                </div>

                            </div>

                            <div class="div6">

                                <div class="heading">

                                    <h6>Event Type</h6>

                                </div>

                                <div>

                                    <ul>

                                        <li class="no-check"> Daily</li>

                                        <li class="no-check"> weekly</li>

                                        <li class="no-check"> Annual</li>

                                        <li class="no-check"> Recurring</li>

                                    </ul>

                                </div>

                            </div>

                        </div>





                    </div>

                </div>

            </div>

        </div>



    </div>


    {{-- Calendar and slider --}}

    <div class="hero-wrapper mb-4 py-3">
        <div class="container123">
            <div class="row m-0">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 px-md-5 px-lg-0 px-2 bg-site">
                    <div class="calender m-auto px-sm-5 px-md-0 px-lg-5 mx-lg-0 mx-md-0 mx-sm-5  mt-lg-2 mt-md-2">
                        <div class="calender-head mb-4">
                            <h3 class="pb-2 pt-3"> Today is: &nbsp {{ getMonthFullName($m) }}<span class="ml-2"></span> {{ $d  }}</h3>
                        </div>
                        <!-- Tabs -->
                        <section id="tabs">

                            @include('leepFront.parts.calendar') {{-- leepFront/parts/calendar --}}  
                        </section>
                        <!-- ./Tabs -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 p-0">
                    @yield('calendar-slider')
                </div>
            </div>
        </div>
    </div>
    
    @yield('content')


<div class="borderline my-3"></div>

    <!-- Footer -->

<div class="footer">

	@include('layout.footer')
	

	{{-- <div class="container">
        <div class="footer-links">
        	<div>
          		<a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-facebook-square.svg')}}"
                alt=""></a> 
            </div>
      		<div>
          		<a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-instagram.svg')}}" alt=""></a>
          	</div>
          	<div>
          		<a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-twitter-square.svg')}}" alt=""></a>
          	</div>
          	<div>
          		<a href="#"><img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-linkedin.svg')}}" alt=""></a>
          	</div>
          	<div>
          		<a href="#"> <img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-behance-square.svg')}}" alt=""></a>
          	</div>
        </div>

        <div class="footer-copy text-center"> 
        	<p>Copyrights &copy 2020. Jubilee LLC. All Rights Reserved.</p>
        </div>
    </div> --}}

</div>

<div class="my-3"></div>


    <!-- Mobile  Footer -->

    <div class="mobile-footer">

      <div class="container">

        <div class="row">

        	<div class="col-md-1">

		      	<div class="footer1">
		        	<h6>Pages</h6>
		        	<ul>
		        		@foreach( $page->getPagesList('Publish') as $page )
		        			<li>
		        				<a href="{{ route('page.detail.show',["slug"=>$page->slug]) }}" class="text-dark">{{ $page->title }}</a>
		        			</li>
		        		@endforeach
		        	</ul>
		        </div>

		    </div>

          
          <div class="col-12">

            <div class="footer-links">

              <div><a href="#"><img

                    src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-facebook-square.svg')}}"

                    alt=""></a> </div>

              <div><a href="#"><img

                    src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-instagram.svg')}}" alt=""></a>

              </div>

              <div><a href="#"><img

                    src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-twitter-square.svg')}}"

                    alt=""></a>

              </div>

              <div><a href="#"><img

                    src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-linkedin.svg')}}" alt=""></a>

              </div>

              <div> <a href="#"> <img

                    src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Icon awesome-behance-square.svg')}}"

                    alt=""></a>

              </div>

            </div>

          </div>

          <div class="col-12">

            <div class="footer-copy text-center">

              <p>Copyrights &copy 2020. Jubilee LLC. All Rights Reserved.</p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>



	{{-- /*dropdown.css-start*/ --}}

<style type="text/css">

	.selections{
	    margin-left: 2px;
	    width: 230px !important;
	}

	.selections select{
	    margin-top: 8px;
	    padding: 0px !important;
	    width: 430px !important;
	    background-color: #000 !important;
	    color: #ffffff !important;
	    border: none !important;
	}

	.selections select:focus{
	    border: transparent !important;
	}

	.selections option{
	    padding-left: 10px !important;
	}

	.selections select::-webkit-scrollbar {
	    width: 10px;               /* width of the entire scrollbar */
	}

	.selections select::-webkit-scrollbar-track {
	    background: #eee;        /* color of the tracking area */
	}

	.selections select::-webkit-scrollbar-thumb {
	    background-color: #60012C;    /* color of the scroll thumb */
	    border-radius: 20px;       /* roundness of the scroll thumb */
	    border: 2px solid #eee;  /* creates padding around scroll thumb */
	}
	

</style>

<script type="text/javascript">
    var base_url = '{!! url('/') !!}';
</script>

	{{-- /*dropdown.css-end*/ --}}
<script src="{{URL::asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"></script>

<script src="{{URL::asset('https://code.jquery.com/jquery-3.5.1.min.js')}}"></script>

<script src="{{URL::asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}"></script>

<script src="{{URL::asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js')}}"></script>

{{-- <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script> --}}

<script src="{{URL::asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}"></script>

<script src="{{URL::asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js')}}"></script>

{{-- NEW ADDED --}}

    {{-- <script src="{{URL::asset('http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js')}}"></script> --}}

    {{-- <script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')}}"></script> --}}

{{-- NEW ADDED END --}}

{{-- NEW ADDED --}}

<script src="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js')}}"></script>

{{-- NEW ADDED END --}}

{{-- <script src = "{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script> --}}

<script src="{{URL::asset('js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js" integrity="sha512-UH428GPLVbCa8xDVooDWXytY8WASfzVv3kxCvTAFkxD2vPjouf1I3+RJ2QcSckESsb7sI+gv3yhsgw9ZhM7sDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script type="text/javascript">

$(document).ready(function(){  

    $('.js-example-basic-multiple').select2();

    $('.select2-search__field').css('border', 'none');

    $('.select2-search__field').attr("placeholder", "Type here to search Category ");

       // $('select').select2('.js-example-basic-multiple');

       // $.fn.select2.defaults.set("theme", "bootstrap");
       
      
});  
</script>
<script>
    $("#zoom_01").elevateZoom({
        zoomType: "inner",
        debug : true,
        cursor: "crosshair", 
        zoomWindowFadeIn: 100,
        zoomWindowFadeOut: 8000
    });
</script>

 {{-- Dead Links Start Akmal --}}
        <script type="text/javascript">
            function checkDeadLink(event){
                if (event.value){
                    let _token = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: "{{ route('checkDeadLink') }}",
                        type: "POST",
                        data: {
                            url: event.value,
                            _token: _token
                        },
                        beforeSend: function (){
                            $(event).css({"background" : "url({{asset('assets/images/loading.gif')}}) no-repeat right center"});
                        },
                        success: function (resp){
                            if (resp){
                                if ($(event).next('div').length){
                                    $(event).next('div').remove();
                                }
                            } else {
                                if (!$(event).next('div').length) {
                                    $(event).after('<div class="alert alert-danger font-weight-bold" role="alert">You Have Entered Dead Link!</div>');
                                }
                            }
                            $(event).removeAttr('style');
                        },
                    });
                }
            }







            $(document).ready(function(){

            	console.log('this is dropdown');

			    $(".dropdown").hover(function(){
			        var dropdownMenu = $(this).children(".dropdown-menu");
			        if(dropdownMenu.is(":visible")){
			            dropdownMenu.parent().toggleClass("open");
			        }
			    });
			});
        </script>


        {{-- Dead Links End Akmal --}}
      

</body>

<style type="text/css">	
	
	.dropdown:hover .dropdown-menu{
        display: block;
    }
    .dropdown-menu{
        margin-top: 0;
    }
</style>


</html>