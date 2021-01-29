<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @include('include.home.style')
    <title>Tugas Framework</title>
</head>

<body>
    @include('include.home.header')

    @yield('content')

    @include('include.home.script')
</body>

</html>
