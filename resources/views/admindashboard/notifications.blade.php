@extends('admindashboard.layout')
@section('title', 'Notifications')
@section('content')

<link rel="stylesheet" href="{{ asset('css/admin.notifications.css') }}">

<div class="inbox-container">
    <div class="inbox-sidebar">
        <h2>Inbox</h2>
        <ul class="inbox-menu">
            <li><a href="#" id="inbox-tab">Inbox (10)</a></li>
            <li><a href="#" id="notifications-tab">Notifications</a></li>
        </ul>
    </div>
    <div class="inbox-content">
        <div class="message-list" id="message-list">
            <!-- Message items will be dynamically populated here -->
        </div>
        <div class="message-preview" id="message-preview">
            <!-- Message preview will be dynamically populated here -->
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Notification button click event
        document.getElementById("notifications-tab").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            
            // Simulate fetching notifications data (replace with actual AJAX call)
            const notificationsData = [
                { sender: "John Doe", subject: "Notification 1", date: "Mar 20, 2024", body: "Notification 1 body content." },
                { sender: "Alice Smith", subject: "Notification 2", date: "Mar 19, 2024", body: "Notification 2 body content." },
                // Add more notifications as needed
            ];
            
            // Generate notification list HTML
            const notificationListHTML = notificationsData.map(notification => `
                <div class="message-item">
                    <div class="message-sender">${notification.sender}</div>
                    <div class="message-subject">${notification.subject}</div>
                    <div class="message-date">${notification.date}</div>
                </div>
            `).join("");
            
            // Populate message list with notifications
            document.getElementById("message-list").innerHTML = notificationListHTML;
            
            // Select the first notification by default
            const firstNotification = notificationsData[0];
            showNotificationPreview(firstNotification);
        });
        
        // Function to show message preview
        function showNotificationPreview(notification) {
            const previewHTML = `
                <div class="message-header">
                    <div class="message-header-left">
                        <div class="message-header-sender">${notification.sender}</div>
                        <div class="message-header-subject">${notification.subject}</div>
                    </div>
                    <div class="message-header-right">
                        <div class="message-header-date">${notification.date}</div>
                    </div>
                </div>
                <div class="message-body">
                    <p>${notification.body}</p>
                </div>
            `;
            document.getElementById("message-preview").innerHTML = previewHTML;
        }
    });
</script>

@endsection
