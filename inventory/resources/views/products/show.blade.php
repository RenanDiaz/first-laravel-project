<!DOCTYPE html>
<html>
    <head>
        <title>Product {{ $product->id }}</title>
    </head>
    <body>
        <h1>Product {{ $product->id }}</h1>
        <p><a href="{{ $product->id }}/edit">Edit</a></p>
        <p>
            {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete' ]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete') !!}
                </div>
            {!! Form::close() !!}
        </p>
        <ul>
            <li>Name: {{ $product->name }}</li>
            <li>Description: {{ $product->description }}</li>
            <li>Price: {{ $product->price }}</li>
            <li>Category: {{ $product->category }}</li>
            <li>Stock: {{ $product->stock }}</li>
        </ul>
    </body>
</html>