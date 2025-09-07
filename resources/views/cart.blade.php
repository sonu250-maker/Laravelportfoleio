@extends('layouts.app')

@section('content')
    <h2>Your Cart</h2>


    <form action="{{ route('cart.clear') }}" method="GET" onsubmit="return confirm('Are you sure you want to clear the cart?');">
    <button type="submit" class="btn btn-danger">Clear All</button>
</form>

    @if($cartItems->count() > 0)
        <table border="1" cellpadding="10">
            <tr>
                <th>Iteam</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
                
            </tr>
            @foreach($cartItems as $item)
                <tr>
                    <td>
    <img src="{{ asset($item->image) }}" width="100" alt="Product Image">
</td>

                    <td>{{ $item->product_name }}</td>
                    <td>₹{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                  
                    <td>₹{{ $item->price * $item->quantity }}</td>
 
                </tr>
            @endforeach
        </table>
    @else
        <p>Your cart is empty.</p>
    @endif
@endsection
