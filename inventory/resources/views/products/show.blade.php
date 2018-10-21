<!DOCTYPE html>
<html>
  <head>
    <title>Product {{ $product->id }}</title>
  </head>
  <body>
    <h1>Product {{ $product->id }}</h1>
    <ul>
      <li>Name: {{ $product->name }}</li>
      <li>Description: {{ $product->description }}</li>
      <li>Price: {{ $product->price }}</li>
      <li>Category: {{ $product->category }}</li>
      <li>Stock: {{ $product->stock }}</li>
    </ul>
  </body>
</html>