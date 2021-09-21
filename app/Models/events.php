<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EventCategory;
use App\Models\EventAttachment;

// use Illuminate\Database\Eloquent\Model featedEvents;

class events extends Model
{
    use HasFactory;
    protected $fillable = [
		'name',
		'country1',
		'm_start',
		'd_start',
		'y_start',
		'start_date',
		'm_end',
		'd_end',
		'y_end',
		'end_date',
		'cat_1',
		'cat_2',
		'cat_3',
		'cat_4',
		'cat_5',
		'cat_6',
		'type',
		'static_change',
		'notesNP',
		'url',
		'feature_picture',
		'picture_name',
		'alt_text',
		'estimated',
		'description',
		'event_champion',
		'address1',
		'address2',
		'city',
		'state',
		'country2',
		'zip',
		'ph_num',
		'email_form',
		'contact_person',
		'contact_link',
		'video1',
		'video2',
		'video3',
		'download1',
		'download2',
		'download3',
		'download_title1',
		'download_title2',
		'download_title3',
		'extra_image1',
		'extra_image2',
		'extra_image3',
		'image_tile1',
		'image_tile2',
		'image_tile3',
		'socail_link1',
		'socail_link2',
		'socail_link3',
		'physical_address',
		'physical_addr',
		'purchas_reserve',
		'location_based',
		'manager',
    ];

    public function feature(){
        return $this->hasOne(featuredEvents::class,'events_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');    	
    }
    // public function participants(){
    //     return $this->hasMany(participants::class,'event_id','id');
    // }
    // public function category(){
    //     return $this->hasOne(category::class,'cat_id',['cat_1','cat_2','cat_3','cat_4','cat_5','cat_6']);
    // }
    public function cat1(){
            return $this->hasOne(category::class,'cat_id','cat_1');}
    public function cat2(){
            return $this->hasOne(category::class,'cat_id','cat_2');}
    public function cat3(){
            return $this->hasOne(category::class,'cat_id','cat_3');}
    public function cat4(){
            return $this->hasOne(category::class,'cat_id','cat_4');}
    public function cat5(){
            return $this->hasOne(category::class,'cat_id','cat_5');}
    public function cat6(){
            return $this->hasOne(category::class,'cat_id','cat_6');}


    /* Start: Zeeshan code */

    // Validation Rules
    public function validations($rules = []) {
        return $rules += [
            'name'  => 'required|unique:events,name|max:500',
            'states'  => 'required',
            'start_month'  => 'required',
            'start_day'  => 'required',
            'start_year'  => 'required',
            'end_month'  => 'required',
            'end_day'  => 'required',
            'end_year'  => 'required',
            'start_date'  => 'required|date',
            'end_date'  => 'required|date|after_or_equal:start_date',
            'category_1' => 'required_without_all:category_2,category_3, category_4, category_5, category_6|nullable|string|max:50',
            'category_2' => 'required_without_all:category_1,category_3, category_4, category_5, category_6|nullable|string|max:50',
            'category_3' => 'required_without_all:category_1,category_2, category_4, category_5, category_6|nullable|string|max:50',
            'category_4' => 'required_without_all:category_1,category_2, category_3, category_5, category_6|nullable|string|max:50',
            'category_6' => 'required_without_all:category_1,category_2, category_3, category_5, category_4|nullable|string|max:50',
            'description'  => 'required|max:2000',
            'country_code'  => 'required',
            'status'  => 'required|in:Approved,Pending',
        ];
    }

    public function storeEvent( $data ) 
    {
        
        $this->name        = $data['name'];
        if ( isset($data['states']) && $data['states'] ) {
            $states = implode (", ", array_filter($data['states']));
            $this->states = $states;
        }
        $this->start_month = $data['start_month'];
        $this->start_day   = $data['start_day'];
        $this->start_year  = $data['start_year'];
        $this->start_date  = $data['start_date'];
        $this->end_month   = $data['end_month'];
        $this->end_day     = $data['end_day'];
        $this->end_year    = $data['end_year'];
        $this->end_date    = $data['end_date'];
        
        $this->type = $data['type'];
        $this->static_change = $data['static_change'];
        $this->notes_not_public = $data['notes_not_public'];
        $this->url = $data['url'];
        $this->picture_name = $data['picture_name'];
        $this->alt_text = $data['alt_text'];
        $this->estimated = $data['estimated'];
        $this->description = $data['description'];
        $this->event_champion = $data['event_champion'];
        $this->country_code = $data['country_code'];
        $this->state = $data['state'];
        $this->city = $data['city'];
        $this->zip = $data['zip'];
        $this->event_address1 = $data['event_address1'];
        $this->event_address2 = $data['event_address2'];
        $this->ph_num = $data['ph_num'];
        $this->email_form = $data['email_form'];
        $this->contact_person = $data['contact_person'];
        $this->contact_link = $data['contact_link'];

        
        $this->physical_address = $data['physical_address'];
        $this->purchase_reserve = $data['purchase_reserve'];
        $this->location_based = $data['location_based'];
        $this->manager = $data['manager'];
        $this->user_id = auth()->user()->id;
        $this->status = $data['status'];

        $this->save();

        // store event categories
        $event_categories = new EventCategory;
        $event_attachments = new EventAttachment;

        $event_categories->storeEventCategories($this->id, $data);
        $event_attachments->storeEventAttachments($this->id, $data);


        return with($this);
    }

