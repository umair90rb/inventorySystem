<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Product;
use App\Brand;
use App\Categorie;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function __construct()
  {
    if(gate()->allows('product')){
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
      
      $products = Product::all();
      return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // if(Gate::denies('product')){
      //   return response()
      //   ->view('layouts.403');
      // }
      $brands = Brand::all();
      $categories = Categorie::all();
        return view('product.create', compact('brands', 'categories'));
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
        'categorie_id' =>  'required|integer',
        'brand_id' =>  'required|integer',
        'name' =>  'required|regex:/^[\pL\s\-]+$/u',
        'price' =>  'required|integer',
        'stock' =>  'required|integer',
      ]);
      Product::create([
        'categorie_id' =>  request('categorie_id'),
        'brand_id' =>  request('brand_id'),
        'name' =>  request('name'),
        'price' =>  request('price'),
        'stock' =>  request('stock'),
      ]);
      $request->session()->flash('status', 'Product added Successfully!');
      return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      $brands = Brand::all();
      $categories = Categorie::all();
      return view('product.edit', compact('product', 'brands', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $this->validate($request, [
        'categorie_id' =>  'required|integer',
        'brand_id' =>  'required|integer',
        'name' =>  'required|regex:/^[\pL\s\-]+$/u',
        'price' =>  'required|integer',
        'stock' =>  'required|integer',
      ]);
      $product->update([
        'categorie_id' =>  request('categorie_id'),
        'brand_id' =>  request('brand_id'),
        'name' =>  request('name'),
        'price' =>  request('price'),
        'stock' =>  request('stock'),
      ]);
      $request->session()->flash('status', 'Product updated Successfully!');
      return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Request $request)
    {
        $product->delete();
        $request->session()->flash('status', 'Product deleted Successfully!');
        return redirect()->route('product.index');
    }
}
