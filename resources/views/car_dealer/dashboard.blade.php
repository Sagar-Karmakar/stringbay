<!DOCTYPE html>
<html>
<head>
    <title>Dealer Dashboard</title>
</head>
<body>
    <h1>Dealer Dashboard</h1>

    <h2>Notifications</h2>
    @if($notifications->isEmpty())
        <p>No notifications.</p>
    @else
        <form action="{{ route('car_dealer.notifications.markAsRead') }}" method="POST">
            @csrf
            <button type="submit">Mark All as Read</button>
        </form>
        <ul>
            @foreach ($notifications as $notification)
                <li>
                    A customer {{ $notification->data['customer_name'] }} requested the car: {{ $notification->data['car_make'] }} {{ $notification->data['car_model'] }}
                    at {{ $notification->created_at }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
