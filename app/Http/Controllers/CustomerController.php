<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer/index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>  'required|regex:/^[\pL\s\-]+$/u',
            'contact' =>  'required|numeric',
            'email' =>  'required|email',
            'address' =>  'required|regex:/^[\pL\s\-]+$/u',
            'comment' =>  'regex:/^[\pL\s\-]+$/u',
          ]);
          Customer::create([
            'name' =>  request('name'),
            'contact' =>  request('contact'),
            'email' =>  request('email'),
            'address' =>  request('address'),
            'comment' =>  request('comment'),
          ]);
          $request->session()->flash('status', 'Customer added Successfully!');
          return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
      return view('customer.edit', compact('customer'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, [
            'name' =>  'required|regex:/^[\pL\s\-]+$/u',
            'contact' =>  'required|numeric',
            'email' =>  'required|email',
            'address' =>  'required|regex:/^[\pL\s\-]+$/u',
            'comment' =>  'nullable|regex:/^[\pL\s\-]+$/u',
          ]);
          $customer->update([
            'name' =>  request('name'),
            'contact' =>  request('contact'),
            'email' =>  request('email'),
            'address' =>  request('address'),
            'comment' =>  request('comment'),
          ]);
          $request->session()->flash('status', 'Customer detail Updated Successfully!');
          return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer, Request $request)
    {
        $customer->delete();
        $request->session()->flash('status', 'Customer deleted Successfully!');
        return redirect()->route('customer.index');
    }
}
