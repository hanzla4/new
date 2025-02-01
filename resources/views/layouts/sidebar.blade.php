<div class="main-menu">
    <div class="logo-box">
        <a class='logo-light' href='/drezoc/layouts/'>
            <img src="{{ asset('images/logo-light.png') }}" alt="logo" class="logo-lg" height="18">
            <img src="{{ asset('images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="24">
        </a>
        <a class='logo-dark' href='/drezoc/layouts/'>
            <img src="{{ asset('images/logo-dark.png') }}" alt="dark logo" class="logo-lg" height="18">
            <img src="{{ asset('images/logo-sm.png') }}" alt="small logo" class="logo-sm" height="24">
        </a>
    </div>

    <div data-simplebar>
        <ul class="app-menu">
            <li class="menu-title">Menu</li>
            <li class="menu-item">
                <a class='menu-link waves-effect' href='/drezoc/layouts/'>
                    <span class="menu-icon"><i data-lucide="airplay"></i></span>
                    <span class="menu-text">Dashboards</span>
                    <span class="badge bg-info rounded-pill ms-auto">3</span>
                </a>
            </li>

            <li class="menu-title">Custom</li>
            <li class="menu-item">
                <a class='menu-link waves-effect' href='/drezoc/layouts/apps-calendar'>
                    <span class="menu-icon"><i data-lucide="calendar"></i></span>
                    <span class="menu-text">Calendar</span>
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuExpages" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="copy"></i></span>
                    <span class="menu-text">Extra Pages</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuExpages">
                    <ul class="sub-menu">
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-starter'><span class="menu-text">Starter</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-invoice'><span class="menu-text">Invoice</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-login'><span class="menu-text">Log In</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-register'><span class="menu-text">Register</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-recoverpw'><span class="menu-text">Recover Password</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-lock-screen'><span class="menu-text">Lock Screen</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-404'><span class="menu-text">Error 404</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/pages-500'><span class="menu-text">Error 500</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="panel-left"></i></span>
                    <span class="menu-text">Layouts</span>
                    <span class="badge bg-blue ms-auto">New</span>
                </a>
                <div class="collapse" id="menuLayouts">
                    <ul class="sub-menu">
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/layout-horizontal'><span class="menu-text">Horizontal</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/layout-sidenav-light'><span class="menu-text">Sidenav Light</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/layout-topbar-dark'><span class="menu-text">Topbar Dark</span></a></li>
                    </ul>
                </div>
            </li>

            <li class="menu-title">Components</li>
            <li class="menu-item">
                <a href="#menuComponentsui" data-bs-toggle="collapse" class="menu-link waves-effect">
                    <span class="menu-icon"><i data-lucide="briefcase"></i></span>
                    <span class="menu-text">UI Elements</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuComponentsui">
                    <ul class="sub-menu">
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-alerts'><span class="menu-text">Alerts</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-buttons'><span class="menu-text">Buttons</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-cards'><span class="menu-text">Cards</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-carousel'><span class="menu-text">Carousel</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-dropdowns'><span class="menu-text">Dropdowns</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-video'><span class="menu-text">Embed Video</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-general'><span class="menu-text">General UI</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-grid'><span class="menu-text">Grid</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-images'><span class="menu-text">Images</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-list-group'><span class="menu-text">List Group</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-modals'><span class="menu-text">Modals</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-offcanvas'><span class="menu-text">Offcanvas</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-placeholders'><span class="menu-text">Placeholders</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-progress'><span class="menu-text">Progress</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-spinners'><span class="menu-text">Spinners</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-tabs-accordions'><span class="menu-text">Tabs & Accordions</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-tooltips-popovers'><span class="menu-text">Tooltips & Popovers</span></a></li>
                        <li class="menu-item"><a class='menu-link' href='/drezoc/layouts/ui-typography'><span class="menu-text">Typography</span></a></li>
                    </ul>
                </div>
            </li>

            <!-- Remaining menu items follow same optimized structure -->

        </ul>
    </div>
</div>
