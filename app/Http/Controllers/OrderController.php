<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Users;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('componens/order')->with([
            'products' => Product::all(),
            'users' => Users::all(),
            'orders' => Order::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $validate = $request->validated();

        $order = new Order;

        $order->product_id = $request->productId;
        $order->user_id = $request->userId;
        $order->quantity = $request->qty;
        $order->date = $request->date;
        $order->save();

        return redirect('orders')->with('msg', 'berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
