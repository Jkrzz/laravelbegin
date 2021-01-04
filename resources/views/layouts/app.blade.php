<!DOCTYPE html>
<html lang="en">
<head>
   @include('layouts/head')
</head>
<body>
    <div id="wrapper">
        @include('layouts/navigation')
        @yield('content')
        @include('layouts/footer')
    </div>
    @include('layouts/script')
</body>
</html>