<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function index(Request $request){

        //dd($request->user());
        $data = \App\Models\Order::where('user_id',$request->user()->id)->get();
        return view('account.orders', $data);

    }
    public function create(Request $request){
        // show create order page.
        return view('shop.order');
    }
    // store order (this is done before payment. Upon payment, the order is updated to reflect payment.)
    public function store(){}
    // show the specifics of one order
    public function show(Request $request){

    }
    public function edit(){}
    public function update(){}
    public function destroy(){}
}
