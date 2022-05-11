<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FoodKo</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- jQuery Ui -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>

    <div class="home-wrapper home-1">
        <!-- Header Area Start Here -->
        <header class="main-header-area">
            <!-- Header Top Area Start Here -->
            <div class="header-top-area">
                <div class="container container-default-2 custom-area">
                    <div class="row">
                        <div class="col-12 col-custom header-top-wrapper text-center">
                        <?php
                            echo '<div class="short-desc text-white">';
                            echo '<p>Get 35% off for new product </p>';
                            echo '</div>';
                            echo '<div class="header-top-button">';
                            echo '<a href="shop-list-left.php">Shop Now</a>';
                            echo '</div>';
                            echo '<span class="top-close-button">X</span>';
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top Area End Here -->
            <!-- Main Header Area Start -->
            <div class="main-header">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo d-flex align-items-center">
                                        <a href="index.php">
                                            <img class="img-full" src="assets/images/logo/lugo.png" alt="Header Logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="index.php">
                                                <?php
                                                    echo '<span class="menu-text"> Home</span>';
                                                 ?>
                                                   
                                                </a>
                                                
                                            </li>
                                            <li>
                                                <a href="shop-list-left.php">
                                                <?php
                                                    echo '<span class="menu-text">Shop</span>';
                                                ?>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="mega-menu dropdown-hover">
                                                    <div class="menu-colum">
                                                        <ul>
                                                            <?php
                                                            echo '<li><span class="mega-menu-text">Shop</span></li>';
                                                 
                                                            
                                                                echo '<li><a href="shop-list-left.php">Chinese Food</a></li>';
                                                                echo '<li><a href="shop-list-left.php">Japanses Food</a></li>';
                                                                echo '<li><a href="shop-list-left.php">Filipino Food</a></li>';
                                                                
                                                            ?>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="menu-colum">
                                                        <ul>
                                                        <?php
                                                                echo '<li><span class="mega-menu-text">Others</span></li>';
                                                                echo '<li><a href="cart.php">Cart Page</a></li>';
                                                                echo '<li><a href="checkout.php">Checkout Page</a></li>';
                                                                echo '<li><a href="wishlist.php">Wishlist Page</a></li>';
                                                        ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details-sidebar.php">
                                                <?php
                                                    echo '<span class="menu-text"> Blog</span>';
                                                ?>
                                                    
                                                </a>
                                               
                                            </li>
                                            <li>
                                                <a href="#">
                                                <?php
                                                    echo '<span class="menu-text"> Pages</span>';
                                                ?>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-submenu dropdown-hover">
                                                <?php
                                                    echo '<li><a href="frequently-questions.php">FAQ</a></li>';
                                                    echo '<li><a href="my-account.php">My Account</a></li>';
                                                    echo '<li><a href="login.php">Login</a></li>';
                                                    echo '<li><a href="register.php">Register</a></li>';
                                                ?>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about-us.php">
                                                <?php
                                                    echo '<span class="menu-text"> About</span>';
                                                ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us.php">
                                                <?php
                                                    echo '<span class="menu-text">Contact</span>';
                                                ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                    <div class="header-right-area main-nav">
                                        <ul class="nav">
                                            <li class="login-register-wrap d-none d-xl-flex">
                                            <?php
                                                echo '<span><a href="login.php">Login</a></span>';
                                                echo '<span><a href="register.php">Register</a></span>';
                                            ?>
                                            </li>
                                            <li class="sidemenu-wrap d-none d-lg-flex">
                                                <a href="#">USD <i class="fa fa-caret-down"></i> </a>
                                                <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-language">
                                                <?php
                                                    echo '<li><a href="#">USD - US Dollar</a></li>';
                                                    echo '<li><a href="#">EUR - Euro</a></li>';
                                                    echo '<li><a href="#">GBP - British Pound</a></li>';
                                                    echo '<li><a href="#">INR - Indian Rupee</a></li>';
                                                    echo '<li><a href="#">BDT - Bangladesh Taka</a></li>';
                                                    echo '<li><a href="#">JPY - Japan Yen</a></li>';
                                                    echo '<li><a href="#">CAD - Canada Dollar</a></li>';
                                                    echo '<li><a href="#">AUD - Australian Dollar</a></li>';
                                                ?>
                                                </ul>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="#" class="minicart-btn toolbar-btn">
                                                    <i class="ion-bag"></i>
                                                    <span class="cart-item_count">3</span>
                                                </a>
                                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                    <div class="single-cart-item">
                                                    <?php
                                                        echo '<div class="cart-img">';
                                                        echo '<a href="cart.php"><img src="assets/images/cart/4.png" alt=""></a>';
                                                        echo '</div>';
                                                        echo '<div class="cart-text">';
                                                        echo '<h5 class="title"><a href="cart.php">Sushi</a></h5>';
                                                    ?>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                <?php
                                                                    echo '<span>1×</span>';
                                                                    echo '<span class="cart-price">PHP145.00</span>';
                                                                ?>
                                                                </div>
                                                                <button type="button"><i class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="cart.php"><img src="assets/images/cart/5.png" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                        <?php
                                                            echo '<h5 class="title"><a href="cart.php" title="Adobo">Adobo</a></h5>';
                                                        ?>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                <?php
                                                                    echo '<span>1×</span>';
                                                                    echo '<span class="cart-price">PHP50.00</span>';
                                                                ?>
                                                                </div>
                                                                <button type="button"><i class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="cart.php"><img src="assets/images/cart/6.png" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                        <?php
                                                            echo '<h5 class="title"><a href="cart.php">Hal-Halo</a></h5>';
                                                        ?>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                <?php
                                                                    echo '<span>1×</span>';
                                                                    echo '<span class="cart-price">PHP75.00</span>';
                                                                ?>
                                                                </div>
                                                                <button type="button"><i class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-price-total d-flex justify-content-between">
                                                    <?php
                                                        echo '<h5>Total :</h5>';
                                                        echo '<h5>PHP270.00</h5>';
                                                    ?>
                                                    </div>
                                                    <div class="cart-links d-flex justify-content-center">
                                                    <?php
                                                        echo '<a class="obrien-button white-btn" href="cart.php">View cart</a>';
                                                        echo '<a class="obrien-button white-btn" href="checkout.php">Checkout</a>';
                                                    ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mobile-menu-btn d-lg-none">
                                                <a class="off-canvas-btn" href="#">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header Area End -->
            <!-- Sticky Header Start Here-->
            <div class="main-header header-sticky">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-lg-12 col-custom">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-xl-2 col-sm-6 col-6 col-custom">
                                    <div class="header-logo">
                                        <a href="index.php">
                                        <?php
                                            echo '<img class="img-full" src="assets/images/logo/lugo.png" alt="Header Logo">';
                                        ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-7 position-static d-none d-lg-block col-custom">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul class="nav">
                                            <li>
                                                <a class="active" href="index.php">
                                                <?php
                                                    echo '<span class="menu-text"> Home</span>';
                                                ?>
                                                   
                                                </a>
                                                <ul class="dropdown-submenu dropdown-hover">
                                                    
                                                   
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="shop-list-left.php">
                                                    <span class="menu-text">Shop</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="mega-menu dropdown-hover">
                                                    <div class="menu-colum">
                                                        <ul>
                                                        <?php
                                                            echo '<li><span class="mega-menu-text">Shop</span></li>';
                                                            echo '<li><a href="shop.html">Chinese Food</a></li>';
                                                            echo '<li><a href="shop-right-sidebar.php">Japanese Food</a></li>';
                                                            echo '<li><a href="shop-list-left.php">Filipino Food</a></li>';
                                                            
                                                        ?>
                                                    
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="menu-colum">
                                                        <ul>
                                                        <?php
                                                            echo '<li><span class="mega-menu-text">Others</span></li>';
                                                            echo '<li><a href="cart.html">Cart Page</a></li>';
                                                            echo '<li><a href="checkout.html">Checkout Page</a></li>';
                                                            echo '<li><a href="wishlist.html">Wishlist Page</a></li>';
                                                        ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="blog-details-sidebar.php">
                                                    <span class="menu-text"> Blog</span>
                                                   
                                                </a>
                                                
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="menu-text"> Pages</span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <?php
                                                    echo '<ul class="dropdown-submenu dropdown-hover">';
                                                    echo '<li><a href="frequently-questions.php">FAQ</a></li>';
                                                    echo '<li><a href="my-account.php">My Account</a></li>';
                                                    echo '<li><a href="login.php">Login</a></li>';
                                                    echo '<li><a href="register.php">Register</a></li>';
                                                    echo '</ul>';
                                                ?>
                                            </li>
                                            <li>
                                                <a href="about-us.php">
                                                <?php
                                                    echo '<span class="menu-text"> About</span>';
                                                ?>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us.php">
                                                <?php
                                                    echo '<span class="menu-text">Contact</span>';
                                                ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="col-lg-2 col-xl-3 col-sm-6 col-6 col-custom">
                                    <div class="header-right-area main-nav">
                                        <ul class="nav">
                                        <?php
                                            echo '<li class="login-register-wrap d-none d-xl-flex">';
                                            echo '<span><a href="login.php">Login</a></span>';
                                            echo '<span><a href="register.php">Register</a></span>';
                                            echo '</li>';
                                        ?>
                                            <li class="sidemenu-wrap d-none d-lg-flex">
                                                <a href="#">USD <i class="fa fa-caret-down"></i> </a>
                                                <ul class="dropdown-sidemenu dropdown-hover-2 dropdown-language">
                                                <?php
                                                    echo '<li><a href="#">USD - US Dollar</a></li>';
                                                    echo '<li><a href="#">EUR - Euro</a></li>';
                                                    echo '<li><a href="#">GBP - British Pound</a></li>';
                                                    echo '<li><a href="#">INR - Indian Rupee</a></li>';
                                                    echo '<li><a href="#">BDT - Bangladesh Taka</a></li>';
                                                    echo '<li><a href="#">JPY - Japan Yen</a></li>';
                                                    echo '<li><a href="#">CAD - Canada Dollar</a></li>';
                                                    echo '<li><a href="#">AUD - Australian Dollar</a></li>';
                                                ?>
                                                </ul>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="#" class="minicart-btn toolbar-btn">
                                                    <i class="ion-bag"></i>
                                                    <span class="cart-item_count">3</span>
                                                </a>
                                                <div class="cart-item-wrapper dropdown-sidemenu dropdown-hover-2">
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                        <?php
                                                            echo '<a href="cart.php"><img src="assets/images/cart/4.png" alt=""></a>';
                                                        ?>
                                                        </div>
                                                        <div class="cart-text">
                                                        <?php
                                                            echo '<h5 class="title"><a href="cart.php">Sushi</a></h5>';
                                                            echo '<div class="cart-text-btn">';
                                                            echo '<div class="cart-qty">';
                                                            echo '<span>1×</span>';
                                                            echo '<span class="cart-price">PHP145.00</span>';
                                                            echo '</div>';
                                                        ?>
                                                                <button type="button"><i class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                        <?php
                                                                    echo '<a href="cart.php"><img src="assets/images/cart/5.png" alt=""></a>';
                                                        ?>
                                                        </div>
                                                        <div class="cart-text">
                                                            <h5 class="title"><a href="cart.php" title="Adobo">Adobo</a></h5>
                                                            <?php
                                                                echo '<div class="cart-text-btn">';
                                                                echo '<div class="cart-qty">';
                                                                echo '<span>1×</span>';
                                                                echo '<span class="cart-price">PHP50.00</span>';
                                                                echo '</div>';
                                                            ?>
                                                                <button type="button"><i class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart-item">
                                                        <div class="cart-img">
                                                            <a href="cart.php"><img src="assets/images/cart/6.png" alt=""></a>
                                                        </div>
                                                        <div class="cart-text">
                                                        <?php
                                                            echo '<h5 class="title"><a href="cart.php">Halo-Halo</a></h5>';
                                                        ?>
                                                            <div class="cart-text-btn">
                                                                <div class="cart-qty">
                                                                <?php
                                                                    echo '<span>1×</span>';
                                                                    echo '<span class="cart-price">PHP75.00</span>';
                                                                ?>
                                                                </div>
                                                                <button type="button"><i class="ion-trash-b"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cart-price-total d-flex justify-content-between">
                                                    <?php
                                                            echo '<h5>Total :</h5>';
                                                            echo '<h5>PHP270.00</h5>';
                                                    ?>
                                                    </div>
                                                    <div class="cart-links d-flex justify-content-center">
                                                    <?php
                                                        echo '<a class="obrien-button white-btn" href="cart.php">View cart</a>';
                                                        echo '<a class="obrien-button white-btn" href="checkout.php">Checkout</a>';
                                                    ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mobile-menu-btn d-lg-none">
                                                <a class="off-canvas-btn" href="#mobileMenu">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sticky Header End Here -->
            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper" id="mobileMenu">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">Home</a>
                                        
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                <ul class="dropdown">
                                        
                                                    <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Product Details</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                                    <li><a href="external-product-details.html">External Product Details</a></li>
                                                    <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                                    <li><a href="countdown-product-details.html">Countdown Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Others</a>
                                                <ul class="dropdown">
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="wishlist.html">Wish List Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <?php
                                            echo '<li class="menu-item-has-children "><a href="#">Pages</a>';
                                            echo '<ul class="dropdown">';
                                            echo '<li><a href="frequently-questions.php">FAQ</a></li>';
                                            echo '<li><a href="my-account.php">My Account</a></li>';
                                            echo '<li><a href="login-register.php">login &amp; register</a></li>';
                                            echo '</ul>';
                                            echo '</li>';
                                            echo '<li><a href="about-us.php">About Us</a></li>';
                                            echo '<li><a href="contact-us.php">Contact</a></li>';
                                            echo '</ul>';
                                    ?>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <!-- mobile menu navigation start -->
                            <?php
                                echo '<nav>';
                                echo '<ul class="mobile-menu">';
                                echo '<li class="menu-item-has-children"><a href="#">My Account</a>';
                                echo '<ul class="dropdown">';
                                echo '<li><a href="login.html">Login</a></li>';
                                echo '<li><a href="Register.html">Register</a></li>';
                                echo '</ul>';
                                echo '</li>';
                                echo '<li class="menu-item-has-children"><a href="#">Currency:USD</a>';
                                echo '<ul class="dropdown">';
                                echo '<li><a href="#">USD - US Dollar</a></li>';
                                echo '<li><a href="#">EUR - Euro</a></li>';
                                echo '<li><a href="#">GBP - British Pound</a></li>';
                                echo '<li><a href="#">INR - Indian Rupee</a></li>';
                                echo '<li><a href="#">BDT - Bangladesh Taka</a></li>';
                                echo '<li><a href="#">JPY - Japan Yen</a></li>';
                                echo '<li><a href="#">CAD - Canada Dollar</a></li>';
                                echo '<li><a href="#">AUD - Australian Dollar</a></li>';
                                echo '</ul>';
                                echo '</li>';
                                echo '</ul>';
                                echo '</nav>';
                            ?>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="info@yourdomain.com">(1245) 2456 012</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="info@yourdomain.com">info@yourdomain.com</a>
                                    </li>
                                </ul>
                            </div>
                            <?php
                                echo '<div class="off-canvas-widget-social">';
                                echo '<a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>';
                                echo '<a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>';
                                echo '<a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>';
                                echo '<a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>';
                                echo '<a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>';
                                echo '</div>';
                            ?>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>
        <!-- Header Area End Here -->
        <!-- Begin Slider Area One -->
        <div class="slider-area">
            <div class="obrien-slider arrow-style" data-slick-options='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "infinite": true,
        "arrows": true,
        "dots": true,
        "autoplay" : true,
        "fade" : true,
        "autoplaySpeed" : 7000,
        "pauseOnHover" : false,
        "pauseOnFocus" : false
        }' data-slick-responsive='[
        {"breakpoint":992, "settings": {
        "slidesToShow": 1,
        "arrows": false,
        "dots": true
        }}
        ]'>
        <?php
            echo '<div class="slide-item slide-1 bg-position slide-bg-1 animation-style-01">';
            echo '<div class="slider-content">';
            echo '<h4 class="slider-small-title">Pure Beef</h4>';
            echo '<h2 class="slider-large-title">Fresh Burger</h2>';
            echo '<div class="slider-btn">';
            echo '<a class="obrien-button black-btn" href="shop-list-left.php">Shop Now</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="slide-item slide-2 bg-position slide-bg-1 animation-style-01">';
            echo '<div class="slider-content">';
            echo '<h4 class="slider-small-title">Healthy life with</h4>';
            echo '<h2 class="slider-large-title">FoodKo</h2>';
            echo '<div class="slider-btn">';
            echo '<a class="obrien-button black-btn" href="shop-list-left.php">Shop Now</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        ?>
        <!-- Slider Area One End Here -->
        <!-- Feature Area Start Here -->
        <div class="feature-area">
            <div class="container container-default custom-wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 col-md-12 col-custom">
                        <div class="feature-content-wrapper">
                        <?php
                            echo '<h2 class="title">Voucher</h2>';
                            echo '<p class="desc-content">Grab your voucher now until May 22, 2022</p>';
                            echo '<p class="desc-content"> Shake Shake Fries</p>';
                            echo '<p class="desc-content"> That will make you shout uwu</p>';
                        ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 col-md-12 col-custom">
                        <div class="feature-image">
                        <?php
                            echo '<img src="assets/images/feature/fries.png" alt="Obrien Feature">';
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End Here -->
        <!-- Product Area Start Here -->
        <div class="product-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-5 m-auto text-center col-custom">
                        <div class="section-content">
                        <?php
                            echo '<h2 class="title-1 text-uppercase">Best Sellers!</h2>';
                            echo '<div class="desc-content">';
                            echo '<p>All best seller product are now available for you and your can buy this product from here any time any where so shop now!</p>';
                            echo '</div>';
                        ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 product-wrapper col-custom">
                        <div class="product-slider" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": false,
                        "dots": false
                        }' data-slick-responsive='[
                        {"breakpoint": 1200, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint": 992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint": 576, "settings": {
                        "slidesToShow": 1
                        }}
                        ]'>
                            <div class="single-item">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.html">
                                        <?php
                                            echo '<img src="assets/images/product/4.png" alt="" class="product-image-1 w-100">';
                                          
                                        ?>
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-title">
                                        
                                        <?php
                                           
                                        ?>
                                        </div>
                                        <div class="price-box">
                                        <?php
                                            echo '<span class="regular-price ">PHP145.00</span>';
                                            echo '<span class="old-price"><del>PHP160.00</del></span>';
                                        ?>
                                        </div>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a href="cart.php" title="Add To cart">
                                            <i class="ion-bag"></i>
                                        </a>
                                        
                                        <a href="wishlist.php" title="Add To Wishlist">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                                            <i class="ion-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.html">
                                        <?php
                                            echo '<img src="assets/images/product/5.png" alt="" class="product-image-1 w-100">';
                                        ?>
                                            
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <?php
                                            echo '<div class="product-title">';
                                            echo '<h4 class="title-2"> <a href="product-details.html">Adobo</a></h4>';
                                            echo '</div>';
                                            echo '<div class="price-box">';
                                            echo '<span class="regular-price ">PHP50.00</span>';
                                            echo '<span class="old-price"><del>PHP60.00</del></span>';
                                            echo '</div>';
                                        ?>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a href="cart.php" title="Add To cart">
                                            <i class="ion-bag"></i>
                                        </a>
                                    
                                        </a>
                                        <a href="wishlist.php" title="Add To Wishlist">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                                            <i class="ion-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.html">
                                        <?php
                                            echo '<img src="assets/images/product/6.png" alt="" class="product-image-1 w-100">';
                                        ?>
                                           
                                        </a>
                                    </div>
                                    <div class="label-product">
                                    <?php
                                        echo '<span class="label-sale position-absolute text-uppercase text-white text-center d-block">Soldout</span>';
                                    ?>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <?php
                                            echo '<div class="product-title">';
                                            echo '<h4 class="title-2"> <a href="product-details.html">Halo-Halo</a></h4>';
                                            echo '</div>';
                                            echo '<div class="price-box">';
                                            echo '<span class="regular-price ">PHP75.00</span>';
                                            echo '<span class="old-price"><del>PHP85.00</del></span>';
                                            echo '</div>';
                                        ?>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a href="cart.php" title="Add To cart">
                                            <i class="ion-bag"></i>
                                        </a>
                                        
                                        </a>
                                        <a href="wishlist.php" title="Add To Wishlist">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                                            <i class="ion-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-product position-relative">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.html">
                                        <?php
                                            echo '<img src="assets/images/product/7.png" alt="" class="product-image-1 w-100">';
                                        ?>
                                
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <?php
                                            echo '<div class="product-title">';
                                            echo '<h4 class="title-2"> <a href="product-details.html">Chinese Noodles</a></h4>';
                                            echo '</div>';
                                            echo '<div class="price-box">';
                                            echo '<span class="regular-price ">PHP120.00</span>';
                                            echo '<span class="old-price"><del> PHP135.00</del></span>';
                                            echo '</div>';
                                        ?>
                                    </div>
                                    <div class="add-action d-flex position-absolute">
                                        <a href="cart.php" title="Add To cart">
                                            <i class="ion-bag"></i>
                                        </a>
                                        
                                        </a>
                                        <a href="wishlist.php" title="Add To Wishlist">
                                            <i class="ion-ios-heart-outline"></i>
                                        </a>
                                        <a href="#exampleModalCenter" data-bs-toggle="modal" title="Quick View">
                                            <i class="ion-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Area End Here -->
        <!-- Banner Fullwidth Area Start Here -->
        
        <!-- Banner Fullwidth Area End Here -->
        <!-- Banner Area Start Here -->
        
        <!-- Banner Area End Here -->
        <!-- Product Area Start Here -->
        
        <!-- Product Area End Here -->
        <!-- Newslatter Area Start Here -->
        <div class="newsletter-area">
            <div class="container container-default h-100 custom-area">
                <div class="row h-100">
                    <div class="col-lg-8 col-xl-5 offset-xl-6 offset-lg-3 col-custom">
                        <div class="newsletter-content text-center d-flex flex-column align-items-center justify-content-center h-100">
                            <div class="section-content">
                            <?php
                                echo '<h4 class="title-4 text-uppercase">Special <span>Offer</span> for subscription</h4>';
                                echo '<h2 class="title-3 text-uppercase">Get instant discount for membership</h2>';
                                echo '<p class="desc-content">Subscribe our newsletter and all latest news of our <br>latest product, promotion and offers</p>';
                            ?>
                            </div>
                            <div class="newsletter-form-wrap ml-auto mr-auto">
                                <form id="mc-form" class="mc-form d-flex position-relative">
                                    <input type="email" id="mc-email" class="form-control email-box" placeholder="FoodKo@email.com" name="EMAIL">
                                    <button id="mc-submit" class="btn primary-btn obrien-button newsletter-btn position-absolute" type="submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newslatter Area End Here -->
        <!-- Latest Blog Area Start Here -->
        
        <!-- Latest Blog Area End Here -->
        <!-- Support Area Start Here -->
        <div class="support-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="support-wrapper d-flex">
                        <?php
                            echo '<div class="support-content">';
                            echo '<h1 class="title">Need Help ?</h1>';
                            echo '<p class="desc-content">Call our support 24/7 at 01234-567-890</p>';
                            echo '</div>';
                            echo '<div class="support-button d-flex align-items-center">';
                            echo '<a class="obrien-button primary-btn" href="contact-us.php">Contact now</a>';
                            echo '</div>';
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Area End Here -->
        <!-- Footer Area Start Here -->
        <footer class="footer-area">
            <div class="footer-widget-area">
                <div class="container container-default custom-area">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-custom">
                            <div class="single-footer-widget m-0">
                                <div class="footer-logo">
                                    <a href="index.php">
                                        <img src="assets/images/logo/lugo1.png" alt="Logo Image">
                                    </a>
                                </div>
                                <?php
                                    echo '<p class="desc-content">FoodKo is the best Online Food Ordering Website!</p>';
                                ?>
                                <div class="social-links">
                                    <ul class="d-flex">
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Facebook">
                                                <i class="fa fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Linkedin">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Youtube">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="border rounded-circle" href="#" title="Vimeo">
                                                <i class="fa fa-vimeo"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                            <?php
                                echo '<h2 class="widget-title">Information</h2>';
                                echo '<ul class="widget-list">';
                                echo '<li><a href="about-us.php">About Me</a></li>';
                                echo '<li><a href="contact-us.php">Contact Us</a></li>';
                                echo '</ul>';
                            ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                            <div class="single-footer-widget">
                            <?php
                                echo '<h2 class="widget-title">Quicklink</h2>';
                                echo '<ul class="widget-list">';
                                echo '<li><a href="about-us.php">About</a></li>';
                                echo '<li><a href="blog.php">Blog</a></li>';
                                echo '<li><a href="cart.php">Cart</a></li>';
                                echo '<li><a href="contact-us.php">Contact</a></li>';
                                echo '</ul>';
                            ?>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-2 col-custom">
                           
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-custom">
                            <div class="single-footer-widget">
                            <?php
                                echo '<h2 class="widget-title">See Information</h2>';
                                echo '<div class="widget-body">';
                                echo '<address>Santol, Boac, Marinduque <br>Phone: 01254 698 785, 36598 254 987<br>Email: foodko@gmail.com</address>';
                                echo '</div>';
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area">
                <div class="container custom-area">
                    <div class="row">
                        <div class="col-12 text-center col-custom">
                            <div class="copyright-content">
                                <p>Copyright © 2020 <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a> | Built with&nbsp;<strong>Obrien</strong>&nbsp;by <a href="https://hasthemes.com/" title="https://hasthemes.com/">HasThemes</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>

    <!-- Modal Area Start Here -->
    <div class="modal fade obrien-modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="close-icon" aria-hidden="true">x</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 text-center">
                                <div class="product-image">
                                <?php
                                    echo '<img src="assets/images/product/4.png" alt="Product Image">';
                                ?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="modal-product">
                                    <div class="product-content">
                                    <?php
                                        echo '<div class="product-title">';
                                        echo '<h4 class="title">Sushi</h4>';
                                        echo '</div>';
                                        echo '<div class="price-box">';
                                        echo '<span class="regular-price ">PHP145.00</span>';
                                        echo '<span class="old-price"><del> PHP160.00</del></span>';
                                        echo '</div>';
                                    ?>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>1 Review</span>
                                        </div>
                                        <?php
                                            echo '<p class="desc-content">Sushi (すし, 寿司, 鮨, pronounced [sɯɕiꜜ] or [sɯꜜɕi]) is a traditional Japanese dish of prepared vinegared rice (鮨飯, sushi-meshi), usually with some sugar and salt, accompanying a variety of ingredients (ネタ, neta), such as seafood, often raw, and vegetables.</p>';
                                            echo '';
                                        ?>                                        
                                            <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                            <?php
                                                echo '<select class="form-control nice-select w-100">';
                                                echo '<option>S</option>';
                                                echo '<option>M</option>';
                                                echo '<option>L</option>';
                                                echo '<option>XL</option>';
                                                echo '<option>XXL</option>';
                                                echo '</select>';
                                            ?>
                                            </div>
                                        </form>
                                        <div class="quantity-with_btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="0" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>
                                            <div class="add-to_cart">
                                            <?php
                                                echo '<a class="btn obrien-button primary-btn" href="cart.php">Add to cart</a>';
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Area End Here -->

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="ion-chevron-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/js/plugins/slick.min.js"></script>
    <!-- Countdown JS -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- Ajax JS -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Nice Select JS -->
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <!-- Jquery Ui JS -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- jquery magnific popup js -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>