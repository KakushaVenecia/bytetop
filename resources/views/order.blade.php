{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="{{ route('orderItems.store', ['order_id' => $order->id]) }}" method="post">
    @csrf
    <div>
        <label for="product_id">Product ID:</label>
        <input type="text" name="product_id" id="product_id" required>
    </div>
    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" required>
    </div>
    <button type="submit">Add Order Item</button>
</form>

<hr>


<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->orderItems as $orderItem)
        <tr>
            <td>{{ $orderItem->product_id }}</td>
            <td>{{ $orderItem->quantity }}</td>
            <td>{{ $orderItem->price }}</td>
            <td>
                <form action="{{ route('orderItems.destroy', ['order_id' => $order->id, 'id' => $orderItem->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html> --}}