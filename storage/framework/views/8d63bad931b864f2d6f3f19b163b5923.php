<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Help desk</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicon/favicon.ico')); ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/boxicons.css')); ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/core.css')); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/css/theme-default.css')); ?>"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo.css')); ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/libs/apex-charts/apex-charts.css')); ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo e(asset('assets/vendor/js/helpers.js')); ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="<?php echo e(route('dashboard')); ?>" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">

                            <svg class="svg-icon"
                                style="width: 3em; height: 3em;vertical-align: middle;fill: currentColor;overflow: hidden;"
                                viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M507.36 103C279.84 103 94.73 288.12 94.73 515.66a422.41 422.41 0 0 0 6.48 70.61c0 0.14 0.25 0.08 0.3 0.2a13.58 13.58 0 0 0 13 10.06 13.76 13.76 0 0 0 13.75-13.76 11.88 11.88 0 0 0-0.27-1.32l0.24-0.11a386 386 0 0 1-6-65.66c0-212.7 172.43-385.13 385.12-385.13S892.49 303 892.49 515.68 720.06 900.8 507.36 900.8c-142.14 0-266-77.22-332.69-191.79 0-0.07-0.09-0.11-0.11-0.18-0.18-0.3-0.38-0.59-0.55-0.89a13.61 13.61 0 0 0-12-7.37 13.76 13.76 0 0 0-13.75 13.75 13.42 13.42 0 0 0 2.74 7.83l-0.23 0.14c71.53 123 204.41 206 356.61 206C734.89 928.29 920 743.2 920 515.66S734.89 103 507.36 103z"
                                    fill="#3585F9" />
                                <path
                                    d="M507.37 570.43c82.32 0 149.31 67 149.31 149.31h27.51c0-97.49-79.32-176.82-176.82-176.82s-176.83 79.33-176.83 176.82h27.51c0-82.33 66.95-149.31 149.32-149.31z"
                                    fill="#3585F9" />
                                <path d="M344.29 719.74m-13.75 0a13.75 13.75 0 1 0 27.5 0 13.75 13.75 0 1 0-27.5 0Z"
                                    fill="#3585F9" />
                                <path d="M670.43 719.74m-13.75 0a13.75 13.75 0 1 0 27.5 0 13.75 13.75 0 1 0-27.5 0Z"
                                    fill="#3585F9" />
                                <path
                                    d="M531.854464 448.620636m-76.926146 76.926147a108.79 108.79 0 1 0 153.852293-153.852294 108.79 108.79 0 1 0-153.852293 153.852294Z"
                                    fill="#BAD4FF" />
                                <path
                                    d="M507.36 570.42c-75.15 0-136.29-61.14-136.29-136.3s61.14-136.3 136.29-136.3 136.3 61.15 136.3 136.3-61.14 136.3-136.3 136.3z m0-245.09a108.8 108.8 0 1 0 108.8 108.79 108.92 108.92 0 0 0-108.8-108.79z"
                                    fill="#3585F9" />
                            </svg>
                        </span>
                        <span class="app-brand-text demo text-body fw-bolder uppercase">Help Desk</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item <?php echo e(request()->is('dashboard') ? 'active' : ' '); ?>">

                        <a href="<?php echo e(route('dashboard')); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Super Admin')): ?>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Users and Roles</span>
                        </li>

                        <li class="menu-item <?php echo e(request()->is('manage-users') ? 'active' : ' '); ?>">
                            <a href="<?php echo e(route('manage.users')); ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                                <div data-i18n="Analytics">Manage Users</div>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Student')): ?>
                        <li class="menu-header small text-uppercase">
                            <span class="menu-header-text">Request</span>
                        </li>

                        <li class="menu-item <?php echo e(request()->is('submit-request') ? 'active' : ' '); ?>">
                            <a href="<?php echo e(route('submit-request')); ?>" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-pen"></i>
                                <div data-i18n="Analytics">Submit a request</div>
                            </a>
                        </li>
                    <?php endif; ?>


                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="https://ui-avatars.com/api/?name=<?php echo e(Auth::user()->name); ?>" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://ui-avatars.com/api/?name=<?php echo e(Auth::user()->name); ?>"
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo e(Auth::user()->name); ?></span>
                                                    <small
                                                        class="text-muted"><?php echo e(Auth::user()->roles[0]->name); ?></small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Support Agent')): ?>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <span class="d-flex align-items-center align-middle">
                                                    <i class="flex-shrink-0 bx bx-envelope me-2"></i>
                                                    <span class="flex-grow-1 align-middle me-2">Request in progress </span>
                                                    <span
                                                        class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20"><?php echo e(App\Models\Request::where('solved_id', Auth::user()->id)->where('status', 'in progress')->count()); ?></span>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                        </li>
                                    <?php endif; ?>

                                    <li>
                                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                        <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form"><?php echo csrf_field(); ?>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <?php echo e($slot); ?>


                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                , made with ❤️ by
                                <a href="#" target="_blank" class="footer-link fw-bolder">Brian Njeru</a>
                            </div>

                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo e(asset('assets/vendor/libs/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/popper/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/vendor/js/menu.js')); ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('assets/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>

    <!-- Main JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

    <!-- Page JS -->
    <script src="<?php echo e(asset('assets/js/dashboards-analytics.js')); ?>"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js')}}"></script>

    <script>
        window.addEventListener('show-user-modal', event => {
            $('#addUserModal').modal('show');
        })
        window.addEventListener('hide-user-modal', event => {
            $('#addUserModal').modal('hide');
        })
        window.addEventListener('show-image-modal', event => {
            $('#imageModal').modal('show');
        })
        window.addEventListener('hide-image-modal', event => {
            $('#imageModal').modal('hide');
        })
    </script>

    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\StudentHelpDesk\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>