{{-- Extends layout --}}
@section('content')
@extends('layout.layoutLeep')

    {{-- @dd($eventCategory->count()); --}}
    @include('leepFront.parts.category_slider')
 
    <div class="eventsDiv m-4">

        <div class="row">

            <div class="col-md-3 col-lg-2"> 
                @include('layout.leftSidebar')
            </div>

            <div class="col-md-8">
                <div class="events mx-3">
                    <div class="search-title-box">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <h1 class="mb-lg-3" style="font-family: 'impact';"> Events in {{ $category->name }}</h1>
                                <div class="pl-lg-5 ml-lg-4 pl-md-5 ml-md-4">
                                    <p class="">For the current year, this category includes: <b> {{ $eventCount }} </b> events.
                                    </p>
                                    <h4 class="mb-4 font-color font-weight-bold">
                                        The Africa category highlights events that take place in the nations of Africa, or have a tie to Africa.
                                    </h4>
                                    <p class="mb-4">Africa is defined as:</p>
                                    <p class="">
                                        <b>Africa Northern Hemisphere:</b> Algeria, Benin, Burkina Faso, Cabo Verde, Canary Islands, Cameroon, Central African Republic, Chad, Cote d'Ivoire, Djibouti, Egypt, Equatorial Guinea, Eritrea, Ethiopia, Gabon, Ghana, Guinea, Guinea-Bissau, Liberia, Libya, Mali, Mauritania, Morocco, Niger, Nigeria, Republic of Congo, Senegal, Sierra Leon, Somalia, South Sudan, Sudan, The Gambia, Togo, Tunisia, Western Sahara.
                                    </p>
                                    <p class="mb-4">
                                        <b>Africa Southern Hemisphere:</b> Angola, Botswana, Burundi, Comoros, Democratic Republic of Congo, Eswatini, Gabon, Kenya, Lesotho, Madagascar, Malawi, Mauritius, Mayotte, Mozambique, Namibia, Reunion, Rwanda, Sao Tome and Principe, Seychelles, South Africa, Tanzania, Uganda, Zambia, Zimbabwe.
                                    </p>
                                    <p class="mb-4 text-center">
                                        A partial list of events will be displayed in the search results for<br> non-members. To view the full results, login to your LEEP<br> Membership account and search this category again, (requires<br> paid subscription).
                                    </p>
                                </div>
                            </div>

                            <div class="container mt-5">
                                <div class="row pl-lg-5 ml-lg-5 pl-md-0 ml-md-0">
                                    <div class="col-4">
                                        <a href="{{route('advance.search')}}" class="custom_btn btn rounded-0 font-weight-bold px-3 px-lg-5 px-md-5 px-sm-5 py-3 text-white bg_maroon" type="submit">Search</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{URL::asset('login')}}" class="custom_btn btn btn-outline-secondary rounded-0 text-white font-weight-bold px-3 px-lg-5 px-md-5 px-sm-5 py-3 bg_light"  type="submit">Login</a>
                                    </div>
                                    <div class="col-4">
                                        <a href="{{URL::asset('register')}}" class="custom_btn btn rounded-0 font-weight-bold px-3 px-lg-5 px-md-5 px-sm-5 py-3 text-white bg_green" type="submit">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style type="text/css">
    p{
        color: #000000 !important;
    }
</style>