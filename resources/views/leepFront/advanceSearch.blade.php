@extends('layout.layoutLeep')
@section('content')

<div class="random">
	<h1 class="font-weight-bold ml-5">Event Filter Search</h1>
	<div class="row mt-3 m-0" >
		<div class="col-md-3">
			<p class="mt-1"> Search Filters </p>
		</div>
		<div class="col-md-3 p-0">
			<div class="my-btn btn-group  drop">
				<div class="categorySelect">
					<select id="select" class="custom-select form-control" <!-- onchange='change()' --> name="category">
						<option value="" selected="">Select category</option>
						@foreach(App\Models\category::all() as $cat)
						<option value="{{$cat->name}}">{{$cat->name}}</option>
						@endforeach	              	
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="xyz btn-group drop">
				<span class="btn-sm dropdown-toggle pointer" {{-- type="button" --}} data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Duration </span>
				<div class="duration-box">
					<div class="row flex-column">
						<div class="checkbox pl-5">
							<label><input type="checkbox"  name="type_all" value="All"><span>All</span> </label>
						</div>
						<div class="checkbox pl-5">
							<label><input type="checkbox" name="weekly" value="Weekly"><span>Weekly</span></label>
						</div>
						<!-- </form><form class="row"> -->
							<div class="checkbox pl-5">
								<label><input type="checkbox" name="daily" value="Daily"><span>Daily</span> </label>
							</div>
							<div class="checkbox pl-5">
								<label><input type="checkbox" name="annual" value="Annual"><span>Annual</span></label>
							</div>
						</div>
					</div>
			</div>
		</div>
	   	<div class="col-md-3">
		   
		    <select class="form-control custom-select">	
		    	<option value="" selected="">Select</option>
				@foreach(App\Models\events::distinct()->get(['name']) as $us)
				<option value="{{$us->name}}">{{$us->name}}</option>
				@endforeach
		    </select>
	  	</div>
  	</div>
</div>
@endsection
