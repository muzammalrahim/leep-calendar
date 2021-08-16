@extends('layout.default')

@section('content')


    <div class="row">
        <div class="card card-custom gutter-b example example-compact col-md-12">
                <div class="col-lg-12 col-xxl-4">
                    <form  method="post" action="{{url('addBtcAddress')}}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class=" col-md-4" style="padding-top: 5px;">
                                <div class="form-group">
                                    <label>Upload Event (csv file)
                                    <span class="text-danger">*</span></label>
                                    <input type="file"  name="file" class="form-controlss">
                                    <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                                </div>
                            </div>
                            <div class="form-group " style=" text-align: center;">
                                <input type="submit" class="btn btn-primary mr-2  form-control uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4" value="Upload" class="">
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-4">
            <form  method="post" action="{{url('admin/searchEvents')}}"  enctype="multipart/form-data" id='searchEvents' >
                @csrf
                <div class="card card-custom gutter-b example example-compact col-md-12"  style="padding-top: 5px;">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Name
                            <span class="text-danger">*</span></label>
                            <input type="text" name="name" placeholder="Ener Name" class="form-control">
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>                
                        <div class="form-group col-md-4">
                            <label>Start Date  
                            <span class="text-danger">*</span></label>
                            <div class="input-group date">
                                <input type="text" name='startDate' placeholder="Start Date" class="form-control" id='kt_datepicker_2' readonly="">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>                            
                            </div>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>                
                        <div class="form-group col-md-4">
                            <label>End Date  
                            <span class="text-danger">*</span></label>
                            <!-- <input type="date" name='endDate' class="form-control"> -->
                            <div class="input-group date">
                                <input type="text" name='endDate' placeholder="End Date" class="form-control" id='kt_datepicker_2' readonly="">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-calendar"></i>
                                    </span>
                                </div>                            
                            </div>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>                
                        <div class="card-footer col-md-12" style="text-align: center;">
                            <input type="submit" class="btn btn-primary mr-2 " value="Search" class="form-control">
                        </div>
                    </div>

                </div>
            </form>
<!--         </div>

        <div class="col-lg-12"> -->
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Delivered</option>
                                        <option value="3">Canceled</option>
                                        <option value="4">Success</option>
                                        <option value="5">Info</option>
                                        <option value="6">Danger</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div>
                </div>
            </div>
                <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                    <thead>
                    <tr>
                        <th title="Field #1">Event Name</th>
                        <th title="Field #2">Country</th>
                        <th title="Field #3">Start Date</th>
                        <th title="Field #">End Date</th>
                        <th title="Field ">Static Change</th>
                        <th title="Field ">Event Type</th>
                        <th title="Field ">Feature Type</th>
                        <th title="Field ">Event URL</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $e)
                    <tr>
                        <td>{{$e->name}}</td>
                        <td>{{$e->country1}}</td>
                        <td>{{$e->m_start}}-{{$e->d_start}}-{{$e->y_start}}</td>
                        <td>{{$e->m_end}}-{{$e->d_end}}-{{$e->y_end}}</td>
                        <td>{{$e->static_change}}</td>
                        <td >@isset($e->feature->id)<a href="{{URL::asset('admin/unFeature/'.$e->id) }}" class="btn-danger">UnFeature</a>@else <a href="{{URL::asset('admin/feature/'.$e->id) }}">Feature</a>@endif</td>
                        <td>{{$e->type}}</td>
                        <td>{{$e->url}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

        </div>

        </div>
    </div>
@endsection
{{-- Scripts Section --}}
@section('scripts')








{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    {{-- <script src = "{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script> --}}
{{--         <script src="{{ asset('/js/pages/crud/datatables/data-sources/ajax-client-side.js')}}"></script>
        <script src="{{ asset('/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="{{ asset('/plugins/global/plugins.bundle.js')}}"></script>
        <script src="{{ asset('/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
        <script src="{{ asset('/js/scripts.bundle.js')}}"></script>
 --}}

{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> --}}
{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
 --}}
@endsection

{{-- <script type="text/javascript"> 
// $(document).ready(function(){
//    alert('za');
// });
// $( '#searchEvents' ).on( 'submit', function(e) {
//         e.preventDefault();    
//         alert('ZA');
//     });
// $("#form").submit( function (e) {
//      e.preventDefault();  
//     alert('ZA');
// });
 </script> --}}