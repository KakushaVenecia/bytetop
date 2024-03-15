@extends('admindashboard.layout')
@section('title', 'Users')
@section('content')
<div class="content">
    <div id="customers">
        <!-- Users content -->
        <h1>Customers</h1>
        @foreach ($customers as $customer)
            <div>
                <h2>{{ $customer->name }}</h2>
                <p>Email: {{ $customer->email }}</p>
                <!-- Add more user details here -->
            </div>
        @endforeach
        <div class="pagination">
            {{ $customers->links() }}
        </div>
    </div>
</div>
@endsection

