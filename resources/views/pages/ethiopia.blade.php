@include('shareable.header')

<body class="inner-pages p-bl bdt">
	<!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
       @include('shareable.navbar')
        <div class="clearfix"></div>
        <!-- Header Container / End -->

	<section style="height:400px;" class="headings">
		<div class="text-heading text-center">
			<div class="container">
				<h1>Blog Details</h1>
				<h2><a href="index.html">Home </a> &nbsp;/&nbsp; Blog Details</h2>
			</div>
		</div>
	</section>
	<!-- END SECTION HEADINGS -->

	<!-- START SECTION BLOG -->
	<section class="blog blog-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 blog-pots">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<div class="news-item details no-mb2">
								<a href="blog-details.html" class="news-img-link">
									<div class="news-item-img">
										<img class="img-responsive" src="../assets/images/blog/b-1.jpg" alt="blog image">
									</div>
								</a>
								<div class="news-item-text details">
									<a href="blog-details.html"><h3>Listings Latest News</h3></a>
									<div class="dates">
										<span class="date">April 11, 2020 &nbsp;/</span>
										<ul class="action-list pl-0">
											<li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
											<li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
											<li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
										</ul>
									</div>
									<div class="news-item-descr big-news details visib">
										<p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>

										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, ea? Vitae pariatur ab amet iusto tempore neque a, deserunt eaque recusandae obcaecati eos atque delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi labore vel enim repellendus excepturi autem. Eligendi cum laboriosam exercitationem illum repudiandae quasi sint dicta consectetur porro fuga ea, perspiciatis aut!</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<section class="comments">
						<h3 class="mb-5">5 Comments</h3>
						<div class="row mb-4">
							<ul class="col-12 commented">
								<li class="comm-inf">
									<div class="col-md-2">
										<img src="../assets/images/testimonials/ts-4.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-10 comments-info">
										<h5 class="mb-1">Mario Smith</h5>
										<p class="mb-4">Jun 23, 2020</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
									</div>
								</li>

							</ul>
						</div>
						<div class="row ml-5">
							<ul class="col-12 commented">
								<li class="comm-inf">
									<div class="col-md-2">
										<img src="../assets/images/testimonials/ts-5.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-10 comments-info">
										<h5 class="mb-1">Mary Tyron</h5>
										<p class="mb-4">Jun 23, 2020</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
									</div>
								</li>

							</ul>
						</div>
						<div class="row my-4">
							<ul class="col-12 commented">
								<li class="comm-inf">
									<div class="col-md-2">
										<img src="../assets/images/testimonials/ts-6.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-10 comments-info no-mb">
										<h5 class="mb-1">Leo Williams</h5>
										<p class="mb-4">Jun 23, 2020</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
									</div>
								</li>

							</ul>
						</div>
					</section>
					<section class="leve-comments wpb">
						<h3 class="mb-5">Leave a Comment</h3>
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
										<textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Message" required></textarea>
									</div>
									<button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
								</form>
							</div>
						</div>
					</section>
				</div>
				<aside class="col-lg-3 col-md-12">
					<div class="widget">
						<div class="recent-post sher pb-5">
							<h5 class="mb-4">Share Links</h5>
							<ul class="netsocials">
								<li class="npt"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="npt"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="npt"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="npt"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<h5 class="mb-4 stmt">Search</h5>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search for...">
							<span class="input-group-btn">
                            <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span>
						</div>
						<div class="business-service py-5">
							<h5 class="mb-4">Recent News</h5>
							<div class="recent-main">
								<div class="recent-img">
									<a href="blog-details.html"><img src="../assets/images/blog/b-7.jpg" alt=""></a>
								</div>
								<div class="info-img">
									<a href="blog-details.html"><h6>Business News</h6></a>
									<p>Jun 23, 2020</p>
								</div>
							</div>
							<div class="recent-main my-4">
								<div class="recent-img">
									<a href="blog-details.html"><img src="../assets/images/blog/b-2.jpg" alt=""></a>
								</div>
								<div class="info-img">
									<a href="blog-details.html"><h6>Finanace News</h6></a>
									<p>Jun 23, 2020</p>
								</div>
							</div>
							<div class="recent-main no-mb">
								<div class="recent-img">
									<a href="blog-details.html"><img src="../assets/images/blog/b-8.jpg" alt=""></a>
								</div>
								<div class="info-img">
									<a href="blog-details.html"><h6>Business News</h6></a>
									<p>Jun 23, 2020</p>
								</div>
							</div>
						</div>
						<div class="recent-post">
							<h5>Categories</h5>
							<ul>
								<li class="pt-0"><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>GYM in Town</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Luxury Hotels</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Super Market</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Car Dealer</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Near Cafe</a></li>
								<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Restaurants</a></li>
							</ul>
						</div>
						<div class="recent-post pt-5">
							<h5 class="mb-4">Popolar Tags</h5>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary mr-1">Hotels</a></span>
								<span><a href="#" class="btn btn-outline-primary">Events</a></span>
							</div>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary mr-1">Restaurants</a></span>
								<span><a href="#" class="btn btn-outline-primary">Cafe</a></span>
							</div>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary mr-1">Super Market</a></span>
								<span><a href="#" class="btn btn-outline-primary">Shop</a></span>
							</div>
							<div class="tags">
								<span><a href="#" class="btn btn-outline-primary mr-1">Gym</a></span>
								<span><a href="#" class="btn btn-outline-primary">Services</a></span>
							</div>
							<div class="tags no-mb">
								<span><a href="#" class="btn btn-outline-primary mr-1">Car Dealer</a></span>
								<span><a href="#" class="btn btn-outline-primary">Listings</a></span>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<!-- END SECTION BLOG -->

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
	<script src="../assets/js/tether.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/mmenu.min.js"></script>
    <script src="../assets/js/mmenu.js"></script>
	<script src="../assets/js/smooth-scroll.min.js"></script>
	<script src="../assets/js/ajaxchimp.min.js"></script>
	<script src="../assets/js/newsletter.js"></script>
	<script src="../assets/js/inner.js"></script>
	<script src="../assets/js/color-switcher.js"></script>
	<script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>
	
	</div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/listifind/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Oct 2022 12:08:04 GMT -->
</html>
