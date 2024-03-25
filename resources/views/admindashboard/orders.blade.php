@extends('admindashboard.layout')
@section('title', 'Orders')

@section('content')


<div class="content">
<div id="orders">
    <h1>Orders</h1><h2>{{ $orderCount }} orders found </h2>
    <table class="shop_table_my_account_orders">

		<table>
			<thead>
				<tr>
					<th>Order ID</th>
					<th>Product Name</th>
					<th>Address</th>
					<th>Date</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $order)
				<tr>
					<td>{{ $order->id}}</td>
					<td>{{ $order->name }}</td>
					<td>{{ $order->quantity }}</td>
					<td>{{ $order->price }}</td>
					<td>{{ $order->status }}</td>
					<td>{{ $order->action }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</tbody>
</table>
</div>
<div>

<style>
	{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
   
}
	h1 {
  display: inline;
  font-family: "Lucida Console", "Courier New", monospace;
  font-size: 30px;
  margin-top: 10px;
  margin-bottom: 40px;
  margin-left: 10%;
  margin-right: 0;
  font-weight: bold;
  padding-left: 40px;
  padding-bottom: 40px;
  line-height: 3;
}
h2 {
  display: inline;
  font-family: "Lucida Console", "Courier New", monospace;
  font-size: 15px;
  margin-top: 10px;
  margin-bottom: 40px;
  margin-left: 10px;
  margin-right: 0;
  font-weight: normal;
  padding: -50px;
}
table {
  border-collapse: collapse;
  width: 100%;
  padding: 20px;
  line-height: 3;
  }
th{
	height:30px;
	background: #001E2C;
	color:white;
}
th{
	font-family: Arial, Helvetica, sans-serif;
	font-size:15px;
}
td{
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
	}
tbody>tr>:nth-child(7){
 	width:200px;
 	text-align:center;
 	background-clip: padding-box;
    border-radius: 20px;
    background-color: #F0F0F0;
    color: red;
    padding: 5px 70px 5px 70px;
    display: inline;
}
table th,td,.shop_table my_account_orders {
    text-align: center;
}

.order-number:after,
.product-name:after,
.address:after,
.order-date:after,
.order-total:after,
.order-status:after,
.action:after
 {
  content: ' ';
  position: relative;
  left: 2px;
  border: 8px solid transparent;
}

.order-number:after,
.address:after,
.order-date:after,
.order-total:after,
.product-name:after,
.order-status:after,
.action:after {
  top: 10px;
  border-top-color: silver;
}



.order-number:after,
.product-name:after,
.address:after,
.order-date:after,
.order-total:after,
.order-status:after,
.action:after {
  padding-right: 0px;
}

@media only screen and (max-width: 1055px) {
    h1 {
        font-size: 26px;
        margin-left: 5%;
    }

    h2 {
        font-size: 14px;
        margin-left: 5px;
    }

    tbody > tr > :nth-child(7) {
        padding: 5px 10px; 
    }
}
@media only screen and (max-width: 768px) {
    h1 {
        font-size: 24px;
        margin-left: 5%;
    }

    h2 {
        font-size: 12px;
        margin-left: 5px;
    }
}




@media only screen and (max-width: 640px) {
    h1 {
        font-size: 20px;
    }

    h2 {
        font-size: 10px;
    }

    td {
        font-size: 10px;
    }

    tbody > tr > :nth-child(7) {
        padding: 5px 10px; 
    }
}


@media only screen and (max-width: 475px) {
    h1 {
        font-size: 18px;
    }

    h2 {
        font-size: 8px;
    }

    td {
        font-size: 8px;
    }

    tbody > tr > :nth-child(7) {
        padding: 5px 20px; 
    }
}
</style>
@endsection