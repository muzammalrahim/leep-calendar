
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{URL::asset('home')}}"><img

        src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg')}}" alt="">

    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"

      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>



	        <div class="collapse navbar-collapse" id="navbarSupportedContent">

	          <ul class="navbar-nav mr-auto">

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

	          </ul>

                @guest

	          <form class="form-inline my-2 my-lg-0 right-login">

	            <a class="member" href="{{URL::asset('/becomeEventChamp')}}"><u>Become a member</u></a>

	            <a href="{{URL::asset('login')}}" class="btn btn-outline-secondary" type="submit">Login</a>

	            <a href="{{URL::asset('register')}}" class="btn btn-outline-success" type="submit">Sign up</a>

	          </form>

	            @else



	            	@if(Auth::User()->email_verified_at=='')

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">

                        @csrf

                        <button type="submit" class="btn btn-outline-secondary">{{ __('Resend Verification Link') }}</button>

                    </form>&nbsp

                    @else

    					<div class="createbtn">
    
    						<a href="{{URL::asset('addNewEvent')}}" class="btn btn-secondary" type="submit">Create an Event</a>
    
    					</div>
    
    					<div class="user">
    
    						<b onclick="window.location.replace('{{URL::asset('becomeMember')}}','self'); " style=" cursor:pointer;" >
    
    							{{Auth::user()->fname}}
    
    						</b>
    
    						<p style="margin-bottom:0px">{{Auth::user()->email}}</p>
    
    						<label onclick="window.location.replace('{{URL::asset('myEvents/')}}','self'); " style=" cursor:pointer;">
    
    							My Events
    
    						</label>
    
    					</div>
						<div class="user-img"> 
							<a href="{{URL::asset('settings')}}">
								@if(Auth::user()->image!='')
									<img src="{{URL::asset('leep_calender/images/userProfilePic/'.Auth::user()->image)}}" alt="" style='width:52px;height:49px;border-radius: 15%;'>
								@else
									<img src="{{URL::asset('/leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" alt="" >
								@endif
							</a>
						</div>



                    @endif

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