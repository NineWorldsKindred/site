<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Nine Worlds Kindred</title>

    <link href={{ elixir('css/app.css') }} rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container">
        <div class="header">
            @section('header')
                <img src="https://placehold.it/150x150" />
                <section class="nav">
                    <ul>
                       <li><a href="#">Nav Link</a></li>
                        <li><a href="#">Nav Link</a></li>
                        <li><a href="#">Nav Link</a></li>
                    </ul>
                </section>
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