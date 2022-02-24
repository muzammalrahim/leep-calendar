{{-- Extends layout --}}
@section('content')

@section('calendar-slider')

@include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}

@endsection

@extends('site.master')

{{-- Content --}}

    <!-- hero-box -->
   

    
    <!-- End hero-box -->
    {{-- LEGEND --}}
    <div class="legend-wrapper p-4">
        <div class="row">
          <div class="col-lg-4 col-md-4">
                @include('layout.leftSidebar')
          </div>

          <div class="col-lg-7 col-md-7 ml-lg-5 ml-md-5">
            <div class="legend-content">
                <h2 class="font-weight-bold font-color"> Legend </h2>
                <div class="header">
                  <p> How Events in LEEP Calendar are Coded </p>
                    {{-- <h3><sub>How Events in LEEP Calendar are Coded</sub></h3> --}}
                    <p class=""><b>Format Events:</b>All events titles (2018 forward) have a hierarchy of information and
                        their namesadhere to the following structure:</p>
                    <p class=""><b>1) Keyword</b>(if needed), followed by a coma.</p>
                    <p class="font-weight-bold">2) Event name</p>

                    <ul class="pl-3">
                      <li class="list-unstyled"><p>Coma followed by Ntl., Intl., World, Global or other location designation </li>
                      <li class="list-unstyled"> <p>Parenthesis (Descriptive Word) if applicable </p></li>
                      <li class="list-unstyled"> <p>Parenthesis (Religious Abbreviation) if applicable </p></li>
                      <li class="list-unstyled"><p> Parenthesis (Country / State Abbreviations) if applicable </p></li>
                      <li class="list-unstyled"><p> Parenthesis (Anniversary Year) if applicable </p></li>
                    </ul>

                    <p class=""><b>3) Date:</b> Start Month/Day/Year through End Month/Day/Year</p>

                    <p class="ml-3">The United States of America is the default country. </p>

                    <div class="example-box p-4">
                        <h5 class="font-color font-weight-bold">Example: iPod Day, Intl. (2001): October 23</h5>
                        <p>Translation: International iPod Day celebrates the anniversary of the premiere of theiPod
                            on October 23, 2001.</p>
                        <h5 class="font-color font-weight-bold">Example: Sausage Week, (UK): October 28 - November 3 (est)</h5>

                        <p>Translation: Sausage Week in the United Kingdom occurs October 28-November 3 this year.</p>
                    </div>
                </div>
                <div class="legend-title">
                    {{-- <h1 class="text-center">TITLE ABBREVIATIONS</h1> --}}
                    <h3 class="font-weight-bold font-color my-4"> TITLE ABBREVIATIONS </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-dark font-weight-bold borderBottom">General</h4>
                            
                            <div class="row">
                              <div class="col-2"> <p class="font-weight-bold"> (est) </p> </div>
                              <div class="col-1 pl-3"><p> = </p></div>
                              <div class="col-9">
                                <p> Estimated </p>                                
                              </div>
                            </div>
                              <br/>
                            <div class="row">
                              <div class="col-1"> <p class="font-weight-bold"> (*) </p> </div>
                              <div class="col-1 ml-3"><p> = </p></div>
                              <div class="col-9">
                                <p> More than one event </p>     
                                <p>of the same or similar title by different sponsors, different countries or at different times.</p>
                              </div>
                            </div>
                            <br/>
                            <div class="row">
                              <div class="col-2"> <p class="font-weight-bold"> (1981) </p> </div>
                              <div class="col-1 pl-3"> <p> = </p> </div>
                              <div class="col-9">
                                <p> Date in the title is the anniversary year for an event. </p>                                
                              </div>
                            </div>
                            <br/>
                            <div class="row">
                              <div class="col-1"> <p class="font-weight-bold"> Ntl. </p> </div>
                              <div class="col-1 ml-3"> <p> = </p> </div>
                              <div class="col-9">
                                <p> National </p>    
                                <p> Unless noted, national refers to United States. </p>                            
                              </div>
                            </div>
                            <br/>
                            <div class="row">
                              <div class="col-1"> <p class="font-weight-bold"> Intl. </p> </div>
                              <div class="col-1 ml-3"><p> = </p></div>
                              <div class="col-9">
                                <p> International </p>    
                                <p> This event is intended to be observed worldwide and has support in a minimum of five countries </p>
                              </div>
                            </div>
                            <br/>
                            <h4 class="text-dark font-weight-bold borderBottom mb-2">Religious Designations</h4>

                            <p class="m-0"> <b> (C) </b> <span class="mx-4"> = </span> Christian Event </p>
                            <p class="m-0"> <b> (B) </b> <span class="mx-4"> = </span> Buddhist Event </p>
                            <p class="m-0"> <b> (M) </b> <span class="mx-4"> = </span> Muslim or Islamic Event </p>
                            <p class="m-0"> <b> (H) </b> <span class="mx-4"> = </span> Hindu Event </p>
                            <p class="m-0"> <b> (J) </b> <span class="mx-4"> = </span> Jewish Event </p>
                            <p class="m-0"> <b> (S) </b> <span class="mx-4"> = </span> Sikh Event </p>

                        </div>
                        <div class="col-md-6">
                            <h4 class="text-dark font-weight-bold borderBottom">Location Designations</h4>
                            
                            <div class="row m-0">
                              <p> <b>2-letter ISO Country Codes = Nation where the event takes place. </b>
                                Note: UK is used for Great Britian rather than GB.</p>  
                            </div>

                            <div class="row m-0">
                              <p> <b>2-letter ISO Country Codes = Nation where the event takes place. </b>
                                  Note: UK is used for Great Britian rather than GB.</p>
                            </div>
                            <div class="row m-0">
                              <p> (AU) or (AU/UK) Two letter country code or two letter country codes
                                  separated by forward slash = (Australia) or
                                  (Australia/United Kingdom). This event takes place primarily in this/these
                                  country(ies).</p>
                            </div>

                            <div class="row m-0">
                              <p> We will list up to four in the title,  separated by a backslash.
                                  If more than four, the event is considered worldwide. </p>
                            </div>

                            {{-- <h4>States & Provinces</h4> --}}

                            <h4 class="text-dark font-weight-bold borderBottom">Dates</h4>

                              <div class="row m-0">
                                <p>Date includes / or  – = Begins at Sundown/Ends at Sundown or Begins this day
                                  – Ends this day.</p>
                              </div>

                            <h4 class="text-dark font-weight-bold borderBottom">States & Provinces</h4>
                              
                            <div class="row m-0"> 
                              <p>(AU-NSW) Two letter Country Code followed by em-dash and initials = <br>
                                  (Australia—New South Wales). Country – State/Province of occurrence when applicable.
                              </p>
                            </div>                            
                        </div>


                    </div>
                    <br>
                    <div class="dates">
                        
                        
                    </div>
                    <div class="example-box p-4">
                        <h5 class="font-color font-weight-bold " >Example 1: Yom Kippur (J): October 7/8</h5>
                        <p>Translation: The international Jewish observance of Yom Kippur begins at sundown on
                            October 7 and ends at sundown on October 8, 2019.</p>
                        <h5 class="font-color font-weight-bold">Example 2: Rosh Hashanah (J): September 29-October 1</h5>
                        <p>Translation: Rosh HaShanah, is the Jewish New Year. The biblical name for this holiday is Yom Teruah, literally "day of shouting or blasting.</p>
                      </div>
                </div>

            </div>
          </div>

          <div class="col-md-2">
                @include('layout.rightSidebar')
          </div>
        </div>
    </div>
    {{-- END LENGEND --}}
@endsection

<style type="text/css">
  p{
    color: black !important;
  }
</style>