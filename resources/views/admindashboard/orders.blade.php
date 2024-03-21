@extends('admindashboard.layout')
@section('title', 'Orders')

@section('content')


<div class="content">
<div id="orders">
    <h1>Orders</h1><h2>7 Orders found</h2>
    <table class="shop_table_my_account_orders">

	<thead>
		<tr>
			<th class="#">#</th>
			<th class="order-number">Order ID</th>
			<th class="product-name">Product ID</th>
			<th class="address">Address</th>
			<th class="order-date">Date</th>
			<th class="order-total">Total</th>
			<th class="order-status">Status</th>
			<th class="action">Action</th>
		</tr>
	</thead>

	<tbody>
		<tr class="order">
			<td> 1 </td>
			<td> <a href="*">#2080</a></td>
			<td> <a href="*">2384759685</a></td>
			<td> 351 Palm Street</td>
			<td> <time datetime="2014-06-12" title="1402562157">June 12, 2014</time></td>
			<td> <span class="amount">£176.00</span> for 8 items</td>
			<td> On-hold </td>
			<td> <a href="*" class="button view">View</a></td>
		</tr>

		<tr class="order">
			<td> 2 </td>
			<td><a href="*">#2081</a></td>
			<td><a href="*">5748394059</a></td>
			<td>26 Parsons Hill</td>
			<td><time datetime="2014-05-10" title="1402562157">May 10, 2014</time></td>
			<td><span class="amount">£148.00</span> for 3 items</td>
			<td>On-hold</td>
			<td><a href="*" class="button view">View</a></td>
		</tr>

		<tr class="order">
			<td> 3 </td>
			<td><a href="*">#2082</a></td>
			<td><a href="*">5867493021</a></td>
			<td>1 Whitely Street</td>
			<td><time datetime="2014-03-21" title="1402562157">March 21, 2014</time></td>
			<td><span class="amount">£99.00</span> for 1 items</td>
			<td>On-hold</td>
			<td><a href="*" class="button view">View</a></td>
		</tr>

		<tr class="order">
			<td> 4 </td>
			<td><a href="*">#2083</a></td>
			<td><a href="*">1584739205</a></td>
			<td>26 Broad Avenue</td>
			<td><time datetime="2014-06-19" title="1402562157">June 19, 2014</time></td>
			<td><span class="amount">£218.00</span> for 4 items</td>
			<td>On-hold</td>
			<td><a href="*" class="button view">View</a></td>
		</tr>

		<tr class="order">
			<td> 5 </td>
			<td><a href="*">#1032</a></td>
			<td><a href="*">6879504956</a></td>
			<td>12 Rutherford Max</td>
			<td><time datetime="2014-04-13" title="1402562157">April 13, 2014</time></td>
			<td><span class="amount">£159.00</span> for 3 items</td>
			<td>On-hold</td>
			<td><a href="*" class="button view">View</a></td>
		</tr>

		<tr class="order">
			<td> 6 </td>
			<td><a href="*">#8431</a></td>
			<td><a href="*">3746576890</a></td>
			<td>99 Baker Street</td>
			<td><time datetime="2014-02-10" title="1402562157">February 10, 2014</time></td>
			<td><span class="amount">£687.00</span> for 5 items</td>
			<td>On-hold</td>
			<td><a href="*" class="button view">View</a></td>
		</tr>

		<tr class="order">
			<td> 7 </td>
			<td><a href="*">#3453</a></td>
			<td><a href="*">1928374859</a></td>
			<td>33 Lincoln Avenue</td>
			<td><time datetime="2014-07-01" title="1402562157">July 01, 2014</time></td>
			<td><span class="amount">£495.00</span> for 6 items</td>
			<td>On-hold </td>
			<td><a href="*" class="button view">View</a></td>
		</tr>
	</tbody>
</table>
    <!-- Add products content here -->
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

</style>
@endsection