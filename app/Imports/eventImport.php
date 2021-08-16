<?php

namespace App\Imports;

use App\Models\events;
use Maatwebsite\Excel\Concerns\ToModel;

class eventImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row[14]);
       if($row[0]!='')
        {
            $start_date=strtotime($row[2].'/'.$row[3].'/'.$row[4]);
            $start_date=date('Y-m-d',$start_date);

            $end_date=strtotime($row[5].'/'.$row[6].'/'.$row[7]);
            $end_date=date('Y-m-d',$end_date);
            if($row[0]!='Event Name' && $row[1]!='Country'  && $row[2]!='Month Start'&& $row[3]!='Month Start'){
            // dd($start_date);
                return new events([
                    'name'=>$row[0],
                    'country1'=>$row[1],
                    'm_start'=>$row[2],
                    'd_start'=>$row[3],
                    'y_start'=>$row[4],
                    'start_date'=>$start_date,
                    'm_end'=>$row[5],
                    'd_end'=>$row[6],
                    'y_end'=>$row[7],
                    'end_date'=>$end_date,
                    'cat_1'=>$row[8],
                    'cat_2'=>$row[9],
                    'cat_3'=>$row[10],
                    'cat_4'=>$row[11],
                    'cat_5'=>$row[12],
                    'cat_6'=>$row[13],
                    'type'=>$row[14],
                    'static_change'=>$row[15],
                    'notesNP'=>$row[16],
                    'url'=>$row[17],
                    'feature_picture'=>$row[18],
                    'picture_name'=>$row[19],
                    'alt_text'=>$row[20],
                    'estimated'=>$row[21],
                    'description'=>$row[22],
                    'event_champion'=>$row[23],
                    'address1'=>$row[24],
                    'address2'=>$row[25],
                    'city'=>$row[26],
                    'state'=>$row[27],
                    'country2'=>$row[28],
                    'zip'=>$row[29],
                    'ph_num'=>$row[30],
                    'email_form'=>$row[31],
                    'contact_person'=>$row[32],
                    'contact_link'=>$row[33],
                    'video1'=>$row[34],
                    'video2'=>$row[35],
                    'video3'=>$row[36],
                    'download1'=>$row[37],
                    'download2'=>$row[38],
                    'download3'=>$row[39],
                    'download_title1'=>$row[40],
                    'download_title2'=>$row[41],
                    'download_title3'=>$row[42],
                    'extra_image1'=>$row[43],
                    'extra_image2'=>$row[44],
                    'extra_image3'=>$row[45],
                    'image_tile1'=>$row[46],
                    'image_tile2'=>$row[47],
                    'image_tile3'=>$row[48],
                    'socail_link1'=>$row[49],
                    'socail_link2'=>$row[50],
                    'socail_link3'=>$row[51],
                    'physical_address'=>$row[52],
                    // 'physical_addr'=>$row[53],
                    'purchas_reserve'=>$row[53],
                    'location_based'=>$row[54],
                    'manager'=>$row[55],
                ]);//dd($v);
            }
        }
    }
}
