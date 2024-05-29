<!DOCTYPE html>
<html lang="en">

<head>
    @include('public_view.layouts.header')
</head>
<style>
    .max200 {
        max-width: 200px;
    }

    @media (max-width: 1024px) {
        .max200 {
            max-width: fit-content;
        }
    }   
</style>

<body id="body" style="background-color: #fafafa;  overflow-x: hidden;">
    @include('public_view.layouts.navbar')

    @yield('content')

    @include('public_view.layouts.footer')
</body>
@include('public_view.layouts.script')

</html>
