<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\category;
use App\Models\product;
class ControllerHome extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $session = Session::get('email');
        $user = DB::table('users')->where('email', '=', $session)->get();
        $Product = product::all();
        $Category_ao = DB::table('category')->where('category', '=', 'ao')->get();
        $Category_quan = DB::table('category')->where('category', '=', 'quan')->get();
        $Category_nha = DB::table('category')->where('category', '=', 'do mac nha')->get();
        $Category_ngoai = DB::table('category')->where('category', '=', 'do mac ngoai')->get();
        return view('user.buyer.nam', compact('user', 'Product', 'Category_ao', 'Category_quan','Category_nha', 'Category_ngoai'));
    }
    public function nu()
    {
        $session = Session::get('email');
        $user = DB::table('users')->where('email', '=', $session)->get();
        $Product = product::where('gender', 'Nữ')->get();
        $Category_ao = DB::table('category')->where('category', '=', 'ao')->get();
        $Category_quan = DB::table('category')->where('category', '=', 'quan')->get();
        $Category_nha = DB::table('category')->where('category', '=', 'do mac nha')->get();
        $Category_ngoai = DB::table('category')->where('category', '=', 'do mac ngoai')->get();
        return view('user.buyer.nu', compact('user', 'Product', 'Category_ao', 'Category_quan','Category_nha', 'Category_ngoai'));
    }
   
    public function search_product(Request $request) {
            $session = Session::get('email');
            $condition = $request->search;
            $user = DB::table('users')->where('email', '=', $session)->get();
            $Product = DB::table('product')->where('name', 'like', '%'.$request->search.'%')->get();
            $image = DB::table('product_image')->where('product_id', '=', $Product[0]->id)->get();
            return view('user.buyer.search', compact('Product', 'user', 'image', 'condition'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slide()
    {
        return view('slide');
    }
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function guest() {
        $Product = product::all();
        $Category_ao = DB::table('category')->where('category', '=', 'ao')->get();
        $Category_quan = DB::table('category')->where('category', '=', 'quan')->get();
        $Category_nha = DB::table('category')->where('category', '=', 'do mac nha')->get();
        $Category_ngoai = DB::table('category')->where('category', '=', 'do mac ngoai')->get();
        return view('user.guest.nam', compact( 'Product', 'Category_ao', 'Category_quan','Category_nha', 'Category_ngoai'));
    }
    public function guest_search_product(Request $request) {
       
        $condition = $request->search;
        $Category_ao = DB::table('category')->where('category', '=', 'ao')->get();
        $Category_quan = DB::table('category')->where('category', '=', 'quan')->get();
        $Category_nha = DB::table('category')->where('category', '=', 'do mac nha')->get();
        $Category_ngoai = DB::table('category')->where('category', '=', 'do mac ngoai')->get();
        $Product = DB::table('product')->where('name', 'like', '%'.$request->search.'%')->get();
        $image = DB::table('product_image')->where('product_id', '=', $Product[0]->id)->get();
        return view('user.guest.search', compact('Product', 'image', 'condition', 'Category_ao', 'Category_quan','Category_nha', 'Category_ngoai'));
    
}

}
