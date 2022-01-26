<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('Layouts.head')
</head>
<body>
@include('Layouts.navebar')
@include('Layouts.sidebar')

@yield('content')

@include('Layouts.head')
@include('Layouts.script')
</body>
</html>