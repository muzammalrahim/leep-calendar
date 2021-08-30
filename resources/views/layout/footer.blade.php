<div class="dynamicPages123">
	<div class="row ml-5">
		<div class="col-md-10 col-lg-10{{--  col-sm-6 col-12 --}}">
			<div class="float-right">
    			<span class="font-weight-bold">
         			<a class="colorSkin" href="{{ asset('home') }}">Home </a> |
	        		@foreach( $page->getPagesList('Publish') as $page )
	        				<a href="{{ route('page.detail.show',["slug"=>$page->slug]) }}" class="colorSkin">{{ $page->title }}</a> |
	        				{{-- @if (!$loop->last) | @endif	 --}}
	        		@endforeach
	        		<a class="colorSkin" href="{{ URL::asset('categories') }}">Categories</a> |
		            <a class="colorSkin" href="{{URL::asset('login')}}">Login</a> |
		            <a class="colorSkin" href="{{URL::asset('register')}}">Sign up</a> 
		         
    			</span>

	        </div>
	        <br>

	        <div class="float-right text-dark mt-2">
				<p class="m-0 text-dark"> Jubilee LLC, 1712 Pioneer Avenue, Suite 2019, Cheyenne, WY 82001 (307) 222.4729  </p>
				<div class="float-right"><p class="text-dark"> Copyright (C) 2018-2019 Jubilee LLC. All Rights Reserved  </p></div>
			</div>

		</div>

		<div class="col-md-2 col-lg-2">
			<div class="float-left">
				<a class="navbar-brand" href="{{URL::asset('home')}}"><img
			        src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg')}}" class = "img-fluid" alt="" style="height: 60px;">
			    </a>
			</div>
		</div>

	</div>
</div>