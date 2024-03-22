@extends('admindashboard.layout')
@section('title', 'Dashboard')
@section('content')
<<div class="side-menu">
               
    </div>
    <div class="container">
    
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <div class="card-icon1"><i class="fas fa-chart-line"></i></div>
                        <h1>80</h1>
                        <h3>Sales</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <div class="card-icon2"><i class="fas fa-box"></i></div> 
                        <h1>{{$productCount}}</h1>
                        <h3>Products</h3>
                    </div>
                    
                </div>
                <div class="card">
                    <div class="box">
                        <div class="card-icon3"><i class="fas fa-users"></i></div>    
                        <h1>500</h1>
                        <h3>Customers</h3>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="card-icon4"><i class="fas fa-chart-line"></i></div>
                        <h1>$5000</h1>
                        <h3>Earnings</h3>
                    </div>                    
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h1> </h1>
                        <h4>Recent Orders</h4>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Title</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>2345981234</td>
                            <td>HP Latitude</td>
                            <td>HP</td>
                            <td>$1185</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                        <td>1456788891</td>
                            <td>HP Pavillion</td>
                            <td>HP</td>
                            <td>$349</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                        <td>9685043294</td>
                            <td>Acer Aspire</td>
                            <td>Acer</td>
                            <td>$369</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                        <td>1284739067</td>
                            <td>Lenovo Ideapad</td>
                            <td>Lenovo</td>
                            <td>$521</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                        <td>1938574930</td>
                            <td>Apple MacBook Air</td>
                            <td>Apple</td>
                            <td>$529</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                        <td>3928493827</td>
                            <td>Apple MacBook Pro</td>
                            <td>Apple</td>
                            <td>$658</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
                <div class="recentCustomers">
                    <div class="title">
                        <h1> </h1>
                        <h4>Recent Customers</h4>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email id</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>John Carry</td>
                            <td>j.carry@yahoo.com</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Carry</td>
                            <td>j.carry@yahoo.com</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Carry</td>
                            <td>j.carry@yahoo.com</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>John Carry</td>
                            <td>j.carry@yahoo.com</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

  <style>
   
   * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Work Sans', sans-serif;
}
body {
    min-height: 100vh;
}
a {
    text-decoration: none;
}
li {
    list-style: none;
}
h1,
h2 {
    color: white;
    font-size: 30px;
    position:relative; top:-15px; left:0px; margin-left:0px; margin-right:0px;
}
h3 {
    color: #999;
    font-size: 30px;
    text-align:center;
    position:relative; top:-15px; left:0px; margin-left:0px; margin-right:0px
}
h4 {
    color: white;
    font-size: 30px;
    position:relative; top:5px; left:0px; margin-left:0px; margin-right:0px;
}
.btn {
    background: #f05462;
    color: white;
    padding: 5px 10px;
    text-align: center;
}
.btn:hover {
    color: #f05462;
    background: white;
    padding: 3px 8px;
    border: 2px solid #f05462;
}
.title {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 15px 10px;
    border-bottom: 2px solid #999;
}
table {
    padding: 10px;
}
th,
td {
    text-align: left;
    padding: 8px;
}


.container {
    position: absolute;
    width: 80vw;
    height: 100vh;
    background: #f1f1f1;
}



.container .content {
    position: relative;

    min-height: 90vh;
    background: #f1f1f1;
}
.container .content .cards {
    padding: 20px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.container .content .cards .card {
    width: 200px;
    height: 120px;
    background: #001E2C;
    margin: 20px 10px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .content .cards .box .card-icon1 {
    padding: 20px 15px;
    display: flex;
    font-size: 32px;
    color:orange;
    justify-content: space-between;
    flex-wrap: wrap;
    position: relative;
    top: 40px;
    right: 90px;
}

.container .content .cards .box .card-icon2 {
    padding: 20px 15px;
    display: flex;
    font-size: 32px;
    color:orange;
    justify-content: space-between;
    flex-wrap: wrap;
    position: relative;
    top: 40px;
    right: 65px;
}

.container .content .cards .box .card-icon3 {
    padding: 20px 15px;
    display: flex;
    font-size: 32px;
    color:orange;
    justify-content: space-between;
    flex-wrap: wrap;
    position: relative;
    top: 40px;
    right: 50px;
}

.container .content .cards .box .card-icon4 {
    padding: 20px 15px;
    display: flex;
    font-size: 32px;
    color:orange;
    justify-content: space-between;
    flex-wrap: wrap;
    position: relative;
    top: 40px;
    right: 65px;
}

.container .content .content-2 {
    min-height: 60vh;
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}
.container .content .content-2 .recent-payments {
    min-height: 50vh;
    flex: 5;
    font-family: 'Work Sans', sans-serif;
    background-color:#001E2C;
    color:white;
    font-size: 15px;
    margin: 0 25px 25px 25px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}
.container .content .content-2 .recentCustomers {
    flex: 3;
    background: white;
    min-height: 50vh;
    margin: 0 25px;
    background-color:#001E2C;
    color:white;
    font-size: 15px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    flex-direction: column;
}



@media screen and (max-width:536px) {
    
    .container .content .cards {
        justify-content: center;
    }
    
    .container .content .content-2 .recent-payments table th:nth-child(2),
    .container .content .content-2 .recent-payments table td:nth-child(2) {
        display: none;
    }
}

  </style>




@endsection

