@php
$user = auth()->user();
@endphp

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 07:33:19 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>LMS SMAN 12</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/logo/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/charts/apexcharts.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}>
    <!-- END: Vendor CSS-->

    {{-- BEGIN: Vendor DataTables --}}
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}>
    {{-- END: Vendor DataTables --}}

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/bootstrap-extended.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/colors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/components.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/themes/dark-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/themes/bordered-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/pages/dashboard-ecommerce.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/plugins/charts/chart-apex.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css') }}>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/style.css') }}>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i
                                class="ficon" data-feather="calendar"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{ $user->name }}</span><span
                                class="user-status">{{ $user->status }}</span></div><span
                            class="avatar"><img class="round"
                                src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40"
                                width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><i class="me-50"
                                data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i
                                class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item"
                            href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a
                            class="dropdown-item" href="app-chat.html"><i class="me-50"
                                data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings.html"><i class="me-50" data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a><a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a
                            class="dropdown-item" href="page-auth-login-v2.html"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><span
                            class="brand-logo">

                            <img src="{{ asset('app-assets/images/logo/logo.png') }}" alt="" srcset=""></span>
                        <h2 class="brand-text">SMAN 12</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1">1</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">SMAN 12</span></a></li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">User Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-siswa*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-siswa') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Daftar Siswa</span></a>
                        </li>
                        <li class="{{ request()->is('show-guru*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-guru') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="View">Daftar Guru</span></a>
                        </li>

                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">Siswa Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="User">Jadwal
                            Siswa</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('input-jadwal*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('input-jadwal') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Input Jadwal</span></a>
                        </li>
                        <li class="{{ request()->is('show-jadwal*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-jadwal') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Lihat Jadwal</span></a>
                        </li>
                </li>
            </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                        data-feather="book-open"></i><span class="menu-title text-truncate" data-i18n="User">Kelas
                        Siswa</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('show-kelas*') ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('show-kelas') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Lihat
                                Kelas</span></a>
                    </li>
            </li>
            </ul>
            <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                        data-feather="database"></i><span class="menu-title text-truncate" data-i18n="User">Data Siswa</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('show-data-siswa*') ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('show-data-siswa') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Daftar Siswa</span></a>
                    </li>
            </li>
            </ul>
            </li>
                <li class=" navigation-header"><span data-i18n="User Interface">Guru Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="User">Jadwal
                            Mengajar</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('input-jadwal*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('input-jadwal') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Input Jadwal</span></a>
                        </li>
                        <li class="{{ request()->is('show-jadwal*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-jadwal') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Lihat Jadwal</span></a>
                        </li>
                </li>
            </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                        data-feather="book-open"></i><span class="menu-title text-truncate" data-i18n="User">Kelas
                        Siswa</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('show-kelas*') ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('show-kelas') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Lihat
                                Kelas</span></a>
                    </li>
            </li>
            </ul>
            <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                        data-feather="database"></i><span class="menu-title text-truncate" data-i18n="User">Data Guru</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('show-data-guru*') ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('show-data-guru') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Daftar Guru</span></a>
                    </li>
            </li>
            </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="User Interface">Pelajaran Management</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                        class="menu-title text-truncate" data-i18n="User">Pelajaran Siswa</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Input
                                Pelajaran</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Lihat
                                Daftar Pelajaran</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Lihat
                                Daftar Guru</span></a>
                    </li>
            </li>
            </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="User Interface">Info Management</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                        class="menu-title text-truncate" data-i18n="User">Penilaian Siswa</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Input
                                Nilai</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Daftar
                                Nilai</span></a>
                    </li>
            </li>
            </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="User Interface">SPP Management</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="book"></i><span
                        class="menu-title text-truncate" data-i18n="User">Penilaian Siswa</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Input
                                Nilai</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Daftar
                                Nilai</span></a>
                    </li>
            </li>
            </ul>
            </li>

            {{-- OPTIONAL FOR FETURE --}}

            {{-- <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Configuration</span><i data-feather="more-horizontal"></i>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="database"></i><span class="menu-title text-truncate" data-i18n="RestApi">Rest API</span></a>
          <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="code"></i><span class="menu-title text-truncate" data-i18n="Appliaction">Appliaction</span></a>
          </li> --}}
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                @yield('content')


                <!-- BEGIN: Footer-->
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                        data-feather="arrow-up"></i></button>
                <!-- END: Footer-->


                <!-- BEGIN: Vendor JS-->
                <script src={{ asset('app-assets/vendors/js/vendors.min.js') }}></script>
                <!-- BEGIN Vendor JS-->

                <!-- BEGIN: Page Vendor JS-->
                <script src={{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap5.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}></script>

                <script src={{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}></script>
                <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>

                <!-- END: Page Vendor JS-->

                <!-- BEGIN: Theme JS-->
                <script src={{ asset('app-assets/js/core/app-menu.min.js') }}></script>
                <script src={{ asset('app-assets/js/core/app.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/customizer.min.js') }}></script>
                <!-- END: Theme JS-->

                <!-- BEGIN: Page JS-->
                <script src={{ asset('app-assets/js/scripts/forms/form-select2.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/pages/app-user-list.min.js') }}></script>
                <!-- END: Page JS-->

                <script>
                    $(window).on('load', function() {
                        if (feather) {
                            feather.replace({
                                width: 14,
                                height: 14
                            });
                        }
                    })
                </script>
</body>
<!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 07:33:55 GMT -->

</html>
