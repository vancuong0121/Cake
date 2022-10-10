<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake Shop</title>
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
                                        <a href="./login.php" target="_blank"><i class="nav-icon fa-solid fa-user"></i></a>
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
        <!-- Slider -->
        <div id="slider">
            <i class="slider-prev fa-solid fa-angle-left"></i>
            <ul class="slider-dots">
                <li class="slider-dot-item active" data-index="0"></li>
                <li class="slider-dot-item" data-index="1"></li>
                <li class="slider-dot-item" data-index="2"></li>
                <li class="slider-dot-item" data-index="3"></li>
            </ul>
            <div class="slider-wrapper">
                <div class="slider-main">
                    <div class="slider-item">
                        <img src="https://sieuthiquaviet.com/wp-content/uploads/2021/08/Cach-lam-hop-qua-bang-giay.jpg" alt="">
                    </div>
                    <div class="slider-item">
                        <img src="https://nhomin.com.vn/wp-content/uploads/2020/07/mau-hop-banh-trung-thu-ngu-ngu-vong-nguyet-va-lien-hoa-1024x575.jpg" alt="">
                    </div>
                    <div class="slider-item">
                        <img src="https://innguyenphong.com/wp-content/uploads/2018/07/Ho%CC%A3%CC%82p-%C4%91u%CC%9B%CC%A3ng-ba%CC%81nh-trung-thu--scaled.jpeg" alt="">
                    </div>
                    <div class="slider-item">
                        <img src="https://nhomin.com.vn/wp-content/uploads/2020/07/banner-Mau-hop-banh-trung-thu-2020-scaled.jpg" alt="">
                    </div>
                </div>
            </div>
            <i class="slider-next fa-solid fa-angle-right"></i>
        </div>
        <!-- Content -->
        <div id="content">
            <div class="content-header">
                <h2 class="content-heading">OUR CUSTOMERS' FAVOURITES</h2>
                <h4 class="content-description">Just a few of our American recipe bestsellers</h4>
            </div>
        </div>
        <!-- Product -->
        <div class="product">
            <div class="container">
                <div class="row product-wrap">
                    <div class="col-lg-3 product-itemm">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/Rainbow_pinata_cake_sliced_rev0_1000x.jpg?v=1537362780" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £34.60</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/red_velvet_cupcake_1000x.jpg?v=1601426850" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £32.95</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/Rainbow_frosting_cake_rev0_1000x.jpg?v=1557221009" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £3.25</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/red_velvet_cake_rev0_1_1000x.jpg?v=1516710753" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £38.45</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3 product-itemm">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/Rainbow_pinata_cake_sliced_rev0_1000x.jpg?v=1537362780" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £34.60</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/red_velvet_cupcake_1000x.jpg?v=1601426850" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £32.95</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/Rainbow_frosting_cake_rev0_1000x.jpg?v=1557221009" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £3.25</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <img src="https://cdn.shopify.com/s/files/1/1703/7103/products/red_velvet_cake_rev0_1_1000x.jpg?v=1516710753" alt="" class="product-img">
                            <h3 class="product-title">Red Velvet Cupcakes</h3>
                            <div class="product-price">From £38.45</div>
                            <a href="" class="btn btn-primary btn-buy">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Bottom -->
        <div class="slider-bottom">
            <img class="slider-bg" src="https://cdn.shopify.com/s/files/1/1703/7103/files/Note_banner_2020_v1_homepage_1140x.png?v=1586276750" alt="">
            <div class="introduce">
                <img src="https://cdn.shopify.com/s/files/1/1703/7103/t/32/assets/hummingbird-icon.png?v=73020292576799361481502735318" alt="" class="introduce-icon">
                <h1 class="introduce-title">TREAT A TEAM</h1>
                <h4 class="introduce-des">Say a sweet thank you with our Cupcake Selection Boxes. Perfect for a happy hour!</h4>
                <a href="" class="btn btn-buy introduce-btn">SHOP NOW</a>
            </div>
        </div>
        <!-- Follow -->
        <div class="follow">
            <h3 class="follow-heading">Follow @hummingbbakery on Instagram</h3>
            <h5 class="follow-des">Follow us so you'll never miss an update</h5>
        </div>
        <!-- Product Social -->
        <div class="our-products">
            <div class="row our-products-list collapsed">
                <div class="col-lg-3">
                    <div class="our-product-item">
                        <img src="https://scontent-sin6-3.cdninstagram.com/v/t51.2885-15/311174056_3245379422444433_1511001146775187697_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8ae9d6&_nc_ohc=Z-CtU7o6XOwAX_2m9Zl&_nc_ht=scontent-sin6-3.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AT-oyL3V1jnnd8eZkvNgNNO8MWpEC_H2Z8Bnr8oiFu1LFA&oe=6346A91E"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                        <img src="https://scontent-sin6-3.cdninstagram.com/v/t51.2885-15/311146474_1291158581722390_9140840219489501995_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8ae9d6&_nc_ohc=YgejXD6gwVUAX8WCN8X&_nc_ht=scontent-sin6-3.cdninstagram.com&edm=ANo9K5cEAAAA&oh=00_AT8d3ND9fUa77Z-edHrLmBQ4ssMQKaityfOqc3cKs3RtNA&oe=6346C82C"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                    <img src="https://scontent-sin6-2.cdninstagram.com/v/t51.29350-15/310332481_148619814213431_8694762384484495270_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=HX7ITm6J2PgAX8Mb7P7&amp;_nc_ht=scontent-sin6-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT8X2oL_qz7N5U3ApKsmljoAaC5iPjdeq-Sd8j0G634-Uw&amp;oe=63471E66">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                    <img src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/310962265_628116395681862_4370279273698547777_n.jpg?_nc_cat=109&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=6znpcwJMpkQAX8FObmW&amp;_nc_ht=scontent-sin6-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT_hL6fbN78kHsswVNz3rx7auPRkFyJfu-8huwKrj9nDbA&amp;oe=6347AF06">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                    <img src="https://scontent-sin6-2.cdninstagram.com/v/t51.2885-15/310521604_3263311087243606_7713915122337862669_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=dO37kP0XLEQAX8hsPv0&amp;_nc_ht=scontent-sin6-2.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT959qoql-CjeseuA_lNo5JfmdRbLrO5EZeGGSG2GvdpYA&amp;oe=63468DAF">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                    <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/309440566_392691629736728_4951278045129298606_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=RUReycraMjAAX_S5VUn&amp;_nc_ht=scontent-sin6-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-jcSGToYsv2x1E4Q9k-MsoeQ4H-ybOHZL1vcNQiemyEw&amp;oe=63482126">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                    <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/309440566_392691629736728_4951278045129298606_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=RUReycraMjAAX_S5VUn&amp;_nc_ht=scontent-sin6-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-jcSGToYsv2x1E4Q9k-MsoeQ4H-ybOHZL1vcNQiemyEw&amp;oe=63482126">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item">
                    <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/309440566_392691629736728_4951278045129298606_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=RUReycraMjAAX_S5VUn&amp;_nc_ht=scontent-sin6-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-jcSGToYsv2x1E4Q9k-MsoeQ4H-ybOHZL1vcNQiemyEw&amp;oe=63482126">
                    </div>
                </div>
                <!-- More - Less  -->
                <div class="col-lg-3">
                    <div class="our-product-item hide">
                    <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/309440566_392691629736728_4951278045129298606_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=RUReycraMjAAX_S5VUn&amp;_nc_ht=scontent-sin6-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-jcSGToYsv2x1E4Q9k-MsoeQ4H-ybOHZL1vcNQiemyEw&amp;oe=63482126">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item hide">
                    <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/309440566_392691629736728_4951278045129298606_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=RUReycraMjAAX_S5VUn&amp;_nc_ht=scontent-sin6-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-jcSGToYsv2x1E4Q9k-MsoeQ4H-ybOHZL1vcNQiemyEw&amp;oe=63482126">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="our-product-item hide">
                    <img src="https://scontent-sin6-1.cdninstagram.com/v/t51.2885-15/309440566_392691629736728_4951278045129298606_n.jpg?_nc_cat=111&amp;ccb=1-7&amp;_nc_sid=8ae9d6&amp;_nc_ohc=RUReycraMjAAX_S5VUn&amp;_nc_ht=scontent-sin6-1.cdninstagram.com&amp;edm=ANo9K5cEAAAA&amp;oh=00_AT-jcSGToYsv2x1E4Q9k-MsoeQ4H-ybOHZL1vcNQiemyEw&amp;oe=63482126">
                    </div>
                </div>
                
            </div>
        </div>
        <div class="button-show">
            <div class="btn btn-show more">Show more</div>
        </div>
        <div class="button-show">
            <div class="btn btn-show hidden less">Hide</div>
        </div>
        <!-- Contact -->
        <div id="contact">
            <div class="contact_content">
                <h2 class="content-heading">JOIN OUR COMMUNITY</h2>
                <p class="introduce-des">Love baking? Why not join The Hummingbird Bakery mailing list for updates and news. By entering your email address here you understand and agree that The Hummingbird Bakery Limited may use your personal data in accordance with our Privacy Policy (see link below).</p>
            </div>
            <div class="contact_inf">
                <form action="">
                    <input type="text" name="name" placeholder="First Name" class="contact_input">
                    <input type="email" name="email" placeholder="Enter your email address"class="contact_input">
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