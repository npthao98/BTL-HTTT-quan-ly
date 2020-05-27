<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @include('customer.layouts.header')
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        @include('customer.layouts.footer')
    </footer>

</body>
</html>
