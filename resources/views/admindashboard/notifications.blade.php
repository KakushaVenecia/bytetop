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
            <!-- Message items will be added dynamically -->
        </div>
        <div class="message-preview" id="message-preview">
            <!-- Message preview will be added dynamically -->
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const messages = [
            {
                serial: 1,
                preview: "Stock arrived - Feb 20, 2024 10:00 AM",
                full: "Hi Bytetop Team,\n\nYour Order number 22394 containing Keyboards x 10pcs @ £20 each  has been successfully delivered at the  Bytetop Warehouse on 20 February 2024.\n\nThank you again for doing business with us. We hope to have the pleasure of serving you again in the future.\n\nBest regards,\nJohn"
            },
            {
                serial: 2,
                preview: "Stock arrived - Feb 19, 2024 09:30 AM",
                full: "Hi Bytetop Team,\n\nYour Order number 1291 containing Monitors x 23pcs @ £50 each  has been successfully delivered at the  Bytetop Warehouse on 19 February 2024.\n\nThank you again for doing business with us. We hope to have the pleasure of serving you again in the future.\n\nBest regards,\nJohn"
            },
            {
                serial: 3,
                preview: "Stock arrived - Feb 13, 2024 03:15 PM",
                full: "Hi Bytetop Team,\n\nYour Order number 44562 containing CPU x 19pcs @ £60 each  has been successfully delivered at the  Bytetop Warehouse on 13 February 2024.\n\nThank you again for doing business with us. We hope to have the pleasure of serving you again in the future.\n\nBest regards,\nJohn"
            }
        ];

        const notifications = [
            {
                serial: 1,
                preview: "2 pcs of Dell Keyboard left. - Mar 18, 2024 11:45 AM",
                full: "This is to notify you that you have only 2 pieces of Dell Keyboard left. Thank you"
            },
            {
                serial: 2,
                preview: "1 pcs of HP monitor left. - Mar 17, 2024 01:20 PM",
                full: "This is to notify you that you have only 1 piece of HP monitor left. Thank you"
            },
            {
                serial: 3,
                preview: "5 pcs of HP Pavillion Laptop left. - Mar 16, 2024 09:10 AM",
                full: "This is to notify you that you have only 5 pieces of HP Pavillion Laptop left. Thank you"
            },
            {
                serial: 4,
                preview: "4 pcs of Apple MacBook Pro A1990 left. - Mar 15, 2024 04:30 PM",
                full: "This is to notify you that you have only 4 pieces of Apple MacBook Pro A1990 left. Thank you"
            }
        ];

        const messageList = document.getElementById("message-list");
        const messagePreview = document.getElementById("message-preview");

        const populateMessages = () => {
            messageList.innerHTML = "";
            messages.forEach((message, index) => {
                const messageItem = document.createElement("div");
                messageItem.classList.add("message-item");
                messageItem.textContent = `${message.serial}. ${message.preview}`;
                messageItem.addEventListener("click", () => {
                    showFullMessage(message.full);
                });
                messageList.appendChild(messageItem);
            });
        };

        const showFullMessage = (fullMessage) => {
            messagePreview.innerHTML = `<div class="full-message"><p>${fullMessage}</p></div>`;
        };

        const notificationList = document.getElementById("message-list");
        const notificationPreview = document.getElementById("message-preview");

        const populateNotifications = () => {
            notificationList.innerHTML = "";
            notifications.forEach((notification, index) => {
                const notificationItem = document.createElement("div");
                notificationItem.classList.add("notification-item");
                notificationItem.textContent = `${notification.serial}. ${notification.preview}`;
                notificationItem.addEventListener("click", () => {
                    showFullNotification(notification.full);
                });
                notificationList.appendChild(notificationItem);
            });
        };

        const showFullNotification = (fullNotification) => {
            notificationPreview.innerHTML = `<div class="full-notification"><p>${fullNotification}</p></div>`;
        };

        document.getElementById("inbox-tab").addEventListener("click", () => {
            populateMessages();
        });

        document.getElementById("notifications-tab").addEventListener("click", () => {
            populateNotifications();
        });
    });
</script>

@endsection
