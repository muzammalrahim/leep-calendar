{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

  <div class="hero" style="background-image:linear-gradient(#929eaa, rgba(0, 0, 0, 0.7)) ,url('{{ asset('leep_calender/images/legal/legal.jpg')}}');">
  </div>


    <div class="borderline"></div>
 
    <div class="my-eventsDiv m-4">

        <div class="row">

            <div class="col-md-3 col-lg-2"> 
                @include('layout.leftSidebar')
            </div>

            <div class="col-md-7 col-lg-8 ml-lg-5 ml-md-3">
                <div class="events mx-3">
                    
                    <h2 class="font-weight-bold font-color"> Legal Disclaimer: </h2>
                    <p class="text-dark text-justify disclaimer-text">
                       
                      The articles, opinions and views provided by Jubilee LLC or on LEEPCalendar.com are not intended to serve as medical, legal or financial or any other category of advice. All content is provided for information and entertainment</b></i> purposes only. Additional documents, images and videos may be authored by licensed psychologists mental ,health professionals, legal, financial and other experts or by journalists, and are provided to assist in understanding the content of a specific event. In the case of some health related or sponsored events, we may quote directly and at length from the champion’s collateral, or a recognized expert in that field. The appearance of an event in LEEP Calendar does not imply endorsement of the event, nor the organization championing the event by Jubilee LLC, its stakeholders, customers, partners or subsidiaries. LEEP Calendar is a comprehensive resource for events, holidays and promotions. It is compiled of a variety of events, whether or not we agree with the content, political philosophy, cause or purpose. All dates, contact information, URLs, addresses, and information relating to any event, promotion or holiday are subject to change, and should be treated as estimated. By using this site, you agree to Jubilee LLC’s full Terms & Conditions. 

                    </p>
                </div>
            </div>
            
            <div class="col-md-2">
                @include('layout.rightSidebar')
            </div>

        </div>

    </div>


@endsection