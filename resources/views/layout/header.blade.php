
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{URL::asset('/')}}"><img

        src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg')}}" alt="">

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav mr-lg-auto my-md-5 my-sm-5 my-5">

    		<li class="nav-item active">
    			<a class="nav-link" href="{{ asset('home') }}">Home </a>
    		</li>

    		<li class="nav-item">
    			<a class="nav-link" href="{{ URL::asset('categories') }}">Categories</a>
    		</li>

    		<li class="nav-item">
    			<a class="nav-link" href="{{URL::asset('Blogs')}}">LEEP Ink</a>
    		</li>

    		{{-- <li class="nav-item">
    			<a class="nav-link" href="{{URL::asset('aboutUs')}}">About us</a>
    		</li>
    		<li class="nav-item">
    			<a class="nav-link" href="{{URL::asset('contactUs')}}">Contact Us</a>
    		</li> --}}

    		<li class="nav-item">
    			<a class="nav-link" href="{{URL::asset('legend')}}">Legend</a>
    		</li>

{{--     		@guest
    		<li class="nav-item">
    			<a class="nav-link" href="{{asset('becomeEventChamp') }}"> Become a member </a>
    		</li>
    		@endguest --}}

    		{{-- @auth --}}
    		<li class="nav-item">
    			<a class="nav-link" href="{{ asset('becomeMember') }}"> Membership </a>
    		</li>
    		{{-- @endauth --}}


           <li class="nav-item">
    			<div class="dropdown show float-left">
                    <a class="btn dropdown-toggle font-weight-bold nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="box-shadow:none;">About Us </a>
                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
               </div>
    		</li>
    		<li class="nav-item">
    			<div class="dropdown show float-left">
                    <a class="btn dropdown-toggle font-weight-bold box-shadow-0 nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="box-shadow:none;">FAQ</a>
                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
               </div>
    		</li>

        </ul>
        {{-- Login Button  --}}

        <div class="nav-item">

                    <div class="float-right m-0 p-0">
                         <div class="d-flex">
                            @guest
                                <form class="form-inline my-2 my-lg-0 right-login">
                                    {{-- <a class="member" href="{{URL::asset('/becomeEventChamp')}}"><u>Become a member</u></a> --}}
                                    <a href="{{URL::asset('login')}}" class="btn btn-outline-secondary rounded-0 px-4 mx-sm-3 mx-md-3 mx-lg-3"  type="submit" data-balloon-length="fit" aria-label="If you are existing user please Click on the login button to authenticate yourself . " data-balloon-pos="down">Login</a>
                                    <a href="{{URL::asset('register')}}" class="btn btn-outline-success rounded-0 px-4 text-white" type="submit" style="background-color:#003300 !important; -webkit-appearance:none" data-balloon-length="fit" aria-label="If you are New user please Click on the Register button to register yourself . " data-balloon-pos="down">Register</a>
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

        </div>
        {{-- Login Button --}}

      
      {{-- <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
    </div>




  </nav>