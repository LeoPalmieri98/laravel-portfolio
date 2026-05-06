<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite("resources/js/app.js")
</head>
<body>
    <div class="container">
        <h1 class="mb-4 my-3">
            @yield('title')
        </h1>
        <p>
            @yield('content')
        </p>
    </div>
</body>
</html>