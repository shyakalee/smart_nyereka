<!DOCTYPE html>
<html lang="en">
    <?php require_once ("include/initialize.php"); ?>
<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Admindek | Admin Template</title>


    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="https://colorlib.com/polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo web_root ?>css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/feather.css">

    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/icofont.css">

    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo web_root ?>css/pages.css">
</head>

<body themebg-pattern="theme1">

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form class="md-float-material form-material" method="POST" action="#">
                        <div class="text-center">
                            <img src="png/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" required="">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right float-right">
                                            <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="login_btn" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account?<a href="auth-sign-up-social.html"> <b>Register here </b></a>for free!</p>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

        </div>
        <?php
        if(isset($_POST['login_btn'])) {
            $username=trim($_POST['username']);
            $pwd=trim($_POST['password']);

            $user=new User();
            $result= $user::Authenticate($username,$pwd);
            if($result==true) {
                redirect(web_root."index.php?home");
                // echo "<script>alert('true')</script>" ;
            }
        }
        
        ?>

    </section>


    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo web_root ?>js/jquery.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo web_root ?>js/jquery-ui.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo web_root ?>js/popper.min.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="<?php echo web_root ?>js/bootstrap.min.js"></script>

    <script src="<?php echo web_root ?>js/waves.min.js" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>

    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="js/jquery.slimscroll.js"></script>

    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="js/modernizr.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="js/css-scrollbars.js"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript" src="js/common-pages.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="4878d7dfa7bc22a8dfa99416-text/javascript"></script>
    <script type="4878d7dfa7bc22a8dfa99416-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script src="js/rocket-loader.min.js" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer=""></script>
</body>

<!-- Mirrored from colorlib.com/polygon/admindek/default/auth-sign-in-social.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2019 16:08:30 GMT -->

</html>