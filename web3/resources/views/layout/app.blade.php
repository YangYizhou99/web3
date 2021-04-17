<html>
    <head>
        <title>
            @yield('title','news')
        </title>
        @include('layout.style')
    </head>

    <body>
        @include('layout.header')
        <div>
            @yield("content")
        </div>
        @include("layout.footer")
        @include("layout.script")
    </body>
</html>
