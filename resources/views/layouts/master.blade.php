
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/lazio-preview/lazio/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 11:18:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    @yield('extra-meta')
    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/assets/img/icon.png">
    <title>Lazio - Multipurpose eCommerce Bootstrap 4 Template</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="/assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @livewireStyles
    @yield('extra-script')
</head>

<body>


    <!-- Main Wrapper Start Here -->
    <div class="wrapper bg--zircon-light color-scheme-1">
        <!-- Header Area Start Here -->
        <header class="header header-1">
            <div class="header-top header-1--top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-lg-left text-center">
                            <!-- Contact Info Start -->
                            <ul class="contact-info contact-info--1">   
                                <li class="contact-info__list"><i class="fa fa-envelope-open"></i><a href="mailto:demo@company.com">demo@company.com</a></li>  
                                <li class="contact-info__list"><i class="fa fa-phone"></i><a href="#">+88 123 456 7899</a></li>
                            </ul>
                            <!-- Contact Info End -->
                        </div>
                        <div class="col-lg-6 text-right">
                            <!-- Header Top Nav Start -->
                            <div class="header-top__nav header-top__nav--1 d-flex justify-content-lg-end justify-content-center">
                                <div class="user-info header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
                                       @guest
                                            <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Mon Compte
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="userID">
                                                <a class="dropdown-item" href="#">Mon Compte</a>
                                                <a class="dropdown-item" href="#">S'inscrire</a>
                                                <a class="dropdown-item" href="{{ route('login') }}">Se connecter</a>
                                            </div>
                                        @else
                                        <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->email}}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="userID">
                                            <a class="dropdown-item" href="{{ route('dashboard') }}">Mes commandes</a>
                                            <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button class="button-out">Se deconnecter</button>
                                            </form>
                                        </div>
                                       @endguest
                                    </div>
                                </div>
                                <div class="currency-selector header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
                                        
                                        <a class="dropdown-toggle" id="currencyID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Currency: </span>
                                            USD
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="currencyID">
                                            <a class="dropdown-item" href="#">USD</a>
                                            <a class="dropdown-item" href="#">EURO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="language-selector header-top__nav--item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="languageID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span>Language: </span>
                                            <img src="/assets/img/header/1.jpg" alt="English"> ENGLISH
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="languageID">
                                            <a class="dropdown-item" href="#"><img src="/assets/img/header/1.jpg" alt="English"> English</a>
                                            <a class="dropdown-item" href="#"><img src="/assets/img/header/2.jpg" alt="Français"> Français</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Header Top Nav End -->                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-1--middle brand-bg d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 tex-xl-left text-center">
                            <!-- Logo Start -->
                            <a href="index.html" class="logo-box">
                                <img src="/assets/img/logo/logo-white.png" alt="logo">
                            </a>
                            <!-- Logo End -->
                        </div>
                        <div class="col-xl-5 col-lg-7 d-none d-lg-block">
                            <nav class="main-navigation">
                                <!-- Mainmenu Start -->
                                <ul class="mainmenu">
                                    <li class="mainmenu__item active menu-item-has-children">
                                        <a href="index.html" class="mainmenu__link">Home</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="index.html">Home 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home 4</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home 5</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html">Home 6</a>
                                            </li>
                                            <li>
                                                <a href="index-7.html">Home 7</a>
                                            </li>
                                            <li>
                                                <a href="index-8.html">Home 8</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="shop.html" class="mainmenu__link">Shop</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="shop.html">Shop Gird</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                    <li><a href="shop-fullwidth-4-column.html">Shop 4 Column</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="shop-list.html">Shop List</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="shop-list.html">Shop List Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="single-product.html">Single Product</a>
                                                <ul class="sub-menu">
                                                    <li><a href="single-product.html">Tab Style 1</a></li>
                                                    <li><a href="single-product-tab-style-2.html">Tab Style 2</a></li>
                                                    <li><a href="single-product-tab-style-3.html">Tab Style 3</a></li>
                                                    <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                    <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                    <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                                    <li><a href="single-product-slider-full-width.html">Slider Full Width</a></li>
                                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                    <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    <li><a href="single-product-group.html">Group Product</a></li>
                                                    <li><a href="single-product-variable.html">Variable Product</a></li>
                                                    <li><a href="single-product-affiliate.html">Affiliate Product</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="blog.html" class="mainmenu__link">Blog</a>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children">
                                        <a href="#" class="mainmenu__link">Features</a>
                                        <ul class="megamenu three-column">
                                            <li>
                                                <a href="#">Pages</a>
                                                <ul>
                                                    <li>
                                                        <a href="about-us.html">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="about-us-2.html">About Us 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-2.html">Contact 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="services.html">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="services-2.html">Services 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html">Faq</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">404</a>
                                                    </li>
                                                    <li>
                                                        <a href="login-register.html">Login & Registration</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Blog</a>
                                                <ul>
                                                    <li>
                                                        <a href="blog.html">Blog Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-3-column.html">Blog 3 Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-4-column.html">Blog 4 Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-image.html">Image Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-gallery.html">Gallery Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-audio.html">Audio Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-video.html">Video Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Shop</a>
                                                <ul>
                                                    <li>
                                                        <a href="cart.html">Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">Compare</a>
                                                    </li>
                                                    <li>
                                                        <a href="my-account.html">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <!-- Mainmenu End -->
                            </nav>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <!-- Search Form Start -->
                            <form action="{{ route('products.search') }}" class="search-form search-form--1">
                                <div class="search-form__group search-form__group--select">
                                    <select name="category" id="searchCategory" class="search-form__select">
                                        <option value="all">All Categories</option>
                                        <optgroup label="Books, Magazines">
                                            <option>Bedroom</option>
                                            <option>Kitchen</option>
                                            <option>Livingroom</option>
                                        </optgroup>
                                        <optgroup label="Electronics">
                                            <option>Fridge</option>
                                            <option>Laptops, Desktops</option>
                                            <option>Mobiles, Tablets</option>
                                        </optgroup>
                                        <optgroup label="Furniture">
                                            <option>Accessories</option>
                                            <option>Men</option>
                                            <option>Women</option>
                                        </optgroup>
                                        <option value="3">Home, Garden</option>
                                        <option value="3">Kids, Baby</option>
                                        <option value="3">Sport</option>
                                    </select>
                                </div>
                                <input type="text" class="search-form__input" value="{{ request()->input('q') ?? '' }}" name='q' placeholder="Entrer votre recherche...">
                                <button class="search-form__submit hover-scheme-2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <!-- Search Form End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <!-- Main Mobile Menu Start -->
                            <div class="mobile-menu"></div>
                            <!-- Main Mobile Menu End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-1--bottom">
                <div class="container">
                    <div class="row custom-row align-items-end">
                        <div class="col-lg-3">
                            <!-- Category Nav Start -->
                            <div class="category-nav">
                                <h2 class="category-nav__title primary-bg" id="js-cat-nav-title"><i class="fa fa-bars"></i> <span>Categories</span></h2>

                                <ul class="category-nav__menu hide-in-default" id="js-cat-nav">
                                   @foreach (App\Models\Category::all() as $category)
                                    <li class="category-nav__menu__item {{-- has-children --}}">
                                        <a href="{{ route('products.item', ['categorie' => $category->slug ]) }}"><i class="fa fa-coffee"></i>{{ $category->name }}</a>
                                    {{--  <div class="category-nav__submenu">
                                            <div class="category-nav__submenu--inner">
                                                <ul>
                                                    <li><a href="shop.html">Health &amp; Beauties</a></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </li>
                                   @endforeach
                                    <li class="category-nav__menu__item">
                                        <a href="shop.html" class="js-expand-hidden-menu"> More Categories</a>
                                    </li>
                                </ul>
                            </div> 
                            <!-- Category Nav End -->
                            <div class="category-mobile-menu"></div>
                        </div>
                        <div class="col-lg-8 col-md-10">
                            <div class="corporate corporate--1">
                                <div class="corporate__single">
                                    <div class="corporate__icon">
                                        <i class="fa fa-refresh"></i>
                                    </div>
                                    <div class="corporate__content">
                                        <h3 class="corporate__title">Free Return</h3>
                                        <p class="corporate__text">30 days money back guarantee!</p>
                                    </div>
                                </div>
                                <div class="corporate__single">
                                    <div class="corporate__icon">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                    <div class="corporate__content">
                                        <h3 class="corporate__title">FREE SHIPPING</h3>
                                        <p class="corporate__text">Free shipping on all order</p>
                                    </div>
                                </div>
                                <div class="corporate__single">
                                    <div class="corporate__icon">
                                        <i class="fa fa-support"></i>
                                    </div>
                                    <div class="corporate__content">
                                        <h3 class="corporate__title">SUPPORT 24/7</h3>
                                        <p class="corporate__text">We support online 24hrs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-2 align-self-start">
                            <!-- Header Cart Start -->
                            @livewire('cart.mini-item')
                            <!-- Header Cart End -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Header Start -->
            <div class="fixed-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- Sticky Logo Start -->
                            <a class="sticky-logo" href="index.html">
                                <img src="/assets/img/logo/logo-white.png" alt="logo">
                            </a>
                            <!-- Sticky Logo End -->
                        </div>
                        <div class="col-lg-9">
                            <!-- Sticky Mainmenu Start -->
                            <nav class="sticky-navigation">
                                <ul class="mainmenu sticky-menu">
                                    <li class="mainmenu__item active menu-item-has-children sticky-has-child">
                                        <a href="index.html" class="mainmenu__link">Home</a>
                                        <ul class="sub-menu hidden-sub">
                                            <li>
                                                <a href="index.html">Home 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home 4</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home 5</a>
                                            </li>
                                            <li>
                                                <a href="index-6.html">Home 6</a>
                                            </li>
                                            <li>
                                                <a href="index-7.html">Home 7</a>
                                            </li>
                                            <li>
                                                <a href="index-8.html">Home 8</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children sticky-has-child sticky-has-child">
                                        <a href="shop.html" class="mainmenu__link">Shop</a>
                                        <ul class="sub-menu hidden-sub">
                                            <li class="menu-item-has-children sticky-has-child">
                                                <a href="shop.html">Shop Gird</a>
                                                <ul class="sub-menu hidden-sub">
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                    <li><a href="shop-fullwidth-4-column.html">Shop 4 Column</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children sticky-has-child">
                                                <a href="shop-list.html">Shop List</a>
                                                <ul class="sub-menu hidden-sub">
                                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="shop-list.html">Shop List Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children sticky-has-child">
                                                <a href="single-product.html">Single Product</a>
                                                <ul class="sub-menu hidden-sub">
                                                    <li><a href="single-product.html">Tab Style 1</a></li>
                                                    <li><a href="single-product-tab-style-2.html">Tab Style 2</a></li>
                                                    <li><a href="single-product-tab-style-3.html">Tab Style 3</a></li>
                                                    <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                    <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                    <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                                    <li><a href="single-product-slider-full-width.html">Slider Full Width</a></li>
                                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                    <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    <li><a href="single-product-group.html">Group Product</a></li>
                                                    <li><a href="single-product-variable.html">Variable Product</a></li>
                                                    <li><a href="single-product-affiliate.html">Affiliate Product</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="blog.html" class="mainmenu__link">Blog</a>
                                    </li>
                                    <li class="mainmenu__item menu-item-has-children sticky-has-child">
                                        <a href="#" class="mainmenu__link">Features</a>
                                        <ul class="megamenu three-column hidden-sub">
                                            <li>
                                                <a href="#" class="megamenu__heading">Pages</a>
                                                <ul class="hidden-sub">
                                                    <li>
                                                        <a href="about-us.html">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a href="about-us-2.html">About Us 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact.html">Contact</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-2.html">Contact 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="services.html">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="services-2.html">Services 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html">Faq</a>
                                                    </li>
                                                    <li>
                                                        <a href="404.html">404</a>
                                                    </li>
                                                    <li>
                                                        <a href="login-register.html">Login & Registration</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="megamenu__heading">Blog</a>
                                                <ul class="hidden-sub">
                                                    <li>
                                                        <a href="blog.html">Blog Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-3-column.html">Blog 3 Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-4-column.html">Blog 4 Column</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-image.html">Image Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-gallery.html">Gallery Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-audio.html">Audio Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-video.html">Video Format</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-blog-right-sidebar.html">Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="megamenu__heading">Shop</a>
                                                <ul class="hidden-sub">
                                                    <li>
                                                        <a href="cart.html">Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">Compare</a>
                                                    </li>
                                                    <li>
                                                        <a href="my-account.html">My Account</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <div class="sticky-mobile-menu">
                                    <span class="sticky-menu-btn"></span>
                                </div>
                            </nav>
                            <!-- Sticky Mainmenu End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sticky Header End -->
        </header>
        <!-- Header Area End Here -->

        <!-- Breadcumb area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><a>Shop 3 Column</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->
       <div class="container">
        @if (request()->input('q'))
        <h1>{{ $products->total()}} résultat(s) pour la rechercher "{{ request()->input('q') }}"</h1>
    @endif
    @if (count($errors)  > 0)
    <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       </div>
        <!-- Main Wrapper Start -->
        @yield('content')
        <!-- Main Wrapper End -->

        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row pt--40 pb--40">
                        <div class="col-md-4 mb-sm--30">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>+88 123 456 7899</h4>
                                    <p>Free support line!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-sm--30">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>Support@roadthemes.com</h4>
                                    <p>Orders Support!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="method-box">
                                <div class="method-box__icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="method-box__content">
                                    <h4>Mon - Fri / 8:00 - 18:00</h4>
                                    <p>Working Days/Hours!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="line">
                        </div>
                    </div>
                    <div class="row pt--40 pb--40">
                        <div class="col-lg-8 mb-md--30">
                            <div class="row">
                                <div class="col-md-4 mb-sm--30">
                                    <div class="footer-widget">
                                        <h3 class="widget-title">Contact US</h3>
                                        <ul class="widget-menu">
                                            <li><a href="#">Brands</a></li>
                                            <li><a href="#">Gift Vouchers</a></li>
                                            <li><a href="#">Affiliates</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="my-account.html">Order History</a></li>
                                            <li><a href="my-account.html">Track Your Order</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-sm--30">
                                    <div class="footer-widget">
                                        <h3 class="widget-title">CUSTOMER SERVICE</h3>
                                        <ul class="widget-menu">
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="my-account.html">Order History</a></li>
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="#">Unsubscribe Notification</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <h3 class="widget-title">INFORMATION</h3>
                                        <ul class="widget-menu">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="my-account.html">Delivery Information</a></li>
                                            <li><a href="privacy.html">Privacy Policy</a></li>
                                            <li><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                                            <li><a href="#">Warranty</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="login-register.html">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-widget mb--40">
                                <h3 class="widget-title">DOWNLOAD APP</h3>
                                <div class="app-btn-group">
                                    <a href="#" class="app-btn apple-btn">App store</a>
                                    <a href="#" class="app-btn gplay-btn">Play store</a>
                                </div>

                            </div>
                            <div class="footer-widget social-widget">
                                <h3 class="widget-title">Follow Us</h3>
                                <ul class="social social-2">
                                    <li class="social__item">
                                        <a class="social__link" href="facebook.com"  data-toggle="tooltip" data-placement="top" title="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a class="social__link" href="twitter.com"  data-toggle="tooltip" data-placement="top" title="twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a class="social__link" href="pinterest.com"  data-toggle="tooltip" data-placement="top" title="pinterest">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a class="social__link" href="linkedin.com"  data-toggle="tooltip" data-placement="top" title="linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a class="social__link" href="vimeo.com"  data-toggle="tooltip" data-placement="top" title="vimeo">
                                            <i class="fa fa-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="line">
                        </div>
                    </div>
                    <div class="row pt--40 pb--40">
                        <div class="col-12 text-center">
                            <a href="index.html" class="footer-logo">
                                <img src="/assets/img/logo/logo-blue.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="row pb--30">
                        <div class="col-12 text-center">
                            <ul class="footer-menu">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop.html">Men</a></li>
                                <li><a href="shop.html">Laptops &amp; Desktops</a></li>
                                <li><a href="shop.html">Kitchen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <hr class="line">
                        </div>
                    </div>
                    <div class="row pt--40 pb--40">
                        <div class="col-md-6 text-md-left text-center mb-sm--30">
                            <!-- Copyright Text Start -->
                            <p class="copyright-text">Copyright &copy; 2018  <a href="index.html">Lazio</a> All rights reserved.</p>
                            <!-- Copyright Text End -->
                        </div>
                        <div class="col-md-6 text-md-right text-center">
                            <img src="/assets/img/icons/payment-icon.png" alt="payment">
                        </div>
                    </div>
                </div>
            </div>
            <div class="subscription-area primary-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-sm--30">
                            <div class="subscription-text">
                                <div class="subscription-text__icon">
                                    <i class="fa fa-envelope-open color--white"></i>
                                </div>
                                <div class="subscription-text__right">
                                    <h3 class="color--white">Newsletter</h3>
                                    <p class="color--white">Sign up for our newsletter to get up-to-date from us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form class="newsletter-form validate"  action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                <input type="email" class="newsletter-form__input" id="email" placeholder="Enter your email..">
                                <input type="submit" value="Subscribe" class="newsletter-form__submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Scroll To Top -->
        
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-up"></i></a>

        <!-- Modal -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div class="row">
                    <div class="col-md-5">
                        <div class="tab-content product-thumb-large">
                            <div id="thumb1" class="tab-pane active show fade">
                                <img src="/assets/img/products/electronics-15-540x600.jpg" alt="product thumb">
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <img src="/assets/img/products/furniture-14.jpg" alt="product thumb">
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <img src="/assets/img/products/furniture-17.jpg" alt="product thumb">
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <img src="/assets/img/products/furniture-7.jpg" alt="product thumb">
                            </div>
                            <div id="thumb5" class="tab-pane fade">
                                <img src="/assets/img/products/electronics-15-540x600.jpg" alt="product thumb">
                            </div>
                            <div id="thumb6" class="tab-pane fade">
                                <img src="/assets/img/products/furniture-14.jpg" alt="product thumb">
                            </div>
                            <div id="thumb7" class="tab-pane fade">
                                <img src="/assets/img/products/furniture-17.jpg" alt="product thumb">
                            </div>
                            <div id="thumb8" class="tab-pane fade">
                                <img src="/assets/img/products/furniture-7.jpg" alt="product thumb">
                            </div>
                        </div>
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel" id="thumbmenu">
                                <div class="thumb-menu-item">
                                    <a href="#thumb1" data-toggle="tab" class="nav-link active">
                                        <img src="/assets/img/products/book-15-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb2" data-toggle="tab" class="nav-link">
                                        <img src="/assets/img/products/furniture-14-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb3" data-toggle="tab" class="nav-link">
                                        <img src="/assets/img/products/furniture-17-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb4" data-toggle="tab" class="nav-link">
                                        <img src="/assets/img/products/furniture-7-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb5" data-toggle="tab" class="nav-link active">
                                        <img src="/assets/img/products/book-15-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb6" data-toggle="tab" class="nav-link">
                                        <img src="/assets/img/products/furniture-14-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb7" data-toggle="tab" class="nav-link">
                                        <img src="/assets/img/products/furniture-17-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                                <div class="thumb-menu-item">
                                    <a href="#thumb8" data-toggle="tab" class="nav-link">
                                        <img src="/assets/img/products/furniture-7-150x167.jpg" alt="product thumb">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="modal-box product">
                            <h3 class="product-title">Volutpat ut</h3>
                            <div class="product-price">
                                <span class="regular-price">$100.50</span>
                                <span class="sale-price">$98.98</span>
                            </div>
                            <a class="product-link" href="#">Voir tous les caractéristiques</a>
                            <p class="product-availability">200 In Stock</p> 
                            <div class="product-action-wrapper">
                                <div class="quantity">
                                    <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                </div>
                                <button type="button" class="btn btn-style-1 add-to-cart color-3">
                                    Add To Cart
                                </button>
                            </div>  
                            <p class="product-desc">Long printed dress with thin adjustable straps. V-neckline and wiring under the bust with ruffles at the bottom of the dress.</p>
                            <div class="social-share">
                                <h4>Share This Product</h4>
                                <ul class="social boxed-social">
                                    <li class="social__item"><a href="#" class="social__link facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social__item"><a href="#" class="social__link twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social__item"><a href="#" class="social__link google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="social__item"><a href="#" class="social__link pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li class="social__item"><a href="#" class="social__link linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>
    <!-- Main Wrapper End Here -->







    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="/assets/js/plugins.js"></script>

    <!-- Ajax Mail JS -->
    <script src="/assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    @livewireScripts
    
    @yield('extra-js')
</body>


<!-- Mirrored from demo.hasthemes.com/lazio-preview/lazio/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 11:18:28 GMT -->
</html>