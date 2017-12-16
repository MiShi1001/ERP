<html>
<head>
    @include('layouts.partial.head')

    <title>@yield('title')|ERP</title>

</head>

<body>
@include('layouts.partial.nav')

    @yield('content')

    </body>

</html>