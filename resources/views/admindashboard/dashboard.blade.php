@extends('admindashboard.layout')
@section('title', 'Dashboard')
@section('content')
<div class="content">
            <div id="dashboard">
                <div class="user-bar" style="float: right">
                    @if(auth()->check())
                        <p>Hello, {{ auth()->user()->name }}</p>
                    @endif
                </div>
                <h3>SuperAdmin Dashboard</h3>
                <div>
                <div class="card-container">
            {{-- <div class="card">
                <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                <div class="card-title">Total Sales</div>
                <div class="card-value">$5000</div>
            </div> --}}
            <div class="card">
                <div class="card-icon"><i class="fas fa-box"></i></div>
                <div class="card-title">Total Products</div>
                <div class="card-value">{{$productCount}}</div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-users"></i></div>
                <div class="card-title">Users</div>
                <div class="card-value">{{$userCount}}</div>
            </div>
            <div class="card">
                <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                <div class="card-title">Total Orders</div>
                <div class="card-value">{{ $orderCount }}</div>
            </div>
        </div>
        <div id="settings" style="margin-top: 20px; text-align:center;">
        <button><a href="{{ route('admin.invite.form') }}">Invite Admins</a></button>

                </div>
                <div class="recentCustomers">
                    <div class="title">
                        <h1> </h1>
                        <h4>Recent Customers </h4>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Status</th>
                        </tr>
                        <tr>
                            @foreach($users as $user)
                <tr class="user">
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->status }}</td>
                    <td>
                    </td>
                </tr>
                @endforeach
                <td><a href="{{ route('admin.viewusers') }}" class="btn">View</a></td>
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

.container .content .content-2 {
    margin-top: 1rem;
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
    border-radius: 10px;
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
    border-radius: 10px;
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


@endsection

