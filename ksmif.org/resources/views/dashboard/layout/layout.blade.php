<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
     @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-row h-full">
        <div class="basis-40 border-r">
            @include('dashboard.layout.navbar')
        </div>
        <div class="basis-full">
            @yield('content')
        </div>
    </div>
    @include('layout.mainFooter')
</body>
</html>