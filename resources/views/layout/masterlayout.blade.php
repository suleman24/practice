<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUL - @yield('title','Default')</title> 
</head>
<body>
    <h1>Header</h1>
    @section('navbar')
    <nav>
        <a href="/">Home</a>
        <a href="/post">Post</a>
        <a href="/about">About</a>
        <a href="/users">Users</a>
    </nav>
    @show
    @hasSection('content')
        @yield('content')
    @else
    <h2>No Content</h2>
    @endif
    <h1>Footer</h1>

</body>
</html>