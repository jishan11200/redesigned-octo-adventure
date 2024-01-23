<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form Submission</title>
</head>
<body>
     {{-- <p>Name: {{ is_string($name) ? $name : '' }}</p>

    <p>Email: {{ is_string($email) ? $email : '' }}</p>

    <p>Subject: {{ is_string($subject) ? $subject : '' }}</p> --}}

    {{-- <p>Message: {{ is_string($message) ? $message : '' }}</p> --}}
    <p>Name: {{$name}}</p>
  <p>Email: {{$email}}</p>
  <p>Message: {{$body}}</p>
</body>
</html>
