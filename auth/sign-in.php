<?php
session_start();
?>
<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/auth/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:35 GMT -->

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Jeevanam</title>
   <meta name="description"
      content="Jeevanam is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
   <meta name="keywords"
      content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
   <meta name="author" content="Iqonic Design">
   <meta name="DC.title" content="Jeevanam Simple | Responsive Bootstrap 5 Admin Dashboard Template">
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
   <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet">
</head>

<body class=" ">
   <!-- loader Start -->
   <my-loader></my-loader>
   <!-- loader END -->
   <div class="wrapper">
      <section class="login-content overflow-hidden">
         <div class="row no-gutters align-items-center bg-white">
            <div class="col-md-12 col-lg-6 align-self-center">
               <a href="../index.html"
                  class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                  <div class="logo-normal">
                     <svg class="" viewBox="0 0 32 32" width="80px" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                           d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                           fill="currentColor" />
                     </svg>
                  </div>
                  <h2 class="logo-title ms-3 mb-0" data-setting="app_name">Jeevanam</h2>
               </a>
               <div class="row justify-content-center pt-5">
                  <div class="col-md-9">
                     <div class="card  d-flex justify-content-center mb-0 auth-card iq-auth-form">
                        <div class="card-body">
                           <h2 class="mb-2 text-center">Sign In</h2>
                           <p class="text-center">Login to stay connected.</p>
                           <form action="../my_php/check_login.php" method="post">
                              <div class="row">
                                 <div class="col-lg-">
                                 <div class="form-label">Login as:</div>
                                    <div class="form-group" id="doctor-qualifications">
                                       <select name="user" id="user" class="form-control" required>
                                          <option value="doctor" selected>Doctor</option>
                                          <option value="hospital">Hospital</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                       <label for="email" class="form-label">Username</label>
                                       <input type="text" class="form-control" id="email" name="uname">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" class="form-control" id="password" name="pass"
                                          aria-describedby="password" placeholder="xxxxxx">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <a href="recoverpw.html">Forgot Password?</a>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                              <p class="text-center my-3">or sign in with other accounts?</p>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img
                                             src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/gm.svg"
                                             alt="gm" loading="lazy"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img
                                             src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/fb.svg"
                                             alt="fb" loading="lazy"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img
                                             src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/im.svg"
                                             alt="im" loading="lazy"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img
                                             src="https://templates.iqonic.design/product/qompac-ui/html/dist/assets/images/brands/li.svg"
                                             alt="li" loading="lazy"></a>
                                    </li>
                                 </ul>
                              </div>
                              <p class="mt-3 text-center">
                                 Don’t have an account? <a href="sign-up.html" class="text-underline">Click here to sign
                                    up.</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6 d-lg-block d-none bg-primary p-0  overflow-hidden">
               <img src="../assets/images/auth/01.png" class="img-fluid gradient-main" alt="images" loading="lazy">
            </div>
         </div>
      </section>
   </div>
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
   <script src="../my_js/header_footer.js"></script>

</body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui/html/dist/dashboard/auth/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 23:57:35 GMT -->

</html>