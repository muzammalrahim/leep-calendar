{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Users
                </h3>
            </div>
        </div>
        <div class="col-lg-12 col-xxl-12">
            <form  method="post" action="{{url('admin/users')}}"  enctype="multipart/form-data">
                @csrf
                <div class="card card-custom gutter-b example example-compact col-md-12"  style="padding-top: 5px;">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>First Name
                            <span class="text-danger">*</span></label>
                            <input type="text" name="f_name" placeholder="Enter First Name" class="form-control">
                        </div>                
                        <div class="form-group col-md-4">
                            <label>Last Name
                            <span class="text-danger">*</span></label>
                            <input type="text" name="l_name" placeholder="Enter Last Name" class="form-control">
                        </div>                
                        <div class="form-group col-md-4">
                            <label>Email
                            <span class="text-danger">*</span></label>
                            <input type="text" name="email" placeholder="Enter Last Name" class="form-control">
                        </div>                
                        <div class="form-group col-md-12" style="text-align: center;">
                            <label>Membership Type
                            <span class="text-danger">*</span></label>
                            <select name="memb_type" class="form-control ">
                                <option value="">Select</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Premium">Premium</option>

                            </select>
                            <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                        </div>                
                        <div class="card-footer col-md-12" style="text-align: center;">
                            <input type="submit" class="btn btn-primary mr-2 " value="Search" class="form-control">
                        </div>
                    </div>

                </div>
            </form>

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
                            {{-- <div class="col-md-4 my-2 my-md-0">
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
                            </div> --}}
                            {{-- <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Type:</label>
                                    <select class="form-control" id="kt_datatable_search_type">
                                        <option value="">All</option>
                                        <option value="1">Online</option>
                                        <option value="2">Retail</option>
                                        <option value="3">Direct</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        {{-- <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a> --}}
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="">First Name</th>
                    <th title="">Last Name</th>
                    <th title="Fiel">Email</th>
                    <th title="Fiel">CustomersType</th>
                    <th title="Fie">Is Verified</th>
                    <th title="Fiel">Creater at</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $u)
                        <tr>
                            <td>{{$u->fname}}</td>
                            <td>{{$u->lname}}</td>
                            <td>{{$u->email}}</td>
                            <td>{{$u->type}}</td>
                            <td>
                                @if($u->email_verified_at!='')
                                    verified
                                @else
                                    Unverified
                                @endif
                            </td>
                            <td>{{$u->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
@endsection
