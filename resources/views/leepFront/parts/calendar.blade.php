

<div class="days bg-yellow">

  {{-- <div class="row m-0"> --}}

    {{-- <div class="col-xs-12" style="width: -webkit-fill-available;"> --}}
      {{-- <div class=""> --}}
        <nav class="font-color bg-yellow event_names">

          <div class="nav nav-tabs nav-fill p-0 m-0 row" id="nav-tab" role="tablist">

            <a class="nav-item nav-link active col-xs-2 col-4 font18 rounded-0 bg-site" id="nav-home-tab" data-toggle="tab" href="#nav-home"

              role="tab" aria-controls="nav-home" aria-selected="true"> {{ getMonthName($m) }} {{ $d  }}</a>

            <a class="nav-item nav-link col-xs-2 col-2 font15 rounded-0 mr-3 calender-tab bg-site" id="nav-day-tab" data-toggle="tab" href="#nav-day" 
            role="tab" aria-controls="nav-day" aria-selected="false">Day</a>

            <a class="nav-item nav-link col-xs-2 col-2 font15 rounded-0 mr-3 calender-tab bg-month" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"

              role="tab" aria-controls="nav-contact" aria-selected="false">Week</a>

            <a class="nav-item nav-link col-xs-2 col-2 font15 rounded-0 mr-3 calender-tab bg-week" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" 

            role="tab" aria-controls="nav-profile" aria-selected="false">Month</a>

            

          </div>

        </nav>

      {{-- </div> --}}

      <div class="event_detail px-2 pb-2 row m-0">

        <div class="tab-content px-3 px-sm-0" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            
            <div class="calendarScrolls">
              
              {{-- ========================================== Date Events ========================================== --}}

              @foreach($full_events as $d_e)
                @isset($d_e->id)
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row event_detail">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$d_e->d_start}}</span>-->
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$d_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-12 m-0 pl-4 pt-2">

                        @php
                          $eventName = substr($d_e->name, 0, strpos($d_e->name, ":"));
                        @endphp

                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$d_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($eventName)}}
                        </h6>
                       <!--  <p>{{\Illuminate\Support\Str::limit($d_e->description,60)}}</p> -->
                      </div>
                    </div>
                  </div>
                  @endif
              @endforeach
            </div>
          
          </div>


          <div class="tab-pane fade" id="nav-day" role="tabpanel" aria-labelledby="nav-day-tab">
            
            <div class="calendarScrolls">
              {{-- @dump('here') --}}

              {{-- ========================================== Daily Type Events ========================================== --}}

              
              {{-- @isset($daily_events->id) --}}

              @if ($daily_events->count() > 0)
              
                @foreach($daily_events as $m_e)
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$m_e->d_start}}</span>--> 
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$m_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-12 m-0 pl-4 pt-2">

                        @php
                          $eventName = substr($m_e->name, 0, strpos($m_e->name, ":"));
                        @endphp

                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$m_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($eventName)}}
                        </h6>
                        {{-- <p>{{\Illuminate\Support\Str::limit($m_e->description,60)}}</p>  --}}
                      </div> 
                    </div>
                  </div>
                @endforeach

              @else
                <h6 class="text-white"> None Daily event exist </h6>
              @endif


                {{-- @else  --}}
                {{-- @endif --}}
            </div>
          
          </div>

          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            
            <div class="calendarScrolls">

              {{-- ========================================== Weekly Type Events ========================================== --}}

              {{-- @isset($m_events[0]->id) --}}
              @if ($week_events->count() > 0)

                @foreach($week_events as $m_e)
                  {{-- @dump($m_e); --}}
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$m_e->d_start}}</span>-->
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$m_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-12 m-0 pl-4 pt-2">
                        @php
                          $eventName = substr($m_e->name, 0, strpos($m_e->name, ":"));
                        @endphp

                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$m_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($m_e->name)}}
                        </h6>
                          {{-- <p>{{\Illuminate\Support\Str::limit($m_e->description,60)}}</p> --}}
                      </div>
                    </div>
                  </div>
                @endforeach
              @else
                <h6 class="text-white"> None Weekly event exist </h6>
              @endif
                {{-- @else  --}}
                {{-- @endif --}}
            </div>

          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            
            <div class="calendarScrolls">

              {{-- ========================================== Monthly Type Events ========================================== --}}

              {{-- @isset($week_events[0]->id) --}}

              {{-- @dump('Weekly event') --}}
              @if ($monthly_events->count() > 0)
                {{-- expr --}}
                @foreach($monthly_events as $event)

                  {{-- @dump($event); --}}
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$event->d_start}}</span>-->
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$event->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-12 m-0 pl-4 pt-2">

                        @php
                          $eventName = substr($event->name, 0, strpos($event->name, ":"));
                        @endphp

                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$event->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($event->name)}}
                        </h6>
                        <!-- <p>{{\Illuminate\Support\Str::limit($event->description,60)}}</p> -->
                      </div>
                    </div>
                  </div>
                @endforeach
                
              @else
                <h6 class="text-white"> None Monthly event exist </h6>
              @endif

                {{-- @else --}}
                {{-- @endif --}}
            </div>

          </div>

        </div>

      </div>

    {{-- </div> --}}

  {{-- </div> --}}

  <div class="row font-color m-0 px-2 mb-3 ">
    <div class="col-5"></div>
    <div class="col-7 text-right">
      <h5 class="font-weight-bold calendar-foot"> LEEP Calendar </h5>
    </div>
  </div>

</div>
