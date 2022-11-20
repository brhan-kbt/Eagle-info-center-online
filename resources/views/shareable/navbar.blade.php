    <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="../assets/images/logo.svg" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 ">
                            <ul id="responsive">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/listing')}}">Listings</a></li>
                                <!-- <li><a href="{{url('/')}}">Pages</a></li> -->
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/blog')}}">Blog</a></li>
                                <li><a href="{{url('/event')}}">Events</a></li>
                                <li><a href="{{url('/ethiopia')}}">About Ethiopia</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-listing.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    
                    <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                    
                        @if(Auth::guest())
                        <a class="show-reg-form modal-open button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>

                       @else
                       <a href="/pricing" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                           
                       @endif
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    <!-- <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span><img src="../assets/images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                        </div>
                        <ul>
                            <li><a href="user-profile.html">Edit profile</a></li>
                            <li><a href="add-listing.html">Add Listing</a></li>
                            <li><a href="payment-method.html">Payments</a></li>
                            <li><a href="change-password.html">Change Password</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div> -->
                    <!-- <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <div class="header-widget sign-in">
                            <div><a href="/register">Register</a></div>
                        </div>
                        
                    </div> -->
                    @if(Auth::guest())
                    <div class="right-side d-none d-none d-lg-none d-xl-flex login ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div> <a  href="/register">Register</a></div>
                        </div>
                        
                        <!-- Header Widget / End -->
                    </div>

                    <div class="right-side d-none d-none d-lg-none d-xl-flex login ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div > <a  href="/login">Login</a></div>
                        </div>

                        <!-- <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"> <a  href="#">Login</a></div>
                        </div> -->
                        <!-- Header Widget / End -->
                    </div>
                    @else
                    <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span><img src=" storage/images/{{Auth::user()->profileImg}}" alt=""></span>Hi, {{Auth::user()->name}}!
                        </div>
                        <ul>
                            <li><a href="user-profile.html">Edit profile</a></li>
                            <li><a href="add-listing.html">Add Listing</a></li>
                            <li><a href="payment-method.html">Payments</a></li>
                            <li><a href="change-password.html">Change Password</a></li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                     <li>   <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <!-- <x-slot name="icon">
                                                <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path
                                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                                </svg>
                                            </x-slot> -->
                                            {{ __('Log Out') }}
                                        </a> </li>
                                    </form>
                        </ul>
                    </div>
                    @endif

                   
                    <!-- Right Side Content / End -->

                   
                    
                    <!-- Right Side Content / End -->

                    <!-- lang-wrap-->
           
                    <!-- lang-wrap end-->

                </div>
            </div>
            <!-- Header / End -->

 </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->