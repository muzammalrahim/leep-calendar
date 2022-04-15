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
                
                <div class="mb-7">
                    <div class="row align-items-center">
                 
                    </div>
                </div>
               
                    <table width="100%" class="table table-striped table-hover">
                        <thead >
                        <tr >
                            <th title="Field #1">Page Title</th>
                            <th title="Field #1">Post Title</th>
                            <th title="Field #2">Description</th>
                            <th title="Field #2">Image</th>
                            <th title="Field #3">Actions</th>
                        </tr>
                        </thead>
                        <tbody id='event_body zah'>
                            @foreach($blogs as $b)
                        <tr>
                            <td id="name" width="15%"> {{$b->Page_title}}    </td>
                            <td id="name" width="15%"> {{$b->title}}    </td>
                            <td id='country1' width="50%">{!! Str::limit(($b->description), 100) !!}</td>
                            <td id='country1' width="10%"> <img src="{{asset('leep_calender/images')}}/{{$b->images}}" width="30px" /></td>
                            <td id='delete' width="10%"><a href="{{URL::asset('admin/deleteBlog/'.$b->id)}}" class="text-danger"><i class="fa-solid fa-trash text-danger"></i></a>/ <a href="{{URL::asset('admin/editBlog/'.$b->id)}}" class="text-primary"><i class="fa-solid fa-pen-to-square text-primary"></i></a></td>
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

 