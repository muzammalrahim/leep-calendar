<?php

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

/* Start: Zeeshan code */
function getEventTypesList()
{
    return ['Daily', 'Weekly', 'Monthly', 'Annual', 'Decade'];
}

function getStaticChangesList()
{
    return ['Same', 'Changes'];
}
/* End: Zeeshan code */