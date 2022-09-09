<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes1.front.styles')
    @yield('pagestyles')
</head>
<body>
    @include('includes1.front.header')

    @yield('content')
    
@include('includes1.front.modal')
    @include('includes1.front.footer')

    @include('includes1.front.script')
    @yield('pageScript')

</body>

</html>