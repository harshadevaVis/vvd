@extends('includes.main')

@section('pageSpecificStyles')
    <style type="text/css">
        #Layer_5 {
           fill: #ffffff;
        }
    </style>
@endsection
@section('pageSpecificContent')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>“The future is green energy,
                                    sustainability,<br/>renewable energy”</h3>
                                <div class="video_service_btn">
                                    <a href="{{route('projects')}}" class="boxed-btn3">Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>"Saving our planet is the best investment."</h3>
                                <div class="video_service_btn">
                                    <a href="{{route('projects')}}" class="boxed-btn3">Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_3 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3>"Buy less, choose well, make it last."</h3>
                                <div class="video_service_btn">
                                    <a href="{{route('projects')}}" class="boxed-btn3">Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <div class="service_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50 ">
                        <h3>What We Do?</h3>
                    </div>
                </div>
            </div>
            <div class="row moduleZ">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="{{ URL::asset('my_assets/img/svg_icon/2.svg')}}" alt="">
                        </div>
                        <h3>Energy Genaration</h3>
                        <p>Encourage energy generation without harming the environment.</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="{{ URL::asset('my_assets/img/svg_icon/1.svg')}}" alt="">
                        </div>
                        <h3>Eco Friendly Products</h3>
                        <p>Manufactures of 100% compostable and biodegradable eco friendly products</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                        <div class="service_icon">
                            <img src="{{ URL::asset('my_assets/img/svg_icon/3.svg')}}" alt="">
                        </div>
                        <h3>Green Sustainable Construction</h3>
                        <p>Encourage of eco friendly,green sustainable construction</p>
                        <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service_area_end -->

    <!-- future_plans_area_start -->
    <div  class="plans_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Future Plans</h3>
                    </div>
                </div>
            </div>
            <div class="row moduleZ">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                    <div class="service_icon">
                    <img src="{{ URL::asset('my_assets/img/svg_icon/4.svg')}}" alt="">
                    </div>
                    <h3>Project Investment</h3>
                    <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                    <div class="service_icon">
                    <img src="{{ URL::asset('my_assets/img/svg_icon/import.svg')}}" alt="">
                    </div>
                    <h3>Import & Export Oriented</h3>
                    <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_service text-center">
                    <div class="service_icon">
                    <img src="{{ URL::asset('my_assets/img/svg_icon/gem.svg')}}" alt="">
                    </div>
                    <h3>Gem and Gold Trading </h3>
                    <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    <a href="#" class="learn_more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- future_plans_area_start -->

    {{--<!-- about_info_area start  -->--}}
    {{--<div class="about_info_area ">--}}
        {{--<div class="container">--}}
            {{--<div class="row align-items-center">--}}
                {{--<div class="col-xl-6 col-lg-6">--}}
                    {{--<div class="about_text">--}}
                        {{--<h3>Point Of View</h3>--}}
                        {{--<div class="moduleZ ">--}}
                            {{--<p  >The next wave of economic growth is going to come from knowledge-based businesses. </p>--}}
                            {{--<p  >Changing technology is driving the next wave of economic growth. To take advantage of that growth,</p>--}}
                            {{--<p  >We will have to apply not only new technology but also new thinking with sustainable attitudes. </p>--}}
                            {{--<p  >For us sustainability means more than just environmental protection. </p>--}}
                            {{--<p  >From our point of view sustainability means an attentive approach to market needs. With our “green line” principle</p>--}}
                            {{--<p  >we not only think about ecology, but also about the social and economic requirements.</p>--}}

                            {{--<a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xl-6 col-lg-6 module" >--}}
                    {{--<div class="about_thumb" >--}}
                        {{--<img src="{{ URL::asset('my_assets/img/service/about.jpg')}}" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- /about_info_area end  -->
    {{--<div class="Information_area2 overlay moduleZ" style="height: 50Vh">--}}
        {{--<div class="container">--}}
            {{--<div class="row text-center">--}}
                {{--<div class="col-xl-12 col-md-12 col-lg-12">--}}
                    {{--<div class=" text-center" >--}}
                        {{--<h1 class="text-white">Point Of View</h1>--}}
                        {{--<h2  id="pov" class="text-white "></h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- counter_area  -->
    {{--<div class="counter_area counter_bg_1 overlay_03">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-xl-3 col-lg-3 col-md-3">--}}
                    {{--<div class="single_counter text-center">--}}
                        {{--<div class="counter_icon">--}}
                            {{--<img src="{{ URL::asset('my_assets/img/svg_icon/group.svg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<h3> <span class="counter">200</span> <span> +</span> </h3>--}}
                        {{--<p>Team Members</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xl-3 col-lg-3 col-md-3">--}}
                    {{--<div class="single_counter text-center">--}}
                        {{--<div class="counter_icon">--}}
                            {{--<img src="{{ URL::asset('my_assets/img/svg_icon/cart.svg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<h3> <span class="counter">97</span> <span>%</span> </h3>--}}
                        {{--<p>Business Success</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xl-3 col-lg-3 col-md-3">--}}
                    {{--<div class="single_counter text-center">--}}
                        {{--<div class="counter_icon">--}}
                            {{--<img src="{{ URL::asset('my_assets/img/svg_icon/heart.svg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<h3> <span class="counter">5628</span></h3>--}}
                        {{--<p>Happy Client</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xl-3 col-lg-3 col-md-3">--}}
                    {{--<div class="single_counter text-center">--}}
                        {{--<div class="counter_icon">--}}
                            {{--<img src="{{ URL::asset('my_assets/img/svg_icon/respect.svg')}}" alt="">--}}
                        {{--</div>--}}
                        {{--<h3> <span class="counter">5637</span> </h3>--}}
                        {{--<p>Business Done</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- /counter_area  -->
    <div id="testimonial" class="testimonial_area overlay Information_area2 moduleL ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-white align-item-center" style="position: relative;-webkit-box-align:center;
    -webkit-box-pack:center;
    display:-webkit-box;;">Point Of View</h2>
                    <div class="testmonial_active owl-carousel">

                        <div class="single_carousel">
                            <div class="single_testmonial text-center">

                                <p>The next wave of economic growth is going to come from knowledge-based businesses. </p>
                                <a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">

                                <p>Changing technology is driving the next wave of economic growth. To take advantage of that growth,</p>
                                <a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>

                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">

                                <p> We will have to apply not only new technology but also new thinking with sustainable attitudes. </p>
                                <a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>

                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">

                                <p>For us sustainability means more than just environmental protection.  </p>
                                <a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>

                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">

                                <p>From our point of view sustainability means an attentive approach to market needs. With our “green line” principle </p>
                                <a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>

                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">

                                <p>We not only think about ecology, but also about the social and economic requirements.</p>
                                <a href="{{route('about')}}" class="boxed-btn3 ">About Us</a>

                            </div>
                        </div>

                    </div>
                    </div>

                </div>
            </div>
        </div>

    <!-- case_study_area  -->
    <div class="case_study_area">
        <div class="container">
            <div class="border_bottom">
                    <div class="row">
                            <div class="col-xl-12">
                                <div class="section_title text-center mb-40">
                                    <h3>WE ARE PRACTISING </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row moduleZ">
                            <div class="col-xl-12">
                                <div class="case_active owl-carousel">
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="{{ URL::asset('my_assets/img/concepts/1.jpg')}}" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                    <span>SUSTAINABLE BUSINESS CONCEPT </span>
                                                    <h3><a  data-toggle="collapse" href=".sustainable" role="button" aria-expanded="false" aria-controls="collapseExample" >GREEN ARCHITECTURE</a></h3>
                                            </div>
                                            <div class="collapse sustainable">

                                                    <p>Sustainable method of green building design: it is design and construction with the environment in mind. Green architects generally work with the key concepts of creating an energy efficient, environmentally friendly house.</p>

                                            </div>
                                        </div>
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="{{ URL::asset('my_assets/img/concepts/2.jpg')}}" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                <span>SUSTAINABLE BUSINESS CONCEPT </span>
                                                <h3><a  data-toggle="collapse" href=".sustainable" role="button" aria-expanded="false" aria-controls="collapseExample" >ECO-FRIENDLY PRODUCTS </a></h3>
                                            </div>
                                            <div class="collapse sustainable">

                                                    <p>Prevent contributions to air, water and land pollution. Manufacturing, marketing and 100% compostable products. </p>

                                            </div>
                                        </div>
                                        <div class="single_case">
                                                <div class="case_thumb">
                                                        <img src="{{ URL::asset('my_assets/img/concepts/4.jpg')}}" alt="">
                                                    </div>
                                            <div class="case_heading">
                                                <span>SUSTAINABLE BUSINESS CONCEPT </span>
                                                <h3><a  data-toggle="collapse" href=".sustainable" role="button" aria-expanded="false" aria-controls="collapseExample" >ORGANIC</a></h3>
                                            </div>
                                            <div class="collapse sustainable">

                                                <p>Pays close attention to nature. It means fewer chemicals on the land such as artificial fertilizers. </p>

                                            </div>
                                        </div>

                                </div>


                            </div>
                        </div>
                        <div class="row moduleZ">
                            <div class="col-xl-12">
                                <div class="more_close_btn text-center">

                                    <a  data-toggle="collapse" href=".sustainable" role="button" aria-expanded="false" aria-controls="collapseExample" id="collapseMoreBtn" class="boxed-btn3-line">More Details</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    {{--<!-- /case_study_area  -->--}}



    {{--<!-- accordion  -->--}}
    {{--<div class="accordion_area">--}}
            {{--<div class="container">--}}
                {{--<div class="row align-items-center">--}}
                    {{--<div class="col-xl-6 col-lg-6">--}}
                        {{--<div class="accordion_thumb">--}}
                            {{--<img src="{{ URL::asset('my_assets/img/banner/accordion.png')}}" alt="">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-xl-6 col-lg-6">--}}
                        {{--<div class="faq_ask">--}}
                            {{--<h3>Frequently ask</h3>--}}
                                {{--<div id="accordion">--}}
                                        {{--<div class="card">--}}
                                            {{--<div class="card-header" id="headingTwo">--}}
                                                {{--<h5 class="mb-0">--}}
                                                    {{--<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">--}}
                                                            {{--Adieus who direct esteem <span>It esteems luckily?</span>--}}
                                                    {{--</button>--}}
                                                {{--</h5>--}}
                                            {{--</div>--}}
                                            {{--<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">--}}
                                                {{--<div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="card">--}}
                                            {{--<div class="card-header" id="headingOne">--}}
                                                {{--<h5 class="mb-0">--}}
                                                    {{--<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">--}}
                                                            {{--Who direct esteem It esteems?--}}
                                                    {{--</button>--}}
                                                {{--</h5>--}}
                                            {{--</div>--}}
                                            {{--<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">--}}
                                                {{--<div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.--}}
                                                {{--</div>--}}
{{--,                                            </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="card">--}}
                                            {{--<div class="card-header" id="headingThree">--}}
                                                {{--<h5 class="mb-0">--}}
                                                    {{--<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">--}}
                                                            {{--Duis consectetur feugiat auctor?--}}
                                                    {{--</button>--}}
                                                {{--</h5>--}}
                                            {{--</div>--}}
                                            {{--<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">--}}
                                                {{--<div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<!-- accordion  -->--}}



    {{--<!-- team_area  -->--}}
    {{--<div class="team_area">--}}
            {{--<div class="container">--}}
                {{--<div class="border_bottom">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xl-12">--}}
                            {{--<div class="section_title mb-40 text-center">--}}
                                {{--<h3>--}}
                                        {{--Collaboration Team--}}
                                {{--</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-xl-4 col-lg-4 col-md-6">--}}
                            {{--<div class="single_team">--}}
                                {{--<div class="team_thumb">--}}
                                    {{--<img src="{{ URL::asset('my_assets/img/collabaration/1.jpg')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="team_info text-center">--}}
                                    {{--<h3>MERRYWORLD INTERNATIONAL (PVT) LTD.</h3>--}}
                                    {{--<p>International Trade and Development</p>--}}
                                    {{--<div class="social_link">--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="#">--}}
                                                    {{--Read More >--}}
                                                {{--</a>--}}
                                            {{--</li>--}}

                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-4 col-lg-4 col-md-6">--}}
                            {{--<div class="single_team">--}}
                                {{--<div class="team_thumb">--}}
                                    {{--<img src="{{ URL::asset('my_assets/img/team/2.png')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="team_info text-center">--}}
                                    {{--<h3>RIVAL CROWN FOR EXPORT GEMS </h3>--}}
                                    {{--<p>Photographer</p>--}}
                                    {{--<div class="social_link">--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="#">--}}
                                                    {{--Read More >--}}
                                                {{--</a>--}}
                                            {{--</li>--}}

                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-xl-4 col-lg-4 col-md-6">--}}
                            {{--<div class="single_team">--}}
                                {{--<div class="team_thumb">--}}
                                    {{--<img src="{{ URL::asset('my_assets/img/team/1.png')}}" alt="">--}}
                                {{--</div>--}}
                                {{--<div class="team_info text-center">--}}
                                    {{--<h3>VAJIRA DESIGNING & CONSTRUCTION</h3>--}}
                                    {{--<p>Photographer</p>--}}
                                    {{--<div class="social_link">--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="#">--}}
                                                    {{--Read More >--}}
                                                {{--</a>--}}
                                            {{--</li>--}}

                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    <!-- /team_area  -->


    <!-- Information_area  -->
    <div class="Information_area overlay moduleZ">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8">
                    <div class="info_text text-center">
                        <h3>For Any Information Call Us</h3>
                        <p>Our official number available on weekdays 8.00AM to 5.00PM.</p>
                        <a class="boxed-btn3" href="tel:+94 77 889 4332 |">+94 77 889 4332 </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Information_area  end -->

@endsection
@section('pageSpecificScript')
    <script>

        $('.collapse').on('hide.bs.collapse', function (e) {
            $('#collapseMoreBtn').text('More Details')
        });

        $('.collapse').on('show.bs.collapse', function (e) {
            $('#collapseMoreBtn').text('Less Details')
        });

        $(document).ready(function () {
            var owl = $('.testmonial_active');
            owl.trigger('stop.owl.autoplay');
        });




//        document.addEventListener('DOMContentLoaded',function(event){
//            // array with texts to type in typewriter
//            var dataText = [ "The next wave of economic growth is going to come from knowledge-based businesses.",
////                "Changing technology is driving the next wave of economic growth. To take advantage of that growth,",
////                "We will have to apply not only new technology but also new thinking with sustainable attitudes.",
////                "For us sustainability means more than just environmental protection." ,
//                "From our point of view sustainability means an attentive approach to market needs. With our “green line” principle",
////                "We not only think about ecology, but also about the social and economic requirements."
//            ];
//
//            // type one text in the typwriter
//            // keeps calling itself until the text is finished
//            function typeWriter(text, i, fnCallback) {
//                // chekc if text isn't finished yet
//                if (i < (text.length)) {
//                    // add next character to h1
//                    document.querySelector("#pov").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
//
//                    // wait for a while and call this function again for next character
//                    setTimeout(function() {
//                        typeWriter(text, i + 1, fnCallback)
//                    }, 100);
//                }
//                // text finished, call callback if there is a callback function
//                else if (typeof fnCallback == 'function') {
//                    // call callback after timeout
//                    setTimeout(fnCallback, 700);
//                }
//            }
//            // start a typewriter animation for a text in the dataText array
//            function StartTextAnimation(i) {
//                if (typeof dataText[i] == 'undefined'){
//                    setTimeout(function() {
//                        StartTextAnimation(0);
//                    }, 20000);
//                }
//                // check if dataText[i] exists
//                if (i < dataText[i].length) {
//                    // text exists! start typewriter animation
//                    typeWriter(dataText[i], 0, function(){
//                        // after callback (and whole text has been animated), start next text
//                        StartTextAnimation(i + 1);
//                    });
//                }
//            }
//            // start the text animation
//            StartTextAnimation(0);
//        });
    </script>
@endsection