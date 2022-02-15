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
            <h6 style='text-align:center;'>Below images have been uploaded</h6>

            {{-- (public_path('leep_calender/images/Headers') --}}

        </div>
        <div class="card card-custom gutter-b example example-compact col-md-12">
            <div class='card-body'>
                <div class="col-lg-12 col-xxl-12">
                    
                    <div class="row">
                        @foreach ($adminImages as $file)
                            <div class="col-6 p-2">    
                                <img src="{{ asset($file) }}">
                            </div>
                        @endforeach

                        {!! $adminImages->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Scripts Section --}}
@section('scripts')

{{-- Styles Section --}}
@section('styles')

<style type="text/css">
    .container{
        width: auto !important;
    }
    img {
        width: inherit;
    }
</style>

@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/custom/uppy/uppy.bundle.js') }}" type="text/javascript"></script>

   <script type="text/javascript"> </script> 
@endsection

 