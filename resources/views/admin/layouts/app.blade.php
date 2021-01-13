<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
   <div class="wrapper">
    @include('admin.layouts.navigation')
    @include('admin.layouts.sidebar')
    @yield('content')
    @include('admin.layouts.footer')
   </div>
    @include('admin.layouts.scripts')
</body>
</html>