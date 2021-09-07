{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
 <!-- login-html-->
 <div class="login-wrapper text-center">
    <div class="login-box text-center">
      <h6 class="mt-3">Login</h6>
      <p>Login using Email </p>
          @if ($errors->any())
              <div class="alert alert-danger  col-12">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li style="list-style-type:none;">{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      <form class="mt-4" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
      {{-- <form class="mt-4"> --}}
        <div class="form-group">
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
            placeholder="Email Address" name="email">

        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="password" placeholder="password" name="password"> <span
            toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password mr-2"></span>


        </div>
        <div class="row">
            <div class="col-md-12 forget">
                <p><i> Forget Password?</i> </p>
            </div>
        </div>
        <button type="submit" class="btn btn-danger">Login</button>
        <div class="new-member mt-3">
          <p>Not a registered user? <a href="{{ asset('/register') }}"><span>Signup</span></a></p>
        </div>
      </form>
    </div>
  </div>


@endsection



