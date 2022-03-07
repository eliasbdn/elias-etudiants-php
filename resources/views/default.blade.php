
<!DOCTYPE html>
<html lang="fr">
<head>
    @include('head')
    <title>@yield('title')</title>
</head>
<body>
    <header class="row">
        @include('header')
    </header>
    <div id="main" class="row">
        @yield('content')
    </div>
    <footer>
        @include('footer')
    </footer>
</body>
</html>
