@extends('layouts.default')
@section('title')
Product {{ $product->id }}
@stop
@section('content')
    <h1>Product {{ $product->id }}</h1>
    <ul>
        <li>Name: {{ $product->name }}</li>
        <li>Description: {{ $product->description }}</li>
        <li>Price: {{ $product->price }}</li>
        <li>Category: {{ $product->category }}</li>
        <li>Stock: {{ $product->stock }}</li>
    </ul>
    <div class="row">
        <div class="col-auto">
            <a href="{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
        </div>
        <div class="col-auto">
            {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete' ]) !!}
                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop