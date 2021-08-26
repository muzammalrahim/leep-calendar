@section('title')
{{ $page_detail->title }}
@endsection
{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    
    {{-- About Us --}}
            <!-- aboutus-page -->
<div class="container">
  <div class="aboutus">
    <div class="row">
        <div class="col-md-7 about-left">
          <div class="about-heading">
              <h3>{{ $page_detail->heading }}</h3>
          </div>
          <div class="about-detail">
              <p>{!! $page_detail->content !!}</p>
          </div>
          <div class="about-line"> <hr>
          </div>

          <div class="about-leep-wrapper">
            <div class="row">
                <div class="col-md-4 leep-img-about">
                    <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg"
                        alt="">
                </div>
            </div>
          </div>
       </div>

       @if($page_detail->slug == "contact-us")
         <div class="col-md-5">
            <div class="contact-box">
                <h3>Get in Touch!</h3>
                <form class="mt-4" action="{{URL::asset('contactUs')}}" method="POST">
                    @csrf
                    <div class="row form-group">
                        <div class="col">
                          <input name="fName" type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col">
                          <input name='lName' type="text" class="form-control" placeholder="Last Name">
                        </div>
                      </div>
                    <div class="form-group">
                      <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input name='subject' type="text" class="form-control" id="exampleInputPassword1" placeholder="Subject"> <span
                        toggle="#password-field"></span>
            
                    </div>
                    <div class="form-group">
                       
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Message"></textarea></textarea>
                      </div>
                     
                    <button type="submit" class="btn btn-danger">Send</button>
                
                  </form>
            </div>
         </div>
       @endif
    </div>
  </div>
</div>

    {{-- END About Us --}}
@endsection