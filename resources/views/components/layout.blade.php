<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen">
    <div class="navbar bg-base-100">
        <div class="flex">
            <a class="btn btn-ghost text-2xl">UHUY</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1 text-lg">
                <li class="font-semibold"><a href="/">Dashboard</a></li>
                <li><a href="/order">order</a></li>
                <li><a href="/categoris">Categoris</a></li>
                <li><a href="/produc">produc</a></li>
                <li><a href="/user">User</a></li>
                <li><a href="/login">Login</a></li>
            </ul>
        </div>
    </div>
    @isset($title)
        <div class="text-2xl font-bold py-3">
            <h1>{{ $title }}</h1>
        </div>
    @endisset
    {{ $slot }}
</body>

</html>
