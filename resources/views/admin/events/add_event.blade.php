@extends('layout.default')

@php($title = 'Add Event')

@section('styles')
<style> 
    .font-weight-900 {
        font-weight: 900;
    }
</style>
@endsection

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
                    <form  method="post" action="{{ route('admin.event.store') }}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class="col-md-12" style="padding-top: 5px;">
                                <div class="form-group">
                                    <div class="form-group">
                                    	@php($label = 'Name')
                						@php($name = 'name')

                                        <label>
                                        	<b>{{ $label }}
                                        		<span class="text-danger">*</span></label>
                                        	</b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Select Nations / States')
                                        @php($name = 'states')

                                        <label >{{ $label }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select multiple class="form-control selectpicker" aria-label="Default select example" name="{{ $name }}[]">
                                            <option value="">Select</option>
                                            @foreach( $countries_list as $nation )
                                                <option>{{ $nation->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Month Start')
                                            @php($name = 'start_month')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @foreach( getMonths() as $key=>$month )
                                                    <option value="{{ $key }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Day Start')
                                            @php($name = 'start_day')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @for ( $day=1; $day<32; $day++ )
                                                    <option value="{{ $day }}"> {{ $day }} </option>
                                                @endfor 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Year Start')
                                            @php($name = 'start_year')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @for ($year=date("Y"); $year>1900; $year--)
                                                    <option value="{{ $year }}"> {{ $year }} </option>
                                                @endfor  
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Start Date')
                                            @php($name = 'start_date')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="date" name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Month End')
                                            @php($name = 'end_month')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @foreach( getMonths() as $key=>$month )
                                                    <option value="{{ $key }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Day End')
                                            @php($name = 'end_day')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @for ( $day=1; $day<32; $day++ )
                                                    <option value="{{ $day }}"> {{ $day }} </option>
                                                @endfor 
                                            </select>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Year End')
                                            @php($name = 'end_year')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @for ($year=date("Y"); $year>1900; $year--)
                                                    <option value="{{ $year }}"> {{ $year }} </option>
                                                @endfor  
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'End Date')
                                            @php($name = 'end_date')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="date"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <span class="font-weight-900">Categories:</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            @php($label = 'Select Category 1')
                                            @php($name = 'category_1')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            @php($label = 'Select Category 2')
                                            @php($name = 'category_2')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            @php($label = 'Select Category 3')
                                            @php($name = 'category_3')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="col-md-4 form-group">
                                            @php($label = 'Select Category 4')
                                            @php($name = 'category_4')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            @php($label = 'Select Category 5')
                                            @php($name = 'category_5')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            @php($label = 'Select Category 6')
                                            @php($name = 'category_6')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Type')
                                            @php($name = 'type')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Type</option>
                                                @foreach( getEventTypesList() as $type )
                                                    <option value="{{ $type }}">{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Static Change')
                                            @php($name = 'static_change')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select Static Change</option>
                                                @foreach( getStaticChangesList() as $static_change )
                                                    <option value="{{ $static_change }}">{{ $static_change }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Notes')
                                        @php($name = 'notes_not_public')

                                        <label>
                                            <b>{{ $label }} (Not Public)
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <textarea  name="{{ $name }}"  class="form-control" placeholder="Enter {{ $label }}">{{ old($name) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter URL')
                                        @php($name = 'url')

                                        <label>
                                            <b>{{ $label }} 
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                    </div>

                                    <div class="col-md-6 form-group">
                                        @php($label = 'Featured Picture')
                                        @php($name = 'feature_picture')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Picture Name')
                                            @php($name = 'picture_name')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Alt Text')
                                            @php($name = 'alt_text')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Estimated')
                                        @php($name = 'estimated')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Description')
                                        @php($name = 'description')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <textarea  name="{{ $name }}"  class="form-control wysihtml5" placeholder="Enter {{ $label }}">{{ old($name) }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Event Champion')
                                        @php($name = 'event_champion')

                                        <label >{{ $label }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                            <option value="">Select {{ $label }}</option>
                                            @foreach( $event_champions as $event_champ )
                                                <option value="{{ $event_champ->fname.' '.$event_champ->lname }}">{{ $event_champ->fname.' '.$event_champ->lname }} | {{ $event_champ->email }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Country')
                                            @php($name = 'country_code')

                                            <label >{{ $label }}
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @foreach( $countries_list as $country )
                                                    <option value="{{ $country->name }}" {{ $country->name == old($name) ? 'selected' : ''}}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter State')
                                            @php($name = 'state')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter City')
                                            @php($name = 'city')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>


                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Zip')
                                            @php($name = 'zip')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ old($name) }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Address 1')
                                            @php($name = 'event_address1')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <textarea  name="{{ $name }}"  class="form-control" placeholder="Enter {{ $label }}">{{ old($name) }}</textarea>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Address 2')
                                            @php($name = 'event_address2')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <textarea  name="{{ $name }}"  class="form-control" placeholder="Enter {{ $label }}">{{ old($name) }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Phone Number')
                                            @php($name = 'ph_num')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Email')
                                            @php($name = 'email_form')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Contact Person')
                                        @php($name = 'contact_person')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Contact Link')
                                        @php($name = 'contact_link')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Video 1')
                                        @php($name = 'video1')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>   

                                    <div class="form-group">
                                        @php($label = 'Video 2')
                                        @php($name = 'video2')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div> 

                                    <div class="form-group">
                                        @php($label = 'Video 3')
                                        @php($name = 'video3')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>  

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <span class="font-weight-900">Attachments:</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Attachment 1')
                                            @php($name = 'download1')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>  

                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Title')
                                            @php($name = 'download_title1')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div> 
                                    </div> 

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Attachment 2')
                                            @php($name = 'download2')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>  

                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Title')
                                            @php($name = 'download_title2')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div> 
                                    </div>
                                     

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Attachment 3')
                                            @php($name = 'download3')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>  

                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Title')
                                            @php($name = 'download_title3')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div> 
                                    </div>  

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <span class="font-weight-900">Extra Images:</span>
                                        </div>
                                    </div>  

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Extra Image 1')
                                            @php($name = 'extra_image1')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>  

                                        <div class="form-group col-md-6">
                                            @php($label = 'Image Title 1')
                                            @php($name = 'image_tile1')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div> 
                                    </div> 

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Extra Image 2')
                                            @php($name = 'extra_image2')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>  

                                        <div class="form-group col-md-6">
                                            @php($label = 'Image Title 2')
                                            @php($name = 'image_tile2')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div> 
                                    </div>
                                     

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Extra Image 3')
                                            @php($name = 'extra_image3')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div>  

                                        <div class="form-group col-md-6">
                                            @php($label = 'Image Title 3')
                                            @php($name = 'image_tile3')

                                            <label>
                                                <b>{{ $label }}
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                        </div> 
                                    </div>  


                                    <div class="form-group">
                                        <span class="font-weight-900">Social Links:</span>
                                    </div> 

                                    <div class="form-group">
                                        @php($label = 'Social Link 1')
                                        @php($name = 'socail_link1')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div> 

                                    <div class="form-group">
                                        @php($label = 'Social Link 2')
                                        @php($name = 'socail_link2')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div> 
                                    
                                    <div class="form-group">
                                        @php($label = 'Social Link 3')
                                        @php($name = 'socail_link3')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div> 

                                    <div class="form-group">
                                        @php($label = 'Physical Address')
                                        @php($name = 'physical_address')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div> 

                                    <div class="form-group">
                                        @php($label = 'Link to Purchase/Reserve Tickets')
                                        @php($name = 'purchase_reserve')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div> 

                                    <div class="form-group">
                                        @php($label = 'Location Based')
                                        @php($name = 'location_based')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Event Manager')
                                        @php($name = 'manager')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span>
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ old($name) }}" style="height: auto;">
                                    </div>

                                    
                                </div>

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

 