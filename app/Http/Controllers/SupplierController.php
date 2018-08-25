<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier/index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier/create');        
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
          Supplier::create([
            'name' =>  request('name'),
            'contact' =>  request('contact'),
            'email' =>  request('email'),
            'address' =>  request('address'),
            'comment' =>  request('comment'),
          ]);
          $request->session()->flash('status', 'Supplier added Successfully!');
          return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return view('supplier.show', compact('supplier'));        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
      return view('supplier.edit', compact('supplier'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request, [
            'name' =>  'required|regex:/^[\pL\s\-]+$/u',
            'contact' =>  'required|numeric',
            'email' =>  'required|email',
            'address' =>  'required|regex:/^[\pL\s\-]+$/u',
            'comment' =>  'nullable|regex:/^[\pL\s\-]+$/u',
          ]);
          $supplier->update([
            'name' =>  request('name'),
            'contact' =>  request('contact'),
            'email' =>  request('email'),
            'address' =>  request('address'),
            'comment' =>  request('comment'),
          ]);
        $request->session()->flash('status', 'Supplier detail Updated Successfully!');
        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier, Request $request)
    {
        $supplier->delete();
        $request->session()->flash('status', 'Supplier deleted Successfully!');
        return redirect()->route('supplier.index');
    }
}
