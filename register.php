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
                                                             
                                                             echo '<li><a href="shop-list-left1.php">Chinese Food</a></li>';
                                                             echo '<li><a href="shop-list-left2.php">Japanese Food</a></li>';
                                                             echo '<li><a href="shop-list-left3.php">Filipino Food</a></li>';
                                                         

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
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                            <li><a href="index-2.html">Home Page 2</a></li>
                                            <li><a href="index-3.html">Home Page 3</a></li>
                                            <li><a href="index-4.html">Home Page 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
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
                                    <li class="menu-item-has-children "><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                            <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            <li><a href="blog-grid-fullwidth.html">Blog Grid Fullwidth</a></li>
                                            <li><a href="blog-details-sidebar.html">Blog Details Sidebar Page</a></li>
                                            <li><a href="blog-details-fullwidth.html">Blog Details Fullwidth Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="frequently-questions.html">FAQ</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">login &amp; register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->
                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">My Account</a>
                                        <ul class="dropdown">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="Register.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Currency:USD</a>
                                        <ul class="dropdown">
                                            <li><a href="#">USD - US Dollar</a></li>
                                            <li><a href="#">EUR - Euro</a></li>
                                            <li><a href="#">GBP - British Pound</a></li>
                                            <li><a href="#">INR - Indian Rupee</a></li>
                                            <li><a href="#">BDT - Bangladesh Taka</a></li>
                                            <li><a href="#">JPY - Japan Yen</a></li>
                                            <li><a href="#">CAD - Canada Dollar</a></li>
                                            <li><a href="#">AUD - Australian Dollar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
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
                            <div class="off-canvas-widget-social">
                                <a title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>
                                <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                                <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->
        </header>
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumbs-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="breadcrumb-content position-relative section-content">
                            <h3 class="title-3">Login-Register</h3>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Login-Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Login Area Start Here -->
        <div class="login-register-area mt-no-text mb-no-text">
            <div class="container container-default-2 custom-area">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                        <div class="login-register-wrapper">
                            <div class="section-content text-center mb-5">
                                <h2 class="title-4 mb-2">Create Account</h2>
                                <p class="desc-content">Please Register using account detail bellow.</p>
                            </div>
                            <form action="#" method="post">
                                <div class="single-input-item mb-3">
                                    <input type="text" placeholder="First Name">
                                </div>
                                <div class="single-input-item mb-3">
                                    <input type="text" placeholder="Last Name">
                                </div>
                                <div class="single-input-item mb-3">
                                    <input type="email" placeholder="Email or Username">
                                </div>
                                <div class="single-input-item mb-3">
                                    <input type="password" placeholder="Enter your Password">
                                </div>
                                <div class="single-input-item mb-3">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta mb-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label" for="rememberMe">Subscribe Our Newsletter</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item mb-3">
                                    <button class="btn obrien-button-2 primary-color">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Area End Here -->
        <!-- Support Area Start Here -->
        <div class="support-area">
            <div class="container container-default custom-area">
                <div class="row">
                    <div class="col-lg-12 col-custom">
                        <div class="support-wrapper d-flex">
                            <div class="support-content">
                                <h1 class="title">Need Help ?</h1>
                                <p class="desc-content">Call our support 24/7 at 01234-567-890</p>
                            </div>
                            <div class="support-button d-flex align-items-center">
                                <a class="obrien-button primary-btn" href="contact-us.php">Contact now</a>
                            </div>
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
        <!-- Footer Area End Here -->
    </div>

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