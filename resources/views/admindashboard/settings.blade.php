@extends('admindashboard.layout')
@section('title', 'Settings')
@section('content')
<div class="content">  
<div id="settings">
            <!-- Settings content -->
            <h1>Settings</h1>
            <p>This is the settings content.</p>
            <button>Edit Settings</button>
            <a href="{{ route('admin.invite.form') }}"><button>Invite Admins</button></a>
        </div>
</div>
@endsection