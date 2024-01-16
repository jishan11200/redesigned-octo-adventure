<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Subject: {{($subject) }}</p>
    {{-- <p>Message:  {!! Illuminate\Support\Str::htmlentities($message->getBody()) !!}</p> --}}
</body>
</html>
