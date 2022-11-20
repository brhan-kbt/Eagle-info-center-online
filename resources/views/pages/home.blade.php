@include('shareable.header')
<body class="hp-9 hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('shareable.navbar')

        <!-- STAR HEADER IMAGE -->
        <section style="background:orange;" class="header-image d-flex align-items-center" id="slider">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="left wow fadeInLeft">
                            <h1 style="color:white;" >Find Places That People Love</h1>
                            <p style="color:white;">To design is much more than simply to assemble, to order vor even to edit it is to add value and meaning, to illuminate, to simplify, to clarify.</p>
                            <a href="/listing" class="btn-white">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-aos="fade-left">
                        <div class="image d-flex justify-content-lg-end justify-content-md-center">
                            <img src="./assets/images/bg/slider.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER IMAGE -->

        <!-- STAR POPULAR CATEGORIES -->
        <section class="popular-categories">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Popular </span>Categories</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 remb-30" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">01</span>
                            <i class="fas fa-utensils"></i>
                            <h3>Restaurants</h3>
                            <p>500 Listings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 remb-30" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">02</span>
                            <i class="fas fa-umbrella-beach"></i>
                            <h3>Hotels</h3>
                            <p>635 Listings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 rtmb-30" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">03</span>
                            <i class="fas fa-dumbbell"></i>
                            <h3>Fitness</h3>
                            <p>723 Listings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">04</span>
                            <i class="fas fa-coffee"></i>
                            <h3>Coffee Shop</h3>
                            <p>897 Listings</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 second">
                    <div class="col-lg-3 col-md-6 remb-30" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">05</span>
                            <i class="fas fa-shopping-bag"></i>
                            <h3>Shopping</h3>
                            <p>954 Listings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 remb-30" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">06</span>
                            <i class="fas fa-film"></i>
                            <h3>Movie Theater</h3>
                            <p>1023 Listings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 rtmb-30" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">07</span>
                            <i class="fas fa-university"></i>
                            <h3>Banks</h3>
                            <p>1234 Listings</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6" data-aos="zoom-in">
                        <div class="popular-categories-item"> <span class="step-point">08</span>
                            <i class="fas fa-shopping-cart"></i>
                            <h3>Super Market</h3>
                            <p>1378 Listings</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END POPULAR CATEGORIES -->

        <!-- START SECTION POPULAR LISTINGS -->
        <section class="popular portfolio freelancers">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Popular </span>Listings</h2>
                    <p>What are you interested.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/1" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f1">Fetured</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>163</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 6 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="./assets/images/popular-listings/1.jpg" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="./assets/images/freelancers/free-1.jpg" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="/listing-details/1"><h3>Luxury Restaurant</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>New York City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 2 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-2">
                                            <a href="/listing-details/1">
                                                <img src="./assets/images/icons/2.png" width="20" class="mr-2" alt=""> Restaurant
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/1" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f2">Popular</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>202</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star-half"></i>
                                                        </li>
                                                        <li class="ml-1">( 3 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="./assets/images/popular-listings/2.jpg" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="./assets/images/freelancers/free-2.jpg" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="/listing-details/1"><h3>Gym in Miami</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Miami City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 6 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-3">
                                            <a href="/listing-details/1">
                                                <img src="./assets/images/icons/3.png" width="20" class="mr-2" alt=""> Fitness
                                            </a>
                                            <span>
                                <i class="fas fa-lock"></i> Closed Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/1" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f3">New</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>412</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 9 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="./assets/images/popular-listings/3.jpg" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="./assets/images/freelancers/free-3.jpg" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <a href="/listing-details/1"><h3>Cafe in Boston</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Boston City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 4 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-4">
                                            <a href="/listing-details/1">
                                                <img src="./assets/images/icons/4.png" width="20" class="mr-2" alt=""> Cafe
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/1" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f1">Fetured</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>163</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 6 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="./assets/images/popular-listings/4.jpg" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="./assets/images/freelancers/free-4.jpg" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="/listing-details/1"><h3>Rent a Car in Texas</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Houston City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 7 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-7">
                                            <a href="/listing-details/1">
                                                <img src="./assets/images/icons/7.png" width="20" class="mr-2" alt=""> Rent a Car
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/1" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f2">Popular</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>202</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star-half"></i>
                                                        </li>
                                                        <li class="ml-1">( 3 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="./assets/images/popular-listings/5.jpg" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="./assets/images/freelancers/free-5.jpg" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="/listing-details/1"><h3>Hotel in Punta Cana</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Dominican Republic</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 11 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-1">
                                            <a href="/listing-details/1">
                                                <img src="./assets/images/icons/1.png" width="20" class="mr-2" alt=""> Hotel
                                            </a>
                                            <span>
                                <i class="fas fa-lock"></i> Closed Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="/listing-details/1" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f3">New</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>412</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 9 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="./assets/images/popular-listings/7.jpg" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="./assets/images/freelancers/free-6.jpg" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <a href="/listing-details/1"><h3>Store in Los Angeles</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Los Angeles. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 5 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-8">
                                            <a href="/listing-details/1">
                                                <img src="./assets/images/icons/8.png" width="17" class="mr-2" alt=""> Shopping
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION POPULAR LISTINGS -->

        <!-- START SECTION HOW IT WORKS -->
        <section class="how-it-works">
            <div class="container">
                <div class="sec-title">
                    <h2><span>How </span>It Works</h2>
                    <p>Easy To Do It.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="./assets/images/map.png" alt="">
                                <h3>Find Good Places</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="./assets/images/contact.png" alt="">
                                <h3>Contact The Owner</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="./assets/images/user.png" alt="">
                                <h3>Make a Reservation</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION HOW IT WORKS -->
        
        <!-- START SECTION POPULAR PLACES -->
        <section class="feature-categories bg-gray">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Popular </span>Places</h2>
                    <p>Listings In Most Popular Places.</p>
                </div>
                <div class="row">
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="properties-map.html"><img src="./assets/images/popular-places/12.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-map.html">New York</a></h4>
                                <span>203 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-2">
                                <a href="properties-map.html"><img src="./assets/images/popular-places/13.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-map.html">Los Angeles</a></h4>
                                <span>307 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-3">
                                <a href="properties-map.html"><img src="./assets/images/popular-places/14.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-map.html">San Francisco</a></h4>
                                <span>409 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in">
                        <div class="small-category-2 mob-mt pc-mb">
                            <div class="small-category-2-thumb img-8">
                                <a href="properties-map.html"><img src="./assets/images/popular-places/15.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-map.html">Miami</a></h4>
                                <span>145 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in">
                        <div class="small-category-2 pc-mb">
                            <div class="small-category-2-thumb img-10">
                                <a href="properties-map.html"><img src="./assets/images/popular-places/10.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-map.html">Chicago</a></h4>
                                <span>112 Properties</span>
                            </div>
                        </div>
                    </div>
                    <!-- Single category -->
                    <div class="col-xl-4 col-lg-6 col-sm-6" data-aos="zoom-in">
                        <div class="small-category-2 no-mb si-mt">
                            <div class="small-category-2-thumb img-11">
                                <a href="properties-map.html"><img src="./assets/images/popular-places/5.jpg" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="properties-map.html">Houston</a></h4>
                                <span>254 Properties</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </section>
        <!-- END SECTION POPULAR PLACES -->

        <!-- STAR SECTION MAP -->
        <section class="d-map section-full p-t80 p-b80 overflow-hide graph-slide-image" style="background-image:url(images/bg/map.png);">
            <div class="section-content">
                <div class="container">
                    <div class="map-animation-block clearfix p-b30">
                        <div class="map-animation-right text-white" data-aos="fade-left">
                            <h2>Explore the World</h2>
                            <p>The best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip.
                            </p>
                            <div class="bg-all">
                                <a href="/listing" class="btn btn-outline-light mt-2">View All</a>
                            </div>
                        </div>
                        <div class="map-animation-left">
                            <div class="map-marker-block" data-aos="fade-right">
                                <img src="./assets/images/bg/3d-map.png" alt="" class="map-bg">
                                <div class="map-marker-position position-1">
                                    <div class="map-marker  vert-move1">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/1.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                                <div class="map-marker-position position-2 scale-75">
                                    <div class="map-marker vert-move2">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/2.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                                <div class="map-marker-position position-3 scale-75">
                                    <div class="map-marker  vert-move2">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/3.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                                <div class="map-marker-position position-4 scale-50">
                                    <div class="map-marker  vert-move2">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/4.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                                <div class="map-marker-position position-5 scale-50">
                                    <div class="map-marker vert-move1">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/5.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                                <div class="map-marker-position position-6 scale-50">
                                    <div class="map-marker  vert-move2">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/6.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                                <div class="map-marker-position position-7 scale-50">
                                    <div class="map-marker vert-move1">
                                        <div class='map-pin bg-secondry'><img src="./assets/images/icons/10.png" alt=""></div>
                                        <div class='pin-pulse'></div>
                                    </div>
                                </div>
                            </div>
                            <div class="user-hand" data-aos="fade-up">
                                <img src="./assets/images/bg/user-hand.png" alt="user-phone">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION MAP -->

        <!-- START SECTION BLOG -->
        <section class="blog-section">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Tips &amp; </span>Articles</h2>
                    <p>The lastes news about the world.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up">
                                <a href="blog-details/1" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="./assets/images/blog/b-1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details/1"><h3>Explore The World</h3></a>
                                    <div class="dates">
                                        <span class="date">April 11, 2018 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details/1" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="./assets/images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up">
                                <a href="blog-details/1" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="./assets/images/blog/b-2.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details/1"><h3>Find Good Places</h3></a>
                                    <div class="dates">
                                        <span class="date">May 20, 2018 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details/1" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="./assets/images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb" data-aos="fade-up">
                                <a href="blog-details/1" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="./assets/images/blog/b-3.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details/1"><h3>All Places In Town</h3></a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2018 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details/1" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="./assets/images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-all">
                <a href="/blog" class="btn btn-outline-light mt-2">View Blog</a>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners">
            <div class="container">
               <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/1.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/2.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/3.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/4.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/5.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/6.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/7.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/8.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/9.png" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="./assets/images/partners/10.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

      @include('shareable.footer')
        
          <!--register form -->
          <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3> <span>Eagle Information <strong>Center</strong></span></h3>
                    <!-- <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div> -->
                    <!-- <div class="log-separator fl-wrap"><span>Or</span></div> -->
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Input[ype="email"] -->
                                    <div >
                                        <x-input-label :value="__('Email')"/>
                                        <x-text-input type="email"
                                                id="email"
                                                name="email"
                                                value="{{ old('email') }}"
                                                class="block w-full"
                                                placeholder="eg. example@gmail.com"
                                                required
                                                autofocus/>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Input[ype="password"] -->
                                    <div >
                                        <x-input-label for="password" :value="__('Password')"/>
                                        <x-text-input type="password"
                                                id="password"
                                                name="password"
                                                placeholder="********"
                                                class="block w-full"/>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <div class="flex mt-6 text-sm">
                                        <label class="flex items-center dark:text-gray-400">
                                            <input type="checkbox"
                                                name="remember"
                                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                                            <span class="ml-2">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>

                                    <div >
                                    <button type="submit" class="log-submit-btn"><span>Log In</span></button>

                                    </div>
                                </form>

                                
                                    <div class="lost_password">
                                        @if (Route::has('password.request'))
                                        <a class="text-sm font-medium text-primary-600 hover:underline"
                                        href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                        <div>
                                            <x-input-label for="name" :value="__('Name')"/>
                                            <x-text-input type="text"
                                                    id="name"
                                                    name="name"
                                                    class="block w-full"
                                                    placeholder="Abebe Kebede"

                                                    value="{{ old('name') }}"
                                                    required
                                                    autofocus/>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="email" :value="__('Email')"/>
                                            <x-text-input name="email"
                                                    type="email"
                                                    placeholder="example@gmail.com"
                                                    class="block w-full"
                                                    value="{{ old('email') }}"/>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label for="password" :value="__('Password')"/>
                                            <x-text-input type="password"
                                                    name="password"
                                                    placeholder="*******"
                                                    
                                                    class="block w-full"
                                                    required/>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div>
                                            <x-input-label id="password_confirmation" :value="__('Confirm Password')"/>
                                            <x-text-input type="password"
                                                    name="password_confirmation"
                                                    placeholder="*******"

                                                    class="block w-full"
                                                    required/>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div>
                                        <button type="submit" class="log-submit-btn"><span>Register</span></button>

                                        </div>
                                    </form>

                                    
                                    <!-- <div class="lost_password">
                                            <a class="text-sm font-medium text-primary-600 hover:underline"
                                                href="{{ route('login') }}">{{ __('Already registered?') }}</a>
                                    </div> -->
                                       

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('shareable.scripts')
