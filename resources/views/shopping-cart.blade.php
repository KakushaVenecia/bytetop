<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<body>
   
  @include('partials.navbar')
    <h1>Shopping Cart</h1>
    
    @if ($cartItems->isEmpty())
        <p>Your cart is empty.</p>
    @else
        <ul>
            @foreach ($cartItems as $cartItem)
                <li>
                    {{ $cartItem->product->name }} - Quantity: {{ $cartItem->quantity }}
                    <form action="{{ route('cart.removeFromCart', $cartItem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>

