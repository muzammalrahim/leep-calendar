<?php

use App\Models\User;

function getMonths(){
    $months = array(
        '01' => 'Jan',
        '02' => 'Feb',
        '03' => 'Mar',
        '04' => 'Apr',
        '05' => 'May',
        '06' => 'Jun',
        '07' => 'Jul',
        '08' => 'Aug',
        '09' => 'Sep',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Dec',
    );
    return $months;
}

function getMonthName($month){
    $months = getMonths();
    return (isset($months[$month]))?($months[$month]):$month;
} 

function isEventChamp(){
    $user = Auth::user();
    if ($user->isPaidSubscriber->slug == 'event_champ') {
        return true;
    }
    else{
        return false;
    }
}

function hasMemberShip(){
    $user = Auth::user();
    if ($user->membership->type != 'silver') {
        return true;
    }
    else{
        return false;
    }
}


