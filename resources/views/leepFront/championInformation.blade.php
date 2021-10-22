@extends('layout.layoutLeep')

@section('content')
<div class="championDetail">
	<div class="row m-0">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1 class="font-weight-bold text-center">Champion Information</h1>
		
			<div class="champ-info">
					 {{ $champ_details->image }}
				 <div class="user-img d-flex justify-content-center "> 
					@if($champ_details->image)
						<img src="{{URL::asset('leep_calender/images/userProfilePic/'.$champ_details->image)}}" alt="" >
					@else
						<img src="{{URL::asset('/leep_calender/images/Developer Assets/Event View Page/Rectangle 10.svg')}}" class="rounded-circle" width="130px" alt="" >
					@endif
			   </div>
				<div class="row mt-4 d-flex justify-content-around">
					
			   <div class="col-md-5 border-bottom border-dark border-2 py-2">
			   	<h4 class="font-weight-bold">Name: </h4>
						<h4>{{ $champ_details->event_champion }}</h4>	
			   </div>
			   <div class="col-md-5 border-bottom border-dark border-2 py-2">
			   	<h4 class="font-weight-bold">City: </h4>
						<h4>{{ $champ_details->champ_city }}</h4>
			   </div>
			   <div class="col-md-5 border-bottom border-dark border-2 py-2">
			   	<h4 class="font-weight-bold">State: </h4>
						<h4>{{ $champ_details->champ_state }}</h4>
			   </div>
			   <div class="col-md-5 border-bottom border-dark border-2 py-2">
			   	<h4 class="font-weight-bold">Country: </h4>
						<h4>{{ $champ_details->champ_country }}</h4>
			   </div>
			   <div class="col-md-5 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Address 1: </h4>
						<h4>{{ $champ_details->champ_address1 }}</h4>
				</div>
				<div class="col-md-5 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Zip-Code: </h4>
						<h4>{{ $champ_details->zip }}</h4>
				</div>
					<div class="col-md-5 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Address 2: </h4>
						<h4>{{ $champ_details->champ_address2 }}</h4>
				</div>
					<div class="col-md-5 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Country-Code: </h4>
						<h4>{{ $champ_details->country_code }}</h4>
				</div>
				<div class="col-md-5 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Phone: </h4>
						<h4>{{ $champ_details->ph_num }}</h4>
				</div>

				<div class="col-md-5 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Email: </h4>
						<h4>{{ $champ_details->email_form }}</h4>
				</div>
				<div class="col-md-11 border-bottom border-dark border-2 py-2">
						<h4 class="font-weight-bold">Contact-Person: </h4>
						<h4>{{ $champ_details->contact_person }}</h4>
				</div>
				<div class="col-md-11  rounded py-2">
						<h4 class="font-weight-bold">Contact-link: </h4>
						<a href="" target="_blank" class="text-dark text-break"><h4>{{ $champ_details->contact_link }}</h4></a>
				</div>
			   </div>
			   
				
		</div>
	</div>
		<div class="col-md-2"></div>
</div>


@endsection

