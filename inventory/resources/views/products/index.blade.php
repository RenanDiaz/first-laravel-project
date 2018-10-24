@extends('layouts.default')
@section('title')
Products
@stop
@section('content')
  <h1>Products</h1>
  <ul>
    @forelse ($products as $product)
      <li><a href="products/{{ $product->id }}">{{ $product->name }}</a></li>
    @empty
      <li>No products</li>
    @endforelse
  </ul>
@stop