<?php 
$conn=mysqli_connect("localhost","root","","hms");
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT request_id,Description,Priority,requested_at,hospital_id,name FROM hospital h JOIN ope_request opr ON h.hospital_id=opr.requested_by where opr.status='pending';";
$result=mysqli_query($conn,$sql);
 ?>
<!doctype html>
<html lang="en" dir="ltr">
    
<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:55:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Qompac UI Responsive Bootstrap 5 Admin Dashboard Template</title>
        <meta name="description" content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
        <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard,">
        <meta name="author" content="Iqonic Design">
        <meta name="DC.title" content="Qompac UI Responsive Bootstrap 5 Admin Dashboard Template">

        <!-- Favicon -->
        <link rel="shortcut icon" href="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/favicon.ico">
        
        <!-- Library / Plugin Css Build -->
        <link rel="stylesheet" href="assets/css/core/libs.min.css">
        
        <link rel="stylesheet" href="assets/vendor/sheperd/dist/css/sheperd.css">
        
        <!-- Flatpickr css -->
        <link rel="stylesheet" href="assets/vendor/flatpickr/dist/flatpickr.min.css">
        
        <!-- qompac-ui Design System Css -->
        <link rel="stylesheet" href="assets/css/qompac-ui.minf700.css?v=1.0.1">
        
        <!-- Custom Css -->
        <link rel="stylesheet" href="assets/css/custom.minf700.css?v=1.0.1">
        <!-- Dark Css -->
        <link rel="stylesheet" href="assets/css/dark.minf700.css?v=1.0.1">
        
        <!-- Customizer Css -->
        <link rel="stylesheet" href="assets/css/customizer.minf700.css?v=1.0.1" >
        
        <!-- RTL Css -->
        <link rel="stylesheet" href="assets/css/rtl.minf700.css?v=1.0.1">
        
        <link rel="stylesheet" href="assets/vendor/swiperSlider/swiper-bundle.min.css">
        
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">    </head>
    <body class="  ">
        <!-- loader Start -->
        <my-loader></my-loader>
        <!-- loader END -->
        <aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour" data-toggle="main-sidebar" data-sidebar="responsive">
            <my-logo></my-logo>
            <my-sidebar></my-sidebar>
            <div class="sidebar-footer"></div>
        </aside>
        <main class="main-content">
            <div class="position-relative ">
            <!--Nav Start-->
            <my-header></my-header>
            <!--Nav End-->
            </div>
            <div class="content-inner container-fluid pb-0" id="page_layout">
