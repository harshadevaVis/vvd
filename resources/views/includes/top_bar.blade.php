<!-- header-start -->
<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p>WELCOME TO  VVD GLOBAL HOLDINGS (PVT) LTD</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <div class="header_right d-flex">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="mailto:vvdholdings@gmail.com"> <i class="fa fa-envelope"></i> vvdholdings@gmail.com</a></li>
                                    <li><a href="tel:+94 77 889 4332"> <i class="fa fa-phone"></i>+94 77 889 4332 </a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="{{route('welcome')}}">
                                    <img src="{{ URL::asset('my_assets/img/logo2.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="{{ \Illuminate\Support\Facades\Route::currentRouteName() == 'welcome' ? 'active' : '' }}" href="{{route('welcome')}}">HOME</a></li>

                                        <li><a  class="{{ \Illuminate\Support\Facades\Route::currentRouteName() == 'about' ? 'active' : '' }}" href="{{route('about')}}">ABOUT US</a></li>
                                        <li><a  class="{{ \Illuminate\Support\Facades\Route::currentRouteName() == 'projects' ? 'active' : '' }}" href="{{route('projects')}}">OUR PROJECTS</a></li>
                                        {{--<li><a href="study.html">Case study</a></li>--}}
                                        {{--<li><a href="#">blog <i class="ti-angle-down"></i></a>--}}
                                            {{--<ul class="submenu">--}}
                                                {{--<li><a href="blog.html">blog</a></li>--}}
                                                {{--<li><a href="single-blog.html">single-blog</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        <li><a  class="{{ \Illuminate\Support\Facades\Route::currentRouteName() == 'contactUs' ? 'active' : '' }}" href="{{route('contactUs')}}">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->