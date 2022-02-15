<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;

class EventCategory extends Model
{
    use HasFactory;


    public function event(){
        return $this->belongsTo(events::class,'event_id','id');
    }

    public function category1(){
        return $this->belongsTo(category::class ,'category_1', 'cat_id');

    }

    public function category2(){
        return $this->belongsTo(category::class,'category_2', 'cat_id');
    }

    public function category3(){
        return $this->belongsTo(category::class,'category_3', 'cat_id');
    }

    public function category4(){
        return $this->belongsTo(category::class,'category_4', 'cat_id');
    }

    public function category5(){
        return $this->belongsTo(category::class,'category_5', 'cat_id');
    }

    public function category6(){
        return $this->belongsTo(category::class,'category_6', 'cat_id');
    }

    public function storeEventCategories($event_id, $data)
    {
        $this->event_id    = $event_id;
        $this->category_1  = $data['category_1'];
        $this->category_2  = $data['category_2'];
        $this->category_3  = $data['category_3'];
        $this->category_4  = $data['category_4'];
        $this->category_5  = $data['category_5'];
        $this->category_6  = $data['category_6'];
        $this->save();
        return with($this);

    }

    public function updateEventCategories($event_id, $data)
    {
        $this->event_id    = $event_id;
        $this->category_1  = $data['category_1'];
        $this->category_2  = $data['category_2'];
        $this->category_3  = $data['category_3'];
        $this->category_4  = $data['category_4'];
        $this->category_5  = $data['category_5'];
        $this->category_6  = $data['category_6'];
        $this->update();
        return with($this);

    }
}
