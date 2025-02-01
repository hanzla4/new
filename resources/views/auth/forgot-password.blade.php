<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Forgot Password </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- App custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="js/config.js"></script>


    <style>
        @media (min-width: 992px) {
            .col-lg-6 {
                margin-top: 70px;
                width: 80%;
            }
        }

        .bg-login {
            background: url(../images/forget.jpg);
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card shadow-lg rounded my-5 overflow-hidden">
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-login rounded-left"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center w-75 mx-auto auth-logo mb-4">
                                    <a class="logo-dark" href="index.html">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="32"></span>
                                    </a>
                                    <a class="logo-light" href="index.html">
                                        <span><img src="assets/images/logo-light.png" alt="" height="32"></span>
                                    </a>
                                </div>

                                <h1 class="h5 mb-1" style="font-size: 1.9375rem;">Reset Password</h1>
                                <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>

                                <!-- Forgot Password Form -->
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mb-4">
                                        <x-input-label for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="d-flex justify-content-center">
                                        <x-primary-button class="btn btn-primary w-100">
                                            {{ __('Email Password Reset Link') }}
                                        </x-primary-button>
                                    </div>
                                </form>

                                <!-- Links for Sign In or Sign Up -->
                                <div class="row mt-4 text-center">
                                    <div class="col-12">
                                        <p class="text-muted mb-0">
                                            Don't have an account? <a class="text-muted font-weight-medium ms-1" href="{{ route('register') }}"><b>Sign Up</b></a>
                                        </p>
                                    </div>
                                </div>

                            </div> <!-- end .p-5 -->
                        </div> <!-- end .col-lg-7 -->
                    </div> <!-- end .row -->
                </div> <!-- end .card -->
            </div> <!-- end .col-lg-6 -->
        </div> <!-- end .row -->
    </div> <!-- end .container -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
