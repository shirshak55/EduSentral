<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ app_name() }}</title>
    <meta name="description" content="An Online Entrance Examination System">
    <meta name="author" content="Shirshak Bajgain">

    <link rel="stylesheet" href="{{ mix('/css/frontend.css') }}">
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/vendor/device-mockups/device-mockups.min.css">
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
</head>

<body id="page-top">
    @include('includes.partials.logged-in-as')
    @include('includes.partials.messages')

    @include('frontend.includes.home-nav')

    <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>EduSentral Online App</h1>
                            <p>Lets stop wasting time on wrong things and spend time on education</p>
                            <p>We have tried best effort to help every students of Nepal to give worldclass education</p>
                            <a href="#download" class="btn btn-outline btn-xl">Start Exploring!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="download bg-primary text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="section-heading">Study Smart Not Hard</h2>
                    <p>Our examination environment is like that of real examination! Either download our app from playstore or give it from computers</p>
                    <div class="badges">
                        <a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
                        <a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="features" id="features">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Everything Free, Everybody Happy</h2>
                <p class="text-muted">Lets Explore this online system!</p>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="img/demo-screen-1.jpg" class="img-fluid" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-screen-smartphone text-primary"></i>
                                    <h3>1000 Questions</h3>
                                    <p class="text-muted">We have around 1000 questions and new question are added daily!</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-camera text-primary"></i>
                                    <h3>100 Users</h3>
                                    <p class="text-muted">We thank every users for using our system. It makes us feel proud!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-present text-primary"></i>
                                    <h3>Free to Use</h3>
                                    <p class="text-muted">As always our online examination system will always be free to use!</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="feature-item">
                                    <i class="icon-lock-open text-primary"></i>
                                    <h3>Open Partnership</h3>
                                    <p class="text-muted">If you are from institute and want to conduct such system contact us!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Stop Playing Start Learning</h2>
                <a href="#contact" class="btn btn-outline btn-xl">Let's start to learn!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <section class="contact bg-primary" id="contact">
        <div class="container">
            <h2>Show us some love<i class="fa fa-heart"></i> by inviting  your friends!</h2>
            <ul class="list-inline list-social">
                <li class="list-inline-item social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="list-inline-item social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="list-inline-item social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2017 Shirshak Bajgain. All Rights Reserved.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#">Privacy</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Terms</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>
    <script src='{{ mix('js/frontend.js') }}'></script>
    <script src='/vendor/tether/tether.min.js'></script>
    <script src='/vendor/jquery-easing/jquery.easing.min.js'></script>
    <script src='/vendor/jquery-easing/jquery.easing.min.js'></script>
    <script src='/vendor/new-age.min.js'></script>
    @include('includes.partials.ga')
</body>
</html>