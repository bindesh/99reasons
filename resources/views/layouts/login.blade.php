<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!! asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.base.css')!!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.addons.css')!!}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{!! asset('css/style.css')!!}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{!! asset('images/favicon.png')!!}" />
</head>


<body>
@yield('content')
<script src="{!! asset('vendors/js/vendor.bundle.base.js')!!}"></script>
<script src="{!! asset('vendors/js/vendor.bundle.addons.js')!!}"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="{!! asset('js/off-canvas.js')!!}"></script>
<script src="{!! asset('js/misc.js')!!}'"></script>
<!-- endinject -->
</body>

</html>