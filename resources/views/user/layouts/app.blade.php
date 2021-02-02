<!DOCTYPE html>
<html lang="en">
@include('user.layouts.head')
<body>
    @include('user.layouts.navigation')
    @yield('content')
    @include('user.layouts.footer')
    @include('user.layouts.script')
</body>
</html>