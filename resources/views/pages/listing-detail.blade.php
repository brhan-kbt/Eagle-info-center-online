@include('shareable.header')

<body class="inner-pages hd-white ld agents">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('shareable.navbar')
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION LISTING DETAIL-->
        <section class="listing blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <!-- Block heading end -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail-wrapper">
                                    <div class="detail-wrapper-body pl-3">
                                        <div class="listing-title-bar">
                                            <h3>Hotel Sun Rise <span class="mrg-l-5 category-tag">Hotel &amp; Resort</span></h3>
                                            <div class="mt-3">
                                                <a href="#listing-location" class="listing-address">
                                                    <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i> Est 0235 Park Street, New York
                                                </a>
                                                <div class="rating-box mt-3">
                                                    <div class="detail-list-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <a href="#" class="detail-rating-count">16 Rating</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="../assets/images/hotels/5.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="1">
                                            <img src="../assets/images/hotels/2.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="2">
                                            <img src="../assets/images/hotels/3.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="4">
                                            <img src="../assets/images/hotels/4.jpg" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="5">
                                            <img src="../assets/images/hotels/1.jpg" class="img-fluid" alt="slider-listing">
                                        </div>

                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                                <img src="../assets/images/hotels/5.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                                <img src="../assets/images/hotels/2.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                                <img src="../assets/images/hotels/3.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                                <img src="../assets/images/hotels/4.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                                <img src="../assets/images/hotels/1.jpg" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="blog-info details overview">
                                    <h5 class="mb-4">Overview</h5>
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam.</p>
                                </div>
                            </div>
                        </div>
                        <!-- cars content -->
                        <div class="homes-content details amenities">
                            <!-- title -->
                            <h5 class="mb-4">Amenities</h5>
                            <!-- cars List -->
                            <div class="ameneniti">
                                <ul class="homes-list amen clearfix">
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Elevator in building</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Friendly Workspace</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Instant Book</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Wireless Internet</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Events</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Smoking Allowed</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Free Parking</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Door attendant</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                        <span>Security cameras</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="property-location mp">
                            <div class="departments-details">
                                <h5 class="mb-4">Pricing</h5>
                                <div class="row">
                                    <div class="col-md-12 dep-list-1">
                                        <div class="depar-title">
                                            <h4 class="mt-1 ml-2">Rooms</h4>
                                            <h4 class="mt-1 mr-2">Price</h4>
                                        </div>
                                        <div class="depart-list">
                                            <ul class="mt-4 ml-4 mb-0">
                                                <li>Standard Single Room</li>
                                                <li>Signature Room</li>
                                                <li>Exclusive Room</li>
                                                <li class="pb-0">Deluxe Room</li>
                                            </ul>
                                            <ul class="mt-4 mr-4 mb-0">
                                                <li>$50</li>
                                                <li>$60</li>
                                                <li>$30</li>
                                                <li class="pb-0">$80</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-location mp">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>
                        <div class="property-location mp">
                            <h5>Customer feedback</h5>
                            <div class="review-content-wrap">
                                <div class="review-content">
                                    <div class="review-rating-summary">
                                        <div class="review-rating-summary-inner">
                                            <div class="stats-average__count">
                                                <span class="stats-average__count-count">4.6</span>
                                            </div>
                                            <!-- end stats-average__count -->
                                            <div class="stats-average__rating p-0">
                                                <ul class="p-0 m-0">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                            <p class="text-center mb-2">out of 5.0</p>
                                            <!-- end stats-average__rating -->
                                        </div>
                                        <!-- end review-rating-summary-inner -->
                                        <div class="course-rating-text">
                                            <p class="course-rating-text__text">Hotel Rating</p>
                                        </div>
                                        <!-- end course-rating-text -->
                                    </div>
                                    <!-- end review-rating-summary -->
                                    <div class="review-rating-widget">
                                        <div class="review-rating-rate">
                                            <ul class="rate pl-00">
                                                <li class="review-rating-rate__items">
                                                    <div class="review-rating-inner__item">
                                                        <div class="review-rating-rate__item-text">5 stars</div>
                                                        <div class="review-rating-rate__item-fill">
                                                            <span class="review-rating-rate__item-fill__fill rating-fill-width1"></span>
                                                        </div>
                                                        <div class="review-rating-rate__item-percent-text">77 %</div>
                                                    </div>
                                                </li>
                                                <li class="review-rating-rate__items">
                                                    <div class="review-rating-inner__item">
                                                        <div class="review-rating-rate__item-text">4 stars</div>
                                                        <div class="review-rating-rate__item-fill">
                                                            <span class="review-rating-rate__item-fill__fill rating-fill-width2"></span>
                                                        </div>
                                                        <div class="review-rating-rate__item-percent-text">54 %</div>
                                                    </div>
                                                </li>
                                                <li class="review-rating-rate__items">
                                                    <div class="review-rating-inner__item">
                                                        <div class="review-rating-rate__item-text">3 stars</div>
                                                        <div class="review-rating-rate__item-fill">
                                                            <span class="review-rating-rate__item-fill__fill rating-fill-width3"></span>
                                                        </div>
                                                        <div class="review-rating-rate__item-percent-text">14 %</div>
                                                    </div>
                                                </li>
                                                <li class="review-rating-rate__items">
                                                    <div class="review-rating-inner__item">
                                                        <div class="review-rating-rate__item-text">2 stars</div>
                                                        <div class="review-rating-rate__item-fill">
                                                            <span class="review-rating-rate__item-fill__fill rating-fill-width4"></span>
                                                        </div>
                                                        <div class="review-rating-rate__item-percent-text">5 %</div>
                                                    </div>
                                                </li>
                                                <li class="review-rating-rate__items">
                                                    <div class="review-rating-inner__item">
                                                        <div class="review-rating-rate__item-text">1 stars</div>
                                                        <div class="review-rating-rate__item-fill">
                                                            <span class="review-rating-rate__item-fill__fill rating-fill-width5"></span>
                                                        </div>
                                                        <div class="review-rating-rate__item-percent-text">2 %</div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end review-rating-rate -->
                                    </div>
                                    <!-- end review-rating-widget -->
                                </div>
                                <!-- end review-content -->
                            </div>
                            <!-- end review-content-wrap -->
                        </div>
                        <!-- START SECTION ASSIGNED AGENTS -->
                        <section class="reviews comments">
                            <h3 class="mb-5">5 Reviews</h3>
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../assets/images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Mary Smith</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4 rest">May 30 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="rest"><img src="../assets/images/hotels/1.jpg" class="img-fluid" alt=""></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../assets/images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Abraham Tyron</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">june 1 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row mt-5">
                                <ul class="col-12 commented mb-0 pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="../assets/images/testimonials/ts-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Lisa Williams</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">jul 12 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="resti">
                                                <div class="rest"><img src="../assets/images/hotels/4.jpg" class="img-fluid" alt=""></div>
                                                <div class="rest"><img src="../assets/images/hotels/3.jpg" class="img-fluid" alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <section class="reviews leve-comments details">
                            <div id="add-review" class="add-review-box">
                                <!-- Add Review -->
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                                <span class="leave-rating-title mb-3">Your rating for this listing</span>
                                <!-- Rating / Upload Button -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <!-- Leave Rating -->
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30 mr-2">
                                            <input type="radio" name="rating" id="rating-1" value="1" />
                                            <label for="rating-1" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2" />
                                            <label for="rating-2" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3" />
                                            <label for="rating-3" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4" />
                                            <label for="rating-4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5" />
                                            <label for="rating-5" class="fa fa-star"></label>
                                        </div>
                                        <div class="clearfix">
                                            <p>0 / 5</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Uplaod Photos -->
                                        <div class="add-review-photos margin-bottom-30">
                                            <div class="photoUpload">
                                                <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                <input type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 data">
                                        <form action="#">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- END SECTION ASSIGNED AGENTS -->
                    </div>
                    <aside class="col-lg-4 col-md-12 car">
                        <div class="widget">
                            <!-- Start: Book A Reservation -->
                            <div class="widget-boxed mt-33">
                                <div class="widget-boxed-header">
                                    <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Book A Reservation</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 book">
                                            <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 book2">
                                            <input type="text" id="reservation-time" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row mrg-top-15 mb-3">
                                        <div class="col-lg-6 col-md-12 mt-4">
                                            <label class="mb-3">Adult</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                                <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                                <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mt-4">
                                            <label class="mb-3">Children</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                                <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                                <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="payment-method.html" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Book Now</a>
                                </div>
                            </div>
                            <!-- End: Book A Reservation -->

                            <!-- Start Agent Information -->
                            <div class="sidebar widget-boxed mt-33 mt-5">
                                <div class="widget-boxed-header">
                                    <h4><i class="far fa-user pr-3"></i>Seller Info</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="sidebar-widget author-widget2">
                                        <div class="author-box clearfix">
                                            <img src="../assets/images/testimonials/ts-2.jpg" alt="author-image" class="author__img">
                                            <h4 class="author__title">Jhonn Clark</h4>
                                            <p class="author__meta">Posted 3 days ago</p>
                                        </div>
                                        <ul class="author__contact">
                                            <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                            <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                            <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">jhonn@gmail.com</a></li>
                                        </ul>
                                        <ul class="author__link">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                        </ul>
                                        <div class="agent-contact-form-sidebar">
                                            <h4><i class="far fa-envelope pr-3"></i>Contact Seller</h4>
                                            <form name="contact_form" method="post" action="https://code-theme.com/html/listifind/functions.php">
                                                <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                                <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                                <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                                <textarea placeholder="Message" name="message" required></textarea>
                                                <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Agent Information -->

                            <!-- Start: Opening hour -->
                            <div class="widget-boxed mt-5">
                                <div class="widget-boxed-header">
                                    <h4><i class="fa fa-clock-o pr-3 padd-r-10"></i>Opening Hours</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="side-list">
                                        <ul>
                                            <li class="pt-0">Monday <span>9 AM - 5 PM</span></li>
                                            <li>Tuesday <span>9 AM - 5 PM</span></li>
                                            <li>Wednesday <span>9 AM - 5 PM</span></li>
                                            <li>Thursday <span>9 AM - 5 PM</span></li>
                                            <li>Friday <span>9 AM - 5 PM</span></li>
                                            <li>Saturday <span>9 AM - 3 PM</span></li>
                                            <li>Sunday <span>Closed</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End: Opening hour -->

                            <!-- Start: Specials offer -->
                            <div class="recent-post tags mt-5">
                                <div class="widget-boxed-header">
                                    <h4><i class="fas fa-luggage-cart pr-3"></i>Specials of the day</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="banner"><img src="../assets/images/hotels/banner.jpg" alt=""></div>
                                </div>
                            </div>
                            <!-- End: Specials offer -->

                            <div class="widget widget_listings my-5">
                                <div class="widget-boxed-header">
                                    <h4><i class="fa fa-map-marker pr-3"></i>Latest Listings</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="../assets/images/popular-listings/1.jpg" alt=""></a>
                                            <div class="overflow-hidden">
                                                <span class="cat mt-0"><a href="#">Luxury Restaurant</a></span>
                                                <h4><a href="#">New York</a></h4>
                                                <span class="rating__star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="../assets/images/popular-listings/2.jpg" alt=""></a>
                                            <div class="overflow-hidden">
                                                <span class="cat"><a href="#">Gym in Town</a></span>
                                                <h4><a href="#">Toronto</a></h4>
                                                <span class="rating__star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="../assets/images/popular-listings/3.jpg" alt=""></a>
                                            <div class="overflow-hidden">
                                                <span class="cat"><a href="#">Elegant Cafe</a></span>
                                                <h4><a href="#">Boston</a></h4>
                                                <span class="rating__star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#"><img src="../assets/images/popular-listings/4.jpg" alt=""></a>
                                            <div class="overflow-hidden">
                                                <span class="cat"><a href="#">Car Dealer</a></span>
                                                <h4><a href="#">New York</a></h4>
                                                <span class="rating__star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="recent-post tags">
                                <div class="widget-boxed-header">
                                    <h4><i class="fas fa-tags pr-3"></i>Popular Tags</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary mr-2">Business</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Restaurant</a></span>
                                    </div>
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary mr-2">Cafe</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Hotels</a></span>
                                    </div>
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary mr-2">Gym</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Cinema</a></span>
                                    </div>
                                    <div class="tags">
                                        <span><a href="#" class="btn btn-outline-primary mr-2">Real Estates</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Store</a></span>
                                    </div>
                                    <div class="tags no-mb">
                                        <span><a href="#" class="btn btn-outline-primary mr-2">Conference</a></span>
                                        <span><a href="#" class="btn btn-outline-primary">Places</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- END SECTION LISTING DETAIL -->

        <!-- START FOOTER -->
      @include('shareable.footer')

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Listi<strong>Find</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- ARCHIVES JS -->
        <script src="../assets/js/jquery-3.5.1.min.js"></script>
        <script src="../assets/js/jquery-ui.js"></script>
        <script src="../assets/js/range-slider.js"></script>
        <script src="../assets/js/tether.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/mmenu.min.js"></script>
        <script src="../assets/js/mmenu.js"></script>
        <script src="../assets/js/smooth-scroll.min.js"></script>
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/popup.js"></script>
        <script src="../assets/js/fitvids.js"></script>
        <script src="../assets/js/ajaxchimp.min.js"></script>
        <script src="../assets/js/newsletter.js"></script>
        <!-- <script src="../assets/js/timedropper.js"></script> -->
        <!-- <script src="../assets/js/datedropper.js"></script> -->
        <script src="../assets/js/jqueryadd-count.js"></script>
        <script src="../assets/js/leaflet.js"></script>
        <script src="../assets/js/leaflet-gesture-handling.min.js"></script>
        <script src="../assets/js/leaflet-providers.js"></script>
        <script src="../assets/js/leaflet.markercluster.js"></script>
        <script src="../assets/js/map-single.js"></script>
        <script src="../assets/js/swiper.min.js"></script>
        <script src="../assets/js/color-switcher.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                slidesPerGroup: 3,
                loop: true,
                loopFillGroupWithBlank: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

        </script>

        <script>
            if ($('.image-link').length) {
                $('.image-link').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            }
            if ($('.image-link2').length) {
                $('.image-link2').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            }

        </script>
        <!-- Date Dropper Script-->
        <script>
            $('#reservation-date').dateDropper();

        </script>
        <!-- Time Dropper Script-->
        <script>
            this.$('#reservation-time').timeDropper({
                setCurrentTime: false,
                meridians: true,
                primaryColor: "#e8212a",
                borderColor: "#e8212a",
                minutesInterval: '15'
            });

        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });

        </script>

        <script src="../assets/js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/listifind/listing-details-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 12:07:11 GMT -->
</html>
