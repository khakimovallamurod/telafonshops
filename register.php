<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/upstudy/upstudy/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 May 2023 08:40:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Upstudy - Education & LMS HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/plugins/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/flaticon.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.powertip.min.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .signup{
            font-size: 16px;
            margin-top: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">


        <!-- Preloader start -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Start  -->
        <?php include_once 'main.php' ?>
        <!-- Header End -->


        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/bg/page-banner.jpg);">
        <div class="section login-register-section section-padding">
            <div class="container">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrap">
                    <div class="row gx-5">
                        <div class="col-lg-7">

                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Register</h2>
                                </div>
                                <!-- Section Title End -->
                                <div class="login-register-form">
                                    <form action="adduser.php" method="POST" id = 'regform'>
                                        <div class="single-form">
                                            <input type="text" name="ism" class="form-control" placeholder="Enter your firstname" required>
                                        </div>
                                        <div class="single-form">
                                            <input type="text" name="fam" class="form-control" placeholder="Enter your lastname" required>
                                        </div>
                                        <div class="single-form">
                                            <input type="text" name="login" class="form-control" placeholder="Enter your username" id = "lgn" required>
                                            <p id="helpblock" style="color:red; font-size: 14px; display: none; padding:none;"></p>
                                        </div>
                                        <div class="single-form">
                                            <input type="email" class="form-control" placeholder="Enter your email " required>
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Password " id="pas1" required>
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Confirm Password " id="pas2" required>
                                            <p id='mesg' style="font-size:14px; color:red;"></p>
                                        </div>
                                        <div class="form-btn">
                                            <button type="submit" class="btn">Register</button>
                                            <div class="signup">
                                                <span class="signup">Already have an account?
                                                <a href="login.php">Login</a>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->

                        </div>
                    </div>
                </div>
                <!-- Login & Register Wrapper End -->
            </div>
        </div>
        </div>
        


        <!-- Footer Start -->
        <?php include_once 'footer.php' ?>

    </div>

    <!-- JS
    ============================================ -->
    <?php include_once 'script.php'?>
</body>
</html>