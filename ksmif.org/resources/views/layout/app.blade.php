<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{getenv('APP_NAME')}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/icon/tab-icon.png" />
    <script src="lib/jquery.js"></script>
    @vite('resources/css/app.css')
    <style>
        body {
            width: 100%;
            margin: 0px;
        }

        .background-pattern {
            position: fixed;
            top: -235px;
            left: -499px;
            width: 200%;
            height: 200%;
            background: repeat 499px 235px url("images/icon/background.svg");
            animation: bg-gerak 2s ease infinite;
        }

        @keyframes bg-gerak {
            0% {
                transform: translate(0px, 0px);
            }
            100% {
                transform: translate(499px, 235px);
            }
        }
    </style>
</head>
<body>
    <div class="background-pattern"></div>
    @include('layout.loading')
    @includeWhen($navbar != "homepage", 'layout.mainNavbar')
    @yield('content')
    @include('layout.mainFooter')
</body>
</html>
