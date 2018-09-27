<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Order;
use App\Customer;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        if(Gate::denies('order')){
        abort(404);
        }
    }
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
            'shipping_address' =>  $request->input('shipping_address'),
            'city' =>  $request->input('city'),
            'payment_method' =>  $request->input('payment_method'),
            'sub_total' =>  $request->input('subTotal'),
            'discount' =>  $request->input('discount'),
            'total' =>  $request->input('total'),
            'created_at' =>  Carbon::now()->format("Y-m-d H:i:s"),
            'updated_at' =>  Carbon::now()->format("Y-m-d H:i:s"),
        ]);
     
        $order = Order::find($id);
        $products = $request->input('productName');
        $quantities = $request->input('productQuantity');
        foreach(array_combine($products, $quantities) as  $product => $quantity){
            $order->products()->attach($product, ['quantity'=>$quantity]);
        }
        $request->session()->flash('status', 'Order Created Successfully!');
        return redirect()->route('order.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order/show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('order/edit', compact('order'));
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
        //dd($order->products);
        $order->update([
            'customer_id' =>  $request->input('name'),
            'shipping_address' =>  $request->input('shipping_address'),
            'city' =>  $request->input('city'),
            'payment_method' =>  $request->input('payment_method'),
            'sub_total' =>  $request->input('subTotal'),
            'discount' =>  $request->input('discount'),
            'total' =>  $request->input('total'),
            'updated_at' =>  Carbon::now()->format("Y-m-d H:i:s"),
        ]);
        
        foreach($order->products as $product){
            $order->products()->detach($order->products);
        }
        $products = $request->input('productName');
        $quantities = $request->input('productQuantity');
        foreach(array_combine($products, $quantities) as  $product => $quantity){
            $order->products()->attach($product, ['quantity'=>$quantity]);
        }
        $request->session()->flash('status', 'Order updated Successfully!');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Request $request)
    {
        $order->products()->detach($order->products);
        $order->delete();
        $request->session()->flash('status', 'Order deleted Successfully!');
        return redirect()->route('order.index');
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
