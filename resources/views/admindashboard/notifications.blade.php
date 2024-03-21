@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')
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
        <div class="notification success">
                This is demo success notification
        </div>
        <div class="notification error">
                This is demo error notification
        </div>
        <div class="notification info">
                This is demo info notification
        </div>
</div>

























        @endsection