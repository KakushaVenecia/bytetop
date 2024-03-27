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

 
@endsection