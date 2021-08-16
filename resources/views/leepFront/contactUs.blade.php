@section('content')
@extends('layout.layoutLeep')
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
            <div class="row">
                <div class="col-md-7 about-left"> 
                    <div class="about-heading">
                        <h3>Contact Us</h3>
                    </div>
                    <div class="about-detail">
                        <p> LEEP Calendar is created by marketing and editorial professionals, public relations
                            professionals,
                            journalists, digital media professionals, teachers and event planners. Over 7,000 events
                            in the United
                            States, United Kingdom, Canada, Australia and the world are accessible by industry,
                            location, keyword,
                            date, event champion, length, topic and type of event. Events are meticulously
                            researched, verified and
                            added by our staff and event champions daily. The dynamic nature of LEEP allows you to
                            focus on your
                            business, generate topic specific editorial and/or event calendars, plan travel, and
                            execute strategy in
                            minutes, rather than weeks. Memberships view LEEP free of 3rd party advertising and can
                            import results.
                            Learn more. JOIN TODAY!</p>
                        <p> LEEP Calendar is created by marketing and editorial professionals, public
                            relations professionals, journalists, digital media professionals, teachers and event
                            planners. Over
                            7,000 events in the United States, United Kingdom, Canada, Australia and the world are
                            accessible by
                            industry, location, keyword, date, event champion, length, topic and type of event.
                            Events are
                            meticulously researched, verified and added by our staff and event champions daily. The
                            dynamic nature
                            of LEEP allows you to focus on your business, generate topic specific editorial and/or
                            event calendars,
                            plan travel, and execute strategy in minutes, rather than weeks. Memberships view LEEP
                            free of 3rd party
                            advertising and can import results. Learn more. JOIN TODAY!</p>
                    </div>

                    
                    <!-- Contact-us-page-->
                    <div class="about-leep-wrapper">
                        <div class="row">
                            <div class="col-md-4 leep-img-about">
                                <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Untitled-1.svg"
                                    alt="">
                            </div>
                           
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
    </div>
@endsection