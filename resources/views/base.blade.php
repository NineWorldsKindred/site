<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Nine Worlds Kindred</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        <div class="header">
            @section('header')
            @show
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @section('footer')
            @show
        </div>
    </div>
</body>
</html>