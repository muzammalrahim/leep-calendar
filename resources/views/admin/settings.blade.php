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
        <div class="card card-custom gutter-b example example-compact col-md-12">
                <div class="col-lg-12 col-xxl-12">
                          <h2><b>Change Banner Image</b></h2>
                    <form  method="post" action="{{url('admin/updateBannerPic')}}"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class=" col-md-4" style="padding-top: 5px;">
                                <div class="form-group">
                                    <label>Upload New Banner (Old will be deleted)
                                    <span class="text-danger">*</span></label>
                                    <input type="file"  name="image" class="form-controlss">
                                    <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                                </div>
                            </div>
                            <div class="form-group " style=" text-align: center;">
                                <input type="submit" class="btn btn-primary mr-2  form-control uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4" value="Upload" class="">
                            </div>
                        </div>
                    </form>
            </div>
            <div class='col-12'>
                {{-- {{dd(App\Models\participants::first()->banner)}} --}}
                @isset(App\Models\participants::first()->banner)
                
                <img src="{{URL::asset('/leep_calender/images/Developer Assets/'.App\Models\participants::first()->banner)}}" width="300px" >
                @endif
            </div>
        </div>
        <div class="card card-custom gutter-b example example-compact col-md-12">
            <div class="col-lg-12 col-xxl-12">
                  @if ($errors->any())
                      <div class="alert alert-danger  col-12">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
              <form  method="post" action="{{url('admin/updatePassword')}}"  enctype="multipart/form-data">
                  <div class="row">
                  @csrf
                      <div class=" col-md-12" style=" text-align: center;padding-top: 5px;">
                          <h2><b>Change Password</b></h2>
                          <div class="form-group">
                              <label>Enter New Password
                              <input type="password" name="password" class="form-control">
                              <label>Re-Enter New Password
                              <input type="password" name="password_confirmation" class="form-control">
                              <!-- <span class="form-text text-muted">We'll never share your email with anyone else.</span> -->
                          </div>
                      <div class="form-group " style=" text-align: center;">
                          <input type="submit" class="btn btn-primary mr-2  form-control uppy-btn btn btn-light-primary font-weight-bold btn-sm mt-4" value="Upload" class="">
                      </div>
                      </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
@endsection
    
    
    