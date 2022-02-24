<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Validator;
use Crypt;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $category;

    public function __construct()
    {
        $this->category = new category;
    }
    public function index()
    {
        // Initialization
        $data = [];
        // End Initialization

        $data['catagories'] = $this->category->getCategoriesList();
        
        return view('admin.catagories.manage_catagories', $data); // admin/catagories/manage_catagories
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Initialization
        $data = $request->input();
    // End Initialization
    
    $rules = $this->catagory->validations();
    $validator = Validator::make($request->all(), $rules);


    if ($validator->fails()) {
        return redirect()
            ->back()
            ->withErrors($validator)
            ->withInput();
    }


    $catagory = $this->catagory->storeCatagory($data);

    if ( $category->id ) {
        return redirect()->route('admin.categories.show')->with('success', 'catagory with title: '.$catagory->title.' Has Been Successfully Added.');
    }
    else {
        return redirect()->back()->with('error', 'Catagory Adding Error.');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        // Initialization
        // dd($id);
        $id = $id;
        // dd($id);
        $data = [];
        // End Initialization

        $data['category'] = $this->category->find($id);
        return view('admin.catagories.edit_category', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Initialization
        $data = $request->input();
        $data['cat_id'] = $data['cat_id'];
        $catagory = $this->category->updateCategory( $data );
        if ($catagory) {
            return redirect()->route('admin.catagories.show')->with('success','Category has been updated');
        }
        else{
            return redirect()->route('admin.catagories.show')->with('success','Error occured while updating Category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
