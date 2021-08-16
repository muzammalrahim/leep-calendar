<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leep Calender | @yield('title', $page_title ?? '')</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{URL::asset('leep_calender/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('leep_calender/css/login-leep.css')}}">
  <link rel="stylesheet" href="{{URL::asset('leep_calender/css/event-search.css')}}">
  <link rel="stylesheet" href="{{URL::asset('leep_calender/css/event-detail.css')}}">
  <link rel="stylesheet" href="{{URL::asset('leep_calender/css/signup-page/signup-leep.css')}}">

</head>
<body>
        @if (config('layout.page-loader.type') != '')
            @include('layout.partials._page-loader')
        @endif


  <div class="wrapper">
	<div class="sticky-top">
	    <header>
	      <div class="professional-heading">
	        <h6>The PROFESSIONAL Event, Editorial and Promotional Calendar.</h6>
	      </div>
	      <nav class="navbar navbar-expand-lg navbar-light bg-light">
	        <a class="navbar-brand" href="#"><img
	            src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg')}}" alt="">
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          <ul class="navbar-nav mr-auto">
	            <li class="nav-item active">
	              <a class="nav-link" href="#">Home </a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Categories</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Event Search</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">About us</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Contact Us</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Legend</a>
	            </li>
	          </ul>
                @guest
	          <form class="form-inline my-2 my-lg-0 right-login">
	            <a class="member" href="#"><u>Become a member</u> </a>
	            <a href="{{URL::asset('login')}}" class="btn btn-outline-secondary" type="submit">Login</a>
	            <a href="{{URL::asset('register')}}" class="btn btn-outline-success" type="submit">Sign up</a>
	          </form>
	            @else
                    <a class="btn btn-outline-secondary" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
	        </div>
	      </nav>
	      <hr>
	    </header>

	<form  method="POST" action="{{url('searchEvents') }}">
		@csrf

	    <!-- search-bar -->
	    <div class="wrap">
	      <div class="search">
	        <input type="text" name="event_Name" class="searchTerm" placeholder="Search for an event">
	        <button type="submit" class="searchButton">
	          <i class="fa fa-search"></i>
	        </button>
	      </div>
	    </div>

	    <!-- DropDown-bar -->
	    <div class="dropdown-bar">
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
{{-- 	                <div class="checkbox col-md-6">
	                  <label><input type="checkbox" value="type_all" value="all"><span>All</span> </label>
	                </div>
 --}}	                <div class="checkbox col-md-6">
	                  <label><input type="checkbox" name="weekly" value="Weekly"><span>Weekly</span></label>
	                </div>

	              {{-- </form> --}}
	              {{-- <form class="row"> --}}
	                <div class="checkbox col-md-6">
	                  <label><input type="checkbox" name="daily" value="Daily"><span>Daily</span> </label>
	                </div>
	                <div class="checkbox col-md-6">
	                  <label><input type="checkbox" name="annual" value="Annual"><span>Annual</span></label>
	                </div>

	              {{-- </form> --}}

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
	    </div>
	</form>
  	</div>







    @yield('content')









    <div class="second-line">
      <hr>
    </div>
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="footer-data">
          <div class="footer1">
            <h6>Shortcuts</h6>
            <ul>
              <li>Event Search</li>
              <li>Categories</li>
              <li>Legend</li>
              <li>membership</li>
              <li>About Us</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="footer1">
            <h6>Support</h6>
            <ul>
              <li>Privacy Policy</li>
              <li>Legal</li>
              <li>Affliates</li>
              <li>membership</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="footer1">
            <h6>Shortcuts</h6>
            <ul>
              <li>Event Search</li>
              <li>Categories</li>
              <li>Legend</li>
              <li>membership</li>
              <li>About Us</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="footer1">
            <h6>Support</h6>
            <ul>
              <li>Privacy Policy</li>
              <li>Legal</li>
              <li>Affliates</li>
              <li>membership</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="footer1">
            <h6>Shortcuts</h6>
            <ul>
              <li>Event Search</li>
              <li>Categories</li>
              <li>Legend</li>
              <li>membership</li>
              <li>About Us</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="footer1">
            <h6>Support</h6>
            <ul>
              <li>Privacy Policy</li>
              <li>Legal</li>
              <li>Affliates</li>
              <li>membership</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="footer1">
            <h6>Shortcuts</h6>
            <ul>
              <li>Event Search</li>
              <li>Categories</li>
              <li>Legend</li>
              <li>membership</li>
              <li>About Us</li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
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
        <div class="footer-copy text-center">
          <p>Copyrights &copy 2020. Jubilee LLC. All Rights Reserved.</p>
        </div>
      </div>
    </div>
    <!-- Mobile  Footer -->
    <div class="mobile-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <div class="footer1">
              <h6>Shortcuts</h6>
              <ul>
                <li>Event Search</li>
                <li>Categories</li>
                <li>Legend</li>
                <li>membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer1">
              <h6>Support</h6>
              <ul>
                <li>Privacy Policy</li>
                <li>Legal</li>
                <li>Affliates</li>
                <li>membership</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer1">
              <h6>Shortcuts</h6>
              <ul>
                <li>Event Search</li>
                <li>Categories</li>
                <li>Legend</li>
                <li>membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer1">
              <h6>Support</h6>
              <ul>
                <li>Privacy Policy</li>
                <li>Legal</li>
                <li>Affliates</li>
                <li>membership</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer1">
              <h6>Shortcuts</h6>
              <ul>
                <li>Event Search</li>
                <li>Categories</li>
                <li>Legend</li>
                <li>membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer1">
              <h6>Support</h6>
              <ul>
                <li>Privacy Policy</li>
                <li>Legal</li>
                <li>Affliates</li>
                <li>membership</li>
                <li>Contact Us</li>
              </ul>
            </div>
          </div>
          <div class="col-md-1">
            <div class="footer1">
              <h6>Shortcuts</h6>
              <ul>
                <li>Event Search</li>
                <li>Categories</li>
                <li>Legend</li>
                <li>membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
</body>

</html>