<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account </title>
    <!-- Link reset css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Link Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- React JS -->
    <script crossorigin src="https://unpkg.com/react@17.0.0/umd/react.production.min.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17.0.0/umd/react-dom.production.min.js"></script>
    <!-- Babel -->
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <!--Link css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <!-- Link font chữ-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600&family=Poiret+One&family=Roboto:wght@300;400;500;700&family=Saira+Condensed:wght@400;500;600&display=swap');
    </style>
</head>

<body>
    <!-- Scroll Top -->
    <div onClick="backToTop()" class="scroll-top">
        <i class="scroll-top-icon fa-solid fa-angle-left"></i>
    </div>
    <id class="app">
        <!-- Header -->
        <div id="header">
            <div class="header-notify">
                <a href="">Click here for same day delivery</a>
            </div>
            <!-- Header Nav  -->
            <div class="header-nav">
                <div class="container">
                    <div class="row nav-list">
                        <div class="col-lg-4 nav-item-left">
                            <div class="nav-menu">
                                <li class="nav-item">
                                    <a href="">SHOP NOW</a>
                                    <div class="nav-sub">
                                        <div class="row">
                                            <div class="col-lg-7 nav-category">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <br /> <a href="">Cakes</a>
                                                        <br /> <a href="">Cupcakes</a>
                                                        <br /> <a href="">Cheesecakes</a>
                                                        <br /> <a href="">Pies</a>
                                                        <br /> <a href="">Cook Books</a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <br /> <a href="">Vegan</a>
                                                        <br /> <a href="">Birthday</a>
                                                        <br /> <a href="">Wedding Cakes</a>
                                                        <br /> <a href="">Baby Shower</a>
                                                        <br /> <a href="">e-Gift Cardr</a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <br /> <a href="">Made Without Gluten</a>
                                                        <br /> <a href="">Selection</a>
                                                        <br /> <a href="">Sharing Bundles</a>
                                                        <br /> <a href="">All</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 nav-img">
                                                <img class="nav-right-img" src="https://cdn.shopify.com/s/files/1/1703/7103/files/Rainbow_frosting_cake_sliced_on_colour_rev0.jpg?v=1575385762" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="">OPENING HOURS</a>
                                </li>
                                <li class="nav-item">
                                    <a href="">VEGAN</a>
                                </li>
                            </div>
                        </div>
                        <div class="col-lg-4 nav-item-center">
                            <a href="/" title="Logo" class="nav-logo">
                                <img class="nav-logo-img" src="https://cdn.shopify.com/s/files/1/1703/7103/t/32/assets/logo_pink.svg?v=102586737249278732631513620398" alt="">
                            </a>
                        </div>
                        <div class="col-lg-4 nav-item-right">
                            <div class="nav-info">
                                <div class="nav-item">
                                    <div class="search">
                                        <i onClick="changeWidth()" class="nav-icon nav-icon-search fa-solid fa-magnifying-glass"></i>
                                        <input class="search-input" type="text" placeholder="Search..." />
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <i class="nav-icon fa-solid fa-location-dot"></i>
                                </div>
                                <div class="nav-item nav-item__login">
                                        <a href="login.php"><i class="nav-icon fa-solid fa-user"></i></a>
                                </div>
                                <div class="nav-item">
                                    <i class="nav-icon fa-solid fa-cart-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Login stars -->
        <div id="main_login">
        <div class="login">
            <div class="login_title">
                <h2>LOGIN</h2>
            </div>
            <form action="./php/login_submit.php" method="post" class="login-form">
                <div class="flex-login">
                    <div class="inputBox">
                        <span>Email Address</span>
                        <input type="email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <input type="submit" value="Login" class="btn-login" name="submit">
                    <a href="#">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="register">
            <div class="title_register">
                <h5>Not registered?</h5>
                <h2>CREATER AN ACCOUNT</h2>
                <small>Please let us know more information about you as this will enable us to tailor what <br> you receive
                    from us to be more relevant. We will not pass your information to any third parties, <br> will only be
                    used by The Hummingbird Bakery.</small>
            </div>
            <p style="font-size: 30px;">
                <?php
                    $_SESSION["name"] = "Cuong";

                    if(isset($_SESSION["message"])) {
                        echo $_SESSION["message"];
                        unset($_SESSION["message"]);
                    };
                ?>
            </p>
            <form action="./php/register_submit.php" method="post" class="register-form">
                <div class="flex-register">
                    <div class="inputBox">
                        <span>First Name*</span>
                        <input type="text" name="firstName">
                    </div>
                    <div class="inputBox">
                        <span>Last Name*</span>
                        <input type="text" name="lastName">
                    </div>
                    <div class="inputBox">
                        <span>Email Address*</span>
                        <input type="email" name="email">
                    </div>
                    <div class="inputBox">
                        <span>Date of Birth</span>
                        <input type="date" name="birthday" id="" required>
                    </div>
                    <div class="inputBox">
                        <small>Birthday + cake, it’s a no-brainer! Let us know when it’s your birthday so we can help
                            sweeten up your special day!</small>
                    </div>
                    <div class="inputBox">
                        <span>Postcode</span>
                        <input type="text" name="postcode" id="">
                    </div>
                    <div class="inputBox">
                        <span>Local Bakery</span>
                        <select name="" id="LocalBakery">
                            <option>Notting Hill</option>
                            <option>Notting Hill</option>
                            <option>Notting Hill</option>
                            <option>Notting Hill</option>
                        </select>
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input type="password" name="password" id="CreatePassword" class="" required="">
                    </div>
                    <div class="inputBox">
                        <span>Confirm Password</span>
                        <input type="password" name="confirmpassword" class="" required="">
                    </div>
                    <div class="checkbox_login">
                        <input type="checkbox" value="1" id="check" name="check" class="check_login">
                        <label class="next-label" for="check">Keep me up to date on news and
                            exclusive
                            offers.</label>
                    </div>
                    <input type="submit" value="Register" name="submit" class="btn-login">
                    <p class="info h5">*Required Fields</p>
                </div>
            </form>
        </div>
    </div>








        <!-- Login ends -->
        <!-- Contact -->
        <div id="contact">
            <div class="contact_content">
                <h2 class="content-heading">JOIN OUR COMMUNITY</h2>
                <p class="introduce-des">Love baking? Why not join The Hummingbird Bakery mailing list for updates and news. By entering your email address here you understand and agree that The Hummingbird Bakery Limited may use your personal data in accordance with our Privacy Policy (see link below).</p>
            </div>
            <div class="contact_inf">
                <form action="">
                    <input type="text" name="name" placeholder="First Name" class="contact_input" pattern="[a-z]{1-15}">
                    <input type="email" name="email" placeholder="Enter your email address"class="contact_input" pattern="@">
                    <input type="submit" name="submit" value="Join" class="btn_send">
                </form>
            </div>
        </div>
        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="footer-wrap">
                    <div class="footer-page">
                        <ul class="page-list">
                            <li class="page-item">
                                <a href="">Shop Online</a>
                            </li>
                            <li class="page-item">
                                <a href="">Our Bakeries</a>
                            </li>
                            <li class="page-item">
                                <a href="">Gifts & Books</a>
                            </li>
                            <li class="page-item">
                                <a href="">Blog</a>
                            </li>
                            <li class="page-item">
                                <a href="">Baking Tips</a>
                            </li>
                            <li class="page-item">
                                <a href="">Charity</a>
                            </li>
                        </ul>
                        <ul class="page-list">
                            <li class="page-item">
                                <a href="">About Us</a>
                            </li>
                            <li class="page-item">
                                <a href="">Contact Us</a>
                            </li>
                            <li class="page-item">
                                <a href="">Press Office</a>
                            </li>
                            <li class="page-item">
                                <a href="">Cake Care Advice</a>
                            </li>
                            <li class="page-item">
                                <a href="">Dietary & Allergen</a>
                            </li>
                            <li class="page-item">
                                <a href="">Info</a>
                            </li>
                        </ul>
                        <ul class="page-list">
                            <li class="page-item">
                                <a href="">Corporate</a>
                            </li>
                            <li class="page-item">
                                <a href="">Careers</a>
                            </li>
                            <li class="page-item">
                                <a href="">Terms & Conditions</a>
                            </li>
                            <li class="page-item">
                                <a href="">Privacy Policy</a>
                            </li>
                            <li class="page-item">
                                <a href="">Delivery Area</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-logo">
                        <img src="https://cdn.shopify.com/s/files/1/1703/7103/t/32/assets/logo-footer.svg?v=158320001681363172281502735319" alt="">
                        <div class="brand-des">
                            <br /> © 2022 The Hummingbird Bakery.
                            <br /> E-commerce by WeMakeWebsites
                        </div>
                    </div>
                    <div class="footer-contact">
                        <div class="footer-social">1</div>
                        <div class="footer-payment">1</div>
                    </div>
                </div>
            </div>
        </div>
    </id>

    <!-- Link BootStrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Lick Slick -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Lick Javascript -->
    <!-- <script type="text/babel" src="./product.js"></script> -->
    <script src="./index.js"></script>
</body>

</html>