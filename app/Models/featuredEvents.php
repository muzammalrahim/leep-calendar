<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class featuredEvents extends Model
{
    use HasFactory;

    public function events(){
        return $this->hasOne(events::class,'id','events_id');    	
    }

}
