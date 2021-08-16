<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

}
