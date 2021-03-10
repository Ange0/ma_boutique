@extends('layouts.master')
@section('content')
<main id="content" class="main-content-wrapper">
    <div class="shop-area pt--40 pb--80 pt-sm--30 pb-sm--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Shop Toolbar Start -->
                    <div class="shop-toolbar">
                        <div class="shop-toolbar__grid-list">
                            <ul class="nav">
                                <li>
                                    <a class="active" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-toolbar__shorter">
                            <label>Short By:</label>
                            <select class="short-select nice-select">
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select>
                        </div>
                        <span class="shop-toolbar__product-count">There Are 13 Products.</span>
                    </div>
                    <!-- Shop Toolbar End -->

                    <!-- Shop Layout Start -->
                    <div class="main-shop-wrapper">
                        <div class="tab-content" id="myTabContent-2">
                            <div class="tab-pane show active" id="grid">
                                <div class="product-grid-view three-column">
                                    <div class="row no-gutters">
                                        @foreach ($products as $product)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="product-box product-box-hover-down bg--white color-1">
                                                <div class="product-box__img">
                                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="primary-image">
                                                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="secondary-image">
                                                    {{-- <a href="#" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a> --}}
                                                    <a href="{{ route('products.show', $product->slug) }}"  class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                </div>
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
                                                        <span class="regular-price">$100.00</span>
                                                        <span class="sale-price">{{ $product->getFomatterPrice() }}</span>
                                                    </div>
                                                </div>
                                                <div class="product-box__action action-2">
                                                    <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                                    <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
                            
                        </div>
                    </div>
                    <!-- Shop Layout End -->
                </div>
            </div>
        </div>
    </div>
</main>
@endsection