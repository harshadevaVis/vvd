<!-- footer start -->
<footer class="footer " >
    <div class="footer_top" style="background-color: rgba(211,226,243,0.72)">
        <div class="container" >
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <img width="35%" src="{{ URL::asset('my_assets/img/footer1.png')}}" alt="logo">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <h3 class="footer_title">
                                    VVD Global Holdings (Pvt) Ltd
                                </h3>
                            </a>
                        </div>
                        <p>
                            <a href="mailto:vvdholdings@gmail.com ">vvdholdings@gmail.com</a> <br>
                            +94 77 889 4332 | +94 77 743 0789 <br>
                            NO. 24, POLICE PARK AVENUE,<br/>
                            COLOMBO 05
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a target="_blank" href="https://www.facebook.com/vvdholdings">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="mailto:vvdholdings@gmail.com ">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </li>
                                {{--<li>--}}
                                    {{--<a href="#">--}}
                                        {{--<i class="fa fa-instagram"></i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Navigation
                        </h3>
                        <ul>
                            <li><a href="{{route('welcome')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('projects')}}">Our Projects</a></li>
                            <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                {{--<div class="col-xl-4 col-md-6 col-lg-4">--}}
                    {{--<div class="footer_widget">--}}
                        {{--<h3 class="footer_title">--}}
                            {{--Subscribe--}}
                        {{--</h3>--}}
                        {{--<form action="#" class="newsletter_form">--}}
                            {{--<input type="text" placeholder="Enter your mail">--}}
                            {{--<button type="submit">Subscribe</button>--}}
                        {{--</form>--}}
                        {{--<p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="copy-right_text"  style="background-color: rgba(179,213,243,0.53)">
        <div class="container" >
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center  text-black-50">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Developed by <a class="text-black-50" href="https://webdevelopersl.com" target="_blank">Harshadeva Priyankara Bandara</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->
