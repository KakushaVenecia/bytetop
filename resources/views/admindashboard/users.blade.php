@extends('admindashboard.layout')
@section('title', 'Users')
@section('content')
<div class="content">
<div id="customers">
            <!-- Customers content -->
            <h1>Customers</h1>
                    <p>This is the customers content.</p>
                    @foreach ($users as $user)
                    <div>
                <h2>{{ $user->name }}</h2>
                <p>Email: {{ $user->email }}</p>
                @if(auth()->user()->role == 'admin')
                    @if($user->role == 'customer')
                        <h3>Customer List:</h3>
                        <ul>
                            <li>{{ $user->name }} - {{ $user->email }}</li>
                            <!-- Add other customer details here -->
                        </ul>
                    @endif
              
                @endif
            </div>
        @endforeach  
    </div>
</div>
@endsection
