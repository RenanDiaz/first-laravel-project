<!DOCTYPE html>
<html>
  <head>
    <title>Products</title>
  </head>
  <body>
    <h1>Products</h1>
    <p><a href="products/create">Create</a></p>
    <ul>
      @forelse ($products as $product)
        <li><a href="products/{{ $product->id }}">{{ $product->name }}</a></li>
      @empty
        <li>No products</li>
      @endforelse
    </ul>
  </body>
</html>