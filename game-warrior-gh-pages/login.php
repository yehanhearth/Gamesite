<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/Lcss.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="./img/loginimg/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.html">Homepage</a></li>
                                <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="./blog.html">Our Blog</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right ">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="./login.html"><span class="icon_profile"></span></a>
                    </div>
                </div> -->
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- content Begin -->
    <div class="align-items-center">
        <div class="d-none d-lg-block background"></div>

        <!-- Login Section Begin -->
        <div class="set-bg" data-setbg="img/loginimg/1.png" id="logInBox">
            <!-- Normal Breadcrumb Begin -->
            <section class="normal-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="normal__breadcrumb__text">
                                <h2>Login</h2>
                                <p>Welcome to the official Game Site.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Normal Breadcrumb End -->

            <!-- Loginbox Begin -->
            <section class="login">
                <div class="container box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="login__form">
                                <h3 class="text-light fw-bold fs-1 mb-4">Login</h3>
                                <form action="#">
                                    <div class="input__item">
                                        <input class="rounded-3" type="text" placeholder="Email address">
                                        <span class="icon_mail"></span>
                                    </div>
                                    <div class="input__item">
                                        <input class="rounded-3" type="text" placeholder="Password">
                                        <span class="icon_lock"></span>
                                    </div>
                                    <button type="submit" class="btn btn-outline-warning site-btn rounded-3">Login Now</button>
                                </form>
                                <a href="#" class="forget_pass">Forgot Your Password?</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login__register">
                                <h3>Dont’t Have An Account?</h3>
                                <a href="#" onclick="changeView();" class="btn btn-outline-warning site-btn">Register Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="login__social">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6">
                                <div class="login__social__links">
                                    <span>or</span>
                                    <ul>
                                        <li><a href="#" class="sml"><i class="fa fa-facebook facebook1"></i> Sign in
                                                With
                                                Facebook</a></li>
                                        <li><a href="#" class="sml"><i class="fa fa-google google1"></i> Sign in With
                                                Google</a>
                                        </li>
                                        <li><a href="#" class="sml"><i class="fa fa-twitter twitter1"></i> Sign in With
                                                Twitter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Loginbox End -->

        </div>
        <!-- Login Section End -->

        <!-- signup Section Begin -->
        <div class="d-none set-bg" data-setbg="img/loginimg/2.png" id="signUpBox">
            <div class="opacity1">
                <!-- Normal Breadcrumb Begin -->
                <section class="normal-breadcrumb">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="normal__breadcrumb__text">
                                    <h2>Register</h2>
                                    <p>Welcome to the official Game Site.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Normal Breadcrumb End -->

                <!-- signupbox Begin -->
                <section class="login">
                    <div class="container box">
                        <div class="row align-items-center login__register mb-4">

                            <div class="col-12">
                                <p class="text-light fw-bold fst-italic fs-1 mb-4">Create New Account</p>
                            </div>

                            <div class="col-12 d-none" id="msgdiv">
                                <div class="alert alert-danger" role="alert" id="msg">

                                </div>
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">First Name</label>
                                <input type="text" class="form-control" placeholder="Ex: Viraj" id="fname" />
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">last Name</label>
                                <input type="text" class="form-control" placeholder="Ex: Weerakoon" id="lname">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">Email</label>
                                <input type="email" class="form-control" placeholder="Ex: Viraj@gmail.com" id="email">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">Mobile</label>
                                <input type="text" class="form-control" placeholder="Ex: 0771234567" id="mobile">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">Email</label>
                                <input type="email" class="form-control" placeholder="Ex: Viraj@gmail.com" id="email">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">Address</label>
                                <input type="email" class="form-control" placeholder="" id="email">
                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label text-light">Province</label>
                                <select class="form-select" id="gender">


                                </select>
                            </div>

                            <div class="col-6 mb-5">
                                <label class="form-label text-light">City</label>
                                <select class="form-select" id="gender">


                                </select>
                            </div>

                            <div class="col-6 mb-5">
                                <label class="form-label text-light">Gender</label>
                                <select class="form-select" id="gender">


                                </select>
                            </div>

                            <div class="mb-3 col-6">
                                <button type="submit" class="btn btn-outline-warning site-btn rounded-3">
                                    Register Now
                                </button>
                            </div>
                            <div class="mb-3 col-6 text-end">
                                <a href="#" class="forget_pass text1 p-3 rounded-3">Forgot Your Password?</a>
                            </div>



                        </div>

                        <div class="login__register">
                            <h3 class="text-light mb-3">You Already Have An Account?</h3>
                            <a href="#" onclick="changeView();" class="btn btn-outline-warning site-btn">Login Now</a>
                        </div>

                        <div class="login__social">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <div class="login__social__links">
                                        <span>or</span>
                                        <ul>
                                            <li><a href="#" class="sml"><i class="fa fa-facebook facebook1"></i> Sign in
                                                    With
                                                    Facebook</a></li>
                                            <li><a href="#" class="sml"><i class="fa fa-google google1"></i> Sign in With
                                                    Google</a>
                                            </li>
                                            <li><a href="#" class="sml"><i class="fa fa-twitter twitter1"></i> Sign in With
                                                    Twitter</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- signupbox End -->
            </div>
        <!-- signup Section End -->

    </div>
    <!-- content End -->


    <!-- <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    

                </div>
            </div>
        </div>
    </footer> -->
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main1.js"></script>


</body>

</html>