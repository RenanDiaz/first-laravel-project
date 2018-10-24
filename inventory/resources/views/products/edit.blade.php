@extends('layouts.default')
@section('title')
Edit product {{ $product->id }}
@stop
@section('content')
    <h1>Edit product {{ $product->id }}</h1>
    {!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put' ]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::text('description', $product->description, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', $product->price, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category', ['device' => 'Device', 'peripheral' => 'Peripheral', 'accessory' => 'Accessory'] , $product->category, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('stock', 'Stock:') !!}
            {!! Form::text('stock', $product->stock, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop