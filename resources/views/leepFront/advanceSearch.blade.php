@extends('site.master')

@section('loader')
@include('leepFront.parts.loader') {{-- leepFront/parts/loader --}}
@endsection
@section('calendar-slider')

@include('leepFront.parts.slider2') {{-- leepFront/parts/slider --}}

@endsection

@section('content')

<div class="random">
	<span class="row justify-content-center m-0 advance-search">
		<span class="col-12 col-sm-10 col-md-7 col-lg-7 pl-3 pl-sm-3 pl-md-0 pl-lg-0">
			<!--============================= Top Section =========================   -->
			<h1 class="font-weight-bold text-black" style="font-family: 'impact';">Advanced Event Search</h1>
			<p class="text-break font-weight-bold text-dark">
				To view full search results, login to your LEEP Membership (paid subscription) 
				<b class="text-dark font-weight-bold">Non-members will view partial results.</b>
			</p>
			<p class="text-dark text-break">
				Find events using different criteria. List your keywords. Choose the year (the next year is posted in the
				October) and get results, or narrow your search with date range, topic/category, country and length.
			</p>

			<form action="{{route('advance.searchResults')}}" method="post">
				@csrf
			<!--============================= First Section =========================   -->
			<div class=" pt-5">
				<p class="font-weight-bold">1. Enter KeyWords</p>
				<p class="text-dark pl-3" >
					Note:  Keywords include event champion or sponsor, event name, adjectives. Separate each with commas. Try several different keywords if synonyms exist.
				</p>
				<div class="input-group">
					<input type="text" class="form-control" name="keywords"  aria-label="Username" aria-describedby="basic-addon1">
					<span class="text-dark pl-3 pt-2">(Required)</span>
				</div>
			</div>
			<!--============================= Second Section =========================   -->
			<div class="pt-5">
				<!-- <div class="overflow-hidden">
					<div class="float-left d-inline-block"><p class="font-weight-bold">2a. Year</p></div>
					<div class="float-left d-inline-block pl-3 pt-2">
						<span class="text-dark">
							(Required) Next year events are available in October
						</span>
					</div>
				</div> -->
			<!-- 	<div class="row justify-content-start ">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="input-group">
							<p class="pt-2 ">Start Year: </p>
							<select class="form-select  form-control mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Default select example" name="syear">	  
									<?php
										$y= date("Y");
									 	$z=$y-4;
									 	$x=$z+8;
									 for ($z ; $z <= $x ; $z++) {
									 ?> 
									 	<option value="<?php echo $z; ?>"><?php echo $z; ?></option>
									 <?php 
									}
									  ?>
									
							</select>
							<span class="text-dark  pt-2">(Required)</span>
						</div>
					</div>
				</div> -->
				<div class="pt-5">
					<div class="row">
						<div class="col-12 p-2 p-sm-2 p-md-2 p-lg-0 col-sm-10">
							<p class="font-weight-bold">2. Choose the Date Range for your search.</p>
						</div>
						<div class="col-12 p-2 p-sm-0 p-md-0 p-lg-0 col-sm-2">
							<span class="text-dark  pt-2">
								(Required).
							</span>
						</div>
						<p class="text-dark" >Note: Events occurring in the next year are added in October</p>
					</div>
				</div>
				<div class="row justify-content-start ml-0  pt-2">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="input-group">
							<p class="pt-2">Start Date: </p>
							<input type="date" name="s-date" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Required)</span>
						</div>
						<!-- <div class="input-group pt-2">
							<p class="pt-2 pl-3 ml-1">Start Day: </p>
							<input type="date" name="s-day" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Optional)</span>
						</div> -->
						<div class="input-group pt-2">
							<p class="pt-2 pl-2">End Date: </p>
							<input type="date" name="e-date" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Required)</span>
						</div>
						<!-- <div class="input-group pt-2">
							<p class="pt-2 pl-4 ml-1">End Day: </p>
							<input type="date" name="e-day" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Optional)</span>
						</div> -->
					</div>
				</div>
			</div>
			<!--============================= Third Section =========================   -->
			<div class="pt-5">
				<div class="row">
					<div class="col-12">
						<p class="font-weight-bold">
							3. Choose up to 5 Event Categories
						</p>
					</div>
					<!-- <div class="col-4 pt-3">
						<span class="text-dark">Up to 5, (Optional)</span>
					</div> -->
				</div>
				<div class="row">
					<div class="col-10">
						<!-- <select class="form-select w-100  ml-3 input-border" name="langOpt[]" id="langOpt" multiple aria-label="multiple select example"> -->
						 <select multiple data-style="" name="Categories[]" class="js-example-basic-multiple w-100 form-select pl-2 ml-3 pt-2 input-border" multiple aria-label="multiple select example" >
							@foreach ($category as $data)
							<option value="{{$data->name}}" class="pb-3">{{ $data->name }}</option>
							@endforeach	
						</select>
					</div>
					<!-- <div class="col-2">
						<span class="text-dark pt-3">(Optional)</span>
					</div> -->
				</div>
			</div>
			<!--============================= Fourth Section =========================   -->
			<div class="pt-5">
				<div class="row">
					<div class="col-10">
						<p class="font-weight-bold">
							4. Choose up to 5 Countries or Regions
						</p>
					</div>
					<!-- <div class="col-2 pt-3">
						<span class="text-dark">Required</span>
					</div> -->
				</div>
				<div class="row">
					<div class="col-10">
						  <select multiple data-style="" name="states[]" class="js-example-basic-multiple w-100 form-select pl-2 ml-3 pt-2 input-border" multiple aria-label="multiple select example">
			                @foreach ($country as $data)
								<option value="{{ $data->name }}" class="pb-3">{{ $data->name }} {{ $data->code }}</option>
							@endforeach	
            			</select><!-- End -->
					</div>
					<!-- <div class="col-2">
						<span class="text-dark pt-3">(Optional)</span>
					</div> -->
						<p class="text-dark pt-3">
					Note: Choosing a specific country delivers events specific to that nation only. Choose the specific country and “worldwide” events for a full picture of registered events occurring in that nation.
				</p>
				</div>		
			</div>
			<!--============================= Fifth Section =========================   -->
			<div class="pt-3">
				<p class="font-weight-bold">
					5. Length of Events*
				</p>
				<div class="row justify-content-center">
					<div class="col-12 pt-3">
						<label class="container">Daily Events Only
							  <input type="radio" checked="checked" name="etype" value="Daily">
							  <span class="checkmark"></span>
							</label>
							<label class="container">Weekly Events Only
							  <input type="radio" name="etype" value="Weekly">
							  <span class="checkmark"></span>
							</label>
							<label class="container">Monthly Events Only
							  <input type="radio" name="etype" value="Monthly">
							  <span class="checkmark"></span>
							</label>
							<label class="container">Yearly Events Only
							  <input type="radio" name="etype" value="Yearly">
							  <span class="checkmark"></span>
							</label>
					</div>
				</div>
			</div>
			<p class="text-center text-dark pt-5">
					*Daily events take place on a specific day or weekend. Weekly events last more than 4 
					days. Monthly events cover a 28-31 day and up to an 11 month time frame. Annual 
					events occur for the given year and decade events will span may years. 
				</p>
			<!--============================= Search Button  =========================   -->
			<span class="row justify-content-center align-content-center pt-4">
				<button type="submit" class="btn bg_maroon text-white px-5 py-2 border-0 " 
				data-balloon-length="fit" aria-label="After clicking the Search button you will be redirected to Search Results page. Where You will see all the events According to your filters." data-balloon-pos="up">Search</button>

			</span>
		</form>
		</span>	
	</span>
	
</div>
@endsection
