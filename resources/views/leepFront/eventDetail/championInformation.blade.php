<div class="row">
    <div class="col-md-12">
        <div class="focal-contact1 m-0 bg_lightyellow">
            <div class="row m-0 pt-5 pl-5 pr-5">
                <div class="col-12 m-0">
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> EVENT CHAMPION: </span> <span> {{ $event->event_champion }} </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> Prevent Blindness America </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> ADDRESS 1: </span>
                        </div>
                        <div class="">
                            <span class="ml-3 font18"> {{ $event->champ_address1 }} </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> ADDRESS 2: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->champ_address2 }} </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 pl-5 pr-5">
                <div class="col-sm-12 col-md-12 col-lg-4 col-12">
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> CITY: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->champ_city }} </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> STATE: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->champ_state }} </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> COUNTRY: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->champ_country }} </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> ZIP CODE: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->zip }} </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8 col-12">
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> PHONE: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->ph_num }} </span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> EMAIL: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18  text_marron"> {{ $event->email_form }} </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> CONTACT: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18"> {{ $event->contact_person }} </span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="float-left">
                            <span class="font-weight-bold font20"> CONTACT URL: </span>
                        </div>
                        <div>
                            <span class="ml-3 font18 text_marron"> {{ $event->contact_link }} </span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row m-0">
                <div class="focal-person">
                    <div class="col-md-4 ">
                        <img src="{{URL::asset('leep_calender/images/Developer Assets/Event View Page/Rectangle 256.svg')}}"
                        alt="">
                    </div>
                    <div class="col-md-8 ser-name">
                        <a href="{{ route('champion.detail',['id' => $event->id]) }}" target="_blank" class="eventChampionLink font-weight-bold">{{ $event->event_champion }}</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>