@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.notifications.css') }}">  

    <title>Title of your HTML page</title>
</head>
<body>

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

    <script src="/public/js/admin.notifications.js"></script>
</body>
</html>






















        @endsection