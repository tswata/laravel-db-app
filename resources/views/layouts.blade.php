<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-DB-App</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    @yield('title')

    @yield('content')  
    
    @include('components.footer')

</body>



</html>