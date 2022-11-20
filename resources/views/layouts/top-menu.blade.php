@include('shareable.header')

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
                            <a href="add-listing.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
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

                    @if (Auth::guest())
                    <div class="right-side d-none d-none d-lg-none d-xl-flex login ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"> <a  href="#">Sign In</a></div>
                        </div>
                        
                        <!-- Header Widget / End -->
                    </div>
                    @else
                    <div class="header-user-menu user-menu add">
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
        <!-- <div class="clearfix"></div> -->
        <!-- Header Container / End -->
</header>


<!-- <header class="z-10 py-4 bg-white shadow-md">
    <div class="container flex justify-between items-center px-6 mx-auto h-full text-purple-600 md:justify-end">
        <button
            class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu"
            aria-label="Menu"
        >
            <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </button>

        <x-dropdown>
            <x-slot name="trigger">
                <button
                    class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                    @click="toggleProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    aria-label="Account"
                    aria-haspopup="true"
                >
                    {{ Auth::user()->name }}
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('profile.show') }}">
                    <x-slot name="icon">
                        <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                             stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </x-slot>
                    My profile
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                        <x-slot name="icon">
                            <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round"
                                 stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                        </x-slot>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>

    </div>
</header> -->