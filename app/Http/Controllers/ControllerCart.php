<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order_detail;
use App\Models\product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class ControllerCart extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Order_detail = order_detail::with('product')->whereNull('orders_id')->get();
        $session = Session::get('email');
        $user = DB::table('users')->where('email', '=', $session)->get();
        $Category_ao = DB::table('category')->where('category', '=', 'ao')->get();
        $Category_quan = DB::table('category')->where('category', '=', 'quan')->get();
        $Category_nha = DB::table('category')->where('category', '=', 'do mac nha')->get();
        $Category_ngoai = DB::table('category')->where('category', '=', 'do mac ngoai')->get();
        return view('user.buyer.cart', compact('Order_detail', 'user', 'Category_ao', 'Category_quan','Category_nha', 'Category_ngoai'));
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
        if($request->isMethod('Post')){
            $validator = Validator::make($request->all(), [
                'amount' => 'required',
                
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            
            else{
                $amount = $request->amount;
                $price = $request->price;
                $total = $amount * $price;
                $newOrder_detail = new order_detail();
                $newOrder_detail->amount = $amount;
                $newOrder_detail->total = $total;
                $newOrder_detail->product_id = $request->product_id;
                $newOrder_detail->save();
                return redirect()->route('index.cart');
            }
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
        $updateCart = order_detail::find($id);
        $updateCart -> amount  = $request->amount;
        $updateCart -> save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteCart = order_detail::find($id);
        $deleteCart-> delete();
        return redirect()->back();
    }
}
