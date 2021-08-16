@extends('layout.layoutLeep')
@section('content')

    <div class="container">
        <div class="aboutus">
            @if(session()->has('errorMsg'))
                <div class="alert alert-danger" >
                    <ul style="text-align: center;list-style-type:none;">
                        {{session('errorMsg')}}
                    </ul>
                </div>
            @endif
            @if(session()->has('successMsg'))
                <div class="alert alert-success">
                    <ul style="text-align: center;list-style-type:none;">
                        {{session('successMsg')}}
                    </ul>
                </div>
            @endif                        
            @if ($errors->any())
                <div class="alert alert-danger  col-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-md-7 about-left"> 
                    <div class="about-heading">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="about-detail">
                        <form class="mt-4" action="{{URL::asset('updateUserPic')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group">
                              <div class="col">
                                <input name="image" type="file" class="" >
                              </div>
                              <div class="col">
                              </div>
                            </div>
                            <button type="submit" class="btn btn-danger">Update</button>
                        </form>
                    </div>
                    <!-- Contact-us-page-->
                    <div class="about-leep-wrapper">
                        <div class="row">
                            <div class="col-md-4 leep-img-about">
                                <img src="{{URL::asset('leep_calender/images/userProfilePic/'.Auth::user()->image)}}"
                                    alt="">
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-box">
                        <h3>Reset Password!</h3>
                        <form class="mt-4" action="{{URL::asset('userUpdatePassword')}}" method="POST">
                            @csrf
                            <div class="row form-group">
                              <div class="col">
                                <input name="password" type="password" class="form-control" placeholder="Enter Password">
                              </div>
                              <div class="col">
                                <input name='password_confirmation' type="password" class="form-control" placeholder="Enter Password">
                              </div>
                            </div>
                            <button style="float: right;" type="submit" class="btn btn-danger">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection