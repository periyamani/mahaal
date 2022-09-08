<!DOCTYPE html>
<html lang="en">

<head>

    @include('includes.admin.styles')
    @yield('pagestyles')
</head>
<body>
    @include('includes.admin.header')
    @include('includes.admin.side_nav')
    @yield('content')
    
   
    

    @include('includes.admin.script')
    @yield('pageScript')

</body>

</html>