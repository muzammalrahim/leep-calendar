

<div class="days bg-yellow">

  {{-- <div class="row m-0"> --}}

    {{-- <div class="col-xs-12" style="width: -webkit-fill-available;"> --}}
      {{-- <div class=""> --}}
        <nav class="font-color bg-site event_names">

          <div class="nav nav-tabs nav-fill p-0 m-0 row" id="nav-tab" role="tablist">

            <a class="nav-item nav-link active col-xs-2 col-4 py-3 font18 rounded-0" id="nav-home-tab" data-toggle="tab" href="#nav-home"

              role="tab" aria-controls="nav-home" aria-selected="true"> {{ getMonthFullName($m) }} {{ $d  }}</a>

            <a class="nav-item nav-link col-xs-2 col-2 py-3 font15 rounded-0" id="nav-day-tab" data-toggle="tab" href="#nav-day" 

            role="tab" aria-controls="nav-day" aria-selected="false">Day</a>

            <a class="nav-item nav-link col-xs-2 col-3 py-3 font15 rounded-0" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" 

            role="tab" aria-controls="nav-profile" aria-selected="false">Week</a>


            <a class="nav-item nav-link col-xs-2 col-3 py-3 font15 rounded-0" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"

              role="tab" aria-controls="nav-contact" aria-selected="false">Month</a>

          </div>

        </nav>

      {{-- </div> --}}

      <div class="event_detail p-2 row m-0">

        <div class="tab-content px-3 px-sm-0" id="nav-tabContent">

          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            
            <div class="calender-scroll">
              
              {{-- @dump('$d_events'); --}}
              @foreach($d_events as $d_e)
                @isset($d_e->id)
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row event_detail ">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$d_e->d_start}}</span>-->
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$d_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div style=" padding-left:30px;" class="col-md-12 date-data m-0">
                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$d_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($d_e->name,17)}}
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
            
            <div class="calender-scroll">
              @isset($m_events[0]->id)
                @foreach($m_events as $m_e)
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$m_e->d_start}}</span>--> 
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$m_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-11 date-data" style='padding-left: 30px;'>
                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$m_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($m_e->name,17)}}
                        </h6>
                        <p>{{\Illuminate\Support\Str::limit($m_e->description,60)}}</p> 
                      </div>
                    </div>
                  </div>
                @endforeach
                @else 
                @endif
            </div>
          
          </div>

          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            
            <div class="calender-scroll">
              @isset($m_events[0]->id)
                @foreach($m_events as $m_e)
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$m_e->d_start}}</span>-->
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$m_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-11 date-data" style='padding-left: 30px;'>
                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$m_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($m_e->name,17)}}
                        </h6>
                    <!--     <p>{{\Illuminate\Support\Str::limit($m_e->description,60)}}</p> -->
                      </div>
                    </div>
                  </div>
                @endforeach
                @else 
                @endif
            </div>

          </div>

          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            
            <div class="calender-scroll">
              @isset($week_events[0]->id)
                @foreach($week_events as $w_e)
                  <div class="calender-body m-0 bg-white rounded-0 border-dark border-bottom">
                    <div class="row">
                      <!--<div class="col-md-2 date-box">-->
                      <!--  <span>{{$w_e->d_start}}</span>-->
                      <!--  <b> {{date("M", strtotime(date("Y")."-".$w_e->m_start."-01"))}}</b>-->
                      <!--</div>-->
                      <div class="col-md-11 date-data" style='padding-left: 30px;'>
                        <h6  onclick="window.location.replace('{{URL::asset('event/'.$w_e->id)}}','self'); " style=" cursor:pointer;">
                          {{\Illuminate\Support\Str::limit($w_e->name,17)}}
                        </h6>
                        <!-- <p>{{\Illuminate\Support\Str::limit($w_e->description,60)}}</p> -->
                      </div>
                    </div>
                  </div>
                @endforeach
                @else
                @endif
            </div>

          </div>

        </div>

      </div>

    {{-- </div> --}}

  {{-- </div> --}}

  <div class="row font-color m-0 p-2 mb-3 ">
    <div class="col-5"></div>
    <div class="col-7">
      <h5 class="font-weight-bold"> Leep Calendar </h5>
    </div>
  </div>

</div>
