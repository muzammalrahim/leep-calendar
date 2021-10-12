<?php

namespace App\Imports;

use App\Models\events;

use Maatwebsite\Excel\Concerns\ToModel;

class eventsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
            if ( isset($row[5]) && isset($row[6]) && isset($row[7]) ) {
                $end_date=strtotime($row[5].'/'.$row[6].'/'.$row[7]);
                $end_date=date('Y-m-d',$end_date);
            }
            if ( isset($row[2]) && isset($row[3]) && isset($row[4]) ) {
                $start_date=strtotime($row[2].'/'.$row[3].'/'.$row[4]);
                $start_date=date('Y-m-d',$start_date);
            }
            
                

            $event =  new events;
            $event->name = ( isset($row[0]) )? $row[0]:'';
            $event->states = ( isset($row[1]) )? $row[1]:'';
            $event->start_month = ( isset($row[2]) )? $row[2]:'';
            $event->start_day = ( isset($row[3]) )? $row[3]:'';
            $event->start_year = ( isset($row[4]) )? $row[4]:'';
            $event->end_month = ( isset($row[5]) )? $row[5]:'';
            $event->end_day = ( isset($row[6]) )? $row[6]:'';
            $event->end_year = ( isset($row[7]) )? $row[7]:'';
            $event->start_date = $start_date;
            $event->end_date = $end_date;
            $event->type = ( isset($row[14]) )? $row[14]:'';
            $event->static_change = ( isset($row[15]) )? $row[15]:'';
            $event->notes_not_public = ( isset($row[16]) )? $row[16]:'';
            $event->url = ( isset($row[17]) )? $row[17]:'';
            $event->feature_picture = ( isset($row[18]) )? $row[18]:'';
            $event->picture_name = ( isset($row[19]) )? $row[19]:'';
            $event->alt_text = ( isset($row[20]) )? $row[20]:'';
            $event->estimated = ( isset($row[21]) )? $row[21]:'';
            $event->description = ( isset($row[22]) )? $row[22]:'';
            $event->event_champion = ( isset($row[23]) )? $row[23]:'';
            $event->champ_address1 = ( isset($row[24]) )? $row[24]:'';
            $event->champ_address2 = ( isset($row[25]) )? $row[25]:'';
            $event->champ_city = ( isset($row[26]) )? $row[26]:'';
            $event->champ_state = ( isset($row[27]) )? $row[27]:'';
            $event->champ_country = ( isset($row[28]) )? $row[28]:'';
            $event->zip = ( isset($row[29]) )? $row[29]:'';
            $event->ph_num = ( isset($row[30]) )? $row[30]:'';
            $event->email_form = ( isset($row[31]) )? $row[31]:'';
            $event->contact_person = ( isset($row[32]) )? $row[32]:'';
            $event->contact_link = ( isset($row[33]) )? $row[33]:'';

            $event->save();

            $dataCategories['cat_1'] = ( isset($row[8]) )? $row[8]:'';
            $dataCategories['cat_2'] = ( isset($row[9]) )? $row[9]:'';
            $dataCategories['cat_3'] = ( isset($row[10]) )? $row[10]:'';
            $dataCategories['cat_4'] = ( isset($row[11]) )? $row[11]:'';
            $dataCategories['cat_5'] = ( isset($row[12]) )? $row[12]:'';
            $dataCategories['cat_6'] = ( isset($row[13]) )? $row[13]:'';

            $insertIntoCategories = insertIntoCategories($event->id, $dataCategories);


            $data['video1'] = ( isset($row[34]) )? $row[34]:'';
            $data['video2'] = ( isset($row[35]) )? $row[35]:'';
            $data['video3'] = ( isset($row[36]) )? $row[36]:'';
            $data['download1'] = ( isset($row[37]) )? $row[37]:'';
            $data['download2'] = ( isset($row[38]) )? $row[38]:'';
            $data['download3'] = ( isset($row[39]) )? $row[39]:'';
            $data['download_title1'] = ( isset($row[40]) )? $row[40]:'';
            $data['download_title2'] = ( isset($row[41]) )? $row[41]:'';
            $data['download_title3'] = ( isset($row[42]) )? $row[42]:'';
            $data['extra_image1'] = ( isset($row[43]) )? $row[43]:'';
            $data['extra_image2'] = ( isset($row[44]) )? $row[44]:'';
            $data['extra_image3'] = ( isset($row[45]) )? $row[45]:'';
            $data['image_tile1'] = ( isset($row[46]) )? $row[46]:'';
            $data['image_tile2'] = ( isset($row[47]) )? $row[47]:'';
            $data['image_tile3'] = ( isset($row[48]) )? $row[48]:'';
            $data['socail_link1'] = ( isset($row[49]) )? $row[49]:'';
            $data['socail_link2'] = ( isset($row[50]) )? $row[50]:'';
            $data['socail_link3'] = ( isset($row[51]) )? $row[51]:'';
            
            $insertIntoAttachments = insertIntoAttachments($event->id,$data);



            // dd($event);
    }

    
}
