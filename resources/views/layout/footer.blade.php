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

{{-- <div class="dynamicPages123">
	<div class="float-right mr-5">
		<a class="navbar-brand" href="{{URL::asset('home')}}"><img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg')}}" class = "img-fluid" alt="" style="height: 60px;">
		</a>
	</div>
	
	<div class="row mx-5">
		<div class="col-md-2 col-lg-2"> </div>

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
				</div>
	        </div>
		</div>
		<div class="col-md-2 col-lg-2">  </div>
	</div>

	<div class="row justify-content-center m-0">
		<div class="col-md-5 my-3">
			<p class="text-dark text-justify"> © Jubilee LLC and LEEPCalendar.com 2021. All Rights Reserved. Unauthorized use site’s author and/or owner is strictly prohibited. Excerpts and links may be used,provided that full and clear credit is given to Jubilee LLC andLEEPCalendar.com with appropriate and specific direction to the original content. Additional documents,embedded videos and additional image rights retained by their creators.</p>
		</div>
		<div class="col-md-5 my-3 ">
			<p class="text-dark text-justify"> The appearance of an event in LEEP Calendar does not imply endorsement of the event nor the organization championing the event by Jubilee LLC, its stakeholders, customers or subsidiaries. All dates, contact information, URLs, addresses, and information relating to any event, promotion or holiday are subject to change without notice and should be treated as estimated. Jubilee LLC, our stakeholders, customers and subsidiaries cannot warrant accuracy. Users of this application are solely responsible for verifying actual event date with organizers and additional sources prior to committing resources, including financial resources.</p>
		</div>
	</div>
</div>
 --}}

 <div class="footer">
 	<div class="row m-0">
 		<div class="col-12 col-sm-12 col-md-12 col-lg-2 px-5 bg_black pt-5">
 			<img src="{{URL::asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/logo.png')}}" class = "img-fluid" alt="">
 			
 			<p class="mt-4 text-white ml-2">Jubilee LLC, <br>
				1712 Pioneer Avenue, <br>
				Suite 2019 <br>
				Cheyenne, WY 82001 <br>
				(307) 222.4729
			</p>

 		</div>

 		<div class="col-12 col-sm-12 col-md-12 col-lg-6 p-5">
 	
			<div class="row p-4">
				<div class="col-4">
					<a class="advanceSearchLink font-weight-bold font18" href="{{URL::asset('login')}}">Login</a> <br>
		            <a class="advanceSearchLink font-weight-bold font18" href="{{URL::asset('register')}}">Register</a><br> 
	        		<a class="advanceSearchLink font-weight-bold font18" href="{{ URL::asset('categories') }}">Categories</a><br> 
		            <a class="advanceSearchLink font-weight-bold font18" href="{{ route('page.detail.show',["slug"=>'about-us']) }}">About Us</a><br>
		            <a class="advanceSearchLink font-weight-bold font18" href="{{ route('page.detail.show',["slug"=>'privacy-policy']) }}">Privacy Policy</a><br>
				</div>
				<div class="col-4">

					<a class="advanceSearchLink font-weight-bold font18" href="{{route('advance.search')}}">Advanced Search</a>
					<a class="advanceSearchLink font-weight-bold font18" href="{{URL::asset('becomeMember')}}">Membership</a> <br>
		            <a class="advanceSearchLink font-weight-bold font18" href="{{ route('page.detail.show',["slug"=>'FAQ']) }}">FAQs</a><br>
		            <a class="advanceSearchLink font-weight-bold font18" href="{{ route('page.detail.show',["slug"=>'contact-us']) }}">Contact Us</a><br>

				</div>
				<div class="col-4">
					<a class="advanceSearchLink font-weight-bold font18" href="{{URL::asset('addNewEvent')}}">Submit an Event</a><br>
					<a class="advanceSearchLink font-weight-bold font18" href="{{URL::asset('report-an-error')}}">Report an Error</a>
					<a class="advanceSearchLink font-weight-bold font18" href="{{URL::asset('media')}}">Media</a>
				</div>

				<div class="copyright m-auto" style="margin-top: 70px !important;">
					<p class="text-center m-0"> Copyright © Jubilee LLC / LEEPCalendar.com 2021.  </p>
					<p class="text-center">  All rights reserved. </p>		
				</div>
			</div>	

 		</div>

 		<div class="col-12 col-sm-12 col-md-12 col-lg-4 p-4 bg_black">
 			<p class="text-white text-justify font12 m-4">
 				LEGAL: Excerpts and links may be used, provided that full and
				clear attribution is given to Jubilee LLC and LEEPCalendar.com,
				with appropriate and specific direction to the original content
				(Page URL). Additional documents, embedded videos and
				additional image rights retained by their creators and are provided
				to increase understanding of the event or topic. <br>
				<br>
 				Jubilee LLC reserves the right to accept or reject inclusion of
				events in this calendar. The appearance of an event in LEEP
				Calendar does not imply endorsement of the event, nor the
				organization championing the event by Jubilee LLC, its
				stakeholders, customers or subsidiaries. All dates, contact
				information, URLs, addresses, and information relating to any
				event, promotion or holiday are subject to change without notice
				and should be treated as estimated. Jubilee LLC, our
				stakeholders, customers and subsidiaries cannot warrant
				accuracy. Users of this application are solely responsible for
				verifying actual event date with organizers and additional sources
				prior to committing resources, financial, human or otherwise. 
 			</p>
 		</div>

 	</div>
 </div>


