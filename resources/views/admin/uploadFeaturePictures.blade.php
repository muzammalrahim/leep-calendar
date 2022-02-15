@extends('layout.default')

@section('content')
    @if ($errors->any())
      <div class="alert alert-danger">
          <strong>Danger!</strong>
          <ul>
               @foreach ($errors->all() as $error)
                    <li >{{ $error }}</li>
                @endforeach
          </ul>
      </div>
    @endif

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

    @if(session()->has('status'))
      <div class="alert alert-success">
          <ul style="text-align: center;">
              {{session('status')}}
          </ul>
      </div>
    @endif

    <div class="row">
        <div  class='card-header col-lg-12 col-xxl-12'>
            <h6 style='text-align:center;'>Upload Feature Images</h6>
        </div>
        <div class="card card-custom gutter-b example example-compact col-md-12">
            <div class='card-body'>
                <div class="col-lg-12 col-xxl-12">
                    <form  method="post" action="{{url('uploadFeaturePictures')}}"  enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                            <div class=" col-md-4" style="padding-top: 5px;">
                                <div class="form-group">
                                    <label>Upload Feature Pictures (jpg,png)
                                    <span class="text-danger">*</span></label>
                                    <input type="file" required multiple accept="image/*" name="file[]" class="form-controlss">
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
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}" type="text/javascript"></script>

    <script type="text/javascript"> 

        $(document).ready(function(){
            $(document).click("input[type='submit']" ,function(){
                var $fileUpload = $("input[type='file']");
                if (parseInt($fileUpload.get(0).files.length)>30){
                 alert("You can only upload maximum of 30 files");
                }
            });    
        });

    </script>

@endsection

 