 {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf
                                                <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
 --}}

  {{-- Extends layout --}}
@extends('layout.layoutLeep')
{{-- Content --}}
@section('content')
 <!-- Register-html-->
 <div class="signup-wrapper text-center">
    <div class="signup-box text-center">
      <h6 class="mt-3">SIGN Up</h6>
      <p>Sign Up using email or social media!</p>
          @if ($errors->any())
              <div class="alert alert-danger  col-12">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li style="list-style-type:none;">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      <form  class="mt-4" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
        @csrf
        <div class="row form-group">
            <div class="col">
               <input type="text" value="{{ old('fname') }}"  class="form-control" name="fname" id="fname" placeholder="First Name">
                   @error('fname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="col">
              <input type="text" class="form-control"  name="lname"  value="{{ old('lname') }}"   id="lname" placeholder="Last Name">
                   @error('lname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
          </div>
        <div class="form-group">
          <input type="email"  id="email" aria-describedby="emailHelp"
            placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}"  autocomplete="email">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password"> <span
            toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password mr-2"></span>
                

        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password"  name="password_confirmation"> <span
              toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password mr-2"></span>
  
          </div>
          <div class=" row form-check">
            <div class="check"> <input type="checkbox" required="" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"> <i>I agree to the terms & conditions</i> </label></div>
          
          </div>
        <button type="submit" class="btn btn-danger">Sign Up</button>
        <div class="new-member mt-3">
          <p>Already a member? <a href="login-leep.html"><span>Login</span></a></p>
        </div>
      </form>
    </div>
  </div>

@endsection