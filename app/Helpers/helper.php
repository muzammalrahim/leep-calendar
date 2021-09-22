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

