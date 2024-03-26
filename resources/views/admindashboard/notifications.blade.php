@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')

<link rel="stylesheet" href="{{ asset('css/admin.notifications.css') }}">

<h3>Notifications</h3>
<div class="inbox-container">    
    <div class="inbox-sidebar">
        <h2>Inbox</h2>
       
        <ul class="inbox-menu">
            <li><a href="#" id="inbox-tab">Inbox </a></li>
            <li><a href="#" id="notifications-tab">Notifications</a></li>
        </ul>
    </div>
    
    <div class="inbox-content" style="background-color:red" id="inbox-content">
        <!-- Messages will be displayed here -->
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const inboxContent = document.getElementById("inbox-content");

        const populateMessages = () => {
            fetch('{{ route('messages.fetch') }}')
                .then(response => response.json())
                .then(messages => {
                    inboxContent.innerHTML = ""; // Clear previous messages
                    const messageList = document.createElement("ul");
                    messages.forEach((message, index) => {
                        const messageItem = document.createElement("li");
                        messageItem.innerHTML = `
                            <h4 style=color:red;>${message.name}</h4>
                            <p>${message.message}</p>
                        `;
                        messageList.appendChild(messageItem);
                    });
                    inboxContent.appendChild(messageList);
                });
        };

        document.getElementById("inbox-tab").addEventListener("click", () => {
            populateMessages();
        });
        populateMessages();
    });
</script>

@endsection

