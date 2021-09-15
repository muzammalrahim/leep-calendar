<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable  implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    // use HasPermissionsTrait; //Import The Trait
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'type',
        'is_verified',
        'membership_id',
        'role_id',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function membership(){
            return $this->hasOne(membership::class,'id','membership_id');
    }


    public function isPaidSubscriber(){
        // dd($user);
        return $this->hasOne(Roles::class,'id','role_id');
    }

    
    

}
