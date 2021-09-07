@section('content')
@extends('layout.layoutLeep')

        <div class="member-wrapper">
            <div class="container">
                <div class="member-heading">
                    <h3>Member Ships</h3>
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
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="event-color">
                            <div class="silver-event text-center">
                                <h4>Silver Event Champion</h4>
                                <p class="text-center">Up to 3 Events per year</p>
                            	<a  class="btn btn-outline-secondary" type="submit">FREE</a>
                                <p class="text-center"><span>Features & Services</span></p>
                            </div>
                            <p>1) Individually enter up to 3 events a year. </p>
                            <p> 2) Manage your events from your Champion Dashboard.</p>
                            <p> 3) Add up to 3 social media links.</p>
                            <p> 4) Link to your event’s website. </p>
                            <p> 5)Include up to 3 document downloads.</p>
                            <p> 6) Include up to 3 video embeds. </p>
                            <p> 7) 1 Masthead image per event and up to 3 additional supporting images. </p>
                            <p> 8) Full description of your event.</p>
                            <p> 9) Include contact information for journalists & potential partners / sponsors, (visible
                                to paid professional members only). </p>
                            <p> 10) Have your event included in the Today’s Featured
                                Event rotation.</p>
                            <p> 11) Include a purchase tickets / reservation link.</p>


                            <div class="event-color-btn text-center">
                                @if(isset(Auth::user()->membership->type) && Auth::user()->membership->type=='Silver')
		                                <a  class="btn btn-secondary" type="submit">Subscribed</a>
                                @else
	                                <a href="{{URL::asset('/becomeFreeMember') }}" class="btn btn-outline-secondary" type="submit">Subscribe</a>
                                @endif
                            </div>
                        </div>
                    </div>
                        {{-- second --}}
                    <div class="col-md-4">
                        <div class="event-color">
                            <div class="silver-event text-center">
                                <h4>Gold Event Champion</h4>
                                <p class="text-center">4 - 50 Events per year</p>
                                <a href="#" class="btn btn-outline-secondary" type="submit">$69.95<sub>/year</sub></a>
                                <p class="text-center"><span>Features & Services</span></p>
                                <br>
                                <p class="text-center"><span>Everything in the Silver Event Champion package
                                        PLUS:</span></p>
                                        <br>
                                        <br>
                            </div>
                            <p>a) View full search results. </p>
                            <p>b) Import events into your electronic calendar.</p>
                            <p> c) Receive notifications of date changes or additions of events in your chosen
                                categories. </p>
                            <p>d) Ability to comment on events in the LEEP Calendar.</p>
                            <p> e) Exclusive access to Event Champion</p>
                            <p> contact information.</p>
                            <p> f) No third-party advertising.</p>


                            <div class="event-color-btn-single text-center" style="    ">
                                {{-- <a href="#" class="btn btn-outline-secondary" type="submit">Upgrade</a> --}}
                                @if(isset(Auth::user()->membership->type) && Auth::user()->membership->type=='Gold'){{Auth::user()->name}}
		                                <a  class="btn btn-secondary" type="submit">Subscribed</a>
                                @else
	                                {{-- <a href="{{URL::asset('/becomeGoldMember/') }}" class="btn btn-outline-secondary" type="submit">Subscribe</a> --}}
                                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!!URL::asset('/api/payment')!!}" >
                                    @csrf
                                        <script 
                                            src="{{URL::asset('https://checkout.stripe.com/checkout.js')}}" 
                                            class="stripe-button"
                                            data-key="pk_test_51JUnQfDtg6OTP8g894Kp4YWXJn3dVzlCvBXVvpWwvueOWV2NUkaAWb6UfsnO9HuQNO2qdNyNvRvgfVPL8RgQ5fmi00gfmrUTMo"
                                            data-amount="6995"
                                            data-name="Leep Calender "
                                            data-description=""
                                            data-image="{{URL::asset('https://stripe.com/img/documentation/checkout/marketplace.png')}}"
                                            data-locale="off"
                                            data-currency="usd">
                                        </script>
                                        <input type="text" value="gold" hidden name="member">
                                        <input type="text" value="{{Auth::user()->email}}"  name="userId" hidden="">
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                        {{-- third --}}
                    <div class="col-md-4">
                        <div class="event-color">
                            <div class="silver-event text-center">
                                <h4>Premium Event Champion</h4>
                                <p class="text-center">Up to 200 Events per year</p>
                                <a href="#" class="btn btn-outline-secondary" type="submit">$129.95<sub>/year</sub></a>
                                <br> <br><br>
                                <p class="text-center"><span>Everything in the Silver & Gold Event Champion packages
                                        PLUS:</span></p>
                            </div>
                            <p>upto 200 events per year via FTP upload. more events can be added for additional cost.
                                includes five complimentary professional memberships for our team. (@99 value)</p>
                            <p> <b>PLEASE NOTE:</b> <br>
                                Physical location events (Conferences, Symposiums, Fairs, Festivals, Trade
                                shows, Exhibitions, Parades, Demonstrations, Rallies and Sporting Events) must be open
                                to
                                the public (or trade specific organization) and have the capacity to host 400+ persons.
                            </p>
                            <br>
                            <p> Private events, including but not limited to weddings, bidays, marriage anniversaries,
                                club
                                eetings, private parties, etc...Are not eligible for inclusion in LEEP alendar.</p>


                            <div class="event-color-btn-two text-center" style="">
                                @if(isset(Auth::user()->membership->type) && Auth::user()->membership->type=='Premium')
		                                <a  class="btn btn-secondary" type="submit">Subscribed</a>
                                @else
	                                {{-- <a href="{{URL::asset('/becomePremiumMember') }}" class="btn btn-outline-secondary" type="submit">Subscribe</a> --}}
                                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!!URL::asset('/api/payment')!!}" >
                                    @csrf
                                        <script 
                                            src="{{URL::asset('https://checkout.stripe.com/checkout.js')}}" 
                                            class="stripe-button"
                                            data-key="pk_test_QnIkbt1DyPNo1nv8aZwEW2CK"
                                            data-amount="12995"
                                            data-name="Leep Calender "
                                            data-description=""
                                            data-image="{{URL::asset('https://stripe.com/img/documentation/checkout/marketplace.png')}}"
                                            data-locale="off"
                                            data-currency="usd">
                                        </script>
                                        <input type="text" value="premium" hidden name="member">
                                        <input type="text" value="{{Auth::user()->email}}"  name="userId" hidden="">
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="member-msg">
                    <p>LEEP Calendar reserves the right to accept or reject, post or remove any event submitted.
                        Acceptance of an event oes not imply endorsement of that event or its subject matter by Jubilee
                        LLC, LEEP Calendar, its stakeholders or artners. Please see our Terms of Service and Privacy
                        Polices for a complete accounting of our policies.</p>
                </div>

                <div class="champion-membership">
                    <div class="champion-data">
                        <h3>Which champion membership is right for you?</h3>
                        <h6>Silver Event Champions</h6>
                        <p>Silver Event Champions are typically individuals, small businesses or municipalities ith one
                            to three public events or promotions per year. This is an especially useful category for
                            towns with an annual festival they want to promote and for individuals, ctivists and small
                            groups with annual awareness campaigns, impromptu rallies, town alls and other events based
                            upon current events. </p> <br>
                        <p>Note: If you also need access to the full LEEP Calendar and a
                            professional embership, you may want to go with the Gold Champion Membership, which includes
                            2 professional memberships. If you already have a Professional membership nd are adding a
                            Gold or Platinum Event Champion Membership, please contact us so e may apply a credit to
                            your account.</p>
                        <div class="champion-btn text-center">
                            <a href="#" class="btn btn-outline-secondary" type="submit">Get Started</a>

                        </div>
                    </div>
                    <div class="champion-data">

                        <h6>Gold Event Champions</h6>
                        <p>Gold Event Champions are typically businesses, non-profits, brands, mid-large city
                            governments, public relations agencies and event planners with multiple clients with events
                            and awareness campaigns throughout the year. </p> <br>
                        <p>Note: If you have less than fifty events a
                            year, but wish to upload those events in multiple languages, you’ll want the Platinum
                            package.</p>
                        <div class="champion-btn text-center">
                            <a href="#" class="btn btn-outline-secondary" type="submit">Get Started</a>

                        </div>
                    </div>
                    <div class="champion-data">

                        <h6>Premium Event Champions</h6>
                        <p>Platinum Event Champions are super users and typically either event locations (conference
                            centers, fairgrounds, convention centers), or international NGOs, International
                            organizations, national government agencies, state and provincial agencies, major trade
                            groups, event organizers and conference hosts. These organizations may have events or
                            campaigns in multiple nations with different local contacts. Platinum Members may also wish
                            to post their events in more than one language.</p>
                        <div class="champion-btn text-center">
                            <a href="#" class="btn btn-outline-secondary" type="submit">Get Started</a>

                        </div>
                    </div>
                
                <div class="event-right">
                    <p>Manage more than 200 events per year? At Platinum Checkout choose the ‘Add Additional Events’
                        Option.</p>
                </div>
                <div class="more-event">
                    <p style="color: black;">Still not sure? Learn more about:</p>
                    <span>Location Based Event Champions Promotional Event Champions</span>
                </div>
            </div>
            </div>
        </div>

@endsection