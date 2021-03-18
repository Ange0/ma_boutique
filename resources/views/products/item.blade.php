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
                                    @livewire('products.item')
                                    
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