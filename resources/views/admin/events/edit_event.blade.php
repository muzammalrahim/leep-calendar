@php
    $selected_states = explode(",", $event->states);
@endphp

@extends('layout.default')

@php($title = 'Edit Event')

@section('styles')
<style>
    .font-weight-900 {
        font-weight: 900;
    }

    .height-122 {
        height: 122px;
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
                    <form  method="post" action="{{ route('admin.event.update') }}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class="col-md-12" style="padding-top: 5px;">
                                <div class="form-group">
                                    <div class="form-group">

                                        <label>
                                        	<b> Name <span class="text-danger">*</span></label> </b>
                                        </label>
                                        <input type="text"  name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ $event->name }}">
                                    </div>

                                    <div class="form-group">
                                        <label >Select Nations / States
                                            <span class="text-danger">*</span>
                                        </label>
                                        <label class="my-4"> <strong>Previously selected states:</strong> {{ $event->states }}</label>
                                        <select multiple class="form-control selectpicker" size="3" aria-label="Default select example" name="states[]">
                                            <option value="">Select</option>
                                            @foreach( $countries_list as $nation )
                                                <option {{ (collect(old('states'))->contains($nation->name)) ? 'selected':'' }}>{{ $nation->name }}</option>

                                                            {{-- @php($label = 'Select Nations / States')
                                        @php($name = 'states') --}}


                                            @endforeach
                                        </select>

                                        <label class="mt-4">
                                            <strong>Note:</strong> Selecting states will override all previous once.
                                        </label>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label >Select Month Start
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="start_month">
                                                <option value="">Select</option>
                                                @foreach( getMonths() as $key=>$month )
                                                    <option value="{{ $key }}" {{ $key == $event->start_month ? 'selected' : ''}} >{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label >Select Day Start
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="start_day">
                                                <option value="">Select</option>
                                                @for ( $day=1; $day < 32; $day++ )
                                                    <option value="{{ $day }}" {{ $day == $event->start_day ? 'selected' : ''}}> {{ $day }} </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                       
                                            <label >Select Year Start
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="start_year">
                                                <option value="">Select</option>
                                                @for ($year=date("Y"); $year > 1900; $year--)
                                                    <option value="{{ $year }}" {{ $year == $event->start_year ? 'selected' : '' }} > {{ $year }} </option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>
                                                <b>Start Date
                                                    <span class="text-danger">*</span>
                                                </b>
                                            </label>
                                            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Enter Start Date}" value="{{ $event->start_date }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label >Select Month End
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="end_month">
                                                <option value="">Select End Month</option>
                                                @foreach( getMonths() as $key=>$month )
                                                    <option value="{{ $key }}" {{ $key == $event->end_month ? 'selected' : '' }}>{{ $month }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Day End')
                                            @php($name = 'end_day')

                                            <label >Select Day End
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="end_day">
                                                <option value="">Select</option>
                                                @for ( $day=1; $day<32; $day++ )
                                                    <option value="{{ $day }}" {{ $day == $event->end_day ? 'selected' : ''}}> {{ $day }} </option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                          
                                            <label >Select Year End
                                                <span class="text-danger">*</span>
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="end_year">
                                                <option value="">Select</option>
                                                @for ($year=date("Y"); $year>1900; $year--)
                                                    <option value="{{ $year }}" {{ $year == $event->end_year ? 'selected' : ''}}> {{ $year }} </option>
                                                @endfor
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>
                                                <b>End Date
                                                    <span class="text-danger">*</span></label>
                                                </b>
                                            </label>
                                            <input type="date" name="end_date" id="end_date" class="form-control" placeholder="Enter End Date" value="{{ $event->end_date }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <span class="font-weight-900">Categories:</span>
                                            <br>
                                            <strong>Notice:- Atleast One category is required.</strong>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label >Select Category 1
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="category_1">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $event->event_category->category_1 ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
        
                                            <label >Select Category 2
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="category_2">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $event->event_category->category_2 ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label >Select Category 3
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="category_3">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $event->event_category->category_3 ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            @php($name = 'category_4')
                                            <label >Select Category 4
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="category_4">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $event->event_category->category_4 ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label >Select Category 5
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="category_5">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $event->event_category->category_5 ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label >Select Category 6
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="category_6">
                                                <option value="">Select Category</option>
                                                @foreach( $categories_list as $category )
                                                    <option value="{{ $category->cat_id }}" {{ $category->cat_id == $event->event_category->category_6 ? 'selected' : ''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Select Type')
                                            @php($name = 'type')

                                            <label >Select Type
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="type">
                                                <option value="">Select Type</option>
                                                @foreach( getEventTypesList() as $type )
                                                    <option value="{{ $type }}" {{ $type == $event->type ? 'selected' : ''}}>{{ $type }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label >Select Static Change
                                            </label>
                                            <select class="form-control" aria-label="Default select example" name="static_change">
                                                <option value="">Select Static Change</option>
                                                @foreach( getStaticChangesList() as $static_change )
                                                    <option value="{{ $static_change }}" {{ $static_change == $event->static_change ? 'selected' : ''}}>{{ $static_change }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <b>Enter Notes (Not Public)
                                            </b>
                                        </label>
                                        <textarea name="notes_not_public"  class="form-control" placeholder="Enter {{ $label }}">{{ $event->notes_not_public }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>
                                            <b>Enter URL
                                            </b>
                                        </label>
                                        <input type="text"  name="url" onblur="checkDeadLink(this)" id="url" class="form-control" placeholder="Enter URL" value="{{ $event->url }}">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Featured Picture')
                                        @php($name = 'feature_picture')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" accept="image/png, image/jpg, image/jpeg" placeholder="Enter {{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    @if( $event->feature_picture && !is_null( $event->feature_picture ) )
                                        <div class="form-group">
                                            <img src="{{ getEventImage( $event->feature_picture ) }}" class="img-thumbnail height-122" width="300">
                                        </div>
                                    @endif

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Picture Name')
                                            @php($name = 'picture_name')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Alt Text')
                                            @php($name = 'alt_text')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Estimated')
                                        @php($name = 'estimated')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Description')
                                        @php($name = 'description')

                                        <label>
                                            <b>{{ $label }}
                                                <span class="text-danger">*</span></label>
                                            </b>
                                        </label>
                                        <textarea  name="{{ $name }}"  class="form-control wysihtml5" placeholder="Enter {{ $label }}">{!! $event->$name !!}</textarea>
                                    </div>

                                    {{-- <div class="form-group">
                                        @php($label = 'Event Champion')
                                        @php($name = 'event_champion')

                                        <label >{{ $label }}
                                        </label>

                                        <input list="browsers" name="event_champion" id="event_champion" class="form-control" value="{{ $event->$name }}">

                                        <datalist id="browsers">
                                            @foreach( $event_champions as $event_champ )
                                                <option value="{{ $event_champ->fname.' '.$event_champ->lname }}">{{ $event_champ->fname.' '.$event_champ->lname }} | {{ $event_champ->email }}</option>
                                            @endforeach
                                        </datalist>
                                        <input list="{{ $name }}"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{  old($name) }}">

                                        <datalist id="{{ $name }}">
                                            <option value="">Select {{ $label }}</option>
                                            @foreach( $event_champions as $event_champ )
                                                <option value="{{ $event_champ->fname.' '.$event_champ->lname }}">{{ $event_champ->fname.' '.$event_champ->lname }} | {{ $event_champ->email }}</option>
                                            @endforeach
                                        </datalist>
                                    </div> --}}

                                    <div class="form-group">
                                        @php($label = 'Event Champion')
                                        @php($name = 'event_champion')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Country Code')
                                            @php($name = 'country_code')

                                            <label >{{ $label }}
                                            </label>

                                            <input type="text"  name="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">

                                            {{-- <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                                <option value="">Select</option>
                                                @foreach( $countries_list as $country )
                                                    <option value="{{ $country->code }}" {{ $country->code == $event->$name ? 'selected' : ''}}>{{ $country->code }}</option>
                                                @endforeach
                                            </select> --}}
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter State')
                                            @php($name = 'champ_state')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter City')
                                            @php($name = 'champ_city')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                        </div>


                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Zip')
                                            @php($name = 'zip')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="Enter {{ $label }}" value="{{ $event->$name }}">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Address 1')
                                            @php($name = 'champ_address1')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <textarea  name="{{ $name }}"  class="form-control" placeholder="Enter {{ $label }}">{{ $event->$name }}</textarea>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Address 2')
                                            @php($name = 'champ_address2')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <textarea  name="{{ $name }}"  class="form-control" placeholder="Enter {{ $label }}">{{ $event->$name }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Phone Number')
                                            @php($name = 'ph_num')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            @php($label = 'Enter Email Form')
                                            @php($name = 'email_form')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Contact Person')
                                        @php($name = 'contact_person')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text" name="{{ $name }}" onblur="checkDeadLink(this)" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Enter Contact Link')
                                        @php($name = 'contact_link')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" onblur="checkDeadLink(this)" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Video 1')
                                        @php($name = 'video1')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Video 2')
                                        @php($name = 'video2')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Video 3')
                                        @php($name = 'video3')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
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
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Title')
                                            @php($name = 'download_title1')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Attachment 2')
                                            @php($name = 'download2')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Title')
                                            @php($name = 'download_title2')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Attachment 3')
                                            @php($name = 'download3')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            @php($label = 'Download Title')
                                            @php($name = 'download_title3')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
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
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" accept="image/png, image/jpg, image/jpeg" placeholder="{{ $label }}" style="height: auto;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            @php($label = 'Image Title 1')
                                            @php($name = 'image_tile1')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>
                                    </div>

                                    @if( $event->eventAttachment->extra_image1 && !is_null( $event->eventAttachment->extra_image1 ) )
                                        <div class="form-group">
                                            <img src="{{ getEventImage( $event->eventAttachment->extra_image1 ) }}" class="img-thumbnail height-122" width="300">
                                        </div>
                                    @endif


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Extra Image 2')
                                            @php($name = 'extra_image2')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="file" name="{{ $name }}" id="{{ $name }}" class="form-control" accept="image/png, image/jpg, image/jpeg" placeholder="{{ $label }}" style="height: auto;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            @php($label = 'Image Title 2')
                                            @php($name = 'image_tile2')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>
                                    </div>

                                    @if( $event->eventAttachment->extra_image2 && !is_null( $event->eventAttachment->extra_image2 ) )
                                        <div class="form-group">
                                            <img src="{{ getEventImage( $event->eventAttachment->extra_image2 ) }}" class="img-thumbnail height-122" width="300">
                                        </div>
                                    @endif


                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            @php($label = 'Extra Image 3')
                                            @php($name = 'extra_image3')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="file"  name="{{ $name }}" id="{{ $name }}" class="form-control" accept="image/png, image/jpg, image/jpeg" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                        </div>

                                        <div class="form-group col-md-6">
                                            @php($label = 'Image Title 3')
                                            @php($name = 'image_tile3')

                                            <label>
                                                <b>{{ $label }}
                                                </b>
                                            </label>
                                            <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                        </div>
                                    </div>

                                    @if( $event->eventAttachment->extra_image3 && !is_null( $event->eventAttachment->extra_image3 ) )
                                        <div class="form-group">
                                            <img src="{{ getEventImage( $event->eventAttachment->extra_image3 ) }}" class="img-thumbnail height-122" width="300">
                                        </div>
                                    @endif


                                    <div class="form-group">
                                        <span class="font-weight-900">Social Links:</span>
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Social Link 1')
                                        @php($name = 'socail_link1')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" onblur="checkDeadLink(this)" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Social Link 2')
                                        @php($name = 'socail_link2')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" onblur="checkDeadLink(this)" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Social Link 3')
                                        @php($name = 'socail_link3')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" onblur="checkDeadLink(this)" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->eventAttachment->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Physical Address')
                                        @php($name = 'physical_address')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Link to Purchase/Reserve Tickets')
                                        @php($name = 'purchase_reserve')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Location Based')
                                        @php($name = 'location_based')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Event Manager')
                                        @php($name = 'manager')

                                        <label>
                                            <b>{{ $label }}
                                            </b>
                                        </label>
                                        <input type="text"  name="{{ $name }}" id="{{ $name }}" class="form-control" placeholder="{{ $label }}" value="{{ $event->$name }}" style="height: auto;">
                                    </div>

                                    <div class="form-group">
                                        @php($label = 'Select Status')
                                        @php($name = 'status')

                                        <label >{{ $label }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        <select class="form-control" aria-label="Default select example" name="{{ $name }}">
                                            <option value="">Select</option>
                                            <option value="Approved" {{ "Approved" == $event->$name ? 'selected' : ''}}>Approved</option>
                                            <option value="Pending" {{ "Pending" == $event->$name ? 'selected' : ''}}>Pending</option>
                                        </select>
                                    </div>


                                </div>

                                {{-- Start: Input Hidden Fields --}}
                                    <input type="hidden" name="event_id" value="{{ $event->id }}">
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

    .dropdown-menu{
        transform: none !important;
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
