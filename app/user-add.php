<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/app/user-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:47 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Qompac UI
        Responsive Bootstrap 5 Admin Dashboard Template</title>
    <meta name="description"
        content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Qompac UI Responsive Bootstrap 5 Admin Dashboard Template">

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/favicon.ico">

    <!-- Library / Plugin Css Build -->
    <!-- <link rel="stylesheet" href="../../assets/css/core/libs.min.css"> -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/core/libs.min.css"; ?>">

    <!-- qompac-ui Design System Css -->
    <!-- <link rel="stylesheet" href="../../assets/css/qompac-ui.minf700.css?v=1.0.1"> -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/qompac-ui.minf700.css?v=1.0.1";?>">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/custom.minf700.css?v=1.0.1";?>">
    <!-- Dark Css -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/dark.minf700.css?v=1.0.1";?>">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/customizer.minf700.css?v=1.0.1";?>">

    <!-- RTL Css -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/rtl.minf700.css?v=1.0.1";?>">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/css/my_css/add_user.css?v=1.0.1";?>">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/loader.webp"
                    alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour"
        data-toggle="main-sidebar" data-sidebar="responsive">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="../index.html" class="navbar-brand">

                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <svg class=" icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                fill="currentColor" />
                            <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                        </svg>
                    </div>
                    <div class="logo-mini">
                        <svg class=" icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                fill="currentColor" />
                            <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                        </svg>
                    </div>
                </div>
                <!--logo End-->
                <h4 class="logo-title" data-setting="app_name">Qompac UI</h4>
            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">

                    <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z"
                            fill="white" />
                        <path
                            d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z"
                            fill="white" />
                    </svg>
                </i>
            </div>
        </div>
        <my-sidebar></my-sidebar>
        <div class="sidebar-footer"></div>
    </aside>
    <main class="main-content">
        <my-header></my-header>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div>
                <div class="row">
                    <form id="fm" action="../my_php/user_data_insert.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="col-xl-3 col-lg-4" id="left-div">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Add New User</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="profile-img-edit position-relative">
                                            <img src="<?php echo "http://" . $_SERVER['SERVER_NAME'] ."/Compac-admin/assets/images/avatars/01.png"?>" alt="profile-pic"
                                                class="theme-color-default-img profile-pic rounded avatar-100"
                                                loading="lazy">
                                            <label for="upload">
                                                <div class="upload-icone bg-primary">
                                                    <svg class="upload-button icon-14" width="14" height="14"
                                                        viewBox="0 0 24 24">
                                                        <path fill="#ffffff"
                                                            d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                                    </svg>
                                                </div>
                                            </label>
                                            <input class="file-upload" type="file" id="upload" name="profile"
                                                style="display: none; visibility: none;">
                                        </div>
                                        <div class="img-extension mt-3">
                                            <div class="d-inline-block align-items-center">
                                                <span>Only</span>
                                                <a href="javascript:void(0);">.jpg</a>
                                                <a href="javascript:void(0);">.png</a>
                                                <a href="javascript:void(0);">.jpeg</a>
                                                <span>allowed</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-label">Qualifications:</div>
                                    <div class="form-group" id="doctor-qualifications">
                                        <input type="text" name="qualifications[]" id="qualifications0"
                                            class="selectpicker form-control" placeholder="Enter qualification"required />
                                    </div>
                                    <button type="button" id="addQualifications">Add Qualifications</button>
                                    <div class="form-group">
                                        <label class="form-label" for="doctor-specializations">Specialization:</label>
                                        <input name="doctor-specializations" id="doctor-specializations"
                                            class="selectpicker form-control" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="doctor-job-titles">Current Position:</label>
                                        <input name="doctor-job-titles" id="doctor-job-titles"class="selectpicker form-control"
                                            data-style="py-0" />

                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="experience">Years Of Experience:</label>
                                        <input type="number" name="experience" id="experience"
                                            class="selectpicker form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-8" id="right-div">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">New User Information</h4>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="new-user-info">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="fname">First Name:</label>
                                                <input type="text" class="form-control" id="fname" name="fname"
                                                    placeholder="First Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="lname">Last Name:</label>
                                                <input type="text" class="form-control"id="lname" name="lname"
                                                    placeholder="Last Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="gender">Select Gender:</label>
                                                <select name="gender" id="gender" class="form-control" required>
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="add">Address:</label>
                                                <input type="text" class="form-control" id="add"name="add" placeholder="Address">
                                            </div>
                                            <div class="form-group col-md-6" id="nomcontainer">
                                                Mobile Number: 
                                                <!-- <label class="form-label" for="mobno"></label>-->
                                                <input type="text" class="form-control" id="mobno0" name="mobno[]"
                                                    placeholder=" Enter Mobile Number"> 
                                            </div>
                                            <button type="button" id="addNumber">Add Number</button>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="email">Email:</label>
                                                <input type="email" class="form-control" id="email"name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="pno">Pin Code:</label>
                                                <input type="text" class="form-control" id="pno" name="pno" placeholder="Pin Code">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="city">Town/City:</label>
                                                <input type="text" class="form-control" id="city" name="city"
                                                    placeholder="Town/City">
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="mb-3">Security</h5>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="form-label" for="uname">User Name:</label>
                                                <input type="text" class="form-control" name="uname" id="uname"
                                                    placeholder="User Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="pass">Password:</label>
                                                <input type="password" class="form-control" name="pass"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="form-label" for="rpass">Repeat Password:</label>
                                                <input type="password" class="form-control" id="rpass"
                                                    placeholder="Repeat Password ">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary" onclick="return validateForm()">Add New User</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Footer Section Start -->
        <my-footer></my-footer>
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->
    <!-- Live Customizer start -->
    <!-- Setting offcanvas start here -->
    <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false"
        data-bs-scroll="true" aria-labelledby="live-customizer-label" aria-modal="true" role="dialog">
        <div class="offcanvas-header pb-0">
            <div class="d-flex align-items-center">
                <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
            </div>
            <div class="close-icon" data-bs-dismiss="offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
        <div class="offcanvas-body data-scrollbar">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="text-center mb-4">
                            <h5 class="d-inline-block">Style Setting</h5>
                        </div>
                        <div>
                            <!-- Theme start here -->
                            <div class="mb-4">
                                <h5 class="mb-3">Theme</h5>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn" type="radio" value="light"
                                            name="theme_scheme" id="color-mode-light" checked="">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="color-mode-light">
                                            <span>Light Theme</span>
                                            <div class="text-primary ">
                                                <svg width="60" height="27" viewBox="0 0 60 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        fill="white"></rect>
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                    <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                        fill="#DADCE0"></rect>
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        stroke="#DADCE0" stroke-width="0.75"></rect>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100 ">
                                        <input class="form-check-input custom-redio-btn" type="radio" value="dark"
                                            name="theme_scheme" id="color-mode-dark">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="color-mode-dark">
                                            <span>Dark Theme</span>
                                            <div class="text-primary ">
                                                <svg width="60" height="27" viewBox="0 0 60 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        fill="#1E2745"></rect>
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                    <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                        fill="#DADCE0"></rect>
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        stroke="currentColor" stroke-width="0.75"></rect>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn" type="radio" value="auto"
                                            name="theme_scheme" id="color-mode-auto">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="color-mode-auto">
                                            <span>Device Default</span>
                                            <div class="text-primary ">
                                                <svg class="rounded" width="60" height="27" viewBox="0 0 60 27"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        fill="#1E2745"></rect>
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                    <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                        fill="#DADCE0"></rect>
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <g clip-path="url(#clip0_507_92)">
                                                        <rect width="30" height="27" fill="white"></rect>
                                                        <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                        <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5"
                                                            fill="#DADCE0"></rect>
                                                        <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                            fill="currentColor"></rect>
                                                    </g>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                        stroke="#DADCE0" stroke-width="0.75"></rect>
                                                    <defs>
                                                        <clipPath id="clip0_507_92">
                                                            <rect width="30" height="27" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <!-- Color customizer end here -->
                            <hr class="hr-horizontal">
                            <!-- Menu start here -->
                            <div>
                                <h6 class="mt-4 mb-3">Menu Color</h6>
                                <div class="d-grid gap-3 grid-cols-3 mb-3">
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-white" class="btn-check" name="sidebar_color"
                                            id="sidebar-white" checked="">
                                        <label class="btn btn-border d-block" for="sidebar-white"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="White Menu">
                                            Light
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-dark" class="btn-check" name="sidebar_color"
                                            id="sidebar-dark">
                                        <label class="btn btn-border d-block" for="sidebar-dark"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Dark Menu">
                                            Dark
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-color" class="btn-check" name="sidebar_color"
                                            id="sidebar-color">
                                        <label class="btn btn-border d-block" for="sidebar-color"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Colored Menu">
                                            Color
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Menu Style start here -->
                            <div>
                                <h5 class="mt-4 mb-3">Menu Style</h5>
                                <div class="d-grid gap-3 grid-cols-3 mb-4">
                                    <div data-setting="checkbox" class="text-center">
                                        <input type="checkbox" value="sidebar-mini" class="btn-check"
                                            name="sidebar_type" id="sidebar-mini">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="sidebar-mini">
                                            Mini
                                        </label>
                                    </div>
                                    <div data-setting="checkbox" class="text-center">
                                        <input type="checkbox" value="sidebar-hover"
                                            data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                            class="btn-check" name="sidebar_type" id="sidebar-hover">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="sidebar-hover">
                                            Hover
                                        </label>
                                    </div>
                                    <div data-setting="checkbox" class="text-center">
                                        <input type="checkbox" value="sidebar-soft" class="btn-check"
                                            name="sidebar_type" id="sidebar-soft">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="sidebar-soft">
                                            Soft
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Style end here -->

                            <hr class="hr-horizontal">

                            <!-- Active Menu Style start here -->

                            <div class="mb-4">
                                <h5 class="mt-4 mb-3">Active Menu Style</h5>
                                <div class="d-grid gap-3 grid-cols-2">
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-rounded" class="btn-check"
                                            name="sidebar_menu_style" id="navs-rounded">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-rounded">
                                            Rounded One
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-rounded-all" class="btn-check"
                                            name="sidebar_menu_style" id="navs-rounded-all">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-rounded-all">
                                            Rounded All
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-pill" class="btn-check"
                                            name="sidebar_menu_style" id="navs-pill">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-pill">
                                            Pill One Side
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-pill-all" class="btn-check"
                                            name="sidebar_menu_style" id="navs-pill-all">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-pill-all">
                                            Pill All
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Color customizer start here -->
                            <div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mt-4 mb-3">Color Customizer</h6>
                                    <div class="d-flex align-items-center">
                                        <a href="#custom-color" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="custom-color">Custom</a>
                                        <div data-setting="radio">
                                            <input type="radio" value="theme-color-default" class="btn-check"
                                                name="theme_color" id="theme-color-default"
                                                data-colors="{&quot;primary&quot;: &quot;#7016d0&quot;, &quot;secondary&quot;: &quot;#aca4bc&quot;}">
                                            <label class="btn bg-transparent px-2 border-0" for="theme-color-default"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-original-title="Reset Color" aria-label="Reset Color">
                                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                        fill="#31BAF1"></path>
                                                    <path
                                                        d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                        fill="#0169CA"></path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="custom-color">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-primary-color">Primary</label>
                                        <input class="" name="theme_color" data-extra="primary" type="color"
                                            id="custom-primary-color" value="#7016d0" data-setting="color">
                                    </div>
                                    <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-secondary-color">Secondary</label>
                                        <input class="" name="theme_color" data-extra="secondary" type="color"
                                            id="custom-secondary-color" value="#08B1BA" data-setting="color">
                                    </div>
                                </div>
                                <div class="grid-cols-5 mb-4 d-grid gap-3">
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-blue" class="btn-check"
                                            name="theme_color" id="theme-color-1"
                                            data-colors="{&quot;primary&quot;: &quot;#2185F4&quot;, &quot;secondary&quot;: &quot;#B1BBC6&quot;, &quot;tertiray&quot;: &quot;#FF8000&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-1" aria-label="Theme-1">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#2185F4"></circle>
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1BBC6"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-gray" class="btn-check"
                                            name="theme_color" id="theme-color-2"
                                            data-colors="{&quot;primary&quot;: &quot;#34A853&quot;, &quot;secondary&quot;: &quot;#B1C6B7&quot;, &quot;tertiray&quot;: &quot;#EA4335&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-2" aria-label="Theme-2">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#34A853"></circle>
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1C6B7"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-red" class="btn-check" name="theme_color"
                                            id="theme-color-3"
                                            data-colors="{&quot;primary&quot;: &quot;#553AF9&quot;, &quot;secondary&quot;: &quot;#B4B1C6&quot;, &quot;tertiray&quot;: &quot;#89F425&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-3" aria-label="Theme-3">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#553AF9"></circle>
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#B4B1C6"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-yellow" class="btn-check"
                                            name="theme_color" id="theme-color-4"
                                            data-colors="{&quot;primary&quot;: &quot;#FF3003&quot;, &quot;secondary&quot;: &quot;#C6B5B1&quot;, &quot;tertiray&quot;: &quot;#0E0E0E&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-4" aria-label="Theme-4">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#FF3003"></circle>
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#C6B5B1"></path>
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="theme-color-pink" class="btn-check"
                                            name="theme_color" id="theme-color-5"
                                            data-colors="{&quot;primary&quot;: &quot;#fa6aae&quot;, &quot;secondary&quot;: &quot;#cfc6c6&quot;, &quot;tertiray&quot;: &quot;#25C799&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-5"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Theme-5" aria-label="Theme-5">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#fa6aae"></circle>
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#cfc6c6"></path>
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Color customizer end here -->
                            <hr class="hr-horizontal">
                            <div>
                                <h6 class="d-inline-block mb-3 me-2">Page Style </h6>
                                <div class="d-grid gap-3 grid-cols-2 mb-4">
                                    <div data-setting="radio">
                                        <input type="radio" value="container" class="btn-check" name="page_layout"
                                            id="page-layout-boxed">
                                        <label class="btn btn-border d-block" for="page-layout-boxed">Boxed</label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="container-fluid" class="btn-check" name="page_layout"
                                            id="page-layout-full-width" checked="">
                                        <label class="btn btn-border d-block" for="page-layout-full-width">Full
                                            Width</label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Direction customizer start here -->
                            <div>
                                <h5 class="mb-3 mt-4">Direction</h5>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn" type="radio" value="ltr"
                                            name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-ltr" checked="">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="theme-scheme-direction-ltr">
                                            <span>LTR</span>
                                            <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"></circle>
                                                <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B">
                                                </rect>
                                                <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2"
                                                    rx="1.6" fill="#80868B"></rect>
                                                <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125"
                                                    stroke="currentColor" stroke-width="0.75"></rect>
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                                <div class="mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn" type="radio" value="rtl"
                                            name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-rtl">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between "
                                            for="theme-scheme-direction-rtl">
                                            <span>RTL</span>
                                            <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)"
                                                    fill="currentColor"></circle>
                                                <rect width="34" height="5" rx="2"
                                                    transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"></rect>
                                                <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6"
                                                    transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"></rect>
                                                <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125"
                                                    transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor"
                                                    stroke-width="0.75"></rect>
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <!-- Direction customizer end here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings sidebar end here -->

    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas"
        data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
        <svg class="icon-24 animated-rotate" width="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round"></circle>
        </svg>
    </a>
    <!-- Live Customizer end -->

    <!-- Library Bundle Script -->
    <script src="../assets/js/core/libs.min.js"></script>
    <!-- Plugin Scripts -->

    <!-- Slider-tab Script -->
    <script src="../assets/js/plugins/slider-tabs.js"></script>
    <!-- Lodash Utility -->
    <script src="../assets/vendor/lodash/lodash.min.js"></script>
    <!-- Utilities Functions -->
    <script src="../assets/js/iqonic-script/utility.min.js"></script>
    <!-- Settings Script -->
    <script src="../assets/js/iqonic-script/setting.min.js"></script>
    <!-- Settings Init Script -->
    <script src="../assets/js/setting-init.js"></script>
    <!-- External Library Bundle Script -->
    <script src="../assets/js/core/external.min.js"></script>
    <!-- Widgetchart Script -->
    <script src="../assets/js/charts/widgetchartsf700.js?v=1.0.1" defer></script>
    <!-- Dashboard Script -->
    <script src="../assets/js/charts/dashboardf700.js?v=1.0.1" defer></script>
    <!-- qompacui Script -->
    <script src="../assets/js/qompac-uif700.js?v=1.0.1" defer></script>
    <script src="../assets/js/sidebarf700.js?v=1.0.1" defer></script>

    <!-- My script -->
    <script src="../my_js/my_script_for_add_user.js" defer></script>
    <!-- Header -->
    <script src="../my_js/header_footer.js"></script>
    <!-- <script>
        if (window.location.href.includes("localhost")) {
            const addRootRapo = document.querySelectorAll("img");
            const repoName = "/Compac-admin";

            for (let i = 0; i < addRootRapo.length; i++) {
                let val = addRootRapo[i].getAttribute("src");
                
                if (val != "" || val != "#") {
                    val = repoName + val;
                    console.log(val);
                    // addRootRapo[i].setAttribute("href", val);
                }
            }
        }
    </script> -->
</body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/app/user-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:48 GMT -->

</html>