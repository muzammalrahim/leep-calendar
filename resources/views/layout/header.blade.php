
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

        

    </div>

</nav>