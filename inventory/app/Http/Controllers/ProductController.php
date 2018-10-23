<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', array('products' => $products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->category = $request['category'];
        $product->stock = 0;
        $product->save();

        flash('Your product has been created!')->success();

        return redirect()->route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', array('product' => $product));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', array('product' => $product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->price = $request['price'];
        $product->category = $request['category'];
        $product->stock = $request['stock'];
        $product->save();

        flash('Your product has been updated!')->success();

        return redirect()->route('products.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        flash('Your product has been deleted!')->success();


        return redirect()->route('products.index');
    }
}
