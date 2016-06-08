<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('menubar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer');
        </div>

    </body>
</html>