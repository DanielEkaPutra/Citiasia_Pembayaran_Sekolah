<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('auth/images/favicon/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('auth/css/theme.css') }}">

    <title><?= $judul?></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>
    <!-- Theme JS -->
    <!-- build:js @@webRoot/assets/js/theme.min.js -->
    <script src="{{ asset('auth/js/main.js') }}"></script>
    <script src="{{ asset('auth/js/feather.js') }}"></script>
    <script src="{{ asset('auth/js/copyButton.js') }}"></script>
    <script src="{{ asset('auth/js/sidebarMenu.js') }}"></script>
</head>

<body>
    @yield('content')
</body>

</html>