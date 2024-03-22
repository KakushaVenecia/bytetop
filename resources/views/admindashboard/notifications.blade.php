@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')

<link rel="stylesheet" href="{{ asset('css/admin.notifications.css') }}">

    <div class="inbox-container">
        <div class="inbox-sidebar">
            <h2>Inbox</h2>
            <ul class="inbox-menu">
                <li class="active"><a href="#">Inbox (10)</a></li>
                <li><a href="#">Sent</a></li>
                <li><a href="#">Drafts</a></li>
                <li><a href="#">Trash</a></li>
            </ul>
        </div>
        <div class="inbox-content">
            <div class="message-list">
                <div class="message-item">
                    <div class="message-sender">John Doe</div>
                    <div class="message-subject">Regarding Project Update</div>
                    <div class="message-date">Oct 20, 2023</div>
                </div>
                <div class="message-item">
                    <div class="message-sender">Alice Smith</div>
                    <div class="message-subject">Meeting Reminder</div>
                    <div class="message-date">Oct 19, 2023</div>
                </div>
                <!-- More message items -->
            </div>
            <div class="message-preview">
                <div class="message-header">
                    <div class="message-header-left">
                        <div class="message-header-sender">John Doe</div>
                        <div class="message-header-subject">Regarding Project Update</div>
                    </div>
                    <div class="message-header-right">
                        <div class="message-header-date">Oct 20, 2023</div>
                    </div>
                </div>
                <div class="message-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                </div>
            </div>
        </div>
    </div>


<script src="{{ asset('js/notifications.js') }}"></script> 
</html>






















        @endsection