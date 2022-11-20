@include('shareable.header')
    <!-- Wrapper -->
    <div id="wrapper">
      
    @include('shareable.navbar')

        
        <!-- END SECTION HEADINGS -->

        <!-- START PRICING PLANS -->
        <section class="price section section-blue" id="subscription">
            <div class="container">
                <!--Title-->
                <div class="sec-title centered">
                    <h2 class="subtitle"><span>Membership</span> Plans</h2>
                    <div class="shape1"></div>
                    <p>Choose your Plan</p>
                </div>
                <div class="event-tabs">
                    <div class="container">
                        <div class="tab-slider--nav d-flex justify-content-center">
                            <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false">
                                <span class="handle"></span>
                            </button>
                        </div>
                        <div class="tab-slider--container section-top">
                            <div id="tab1" class="tab-slider--body">
                                <div class="wrapper row align-items-center">

                                        <div class="pricing-table col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-pricing text-center price-01 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                                <div class="pricing-price">
                                                    <span class="price-1"><b>$22</b> / Monthly</span>
                                                </div>
                                                <input type="hidden" value="entry" name="data-name"/>

                                                <div class="pricing-title mt-20">
                                                    <h4 class="title">Basic Plan</h4>
                                                </div>
                                                <div class="pricing-list pt-20">
                                                    <ul>
                                                        <li>3 Jobs Posting</li>
                                                        <li>4 Featured jobs</li>
                                                        <li>2 Renew Jobs</li>
                                                        <li>64 Days Visibility</li>
                                                        <li>Email Alert</li>
                                                    </ul>
                                                </div>
                                                <div class="fr-grid-footer mt-5 p-0">
                                                    <a href="/add-info/{{$pricing['0']}}"  class="btn btn-outline-theme prices full-width" value="1">Select<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pricing-table col-lg-4 col-md-12 col-sm-12 col-xs-12 pricix">
                                            <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                                <div class="pricing-price">
                                                    <span class="price-2"><b>$40</b> / Monthly</span>
                                                <input type="hidden" value="medium" name="data-name"/>

                                                </div>
                                                <div class="pricing-title mt-20">
                                                    <h4 class="title">Standard Plan</h4>
                                                </div>
                                                <div class="pricing-list pt-20">
                                                    <ul>
                                                        <li>6 Jobs Posting</li>
                                                        <li>8 Featured jobs</li>
                                                        <li>4 Renew Jobs</li>
                                                        <li>120 Days Visibility</li>
                                                        <li>Email Alert</li>
                                                    </ul>
                                                </div>
                                                <div class="fr-grid-footer mt-5 p-0">
                                                    <a href="/add-info/{{$pricing['1']}}" class="btn btn-outline-theme ext full-width">Select<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="pricing-table col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <div class="single-pricing text-center price-03 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                                <div class="pricing-price">
                                                    <span class="price-1"><b>$95</b> / Monthly</span>
                                                <input type="hidden" value="standard" name="data-name"/>

                                                </div>
                                                <div class="pricing-title mt-20">
                                                    <h4 class="title">Extended Plan</h4>
                                                </div>
                                                <div class="pricing-list pt-20">
                                                    <ul>
                                                        <li>12 Jobs Posting</li>
                                                        <li>16 Featured jobs</li>
                                                        <li>8 Renew Jobs</li>
                                                        <li>200 Days Visibility</li>
                                                        <li>Email Alert</li>
                                                    </ul>
                                                </div>
                                                <div class="fr-grid-footer mt-5 p-0">
                                                    <a href="/add-info/{{$pricing['2']}}" class="btn btn-outline-theme prices full-width">Select<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>

                            
                            <div id="tab2" class="tab-slider--body">
                                <div class="wrapper row align-items-center">
                                    <div class="pricing-table col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-pricing text-center price-01 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                            <div class="pricing-price">
                                                <span class="price-1"><b>$145</b> / Yearly</span>
                                            </div>
                                            <div class="pricing-title mt-20">
                                                <h4 class="title">Basic Plan</h4>
                                            </div>
                                            <div class="pricing-list pt-20">
                                                <ul>
                                                    <li>3 Jobs Posting</li>
                                                    <li>4 Featured jobs</li>
                                                    <li>2 Renew Jobs</li>
                                                    <li>64 Days Visibility</li>
                                                    <li>Email Alert</li>
                                                </ul>
                                            </div>
                                            <div class="fr-grid-footer mt-5 p-0">
                                                <a href="/add-info" class="btn btn-outline-theme prices full-width">Select<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-table col-lg-4 col-md-12 col-sm-12 col-xs-12 pricix">
                                        <div class="single-pricing text-center pricing-active pricing-color-2 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                            <div class="pricing-price">
                                                <span class="price-2"><b>$167</b> / Yearly</span>
                                            </div>
                                            <div class="pricing-title mt-20">
                                                <h4 class="title">Standard Plan</h4>
                                            </div>
                                            <div class="pricing-list pt-20">
                                                <ul>
                                                    <li>6 Jobs Posting</li>
                                                    <li>8 Featured jobs</li>
                                                    <li>4 Renew Jobs</li>
                                                    <li>120 Days Visibility</li>
                                                    <li>Email Alert</li>
                                                </ul>
                                            </div>
                                            <div class="fr-grid-footer mt-5 p-0">
                                                <a href="/add-info" class="btn btn-outline-theme ext full-width">Select<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-table col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="single-pricing text-center price-03 mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                            <div class="pricing-price">
                                                <span class="price-1"><b>$199</b> / Yearly</span>
                                            </div>
                                            <div class="pricing-title mt-20">
                                                <h4 class="title">Extended Plan</h4>
                                            </div>
                                            <div class="pricing-list pt-20">
                                                <ul>
                                                    <li>12 Jobs Posting</li>
                                                    <li>16 Featured jobs</li>
                                                    <li>8 Renew Jobs</li>
                                                    <li>200 Days Visibility</li>
                                                    <li>Email Alert</li>
                                                </ul>
                                            </div>
                                            <div class="fr-grid-footer mt-5 p-0">
                                                <a href="/add-info" class="btn btn-outline-theme prices full-width">Select<i class="fas fa-long-arrow-alt-right ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END PRICING PLANS -->

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

      @include('shareable.scripts')