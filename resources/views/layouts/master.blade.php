<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{!! asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')!!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.base.css')!!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.addons.css')!!}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{!! asset('css/style.css')!!}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{!! asset('images/favicon.png')!!}"/>
</head>

<body>
<div class="container-scroller">
    @include('layouts.header')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
            @yield('content')
            </div>
            @include('layouts.footer');
        </div>

    </div>
</div>
<script src="{!! asset('vendors/js/vendor.bundle.base.js') !!}"></script>
<script src="{!! asset('vendors/js/vendor.bundle.addons.js') !!}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{!! asset('js/off-canvas.js') !!}"></script>
<script src="{!! asset('js/misc.js') !!}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{!! asset('js/dashboard.js') !!}"></script>
<script>
    var base_url="{{ URL::to('/').'/'  }}"
</script>

@stack('scripts')

</body>
</html>
