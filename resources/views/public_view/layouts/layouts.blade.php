<!DOCTYPE html>
<html lang="en">

<head>
    @include('public_view.layouts.header')
</head>

<body style="background-color: #fafafa;">
    @include('public_view.layouts.navbar')

    @yield('content')
</body>
@include('public_view.layouts.footer')

</html>
