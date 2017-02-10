@extends('customers.layouts.master')
@section('content')
    <div id="content">
        <div class="content-shop left-sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12 main-content">
                        <div class="main-content-shop">
                            <div class="banner-shop-slider">
                                <div class="wrap-item">
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href="itemdetail"><img src="/assets/images/3412240.jpg" width="980"
                                                                         height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href="itemdetail"><img src="/assets/images/banner.jpg" width="980"
                                                                         height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href="itemdetail"><img src="/assets/images/banner1.jpg" width="980"
                                                                         height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href="itemdetail"><img src="/assets/images/banner2.png" width="980"
                                                                         height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <div class="item">
                                        <div class="item-shop-slider">
                                            <div class="shop-slider-thumb">
                                                <a href="itemdetail"><img src="/assets/images/banner4.jpg" width="980"
                                                                         height="434"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                </div>
                            </div>
                            <!-- End Banner Slider -->
                            <div class="list-shop-cat">
                                <ul>
                                    <li><a href="items/category">Women <span>15</span></a></li>
                                    <li><a href="items/category">Men <span>10</span></a></li>
                                    <li><a href="items/category">Kids & Baby <span>4</span></a></li>
                                    <li><a href="items/category">Bags & Shoes <span>3</span></a></li>
                                    <li><a href="items/category">Jewelry & Watches <span>8</span></a></li>
                                    <li><a href="items/category">Electronics <span>5</span></a></li>
                                </ul>
                            </div>
                            <!-- End List Shop Cat -->
                            <div class="shop-tab-product">
                                <div class="shop-tab-title">
                                    <h2>Lets Look Around</h2>
                                    <ul class="shop-tab-select">
                                        <li class="active"><a href="itemdetailproduct-grid" class="grid-tab"
                                                              data-toggle="tab"></a></li>
                                        <li><a href="itemdetailproduct-list" class="list-tab" data-toggle="tab"></a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="product-grid">
                                        <ul class="row product-grid auto-clear">
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="itemdetail">
                                                            <img class="first-thumb" width="300" height="300"
                                                                 src="/assets/images/item1.jpg">
                                                            <img class="second-thumb" alt="" src="/assets/images/item1.jpg">
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <div class="product-extra-link">
                                                                <a class="wishlist-link" href="itemdetail"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                <a href="itemdetail"><i
                                                                            class="fa fa-search"></i></a>
                                                            </div>
                                                            <a class="addcart-link" href="orderform"><i
                                                                        class="fa fa-shopping-basket"></i> Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="itemdetail">NNN Shoes</a></h3>
                                                        <div class="info-price">
                                                            <span>$59.52</span>
                                                            <del>$17.96</del>
                                                        </div>
                                                        <!-- may be phase2 -->
                                                        <!-- <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="itemdetail">
                                                            <img class="first-thumb" width="300" height="300"
                                                                 src="/assets/images/item2.jpg">
                                                            <img class="second-thumb" alt="" src="/assets/images/item2.jpg">
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <div class="product-extra-link">
                                                                <a class="wishlist-link" href="itemdetail"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                <a href="itemdetail"><i
                                                                            class="fa fa-search"></i></a>
                                                            </div>
                                                            <a class="addcart-link" href="orderform"><i
                                                                        class="fa fa-shopping-basket"></i> Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="itemdetail">Burberry Pink &
                                                                black</a></h3>
                                                        <div class="info-price">
                                                            <span>$59.52</span>
                                                            <del>$17.96</del>
                                                        </div>
                                                        <!-- may be phase2 -->
                                                        <!-- <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="itemdetail">
                                                            <img class="first-thumb" width="300" height="300"
                                                                 src="/assets/images/item3.jpg">
                                                            <img class="second-thumb" alt="" src="/assets/images/item3.jpg">
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <div class="product-extra-link">
                                                                <a class="wishlist-link" href="itemdetail"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                <a href="itemdetail"><i
                                                                            class="fa fa-search"></i></a>
                                                            </div>
                                                            <a class="addcart-link" href="orderform"><i
                                                                        class="fa fa-shopping-basket"></i> Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="itemdetail">Burberry Pink &
                                                                black</a></h3>
                                                        <div class="info-price">
                                                            <span>$59.52</span>
                                                            <del>$17.96</del>
                                                        </div>
                                                        <!-- may be phase2 -->
                                                        <!-- <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="itemdetail">
                                                            <img class="first-thumb" width="300" height="300"
                                                                 src="/assets/images/item4.jpg">
                                                            <img class="second-thumb" alt="" src="/assets/images/item4.jpg">
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <div class="product-extra-link">
                                                                <a class="wishlist-link" href="itemdetail"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                <a href="itemdetail"><i
                                                                            class="fa fa-search"></i></a>
                                                            </div>
                                                            <a class="addcart-link" href="orderform"><i
                                                                        class="fa fa-shopping-basket"></i> Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="itemdetail">Burberry Pink &
                                                                black</a></h3>
                                                        <div class="info-price">
                                                            <span>$59.52</span>
                                                            <del>$17.96</del>
                                                        </div>
                                                        <!-- may be phase2 -->
                                                        <!-- <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="itemdetail">
                                                            <img class="first-thumb" width="300" height="300"
                                                                 src="/assets/images/item5.jpg">
                                                            <img class="second-thumb" alt="" src="/assets/images/item5.jpg">
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <div class="product-extra-link">
                                                                <a class="wishlist-link" href="itemdetail"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                <a href="itemdetail"><i
                                                                            class="fa fa-search"></i></a>
                                                            </div>
                                                            <a class="addcart-link" href="orderform"><i
                                                                        class="fa fa-shopping-basket"></i> Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="itemdetail">Burberry Pink &
                                                                black</a></h3>
                                                        <div class="info-price">
                                                            <span>$59.52</span>
                                                            <del>$17.96</del>
                                                        </div>
                                                        <!-- may be phase2 -->
                                                        <!-- <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="item-product">
                                                    <div class="product-thumb">
                                                        <a class="product-thumb-link" href="itemdetail">
                                                            <img class="first-thumb" width="300" height="300"
                                                                 src="/assets/images/item6.jpg">
                                                            <img class="second-thumb" alt="" src="/assets/images/item6.jpg">
                                                        </a>
                                                        <div class="product-info-cart">
                                                            <div class="product-extra-link">
                                                                <a class="wishlist-link" href="itemdetail"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                <a href="itemdetail"><i
                                                                            class="fa fa-search"></i></a>
                                                            </div>
                                                            <a class="addcart-link" href="orderform"><i
                                                                        class="fa fa-shopping-basket"></i> Order</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <h3 class="title-product"><a href="itemdetail">Burberry Pink &
                                                                black</a></h3>
                                                        <div class="info-price">
                                                            <span>$59.52</span>
                                                            <del>$17.96</del>
                                                        </div>
                                                        <!-- may be phase2 -->
                                                        <!-- <div class="product-rating">
                                                            <div class="inner-rating" style="width:100%"></div>
                                                            <span>(6s)</span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="sort-pagi-bar">
                                                    <!-- <div class="product-order">
                                                        <a href="itemdetail" class="product-order-toggle">Position</a>
                                                        <ul class="product-order-list">
                                                            <li><a href="itemdetail">Name</a></li>
                                                            <li><a href="itemdetail">Price</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-per-page">
                                                        <a href="itemdetail" class="per-page-toggle">show <span>6</span></a>
                                                        <ul class="per-page-list">
                                                            <li><a href="itemdetail">6</a></li>
                                                            <li><a href="itemdetail">9</a></li>
                                                            <li><a href="itemdetail">12</a></li>
                                                            <li><a href="itemdetail">18</a></li>
                                                            <li><a href="itemdetail">24</a></li>
                                                        </ul>
                                                    </div> -->
                                                    <div class="product-pagi-nav">
                                                        <a href="itemdetail" class="active">1</a>
                                                        <a href="itemdetail">2</a>
                                                        <a href="itemdetail">3</a>
                                                        <a href="itemdetail" class="next">next <i
                                                                    class="fa fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Sort Pagibar -->
                                    </div>
                                </div>
                            </div>
                            <!-- End Shop Tab -->
                        </div>
                        <!-- End Main Content Shop -->
                    </div>
                    {{--Call Sidebar Category--}}
                    @include('customers.layouts.partial.sidebarcategory')
                </div>
            </div>
        </div>
        <!-- End Content Shop -->
    </div>
    <!-- End Content -->
@endsection