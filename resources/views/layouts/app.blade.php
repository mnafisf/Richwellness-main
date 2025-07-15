<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rich Wellness')</title>
    <link href="/assets/homepage/img/favicon.png" rel="icon">
    <link href="/assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Rich Wellness</a>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
