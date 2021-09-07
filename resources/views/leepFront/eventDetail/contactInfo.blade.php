<div class="champ-info">
    <div class="champ-box">
        <span class="font-weight-bold"> Champion/Recommended Resource: </span>
        <span>Multiple Sponsors. See PENGON for information</span>

        <div class="row mt-4">
            <div class="col-md-6">
                <span class="font-weight-bold"> Address 1 / Referral Name:</span>  
                {{$event->champ_name}}
            </div>
            <div class="col-md-6">
                <span class="font-weight-bold"> Address 2:</span>
                {{$event->champ_address}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <span class="font-weight-bold"> City:</span>
                {{$event->city}}
            </div>
            <div class="col-md-6">
                <span class="font-weight-bold"> State / Province:</span>
                {{$event->state}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <span class="font-weight-bold"> Country:</span>
                {{$event->country2}}
            </div>
            <div class="col-md-6">
                <span class="font-weight-bold"> Zip Code:</span>
                {{$event->zip}}
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <span class="font-weight-bold"> Contact Person:</span>
                {{$event->contact_person}}
            </div>
            <div class="col-md-6">
                <span class="font-weight-bold"> E-mail or Social Media Handle:</span>
                {{$event->email_form}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <span class="font-weight-bold"> Phone Number:</span>
                {{$event->ph_num}}
            </div>
            <div class="col-md-6">
                <span class="font-weight-bold"> PContact URL:</span>
                {{$event->contact_link}}
            </div>
        </div>

    </div>
</div>