    // parsing imported file to db
    public function importToDb()
    {
    	$path = resource_path('pending-files/*.csv');

    	$files = glob($path);

    	foreach ( $files as $file ) {
    		$data = array_map('str_getcsv', file($file));

    		foreach ($data as $row) {

                // index in row shows column number
                if($row[0]!='')
                {
                    if ( isset($row[2]) && isset($row[3]) && isset($row[4]) ) {
                        $start_date=strtotime($row[2].'/'.$row[3].'/'.$row[4]);
                        $start_date=date('Y-m-d',$start_date);
                    }
                    else {
                        $start_date=NULL;
                    }
                   
                    if ( isset($row[5]) && isset($row[6]) && isset($row[7]) ) {
                        $end_date=strtotime($row[5].'/'.$row[6].'/'.$row[7]);
                        $end_date=date('Y-m-d',$end_date);
                    }
                    else {
                        $end_date=NULL;
                    }



                    if( isset($row[0]) && $row[0]!='Event Name' && isset($row[1]) && $row[1]!='Country'  && isset($row[2]) && $row[2]!='Month Start' && isset($row[3]) && $row[3]!='Month Start'){

                        try {
                            if( isset($row[0]) && $row[0]=='' && isset($row[1]) && $row[1]==''  && isset($row[2]) && $row[2]=='' && isset($row[3]) && $row[3]=='' && isset($row[4]) && $row[4]=='' && isset($row[5]) && $row[5]==''  && isset($row[6]) && $row[6]=='' && isset($row[7]) && $row[7]=='' && isset($row[8]) && $row[8]=='' && isset($row[9]) && $row[9]==''  && isset($row[10]) && $row[10]=='' && isset($row[11]) && $row[11]=='' && isset($row[12]) && $row[12]=='' && isset($row[13]) && $row[13]==''  && isset($row[14]) && $row[14]=='' && isset($row[15]) && $row[15]=='' && isset($row[16]) && $row[16]=='' && isset($row[17]) && $row[17]==''  && isset($row[18]) && $row[18]=='' && isset($row[19]) && $row[19]=='' && isset($row[20]) && $row[20]=='' && isset($row[21]) && $row[21]==''  && isset($row[22]) && $row[22]=='' && isset($row[23]) && $row[23]=='' && isset($row[24]) && $row[24]=='' && isset($row[25]) && $row[25]==''  && isset($row[26]) && $row[26]=='' && isset($row[27]) && $row[27]=='' && isset($row[28]) && $row[28]=='' && isset($row[29]) && $row[29]==''  && isset($row[30]) && $row[30]=='' && isset($row[31]) && $row[31]=='' && isset($row[32]) && $row[32]=='' && isset($row[33]) && $row[33]==''  && isset($row[34]) && $row[34]=='' && isset($row[35]) && $row[35]=='' && isset($row[36]) && $row[36]=='' && isset($row[37]) && $row[37]==''  && isset($row[38]) && $row[38]=='' && isset($row[38]) && $row[38]=='' && isset($row[39]) && $row[39]=='' && isset($row[40]) && $row[40]==''  && isset($row[41]) && $row[41]=='' && isset($row[42]) && $row[42]=='' && isset($row[43]) && $row[43]=='' && isset($row[44]) && $row[44]==''  && isset($row[45]) && $row[45]=='' && isset($row[46]) && $row[46]=='' && isset($row[47]) && $row[47]==''  && isset($row[48]) && $row[48]=='' && isset($row[49]) && $row[49]=='' && isset($row[50]) && $row[50]=='' && isset($row[51]) && $row[51]=='' && isset($row[52]) && $row[52]==''  && isset($row[53]) && $row[53]=='' && isset($row[54]) && $row[54]=='' && isset($row[55]) && $row[55]=='' && isset($row[56]) && $row[56]=='' ) {
                                continue;
                            }
                            else {
                                self::updateOrCreate([
				    				'name'=>( isset($row[0]) )? $row[0]:'',
				    			],
				    			[
                                    'country1'=>( isset($row[1]) )? $row[1]:'',
                                    'm_start'=>( isset($row[2]) )? $row[2]:'',
                                    'd_start'=>( isset($row[3]) )? $row[3]:'',
                                    'y_start'=>( isset($row[4]) )? $row[4]:'',
                                    'start_date'=>$start_date,
                                    'm_end'=>( isset($row[5]) )? $row[5]:'',
                                    'd_end'=>( isset($row[6]) )? $row[6]:'',
                                    'y_end'=>( isset($row[7]) )? $row[7]:'',
                                    'end_date'=>$end_date,
                                    'cat_1'=>( isset($row[8]) )? $row[8]:'',
                                    'cat_2'=>( isset($row[9]) )? $row[9]:'',
                                    'cat_3'=>( isset($row[10]) )? $row[10]:'',
                                    'cat_4'=>( isset($row[11]) )? $row[11]:'',
                                    'cat_5'=>( isset($row[12]) )? $row[12]:'',
                                    'cat_6'=>( isset($row[13]) )? $row[13]:'',
                                    'type'=>( isset($row[14]) )? $row[14]:'',
                                    'static_change'=>( isset($row[15]) )? $row[15]:'',
                                    'notesNP'=>( isset($row[16]) )? $row[16]:'',
                                    'url'=>( isset($row[17]) )? $row[17]:'',
                                    'feature_picture'=>( isset($row[18]) )? $row[18]:'',
                                    'picture_name'=>( isset($row[19]) )? $row[19]:'',
                                    'alt_text'=>( isset($row[20]) )? $row[20]:'',
                                    'estimated'=>( isset($row[21]) )? $row[21]:'',
                                    'description'=>( isset($row[22]) )? $row[22]:'',
                                    'event_champion'=>( isset($row[23]) )? $row[23]:'',
                                    'address1'=>( isset($row[24]) )? $row[24]:'',
                                    'address2'=>( isset($row[25]) )? $row[25]:'',
                                    'city'=>( isset($row[26]) )? $row[26]:'',
                                    'state'=>( isset($row[27]) )? $row[27]:'',
                                    'country2'=>( isset($row[28]) )? $row[28]:'',
                                    'zip'=>( isset($row[29]) )? $row[29]:'',
                                    'ph_num'=>( isset($row[30]) )? $row[30]:'',
                                    'email_form'=>( isset($row[31]) )? $row[31]:'',
                                    'contact_person'=>( isset($row[32]) )? $row[32]:'',
                                    'contact_link'=>( isset($row[33]) )? $row[33]:'',
                                    'video1'=>( isset($row[34]) )? $row[34]:'',
                                    'video2'=>( isset($row[35]) )? $row[35]:'',
                                    'video3'=>( isset($row[36]) )? $row[36]:'',
                                    'download1'=>( isset($row[37]) )? $row[37]:'',
                                    'download2'=>( isset($row[38]) )? $row[38]:'',
                                    'download3'=>( isset($row[39]) )? $row[39]:'',
                                    'download_title1'=>( isset($row[40]) )? $row[40]:'',
                                    'download_title2'=>( isset($row[41]) )? $row[41]:'',
                                    'download_title3'=>( isset($row[42]) )? $row[42]:'',
                                    'extra_image1'=>( isset($row[43]) )? $row[43]:'',
                                    'extra_image2'=>( isset($row[44]) )? $row[44]:'',
                                    'extra_image3'=>( isset($row[45]) )? $row[45]:'',
                                    'image_tile1'=>( isset($row[46]) )? $row[46]:'',
                                    'image_tile2'=>( isset($row[47]) )? $row[47]:'',
                                    'image_tile3'=>( isset($row[48]) )? $row[48]:'',
                                    'socail_link1'=>( isset($row[49]) )? $row[49]:'',
                                    'socail_link2'=>( isset($row[50]) )? $row[50]:'',
                                    'socail_link3'=>( isset($row[51]) )? $row[51]:'',
                                    'physical_address'=>( isset($row[52]) )? $row[52]:'',
                                    // 'physical_addr'=>( isset($row[53]) )? $row[53]:'',
                                    'purchase_reserve'=>( isset($row[54]) )? $row[54]:'',
                                    'location_based'=>( isset($row[55]) )? $row[55]:'',
                                    'manager'=>( isset($row[56]) )? $row[56]:'',
                                ]);
                            }
                        }
                        catch(\Exception $e){
                            continue;
                        }
                    }
                }
    		}
    		
    		unlink($file);
    	}
    }
    /* End: Zeeshan code */




    public function EventComments(){
        return $this->hasMany(Comments::class,'event_id','id');
    }

    public function eventCategory(){
        return $this->belongsTo(EventCategory::class,'id', 'event_id');        
    }

    public function eventAttachments(){
        return $this->belongsTo(EventAttachment::class,'id', 'event_id');        
    }

}
