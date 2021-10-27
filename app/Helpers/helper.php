<?php

use App\Models\User;
use App\Models\EventCategory;
use App\Models\EventAttachment;



function getMonths(){
    $months = array(
        '01' => 'JAN',
        '02' => 'FEB',
        '03' => 'MAR',
        '04' => 'APR',
        '05' => 'MAY',
        '06' => 'JUN',
        '07' => 'JUL',
        '08' => 'AUG',
        '09' => 'SEP',
        '10' => 'OCT',
        '11' => 'NOV',
        '12' => 'DEC',
    );
    return $months;
}


function getMonthName($month){
    $months = getMonths();
    return (isset($months[$month]))?($months[$month]):$month;
} 


/* Start: Zeshan Code */
    // Get full month names
    function getMonthsFullName(){
        $months = array(
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        );
        return $months;
    }


    function getMonthFullName($month){
        $months = getMonthsFullName();
        return (isset($months[$month]))?($months[$month]):$month;
    } 
/* End: Zeshan Code */

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



/* Start: Zeeshan code */
function getEventTypesList()
{
    return ['Daily', 'Weekly', 'Monthly', 'Annual', 'Decade'];
}

function getStaticChangesList()
{
    return ['Same', 'Changes'];
}

function storeFiles($path = null , $table = null, $where_clause =null, $column_name = null, $file = null)
{
    // Initialization
        $extension = $file->getClientOriginalExtension();
    // End Initialization

    // getting old file
    $old_file_name = \DB::table($table)->where($where_clause)->orderBy('id', 'desc')->first($column_name)->$column_name;

    // adding new file
    $name = time().'.'.$file->getClientOriginalExtension();

  
    $destinationPath = public_path($path);
    

    $file->move($destinationPath, $name);
    $status = \DB::table($table)->where($where_clause)->update([$column_name => $name]);

    if ( $status == 1 ) {
        // removing old file
        if ( $old_file_name ) {
            unlink( $destinationPath .'/'. $old_file_name );
        }
    }

    return $status;
}

function getEventImage( $image )
{
    return url('/assets/events/images/'.$image);
}
/* End: Zeeshan code */


function insertIntoCategories($event_id, $dataCategories){
    $eventCat =  new EventCategory;

    $eventCat->event_id    = $event_id;

    if ($dataCategories['cat_1'] != ' ' && !empty($dataCategories['cat_1']) ) {
        $eventCat->category_1  = $dataCategories['cat_1'];
    } 
    if ($dataCategories['cat_2'] != ' ' && !empty($dataCategories['cat_2']) ) {
        $eventCat->category_2  = $dataCategories['cat_2'];
    } 
    if ($dataCategories['cat_3'] != ' ' && !empty($dataCategories['cat_3']) ) {
        $eventCat->category_3  = $dataCategories['cat_3'];
    } 

    if ($dataCategories['cat_4'] != ' ' && !empty($dataCategories['cat_4']) ) {
        $eventCat->category_4  = $dataCategories['cat_4'];    
    }

    if ($dataCategories['cat_5'] != ' ' && !empty($dataCategories['cat_5']) ) {
        $eventCat->category_5  = $dataCategories['cat_5'];
    } 
    if ($dataCategories['cat_6'] != ' ' && !empty($dataCategories['cat_6']) ) {
        $eventCat->category_6  = $dataCategories['cat_6'];
    } 

    $eventCat->save();

}


function insertIntoAttachments($event_id,$data){
    $eventAttachment = new EventAttachment;
    $eventAttachment->event_id = $event_id;
    $eventAttachment->video1 = $data['video1'] ;
    $eventAttachment->video2 = $data['video2'] ;
    $eventAttachment->video3 = $data['video3'] ;
    $eventAttachment->download1 = $data['download1'] ;
    $eventAttachment->download2 = $data['download2'] ;
    $eventAttachment->download3 = $data['download3'] ;
    $eventAttachment->download_title1 = $data['download_title1'] ;
    $eventAttachment->download_title2 = $data['download_title2'] ;
    $eventAttachment->download_title3 = $data['download_title3'] ;
    $eventAttachment->extra_image1 = $data['extra_image1'] ;
    $eventAttachment->extra_image2 = $data['extra_image2'] ;
    $eventAttachment->extra_image3 = $data['extra_image3'] ;
    $eventAttachment->image_tile1 = $data['image_tile1'] ;
    $eventAttachment->image_tile2 = $data['image_tile2'] ;
    $eventAttachment->image_tile3 = $data['image_tile3'] ;
    $eventAttachment->socail_link1 = $data['socail_link1'] ;
    $eventAttachment->socail_link2 = $data['socail_link2'] ;
    $eventAttachment->socail_link3 = $data['socail_link3'] ;
    $eventAttachment->save();
}