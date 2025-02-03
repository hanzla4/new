
<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">


<!-- Mirrored from myrathemes.com/drezoc/layouts/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2025 11:08:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Drezoc - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />
<!-- DataTable CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">



    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>
</head>

<body>

    <livewire:styles />
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>


        @include('layouts.sidebar')
        @include('layouts.nav')

            @yield('content')

    <livewire:scripts />
 <!-- App js -->
 <script src="assets/js/vendor.min.js"></script>
 <script src="assets/js/app.js"></script>

 <!-- Jquery Sparkline Chart  -->
 <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

 <!-- Jquery-knob Chart Js-->
 <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>


 <!-- Morris Chart Js-->
 <script src="assets/libs/morris.js/morris.min.js"></script>

 <script src="assets/libs/raphael/raphael.min.js"></script>

 <!-- Dashboard init-->
 <script src="assets/js/pages/dashboard.js"></script>
 <!-- DataTable JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</body>



