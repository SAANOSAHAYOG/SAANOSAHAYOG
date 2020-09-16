@extends('saanosahayog.main')
@section('content')
<!-- Hero Section Begin -->
<section class="hero-section set-bg">
    <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="img-fluid w-100" src="{{ url('public/saanosahayog/img/first.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="hero-text">
                        <span>5 to 9 may 2019, mardavall hotel, New York</span>
                        <a href="#" class="primary-btn">Donate</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100" src="{{ url('public/saanosahayog/img/first.jpg') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="hero-text">
                        <span>5 to 9 may 2019, mardavall hotel, New York</span>
                        <a href="#" class="primary-btn">Donate</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid w-100" src="{{ url('public/saanosahayog/img/first.jpg') }}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <div class="hero-text">
                        <span>5 to 9 may 2019, mardavall hotel, New York</span>
                        <a href="#" class="primary-btn">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Hero Section End -->

<!-- Home About Section Begin -->
<section class="home-about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ha-pic">
                    <img src="{{ url('public/saanosahayog/img/about.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ha-text">
                    <h2>About Saano Sahayog</h2>
                    <p>NGOs are independent of governments and can be seen as two types, advocacy NGOs,
                        which aim to influence governments with a specific goal, and operational NGOs,
                        which provide services.[1] Examples of NGO mandates are environmental preservation,
                        human rights promotions or the advancement of women. NGOs are typically not-for-profit,
                        but receive funding from companies or membership fees.[2] Many large INGOs have
                        components of operational projects and advocacy initiatives working together within
                    individual countries. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home About Section End -->
<!-- Team Member Section Begin -->
<section class="team-member-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Team Members</h2>
                    <p>These are our communicators, you can see each person information</p>
                </div>
            </div>
        </div>
    </div>
    <div class="member-item set-bg" style="background-image: url('public/saanosahayog/img/team-member/member-1.jpg')">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5>Emma Sandoval</h5>
            <span>Speaker</span>
        </div>
    </div>
    <div class="member-item set-bg" style="background-image: url('public/saanosahayog/img/team-member/member-2.jpg')">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5>Emma Sandoval</h5>
            <span>Speaker</span>
        </div>
    </div>
    <div class="member-item set-bg" style="background-image: url('public/saanosahayog/img/team-member/member-3.jpg')">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5>Emma Sandoval</h5>
            <span>Speaker</span>
        </div>
    </div>
    <div class="member-item set-bg" style="background-image: url('public/saanosahayog/img/team-member/member-4.jpg')">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5>Emma Sandoval</h5>
            <span>Speaker</span>
        </div>
    </div>
    <div class="member-item set-bg" style="background-image: url('public/saanosahayog/img/team-member/member-5.jpg')">
        <div class="mi-social">
            <div class="mi-social-inner bg-gradient">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="mi-text">
            <h5>Emma Sandoval</h5>
            <span>Speaker</span>
        </div>
    </div>
</section>
<!-- Team Member Section End -->
        
        <!-- latest BLog Section Begin -->
        <section class="latest-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Latest News</h2>
                            <p>Do not miss anything topic abput the event</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="latest-item set-bg large-item" style="background-image: url('public/saanosahayog/img/related-post/related-post-1.jpg')">
                            <div class="li-tag">Marketing</div>
                            <div class="li-text">
                                <h4><a href="#">Improve You Business Cards And Enchan Your Sales</a></h4>
                                <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="latest-item set-bg" style="background-image: url('public/saanosahayog/img/related-post/related-post-2.jpg')">
                            <div class="li-tag">Experience</div>
                            <div class="li-text">
                                <h5><a href="#">All users on MySpace will know that there are millions of people out there.</a></h5>
                                <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                            </div>
                        </div>
                        <div class="latest-item set-bg" style="background-image: url('public/saanosahayog/img/related-post/related-post-3.jpg')">
                            <div class="li-tag">Marketing</div>
                            <div class="li-text">
                                <h5><a href="#">A Pocket PC is a handheld computer, which features many of the same capabilities.</a></h5>
                                <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- latest BLog Section End -->
        <!-- Newslatter Section Begin -->
        <section class="newslatter-section">
            <div class="container">
                <div class="newslatter-inner set-bg" style="background-image: url('public/saanosahayog/img/newslatter-bg.jpg')">
                    <div class="ni-text">
                        <h3>Subscribe Newsletter</h3>
                        <p>Subscribe to our newsletter and don’t miss anything</p>
                    </div>
                    <form action="#" class="ni-form">
                        <input type="text" placeholder="Your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- Newslatter Section End -->
        <!-- Contact Section Begin -->
        <section class="contact-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Location</h2>
                            <p>Get directions to our head-office</p>
                        </div>
                        <div class="cs-text">
                            <div class="ct-address">
                                <span>Address:</span>
                                <p>Buddha Stupa, Boudhanath Sadak <br />Kathmandu 44600</p>
                            </div>
                            <ul>
                                <li>
                                    <span>Phone:</span>
                                    (+977)-014376478
                                </li>
                                <li>
                                    <span>Email:</span>
                                    info.saanosahayog@gmail.com
                                </li>
                            </ul>
                            <div class="ct-links">
                                <span>Website:</span>
                                <p>https://saanosahayog.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cs-map">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3531.8655502217543!2d85.3597667!3d27.7214372!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1bda4a951f0f%3A0x3ddabb234891c3bd!2sBoudha%20Stupa!5e0!3m2!1sen!2snp!4v1593553992896!5m2!1sen!2snp"
                            height="400" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
        @endsection
