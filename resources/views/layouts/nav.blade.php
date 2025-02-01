<!-- Topbar Start -->
<div class="navbar-custom">
    <div class="topbar">
        <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">
            <!-- Brand Logo -->
            <div class="logo-box">
                <a class="logo-light" href="/drezoc/layouts/">
                    <img src="{{ asset('images/logo-light.png') }}" alt="logo" class="logo-lg" height="20">
                    <img src="{{ asset('images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="20">
                </a>
                <a class="logo-dark" href="/drezoc/layouts/">
                    <img src="{{ asset('images/logo-dark.png') }}" alt="dark logo" class="logo-lg" height="20">
                    <img src="{{ asset('images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="20">
                </a>
            </div>
            <button class="button-toggle-menu waves-effect waves-dark rounded-circle">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-2">
            <li class="d-none d-md-inline-block">
                <a class="nav-link waves-effect waves-dark" href="#" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen font-size-24"></i>
                </a>
            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-dark arrow-none" data-bs-toggle="dropdown" href="#">
                    <i class="mdi mdi-magnify font-size-24"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg p-0">
                    <form class="input-group p-3">
                        <input type="text" class="form-control" placeholder="Search ...">
                        <button class="btn btn-primary rounded-start-0" type="submit">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                    </form>
                </div>
            </li>
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-dark arrow-none" data-bs-toggle="dropdown" href="#">
                    <i class="mdi mdi-bell font-size-24"></i>
                    <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-lg py-0">
                    <div class="p-2 border-bottom">
                        <h6 class="m-0 font-size-16 fw-semibold">Notification</h6>
                    </div>
                    <div class="px-1" style="max-height: 300px;" data-simplebar>
                        <a href="#" class="dropdown-item notify-item">New user registered</a>
                        <a href="#" class="dropdown-item notify-item">Comment on Admin</a>
                    </div>
                    <a href="#" class="dropdown-item text-center text-primary">View All</a>
                </div>
            </li>
            <li class="nav-link waves-effect waves-dark" id="theme-mode">
                <i class="bx bx-moon font-size-24"></i>
            </li>
            <li class="dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-dark" data-bs-toggle="dropdown" href="#">
                    <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                    <span class="ms-1 d-none d-md-inline-block">Henry <i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item notify-item">
                        {{ __('My Account') }}
                    </a>
                    <a href="#" class="dropdown-item notify-item">Settings</a>
                    <a href="/drezoc/layouts/pages-lock-screen" class="dropdown-item notify-item">Lock Screen</a>
                    <div class="dropdown-divider"></div>
                     <!-- Authentication -->
                     <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Topbar End -->
