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
	    	@include('layout.header') {{-- layout/header --}}
	    	<hr>
	    </header>

		{{-- ========================== Header ========================== --}}

	<form  method="POST" action="{{url('searchEvents') }}">

		@csrf



	    <!-- search-bar -->

{{-- 	    <div class="wrap">

	      <div class="search">

	        <input type="text" name="event_Name" class="searchTerm" placeholder="Search for an event">

	        <button type="submit" class="searchButton">

	          <i class="fa fa-search"></i>

	        </button>

	      </div>

	    </div>

 --}}

	    <!-- DropDown-bar -->

{{-- 	    <div class="dropdown-bar">

	      <div class="row">



	        <div class="col-md-8 drop-left">

	          <div class=" my-btn btn-group col-md-1 drop">

	            <button class="  btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"

	              aria-haspopup="true" aria-expanded="false">

	              Category

	            </button>



	            <div class="search-category">

	              <div class="category-search sticky-top">

	                <div class="input-group md-form form-sm form-2">

	                  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search a category"

	                    aria-label="Search">

	                  <div class="input-group-append">

	                    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search text-grey"

	                        aria-hidden="true"></i></span>

	                  </div>



	                </div>

	              </div>

	              <select class="form-select" aria-label="Default select example" name='category'>

						<option value="" selected="">Select</option>

	              	@foreach(App\Models\category::all() as $cat)

						<option value="{{$cat->cat_id}}">{{$cat->name}}</option>

					@endforeach	              	

	              </select>

	            </div>

	          </div>

	          <div class="xyz btn-group col-md-1 drop">

	            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"

	              aria-haspopup="true" aria-expanded="false">

	              Duration

	            </button>



	            <div class="duration-box">

	              <form class="row">

	                <div class="checkbox col-md-6">

	                  <label><input type="checkbox" name="weekly" value="Weekly"><span>Weekly</span></label>

	                </div>

	                <div class="checkbox col-md-6">

	                  <label><input type="checkbox" name="daily" value="Daily"><span>Daily</span> </label>

	                </div>

	                <div class="checkbox col-md-6">

	                  <label><input type="checkbox" name="annual" value="Annual"><span>Annual</span></label>

	                </div>



	            </div>

	          </div>

	          <div class="my-btn btn-group col-md-1 drop">

	            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"

	              aria-haspopup="true" aria-expanded="false">

	              Country

	            </button>

	            <div class="search-category">

	              <div class="category-search sticky-top">

	                <div class="input-group md-form form-sm form-2">

	                  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search a category"

	                    aria-label="Search">

	                  <div class="input-group-append">

	                    <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search text-grey"

	                        aria-hidden="true"></i></span>

	                  </div>



	                </div>

	              </div>



	              <div class="col-12 mt-3">

	                <select class="form-select" aria-label="Default select example" name="country">

		                <option class="active" value="">All</option>

		                <option value="AF">Afrikaans</option>

		                <option value="SQ">Albanian</option>

		                <option value="AR">Arabic</option>

		                <option value="HY">Armenian</option>

		                <option value="EU">Basque</option>

		                <option value="BN">Bengali</option>

		                <option value="BG">Bulgarian</option>

		                <option value="CA">Catalan</option>

		                <option value="KM">Cambodian</option>

		                <option value="ZH">Chinese (Mandarin)</option>

		                <option value="HR">Croatian</option>

		                <option value="CS">Czech</option>

		                <option value="DA">Danish</option>

		                <option value="NL">Dutch</option>

		                <option value="EN">English</option>

		                <option value="ET">Estonian</option>

		                <option value="FJ">Fiji</option>

		                <option value="FI">Finnish</option>

		                <option value="FR">French</option>

		                <option value="KA">Georgian</option>

		                <option value="DE">German</option>

		                <option value="EL">Greek</option>

		                <option value="GU">Gujarati</option>

		                <option value="HE">Hebrew</option>

		                <option value="HI">Hindi</option>

		                <option value="HU">Hungarian</option>

		                <option value="IS">Icelandic</option>

		                <option value="ID">Indonesian</option>

		                <option value="GA">Irish</option>

		                <option value="IT">Italian</option>

		                <option value="JA">Japanese</option>

		                <option value="JW">Javanese</option>

		                <option value="KO">Korean</option>

		                <option value="LA">Latin</option>

		                <option value="LV">Latvian</option>

		                <option value="LT">Lithuanian</option>

		                <option value="MK">Macedonian</option>

		                <option value="MS">Malay</option>

		                <option value="ML">Malayalam</option>

		                <option value="MT">Maltese</option>

		                <option value="MI">Maori</option>

		                <option value="MR">Marathi</option>

		                <option value="MN">Mongolian</option>

		                <option value="NE">Nepali</option>

		                <option value="NO">Norwegian</option>

		                <option value="FA">Persian</option>

		                <option value="PL">Polish</option>

		                <option value="PT">Portuguese</option>

		                <option value="PA">Punjabi</option>

		                <option value="QU">Quechua</option>

		                <option value="RO">Romanian</option>

		                <option value="RU">Russian</option>

		                <option value="SM">Samoan</option>

		                <option value="SR">Serbian</option>

		                <option value="SK">Slovak</option>

		                <option value="SL">Slovenian</option>

		                <option value="ES">Spanish</option>

		                <option value="SW">Swahili</option>

		                <option value="SV">Swedish </option>

		                <option value="TA">Tamil</option>

		                <option value="TT">Tatar</option>

		                <option value="TE">Telugu</option>

		                <option value="TH">Thai</option>

		                <option value="BO">Tibetan</option>

		                <option value="TO">Tonga</option>

		                <option value="TR">Turkish</option>

		                <option value="UK">Ukrainian</option>

		                <option value="UR">Urdu</option>

		                <option value="UZ">Uzbek</option>

		                <option value="VI">Vietnamese</option>

		                <option value="CY">Welsh</option>

		                <option value="XH">Xhosa</option>

	                </select>

	              </div>

	            </div>

	          </div>

	          <div class="btn-group col-md-1 drop">

	            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"

	              aria-haspopup="true" aria-expanded="false">

	              Other Filters

	            </button>



	          </div>

	        </div>

	        <div class="col-md-4 drop-right">

	          <i class="fa fa-filter"> Advanced Filters</i>

	          <div class="grey-wrapper">

	            <div class="container">

	              <div class="wrapper1">

	                <div class="div1">

	                  <div class="heading">

	                    <h6>Country</h6>

	                  </div>

	                  <div class="input-group md-form form-sm form-2">

	                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search a country"

	                      aria-label="Search">

	                    <div class="input-group-append">

	                      <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search text-grey"

	                          aria-hidden="true"></i></span>

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

	                  <div class="heading">

	                    <h6>Category</h6>

	                  </div>

	                  <div class="input-group md-form form-sm form-2">

	                    <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search a category"

	                      aria-label="Search">

	                    <div class="input-group-append">

	                      <span class="input-group-text red lighten-3" id="basic-text1"><i class="fa fa-search text-grey"

	                          aria-hidden="true"></i></span>

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

	                  <div class="heading">

	                    <h6>Event Type</h6>

	                  </div>

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

	                  <div class="heading">

	                    <h6>Duration</h6>

	                  </div>

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

	            <div class=" text-center col-12 filter-btn">

	              <a href="#" class="btn btn-success" type="submit">Apply</a>

	            </div> 

	            <div class="col-12 text-center rest-filter"> <u>Rest Filters</u></div>

	          </div>

	        </div>

	      </div>

	    </div> --}}

		    <!-- search-bar -->
		    
		    <div class="wrap">

			    <div class="row m-0">	
			    	<div class="col-12 col-sm-12 col-md-5 col-lg-6 mb-3">
			    		<div class="search">
					    	<input type="text" class="searchTerm" name="event_Name"  placeholder="Search for an event">
					    	<button type="submit" class="searchButton">
					    		<i class="fa fa-search"></i>
					    	</button>
					    </div>
			    	</div>

			    	
			    	<div class="col-5 col-sm-6 col-md-2 col-lg-2 text-center advanceSearch mt-3">
	            		<a href="{{route('advance.search')}}" class="font-weight-bold">Advanced Search</a>
                   </div>
			    </div>	
			    

			    {{-- </div> --}}

		    </div>




		    <!-- DropDown-bar -->

	        <div class="mt-5 mb-3 mx-4">

	            <div class="row m-0">
	            	<div class="col-1 mr-5"></div>
	            	<div class="col-md-6 col-lg-6 col-sm-6 col-6 ml-4">
	            		<div class="professional-heading ml_15">
					        <h6>The PROFESSIONAL Event, Editorial and Promotional Calendar</h6>
					    </div>
	            	</div>

	            	{{-- Login Button  --}}

	            	<div class="col-6 col-sm-6 col-md-4 col-lg-3 mb-3 m-0 p-0 ml-3 ml-sm-0 ml-md-0 ml-lg-0">
			    		 <div class="d-flex">
				    		@guest
						        <form class="form-inline my-2 my-lg-0 right-login">
						        	{{-- <a class="member" href="{{URL::asset('/becomeEventChamp')}}"><u>Become a member</u></a> --}}
						        	<a href="{{URL::asset('login')}}" class="btn btn-outline-secondary rounded-0 px-4 mx-3"  type="submit">Login</a>
						        	<a href="{{URL::asset('register')}}" class="btn btn-outline-success rounded-0 px-4 text-white" type="submit" style="background-color:#003300 !important;">Register</a>
						        </form>
						        @else

						        @if(Auth::User()->email_verified_at=='')
							    	<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
							        	@csrf
							        	<button type="submit" class="btn btn-outline-secondary">{{ __('Resend Verification Link') }}</button> 
							        </form>&nbsp

							        <a class="btn btn-outline-secondary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						        	{{ __('Logout') }}
							        </a>

							        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
							        	@csrf
							        </form>
						        @else


									<div class="user-img"> 
										<a href="{{URL::asset('settings')}}">
											@if(Auth::user()->image!='')
												<img src="{{URL::asset('leep_calender/images/userProfilePic/'.Auth::user()->image)}}" alt="" style='width:52px;height:49px;border-radius: 15%;'>
											@else
												<img src="{{URL::asset('/leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" alt="" >
											@endif

											
										</a>
									</div>

									<div class="nav-item dropdown mt-1">
					                    <a href="#" class="nav-link dropdown-toggle text-dark" data-toggle="dropdown">{{ Auth::user()->fname }}</a>
					                    <div class="dropdown-menu">

						                        <a class="dropdown-item">
						                        	<b onclick="window.location.replace('{{URL::asset('becomeMember')}}','self'); " style=" cursor:pointer;" >
						                        		{{Auth::user()->fname}} 
						                        	</b>
						                        </a>
												<a href="{{URL::asset('addNewEvent')}}" class="btn btn-secondary dropdown-item" type="submit">Create Event</a>

						                        <a class="dropdown-item">
						                        	<label onclick="window.location.replace('{{URL::asset('my-events')}}','self'); " style=" cursor:pointer;">
						                        		My Events
						                        	</label>
						                        </a>

						                        <a class="dropdown-item text-dark" href="{{ route('logoutRoute') }}"> Logout
							                        {{-- <a href="{{ route('logoutRoute') }}" class="text-dark"> Logout </a> --}}
						                        </a>
						                    </div>
					                </div>

						        @endif

						        @endguest

						     </div> 
			    	</div>

	            	{{-- Login Button --}}

	            	
                   

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



	</form>

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



<script type="text/javascript">

$(document).ready(function(){  

    $('.js-example-basic-multiple').select2();

    $('.select2-search__field').css('border', 'none');

    $('.select2-search__field').attr("placeholder", "Type here to search Category ");

       // $('select').select2('.js-example-basic-multiple');

       // $.fn.select2.defaults.set("theme", "bootstrap");
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