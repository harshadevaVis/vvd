@extends('includes.main')

@section('pageSpecificStyles')
    <style type="text/css">

        img {
            padding-bottom: 3%;
        }
    </style>
@endsection
@section('pageSpecificContent')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Projects</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">

            <div class="row mb-4 module ">
                <div class="col-md-12">

                    <div class="card " >
                        <div class="card-body">
                            <h3 class="card-title text-center">100% COMPOSTABLE WATER BOTTLE TO SRI LANKA AND MALDIVES MARKET. </h3>
                            <img class="card-img-top" src="{{ URL::asset('my_assets/img/projects/bottle.webp')}}" alt="Card image cap">

                            <p class="card-text "><i class="fa fa fa-envira"></i> In sri lanka targeted five (5) million ready customer base for marketing available for 100% compostable water bottles. </p>
                            <p class="card-text"><i class="fa fa fa-envira"></i> Direct export two (2) million 100% compostable water bottles (india) per month.</p>

                            <p class="card-text"><i class="fa fa fa-envira"></i> One (1) million 100% compostable water bottles per month (maldives).</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb-4 module">
                <div class="col-md-12">

                    <div class="card " >
                        <div class="card-body">
                            <h3 class="card-title text-center">14 MW GROUND MOUNTED SOLAR PROJECT. </h3>
                            <img class="card-img-top" src="{{ URL::asset('my_assets/img/projects/solar.jpg')}}" alt="Card image cap">

                            <p class="card-text "><i class="fa fa fa-envira"></i> Supplying the generated electricity to ceylon electricity board (necessary approvals and grid connection approval already taken) as a solution for the inadequate energy crisis in sri lanka.</p>

                            <p class="card-text"><i class="fa fa fa-envira"></i> After the successful execution of this ground mounted sola projects, we have setup millstone to establish lng (liquid natural gas) power plant as a solution to the energy crisis and to generate surpluses energy to supply neighbor countries, thereby to create foreign income to sri lanka. </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb-4 module">
                <div class="col-md-12">

                    <div class="card " >
                        <div class="card-body">
                            <h3 class="card-title text-center">GARBAGE COMPOSTING MODEL PLANT WITH THE COLLABORATION OF USA COMPANY. </h3>
                            <img class="card-img-top" src="{{ URL::asset('my_assets/img/projects/garbage.jpg')}}" alt="Card image cap">

                            <p class="card-text "><i class="fa fa fa-envira"></i> We have setup this mile stone as a solution to the todays garbage issues.
                                To supply compost to the market and to the reforestation.</p>
                                <i class="fa fa fa-envira"></i> Second stage of this model will target to generate energy.   </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb-4 module">
                <div class="col-md-12">

                    <div class="card " >
                        <div class="card-body">
                            <h3 class="card-title text-center">SUSTAINABLE ARCHITECT APARTMENT.  </h3>
                            <img class="card-img-top" src="{{ URL::asset('my_assets/img/projects/apartment.jpg')}}" alt="Card image cap">

                            <p class="card-text"><i class="fa fa fa-envira"></i> Design and construction of ecological apartment to enhance the sustainable green construction. </p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="row mb-4 module">
                <div class="col-md-12">

                    <div class="card " >
                        <div class="card-body">
                            <h3 class="card-title text-center">REFORESTATION. </h3>
                            <img class="card-img-top" src="{{ URL::asset('my_assets/img/projects/reforest.jpg')}}" alt="Card image cap">

                            <p class="card-text">
                                <i class="fa fa fa-envira"></i> This has been executing as a measure to reduce the todays globalization.
                                Most of the people of today’s context running with their busy life but they have missed the importance to saving and growing the natural fresh air for our next generation.
                                Therefor we, execute reforestation as a measure for the todays immense globalization.
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
@section('pageSpecificScript')

@endsection