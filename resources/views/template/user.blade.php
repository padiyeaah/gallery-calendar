<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Diaryku | Bagikan Kenanganmu</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/calendify/html/assets/images/favicon.ico" />

    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backendf700.css?v=1.0.1">
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">

    <!-- Calendar CSS -->
    <link rel='stylesheet' href='../assets/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='../assets/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='../assets/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='../assets/vendor/fullcalendar/list/main.css' />
</head>

<body class="fixed-top-navbar top-nav  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <div class="iq-top-navbar">
            <div class="container">
                <div class="iq-navbar-custom">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <a href="index.html"
                                class="header-logo d-flex justify-content-center align-items-center m-0">
                                {{-- <span>Diaryku</span> --}}
                                <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo"
                                    alt="logo">
                                <img src="../assets/images/logo-white.png"
                                    class="img-fluid rounded-normal darkmode-logo" alt="logo">
                            </a>
                        </div>
                        <div class="iq-menu-horizontal">
                            <nav class="iq-sidebar-menu">
                                <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                                    <a href="/" class="header-logo">
                                        <img src="../assets/images/logo.png" class="img-fluid rounded-normal"
                                            alt="logo">
                                    </a>
                                    <div class="iq-menu-bt-sidebar">
                                        <i class="las la-bars wrapper-menu"></i>
                                    </div>
                                </div>
                                <ul id="iq-sidebar-toggle" class="iq-menu d-flex">
                                    <li class="active">
                                        <a href="/" class="">
                                            <span>Home</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/search" class="">
                                            <span>Search</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/momenku" class="">
                                            <span>Momen ku</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/tagar" class="">
                                            <span>Tagar</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="change-mode">
                                <div class="custom-control custom-switch custom-switch-icon custom-control-indivne">
                                    <div class="custom-switch-inner">
                                        <p class="mb-0"> </p>
                                        <input type="checkbox" class="custom-control-input" id="dark-mode"
                                            data-active="true">
                                        <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                            <span class="switch-icon-left"><i
                                                    class="a-left ri-moon-clear-line"></i></span>
                                            <span class="switch-icon-right"><i class="a-right ri-sun-line"></i></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li class="nav-item nav-icon dropdown ml-3">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="las la-envelope"></i>
                                            <span class="badge badge-primary count-mail rounded-circle">2</span>
                                            <span class="bg-primary"></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="dropdownMenuButton2">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="cust-title p-3">
                                                        <h5 class="mb-0">All Messages</h5>
                                                    </div>
                                                    <div class="p-2">
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card p-2">
                                                                <div class="">
                                                                    <img class="avatar-40 rounded-small"
                                                                        src="../assets/images/user/u-1.jpg"
                                                                        alt="01">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Barry Emma Watson</h6>
                                                                    <small class="mb-0">We Want to see you
                                                                        On..</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card p-2">
                                                                <div class="">
                                                                    <img class="avatar-40 rounded-small"
                                                                        src="../assets/images/user/u-2.jpg"
                                                                        alt="02">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Lorem Ipsum Watson</h6>
                                                                    <small class="mb-0">Can we have a Call?</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card p-2">
                                                                <div class="">
                                                                    <img class="avatar-40 rounded-small"
                                                                        src="../assets/images/user/u-3.jpg"
                                                                        alt="03">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Why do we use it?</h6>
                                                                    <small class="mb-0">Thank You but now we
                                                                        Don't...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="right-ic btn-block position-relative p-3 border-top text-center"
                                                        href="#" role="button">
                                                        View All
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle dropdown-toggle"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="las la-bell"></i>
                                            <span class="badge badge-primary count-mail rounded-circle">2</span>
                                            <span class="bg-primary"></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="dropdownMenuButton">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="cust-title p-3">
                                                        <h5 class="mb-0">Notifications</h5>
                                                    </div>
                                                    <div class="p-2">
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card p-2">
                                                                <div class="">
                                                                    <img class="avatar-40 rounded-small"
                                                                        src="../assets/images/user/u-1.jpg"
                                                                        alt="01">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Anne Effit</h6>
                                                                        <small class="mb-0">02 Min Ago</small>
                                                                    </div>
                                                                    <small class="mb-0">Manager</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card p-2">
                                                                <div class="">
                                                                    <img class="avatar-40 rounded-small"
                                                                        src="../assets/images/user/u-2.jpg"
                                                                        alt="02">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Eric Shun</h6>
                                                                        <small class="mb-0">05 Min Ago</small>
                                                                    </div>
                                                                    <small class="mb-0">Manager</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card p-2">
                                                                <div class="">
                                                                    <img class="avatar-40 rounded-small"
                                                                        src="../assets/images/user/u-3.jpg"
                                                                        alt="03">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Ken Tucky</h6>
                                                                        <small class="mb-0">10 Min Ago</small>
                                                                    </div>
                                                                    <small class="mb-0">Employee</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="right-ic btn-block position-relative p-3 border-top text-center"
                                                        href="#" role="button">
                                                        See All Notification
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="caption-content">
                                        <a href="#"
                                            class="search-toggle dropdown-toggle d-flex align-items-center"
                                            id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <img src="../assets/images/user/01.jpg"
                                                class="avatar-40 img-fluid rounded" alt="user">
                                            <div class="caption ml-3">
                                                <h6 class="mb-0 line-height">Padiyah<i
                                                        class="las la-angle-down ml-3"></i></h6>
                                            </div>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu user-dropdown"
                                            aria-labelledby="dropdownMenuButton3">
                                            <div class="card m-0">
                                                <div class="card-body p-0">
                                                    <div class="py-3">
                                                        <a href="https://templates.iqonic.design/calendify/html/app/user-profile.html"
                                                            class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <i class="ri-user-line mr-3"></i>
                                                                <h6>Account Settings</h6>
                                                            </div>
                                                        </a>
                                                        <a href="page-calendar-connections.html" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <i class="ri-calendar-line mr-3"></i>
                                                                <h6>Calender Connections</h6>
                                                            </div>
                                                        </a>
                                                        <a href="page-users.html" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <i class="ri-group-line mr-3"></i>
                                                                <h6>Users</h6>
                                                            </div>
                                                        </a>
                                                        <a href="privacy-policy.html" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <i class="ri-lock-line mr-3"></i>
                                                                <h6>Privacy & Security Settings</h6>
                                                            </div>
                                                        </a>
                                                        <a href="#popup1" data-toggle="modal"
                                                            data-target="#exampleModalCenter" class="iq-sub-card">
                                                            <div class="media align-items-center">
                                                                <i class="ri-links-line mr-3"></i>
                                                                <h6>Share Your Link</h6>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="right-ic p-3 border-top btn-block position-relative text-center"
                                                        href="auth-sign-in.html" role="button">
                                                        Logout
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-page">
            @yield('navbar-second')
            @yield('content')

            <!-- Modal -->
            <div class="modal fade create-workform" id="create-event" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="popup text-left">
                                <h4 class="mb-3">Create a Workflow</h4>
                                <div class="mb-3">
                                    <h5>When this happens</h5>
                                    <div class="content">
                                        <div class="form-group mb-0">
                                            <select name="type" class="selectpicker form-control"
                                                data-style="py-0">
                                                <option>Select..</option>
                                                <option>New event is scheduled</option>
                                                <option>Before event starts</option>
                                                <option>Event starts</option>
                                                <option>Event ends</option>
                                                <option>Event is canceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h5 class="mb-3">Do this</h5>
                                    <div class="form-group  mb-0">
                                        <select name="type" class="selectpicker form-control" data-style="py-0">
                                            <option>Select..</option>
                                            <option>Send email to invitee</option>
                                            <option>Send email to host</option>
                                            <option>Send text to invitee</option>
                                            <option>Send text to host</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                        <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                        <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left" id="popup">
                        <h4 class="mb-3">Add Action</h4>
                        <div class="content create-workform">
                            <div class="form-group">
                                <h6 class="form-label mb-3">Copy Your Link</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly
                                        value="calendly.com/rickoshea1234">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><i
                                                class="las la-link"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="form-label mb-3">Email Your Link</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly
                                        value="calendly.com/rickoshea1234">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon3"><i
                                                class="las la-envelope"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="form-label mb-3">Add to Your Website</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control" readonly
                                        value="calendly.com/rickoshea1234">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon4"><i
                                                class="las la-code"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <button type="submit" data-dismiss="modal"
                                        class="btn btn-primary mr-4">Cancel</button>
                                    <button type="submit" data-dismiss="modal"
                                        class="btn btn-outline-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright <span id="copyright">
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                    </span> <a href="#">Diaryku</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='../assets/vendor/fullcalendar/core/main.js'></script>
    <script src='../assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='../assets/vendor/fullcalendar/list/main.js'></script>
    <script src='../assets/vendor/fullcalendar/interaction/main.js'></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
</body>

</html>