<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="dark" data-topbar-color="light">
<head>
    <meta charset="utf-8" />
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Drezoc - Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- App css -->
    <link href="css/style.min.css" rel="stylesheet" type="text/css">
    <link href="css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="js/config.js"></script>
</head>

<body>
    <div class="container d-flex align-items-center min-vh-100 justify-content-center">
        <div class="card shadow-lg rounded w-100 w-lg-75">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center w-75 mx-auto auth-logo mb-4">
                            <a class='logo-dark' href='index.html'>
                                <span><img src="assets/images/logo-dark.png" alt="" height="32"></span>
                            </a>
                            <a class='logo-light' href='index.html'>
                                <span><img src="assets/images/logo-light.png" alt="" height="32"></span>
                            </a>
                        </div>

                        <h1 class="mb-1 text-center" style="font-size:2rem;">Create an Account!</h1>

                        <p class="text-muted mb-4 text-center">Don't have an account? Create your own account, it takes less than a minute</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mb-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">


                                <x-primary-button class="ms-4 btn btn-primary w-100">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            </div>
                        </form>


                    </div> <!-- end .padding-5 -->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- end .w-100 -->
    </div> <!-- end container -->

    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

</body>
</html>
