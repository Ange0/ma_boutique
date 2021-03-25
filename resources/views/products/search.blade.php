@extends('layouts.master')

@section('content')

@if(request()->input('q'))
<h1>{{ $products->total()}} résultat(s) pour la rechercher "{{ request()->input('q') }}"</h1>
@endif
<main id="content" class="main-content-wrapper">
    <div class="shop-area pt--40 pb--80 pt-sm--30 pb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-2 mb-md--40">
                    <!-- Shop Toolbar Start -->
                    <div class="shop-toolbar">
                        <div class="shop-toolbar__grid-list">
                            <ul class="nav">
                                <li>
                                    <a data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                </li>
                                <li>
                                    <a class="active" data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-toolbar__shorter">
                            <label>Short By:</label>
                            <select class="short-select nice-select" style="display: none;">
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select><div class="nice-select short-select" tabindex="0"><span class="current">Relevance</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="1" class="option selected">Relevance</li><li data-value="2" class="option">Name, A to Z</li><li data-value="3" class="option">Name, Z to A</li><li data-value="4" class="option">Price, low to high</li><li data-value="5" class="option">Price, high to low</li></ul></div>
                        </div>
                        <span class="shop-toolbar__product-count">There Are 13 Products.</span>
                    </div>
                    <!-- Shop Toolbar End -->

                    <!-- Shop Layout Start -->
                    <div class="main-shop-wrapper">
                        <div class="tab-content" id="myTabContent-2">
                            <div class="tab-pane" id="grid">
                                <div class="product-grid-view three-column">
                                    <div class="row no-gutters">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
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
                                                        <span class="regular-price">$100.00</span>
                                                        <span class="sale-price">$80.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/furniture-2-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/furniture-3-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$90.00</span>
                                                        <span class="sale-price">$70.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/furniture-17-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/furniture-18-250x278.jpg" alt="product" class="secondary-image">
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
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/furniture-10-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/furniture-11-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$200.00</span>
                                                        <span class="sale-price">$150.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/furniture-13-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/furniture-14-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$120.00</span>
                                                        <span class="sale-price">$100.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/furniture-7-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/furniture-8-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$180.00</span>
                                                        <span class="sale-price">$160.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
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
                                                        <span class="regular-price">$110.00</span>
                                                        <span class="sale-price">$75.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
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
                                                        <span class="regular-price">$60.00</span>
                                                        <span class="sale-price">$50.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/electronics-7-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/electronics-10-250x278.jpg" alt="product" class="secondary-image">
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
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/book-4-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/book-5-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$80.00</span>
                                                        <span class="sale-price">$50.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/book-18-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/book-9-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$130.00</span>
                                                        <span class="sale-price">$100.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="assets/img/products/book-14-250x278.jpg" alt="product" class="primary-image">
                                                    <img src="assets/img/products/book-15-250x278.jpg" alt="product" class="secondary-image">
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
                                                        <span class="regular-price">$180.00</span>
                                                        <span class="sale-price">$160.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <ul class="pagination">
                                                <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                                <li><a href="#">1</a></li>
                                                <li class="current"><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show active" id="list">
                                <div class="product-list-view">
                                    @foreach ($products as $product)
                                    <div class="product-box product-box--list bg--white">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="product-box__img">
                                                    <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" class="primary-image">
                                                    <img src="{{ asset('storage/'. $product->image) }}" alt="{{ $product->name }}" class="secondary-image">
                                                    <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="product-box__content">
                                                    <h3 class="product-box__title"><a href="single-product.html">{{ $product->name }}</a></h3>
                                                    <div class="ratings">
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="product-box__price">
                                                        <span class="regular-price">$180.00</span>
                                                        <span class="sale-price">{{ $product->price }} {{ config('cart.currency.fcfa') }}</span>
                                                    </div>
                                                    <p class="product-box__desc">
                                                        {!! $product->description !!}
                                                    </p>
                                                    <div class="product-box__action action-4">
                                                        <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <ul class="pagination">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li class="current"><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Layout End -->
                </div>
                <div class="col-lg-3 order-lg-1">
                    <aside class="sidebar">
                        <!-- Product Categories Widget Start -->
                        <div class="sidebar-widget product-widget product-cat-widget">
                            <h3 class="widget-title">Product Categories</h3>
                            <div class="widget_conent">
                                <ul class="product-categories">
                                    <li class="cat-item cat-parent">
                                        <a href="shop.html">Books</a>
                                        <span class="count">(10)</span>
                                        <ul class="children" style="display: none;">
                                            <li class="cat-item">
                                                <a href="shop.html">Bedroom</a>
                                                <span class="count">(6)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Livingroom</a>
                                                <span class="count">(5)</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-parent">
                                        <a href="shop.html">Electronics</a>
                                        <span class="count">(14)</span>
                                        <ul class="children" style="display: none;">
                                            <li class="cat-item">
                                                <a href="shop.html">Laptops</a>
                                                <span class="count">(6)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Desktops</a>
                                                <span class="count">(5)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Mobile</a>
                                                <span class="count">(5)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Fridge</a>
                                                <span class="count">(5)</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item cat-parent">
                                        <a href="shop.html">Furniture</a>
                                        <span class="count">(16)</span>
                                        <ul class="children" style="display: block;">
                                            <li class="cat-item">
                                                <a href="shop.html">Bedroom</a>
                                                <span class="count">(6)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Livingroom</a>
                                                <span class="count">(5)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Men</a>
                                                <span class="count">(5)</span>
                                            </li>
                                            <li class="cat-item">
                                                <a href="shop.html">Women</a>
                                                <span class="count">(5)</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop.html">Home</a>
                                        <span class="count">(12)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop.html">Magazines</a>
                                        <span class="count">(8)</span>
                                    </li>
                                    <li class="cat-item">
                                        <a href="shop.html">Sport</a>
                                        <span class="count">(5)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product Categories Widget End -->

                        <!-- Product color Widget Start -->
                        <div class="sidebar-widget product-widget product-color-widget">
                            <h3 class="widget-title">color</h3>
                            <div class="widget_conent">
                                <ul class="product-color">
                                    <li><a href="shop.html">Black</a><span>(2)</span></li>
                                    <li><a href="shop.html">Blue</a><span>(4)</span></li>
                                    <li><a href="shop.html">Gold</a><span>(5)</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Product color Widget End -->

                        <!-- Price Filter Widget Start -->
                        <div class="sidebar-widget product-widget product-price-widget">
                            <h3 class="widget-title">Filter By Price</h3>
                            <div class="widget_conent">
                                <form action="#" method="post">
                                    <div id="slider-range" class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 16.6667%; width: 79.1667%;">
                                            
                                        </div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;">
                                            
                                        </span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 39.1667%;">
                                            
                                        </span>
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 39.1667%;"></div></div>
                                    <div class="filter-price">
                                        <div class="filter-price__count">
                                            <div class="filter-price__input-group">
                                                <span>Price: </span>
                                                <input type="text" id="amount" class="amount-range" readonly="">
                                            </div>
                                            <button type="submit" class="sidebar-btn">
                                                filter
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Price Filter Widget End -->

                        <!-- Price Compare Widget Start -->
                        <div class="sidebar-widget product-widget product-compare-widget">
                            <h3 class="widget-title">Compare</h3>
                            <div class="widget_conent">
                                <ul>
                                    <li>
                                        <a href="sinngle-product.html">Condimentum furniture</a>
                                        <span class="compare-remove"><i class="fa fa-times"></i></span>
                                    </li>
                                    <li>
                                        <a href="sinngle-product.html">Auctor gravida enim</a>
                                        <span class="compare-remove"><i class="fa fa-times"></i></span>
                                    </li>
                                    <li>
                                        <a href="sinngle-product.html">Condimentum furniture</a>
                                        <span class="compare-remove"><i class="fa fa-times"></i></span>
                                    </li>
                                </ul>
                                <div class="compare-widget-bottom">
                                    <a href="#">Clear all</a>
                                    <a href="compare.html" class="sidebar-btn">Compare</a>
                                </div>
                            </div>
                        </div>
                        <!-- Price Compare Widget End -->

                        <!-- Product Banner Widget Start -->
                        <div class="sidebar-widget banner-widget">
                            <div class="promo-box full-width bg--white">
                                <a href="#">
                                    <img src="assets/img/banner/home1-product-banner-1.jpg" alt="promo">
                                </a>
                            </div>
                        </div>
                        <!-- Product Banner Widget End -->

                        <!-- Product Tags Widget Start -->
                        <div class="sidebar-widget product-tags-widget">
                            <h3 class="widget-title">Product Tags</h3>
                            <div class="widget_conent">
                                <div class="tagcloud">
                                    <a href="blog.html" rel="1" style="font-size: 14px;">chilled</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">dark</a>
                                    <a href="blog.html" rel="3" style="font-size: 28.6667px;">euro</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">fashion</a>
                                    <a href="blog.html" rel="1" style="font-size: 14px;">food</a>
                                    <a href="blog.html" rel="4" style="font-size: 36px;">hardware</a>
                                    <a href="blog.html" rel="3" style="font-size: 28.6667px;">hat</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">hipster</a>
                                    <a href="blog.html" rel="1" style="font-size: 14px;">holidays</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">light</a>
                                    <a href="blog.html" rel="1" style="font-size: 14px;">mac</a>
                                    <a href="blog.html" rel="3" style="font-size: 28.6667px;">place</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">t-shirt</a>
                                    <a href="blog.html" rel="1" style="font-size: 14px;">travel</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">video-2</a>
                                    <a href="blog.html" rel="2" style="font-size: 21.3333px;">white</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Tags Widget End -->

                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection