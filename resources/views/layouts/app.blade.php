<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kurse buchen')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Navigation</h1>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/admin/courses') }}">Adminbereich</a>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
