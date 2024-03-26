@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')

<link rel="stylesheet" href="{{ asset('css/admin.notifications.css') }}">
<div class="user-bar" style="float: right">
    @if(auth()->check())
        <p>Hello, {{ auth()->user()->name }}</p>
    @endif
</div>
<h3>Notifications</h3>
<div class="inbox-container">    
    <div class="inbox-sidebar">
        <h2>Inbox</h2>
       
        <ul class="inbox-menu">
            <li><a href="#" id="inbox-tab">Inbox </a></li>
            <li><a href="#" id="notifications-tab">Notifications</a></li>
        </ul>
    </div>
    
    <div class="inbox-content">
        <div class="message-list" id="message-list">            
        </div>
        <div class="message-preview" id="message-preview">            
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const messageList = document.getElementById("message-list");
        const messagePreview = document.getElementById("message-preview");

        const populateMessages = () => {
            fetch('{{ route('messages.fetch') }}')
                .then(response => response.json())
                .then(messages => {
                    messageList.innerHTML = "";
                    messages.forEach((message, index) => {
                        const messageItem = document.createElement("div");
                        messageItem.classList.add("message-item");
                        messageItem.innerHTML = `
                            <div class="message-info">
                                <h4>${message.title}</h4>
                                <p>${message.content}</p>
                            </div>
                            <button class="view-button">View</button>
                        `;
                        messageItem.querySelector('.view-button').addEventListener("click", () => {
                            showFullMessage(message.content);
                        });
                        messageList.appendChild(messageItem);
                    });
                });
        };

        const showFullMessage = (fullMessage) => {
            messagePreview.innerHTML = `<div class="full-message"><p>${fullMessage}</p></div>`;
        };

        document.getElementById("inbox-tab").addEventListener("click", () => {
            populateMessages();
        });

        // Initial population
        populateMessages();
    });
</script>

@endsection

