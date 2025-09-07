<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    
@extends('layouts.app')

@section('content')
    <h2>Our Products</h2>

    <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-left:100px">
        @php
            $products = [
                ['id' => 1, 'name' => 'Laptop', 'price' => 50000, 'image' => 'images/lap.jpg'],
                ['id' => 2, 'name' => 'Phone', 'price' => 20000, 'image' => 'images/iphone.jpg'],
                ['id' => 3, 'name' => 'Tablet', 'price' => 30000, 'image' => 'images/tabel.jpg'],
            ];
        @endphp

        @foreach ($products as $product)
            <div style="border: 1px solid #ccc; padding: 50px; width: 200px;">
                <img src="{{ asset($product['image']) }}" style="width: 100%; height: auto;">
                <h4>{{ $product['name'] }}</h4>
                <p>Price: ₹{{ $product['price'] }}</p>
                <form action="/add-to-cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_name" value="{{ $product['name'] }}">
                    <input type="hidden" name="price" value="{{ $product['price'] }}">
                    <input type="hidden" name="image" value="{{ $product['image'] }}">
                    <input type="hidden" name="quantity" value="1">



                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection


</body>
</html>
