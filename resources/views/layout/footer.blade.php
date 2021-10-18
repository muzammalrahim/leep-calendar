{{-- <div class="dynamicPages123">
	<div class="row ml-5">
		<div class="col-md-10 col-lg-10">
			<div class="float-right">
    			<span class="font-weight-bold">
         			<a class="colorSkin" href="{{ asset('home') }}">Home </a> |
	        		@foreach( $page->getPagesList('Publish') as $page )
	        				<a href="{{ route('page.detail.show',["slug"=>$page->slug]) }}" class="colorSkin">{{ $page->title }}</a> |
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
</div> --}}

<div class="dynamicPages123">
		<div class="float-right mr-5">
				<a class="navbar-brand" href="{{URL::asset('home')}}"><img
			        src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg')}}" class = "img-fluid" alt="" style="height: 60px;">
			    </a>
			</div>
	<div class="row mx-5">

		<div class="col-md-2 col-lg-2">
			
		</div>

		<div class="col-md-8 col-lg-8">
			<div class="text-center">
    			<span class="font-weight-bold">
         			<a class="colorSkin" href="{{ asset('home') }}">Home </a> |
	        		@foreach( $page->getPagesList('Publish') as $page )
	        				<a href="{{ route('page.detail.show',["slug"=>$page->slug]) }}" class="colorSkin">{{ $page->title }}</a> |
	        		@endforeach
	        		<a class="colorSkin" href="{{ URL::asset('categories') }}">Categories</a> |
		            <a class="colorSkin" href="{{URL::asset('login')}}">Login</a> |
		            <a class="colorSkin" href="{{URL::asset('register')}}">Sign up</a> |
		            <a class="colorSkin" href="{{URL::asset('legal-desclaimer')}}">Legal Disclaimer</a> 
		         
    			</span>

	      
	        	<div class="text-dark mt-2">
					<p class="m-0 text-dark float-right jubillelc"> Jubilee LLC, 1712 Pioneer Avenue, Suite 2019, Cheyenne, WY 82001 (307) 222.4729  </p>
					<!-- <div class=""><p class="text-dark"> Copyright (C) 2018-2019 Jubilee LLC. All Rights Reserved  </p></div> -->
				</div>
	        </div>


		</div>

		<div class="col-md-2 col-lg-2"> 
	</div>

		
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-5 my-3 copyright">
			<p class="text-dark copyrighttext">
© Jubilee LLC and LEEPCalendar.com 2021. All Rights Reserved. Unauthorized use site’s author and/or owner is strictly prohibited. Excerpts and links may be used,provided that full and clear credit is given to Jubilee LLC andLEEPCalendar.com with appropriate and specific direction to the original content. Additional documents,embedded videos and additional image rights retained by their creators.</p>
		</div>
		<div class="col-md-5 my-3 ">
			<p class="text-dark copyrighttext">
The appearance of an event in LEEP Calendar does not imply endorsement of the event nor the organization championing the event by Jubilee LLC, its stakeholders, customers or subsidiaries. All dates, contact information, URLs, addresses, and information relating to any event, promotion or holiday are subject to change without notice and should be treated as estimated. Jubilee LLC, our stakeholders, customers and subsidiaries cannot warrant accuracy. Users of this application are solely responsible for verifying actual event date with organizers and additional sources prior to committing resources, including financial resources.</p>
		</div>
	</div>

<style type="text/css">
	.copyrighttext{font-size: 15px;}
	.jubillelc{font-size: 15px;}
	
</style>


</div>
