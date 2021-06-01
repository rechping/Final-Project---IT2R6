<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>

    <link rel="stylesheet" href="mini_lib/css/animate.css">
    <link rel="stylesheet" href="mini_lib/css/bootstrap.css">
    <link rel="stylesheet" href="mini_lib/css/hover.min.css">
    <link rel="stylesheet" href="mini_lib/css/ionicons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    @yield('content')

    <script src="mini_lib/js/jquery.min.js"></script>
    <script src="mini_lib/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    @yield('custom-script')

</body>

</html>