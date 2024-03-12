

@foreach ($users as $user)
    <div>
        <h2>{{ $user->name }}</h2>
        <p>Email: {{ $user->email }}</p>
        @if($user->role == 'admin')
            <h3>Customer List:</h3>
            <ul>
                @foreach($users->where('role', 'customer') as $customer)
                    <li>{{ $customer->name }} - {{ $customer->email }}</li>
                    <!-- Add other customer details here -->
                @endforeach
            </ul>
        @elseif($user->role == 'super_admin')
        <h6>{{ $user->name }}</h6>
        <p>Email: {{ $user->email }}</p>
            <!-- Display all user details -->
            <!-- You can include any specific details for super admin here -->
        @endif
    </div>
@endforeach

