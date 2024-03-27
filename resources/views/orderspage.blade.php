<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="css/orderspage.css">
    <script src="https://kit.fontawesome.com/4d0aa3dbc2.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('partials.navbar') 

    <header>
        <h1>My Orders</h1>
        <p>View all of your orders here.</p>
    </header>

    <div class="container">
        @if ($orders->isEmpty())
            <p>No orders found.</p>
        @else
            @foreach ($orders as $order)
                <div class="heading">
                    <div class="odetails-1">
                        <p><b>Order</b></p>
                        <p>#{{ $order->order_identifier }}</p>
                    </div>
                    <div class="odetails-2">
                        <p>Order Placed: {{ $order->created_at->format('D jS M Y') }}</p>
                    </div>
                    
                    @if ($order->status === 'Initiated')
                      <button id="track-order-btn">
                        <a href="{{ route('trackorder', $order->id) }}">
                            <i style="color: black" class="fa-solid fa-truck"></i>
                            <p style="color: black">TRACK ORDER</p>
                   
  
                        </a>
                     </button>
                    @elseif ($order->status === 'Processing')
                        <button id="cancel-order-btn" onclick="cancelOrder('{{ $order->id }}');">
                            <i class="fa-solid fa-times"></i>
                            <p>CANCEL ORDER</p>
                        </button>
                    @endif
                </div>

                <hr>
                <div class="card-container">
                    <div class="card">
                      {{-- <img src="{{ asset('storage/images/' . $order->product->image) }}" alt="Product Image"> --}}

                        <div class="parent">
                            <div class="content">
                                <div class="details-1">
                                    <h1>{{ $order->name }}</h1>
                                </div>
                                <div class="details-2">
                                    <p>Qty: {{ $order->quantity }}</p>
                                    <p><b>Price: £{{ $order->price }}</b></p>
                                </div>
                            </div>
                            <div class="status">
                                <div class="sec1">
                                    <p>Status</p>
                                    <h2>{{ $order->status }}</h2>
                                </div>
                                <div class="sec2">
                                    @if ($order->status === 'Processing')
                                        <p>Cancel</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <hr>
            @endforeach
        @endif
    </div>

    @include('partials.footer')

    <script>
        function cancelOrder(orderId) {
            // Implement cancel order logic here, e.g., send an AJAX request to cancel the order
            alert('Cancel Order Will be Processed : ' + orderId);
        }
    </script>
</body>
</html>