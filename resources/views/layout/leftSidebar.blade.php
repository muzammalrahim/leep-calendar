
<div class="px-md-0 mx-lg-4 mx-lg-2">
    

    <div class="becomeProfessional pb-3"> 
      <div class="container1">
          <h5 class="font-weight-bold"> BECOME A MEMBER </h5>
          <a href="{{ asset('login') }}" class="d-block ml-4"> Professionals </a>
          <a href="{{ asset('register') }}" class="d-block ml-4"> Event Champions </a>
      </div>                   
    </div>


    <div class="follow-us">
        <div class="container1">
             <h5 class="borderBottom font-weight-bold"> Follow Us </h5>
        </div>
    </div>

    <div class="icons my-4">
        <div class="container1 pl-4">
            <div class="pl-3">
                <a href="https://www.linkedin.com/company/leep-publishing" target="_blank">
                    <img src="{{ asset('leep_calender/images/Developer Assets/social_icons/linkedin.png') }}"/>
                </a>

                <a href="https://twitter.com/PromoCalendar" target="_blank">
                    <img src="{{ asset('leep_calender/images/Developer Assets/social_icons/twitter.png') }}"/><br>
                </a>
            </div>
           {{--  <a href="https://www.facebook.com/LEEP-Calendar-641349726026657/" target="_blank">
                <img src="{{ asset('leep_calender/images/Developer Assets/social_icons/facebook.png') }}"/>
            </a>

            <a href="https://www.instagram.com/leepcalendar/" target="_blank">
                <img src="{{ asset('leep_calender/images/Developer Assets/social_icons/instagram.png') }}"/>
            </a> --}}
            <div class="pl-3">
                <a href="https://www.youtube.com/channel/UC6w_ytF-mK3p3aJVq96c32A" target="_blank">
                    <img src="{{ asset('leep_calender/images/Developer Assets/social_icons/youtube.png') }}"/>
                </a>

                <a href="Http://www.prplanningcalendar.com" target="_blank">
                    <img src="{{ asset('leep_calender/images/Developer Assets/social_icons/wordpress.png') }}"/>
                </a>
            </div>
        </div>
        
    </div>


    @include('layout.twitterFeed') {{-- layout/twitterFeed --}}

</div>
{{-- <div class="latest-posts">
    <div class="container">
        <div class="latest-posts1 borderBottom">
            <h5 class="leftHeadings"> Latests Twitter Posts </h5>
        </div>
     <div class="row">
         <div class="col-md-10 m-3 border border-dark text-center twitterpost d-flex align-items-center justify-content-center">
              <span class=" text-uppercase">Twitter Post</span>
         </div>
         <div class="col-md-10 m-3 border border-dark text-center twitterpost d-flex align-items-center  justify-content-center">
            <span class=" text-uppercase">Twitter Post</span>
         </div>
         <div class="col-md-10 m-3 border border-dark text-center twitterpost d-flex align-items-center justify-content-center">
              <span class=" text-uppercase">Twitter Post</span>
        </div>
    </div>
       
</div>
<div class="advertisement">
    <div class="container">
        <div class="row">
         <div class="col-md-10 m-3 bg-secondary text-center border border-dark advertisement1 word-break: break-all;">
            <span class="text-uppercase ">Advertisement</span>
        </div>
        <div class="col-md-10 m-3 bg-secondary text-center border border-dark advertisement2 word-break: break-all;">
          <span class="text-uppercase ">Advertisement</span>
        </div>
        <div class="col-md-10 m-3 bg-secondary text-center border border-dark advertisement3 word-break: break-all;">
           <span class="text-uppercase m-auto">Advertisement</span>
        </div>
    </div>
    </div>
</div>

</div> --}}

<style type="text/css">
    .icons img {
        height: 52px;
    }
    .twitterpost{
        height: 130px;
    }
    .advertisement3{
        height: 500px;
    }
    .advertisement2{
        height: 250px;
    }
    .advertisement1{
        height: 700px;
    }
    .becomeProfessional a{color: #60012C !important; text-decoration: underline;}
    .becomeProfessional a:hover{text-decoration: none;}
</style>