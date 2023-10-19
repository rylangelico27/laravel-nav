<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    <header class="header">
        <a href="#" class="logo">Logo</a>

        <nav class="navbar">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('about') }}">About Us</a>
            <a href="{{ url('contact') }}">Contact</a>
            <a href="{{ url('list') }}">List</a>
            <a href="{{ url('services') }}">Services</a>
        </nav>
        <div class="content">
            <p>This is the Services  page.</p>
        </div>


</body>

</html>
