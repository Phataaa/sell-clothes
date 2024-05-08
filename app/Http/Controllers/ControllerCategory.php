<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Validation;
use Illuminate\Support\Facades\Validator;
class ControllerCategory extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'category' => 'required'
            ]);
            if($validator->fails()){
                return Redirect()->back()->withErrors($validator)->withInput();
            }
            $newCategory = new category();
            $newCategory->name = $request->name;
            $newCategory->category = $request->category;
            $newCategory->save();
            return Redirect()->route('management_category');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = category::find($id);
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'name' => 'required'
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $newCategory = category::find($id);
            $newCategory->name = $request->name;
            $newCategory->save();
            return Redirect()->route('management_category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Product = product::where('category_id', $id)->get();

        foreach ($Product as $product) {
            foreach($product->image as $image){
                $file = "/product/image/".$image->path;
                File::delete($file);
                $image->delete();
            }
            $product->delete();
        }
        $category = category::find($id);
        $category->delete();
        return Redirect()->back();
    }
}
