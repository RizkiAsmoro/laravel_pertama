<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Laravel</title>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div>
        <nav>
            <ul>
                <ul class="navigation">
                <li><a href="/welcome">Welcome</li>
                <li><a href="/about">About</li>
                <li><a href="/contact">Contact</li>
            </ul>
        </nav>
    @yield('content')
    @yield('sidebar')
    </div>
</body>
</html>