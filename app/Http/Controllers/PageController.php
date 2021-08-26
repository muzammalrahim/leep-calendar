<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

use Validator;
use Crypt;

class PageController extends Controller
{

    private $page;

    public function __construct()
    {
        $this->page = new Page;
    }

    public function index()
    {
        // Initialization
            $data = [];
        // End Initialization

        $data['pages'] = $this->page->getPagesList();
        
        return view('admin.pages.manage_pages', $data);
    }

    public function add()
    {
        return view('admin.pages.add_page');
    }

    // Check Slug In Db
    public function checkSlugInDb(Request $request)
    {
        try {
            if ( $request->ajax() ) {
                // Intialization
                    $data = $request->input();
                // End Intialization

                if ( is_null($data['slug']) ) {
                    return response()->json(['error'=>'Please enter slug.']);
                }

                $page = $this->page->getPageDetail( null, $data['slug'] );

                if ( isset( $data['page_id'] ) && ( $page->id == $data['page_id'] ) ) {
                    return;
                }

                if (!is_null($page)) {
                    return response()->json(['error'=>'Slug already exists.']);
                }
            }
        } catch (Exception $e) {
            return response()->json(['error'=>'Slug error.']);
        }
    }

    public function store(Request $request)
    {
        // Initialization
            $data = $request->input();
        // End Initialization
        
        $rules = $this->page->validations();
        $validator = Validator::make($request->all(), $rules);


        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        $page = $this->page->storePage($data);

        if ( $page->id ) {
            return redirect()->route('admin.pages.show')->with('success', 'Page with title: '.$page->title.' Has Been Successfully Added.');
        }
        else {
            return redirect()->back()->with('error', 'Page Adding Error.');
        }
    }


    public function edit($id)
    {
        // Initialization
        $id = Crypt::decrypt($id);
        $data = [];
        // End Initialization

        $data['page'] = $this->page->getPageDetail( $id, null );

        return view('admin.pages.edit_page', $data);
    }

    public function update(Request $request)
    {
        // Initialization
            $data = $request->input();
            $data['page_id'] = Crypt::decrypt($data['page_id']);
        // End Initialization

        $rules = $this->page->validations(
            [
                'slug' => 'required|unique:pages,slug,'.$data['page_id'],
            ]
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $page = $this->page->updatePage( $data );

        if ( $page->id ) {
            return redirect()->route('admin.pages.show')->with('success', 'Page with title: '.$page->title.' Has Been Successfully Edited.');
        }
        else {
            return redirect()->back()->with('error', 'Page Editing Error.');
        }
    }


    public function delete($id)
    {
        try
        {
            // Initialization
                $id = decrypt($id);
            // End Initialization

            $page = $this->page->getPageDetail( $id, $slug = null );
            $page->delete();

            return redirect()->route('admin.pages.show')->with('success', 'Page with title: '.$page->title.' Has Been Successfully Deleted.');

        }
        catch (DecryptException $e)
        {
            return back()->with('error', 'Something went wrong!');
        }

        return redirect()->route('admin.pages.show');
    }


}
