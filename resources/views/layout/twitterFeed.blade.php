
            {{-- <div class="today-events"> --}}

              <h6>Twitter Feed</h6>

            {{-- </div> --}}

            <div class="media-object-wrappper">

              @foreach($tweets as $t)

              <div class="media-objects">

                <div class="row">

                  <div class="col-md-12">



                    <div class="media">

                      <div class="media-left">

                        <img src="{{$t['user']['profile_image_url']}}" class="media-object"

                          style="width:60px;border-radius: 20%">

                      </div>

                      <div class="media-body">

                        <h6>{{$t['user']['name']}}</h6>

                        <span>@ {{$t['user']['screen_name']}}</span>

                      </div>

                    </div>

                  </div>

                  {{-- <div class="col-md-4"> --}}

                    {{-- <a href="#" class="btn btn-outline-primary"><i class="fa fa-twitter">Follow</i> </a> --}}

                  {{-- </div> --}}

                </div>

                <div class="media-detail">

                  <p>

                    {{ preg_replace("@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@",' ',$t['text'])}}

                  </p>



                </div>

                <div class="date">

                  <p>{{date('h:i A',strtotime($t['created_at']))}} | {{date('d M Y',strtotime($t['created_at']))}}</p>

                </div>

              </div>

              @endforeach

            </div>

            {{-- @if (Auth::check()) --}}

              @if (Auth::check())
                @if (hasMemberShip())
                  {{-- @dump('hi how are you') --}}
                  @else
                    <div class="advertising-box">

                      <h6>Advertising Space</h6>

                      <div class="advertising-pic">

                        <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg" alt="">

                      </div>

                    </div>
                @endif
                {{-- @dump('EVent Champ here') --}}
                @else
                
                <div class="advertising-box">

                  <h6>Advertising Space</h6>

                  <div class="advertising-pic">

                    <img src="leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg" alt="">

                  </div>

                </div>

              @endif
            
            {{-- @else --}}
              

            {{-- @endif --}}
            


