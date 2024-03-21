@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')
<link rel="stylesheet" href="{{ asset('css/admin.notifications.css') }}">  
<div class="buttons">
        <button onclick="notifySuccess()">
        Success
        </button>
        <button onclick="notifyError()">
        Error
        </button>
        <button onclick="notifyInfo()">
        Info
        </button>
</div>

<div id="notification-area">
     </div>
</body>
<script src="{{ asset('js/notifications.js') }}"></script> 
</html>






















        @endsection