@extends('master')
@section('main')
    <!-- Header Area End Here -->
    <!-- Slider 1 Area Start Here -->
    <div class="slider-default slider-overlay">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides">
                <img src="assets/img/slider/slide1_1.jpg" alt="slider" title="#slider-direction-1" />
                <img src="assets/img/slider/slide1_2.jpg" alt="slider" title="#slider-direction-2" />
                <img src="assets/img/slider/slide1_3.jpg" alt="slider" title="#slider-direction-3" />
            </div>
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-1 container">
                    <div class="title-container s-tb-c">
                        <p class="slider-big-text">The UK's Local<br>Digital Marketing Experts.</p>
                        <p>We’re a results driven digital marketing agency passionate about accelerating growth for local
                            businesses.</p>
                        <div class="slider-btn-area">
                            <a href="#" class="ghost-btn">Purchase Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-2" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-2 container">
                    <div class="title-container s-tb-c">
                        <p class="slider-big-text">Monthly SEO Result</p>
                        <p>Certified by the best in the business.</p>
                        <div class="slider-btn-area">
                            <a href="#" class="ghost-btn">Purchase Now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-direction-3" class="t-cn slider-direction">
                <div class="slider-content s-tb slide-3 container">
                    <div class="title-container s-tb-c">
                        <p class="slider-big-text">Weekly Analytics Report</p>
                        <p>All across the india we help businesses grow.</p>
                        <div class="slider-btn-area">
                            <a href="#" class="ghost-btn">Purchase Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider 1 Area End Here -->
    <!-- Home one service Start Here -->
    <div class="home-one-service padding-top-bottom">
        <div class="container">
            <div class="row">
                @php
                    $data = [
                        [
                            'name' => 'SEO',
                            'icon' => 'flaticon-target',
                            'color' => 'teal',
                            'services' => [
                                'Start increasing organic traffic to your site via search engines – we provide a range of
                                bespoke SEO solutions to suit your business.',
                                'We’ll implement an in-depth SEO strategy suitable to your audience and deliver measurable
                                results.',
                            ],
                        ],
                        [
                            'name' => 'Content Marketing',
                            'icon' => 'flaticon-light-bulb',
                            'color' => 'green',
                            'services' => ['We create meaningful and informative content to engage your customers, displaying you as the trusted source for your industry.', 'Plus, we help to promote your message with exclusive support from our network of 200  news brands.'],
                        ],
                        [
                            'name' => 'PPC',
                            'icon' => 'flaticon-graphic',
                            'color' => 'green',
                            'services' => ['Fast track your products and services to the top of the search engines with our PPC (pay-per-click) campaign management solution.', 'We’ll publish your ads in front of the right people, helping you to maximise your budget and generate leads.'],
                        ],
                        [
                            'name' => 'Website Design',
                            'icon' => 'flaticon-graphic',
                            'color' => 'yellow',
                            'services' => ['Built using Craft CMS, our websites will bring your brand to life.', 'We combine sleek web design and expertly written content with your customers and SEO in mind – whether you’re converting leads, making sales or driving traffic, we have you covered.'],
                        ],
                        [
                            'name' => 'Local Business Listings',
                            'icon' => 'flaticon-headphones',
                            'color' => 'green',
                            'services' => ['We manage thousands of local business listings across the UK, ensuring your contact details and local SEO strategy are always up to date.', 'Our exclusive partnerships with Google, Facebook and Bing help potential leads to easily find your business online.'],
                        ],
                        [
                            'name' => 'Display Advertising',
                            'icon' => 'flaticon-graphic',
                            'color' => 'grey',
                            'services' => ['Working alongside 100+ publications throughout the UK and with support from our ad network partnerships, we’ll place your advert in the perfect location for your audience.', 'Our newspaper sites are 3x more effective at generating leads for you and your business.'],
                        ],
                        [
                            'name' => 'Cross Media Optimisation',
                            'icon' => 'flaticon-share',
                            'color' => 'green',
                            'services' => ['Our UK-first technology streamlines your marketing budget across your paid search campaigns, helping you to maximise the return on investment for each of your channels.', 'We’ll help you gain higher quality leads by certifying your customers before they’re connected.'],
                        ],
                        [
                            'name' => 'Paid Social',
                            'icon' => 'flaticon-graphic',
                            'color' => 'red',
                            'services' => ['Turn your likes into leads and grow your business with our paid social advertising services.', 'We’ll implement a paid social strategy fully optimised for your business, increasing your online visibility while helping you to build relationships with your customers.'],
                        ],
                        [
                            'name' => 'Video Marketing',
                            'icon' => 'flaticon-graphic',
                            'color' => 'yellow',
                            'services' => ['We create compelling video to engage your audience and bring your business to life.', 'Whether it’s commercial production, event videography or awe-inspiring drone footage, our service will tell your customers your story.'],
                        ],
                    ];
                    
                @endphp
                @foreach ($data as $key)
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-service">
                            <div class="pull-left icon red">
                                <a><i class="{{ $key['icon'] }}"></i></a>
                            </div>
                            <div class="media content">
                                <h3><a href="#">{{ $key['name'] }}</a></h3>
                                @foreach ($key['services'] as $services)
                                    <p>{{ $services }}</p><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Home one service End Here -->
    <!-- Checkout Start Here -->
    <div class="check-out-area padding-top-bottom">
        <div class="container">
            <form class="checkout" id="checkoutForm">
                <fieldset>
                    <!-- Form Name -->
                    <h2>Check Your Website’s SEO Problems For Free!</h2>
                    <!-- Text input-->
                    <div class="form-group">
                        <input id="form-name" name="url" placeholder="Type Your Website URL Here ..."
                            class="form-control input-md" type="text">
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <input id="form-email" name="email" placeholder="Type Your E-mailL Here ..."
                            class="form-control input-md" type="text">
                    </div>
                    <div class="form-group send-button">
                        <button type="submit" class="btn-read-more-fill btn-send">Checkout</button>
                    </div>
                </fieldset>
                <div class='form-response'></div>
            </form>
        </div>
    </div>
    <!-- Checkout End Here -->
    <!-- About SEO start Here -->
    <div class="about-seo-one padding-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="content-part">
                        <h1>Why Work With Us?</h1>
                        <p>We are a young and smart enterprise driven by the goal to provide 100% satisfaction to our
                            clients. Energetic, sincere, confident and knowledgeable is how we like to describe ourselves.
                            Our technical team has significant experience in designing, developing and managing projects.
                        </p>
                        <a class="ghost-btn" href="contact">know more</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="image-part">
                        <img src="assets/img/what_seo_img.png" alt="what seo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About SEO End Here -->
    <!-- Take our service Start Here -->
    <div class="take-our-service">
        <div class="container">
            <div class="row">
                <div class="title-section">
                    <h2>Why Take Our Services</h2>
                    <p>Timply dummy text the printing typesetting industry</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="pull-left icon teal">
                            <a><i class="flaticon-graphic"></i></a>
                        </div>
                        <div class="media content">
                            <h3><a href="#">Web Analytics</a></h3>
                            <p>Web analytics is the measurement, collection, analysis and reporting of web data for purposes
                                of under standing and optimizing web usage.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="pull-left icon red">
                            <a><i class="flaticon-target"></i></a>
                        </div>
                        <div class="media content">
                            <h3><a href="#">Keyword Targeting</a></h3>
                            <p>Keywords are the search terms that people into search engines. Your rankings are based on the
                                relevance of your page to those keywords.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="pull-left icon blue">
                            <a><i class="flaticon-light-bulb"></i></a>
                        </div>
                        <div class="media content">
                            <h3><a href="#">Creative Work</a></h3>
                            <p>As a creative professional, you'll know only too well how important inspiration is for your
                                work. That's whether you've just made a cup.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="pull-left icon grey">
                            <a><i class="flaticon-mail"></i></a>
                        </div>
                        <div class="media content">
                            <h3><a href="#">E-mail Marketing</a></h3>
                            <p>Email marketing is directly sending a commercial message, typically to a group of people,
                                using email. In its broadest sense, every email.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="pull-left icon yellow">
                            <a><i class="flaticon-share"></i></a>
                        </div>
                        <div class="media content">
                            <h3><a href="#">Real Content</a></h3>
                            <p>Content is king. You’ll hear that phrase over and over again when it comes SEO success. Get
                                your content right, and you’ve created.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service">
                        <div class="pull-left icon green">
                            <a><i class="flaticon-headphones"></i></a>
                        </div>
                        <div class="media content">
                            <h3><a href="#">Quick Support</a></h3>
                            <p>Simply dummy text of the printing and typesetting industr Ipsum has industry's standardext.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Take our service End Here -->
    <!-- Counter section Start Here -->
    <div class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box">
                        <div class="single-counter">
                            <a href="#" class="pull-left">
                                <i class="flaticon-handshake"></i>
                            </a>
                            <div class="media-body">
                                <h2 class="about-counter" data-num="5090">5,090</h2>
                                <p>Customer Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box">
                        <div class="single-counter">
                            <a href="#" class="pull-left">
                                <i class="flaticon-graphic-1"></i>
                            </a>
                            <div class="media-body">
                                <h2 class="about-counter" data-num="3090">3,090</h2>
                                <p>Achieve Goals</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box">
                        <div class="single-counter">
                            <a href="#" class="pull-left">
                                <i class="flaticon-share"></i>
                            </a>
                            <div class="media-body">
                                <h2 class="about-counter" data-num="2050">2,050</h2>
                                <p>Share People</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="counter-box">
                        <div class="single-counter">
                            <a href="#" class="pull-left">
                                <i class="flaticon-headphones"></i>
                            </a>
                            <div class="media-body">
                                <h2 class="about-counter" data-num="9000">9,000</h2>
                                <p>Dedicated Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter section End Here -->
    <!-- Recent case studies Start Here -->
    <div class="recent-case-studies padding-two-top-bottom">
        <div class="container">
            <div class="title-section">
                <h2>Recent Case Studies</h2>
                <p>Timply dummy text the printing typesetting industry</p>
            </div>
            <div class="rc-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="true" data-nav="false"
                data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true"
                data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="3"
                data-r-medium-nav="true" data-r-medium-dots="false">
                <div class="single-case-item">
                    <div class="case-image">
                        <a href="#"><img src="assets/img/casestudies/case1.jpg" alt="case"></a>
                        <div class="overly"><a href="#">Details</a></div>
                    </div>
                    <div class="case-content">
                        <h3><a href="#">Content Strategy</a></h3>
                        <p>Borem ipsum dolor samnsectetur adipis cin elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-image">
                        <a href="#"><img src="assets/img/casestudies/case2.jpg" alt="case"></a>
                        <div class="overly"><a href="#">Details</a></div>
                    </div>
                    <div class="case-content">
                        <h3><a href="#">Top SEO Experts</a></h3>
                        <p>Borem ipsum dolor samnsectetur adipis cin elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-image">
                        <a href="#"><img src="assets/img/casestudies/case3.jpg" alt="case"></a>
                        <div class="overly"><a href="#">Details</a></div>
                    </div>
                    <div class="case-content">
                        <h3><a href="#">Marketing Stactics</a></h3>
                        <p>Borem ipsum dolor samnsectetur adipis cin elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-image">
                        <a href="#"><img src="assets/img/casestudies/case1.jpg" alt="case"></a>
                        <div class="overly"><a href="#">Details</a></div>
                    </div>
                    <div class="case-content">
                        <h3><a href="#">Content Strategy</a></h3>
                        <p>Borem ipsum dolor samnsectetur adipis cin elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-image">
                        <a href="#"><img src="assets/img/casestudies/case2.jpg" alt="case"></a>
                        <div class="overly"><a href="#">Details</a></div>
                    </div>
                    <div class="case-content">
                        <h3><a href="#">Marketing Stactics</a></h3>
                        <p>Borem ipsum dolor samnsectetur adipis cin elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent case studies End Here -->
    <!-- Seo premium feature Start Here -->
    <div class="premium-feature-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="premium-content">
                        <h3>Not Enough For Your <span>SEO</span> Needs?</h3>
                        <p>Want to add more projects/ keywords/ pages to analyze?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="premium-button">
                        <a class="default-button-btn" href="#">Premium Features</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Seo premium feature End Here -->
    <!-- Our pricing plans Start Here -->
    <div class="our-pricing-table padding-two-top-bottom">
        <div class="container">
            <div class="row">
                <div class="title-section">
                    <h2>Our Pricing Plans</h2>
                    <p>Simply dummy text of the printing and typesetting industry arore</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="pricing-table-item pricing-table-one">
                        <h4>Basic</h4>
                        <h3>$39.00</h3>
                        <ul>
                            <li>5 Analytics Campaigns</li>
                            <li>300 Keywords</li>
                            <li>250,000 Crawled Pages</li>
                            <li>-</li>
                            <li>15 Social Accounts</li>
                        </ul>
                        <a class="default-button-btn" href="#">Purchase</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="pricing-table-item pricing-table-two">
                        <h4>Standard</h4>
                        <h3>$59.00</h3>
                        <ul>
                            <li>5 Analytics Campaigns</li>
                            <li>300 Keywords</li>
                            <li>250,000 Crawled Pages</li>
                            <li>-</li>
                            <li>15 Social Accounts</li>
                        </ul>
                        <a class="default-button-btn" href="#">Purchase</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="pricing-table-item pricing-table-three">
                        <h4>Unlimited</h4>
                        <h3>$99.00</h3>
                        <ul>
                            <li>5 Analytics Campaigns</li>
                            <li>300 Keywords</li>
                            <li>250,000 Crawled Pages</li>
                            <li>-</li>
                            <li>15 Social Accounts</li>
                        </ul>
                        <a class="default-button-btn" href="#">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our pricing plans End Here -->
    <!-- Happy clients Start Here -->
    <div class="happy-clients padding-top-bottom">
        <div class="container">
            <div class="title-section">
                <h2>Happy Client Says</h2>
            </div>
            <div class="rc-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="true" data-nav="true"
                data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true"
                data-r-small="1" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="1"
                data-r-medium-nav="true" data-r-medium-dots="false">
                <div class="single-client-item">
                    <p>Dorem ipsum dolor sit amet, duis metus ligula amet in purus vitae donec vestibulum enimtincidunt
                        massa convallis ipsum pede augue nunc distinctio.</p>
                    <h3>Martain Brain</h3>
                    <span class="designation">CEO</span>
                </div>
                <div class="single-client-item">
                    <p>Dorem ipsum dolor sit amet, duis metus ligula amet in purus vitae donec vestibulum enimtincidunt
                        massa convallis ipsum pede augue nunc distinctio.</p>
                    <h3>Martain Brain</h3>
                    <span class="designation">CEO</span>
                </div>
                <div class="single-client-item">
                    <p>Dorem ipsum dolor sit amet, duis metus ligula amet in purus vitae donec vestibulum enimtincidunt
                        massa convallis ipsum pede augue nunc distinctio.</p>
                    <h3>Martain Brain</h3>
                    <span class="designation">CEO</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Happy clients End Here -->
    <!-- Latest blog Start Here -->
    <div class="latest-blog-area padding-two-top-bottom">
        <div class="container menu-list-wrapper">
            <div class="row menu-list">
                <div class="title-section">
                    <h2>Latest Blogs</h2>
                    <p>Simply dummy text of the printing and typesetting industry arore</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#"><img src="assets/img/blog/blog1.jpg" alt="blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="date">20
                                <br><span>Oct</span>
                            </div>
                            <h3><a href="#">World market stosimply dummy text of the printingtype setting industryc
                                    for business policy.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 menu-item">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#"><img src="assets/img/blog/blog2.jpg" alt="blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="date">20
                                <br><span>Oct</span>
                            </div>
                            <h3><a href="#">World market stosimply dummy text of the printingtype setting industryc
                                    for business policy.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 menu-item hidden">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#"><img src="assets/img/blog/blog3.jpg" alt="blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="date">20
                                <br><span>Oct</span>
                            </div>
                            <h3><a href="#">World market stosimply dummy text of the printingtype setting industryc
                                    for business policy.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 menu-item hidden">
                    <div class="single-blog-item">
                        <div class="blog-image">
                            <a href="#"><img src="assets/img/blog/blog4.jpg" alt="blog"></a>
                        </div>
                        <div class="blog-content">
                            <div class="date">20
                                <br><span>Oct</span>
                            </div>
                            <h3><a href="#">World market stosimply dummy text of the printingtype setting industryc
                                    for business policy.</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="loadmore viewall">
                        <a class="ghost-btn" href="#">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest blog End Here -->
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
