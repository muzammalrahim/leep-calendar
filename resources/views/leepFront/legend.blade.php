{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

{{-- Content --}}

    <!-- hero-box -->
    <div class="hero-wrapper mb-4">

      <div class="container123">

        <div class="row m-0">

          <div class="col-12 col-sm-12 col-md-5 col-lg-5" style="bottom:10px">

            <div class="calender m-auto">

              <div class="calender-head mt-3">

                <h3> Today Is ...</h3>

              </div>

              <!-- Tabs -->

              <section id="tabs">

                  @include('leepFront.parts.calendar') {{-- leepFront/parts/calendar --}}  
                
              </section>

              <!-- ./Tabs -->

            </div>

          </div>


          <div class="col-12 col-sm-12 col-md-7 col-lg-7">
            @include('leepFront.parts.slider') {{-- leepFront/parts/slider --}}
          </div>

        </div>

      </div>

    </div>


    
    <!-- End hero-box -->
    {{-- LEGEND --}}
    <div class="legend-wrapper p-4">
        <div class="row">
          <div class="col-2">
                @include('layout.leftSidebar')
          </div>

          <div class="col-8">
            <div class="legend-content">
                <h3 class="font-weight-bold font-color"> Legend </h3>
                <div class="header">
                  <p> How Events in LEEP Calendar are Coded </p>
                    {{-- <h3><sub>How Events in LEEP Calendar are Coded</sub></h3> --}}
                    <p class=""><b>Format Events:</b>All events titles (2018 forward) have a hierarchy of information and
                        their namesadhere to the following structure:</p>
                    <p class=""><b>1) Keyword</b>(if needed), followed by a coma.</p>
                    <p class="font-weight-bold">2) Event name</p>

                    <ul class="pl-3">
                      <li class="list-unstyled">Coma followed by Ntl., Intl., World, Global or other location designation </li>
                      <li class="list-unstyled"> Parenthesis (Descriptive Word) if applicable </li>
                      <li class="list-unstyled"> Parenthesis (Religious Abbreviation) if applicable </li>
                      <li class="list-unstyled"> Parenthesis (Country / State Abbreviations) if applicable </li>
                      <li class="list-unstyled"> Parenthesis (Anniversary Year) if applicable </li>
                    </ul>

                    <p class=""><b>3) Date:</b> Start Month/Day/Year through End Month/Day/Year</p>

                    <p class="ml-3">The United States of America is the default country. </p>

                    <div class="example-box p-4">
                        <h5 class="font-color font-weight-bold">Example: iPod Day, Intl. (2001): October 23</h5>
                        <p>Translation: International iPod Day celebrates the anniversary of the premiere of theiPod
                            on October 23, 2001.</p>
                        <h5 class="font-color font-weight-bold">Example: Sausage Week, (UK): October 28 - November 3 (est)</h5>

                        <p>Translation: International iPod Day celebrates the anniversary of the premiere of theiPod
                            on October 23, 2001.</p>
                    </div>
                </div>
                <div class="legend-title">
                    {{-- <h1 class="text-center">TITLE ABBREVIATIONS</h1> --}}
                    <h3 class="font-weight-bold font-color my-4"> TITLE ABBREVIATIONS </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-dark font-weight-bold borderBottom">General</h4>
                            
                            <div class="row">
                              <div class="col-1"> <span class="font-weight-bold"> (est) </span> </div>
                              <div class="col-1 ml-3"> = </div>
                              <div class="col-9">
                                <span> Estimated </span>                                
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-1"> <span class="font-weight-bold"> (*) </span> </div>
                              <div class="col-1 ml-3"> = </div>
                              <div class="col-9">
                                <span> More than one event </span>     
                                <p>of the same or similar title by different sponsors, different countries or at different times.</p>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-1"> <span class="font-weight-bold"> (1981) </span> </div>
                              <div class="col-1 ml-3"> = </div>
                              <div class="col-9">
                                <span> Date in the title is the anniversary year for an event. </span>                                
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-1"> <span class="font-weight-bold"> Ntl. </span> </div>
                              <div class="col-1 ml-3"> = </div>
                              <div class="col-9">
                                <span> National </span>    
                                <p> Unless noted, national refers to United States. </p>                            
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-1"> <span class="font-weight-bold"> Intl. </span> </div>
                              <div class="col-1 ml-3"> = </div>
                              <div class="col-9">
                                <span> International </span>    
                                <p> This event is intended to be observed worldwide and has support in a minimum of five countries </p>
                              </div>
                            </div>

                            <h4 class="text-dark font-weight-bold borderBottom mb-2">Religious Designations</h4>

                            <p class="m-0"> <b> (c) </b> <span class="mx-4"> = </span> Christian Event </p>
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
                              <p><span> (AU) or (AU/UK) </span>Two letter country code or two letter country codes
                                  separated by forward slash = (Australia) or
                                  (Australia/United Kingdom). This event takes place primarily in this/these
                                  country(ies).</p>
                            </div>

                            <div class="row m-0">
                              <p> We will list up to four in the title, <span> separated by a backslash. </span>
                                  If more than four, the event is considered worldwide. </p>
                            </div>

                            {{-- <h4>States & Provinces</h4> --}}

                            <h4 class="text-dark font-weight-bold borderBottom">Dates</h4>

                              <div class="row m-0">
                                <p><span>Date includes / or </span> – = Begins at Sundown/Ends at Sundown or Begins this day
                                  – Ends this day.</p>
                              </div>

                            <h4 class="text-dark font-weight-bold borderBottom">States & Provinces</h4>
                              
                            <div class="row m-0"> 
                              <p><Span>(AU-NSW)</Span> Two letter Country Code followed by em-dash and initials = <br>
                                  (Australia—New South Wales). Country – State/Province of occurrence when applicable.
                              </p>
                            </div>                            
                        </div>


                    </div>
                    <br>
                    <div class="dates">
                        
                        
                    </div>
                    <div class="example-box p-4">
                        <h5 class="font-color font-weight-bold" >Example 1: Yom Kippur (J): October 7/8</h5>
                        <p>Translation: The international Jewish observance of Yom Kippur begins at sundown on
                            October 7 and ends at sundown on October 8, 2019.</p>
                        <h5 class="font-color font-weight-bold">Example 2: Rosh Hashanah (J): September 29-October 1</h5>
                    </div>
                </div>

            </div>
          </div>

          <div class="col-2">
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