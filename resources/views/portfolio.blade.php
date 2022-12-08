@extends('master')
@section('main')
    <!-- Header banner Start Here -->
    <div class="header-banner">
        <div class="container">
            <div class="header-title">
                <h1>Portfolio</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index.html">Home -</a></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header banner End Here -->
    <!-- Portfolio Page Start Here -->
    <div class="portfolio-area padding-top-bottom">
        <div class="container" id="inner-isotope">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="isotop-classes-tab isotop-btn">
                        <a href="#" data-filter="*" class="current">All</a>
                        <a href="#" data-filter=".business">Business</a>
                        <a href="#" data-filter=".design">Design</a>
                        <a href="#" data-filter=".creative">Creative</a>
                        <a href="#" data-filter=".mobile">Mobile</a>
                    </div>
                </div>
            </div>
            <div class="row featuredContainer">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 business design">
                    <div class="portfolio-box">
                        <img src="assets/img/portfolio/1.jpg" class="img-responsive" alt="project">
                        <div class="portfolio-content-holder">
                            <h3><a href="#">The Future of Marketing</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mobile business corporate">
                    <div class="portfolio-box">
                        <img src="assets/img/portfolio/2.jpg" class="img-responsive" alt="project">
                        <div class="portfolio-content-holder">
                            <h3><a href="#">The Future of Marketing</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mobile design creative">
                    <div class="portfolio-box">
                        <img src="assets/img/portfolio/3.jpg" class="img-responsive" alt="project">
                        <div class="portfolio-content-holder">
                            <h3><a href="#">The Future of Marketing</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 business creative design">
                    <div class="portfolio-box">
                        <img src="assets/img/portfolio/4.jpg" class="img-responsive" alt="project">
                        <div class="portfolio-content-holder">
                            <h3><a href="#">The Future of Marketing</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 business mobile">
                    <div class="portfolio-box">
                        <img src="assets/img/portfolio/5.jpg" class="img-responsive" alt="project">
                        <div class="portfolio-content-holder">
                            <h3><a href="#">The Future of Marketing</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 business mobile">
                    <div class="portfolio-box">
                        <img src="assets/img/portfolio/6.jpg" class="img-responsive" alt="project">
                        <div class="portfolio-content-holder">
                            <h3><a href="#">The Future of Marketing</a></h3>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Page End Here -->
@endsection
