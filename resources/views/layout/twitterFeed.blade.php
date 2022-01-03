
            {{-- <div class="today-events"> --}}

              <h6 class="borderBottom font-weight-bold mb-4">Twitter Feed</h6>

            {{-- </div> --}}

            <div class="media-object-wrappper">

              @foreach($tweets as $t)

              <div class="media-objects">

                @php
                  $urls = $t['entities']['urls'];


                  // dump(implode(" ", $urls));

                @endphp
                {{-- {{ $t['entities']['urls'] }} --}}
                {{-- @dump($t['entities']['urls']) --}}
                <div class="row">

                  <div class="col-md-8">



                    <div class="media">

                      <div class="media-left">

                        <img src="{{$t['user']['profile_image_url']}}" class="media-object"

                          style="width:60px;border-radius: 40%">

                      </div>

                      <div class="media-body">

                        <h6>{{$t['user']['name']}}</h6>

                        <span>@ {{$t['user']['screen_name']}}</span>

                      </div>

                    </div>

                  </div>

                  <div class="col-md-4">

                  <a href="https://twitter.com/" target="_blank"> <h4 class="float-right"><i class="fa fa-twitter text-secondary"></i> </h4> </a>

                  </div>

                </div>

                <div class="media-detail">

                  <p>

                    {{ preg_replace("@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@",' ',$t['text'])}}

                  </p>



                </div>

                  
                <a href="{{ (!empty($urls)? $urls[0]['url']:'') }}"> {{ (!empty($urls)? $urls[0]['url']:'') }} </a>

                <div class="date">

                  <p>{{date('h:i A',strtotime($t['created_at']))}} | {{date('d M Y',strtotime($t['created_at']))}}</p>

                </div>

              </div>

              @endforeach

            </div>

            {{-- @if (Auth::check()) --}}

            @if (isset($add_3))
              {{-- expr --}}
              @if (Auth::check())
                @if (hasMemberShip())
                  {{-- @dump('hi how are you') --}}
                  @else
                    <div class="advertising-box">
                      <h6 class="borderBottom font-weight-bold mb-4">Advertising Space</h6>
                      <div class="side-bar-3"></div>
                      {{-- <div class="advertising-pic">
                        <img src="{{ asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg') }}" alt="">
                      </div> --}}
                    </div>
                @endif
                @else
                
                <div class="advertising-box">
                  <h6 class="borderBottom font-weight-bold mb-4">Advertising Space</h6>
                  <div class="side-bar-3"></div>

                  {{-- <div class="advertising-pic">
                    <img src="{{ asset('leep_calender/images/Developer Assets/Homepage (After Login or Sign up)/Rectangle 347.svg') }}" alt="">
                  </div> --}}

                </div>

              @endif
            @endif
            
            
            {{-- @else --}}
              

            {{-- @endif --}}
            


