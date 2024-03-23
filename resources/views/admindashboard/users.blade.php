@extends('admindashboard.layout')
@section('title', 'Orders')

@section('content')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<div class="search">
<span class="search-icon material-symbols-outlined">search</span>
<input class="search-input" type="search" placeholder="Search">
</div>

<button class="button button1">+Add Customer</button>

<div class="content">
<div id="Customers List">
    <h1>Customers List</h1>
    <table class="customers_list">

	<thead>
		<tr>
			<th class="id">ID</th>
			<th class="name">Name</th>
			<th class="email">Email</th>
			<th class="phone-number">Phone Number</th>
			<th class="gender">Gender</th>
			<th class="action">Action</th>
		</tr>
	</thead>

	<tbody>
		<tr class="users">
			<td> #2080 </td>
			<td> Christian Lego </td>
      <td> c.lego12@gmail.com</td>
			<td> +44 7767550544 </td>
			<td> Male </td>			
			<td> ... </td>			
		</tr>

		<tr class="users">
    	<td> #1081 </td>
			<td> Imran Khan </td>
      <td> khan.i9992@gmail.com</td>
			<td> +44 7769584903 </td>
			<td> Male </td>			
			<td> ... </td>			
		</tr>

		<tr class="users">
			<td> #1310 </td>
			<td> Julia Smith </td>
      <td> smith_julia2345@gmail.com</td>
			<td> +44 7754059978 </td>
			<td> Female </td>			
			<td> ... </td>			
		</tr>

		<tr class="users">
			<td> #3379 </td>
			<td> Chris Campbell </td>
      <td> campbell.c007@gmail.com</td>
			<td> +44 7760557890 </td>
			<td> Male </td>			
			<td> ... </td>			
		</tr>

		<tr class="users">
			<td> #1100 </td>
			<td> Philip Scott </td>
      <td> philip.s3344@gmail.com</td>
			<td> +44 7706504498 </td>
			<td> Male </td>			
			<td> ... </td>			
		</tr>

		<tr class="users">
			<td> #3230 </td>
			<td> Lily Brown </td>
      <td> brown_lily2022@gmail.com</td>
			<td> +44 7767550544 </td>
			<td> Female </td>			
			<td> ... </td>			
		</tr>

		<tr class="users">
			<td> #2360 </td>
			<td> Sophia Stewart </td>
      <td> s.sophia777@gmail.com</td>
			<td> +44 7743023209 </td>
			<td> Female </td>			
			<td> ... </td>			
		</tr>
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
  font-family: Arial, Helvetica, sans-serif;
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
tbody>tr>:nth-child(5){
 	width:200px;
 	text-align:center;
 	background-clip: padding-box;
    border-radius: 20px;
    background-color: #F0F0F0;
    color: red;
    padding: 5px 50px 5px 50px;
    display: inline;
}
table th,td {
    text-align: center;
}

.id:after,
.name:after,
.email:after,
.phone-number:after,
.gender:after{
  content: ' ';
  position: relative;
  left: 2px;
  border: 8px solid transparent;
}

.id:after,
.name:after,
.email:after,
.phone-number:after,
.gender:after{
  top: 10px;
  border-top-color: silver;
}

.id:after,
.name:after,
.email:after,
.phone-number:after,
.gender:after{
  padding-right: 0px;
}

.search{
  width: max-content;
  display: flex;
  align-items: center;
  padding: 18px;
  margin-top: 14px;
  border-radius: 28px;
  background: #f6f6f6;
  transition: box-shadow 0.1s;
  float:right;
}

.search:focus-within {
  box-shadow: 0 0 2px rgba (0, 0, 0, 0.75);
}

.search-input{
  font-size: 16px;
  font-family: 'Lexend', sans-serif;
  color: #333333;
  margin-left: 14px;
  outline: none;
  border:none;
  background: transparent;
  width: 300px
}

.search-input::placeholder,
.search-icon{
  color: rgba(0, 0, 0, 0.5)
}

.button {
  border: none;
  color: white;
  padding: 15px;
  border-radius: 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 22px 20px;
  cursor: pointer;
  float: right;
}

.button1 {background-color: #001E2C;}



@media (max-width: 1024px) {
	h1{
		font-size: 20px;
	}
	button1{
		font-size: 10px;
	}
}
 
</style>
@endsection