<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;


    // Validation Rules
    public function validations($rules = []) {
        return $rules += [
            'title'  => 'required|string|max:300',
            'slug'  => 'required|unique:pages,slug',
            'heading'  => 'required|string|max:300',
            'content'  => 'required|string|max:10000',
            'meta_title'  => 'nullable|string|max:300',
            'meta_description'  => 'nullable|string|max:1000',
            'meta_keywords'  => 'nullable|string|max:300',
            'status'  => 'required|in:Publish,Unpublish',
        ];
    }

    // Pass status when want list according to status type
    public function getPagesList( $status = null ) {
        return Page::
        when($status, function($query) use ($status) {
            $query->where('status', '=', $status);
        })
        ->orderBy('id', 'DESC')
        ->get();
    }


    // Get page detail
    public function getPageDetail( $id = null, $slug = null ) {
        return Page::
        when($id, function($query) use ($id) {
            $query->where('id', '=', $id);
        })
        ->when($slug, function($query) use ($slug) {
            $query->where('slug', '=', $slug);
        })->first();
    }


    // Store Page
    public function storePage( $data )
    {
        $page = new Page;

        $page->title = $data['title'];
        $page->slug = $data['slug'];
        $page->heading = $data['heading'];
        $page->content = $data['content'];
        $page->meta_title = $data['meta_title'];
        $page->meta_description = $data['meta_description'];
        $page->meta_keywords = $data['meta_keywords'];
        $page->status = $data['status'];

        $page->save();

        return with($page);
    }

    // Update Page
    public function updatePage( $data )
    {
        $page = new Page;

        $page = $this->getPageDetail( $data['page_id'] );

        $page->title = $data['title'];
        $page->slug = $data['slug'];
        $page->heading = $data['heading'];
        $page->content = $data['content'];
        $page->meta_title = $data['meta_title'];
        $page->meta_description = $data['meta_description'];
        $page->meta_keywords = $data['meta_keywords'];
        $page->status = $data['status'];

        $page->update();

        return with($page);
    }
}
