@extends('layout.default')

@php($title = 'Edit Category')

@section('content')
	
    {{-- Start: Alerts --}}
    	@include('layout.alerts')
    {{-- End: Alerts --}}
    <div class="row">
        <div  class='card-header col-lg-12 col-xxl-12'>
            <h6 style='text-align:center;'>{{ $title }}</h6>
        </div>
        <div class="card card-custom gutter-b example example-compact col-md-12">
            <div class='card-body'>
            	<div class="ml-2 mb-7">
            		<strong>Note: <span class="text-danger">*</span></label> are required fields.</strong>
            	</div>

                <div class="col-lg-12 col-xxl-12">
                    <form  method="post" action="{{ route('admin.category.update') }}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class=" col-md-12" style="padding-top: 5px;">
                                <div class="form-group">
                                    <div class="form-group">
                                    	@php($label = 'name')
                						@php($name = 'name')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $category[$name] }}">
                                    </div>
                                    <div class="form-group">
                                    	@php($label = 'Description')
                						@php($description = 'description')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <textarea  name="{{ $description }}" rows="4" class="form-control wysihtml5" placeholder="Enter {{ $label }}">{{$category[$description]}}</textarea>
                                    </div>

                                    <div class="form-group">
                                    	@php($label = 'Country')
                						@php($countries = 'countries')

                                        <label>
                                        	<b>{{ $label }}</b>
                                        </label>
                                        <input type="text"  name="{{ $countries }}" class="form-control" placeholder="Enter {{ $label }}" value="{{$category[$countries]}}">
                                    </div>
                                    
                                </div>

                                {{-- Start: Input Hidden Fields --}}
                                    <input type="hidden" name="cat_id" value="{{$category->id}}">
                                {{-- End: Input Hidden Fields --}}

                                <div>
				                    <button class="mb-7 btn btn-primary font-weight-bold btn-lg float-left mt-4" type="submit">
				                        {{ $title }}
				                    </button>
				                </div>
                            </div>
                            <div class="form-group " style=" text-align: center;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


<style type="text/css">
    .wysihtml5-sandbox{
        height: 200px !important;
        background-color: rgb(247 247 247) !important;
    }
    li a .btn{
        display: none !important;
    }
</style>
@section('scripts')
<script type="text/javascript">
                $(document).ready(function() {
                // $('.wysihtml5').wysihtml5();
            });

</script>

 @endsection