@extends('master')
@section('main')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index-2">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="row gy-40">
                <div class="col-xl-5">
                    <div class="contact-info-wrap">
                        <h2 class="fs-40 border-title">Contact Info</h2>
                        <div class="contact-info">
                            <h4 class="contact-info_title">Telephone Number:</h4>
                            <div class="contact-info_icon"><i class="fal fa-phone"></i></div>
                            <div class="media-body"><span class="contact-info_text"><a href="tel:+65485965789">(+65)
                                        - 48596 - 5789</a> <a href="tel:+65485965789">+65-48596-5789</a></span></div>
                        </div>
                        <div class="contact-info">
                            <h4 class="contact-info_title">Mail Address:</h4>
                            <div class="contact-info_icon"><i class="fal fa-envelope"></i></div>
                            <div class="media-body"><span class="contact-info_text"><a href="ABC@123.COM">
                                        ABC@123.COM</a> <a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <h4 class="contact-info_title">Office Address:</h4>
                            <div class="contact-info_icon"><i class="fal fa-location-dot"></i></div>
                            <div class="media-body"><span class="contact-info_text">Burnsville, MN 55337
                                    Streat,<br>United States</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-map"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                            allowfullscreen="" loading="lazy"></iframe></div>
                </div>
            </div>
        </div>
    </div>
    <section class="space-bottom overflow-hidden">
        <div class="container">
            <div class="row gy-40 align-items-end">
                <div class="col-xl-8">
                    <h3 class="fs-40 mb-2 mt-n2">Drop Us a Line</h3>
                    <p class="mb-4">Uniquely productize backend systems for ethical "outside the</p>
                    <form action="contactForm" method="POST" class="quote-form ajax-contact">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6"><input type="text" class="form-control" name="name"
                                    id="name" placeholder="Your Name"> <i class="fal fa-user"></i></div>
                            <div class="form-group col-md-6"><input type="email" class="form-control" name="email"
                                    id="email" placeholder="Email Address"> <i class="fal fa-envelope"></i></div>
                            <div class="form-group col-md-6"><input type="tel" class="form-control" name="number"
                                    id="number" placeholder="Phone Number"> <i class="fal fa-phone"></i></div>
                            <div class="form-group col-md-6"><select name="subject" id="subject" class="form-select">
                                    <option value="" disabled="disabled" selected="selected" hidden>Select
                                        Service</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="Brand Marketing">Brand Marketing</option>
                                    <option value="UI/UX Designing">UI/UX Designing</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                </select> <i class="fal fa-chevron-down"></i></div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea> <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn col-12"><button class="as-btn">Send Message</button></div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="contact-img"><img src="assets/img/normal/contact_1.png" alt="vector"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
