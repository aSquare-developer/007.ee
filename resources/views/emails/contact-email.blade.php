<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <h1>This message came from 007.ee - Contact Form</h1>
    <p>Email: {{ $details['email'] }}</p>
    <p>Message: {{ $details['message'] }}</p>
</body>
</html>