<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Customer;
use App\Product;
use Carbon\Carbon;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('order/index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $id = Order::insertGetId([
            'customer_id' =>  $request->input('name'),
            'payment_method' =>  $request->input('payment_method'),
            'discount' =>  $request->input('discount'),
            'total' =>  $request->input('total'),
            'created_at' =>  Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' =>  Carbon::now()->format("Y-m-d H:i:s"),
          ]);
        $order = Order::find($id);
        foreach($request->input('productName') as $product){
            //foreach($request->input('productQuantity') as $quantity){
                $order->products()->attach($product);
            //}
        }
        $request->session()->flash('status', 'Product added Successfully!');
        return redirect()->route('order.index');
        // foreach($request->input('productName') as $a) {
        //     echo $a;
        //     echo "\n";
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    /**
     * Find customer detail which selected in order form.
     * @param \App\Request $request
     * @return \App\Customer $customer
     */
    public function getCustomer(Request $request)
    {
        $customer = Customer::find($request->input('id'));
        return $customer;
    }
    /**
     * Find product detail which selected in order form.
     * @param \App\Request $request
     * @return \App\Product $customer
     */
    public function getProduct(Request $request)
    {
        $product = Product::find($request->input('id'));
        return $product;
    }
}
