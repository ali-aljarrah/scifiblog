<!DOCTYPE html>
<html lang="en">
<head>
        <title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        @include('partials.header')
</head>
<body>
<body>
    <div id="app" style="background-color: #e5e7e9;">
        @include('partials.nav')
        @yield('mainContent')
    </div>
        @include('partials.footer')
</body>
</html>
