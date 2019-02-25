<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
        <div style="height: 200px; width: 200px; background-color: green">
            <h1>dfdf</h1>
        </div>
    </body>
</html>