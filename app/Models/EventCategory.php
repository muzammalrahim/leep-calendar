<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    use HasFactory;


    public function event(){
        // dd($user);
        return $this->belongsTo(events::class,'event_id','id');
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
