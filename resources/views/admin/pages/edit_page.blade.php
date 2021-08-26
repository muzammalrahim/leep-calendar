@extends('layout.default')

@php($title = 'Edit Page')

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
                    <form  method="post" action="{{ route('admin.page.update') }}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class=" col-md-12" style="padding-top: 5px;">
                                <div class="form-group">
                                    <div class="form-group">
                                    	@php($label = 'Title')
                						@php($name = 'title')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $page[$name] }}">
                                    </div>
                                    
                                    <div class="form-group">
                                    	@php($label = 'Slug')
                						@php($name = 'slug')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $page[$name] }}">
                                        <span class="text-danger" id="{{ $name }}-error"></span>
                                    </div>

                                    <div class="form-group">
                                    	@php($label = 'Heading')
                						@php($name = 'heading')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $page[$name] }}">
                                    </div>
                                    
                                    <div class="form-group">
                                    	@php($label = 'Content')
                						@php($name = 'content')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <textarea  name="{{ $name }}"  class="form-control wysihtml5" placeholder="Enter {{ $label }}">{{ $page[$name] }}</textarea>
                                    </div>

                                    <div class="form-group">
                                    	@php($label = 'Meta Title')
                						@php($name = 'meta_title')

                                        <label>
                                        	<b>{{ $label }}</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $page[$name] }}">
                                    </div>
                                    
                                    <div class="form-group">
                                    	@php($label = 'Meta Description')
                						@php($name = 'meta_description')

                                        <label>
                                        	<b>{{ $label }}</b>
                                        </label>
                                        <textarea  name="{{ $name }}"  class="form-control wysihtml5 " placeholder="Enter {{ $label }}">{{ $page[$name] }}</textarea>
                                    </div>

                                    <div class="form-group">
                                    	@php($label = 'Meta Keywords')
                						@php($name = 'meta_keywords')

                                        <label>
                                        	<b>{{ $label }}</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $page[$name] }}">
                                    </div>

                                    <div class="form-group">
                                    	@php($label = 'Select Status')
                						@php($name = 'status')

			                            <label >{{ $label }}
			                            	<span class="text-danger">*</span>
			                            </label>
			                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
			                                <option value="">Select</option>
			                                <option value="Publish" {{ "Publish" == $page[$name] ? 'selected' : ''}}>Publish</option>
			                                <option value="Unpublish" {{ "Unpublish" == $page[$name] ? 'selected' : ''}}>Unpublish</option>
			                            </select>
			                        </div>
                                    
                                </div>

                                {{-- Start: Input Hidden Fields --}}
                                    <input type="hidden" name="page_id" value="{{Crypt::encrypt($page->id)}}">
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


{{-- Scripts Section --}}
@section('scripts')

   <script type="text/javascript"> 
    $(document).ready(function() {
        $('.wysihtml5').wysihtml5();


        // Generate & check slug uniqueness in db
        $('#title').blur(function()	{
			let slug = $('#title').val();

			$('#slug').val(slugify(slug, "-"));

			check_slug_in_db();
		})

		function slugify (text, separator = "-") {
		    return text
		        .toString()
		        .normalize('NFD')   // split an accented letter in the base letter and the acent
		        .replace(/[\u0300-\u036f]/g, '')   // remove all previously split accents
		        .toLowerCase()
		        .trim()
		        .replace(/[^a-z0-9 ]/g, '')   // remove all chars not letters, numbers and spaces (to be replaced)
		        .replace(/\s+/g, separator);
		};

		$('#slug').blur(function()	{
			check_slug_in_db()
		})

		function check_slug_in_db() {
			$('#slug-error').text('');

			let _token   = $('meta[name="csrf-token"]').attr('content');
			var slug = $('#slug').val();
			$.ajax({
				url: "/page-slug-check",
				type:"POST",
				data:{
					slug:slug,
					_token: _token
				},
				success:function(response) {
					if(response) {
						$('#slug-error').text(response.error);
					}
				},
			});
		}

    });
   </script> 
@endsection

 