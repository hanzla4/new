<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Drezoc - Premium Multipurpose Admin & Dashboard Template" />
    <meta name="author" content="MyraStudio" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link href="{{ asset('libs/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/config.js') }}"></script>
    <livewire:styles />
</head>

<body>
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <div class="wrapper theme-2-active primary-color-pink">
        @include('layouts.nav')
        @include('layouts.sidebar')
        <div class="page-wrapper">
            @yield('content')
        </div>

    </div>
    <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div><script>document.write(new Date().getFullYear())</script> ©</div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-none d-md-flex gap-4 align-items-center justify-content-md-end">
                            <p class="mb-0">Design & Develop by <a target="_blank">Hanzala Abbas</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <script src="{{ asset('js/vendor.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('libs/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('libs/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>
    <livewire:scripts />
</body>

</html>
