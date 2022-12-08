@extends('master')
@section('main')
    <!-- Header banner Start Here -->
    <div class="header-banner">
        <div class="container">
            <div class="header-title">
                <h1>Category Grid</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index.html">Home -</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header banner End Here -->
    <!-- Shop page Start Here -->
    <div class="product-category-area padding-top-bottom">
        <div class="container">
            <div class="row">
                <!-- Main body Start Here -->
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <div class="body-content">
                        <div class="online-header">
                            <div class="pager-left-area col-lg-7 col-md-7 col-sm-7">
                                <div class="showing-result">
                                    <h3>Showing 13–24 of 50 results</h3>
                                </div>
                            </div>
                            <div class="pager-right-area col-lg-5 col-md-5 col-sm-5">
                                <div class="short-list">
                                    <select>
                                        <option selected="selected" value="#">Default Sorting</option>
                                        <option value="#">Product Name</option>
                                        <option value="#">Product Id</option>
                                        <option value="#">Product SKU</option>
                                        <option value="#">Manufacturer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="product-category-grid">
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product1.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product2.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product3.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product4.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product3.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product5.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product1.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product4.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                            <!-- Start Single product -->
                            <div class="col-lg-4 col-md-4 col-sm-6 item hide-on-tab">
                                <div class="product-media">
                                    <a href="#"><img src="assets/img/product/product2.jpg" alt="product"></a>
                                    <div class="overlay"></div>
                                    <div class="product-info">
                                        <ul>
                                            <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" title="Campare"><i class="fa fa-compress"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="single-product.html">Product Title Here</a></h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                        <li class="uncolor"><a href="#"><i class="fa fa-star-o"
                                                    aria-hidden="true"></i></a></li>
                                    </ul>
                                    <span class="regular-price">
                                        <span class="product-price">$29.00</span>
                                    </span>
                                </div>
                            </div>
                            <!-- End Single product -->
                        </div>
                        <div class="pagination-wrapper">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Main body End Here -->
                <!-- Sidebar Start Here -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="right-sidebar">
                        <div class="single-sidebar">
                            <h3>Search</h3>
                            <div class="sidebar-search">
                                <input placeholder="Search here..." type="text">
                                <span><button type="submit"><i class="fa fa-search"></i></button></span>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3>Categories</h3>
                            <ul class="category-menu">
                                <li><a href="#">Top SEO Experts</a></li>
                                <li><a href="#">Marketing Stactics</a></li>
                                <li><a href="#">Content Strategy</a></li>
                                <li><a href="#">Monthly Trend</a></li>
                                <li><a href="#">Social Network</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                            </ul>
                        </div>
                        <div class="single-sidebar">
                            <div class="seo-store">
                                <div class="store-img">
                                    <img src="assets/img/seo_store.jpg" alt="store">
                                </div>
                                <div class="overly">
                                    <h4>SEO E-Store<br><span>$59</span></h4>
                                    <a href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3>Best Seller</h3>
                            <div class="best-seller">
                                <div class="pull-left product-img">
                                    <a href="#"><img src="assets/img/product/product5.jpg" alt="popular"></a>
                                </div>
                                <div class="media-body product-content">
                                    <h4><a href="#">Product title Here</a></h4>
                                    <div class="stars-existing">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span class="regular-price">$80</span>
                                        <span class="sell-price">$90</span>
                                    </div>
                                </div>
                            </div>
                            <div class="best-seller">
                                <div class="pull-left product-img">
                                    <a href="#"><img src="assets/img/product/product2.jpg" alt="popular"></a>
                                </div>
                                <div class="media-body product-content">
                                    <h4><a href="#">Product title Here</a></h4>
                                    <div class="stars-existing">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span class="regular-price">$80</span>
                                        <span class="sell-price">$90</span>
                                    </div>
                                </div>
                            </div>
                            <div class="best-seller">
                                <div class="pull-left product-img">
                                    <a href="#"><img src="assets/img/product/product3.jpg" alt="popular"></a>
                                </div>
                                <div class="media-body product-content">
                                    <h4><a href="#">Product title Here</a></h4>
                                    <div class="stars-existing">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span class="regular-price">$80</span>
                                        <span class="sell-price">$90</span>
                                    </div>
                                </div>
                            </div>
                            <div class="best-seller">
                                <div class="pull-left product-img">
                                    <a href="#"><img src="assets/img/product/product4.jpg" alt="popular"></a>
                                </div>
                                <div class="media-body product-content">
                                    <h4><a href="#">Product title Here</a></h4>
                                    <div class="stars-existing">
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <span class="regular-price">$80</span>
                                        <span class="sell-price">$90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar">
                            <h3>Tags</h3>
                            <div class="tags">
                                <a href="#">SEO</a>
                                <a href="#">Analytics</a>
                                <a href="#">Articles</a>
                                <a href="#">Content</a>
                                <a href="#">Social</a>
                                <a href="#">Marketing</a>
                                <a href="#">Website</a>
                                <a href="#">Traffic</a>
                                <a href="#">Digital</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar End Here -->
            </div>
        </div>
    </div>
    <!-- Shop page End Here -->
    <!-- Ready to promote Start Here -->
    <div class="ready-promote-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="content">
                        <h3>Ready To Promote Your website Online?</h3>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="button-area">
                        <a class="default-button-btn" href="#">Premium Features</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ready to promote End Here -->
@endsection
