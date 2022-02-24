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

    // Get page detail
    public function getCategoryDetail( $id = null) {
        return Page::
        when($id, function($query) use ($id) {
            $query->where('id', '=', $id);
        });
        // ->when($slug, function($query) use ($slug) {
        //     $query->where('slug', '=', $slug);
        // })->first();
    }



    public function updateCategory($data){
    	$category = $this->find($data['cat_id']);
    	$category->description = $data['description'];
    	$category->save();
    	return true;

    }
}
