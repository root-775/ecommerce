<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- Customize styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <!-- font awesome styles -->
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.ico') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app"></div>
    <script>
        window.website = {!! json_encode(
            array(
                "url" => "http://127.0.0.1:8000",
            )
        ) !!}
    </script>

	<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    @vite('resources/js/app.js')
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo-1.4.3.1-min.js') }}"></script>
    <script src="{{ asset('assets/js/shop.js') }}"></script>
</body>

</html>
