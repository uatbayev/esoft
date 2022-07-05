<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('efront/img/icon.ico') }}" />
    <meta name="description" content="Создание сайтов в Шымкенте. Ведущая студия по разработке сайтов в Шымкенте. Заказать сайт в Шымкент вы можете здесь. Создаем и разрабатываем веб-сайты с 2015 г.">

    <link rel="stylesheet" href="{{ asset('efront/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('efront/css/maicons.css') }}">

    <link rel="stylesheet" href="{{ asset('efront//vendor/animate/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('efront/vendor/owl-carousel/css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('efront/vendor/fancybox/css/jquery.fancybox.css') }}">

    <link rel="stylesheet" href="{{ asset('efront/css/theme.css') }}">

</head>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="d-inline-block">
                        <span class="mai-mail fg-primary"></span> <a href="mailto:contact@mail.com">musa.uatbayev@gmail.com</a>
                    </div>
                    <div class="d-inline-block ml-2">
                        <span class="mai-call fg-primary"></span> <a href="tel:+7071230022">+7071230022</a>
                    </div>
                </div>
                <div class="col-md-4 text-right d-none d-md-block">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-youtube"></span></a>
                        <a href="#"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .top-bar -->

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand">E<span class="text-primary">soft.</span></a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
                    <li class="nav-item active">
                        <a href="{{ route('home') }}" class="nav-link">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="portfolio.html" class="nav-link">Цены</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Контакты</a>
                    </li>
                </ul>
            </div>
        </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner home-banner mb-5">
        <div class="slider-wrapper">
            <div class="owl-carousel hero-carousel">
                <div class="hero-carousel-item">
                    <img src="{{ asset('efront/img/photo-1.jpg') }}" alt="">
                    <div class="img-caption">
                        <div class="subhead">РАЗРАБОТКА САЙТОВ</div>
                        <h1 class="mb-4">Создание сайтов любой сложности</h1>
                    </div>
                </div>
{{--                <div class="hero-carousel-item">--}}
{{--                    <img src="{{ asset('efront/img/bg_image_2.jpg') }}" alt="">--}}
{{--                    <div class="img-caption">--}}
{{--                        <h1 class="mb-4">We combine Design, Thinking, and Technical</h1>--}}
{{--                        <a href="#services" class="btn btn-outline-light">Get Started</a>--}}
{{--                        <a href="#services" class="btn btn-primary">See Pricing</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="hero-carousel-item">--}}
{{--                    <img src="{{ asset('efront/img/bg_image_3.jpg') }}" alt="">--}}
{{--                    <div class="img-caption">--}}
{{--                        <div class="subhead">Easy way to build perfect website</div>--}}
{{--                        <h1 class="mb-4">Beautify handcrafted templates for your website</h1>--}}
{{--                        <a href="#services" class="btn btn-primary">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
</header>

<main>
    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3">
                    <div class="subhead">О Нас</div>
                    <h2 class="title-section">We are <span class="fg-primary">Professional Teams</span> to Growth your Business</h2>

                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of</p>

                    <a href="about.html" class="btn btn-primary mt-4">Read More</a>
                </div>
                <div class="col-lg-6 py-3">
                    <div class="about-img">
                        <img src="{{ asset('efront/img/about.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="text-center">
                <div class="subhead">Our Services</div>
                <h2 class="title-section">See what can we do for your Projects</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/web_development.svg') }}" alt="">
                        </div>
                        <h5>Web Development</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/graphics_design.svg') }}" alt="">
                        </div>
                        <h5>Graphics Design</h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/seo_and_marketing.svg') }}" alt="">
                        </div>
                        <h5>SEO & Marketing</h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/customer_services.svg') }}" alt="">
                        </div>
                        <h5>Customer Services</h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/app_development.svg') }}" alt="">
                        </div>
                        <h5>App Development</h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/ui_ux_design.svg') }}" alt="">
                        </div>
                        <h5>UI/UX Design</h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/product_design.svg') }}" alt="">
                        </div>
                        <h5>Product Design</h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
                    <div class="text-center">
                        <div class="img-fluid mb-4">
                            <img src="{{ asset('efront/img/icons/data_analyst.svg') }}" alt="">
                        </div>
                        <h5>Data Analyst</h5>
                    </div>
                </div>

            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="text-center">
                <div class="subhead">Our Teams</div>
                <h2 class="title-section">The Expert Team on ReveTive</h2>
            </div>

            <div class="owl-carousel team-carousel mt-5">
                <div class="team-wrap">
                    <div class="team-profile">
                        <img src="{{ asset('efront/img/teams/team_1.jpg') }}" alt="">
                    </div>
                    <div class="team-content">
                        <h5>Walter White</h5>
                        <div class="text-sm fg-grey">Chief Executive Officer</div>

                        <div class="social-button">
                            <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-mail"></span></a>
                        </div>
                    </div>
                </div>

                <div class="team-wrap">
                    <div class="team-profile">
                        <img src="{{ asset('efront/img/teams/team_2.jpg') }}" alt="">
                    </div>
                    <div class="team-content">
                        <h5>Sarah Johanson</h5>
                        <div class="text-sm fg-grey">Chief Technology Officer</div>

                        <div class="social-button">
                            <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-mail"></span></a>
                        </div>
                    </div>
                </div>

                <div class="team-wrap">
                    <div class="team-profile">
                        <img src="{{ asset('efront/img/teams/team_3.jpg') }}" alt="">
                    </div>
                    <div class="team-content">
                        <h5>Anna Anderson</h5>
                        <div class="text-sm fg-grey">Product Manager</div>

                        <div class="social-button">
                            <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-mail"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <div class="page-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 py-3">
                    <div class="subhead">Portfolio</div>
                    <h2 class="title-section">Our Latest Projects</h2>
                </div>
                <div class="col-md-6 py-3 text-md-right">
                    <a href="portfolio.html" class="btn btn-outline-primary">Browse Projects <span class="mai-arrow-forward ml-2"></span></a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4 py-3">
                    <div class="portfolio">
                        <a href="{{ asset('efront/img/portfolio/work-1.jpg') }}" data-fancybox="portfolio">
                            <img src="{{ asset('efront/img/portfolio/work-1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="portfolio">
                        <a href="{{ asset('efront/img/portfolio/work-2.jpg') }}" data-fancybox="portfolio">
                            <img src="{{ asset('efront/img/portfolio/work-2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="portfolio">
                        <a href="{{ asset('efront/img/portfolio/work-3.jpg') }}" data-fancybox="portfolio">
                            <img src="{{ asset('efront/img/portfolio/work-3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="portfolio">
                        <a href="{{ asset('efront/img/portfolio/work-4.jpg') }}" data-fancybox="portfolio">
                            <img src="{{ asset('efront/img/portfolio/work-4.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="portfolio">
                        <a href="{{ asset('efront/img/portfolio/work-5.jpg') }}" data-fancybox="portfolio">
                            <img src="{{ asset('efront/img/portfolio/work-5.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="portfolio">
                        <a href="{{ asset('efront/img/portfolio/work-6.jpg') }}" data-fancybox="portfolio">
                            <img src="{{ asset('efront/img/portfolio/work-6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- .container -->
    </div> <!-- .page-section -->

    <!-- Testimonials -->
{{--    <div class="page-section">--}}
{{--        <div class="container">--}}
{{--            <div class="owl-carousel testimonial-carousel">--}}
{{--                <div class="card-testimonial">--}}
{{--                    <div class="content">--}}
{{--                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph--}}
{{--                    </div>--}}
{{--                    <div class="author">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="{{ asset('efront/img/person/person_1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="d-inline-block ml-2">--}}
{{--                            <div class="author-name">Sam Watson</div>--}}
{{--                            <div class="author-info">CEO - Mosh Elite Ltd.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-testimonial">--}}
{{--                    <div class="content">--}}
{{--                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph--}}
{{--                    </div>--}}
{{--                    <div class="author">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="{{ asset('efront/img/person/person_2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="d-inline-block ml-2">--}}
{{--                            <div class="author-name">Edinson Alfa</div>--}}
{{--                            <div class="author-info">CEO - Mosh Elite Ltd.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-testimonial">--}}
{{--                    <div class="content">--}}
{{--                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph--}}
{{--                    </div>--}}
{{--                    <div class="author">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="{{ asset('efront/img/person/person_3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="d-inline-block ml-2">--}}
{{--                            <div class="author-name">May Halloway</div>--}}
{{--                            <div class="author-info">CEO - Mosh Elite Ltd.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-testimonial">--}}
{{--                    <div class="content">--}}
{{--                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph--}}
{{--                    </div>--}}
{{--                    <div class="author">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="{{ asset('efront/img/person/person_1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="d-inline-block ml-2">--}}
{{--                            <div class="author-name">Sam Watson</div>--}}
{{--                            <div class="author-info">CEO - Mosh Elite Ltd.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-testimonial">--}}
{{--                    <div class="content">--}}
{{--                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph--}}
{{--                    </div>--}}
{{--                    <div class="author">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="{{ asset('efront/img/person/person_2.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="d-inline-block ml-2">--}}
{{--                            <div class="author-name">Edinson Alfa</div>--}}
{{--                            <div class="author-info">CEO - Mosh Elite Ltd.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card-testimonial">--}}
{{--                    <div class="content">--}}
{{--                        The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph--}}
{{--                    </div>--}}
{{--                    <div class="author">--}}
{{--                        <div class="avatar">--}}
{{--                            <img src="{{ asset('efront/img/person/person_3.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="d-inline-block ml-2">--}}
{{--                            <div class="author-name">May Halloway</div>--}}
{{--                            <div class="author-info">CEO - Mosh Elite Ltd.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div> <!-- .row -->--}}
{{--        </div> <!-- .container -->--}}
{{--    </div> <!-- .page-section -->--}}

{{--    <div class="page-section">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <div class="subhead">News</div>--}}
{{--                <h2 class="title-section">Read Our Latest News</h2>--}}
{{--            </div>--}}

{{--            <div class="row my-5 card-blog-row">--}}
{{--                <div class="col-lg-3 py-3">--}}
{{--                    <div class="card-blog">--}}
{{--                        <div class="header">--}}
{{--                            <div class="entry-footer">--}}
{{--                                <div class="post-author">Sam Newman</div>--}}
{{--                                <a href="#" class="post-date">23 Apr 2020</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 py-3">--}}
{{--                    <div class="card-blog">--}}
{{--                        <div class="header">--}}
{{--                            <div class="avatar">--}}
{{--                                <img src="{{ asset('efront/img/person/person_1.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="entry-footer">--}}
{{--                                <div class="post-author">Sam Newman</div>--}}
{{--                                <a href="#" class="post-date">23 Apr 2020</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>--}}
{{--                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 py-3">--}}
{{--                    <div class="card-blog">--}}
{{--                        <div class="header">--}}
{{--                            <div class="avatar">--}}
{{--                                <img src="{{ asset('efront/img/person/person_2.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="entry-footer">--}}
{{--                                <div class="post-author">Sam Newman</div>--}}
{{--                                <a href="#" class="post-date">23 Apr 2020</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>--}}
{{--                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 py-3">--}}
{{--                    <div class="card-blog">--}}
{{--                        <div class="header">--}}
{{--                            <div class="avatar">--}}
{{--                                <img src="{{ asset('efront/img/person/person_3.jpg') }}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="entry-footer">--}}
{{--                                <div class="post-author">Sam Newman</div>--}}
{{--                                <a href="#" class="post-date">23 Apr 2020</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="body">--}}
{{--                            <div class="post-title"><a href="blog-single.html">What is Business Management?</a></div>--}}
{{--                            <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>--}}
{{--                        </div>--}}
{{--                        <div class="footer">--}}
{{--                            <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="text-center">--}}
{{--                <a href="blog.html" class="btn btn-primary">View More</a>--}}
{{--            </div>--}}

{{--        </div> <!-- .container -->--}}
{{--    </div> <!-- .page-section -->--}}

{{--    <div class="page-section">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <h2 class="title-section mb-3">Stay in touch</h2>--}}
{{--                <p>Just say hello or drop us a line. You can manualy send us email on <a href="mailto:example@mail.com">example@mail.com</a></p>--}}
{{--            </div>--}}
{{--            <div class="row justify-content-center mt-5">--}}
{{--                <div class="col-lg-8">--}}
{{--                    <form action="#" class="form-contact">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-6 py-2">--}}
{{--                                <label for="name" class="fg-grey">Name</label>--}}
{{--                                <input type="text" class="form-control" id="name" placeholder="Enter name..">--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-6 py-2">--}}
{{--                                <label for="email" class="fg-grey">Email</label>--}}
{{--                                <input type="text" class="form-control" id="email" placeholder="Email address..">--}}
{{--                            </div>--}}
{{--                            <div class="col-12 py-2">--}}
{{--                                <label for="subject" class="fg-grey">Subject</label>--}}
{{--                                <input type="text" class="form-control" id="subject" placeholder="Subject..">--}}
{{--                            </div>--}}
{{--                            <div class="col-12 py-2">--}}
{{--                                <label for="message" class="fg-grey">Message</label>--}}
{{--                                <textarea id="message" rows="8" class="form-control" placeholder="Enter message.."></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 mt-3">--}}
{{--                                <button type="submit" class="btn btn-primary px-5">Submit</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> <!-- .container -->--}}
{{--    </div> <!-- .page-section -->--}}

{{--    <div class="page-section">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">--}}
{{--                <div class="py-3 px-5">--}}
{{--                    <img src="{{ asset('efront/img/clients/airbnb.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="py-3 px-5">--}}
{{--                    <img src="{{ asset('efront/img/clients/google.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="py-3 px-5">--}}
{{--                    <img src="{{ asset('efront/img/clients/mailchimp.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="py-3 px-5">--}}
{{--                    <img src="{{ asset('efront/img/clients/paypal.png') }}" alt="">--}}
{{--                </div>--}}
{{--                <div class="py-3 px-5">--}}
{{--                    <img src="{{ asset('efront/img/clients/stripe.png') }}" alt="">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> <!-- .container-fluid -->--}}
{{--    </div> <!-- .page-section -->--}}

</main>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 py-3">
                <h3>E<span class="fg-primary">soft.</span></h3>
            </div>
            <div class="col-lg-3 py-3">
                <h5>Контакты</h5>
                <p>г. Шымкент, ул. Аргынбекова 135/1</p>
                <p>Email: musa.uatbayev@gmail.com</p>
                <p>Тел: +7 707 1230022</p>
            </div>
            <div class="col-lg-3 py-3">
                <h5>Меню</h5>
                <ul class="footer-menu">
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Портфолио</a></li>
                    <li><a href="#">Цены</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
            <div class="col-lg-3 py-3">
                <h5>Есть вопросы или необходима консультация?!</h5>
{{--                <form action="#">--}}
{{--                    <input type="text" class="form-control" placeholder="Enter your email">--}}
{{--                    <button type="submit" class="btn btn-primary btn-sm mt-2">Отправить заявку</button>--}}
{{--                </form>--}}
                <button type="submit" class="btn btn-primary btn-sm mt-2">Отправить заявку</button>
            </div>
        </div>

        <hr>

        <div class="row mt-4">
            <div class="col-md-6">
                <p>Все права защищены. Copyright &copy; 2022 <a href="http://esoft.kz">esoft.kz</a></p>
            </div>
            <div class="col-md-6 text-right">
                <div class="sosmed-button">
                    <a href="#"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#"><span class="mai-logo-twitter"></span></a>
                    <a href="#"><span class="mai-logo-youtube"></span></a>
                    <a href="#"><span class="mai-logo-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('efront/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('efront/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('efront/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('efront/vendor/wow/wow.min.js') }}"></script>

<script src="{{ asset('efront/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset('efront/vendor/isotope/isotope.pkgd.min.js') }}"></script>

<script src="{{ asset('efront/js/google-maps.js') }}"></script>

<script src="{{ asset('efront/js/theme.js') }}"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
</html>
