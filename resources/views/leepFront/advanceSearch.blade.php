@extends('site.master')


@section('calendar-slider')

@include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}

@endsection

@section('content')

<div class="random">
	<span class="row justify-content-center m-0 advance-search">
		<span class="col-12 col-sm-10 col-md-7 col-lg-7 pl-3 pl-sm-3 pl-md-0 pl-lg-0">
			<!--============================= Top Section =========================   -->
			<h1 class="font-weight-bold text-black">Advanced Event Search</h1>
			<p class="text-break font-weight-bold">
				To view full search results, login to your LEEP Membership (paid subscription) before <br>
				running advanced search.
				<span class="text-dark font-weight-bold">Non-members will view partial results</span>
			</p>
			<p class="text-dark text-break">
				Find events using different criteria. List your keywords. Choose the year (the next year is posted in the <br>
				October) and get results, or narrow your search with date range, topic/category, country and length.
			</p>
			<!--============================= First Section =========================   -->
			<div class="pl-4 pt-3">
				<h3 class="font-weight-bold">1. Enter Your Key Words</h3>
				<p class="text-dark pl-3">
					Keywords, Champpon Name, Event Name, etc. <br>
					Separate with commas. Try several different keywords if synonyms exist
				</p>
				<div class="input-group">
					<input type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
					<span class="text-dark pl-3 pt-2">(Required)</span>
				</div>
			</div>
			<!--============================= Second Section =========================   -->
			<div class="pt-4">
				<div class="overflow-hidden">
					<div class="float-left d-inline-block"><h3 class="font-weight-bold">2a. Year</h3></div>
					<div class="float-left d-inline-block pl-3 pt-2">
						<p class="text-dark">
							(Required) Next year events are available in October
						</p>
					</div>
				</div>
				<div class="row justify-content-start ml-0 ml-lg-5 ml-md-3 ml-sm-3 ml-0 pl-0 pl-sm-3 pl-md-3 pl-lg-5">
					<div class="col-11 col-sm-9 col-md-9 col-lg-6">
						<div class="input-group">
							<span class="pt-2">Year: </span>
							<select class="form-select form-control mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Default select example">
								<option>2019</option>
								<option>2020</option>
								<option>2021</option>
								<option>2022</option>
							</select>
							<span class="text-dark  pt-2">(Required)</span>
						</div>
					</div>
				</div>
				<div class="overflow-hidden pl-2 pl-sm-2 pl-md-5 pl-lg-5 pt-4">
					<div class="row">
						<div class="col-12 p-2 p-sm-2 p-md-2 p-lg-0 col-sm-6">
							<h3 class="font-weight-bold">2b. Date Range within Year</h3>
						</div>
						<div class="col-12 p-2 p-sm-0 p-md-0 p-lg-0 col-sm-6">
							<p class="text-dark small pt-2">
								Leave blank “Date Range” blank for the broadest results.
							</p>
						</div>
					</div>
				</div>
				<div class="row justify-content-start ml-0 ml-lg-5 ml-md-3 ml-sm-3 ml-0 pl-0 pl-sm-3 pl-md-3 pl-lg-5 pt-2">
					<div class="col-12 col-sm-9 col-md-9 col-lg-7">
						<div class="input-group">
							<span class="pt-2">Start Month: </span>
							<select class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Default select example">
								<option>January</option>
								<option>February</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
							</select>
							<span class="text-dark  pt-2">(Optional)</span>
						</div>
						<div class="input-group pt-2">
							<span class="pt-2 pl-3 ml-1">Start Day: </span>
							<input type="text" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Optional)</span>
						</div>
						<div class="input-group pt-2">
							<span class="pt-2 pl-2">End Month: </span>
							<input type="text" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Optional)</span>
						</div>
						<div class="input-group pt-2">
							<span class="pt-2 pl-4 ml-1">End Day: </span>
							<input type="text" class="form-select form-control icon-hide mx-lg-3 mx-2 mx-md-3 mx-sm-3" aria-label="Username" aria-describedby="basic-addon1">
							<span class="text-dark  pt-2">(Optional)</span>
						</div>
					</div>
				</div>
			</div>
			<!--============================= Third Section =========================   -->
			<div class="pt-3">
				<div class="row">
					<div class="col-8">
						<h3 class="font-weight-bold">
							3. Choose your Categories
						</h3>
					</div>
					<div class="col-4 pt-3">
						<span class="text-dark">Up to 5, (Optional)</span>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<select class="form-select w-100 px-3 px-sm-5 ml-3" multiple aria-label="multiple select example">
							<option value="1" class="pb-3">All (Default)</option>
							<option value="2">Alcohol, Tobacco & Drugs</option>
							<option value="3">Animals, Fish, Birds & Insects</option>
							<option value="4">Anniversaries</option>
							<option value="5">Australia</option>
							<option value="6">Alcohol, Tobacco & Drugs</option>
							<option value="7">Animals, Fish, Birds & Insects</option>
							<option value="8">Anniversaries</option>
							<option value="9">Australia</option>
						</select>
					</div>
					<div class="col-2">
						<p class="text-dark pt-3">(Optional)</p>
					</div>
				</div>
				<p class="text-dark pt-3">
					Choosing a specific country <span class="text-dark font-weight-bold">delivers events unique to that nation only.</span> <br>
					Choose ‘All’ if you want global and worldwide events included.
				</p>
			</div>
			<!--============================= Fourth Section =========================   -->
			<div class="pt-3">
				<div class="row">
					<div class="col-8">
						<h3 class="font-weight-bold">
							4. Choose your Countries
						</h3>
					</div>
					<div class="col-4 pt-3">
						<span class="text-dark">Up to 5, (Optional)</span>
					</div>
				</div>
				<div class="row">
					<div class="col-10">
						<select class="form-select w-100 px-3 px-sm-5 ml-3 pt-2" multiple aria-label="multiple select example">
							<option value="1">All (Default)</option>
							<option value="2">United States</option>
							<option value="3">United Kingdom</option>
							<option value="4" class="pt-3">Afghanistan</option>
						</select>
					</div>
					<div class="col-2">
						<p class="text-dark pt-3">(Optional)</p>
					</div>
				</div>		
			</div>
			<!--============================= Fifth Section =========================   -->
			<div class="pt-3">
				<h3 class="font-weight-bold">
					5. Length of Events*
				</h3>
				<div class="row justify-content-center">
					<div class="col-8 pt-3">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label font-weight-bold" for="exampleCheck1">
								<div class="row">
									<div class="col-9">All Events (Default)</div>
									<div class="col-3"><span class="float-right text-dark">(Optional)</span></div>
								</div>	
							</label>
						</div>
						<div class="form-check pt-2 pl-5">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Daily Events Only</label>
						</div>
						<div class="form-check pt-2 pl-5">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Weekly Event Only</label>
						</div>
						<div class="form-check pt-2 pl-5">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Monthly Events Only</label>
						</div>
						<div class="form-check pt-2 pl-5">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Decade & Annual Only</label>
						</div>
					</div>
				</div>
				<p class="text-center text-dark pt-4">
					*Daily events take place on a specific day or weekend. Weekly events last more than 4 <br>
					days. Monthly events cover a 28-31 day and up to an 11 month time frame. Annual <br>
					events occur for the given year and decade events will span may years. 
				</p>
			</div>
			<!--============================= Search Button  =========================   -->
			<span class="row justify-content-center align-content-center pt-4">
				<button type="button" class="btn bg_maroon text-white px-5 py-2 border-0">Search</button>
			</span>
		</span>	
	</span>
</div>
@endsection
