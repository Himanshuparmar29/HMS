<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hms");
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());
}
$username = $_SESSION["username"];
$sql = "SELECT * FROM hospital WHERE hospital_id='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/app/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:36 GMT -->

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
    <link rel="stylesheet" href="../assets/css/core/libs.min.css">

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="../assets/css/qompac-ui.minf700.css?v=1.0.1">

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/custom.minf700.css?v=1.0.1">
    <!-- Dark Css -->
    <link rel="stylesheet" href="../assets/css/dark.minf700.css?v=1.0.1">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="../assets/css/customizer.minf700.css?v=1.0.1">

    <!-- RTL Css -->
    <link rel="stylesheet" href="../assets/css/rtl.minf700.css?v=1.0.1">



    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
</head>

<body class="  ">
    <!-- loader Start -->
    <my-loader></my-loader>
    <!-- loader END -->
    <aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour"
        data-toggle="main-sidebar" data-sidebar="responsive">
        <my-logo></my-logo>
        <my-sidebar></my-sidebar>
        <div class="sidebar-footer"></div>
    </aside>
    <main class="main-content">
        <my-header></my-header>
        <div class="content-inner container-fluid pb-0" id="page_layout">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                        <h4 class="me-2 h4"><?php $username = $_SESSION["username"];
                                        echo $row["name"]; ?>
                                        </h4>
                                        <span> - <?php echo $row['type']; ?></span>
                                    </div>
                                </div>
                                <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab"
                                    id="profile-pills-tab" role="tablist">
                                    <!-- <li class="nav-item">
                              <a class="nav-link active show" data-bs-toggle="tab" href="#profile-feed" role="tab" aria-selected="false">Feed</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#profile-activity" role="tab" aria-selected="false">Activity</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-bs-toggle="tab" href="#profile-friends" role="tab" aria-selected="false">Friends</a>
                           </li> -->
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                            aria-selected="true">Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">Operation Requests</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="custom-table-effect table-responsive  border rounded">
                                <table class="table mb-0" id="datatable" data-toggle="data-table">
                                    <thead>
                                        <tr class="bg-white">
                                            <th scope="col">Request Id</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Requested At</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <?php
                                        $sql1 = "SELECT * FROM ope_request WHERE requested_by='$username'";
                                        $result1 = mysqli_query($conn, $sql);
                                        while ($row1 = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?php echo $row1["request_id"]; ?></td>
                                                <td><?php echo $row1["description"]; ?></td>
                                                <td><?php echo $row1["status"]; ?></td>
                                                <td><?php echo $row1["requested_at"]; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                            <a href="../operation/ope_request.php"><button type="button" class="btn btn-primary rounded-pill mt-2">Make Request</button></a>
                        </div>
                    </div>
                    <!-- <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">Profile</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        
                                        <div class="mt-3">
                                            <h3 class="d-inline-block">Austin Robertson</h3>
                                            <p class="d-inline-block pl-3"> - Web developer</p>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    <!-- <div class="card">
               <div class="card-header">
                  <div class="header-title">
                     <h4 class="card-title">News</h4>
                  </div>
               </div>
               <div class="card-body">
                  <ul class="list-inline m-0 p-0">
                     <li class="d-flex mb-2">
                        <div class="news-icon me-3">
                           <svg width="20" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4C22,2.89 21.1,2 20,2Z" />
                           </svg>
                        </div>
                        <p class="news-detail mb-0">there is a meetup in your city on fryday at 19:00. <a href="#">see details</a></p>
                     </li>
                     <li class="d-flex">
                        <div class="news-icon me-3">
                           <svg width="20" viewBox="0 0 24 24">
                              <path fill="currentColor" d="M20,2H4A2,2 0 0,0 2,4V22L6,18H20A2,2 0 0,0 22,16V4C22,2.89 21.1,2 20,2Z" />
                           </svg>
                        </div>
                        <p class="news-detail mb-0">20% off coupon on selected items at pharmaprix </p>
                     </li>
                  </ul>
               </div>
             </div> 
              <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Gallery</h4>
                            </div>
                            <span>132 pics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-card grid-cols-3">
                                <a data-fslightbox="gallery" href="../assets/images/icons/04.png">
                                    <img src="../assets/images/icons/04.png" class="img-fluid bg-soft-info rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/shapes/02.png">
                                    <img src="../assets/images/shapes/02.png" class="img-fluid bg-soft-primary rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/icons/08.png">
                                    <img src="../assets/images/icons/08.png" class="img-fluid bg-soft-info rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/shapes/04.png">
                                    <img src="../assets/images/shapes/04.png" class="img-fluid bg-soft-primary rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/shapes/03.png">
                                    <img src="../assets/images/shapes/03.png" class="img-fluid bg-soft-warning rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/shapes/06.png">
                                    <img src="../assets/images/shapes/06.png" class="img-fluid bg-soft-primary rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/shapes/05.png">
                                    <img src="../assets/images/shapes/05.png" class="img-fluid bg-soft-danger rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/shapes/08.png">
                                    <img src="../assets/images/shapes/04.png" class="img-fluid bg-soft-primary rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                                <a data-fslightbox="gallery" href="../assets/images/icons/01.png">
                                    <img src="../assets/images/icons/01.png" class="img-fluid bg-soft-success rounded"
                                        alt="profile-image" loading="lazy">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">Twitter Feeds</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="twit-feed">
                                <div class="d-flex align-items-center mb-2">
                                    <img class="rounded-pill img-fluid avatar-50 me-3 p-1 bg-soft-danger ps-2"
                                        src="../assets/images/avatars/03.png" alt="" loading="lazy">
                                    <div class="media-support-info">
                                        <h6 class="mb-0">Wade Warren</h6>
                                        <p class="mb-0">@wade007
                                            <span class="text-primary">
                                                <svg width="15" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="media-support-body">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry</p>
                                    <div class="d-flex flex-wrap">
                                        <a href="#" class="twit-meta-tag pe-2">#Html</a>
                                        <a href="#" class="twit-meta-tag pe-2">#Bootstrap</a>
                                    </div>
                                    <div class="twit-date">07 Jan 2021</div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="twit-feed">
                                <div class="d-flex align-items-center mb-2">
                                    <img class="rounded-pill img-fluid avatar-50 me-3 p-1 bg-soft-primary"
                                        src="../assets/images/avatars/04.png" alt="" loading="lazy">
                                    <div class="media-support-info">
                                        <h6 class="mb-0">Jane Cooper</h6>
                                        <p class="mb-0">@jane59
                                            <span class="text-primary">
                                                <svg width="15" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="media-support-body">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry</p>
                                    <div class="d-flex flex-wrap">
                                        <a href="#" class="twit-meta-tag pe-2">#Js</a>
                                        <a href="#" class="twit-meta-tag pe-2">#Bootstrap</a>
                                    </div>
                                    <div class="twit-date">18 Feb 2021</div>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="twit-feed">
                                <div class="d-flex align-items-center mb-2">
                                    <img class="rounded-pill img-fluid avatar-50 me-3 p-1 bg-soft-warning pt-2"
                                        src="../assets/images/avatars/02.png" alt="" loading="lazy">
                                    <div class="mt-2">
                                        <h6 class="mb-0">Guy Hawkins</h6>
                                        <p class="mb-0">@hawk_g
                                            <span class="text-primary">
                                                <svg width="15" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                                                </svg>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="media-support-body">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry</p>
                                    <div class="d-flex flex-wrap">
                                        <a href="#" class="twit-meta-tag pe-2">#Html</a>
                                        <a href="#" class="twit-meta-tag pe-2">#CSS</a>
                                    </div>
                                    <div class="twit-date">15 Mar 2021</div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="profile-content tab-content iq-tab-fade-up">
                        <div id="profile-feed" class="tab-pane fade active show">
                            <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">About</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- <div class="user-bio">
                                        <p>Tart I love sugar plum I love oat cake. Sweet roll caramels I love jujubes.
                                            Topping cake wafer.</p>
                                    </div> -->
                                    <div class="mt-2">
                                        <h6 class="mb-1">User Name:</h6>
                                        <p><?php echo $username; ?></p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Joined:</h6>
                                        <p><?php echo $row["joining_date"]; ?></p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Lives:</h6>
                                        <p><?php echo $row["address"] . "," . $row["city"] . "," . $row["pincode"]; ?>
                                        </p>
                                    </div>
                                    <div class="mt-2">
                                        <h6 class="mb-1">Email:</h6>
                                        <p><?php echo $row["email"]; ?></p>
                                    </div>
                                    <!-- <div class="mt-2">
                                        <h6 class="mb-1">Url:</h6>
                                        <p><a href="#" class="text-body" target="_blank"> www.bootstrap.com </a></p>
                                    </div> -->
                                    <div class="mt-2">
                                        <h6 class="mb-1">Contact:</h6>
                                        <p><?php echo $row["phone_number"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between pb-4">
                                    <div class="header-title">
                                        <div class="d-flex flex-wrap">
                                            <div class="media-support-user-img me-3">
                                                <img class="rounded-pill img-fluid avatar-60 bg-soft-danger p-1 ps-2"
                                                    src="../assets/images/avatars/02.png" alt="" loading="lazy">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h5 class="mb-0">Anna Sthesia</h5>
                                                <p class="mb-0 text-primary">colleages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown"
                                            aria-expanded="false" role="button">
                                            29 mins
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton7">
                                            <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="user-post">
                                        <a href="javascript:void(0);"><img src="../assets/images/pages/03-page.jpg"
                                                alt="post-image" class="img-fluid" loading="lazy"></a>
                                    </div>
                                    <div class="comment-area p-3">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center   me-3">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                    </svg>
                                                    <span class="ms-1">140</span>
                                                </div>
                                                <div class="d-flex align-items-center feather-icon">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z" />
                                                    </svg>
                                                    <span class="ms-1">140</span>
                                                </div>
                                            </div>
                                            <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                    data-bs-target="#share-btn" aria-controls="share-btn">
                                                    <span class="ms-1">
                                                        <svg width="18" class="me-1" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M18 16.08C17.24 16.08 16.56 16.38 16.04 16.85L8.91 12.7C8.96 12.47 9 12.24 9 12S8.96 11.53 8.91 11.3L15.96 7.19C16.5 7.69 17.21 8 18 8C19.66 8 21 6.66 21 5S19.66 2 18 2 15 3.34 15 5C15 5.24 15.04 5.47 15.09 5.7L8.04 9.81C7.5 9.31 6.79 9 6 9C4.34 9 3 10.34 3 12S4.34 15 6 15C6.79 15 7.5 14.69 8.04 14.19L15.16 18.34C15.11 18.55 15.08 18.77 15.08 19C15.08 20.61 16.39 21.91 18 21.91S20.92 20.61 20.92 19C20.92 17.39 19.61 16.08 18 16.08M18 4C18.55 4 19 4.45 19 5S18.55 6 18 6 17 5.55 17 5 17.45 4 18 4M6 13C5.45 13 5 12.55 5 12S5.45 11 6 11 7 11.45 7 12 6.55 13 6 13M18 20C17.45 20 17 19.55 17 19S17.45 18 18 18 19 18.45 19 19 18.55 20 18 20Z">
                                                            </path>
                                                        </svg>
                                                        99 Share</span></a>
                                            </div>
                                        </div>
                                        <hr>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor,
                                            ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis pharetra.
                                            Proin blandit ac massa sed rhoncus</p>
                                        <hr>
                                        <ul class="list-inline p-0 m-0">
                                            <li class="mb-2">
                                                <div class="d-flex">
                                                    <img src="../assets/images/avatars/03.png" alt="userimg"
                                                        class="avatar-50 p-1 pt-2 bg-soft-primary rounded-pill img-fluid"
                                                        loading="lazy">
                                                    <div class="ms-3">
                                                        <h6 class="mb-1">Monty Carlo</h6>
                                                        <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                        <div class="d-flex flex-wrap align-items-center mb-1">
                                                            <a href="javascript:void(0);" class="me-3">
                                                                <svg width="20" height="20" class="text-body me-1"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                                </svg>
                                                                like
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-3">
                                                                <svg width="20" height="20" class="me-1"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                                </svg>
                                                                reply
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-3">translate</a>
                                                            <span> 5 min </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex">
                                                    <img src="../assets/images/avatars/04.png" alt="userimg"
                                                        class="avatar-50 p-1 bg-soft-danger rounded-pill img-fluid"
                                                        loading="lazy">
                                                    <div class="ms-3">
                                                        <h6 class="mb-1">Paul Molive</h6>
                                                        <p class="mb-1">Lorem ipsum dolor sit amet</p>
                                                        <div class="d-flex flex-wrap align-items-center">
                                                            <a href="javascript:void(0);" class="me-3">
                                                                <svg width="20" height="20" class="text-body me-1"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                                </svg>
                                                                like
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-3">
                                                                <svg width="20" height="20" class="me-1"
                                                                    viewBox="0 0 24 24">
                                                                    <path fill="currentColor"
                                                                        d="M8,9.8V10.7L9.7,11C12.3,11.4 14.2,12.4 15.6,13.7C13.9,13.2 12.1,12.9 10,12.9H8V14.2L5.8,12L8,9.8M10,5L3,12L10,19V14.9C15,14.9 18.5,16.5 21,20C20,15 17,10 10,9" />
                                                                </svg>
                                                                reply
                                                            </a>
                                                            <a href="javascript:void(0);" class="me-3">translate</a>
                                                            <span> 5 min </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <form class="comment-text d-flex align-items-center mt-3"
                                            action="javascript:void(0);">
                                            <input type="text" class="form-control" placeholder="Lovely!">
                                            <div class="comment-attagement d-flex">
                                                <a href="javascript:void(0);" class="me-2 text-body">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0);" class="text-body">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="card">
                                <div class="card-header d-flex align-items-center justify-content-between pb-4">
                                    <div class="header-title">
                                        <div class="d-flex flex-wrap">
                                            <div class="media-support-user-img me-3">
                                                <img class="rounded-pill img-fluid avatar-60 p-1 bg-soft-info"
                                                    src="../assets/images/avatars/05.png" alt="" loading="lazy">
                                            </div>
                                            <div class="media-support-info mt-2">
                                                <h5 class="mb-0">Wade Warren</h5>
                                                <p class="mb-0 text-primary">colleages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton07"
                                            data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                            1 Hr
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton07">
                                            <a class="dropdown-item " href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <p class="p-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        nulla dolor, ornare at commodo non, feugiat non nisi. Phasellus faucibus mollis
                                        pharetra. Proin blandit ac massa sed rhoncus</p>
                                    <div class="comment-area p-3">
                                        <hr class="mt-0">
                                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center   me-3">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                                                    </svg>
                                                    <span class="ms-1">140</span>
                                                </div>
                                                <div class="d-flex align-items-center feather-icon">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z" />
                                                    </svg>
                                                    <span class="ms-1">140</span>
                                                </div>
                                            </div>
                                            <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="offcanvas"
                                                    data-bs-target="#share-btn" aria-controls="share-btn">
                                                    <span class="ms-1">
                                                        <svg width="18" class="me-1" viewBox="0 0 24 24">
                                                            <path fill="currentColor"
                                                                d="M18 16.08C17.24 16.08 16.56 16.38 16.04 16.85L8.91 12.7C8.96 12.47 9 12.24 9 12S8.96 11.53 8.91 11.3L15.96 7.19C16.5 7.69 17.21 8 18 8C19.66 8 21 6.66 21 5S19.66 2 18 2 15 3.34 15 5C15 5.24 15.04 5.47 15.09 5.7L8.04 9.81C7.5 9.31 6.79 9 6 9C4.34 9 3 10.34 3 12S4.34 15 6 15C6.79 15 7.5 14.69 8.04 14.19L15.16 18.34C15.11 18.55 15.08 18.77 15.08 19C15.08 20.61 16.39 21.91 18 21.91S20.92 20.61 20.92 19C20.92 17.39 19.61 16.08 18 16.08M18 4C18.55 4 19 4.45 19 5S18.55 6 18 6 17 5.55 17 5 17.45 4 18 4M6 13C5.45 13 5 12.55 5 12S5.45 11 6 11 7 11.45 7 12 6.55 13 6 13M18 20C17.45 20 17 19.55 17 19S17.45 18 18 18 19 18.45 19 19 18.55 20 18 20Z">
                                                            </path>
                                                        </svg>
                                                        99 Share
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <form class="comment-text d-flex align-items-center mt-3"
                                            action="javascript:void(0);">
                                            <input type="text" class="form-control" placeholder="Lovely!">
                                            <div class="comment-attagement d-flex">
                                                <a href="javascript:void(0);" class="me-2 text-body">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20A8,8 0 0,0 20,12M22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2A10,10 0 0,1 22,12M10,9.5C10,10.3 9.3,11 8.5,11C7.7,11 7,10.3 7,9.5C7,8.7 7.7,8 8.5,8C9.3,8 10,8.7 10,9.5M17,9.5C17,10.3 16.3,11 15.5,11C14.7,11 14,10.3 14,9.5C14,8.7 14.7,8 15.5,8C16.3,8 17,8.7 17,9.5M12,17.23C10.25,17.23 8.71,16.5 7.81,15.42L9.23,14C9.68,14.72 10.75,15.23 12,15.23C13.25,15.23 14.32,14.72 14.77,14L16.19,15.42C15.29,16.5 13.75,17.23 12,17.23Z" />
                                                    </svg>
                                                </a>
                                                <a href="javascript:void(0);" class="text-body">
                                                    <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                                        <path fill="currentColor"
                                                            d="M20,4H16.83L15,2H9L7.17,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6A2,2 0 0,0 20,4M20,18H4V6H8.05L9.88,4H14.12L15.95,6H20V18M12,7A5,5 0 0,0 7,12A5,5 0 0,0 12,17A5,5 0 0,0 17,12A5,5 0 0,0 12,7M12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15Z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div id="profile-activity" class="tab-pane fade">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Activity</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div
                                        class="iq-timeline0 m-0 d-flex align-items-center justify-content-between position-relative">
                                        <ul class="list-inline p-0 m-0">
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-primary text-primary">
                                                </div>
                                                <h6 class="float-left mb-1">Client Login</h6>
                                                <small class="float-right mt-1">24 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-success text-success">
                                                </div>
                                                <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                                <small class="float-right mt-1">23 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-danger text-danger">
                                                </div>
                                                <h6 class="float-left mb-1">Dev Meetup</h6>
                                                <small class="float-right mt-1">20 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans <a href="#">gummi bears</a>gummi
                                                        bears jelly lollipop apple</p>
                                                    <div class="iq-media-group iq-media-group-1">
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                                        </a>
                                                        <a href="#" class="iq-media-1">
                                                            <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-primary text-primary">
                                                </div>
                                                <h6 class="float-left mb-1">Client Call</h6>
                                                <small class="float-right mt-1">19 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-dots timeline-dot1 border-warning text-warning">
                                                </div>
                                                <h6 class="float-left mb-1">Mega event</h6>
                                                <small class="float-right mt-1">15 November 2019</small>
                                                <div class="d-inline-block w-100">
                                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile-friends" class="tab-pane fade">
                            <div class="card">
                                <div class="card-header">
                                    <div class="header-title">
                                        <h4 class="card-title">Friends</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline m-0 p-0">
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/01.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">Web Designer</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton9"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton9">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/05.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Paul Molive</h6>
                                                <p class="mb-0">trainee</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton10"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton10">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/02.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Anna Mull</h6>
                                                <p class="mb-0">Web Developer</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton11"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton11">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/03.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Paige Turner</h6>
                                                <p class="mb-0">trainee</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton12"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton12">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/04.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Barb Ackue</h6>
                                                <p class="mb-0">Web Designer</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton13"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton13">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/05.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Greta Life</h6>
                                                <p class="mb-0">Tester</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton14"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton14">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/03.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Ira Membrit</h6>
                                                <p class="mb-0">Android Developer</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton15"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton15">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mb-4 align-items-center">
                                            <img src="../assets/images/avatars/02.png" alt="story-img"
                                                class="rounded-pill avatar-40" loading="lazy">
                                            <div class="ms-3 flex-grow-1">
                                                <h6>Pete Sariya</h6>
                                                <p class="mb-0">Web Designer</p>
                                            </div>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton16"
                                                    data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="dropdownMenuButton16">
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfollow</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">Unfriend</a>
                                                    <a class="dropdown-item " href="javascript:void(0);">block</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="profile-profile" class="tab-pane fade">
                            
                        </div>
                    </div> -->
                    </div>
                    <div class="col-lg-3">
                        <!-- <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">About</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet, contur adipiscing elit.</p>
                            <div class="mb-1">Email: <a href="#" class="ms-3">nikjone@demoo.com</a></div>
                            <div class="mb-1">Phone: <a href="#" class="ms-3">001 2351 256 12</a></div>
                            <div>Location: <span class="ms-3">USA</span></div>
                        </div>
                    </div> -->
                        <!-- <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">Stories</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline m-0 p-0">
                                <li class="d-flex mb-4 align-items-center active">
                                    <img src="../assets/images/shapes/02.png" alt="story-img"
                                        class="rounded-pill avatar-70 p-1 border bg-soft-light img-fluid"
                                        loading="lazy">
                                    <div class="ms-3">
                                        <h5>Web Design</h5>
                                        <p class="mb-0">1 hour ago</p>
                                    </div>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <img src="../assets/images/shapes/04.png" alt="story-img"
                                        class="rounded-pill avatar-70 p-1 border img-fluid bg-soft-danger"
                                        loading="lazy">
                                    <div class="ms-3">
                                        <h5>App Design</h5>
                                        <p class="mb-0">4 hour ago</p>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <img src="../assets/images/shapes/06.png" alt="story-img"
                                        class="rounded-pill avatar-70 p-1 border bg-soft-primary img-fluid"
                                        loading="lazy">
                                    <div class="ms-3">
                                        <h5>Abstract Design</h5>
                                        <p class="mb-0">9 hour ago</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                                <h4 class="card-title">Suggestions</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="list-inline m-0 p-0">
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-warning rounded-pill"><img
                                            src="../assets/images/avatars/02.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Paul Molive</h6>
                                        <p class="mb-0">4 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-danger rounded-pill"><img
                                            src="../assets/images/avatars/03.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Robert Fox</h6>
                                        <p class="mb-0">4 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-dark rounded-pill"><img
                                            src="../assets/images/avatars/04.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Jenny Wilson</h6>
                                        <p class="mb-0">6 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-primary rounded-pill"><img
                                            src="../assets/images/avatars/05.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Cody Fisher</h6>
                                        <p class="mb-0">8 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-info rounded-pill"><img
                                            src="../assets/images/avatars/06.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Bessie Cooper</h6>
                                        <p class="mb-0">1 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-warning rounded-pill"><img
                                            src="../assets/images/avatars/07.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Wade Warren</h6>
                                        <p class="mb-0">3 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex mb-4 align-items-center">
                                    <div class="img-fluid bg-soft-success rounded-pill"><img
                                            src="../assets/images/avatars/08.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Guy Hawkins</h6>
                                        <p class="mb-0">12 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="img-fluid bg-soft-info rounded-pill"><img
                                            src="../assets/images/avatars/09.png" alt="story-img"
                                            class="rounded-pill avatar-40" loading="lazy"></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6>Floyd Miles</h6>
                                        <p class="mb-0">2 mutual friends</p>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="btn btn-outline-primary rounded-circle btn-icon btn-sm p-2">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    </div>
                </div>
                <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn"
                    aria-labelledby="shareBottomLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="shareBottomLabel">Share</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body small">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="text-center me-3 mb-3">
                                <img src="../assets/images/brands/08.png" class="img-fluid rounded mb-2" alt=""
                                    loading="lazy">
                                <h6>Facebook</h6>
                            </div>
                            <div class="text-center me-3 mb-3">
                                <img src="../assets/images/brands/09.png" class="img-fluid rounded mb-2" alt=""
                                    loading="lazy">
                                <h6>Twitter</h6>
                            </div>
                            <div class="text-center me-3 mb-3">
                                <img src="../assets/images/brands/10.png" class="img-fluid rounded mb-2" alt=""
                                    loading="lazy">
                                <h6>Instagram</h6>
                            </div>
                            <div class="text-center me-3 mb-3">
                                <img src="../assets/images/brands/11.png" class="img-fluid rounded mb-2" alt=""
                                    loading="lazy">
                                <h6>Google Plus</h6>
                            </div>
                            <div class="text-center me-3 mb-3">
                                <img src="../assets/images/brands/13.png" class="img-fluid rounded mb-2" alt=""
                                    loading="lazy">
                                <h6>In</h6>
                            </div>
                            <div class="text-center me-3 mb-3">
                                <img src="../assets/images/brands/12.png" class="img-fluid rounded mb-2" alt=""
                                    loading="lazy">
                                <h6>YouTube</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Section Start -->
            <footer class="footer">
                <div class="footer-body">
                    <ul class="left-panel list-inline mb-0 p-0">
                        <li class="list-inline-item"><a href="javascript:void(0);">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="javascript:void(0);">Terms of Use</a></li>
                    </ul>
                    <div class="right-panel">
                        ©
                        <script>2022</script> <span data-setting="app_name">Qompac UI</span>, Made with
                        <span class="text-gray">
                            <svg class="icon-16" width="15" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span> by <a href="https://iqonic.design/" target="_blank">IQONIC Design</a>.
                    </div>
                </div>
            </footer>
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

    <!-- fslightbox Script -->
    <script src="../assets/js/plugins/fslightbox.js" defer></script>




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
    <script src="../my_js/header_footer.js"></script>

</body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/app/user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:47 GMT -->

</html>