@extends('layouts.master')
@section('content')

<main id="content" class="main-content-wrapper">
    <!-- Hero Area Start -->
    <div class="hero-area pb--40 pb-sm--30">
        <div class="container">
            <div class="row custom-row">
                <div class="col-lg-6 offset-lg-3 col-md-8 mb-sm--30">
                    <div class="slider-wrapper owl-carousel right-side-dot" id="homepage-slider">

                        <div class="single-slider content-v-center" style="background-image: url(/assets/img/slider/home1-slider1.jpg);">
                            <div class="slider-content">
                                <h1 class="mb-mdlg--20 mb-sm--10 color--white" data-animation="zoomIn" data-duration=".3s" data-delay=".2s">HasBOX ONE</h1>
                                <p class="color--white" data-animation="zoomIn" data-duration=".3s" data-delay=".2s">Special Edition Lunar</p>
                                <p class="mb-mdlg--20 mb-sm--10 color--white" data-animation="fadeInRight" data-duration=".3s" data-delay=".4s">Black Wireless Controller </p>
                                <div class="product-price mb-mdlg--20 mb-sm--10">
                                    <p class="regular-price" data-animation="fadeInLeft" data-duration=".3s" data-delay=".8s">$725.29</p>
                                    <p class="sale-price" data-animation="fadeInRight" data-duration=".3s" data-delay=".8s">$500.59</p>
                                </div>
                                <div class="slider-btn-group" data-animation="fadeInBottom" data-duration=".3s" data-delay=".9s">
                                    <a href="shop.html" class="btn btn-borderd btn-slider color--white color-1 btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-slider content-v-center" style="background-image: url(/assets/img/slider/home1-slider2.jpg);">
                            <div class="slider-content">
                                <h1 class="color--white" data-animation="zoomIn" data-duration=".3s" data-delay=".2s">HasNITE X</h1>
                                <h1 class="color--white" data-animation="zoomIn" data-duration=".3s" data-delay=".2s">Smart Watches</h1>
                                <p class="mb-mdlg--20 mb-sm--10 color--white" data-animation="fadeInLeft" data-duration=".3s" data-delay=".2s">Make your life smart</p>
                                <div class="product-price mb-mdlg--20 mb-sm--10">
                                    <p class="regular-price" data-animation="fadeInLeft" data-duration=".3s" data-delay=".8s">$725.29</p>
                                    <p class="sale-price" data-animation="fadeInRight" data-duration=".3s" data-delay=".8s">$500.59</p>
                                </div>
                                <div class="slider-btn-group" data-animation="fadeInBottom" data-duration=".3s" data-delay=".9s">
                                    <a href="shop.html" class="btn btn-borderd btn-slider color--white color-1 btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-sm-6">
                            <div class="promo-box full-width mb-mdsm--10 mb-xsm--10">
                                <a href="#">
                                    <img src="/assets/img/banner/home1-banner1-1.jpg" alt="promo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="promo-box full-width">
                                <a href="#">
                                    <img src="/assets/img/banner/home1-banner1-2.jpg" alt="promo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->

    <!-- New Products area Start -->
    <div class="new-products-area section-padding section-sm-padding section-sm-padding">
        <div class="container">
            <div class="row align-items-center mb--20">
                <div class="col-md-4">
                    <div class="section-title title-1 text-md-left text-center mb-sm--20">
                        <h2>New Prouducts</h2>
                    </div>
                </div>
                <div class="col-md-8 text-md-right text-center">
                    <ul class="category-list list-1 color-1">
                        <li><a href="shop.html">Video Games</a></li>
                        <li><a href="shop.html">Cell Phone</a></li>
                        <li><a href="shop.html">Electronics</a></li>
                        <li><a href="shop.html">Computer</a></li>
                        <li><a href="shop.html">See More</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="new-products-carousel bg--white owl-carousel js-new-products-carousel">
                        <div class="new-products-group">
                            <div class="product-box horizontal bg--white color-1 right-line bottom-line">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-2-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-3-250x278.jpg" alt="product" class="secondary-image">
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Integer eget augue</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$100.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-1">
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="product-box horizontal bg--white color-1 right-line">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-4-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-5-250x278.jpg" alt="product" class="secondary-image">
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="regular-price">$50.00</span>
                                        <span class="sale-price">$40.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-1">
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                      
                        

                        <div class="new-products-group">
                            <div class="product-box horizontal bg--white color-1 right-line bottom-line">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-18-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-16-250x278.jpg" alt="product" class="secondary-image">
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Volutpat ut</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="regular-price">$80.00</span>
                                        <span class="sale-price">$55.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-1">
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="product-box horizontal bg--white color-1 right-line">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/book-15-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/book-16-250x278.jpg" alt="product" class="secondary-image">
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Neque porttitor</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$70.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-1">
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Products area End -->

    <!-- Promo area Start -->
    <div class="promo-area section-padding section-sm-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="promo-box mb-sm--20">
                        <a href="#"><img src="/assets/img/banner/home1-banner2-1.jpg" alt="promo"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box">
                        <a href="#"><img src="/assets/img/banner/home1-banner2-2.jpg" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promo area End -->

    <!-- Category products area Start -->
    <div class="category-porducts-area section-padding section-sm-padding">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4">
                    <div class="section-title title-2 yellow-dark-bg text-md-left text-center">
                        <h3>Video Games</h3>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 text-md-right text-center">
                    <ul class="category-list list-2 brand-bg">
                        <li><a href="shop.html">Playstation</a></li>
                        <li><a href="shop.html">Xbox</a></li>
                        <li><a href="shop.html">Sony Psp</a></li>
                        <li><a href="shop.html">WII u</a></li>
                        <li><a href="shop.html">See More</a></li>
                    </ul>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-5 order-md-1 order-3 mt-sm--30">
                    <div class="promo-box full-width">
                        <a href="#">
                            <img src="/assets/img/banner/home1-product-banner-1.jpg" alt="promo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 order-md-2 order-1">
                    <div class="product-box limited-product bg--white color-1 border-bottom">
                        <div class="product-box__img">
                            <img src="/assets/img/products/electronics-2-540x600.jpg" alt="product" class="primary-image">
                            <img src="/assets/img/products/electronics-3-540x600.jpg" alt="product" class="secondary-image">
                            <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="product-box__content">
                            <span class="product-box__category">
                                <a href="shop.html">Electronics, </a>
                                <a href="shop.html">Men</a>
                            </span>
                            <h3 class="product-box__title"><a href="single-product.html">Kaoreet furniture</a></h3>
                            <div class="product-box__price">
                                <span class="regular-price">$95.00</span>
                                <span class="sale-price">$80.00</span>
                            </div>
                            <a href="cart.html" class="btn add-to-cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                            <p class="offer-text">Hurry Up! Offer ends in:</p>
                            <div class="product-box__countdown">
                                <div class="product-countdown" data-countdown="2020/05/01">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 order-md-3 order-2 mt-md--30">
                    <div class="category-product-carousel product-carousel-hover owl-carousel js-category-product-carousel">
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-7-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-8-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-17-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-18-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-1-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-2-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-5-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-6-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-3-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-4-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-15-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-16-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-13-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-14-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-18-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-1-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category products area End -->

    <!-- Category products area Start -->
    <div class="category-porducts-area section-padding section-sm-padding">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4">
                    <div class="section-title title-2 green-dark-bg text-md-left text-center">
                        <h3>Cell Phone</h3>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 text-md-right text-center">
                    <ul class="category-list list-2 brand-bg">
                        <li><a href="shop.html">Samsung</a></li>
                        <li><a href="shop.html">Apple</a></li>
                        <li><a href="shop.html">Nokia</a></li>
                        <li><a href="shop.html">Sports</a></li>
                        <li><a href="shop.html">See More</a></li>
                    </ul>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-5 order-md-1 order-3 mt-sm--30">
                    <div class="promo-box full-width">
                        <a href="#">
                            <img src="/assets/img/banner/home1-product-banner-2.jpg" alt="promo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 order-md-2 order-1">
                    <div class="product-box limited-product bg--white color-1 border-bottom">
                        <div class="product-box__img">
                            <img src="/assets/img/products/electronics-2-540x600.jpg" alt="product" class="primary-image">
                            <img src="/assets/img/products/electronics-3-540x600.jpg" alt="product" class="secondary-image">
                            <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="product-box__content">
                            <span class="product-box__category">
                                <a href="shop.html">Electronics, </a>
                                <a href="shop.html">Men</a>
                            </span>
                            <h3 class="product-box__title"><a href="single-product.html">Kaoreet furniture</a></h3>
                            <div class="product-box__price">
                                <span class="regular-price">$95.00</span>
                                <span class="sale-price">$80.00</span>
                            </div>
                            <a href="cart.html" class="btn add-to-cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                            <p class="offer-text">Hurry Up! Offer ends in:</p>
                            <div class="product-box__countdown">
                                <div class="product-countdown" data-countdown="2020/05/01">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 order-md-3 order-2 mt-md--30">
                    <div class="category-product-carousel product-carousel-hover owl-carousel js-category-product-carousel">
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-7-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-8-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-17-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-18-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-1-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-2-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-5-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-6-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-3-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-4-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-15-250x278.jpg" alt="product" class="primary-image">
                                    <img src="/assets/img/products/electronics-16-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="/assets/img/products/electronics-13-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-14-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-18-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-1-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category products area End -->

    <!-- Category products area Start -->
    <div class="category-porducts-area section-padding section-sm-padding">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-4">
                    <div class="section-title title-2 brand-light-bg text-md-left text-center">
                        <h3>Headphones</h3>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 text-md-right text-center">
                    <ul class="category-list list-2 brand-bg">
                        <li><a href="shop.html">In-Ear &amp; Earbud</a></li>
                        <li><a href="shop.html">On-Ear</a></li>
                        <li><a href="shop.html">Over-Ear</a></li>
                        <li><a href="shop.html">Sports</a></li>
                        <li><a href="shop.html">See More</a></li>
                    </ul>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-5 order-md-1 order-3 mt-sm--30">
                    <div class="promo-box full-width">
                        <a href="#">
                            <img src="assets/img/banner/home1-product-banner-3.jpg" alt="promo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 order-md-2 order-1">
                    <div class="product-box limited-product bg--white color-1 border-bottom">
                        <div class="product-box__img">
                            <img src="assets/img/products/electronics-2-540x600.jpg" alt="product" class="primary-image">
                            <img src="assets/img/products/electronics-3-540x600.jpg" alt="product" class="secondary-image">
                            <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="product-box__content">
                            <span class="product-box__category">
                                <a href="shop.html">Electronics, </a>
                                <a href="shop.html">Men</a>
                            </span>
                            <h3 class="product-box__title"><a href="single-product.html">Kaoreet furniture</a></h3>
                            <div class="product-box__price">
                                <span class="regular-price">$95.00</span>
                                <span class="sale-price">$80.00</span>
                            </div>
                            <a href="cart.html" class="btn add-to-cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                            <p class="offer-text">Hurry Up! Offer ends in:</p>
                            <div class="product-box__countdown">
                                <div class="product-countdown" data-countdown="2020/05/01">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 order-md-3 order-2 mt-md--30">
                    <div class="category-product-carousel product-carousel-hover owl-carousel js-category-product-carousel">
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-7-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-8-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-17-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-18-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-1-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-2-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-5-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-6-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-3-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-4-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-15-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-16-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="category-product-group">
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-13-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-14-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                            <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                <div class="product-box__img">
                                    <img src="assets/img/products/electronics-18-250x278.jpg" alt="product" class="primary-image">
                                    <img src="assets/img/products/electronics-1-250x278.jpg" alt="product" class="secondary-image">
                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-box__content">
                                    <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                    <div class="ratings">
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star rated"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-box__price">
                                        <span class="sale-price">$80.00</span>
                                    </div>
                                </div>
                                <div class="product-box__action action-2">
                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category products area End -->

    <!-- Promo area Start -->
    <div class="promo-area section-padding section-sm-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="promo-box">
                        <a href="#"><img src="assets/img/banner/home1-banner3.jpg" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promo area End -->


    <!-- Category products area Start -->
    <div class="category-porducts-area pt--40 pb--80 pt-sm--30 pb-sm--60">
        <div class="container">
            <div class="row no-gutters mb--20">
                <div class="col-12">
                    <div class="section-title title-1">
                        <h2>Brand Sale</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters brand-tab">
                <div class="col-lg-2 col-md-3 order-1">
                    <div class="nav flex-column brand-tab__head" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link brand-tab__link active" id="v-company-1-tab" data-toggle="tab" href="#v-company-1" role="tab"  aria-selected="true">
                            <img src="assets/img/brand/brand1.jpg" alt="brand">
                        </a>
                        <a class="nav-link brand-tab__link" id="v-company-2-tab" data-toggle="tab" href="#v-company-2" role="tab" aria-selected="false">
                            <img src="assets/img/brand/brand2.jpg" alt="brand">
                        </a>
                        <a class="nav-link brand-tab__link" id="v-company-3-tab" data-toggle="tab" href="#v-company-3" role="tab" aria-selected="false">
                            <img src="assets/img/brand/brand3.jpg" alt="brand">
                        </a>
                        <a class="nav-link brand-tab__link" id="v-company-4-tab" data-toggle="tab" href="#v-company-4" role="tab" aria-selected="false">
                            <img src="assets/img/brand/brand4.jpg" alt="brand">
                        </a>
                        <a class="nav-link brand-tab__link" id="v-company-5-tab" data-toggle="tab" href="#v-company-5" role="tab" aria-selected="false">
                            <img src="assets/img/brand/brand5.jpg" alt="brand">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 order-lg-2 order-3 mt-md--30">
                    <div class="promo-box">
                        <a href="#">
                            <img src="assets/img/banner/home1-brandsale.jpg" alt="promo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-9 order-lg-3 order-2">
                    <div class="tab-content brand-tab__content" id="v-pills-tab-content">
                        <div class="tab-pane brand-tab__pane fade show active" id="v-company-1" role="tabpanel" aria-labelledby="v-company-1-tab">
                            <div class="brand-tab__pane-top">
                                <div class="product-box horizontal horizontal-reverse bg--white color-1 border">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-17-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-18-250x278.jpg" alt="product" class="secondary-image">
                                    </div>
                                    <div class="product-box__content">
                                        <span class="product-box__category">
                                            <a href="shop.html">Electronics,</a>
                                            <a href="shop.html">Men</a>
                                        </span>
                                        <h3 class="product-box__title"><a href="single-product.html">Aliquam furniture</a></h3>
                                        <div class="product-box__price">
                                            <span class="regular-price">$120.00</span>
                                            <span class="sale-price">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-tab__pane-bottom">
                                <div class="product-box product-box-hover-down bg--white color-1 border-left border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-16-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-17-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div> 
                                <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-10-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-11-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="tab-pane brand-tab__pane fade" id="v-company-2" role="tabpanel" aria-labelledby="v-company-2-tab">
                            <div class="brand-tab__pane-top">
                                <div class="product-box horizontal horizontal-reverse bg--white color-1 border">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-16-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-15-250x278.jpg" alt="product" class="secondary-image">
                                    </div>
                                    <div class="product-box__content">
                                        <span class="product-box__category">
                                            <a href="shop.html">women,</a>
                                            <a href="shop.html">Men</a>
                                        </span>
                                        <h3 class="product-box__title"><a href="single-product.html">Volutpat ut</a></h3>
                                        <div class="product-box__price">
                                            <span class="regular-price">$120.00</span>
                                            <span class="sale-price">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-tab__pane-bottom">
                                <div class="product-box product-box-hover-down bg--white color-1 border-left border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-1-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-2-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div> 
                                <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-8-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-7-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>                                
                            </div> 
                        </div>
                        <div class="tab-pane brand-tab__pane fade" id="v-company-3" role="tabpanel" aria-labelledby="v-company-3-tab">
                            <div class="brand-tab__pane-top">
                                <div class="product-box horizontal horizontal-reverse bg--white color-1 border">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-10-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-11-250x278.jpg" alt="product" class="secondary-image">
                                    </div>
                                    <div class="product-box__content">
                                        <span class="product-box__category">
                                            <a href="shop.html">Electronics, </a>
                                            <a href="shop.html">Accessories</a>
                                        </span>
                                        <h3 class="product-box__title"><a href="single-product.html">Auctor sam</a></h3>
                                        <div class="product-box__price">
                                            <span class="sale-price">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-tab__pane-bottom">
                                <div class="product-box product-box-hover-down bg--white color-1 border-left border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-4-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-3-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div> 
                                <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-2-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-1-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>                                
                            </div>  
                        </div>
                        <div class="tab-pane brand-tab__pane fade" id="v-company-4" role="tabpanel" aria-labelledby="v-company-4-tab">
                            <div class="brand-tab__pane-top">
                                <div class="product-box horizontal horizontal-reverse bg--white color-1 border">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-16-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-15-250x278.jpg" alt="product" class="secondary-image">
                                    </div>
                                    <div class="product-box__content">
                                        <span class="product-box__category">
                                            <a href="shop.html">Electronics,</a>
                                            <a href="shop.html">Accessories</a>
                                        </span>
                                        <h3 class="product-box__title"><a href="single-product.html">Auctor sam</a></h3>
                                        <div class="product-box__price">
                                            <span class="sale-price">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-tab__pane-bottom">
                                <div class="product-box product-box-hover-down bg--white color-1 border-left border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-2-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-1-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div> 
                                <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-7-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-8-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>                                
                            </div>   
                        </div>
                        <div class="tab-pane brand-tab__pane fade" id="v-company-5" role="tabpanel" aria-labelledby="v-company-5-tab">
                            <div class="brand-tab__pane-top">
                                <div class="product-box horizontal horizontal-reverse bg--white color-1 border">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-12-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-13-250x278.jpg" alt="product" class="secondary-image">
                                    </div>
                                    <div class="product-box__content">
                                        <span class="product-box__category">
                                            <a href="shop.html">Mobile,</a>
                                            <a href="shop.html">Accessories</a>
                                        </span>
                                        <h3 class="product-box__title"><a href="single-product.html">Samsung</a></h3>
                                        <div class="product-box__price">
                                            <span class="sale-price">$100.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="brand-tab__pane-bottom">
                                <div class="product-box product-box-hover-down bg--white color-1 border-left border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-3-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-4-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div> 
                                <div class="product-box product-box-hover-down bg--white color-1 border-right border-bottom">
                                    <div class="product-box__img">
                                        <img src="assets/img/products/electronics-13-250x278.jpg" alt="product" class="primary-image">
                                        <img src="assets/img/products/electronics-14-250x278.jpg" alt="product" class="secondary-image">
                                        <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-box__content">
                                        <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-box__price">
                                            <span class="sale-price">$80.00</span>
                                        </div>
                                    </div>
                                    <div class="product-box__action action-2">
                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>                                
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category products area End -->
    
</main>
@endsection