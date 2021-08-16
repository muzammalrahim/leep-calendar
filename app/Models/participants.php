<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class participants extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    // protected $fillable = [
    //     'event_id',
    //     'user_id',
    // ];
        public function users(){
        return $this->hasOne(User::class,'id','user_id');        
    }

}
