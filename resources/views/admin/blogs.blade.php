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
            <h2 style='text-align:center;'>Blogs</h2>
        </div>

        <div class="col-lg-12 col-xxl-12">
            <div class="card-body">
                <!--begin: Search Form-->
                <!--begin::Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                    </div>
                </div>
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            <th title="Field #1">Page Title</th>
                            <th title="Field #1">Blog Title</th>
                            <th title="Field #2">Description</th>
                            <th title="Field #3">Actions</th>
                        </tr>
                        </thead>
                        <tbody id='event_body zah'>
                            @foreach($blogs as $b)
                        <tr>
                            <td id="name" > {{$b->Page_title}}    </td>
                            <td id="name" > {{$b->title}}    </td>
                            <td id='country1'>{!! $b->description !!}</td>
                            <td id='delete'><a href="{{URL::asset('admin/deleteBlog/'.$b->id)}}">Delete</a></td>
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




<style type="text/css">
    .wysihtml5-sandbox{
        height: 200px !important;
        background-color: rgb(247 247 247) !important;
    }
    li a .btn{
        display: none !important;
    }
</style>




{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}" type="text/javascript"></script>

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

 