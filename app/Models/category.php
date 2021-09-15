<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    

    /* Start: Zeeshan code */
    public function getCategoriesList()
    {
        return category::orderBy('name','ASC')->get();
    }
    /* End: Zeeshan code */
}
