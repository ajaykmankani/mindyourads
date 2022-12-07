@extends('master')
@section('main')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog Standard</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2">Home</a></li>
                    <li>Blog Standard</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="as-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="as-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details"><img src="assets/img/blog/blog-s-1-1.jpg"
                                    alt="Blog Image"></a></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog"><i class="fa-regular fa-user"></i>By @php $company_name @endphp</a>
                                <a href="blog"><i class="fa-light fa-calendar-days"></i>21 June, 2022</a> <a
                                    href="blog-details"><i class="fa-regular fa-comments"></i>Comments(3)</a> <a
                                    href="blog"><i class="fa-regular fa-tag"></i>Design</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details">Delivering the best digital
                                    marketing</a></h2>
                            <p class="blog-text">Phosfluorescently unleash highly efficient experiences for team driven
                                scenarios. Conveniently enhance cross-unit communities with testing procedures.
                                Dynamically embrace team building expertise. Proactively monetize parallel solutions.
                            </p><a href="blog-details" class="as-btn">Read More<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="as-blog blog-single has-post-thumbnail">
                        <div class="blog-img as-carousel" data-arrows="true" data-slide-show="1" data-fade="true"><a
                                href="blog-details"><img src="assets/img/blog/blog-s-1-2.jpg" alt="Blog Image"></a><a
                                href="blog-details"><img src="assets/img/blog/blog-s-1-3.jpg" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog"><i class="fa-regular fa-user"></i>By @php $company_name @endphp</a>
                                <a href="blog"><i class="fa-light fa-calendar-days"></i>22 June, 2022</a> <a
                                    href="blog-details"><i class="fa-regular fa-comments"></i>Comments(3)</a> <a
                                    href="blog"><i class="fa-regular fa-tag"></i>Development</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details">The best UX design blogs for
                                    industry</a></h2>
                            <p class="blog-text">Phosfluorescently unleash highly efficient experiences for team driven
                                scenarios. Conveniently enhance cross-unit testing procedures. Dynamically embrace team
                                building expertise. Proactively monetize parallel solutions.</p><a href="blog-details"
                                class="as-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="as-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog"><i class="fa-regular fa-user"></i>By @php $company_name @endphp</a>
                                <a href="blog"><i class="fa-light fa-calendar-days"></i>23 June, 2022</a> <a
                                    href="blog-details"><i class="fa-regular fa-comments"></i>Comments(3)</a> <a
                                    href="blog"><i class="fa-regular fa-tag"></i>Marketing</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details">Trusted by The world’s best
                                    organization</a></h2>
                            <p class="blog-text">Phosfluorescently unleash highly efficient experiences for team driven
                                scenarios. Conveniently enhance cross-unit testing procedures. Dynamically embrace team
                                building expertise. Proactively monetize parallel solutions.</p><a href="blog-details"
                                class="as-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="as-blog blog-single has-post-thumbnail">
                        <div class="blog-img"><a href="blog-details"><img src="assets/img/blog/blog-s-1-4.jpg"
                                    alt="Blog Image"></a><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fas fa-play"></i></a></div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog"><i class="fa-regular fa-user"></i>By @php $company_name @endphp</a>
                                <a href="blog"><i class="fa-light fa-calendar-days"></i>24 June, 2022</a> <a
                                    href="blog-details"><i class="fa-regular fa-comments"></i>Comments(2)</a> <a
                                    href="blog"><i class="fa-regular fa-tag"></i>UI/UX Design</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details">Online Environments That Work Well</a>
                            </h2>
                            <p class="blog-text">Phosfluorescently unleash highly efficient experiences for team driven
                                scenarios. Conveniently enhance cross-unit testing procedures. Dynamically embrace team
                                building expertise. Proactively monetize parallel solutions.</p><a href="blog-details"
                                class="as-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="as-blog blog-single has-post-thumbnail">
                        <div class="blog-audio"><iframe title="Tell Me U Luv Me (with Trippie Redd) by Juice WRLD"
                                src="https://w.soundcloud.com/player/?visual=true&amp;url=https%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F830279092&amp;show_artwork=true&amp;maxwidth=751&amp;maxheight=1000&amp;dnt=1"></iframe>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta"><a href="blog"><i class="fa-regular fa-user"></i>By @php $company_name @endphp</a>
                                <a href="blog"><i class="fa-light fa-calendar-days"></i>21 June, 2022</a> <a
                                    href="blog-details"><i class="fa-regular fa-comments"></i>Comments(3)</a> <a
                                    href="blog"><i class="fa-regular fa-tag"></i>UI/UX Design</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details">The best UX design blogs for
                                    industry</a></h2>
                            <p class="blog-text">Phosfluorescently unleash highly efficient experiences for team driven
                                scenarios. Conveniently enhance cross-unit testing procedures. Dynamically embrace team
                                building expertise. Proactively monetize parallel solutions.</p><a href="blog-details"
                                class="as-btn">Read More<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="as-pagination">
                        <ul>
                            <li><a href="blog">1</a></li>
                            <li><a href="blog">2</a></li>
                            <li><a href="blog">3</a></li>
                            <li><a href="blog"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="Search..."> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="blog">Web Development</a> <span>10</span></li>
                                <li><a href="blog">Business Development</a> <span>08</span></li>
                                <li><a href="blog">Product Management</a> <span>15</span></li>
                                <li><a href="blog">UI/UX Design</a> <span>14</span></li>
                                <li><a href="blog">Social Marketing</a> <span>12</span></li>
                                <li><a href="blog">Social Marketing</a> <span>12</span></li>
                                <li><a href="blog">SEO & Content Writing</a> <span>12</span></li>
                                <li><a href="blog">Digital Marketing</a> <span>12</span></li>
                            </ul>
                        </div>
                        <div class="widget">
                            <div class="author-widget-wrap">
                                <div class="avater"><img src="assets/img/blog/author_1.jpg" alt="avater"></div>
                                <div class="author-info">
                                    <h4 class="name"><a class="text-inherit" href="classes">Alone Mask</a>
                                    </h4>
                                </div>
                                <p class="author-bio">Assertively pontificate high standards in scenarios rather than
                                    sustainable.</p>
                                <div class="author-social"><a href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a> <a href="https://twitter.com/"><i
                                            class="fab fa-twitter"></i></a> <a href="https://pinterest.com/"><i
                                            class="fab fa-pinterest-p"></i></a> <a href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a></div>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details"><img
                                                src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details">App
                                                Promotes Sales of Markets it.</a></h4>
                                        <div class="recent-post-meta"><a href="blog"><i
                                                    class="fas fa-calendar-days"></i>21 June, 2022</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details"><img
                                                src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details">Best
                                                Define World IT Digital Solution</a></h4>
                                        <div class="recent-post-meta"><a href="blog"><i
                                                    class="fas fa-calendar-days"></i>22 June, 2022</a></div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img"><a href="blog-details"><img
                                                src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details">Override
                                                The Digital Of Divide With</a></h4>
                                        <div class="recent-post-meta"><a href="blog"><i
                                                    class="fas fa-calendar-days"></i>23 June, 2022</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud"><a href="blog">Business</a> <a href="blog">Marketing</a>
                                <a href="blog">@php $company_name @endphp</a> <a href="blog">Design</a> <a
                                    href="blog">Development</a> <a href="blog">UI/UX</a> <a
                                    href="blog">Branding</a> <a href="blog">Corporate</a> <a
                                    href="blog">Data</a>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="as-social"><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                    href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a> <a
                                    href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                    href="https://linkedin.com/"><i class="fab fa-instagram"></i></a></div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