<div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
    <div class="d-flex flex-column">
        <h3>Quick Insights</h3>
        <p class="mb-0">Financial Dashboard</p>
    </div>
    <div class="d-flex justify-content-between align-items-center rounded flex-wrap gap-3">
        <div class="form-group mb-0">
            <select class="select2-basic-single js-states form-control" name="state" style="width: 100%;">
                <option >Past 30 Days</option>
                <option >Past 60 Days</option>
                <option >Past 90 Days</option>
                <option >Past 1 year</option>
                <option >Past 2 year</option>
            </select>
        </div>
        <div class="form-group mb-0">
            <input type="text" name="start" class="form-control range_flatpicker flatpickr-input active" placeholder="24 Jan 2022 to 23 Feb 2022" readonly="readonly">
        </div>
        <button type="button" class="btn btn-primary">Analytics</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-xl-8">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height">
                    <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                        <div class="header-title">
                            <h4>Sales Stastics</h4>
                        </div>
                         <div class="d-flex">
                            <div class="mx-3">
                                <p class="mb-0"><svg class="text-primary" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="5" r="5" fill="currentColor"/>
                                    </svg>  Total Sales </p>
                            </div>
                            <div class="mx-3">
                                <p class="mb-0"><svg class="text-secondary" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="5" r="5" fill="currentColor"/>
                                    </svg> Total Expense</p>
                            </div>
                            <div class="">
                                <p class="mb-0"><svg  class="text-tertiray" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="5" cy="5" r="5" fill="currentColor"/>
                                    </svg>  Total Profit</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sales-chart-02"  class="sales-chart-02"></div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h4 class=" card-title">Date</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="course-picker">
                    <input type="hidden" name="inline" class="d-none inline_flatpickr">
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card card-block card-stretch card-height">
            <div class="card-body">
                <div class="mb-5">
                    <div class="mb-2 d-flex justify-content-between align-items-center">
                        <span class="text-dark">Last Transaction</span>
                        <a class="badge rounded-pill bg-soft-primary" href="javascript:void(0);">
                            View Report
                        </a>
                    </div>
                    <div class="">
                        <h2 class="counter mb-2" style="visibility: visible;">$46,996</h2>
                        <p>This Month</p>
                    </div>
                </div>
                <div>
                    <div class="d-flex gap flex-column">
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-soft-primary avatar-60 rounded">
                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z" fill="currentColor"></path>
                                <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                            </svg>
                        </div>
                        <div style="width: 100%;">
                            <div class="d-flex justify-content-between  ">
                                <h6 class="mb-2">Balance</h6>
                                <h6 class="text-body">$2,386</h6>
                            </div>
                            <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;transition: width 2s ease 0s;"></div>
                            </div>
                        </div> 
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="bg-soft-info avatar-60 rounded">                            
                                <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M6.447 22C3.996 22 2 19.9698 2 17.4755V12.5144C2 10.0252 3.99 8 6.437 8L17.553 8C20.005 8 22 10.0302 22 12.5256V17.4846C22 19.9748 20.01 22 17.563 22H16.623H6.447Z" fill="currentColor"></path>
                                <path d="M11.455 2.22103L8.54604 5.06682C8.24604 5.36094 8.24604 5.83427 8.54804 6.12742C8.85004 6.41959 9.33704 6.41862 9.63704 6.12547L11.23 4.56623V6.06119V14.4515C11.23 14.8654 11.575 15.2014 12 15.2014C12.426 15.2014 12.77 14.8654 12.77 14.4515V4.56623L14.363 6.12547C14.663 6.41862 15.15 6.41959 15.452 6.12742C15.603 5.98036 15.679 5.78849 15.679 5.59566C15.679 5.40477 15.603 5.21291 15.454 5.06682L12.546 2.22103C12.401 2.07981 12.205 1.99995 12 1.99995C11.796 1.99995 11.6 2.07981 11.455 2.22103Z" fill="currentColor"></path>
                                </svg>                            
                        </div>
                        <div style="width: 100%;">
                            <div class="d-flex justify-content-between  ">
                                <h6 class="mb-2">Transfer</h6>
                                <h6 class="text-body">$4,765</h6>
                            </div>
                            <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                                <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;transition: width 2s ease 0s;"></div>
                            </div>
                        </div> 
                    </div><div class="d-flex align-items-center gap-3">
                        <div class="bg-soft-success avatar-60 rounded">     
                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z" fill="currentColor"></path>
                                <path d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z" fill="currentColor"></path>
                            </svg>
                        </div>
                        <div style="width: 100%;">
                            <div class="d-flex justify-content-between  ">
                                <h6 class="mb-2">Recived</h6>
                                <h6 class="text-body">$8,224</h6>
                            </div>
                            <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;transition: width 2s ease 0s;"></div>
                            </div>
                        </div>
                    </div>
                <div class="d-flex align-items-center gap-3">
                        <div class="bg-soft-danger avatar-60 rounded">     
                            <svg class="icon-35" width="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.9964 8.37513H17.7618C15.7911 8.37859 14.1947 9.93514 14.1911 11.8566C14.1884 13.7823 15.7867 15.3458 17.7618 15.3484H22V15.6543C22 19.0136 19.9636 21 16.5173 21H7.48356C4.03644 21 2 19.0136 2 15.6543V8.33786C2 4.97862 4.03644 3 7.48356 3H16.5138C19.96 3 21.9964 4.97862 21.9964 8.33786V8.37513ZM6.73956 8.36733H12.3796H12.3831H12.3902C12.8124 8.36559 13.1538 8.03019 13.152 7.61765C13.1502 7.20598 12.8053 6.87318 12.3831 6.87491H6.73956C6.32 6.87664 5.97956 7.20858 5.97778 7.61852C5.976 8.03019 6.31733 8.36559 6.73956 8.36733Z" fill="currentColor"></path>
                                <path opacity="0.4" d="M16.0374 12.2966C16.2465 13.2478 17.0805 13.917 18.0326 13.8996H21.2825C21.6787 13.8996 22 13.5715 22 13.166V10.6344C21.9991 10.2297 21.6787 9.90077 21.2825 9.8999H17.9561C16.8731 9.90338 15.9983 10.8024 16 11.9102C16 12.0398 16.0128 12.1695 16.0374 12.2966Z" fill="currentColor"></path>
                                <circle cx="18" cy="11.8999" r="1" fill="currentColor"></circle>
                            </svg>
                        </div>
                        <div style="width: 100%;">
                            <div class="d-flex justify-content-between  ">
                                <h6 class="mb-2">Outstanding</h6>
                                <h6 class="text-body">$1,224</h6>
                            </div>
                            <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                                <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 10%;transition: width 2s ease 0s;"></div>
                            </div>
                        </div>
                    </div></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card card-block card-stretch card-height">
            <div class="flex-wrap card-header d-flex justify-content-between border-0">
                <div class="header-title">
                    <h4 class=" card-title">Operation Request</h4>           
                </div>
                <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button"> Monthly
                    </span>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                    <a class="dropdown-item " href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item " href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item " href="javascript:void(0);">This Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class=" table-responsive border rounded">
                    <table id="basic-table" class="table mb-0 table-striped" role="grid">
                    <thead>
                        <tr>
                            <th>Hospital Name</th>
                            <th>Operation Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                           if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>".$row["name"]."</td>";
                                echo "<td>".$row["Description"]."</td>";
                                echo "<td><a href='operation/approve.php?request_id=".$row["request_id"]."&hospital_id=".$row["hospital_id"]."'><button type=\"button\" class=\"btn btn-primary rounded-pill mt-2\">Approve</button></a></td>";
                                echo "</tr>";
                            }}
                            else{
                                echo "<tr>";
                                echo "<td></td><td>No Request Found!</td>";
                                echo "</tr>";
                            }
                         ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-block card-stretch card-height">
            <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                <div class="header-title">
                    <h4>Sales Anylsis</h4>
                </div>
                <div class="dropdown">
                    <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton29" data-bs-toggle="dropdown" aria-expanded="false">All Tasks</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton29" style="">
                    <li><a class="dropdown-item" href="#">This Week</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div id="sales-chart-04" class="sales-chart-04"></div>
            </div>
        </div> 
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-block card-stretch card-height">
            <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                <div class="header-title">
                    <h4>To-Do List</h4>
                </div>
                <div class="dropdown">
                    <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton24" data-bs-toggle="dropdown" aria-expanded="false">All Tasks</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton24" style="">
                    <li><a class="dropdown-item" href="#">This Week</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between  mb-3">
                    <div class="w-100">
                        <h6>School Dashboard</h6>
                        <div class="d-flex align-items-center">
                            <div class="progress bg-soft-success shadow-none w-50" style="height: 6px">
                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                                <small class="ms-2">80% completed</small>
                            </div>
                            <small>Due in 3 Days</small>
                        </div>
                        <div class="dropdown">
                            <a href="#" class="text-gray" id="dropdownMenuButton25" data-bs-toggle="dropdown" aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="currentColor"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton25" style="">
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                </div>
                <div class="d-flex justify-content-between  mb-3">
                    <div class="w-100">
                        <h6>Fashion Theme</h6>
                        <div class="d-flex align-items-center">
                            <div class="progress bg-soft-danger shadow-none w-50" style="height: 6px">
                                <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="ms-2">15% completed</small>
                        </div>
                        <small>Due in 4 Days</small>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-gray" id="dropdownMenuButton61" data-bs-toggle="dropdown" aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="currentColor"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton61" style="">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-between  mb-3">
                    <div class="w-100">
                        <h6>Sidebar Patterns</h6>
                        <div class="d-flex align-items-center">
                            <div class="progress bg-soft-primary shadow-none w-50" style="height: 6px">
                                <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="ms-2">50% completed</small>
                        </div>
                        <small>Due in 2 Days</small>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-gray" id="dropdownMenuButton62" data-bs-toggle="dropdown" aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="currentColor"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton62" style="">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-between  mb-3">
                    <div class="w-100">
                        <h6>Menu Bar Update</h6>
                        <div class="d-flex align-items-center">
                            <div class="progress bg-soft-gray shadow-none w-50" style="height: 6px">
                                <div class="progress-bar bg-secondary" data-toggle="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="ms-2">35% completed</small>
                        </div>
                        <small>Due in 5 Days</small>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-gray" id="dropdownMenuButton63" data-bs-toggle="dropdown" aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="currentColor"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton63" style="">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="w-100">
                        <h6>Blog Theme</h6>
                        <div class="d-flex align-items-center">
                            <div class="progress bg-soft-success shadow-none w-50" style="height: 6px">
                                <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small class="ms-2">100% completed</small>
                        </div>
                        <small>Due in 1 Days</small>
                    </div>
                    <div class="dropdown">
                        <a href="#" class="text-gray" id="dropdownMenuButton64" data-bs-toggle="dropdown" aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z" fill="currentColor"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton64" style="">
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="flex-wrap card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4>Actvity Overview</h4>
                    
                </div>
            </div>
            <div class="card-body">
                <p class=" text-success mb-4">
                    <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#17904b" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                    </svg>
                    16% this month
                </p>
                <div class="d-flex align-items-top">
                    <h6 class="mb-0 text-left">07:45</h6>
                    <div class="profile-media ms-3 d-flex">
                        <div class="profile-dots-pills border-success"></div>
                        <div class="ms-3">
                            <h6 class="mb-0">$2400, Purchased a Wordpress Theme</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-top">
                    <h6 class="mb-0 text-left">08:50</h6>
                    <div class="profile-media ms-3 d-flex">
                        <div class="profile-dots-pills border-warning"></div>
                        <div class="ms-3">
                            <h6 class="mb-0">New order placed #8744152 of 3D Icons</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-top">
                    <h6 class="mb-0 text-left">10:00</h6>
                    <div class="profile-media ms-3 d-flex">
                        <div class="profile-dots-pills border-info"></div>
                        <div class="ms-3">
                            <h6 class="mb-0">Affilate Payout</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-top">
                    <h6 class="mb-0 text-left">13:15</h6>
                    <div class="profile-media ms-3 d-flex">
                        <div class="profile-dots-pills border-dark"></div>
                        <div class="ms-3">
                            <h6 class="mb-0">New user added in Qompac UI</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-top">
                    <h6 class="mb-0 text-left">15:30</h6>
                    <div class="profile-media ms-3 d-flex">
                        <div class="profile-dots-pills border-success"></div>
                        <div class="ms-3">
                            <h6 class="mb-0">Product added in Wish List</h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-top">
                    <h6 class="mb-0 text-left">18:40</h6>
                    <div class="profile-media ms-3 d-flex pb-0">
                        <div class="profile-dots-pills border-warning"></div>
                        <div class="ms-3">
                            <h6 class="mb-0">New order Placed <span class="text-primary">#87444892</span> of Dashboard</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label" aria-modal="true" role="dialog">
              <div class="offcanvas-header pb-0">
                  <div class="d-flex align-items-center">
                      <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
                  </div>
                  <div class="close-icon" data-bs-dismiss="offcanvas">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
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
                                              <input class="form-check-input custom-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked="">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-light">
                                                 <span>Light Theme</span> 
                                                  <div class="text-primary ">
                                                      <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"></rect>
                                                      </svg>
                                                  </div>
                                              </label>
                                          </div>
                                      </div>
                                       <div class=" mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100 ">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="dark" name="theme_scheme" id="color-mode-dark">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-dark">
                                                 <span>Dark Theme</span>
                                                 <div class="text-primary ">
                                                     <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"></rect>
                                                      </svg>
                                                 </div>                                    
                                              </label>
                                          </div>
                                      </div>
                                      <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="auto" name="theme_scheme" id="color-mode-auto">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="color-mode-auto">
                                                 <span>Device Default</span> 
                                                 <div class="text-primary ">
                                                      <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          <g clip-path="url(#clip0_507_92)">
                                                          <rect width="30" height="27" fill="white"></rect>
                                                          <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"></circle>
                                                          <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"></rect>
                                                          <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"></rect>
                                                          </g>
                                                          <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"></rect>
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
                                            <input type="radio" value="sidebar-white" class="btn-check" name="sidebar_color" id="sidebar-white" checked="">
                                            <label class="btn btn-border d-block" for="sidebar-white" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="White Menu">
                                                Light
                                            </label>
                                        </div>
                                        <div data-setting="radio">
                                            <input type="radio" value="sidebar-dark" class="btn-check" name="sidebar_color" id="sidebar-dark">
                                            <label class="btn btn-border d-block" for="sidebar-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Dark Menu">
                                                Dark
                                            </label>
                                        </div>
                                        <div data-setting="radio">
                                            <input type="radio" value="sidebar-color" class="btn-check" name="sidebar_color" id="sidebar-color">
                                            <label class="btn btn-border d-block" for="sidebar-color" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Colored Menu">
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
                                              <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                                  Mini
                                              </label>
                                          </div>
                                          <div data-setting="checkbox" class="text-center">
                                              <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}" class="btn-check" name="sidebar_type" id="sidebar-hover">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                                  Hover
                                              </label>
                                          </div>
                                          <div data-setting="checkbox" class="text-center">
                                              <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
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
                                              <input type="radio" value="sidebar-default navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                                  Rounded One
                                              </label>
                                          </div>
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                                  Rounded All
                                              </label>
                                          </div>
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                                  Pill One Side
                                              </label>
                                          </div>
                                          <div data-setting="radio" class="text-center">
                                              <input type="radio" value="sidebar-default navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                              <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
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
                                        <a href="#custom-color" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="custom-color">Custom</a>
                                        <div data-setting="radio">
                                          <input type="radio" value="theme-color-default" class="btn-check" name="theme_color" id="theme-color-default" data-colors="{&quot;primary&quot;: &quot;#7016d0&quot;, &quot;secondary&quot;: &quot;#aca4bc&quot;}">
                                          <label class="btn bg-transparent px-2 border-0" for="theme-color-default" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Reset Color" aria-label="Reset Color">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z" fill="#31BAF1"></path>
                                              <path d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z" fill="#0169CA"></path>
                                            </svg>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="collapse" id="custom-color">
                                      <div class="form-group d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-primary-color">Primary</label>
                                        <input class="" name="theme_color" data-extra="primary" type="color" id="custom-primary-color" value="#7016d0" data-setting="color">
                                      </div>
                                      <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-secondary-color">Secondary</label>
                                        <input class="" name="theme_color" data-extra="secondary" type="color" id="custom-secondary-color" value="#08B1BA" data-setting="color">
                                      </div>
                                    </div>
                                    <div class="grid-cols-5 mb-4 d-grid gap-3">
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-blue" class="btn-check" name="theme_color" id="theme-color-1" data-colors="{&quot;primary&quot;: &quot;#2185F4&quot;, &quot;secondary&quot;: &quot;#B1BBC6&quot;, &quot;tertiray&quot;: &quot;#FF8000&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-1" aria-label="Theme-1">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#2185F4"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1BBC6"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-gray" class="btn-check" name="theme_color" id="theme-color-2" data-colors="{&quot;primary&quot;: &quot;#34A853&quot;, &quot;secondary&quot;: &quot;#B1C6B7&quot;, &quot;tertiray&quot;: &quot;#EA4335&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-2" aria-label="Theme-2">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#34A853"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1C6B7"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-red" class="btn-check" name="theme_color" id="theme-color-3" data-colors="{&quot;primary&quot;: &quot;#553AF9&quot;, &quot;secondary&quot;: &quot;#B4B1C6&quot;, &quot;tertiray&quot;: &quot;#89F425&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-3" aria-label="Theme-3">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#553AF9"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#B4B1C6"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-yellow" class="btn-check" name="theme_color" id="theme-color-4" data-colors="{&quot;primary&quot;: &quot;#FF3003&quot;, &quot;secondary&quot;: &quot;#C6B5B1&quot;, &quot;tertiray&quot;: &quot;#0E0E0E&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-4" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-4" aria-label="Theme-4">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#FF3003"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#C6B5B1"></path></svg>
                                        </label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="theme-color-pink" class="btn-check" name="theme_color" id="theme-color-5" data-colors="{&quot;primary&quot;: &quot;#fa6aae&quot;, &quot;secondary&quot;: &quot;#cfc6c6&quot;, &quot;tertiray&quot;: &quot;#25C799&quot;}">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-5" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Theme-5" aria-label="Theme-5">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="26" height="26"> <circle cx="12" cy="12" r="10" fill="#fa6aae"></circle> <path d="M2,12 a1,1 1 1,0 20,0" fill="#cfc6c6"></path></svg>
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
                                        <input type="radio" value="container" class="btn-check" name="page_layout" id="page-layout-boxed">
                                        <label class="btn btn-border d-block" for="page-layout-boxed">Boxed</label>
                                      </div>
                                      <div data-setting="radio">
                                        <input type="radio" value="container-fluid" class="btn-check" name="page_layout" id="page-layout-full-width" checked="">
                                        <label class="btn btn-border d-block" for="page-layout-full-width">Full Width</label>
                                      </div>
                                    </div>
                                  </div>
                                  <hr class="hr-horizontal">
                                  <!-- Direction customizer start here -->
                                  <div>
                                      <h5 class="mb-3 mt-4">Direction</h5>
                                      <div class=" mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked="">
                                              <label class="form-check-label d-flex align-items-center justify-content-between" for="theme-scheme-direction-ltr">
                                                 <span>LTR</span>
                                                  <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"></circle>
                                                      <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"></rect>
                                                      <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"></rect>
                                                      <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"></rect>
                                                  </svg>
                                              </label>
                                          </div>
                                         
                                      </div>
                                       <div class="mb-3" data-setting="radio">
                                          <div class="form-check mb-0 w-100">
                                              <input class="form-check-input custom-redio-btn" type="radio" value="rtl" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                              <label class="form-check-label d-flex align-items-center justify-content-between " for="theme-scheme-direction-rtl">
                                                  <span>RTL</span>
                                                  <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"></circle>
                                                      <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"></rect>
                                                      <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"></rect>
                                                      <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"></rect>
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
        
        <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
          <svg class="icon-24 animated-rotate" width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
          </svg>
        </a>
    <!-- Live Customizer end -->
  
        <!-- Library Bundle Script -->
        <script src="assets/js/core/libs.min.js"></script>
        <!-- Plugin Scripts -->
        <!-- Tour plugin Start -->
        <script src="assets/vendor/sheperd/dist/js/sheperd.min.js"></script>
        <script src="assets/js/plugins/tour.js" defer></script>
        
        
        <!-- Flatpickr Script -->
        <script src="assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
        <script src="assets/js/plugins/flatpickr.js" defer></script>
        
        
        
          <!-- Select2 Script -->
          <script src="assets/js/plugins/select2.js" defer></script>
        
        
        
        
        <!-- Slider-tab Script -->
        <script src="assets/js/plugins/slider-tabs.js"></script>
        
        
        
        
        
        <!-- SwiperSlider Script -->
        <script src="assets/vendor/swiperSlider/swiper-bundle.min.js"></script>
        <script src="assets/js/plugins/swiper-slider.js" defer></script>
        <!-- Lodash Utility -->
        <script src="assets/vendor/lodash/lodash.min.js"></script>
        <!-- Utilities Functions -->
        <script src="assets/js/iqonic-script/utility.min.js"></script>
        <!-- Settings Script -->
        <script src="assets/js/iqonic-script/setting.min.js"></script>
        <!-- Settings Init Script -->
        <script src="assets/js/setting-init.js"></script>
        <!-- External Library Bundle Script -->
        <script src="assets/js/core/external.min.js"></script>
        <!-- Widgetchart Script -->
        <script src="assets/js/charts/widgetchartsf700.js?v=1.0.1" defer></script>
        <!-- Dashboard Script -->
        <script src="assets/js/charts/dashboardf700.js?v=1.0.1" defer></script>
        <!-- qompacui Script -->
        <script src="assets/js/qompac-uif700.js?v=1.0.1" defer></script>
        <script src="assets/js/sidebarf700.js?v=1.0.1" defer></script>

        <!-- My Script  -->
        <script src="my_js/header_footer_for_index.js"></script>       
    </body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:56:53 GMT -->
</html>
