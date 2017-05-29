<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Buku Tamu') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <!--  Light Bootstrap Table core CSS    -->
     <link href={{asset('assets/css/light-bootstrap-dashboard.css')}} rel="stylesheet" />
 
 
     <!--  CSS for Demo Purpose, don't include it in your project     -->
     <link href={{asset('assets/css/demo.css')}} rel="stylesheet" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
