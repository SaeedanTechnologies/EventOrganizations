<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flat Able - Premium Admin Template by Phoenixcoded</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('backend/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
    <!-- Ensure jQuery is loaded first -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>


</head>

<body class="">
    <!-- [ navigation menu ] start -->
    @include('backend.organizer.partials.navbar')
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    @include('backend.organizer.partials.asidebar')
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        @yield('content')
    </div>



    <!-- Required Js -->
    <script src="{{asset('backend/assets/js/vendor-all.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/pcoded.min.js')}}"></script>

    <!-- Apex Chart -->
    <script src="{{asset('backend/assets/js/plugins/apexcharts.min.js')}}"></script>
    <!-- custom-chart js -->
    <script src="{{asset('backend/assets/js/pages/dashboard-main.js')}}"></script>
</body>

</html>