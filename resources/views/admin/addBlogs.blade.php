@extends('layout.default')

@section('content')

    @if(session()->has('errorMsg'))
      <div class="alert alert-danger">
          <ul style="text-align: center;">
              {{session('errorMsg')}}
          </ul>
      </div>
    @endif
    @if(session()->has('successMsg'))
      <div class="alert alert-success">
          <ul style="text-align: center;">
              {{session('successMsg')}}
          </ul>
      </div>
    @endif

    <div class="row">
        <div  class='card-header col-lg-12 col-xxl-12'>
            <h6 style='text-align:center;'>Upload Events</h6>
        </div>
        <div class="card card-custom gutter-b example example-compact col-md-12">
            <div class='card-body'>
                <div class="col-lg-12 col-xxl-12">
                    <form  method="post" action="{{url('admin/Blogs')}}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class=" col-md-12" style="padding-top: 5px;">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label><b>Page Title</b>
                                        </label>
                                        <input type="text"  name="page_title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label><b>Title</b>
                                        </label>
                                        <input type="text"  name="title" class="form-control">
                                    </div>
                                    <div class="">
                                        <label><b>Desciption</b>
                                        </label>
                                        <textarea  name="description"  class="form-control wysihtml5 "></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary mr-2  form-control uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4" value="create" class="">
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
{{-- Scripts Section --}}

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

   {{--  <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}" type="text/javascript"></script> --}}

    <!--end::Global Theme Bundle-->
        <!--begin::Page Vendors(used by this page)-->
{{--         <script src="{{ asset('/plugins/custom/datatables/datatables.bundle.js')}}"></script>

        begin::Page Scripts(used by this page)
        <script src="{{ asset('/js/pages/crud/datatables/basic/paginations.js')}}"></script>
 --}}        <!--end::Page Scripts-->
   <script type="text/javascript"> 
    $(document).ready(function() {
          $('.wysihtml5').wysihtml5();
        });
   </script> 
@endsection

 