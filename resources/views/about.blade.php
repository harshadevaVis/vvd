@extends('includes.main')

@section('pageSpecificStyles')
    <style type="text/css">
        .list-group-item-action:hover {
            transform: translate(10px);
            background-color: rgba(0, 129, 248, 0.17);
        }
        blockquote{
            border-left:none
        }

        .quote-badge{
            background-color: rgba(0, 0, 0, 0.2);
        }

        .quote-box{

            overflow: hidden;
            border-radius: 17px;

            background: rgb(36, 135, 239);
            background: linear-gradient(147deg, rgb(36, 135, 239) 0%, rgba(87,186,253,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#615cfd', endColorstr='#d465ef',GradientType=0 );
            /* IE6-9 */
            color:white;
            box-shadow: 2px 2px 2px 2px #E0E0E0;

        }

        .quote-box:hover{

            overflow: hidden;
            border-radius: 17px;
            background-color: #53d5df;
            color:white;
            box-shadow: 1px 2px 25px rgba(0, 0, 0, .5);

        }

        .quotation-mark{
            margin-left: 8px;

            margin-top: 25px;
            font-weight: bold;
            font-size:100px;
            color:white;
            font-family: "Times New Roman", Georgia, Serif;

        }

        .quote-text{
            margin-left: 8px;
            color:white;
            min-height: 55%;
            font-size: 19px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;

        }
        .blog-post-bottom{
            margin-left: 8px;
            color:white;
            text-align: right;
            margin-right: 8px;
            font-size: 15px;
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }

        .subContent {
            font-size: 13px;
            margin-top: -10px;
        }

        .lead {
            font-size: 16px;
            color: black;
        }
        .imgCircle{
            width: 75px;
            height: 75px;
            border-radius: 100%;
        }
        .boardName{
            font-style: italic;;
            font-weight: 400;
        }
        .boardPosition{
            font-style: italic;;
            font-weight: 500;
        }
        .leaderBox{
            border: solid 1px #b9b9b9;
        }
        .imgManagement{
            width: auto;
            max-height: 250px;
        }
        .managementBox{
            border:solid 1px #bfbfbf;
            min-height: 392px;
            margin-top: 10px;
        }
        .managementAbr{
            margin-top: -5px;
            font-weight: 400;
        }
    </style>
@endsection

@section('pageSpecificContent')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text">
                            <h3>About Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bradcam_area  -->

    <div class="container">
        <br/>
        <div class="row">
                <div class="col-md-3 mb-5">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#about" role="tab" aria-controls="home">About Us
                            <span class="badge badge-primary badge-pill float-right">></span></a>
                        <a class="list-group-item list-group-item-action mt-2" id="list-profile-list" data-toggle="list" href="#cooperate" role="tab" aria-controls="profile">Corporate Profile
                            <span class="badge badge-primary badge-pill float-right">></span></a>
                        <a class="list-group-item list-group-item-action mt-2" id="list-messages-list" data-toggle="list" href="#leadership" role="tab" aria-controls="messages">Leader Board
                            <span class="badge badge-primary badge-pill float-right">></span></a>
                        <a class="list-group-item list-group-item-action mt-2" id="list-messages-list" data-toggle="list" href="#management" role="tab" aria-controls="messages">Management Team
                            <span class="badge badge-primary badge-pill float-right">></span></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane row fade show active" id="about" role="tabpanel" aria-labelledby="list-home-list">
                            {{--<div class="col-md-12 text-center mb-5">--}}
                                {{--<h4>ABOUT US</h4>--}}
                            {{--</div>--}}
                            <div class="col-md-12">
                                <div class="row">
                                    <div class=" col-md-12">
                                        <blockquote class="quote-box module">
                                            <p class="quotation-mark">
                                                “
                                            </p>
                                            <p class="quote-text">
                                                TO BE THE MOST DYNAMIC SCIENCE COMPANY, CREATING SUSTAINABLE SOLUTIONS THAT ARE ESSENTIAL TO A BETTER, SAFER, HEALTHIER LIFE FOR PEOPLE EVERYWHERE.
                                            </p>
                                            <hr>
                                            <div class="blog-post-actions">
                                                <p class="blog-post-bottom">
                                                   - VVD Holdings Vision
                                                </p>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <div class="col-md-12 ml-auto">
                                        <blockquote class="quote-box module">
                                            <p class="quotation-mark">
                                                “
                                            </p>
                                            <p class="quote-text">
                                                WE CREATE THE MOST EFFICIENT ENERGY SOLUTIONS THAT RESPECT THE ENVIRONMENT AND THE COMFORT OF PERSONS. </p>
                                            <hr>
                                            <div class="blog-post-actions">
                                                <p class="blog-post-bottom">
                                                   - VVD Holdings Mission
                                                </p>
                                            </div>
                                        </blockquote>
                                    </div>

                                    <div class="col-md-12 ml-auto">
                                        <blockquote class="quote-box module">
                                            <p class="quotation-mark">
                                                “
                                            </p>
                                            <p class="quote-text">
                                                AS CHANGE AGENTS WE AT VVD GLOBAL HOLDINGS (PVT) LTD EMBRACE FRESH PERSPECTIVES THAT RICE ABOVE CONVENTIONAL THINKING. </p>
                                            <p class="quote-text">    IT IS THE BEST INTEREST OF DELIVERING TANGIBLE RESULTS AND MEETING OUR PRIMARY OBJECTIVE OF UPLIFTING ECOLOGICAL BACKGROUND. </p>
                                            <p class="quote-text">    IN THIS LINE OF BUSINESS, INTEGRITY AND RELIABILITY ARE PARAMOUNT IN OUR CORE VALUE SYSTEM. </p>
                                            <p class="quote-text">    WE TAKE OUR RESPONSIBILITY TO SOCIETY SERIOUSLY AND TO HELP STRENGTHEN OUR RESOLVES TO DO BUSINESS RESPONSIBLY AND TAKE ACTIONS FOR A MORE SUSTAINABLE FUTURE. </p>
                                            <hr>
                                            <div class="blog-post-actions">
                                                <p class="blog-post-bottom">
                                                    - Culture and Values
                                                </p>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <br/>
                                <div class="module">
                                    <h3>Who we are...</h3>
                                    <p>
                                        VVD GLOBAL HOLDINGS (PVT) LTD IS ENGAGED IN THE BUSINESS OF SUSTAINABILITY & PROJECT INVESTMENTS. THEY BEGAN THEIR VENTURE IN AUGUST 2019 BASED OUT OF COLOMBO, SRI LANKA.
                                    </p>
                                    <p>
                                        THE COMPANY IS INCORPORATED UNDER THE COMPANIES ACT NO.07 OF 2007, AS A LIMITED LIABILITY COMPANY IN DEMOCRATIC SOCIALISTS & REPUBLIC OF SRI LANKA HOLDING REGISTRATION NUMBER PV 00214327.
                                    </p>
                                    <p>
                                        CURRENTLY THE COMPANY COMPRISES OF STRONG FUNDING BASE AND SUSTAINABLE PROJECTS THAT CAN DRIVE THE TODAYS GLOBALIZATION TO THE ECOLOGICAL SYSTEM WITH PROVIDING AN EXTRAORDINARY BENEFITS TO ITS CUSTOMER BASE.
                                        FOCUSED INVESTMENTS ARE CARRIED OUT DIRECTLY OR VIA SUBSIDIARIES ACROSS A WIDE RANGE OF INDUSTRIES AND ASSET CLASSES, INCLUDING GREEN CONSTRUCTION WORK, SOLAR PROJCTS, DIRECT PRIVATE EQUITY, REAL ESTATE, SOFTWARE DEVELOPMENT, ECO TOURISM AND PROMOTE ECO-FRIENDLY PRODUCTS WITH SUSTAINABILITY.
                                    </p>
                                    <p>
                                        VVD GLOBAL HOLDINGS MAINTAINS CLOSE RELATIONSHIPS WITH EXISTING INVESTMENT STRUCTURES, FUNDS, AND ASSET MANAGERS, AND IS PERPETUALLY DEVOTING EFFORTS TO DEVELOPING ITS NETWORKS IN ORDER TO IDENTIFY APPROPRIATE INVESTMENT OPPORTUNITIES.

                                    </p>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane row fade" id="cooperate" role="tabpanel" aria-labelledby="list-profile-list">
                            {{--<div class="col-md-12 text-center mb-5">--}}
                                {{--<h4>CORPORATE PROFILE</h4>--}}
                            {{--</div>--}}
                            <div class="col-md-12">
                                    <p class="lead">
                                        COMPANY NAME
                                    </p>
                                    <p class="subContent">
                                        VVD GLOBAL HOLDINGS (PVT) LTD
                                    </p>
                                    <p class="lead">
                                        LEGAL FORM
                                    </p>
                                    <p  class="subContent">
                                        INCORPORATED AS A LIMITED LIABILITY COMPANY UNDER THE COMPANIES ACT NO.07 OF 2007, ON THE 6TH OF AUGUST 2019.
                                    </p>
                                    <p class="lead">
                                        REGISTRATION NUMBER
                                    </p>
                                    <p  class="subContent">
                                        PV 00214327 (UNDER THE COMPANIES ACT NO 07, OF 2007)
                                    </p>
                                    <p class="lead">
                                        PLACE OF INCORPORATION
                                    </p>
                                    <p  class="subContent">
                                        COLOMBO, SRI LANKA
                                    </p>
                                    <p class="lead">
                                        REGISTERED ADDRESS
                                    </p>
                                    <p  class="subContent">
                                        NO. 24, POLICE PARK AVENUE, COLOMBO 05
                                    </p>
                                    <p class="lead">
                                        CONTACT INFORMATION
                                    </p>
                                    <p  class="subContent">
                                        TELEPHONE NO : +94 77 889 4332 | +94 77 743 0789<br/>
                                        EMAL : vvdholdings@gmail.com
                                    </p>
                                    <p class="lead">
                                        BOARD OF DIRECTORS
                                    </p>
                                    <p  class="subContent">
                                        MR. VAJIRA KOLLURAGE<br/>
                                        MR. VIHAN ASANGA<br/>
                                        MR. DANESH GUNAWARDHANA<br/>
                                    </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="leadership" role="tabpanel" aria-labelledby="list-messages-list">
                            {{--<div class="col-md-12 text-center mb-5">--}}
                                {{--<h4>LEADER BOARD</h4>--}}
                            {{--</div>--}}
                            <div  class="col-md-12 leaderBox">
                                <a  data-toggle="collapse" href="#leaderOne" role="button" aria-expanded="false" aria-controls="collapseExample">

                                    <div class="row">
                                        <div class="col-md-2 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/a.jpg')}}" class="imgCircle" alt="Director"/>
                                        </div>
                                        <div class="col-md-9 mt-3 text-sm-center  text-md-left">
                                            <h4 class="boardName">MR. VAJIRA KOLLURAGE</h4>
                                            <p class="boardPosition">Chairman</p>
                                        </div>
                                    </div>
                                </a>


                                <div class="collapse" id="leaderOne">
                                    <br/>
                                    <div class="col-md-12">

                                        <p> Mr. Vajira kollurage is a renowned professional with continuing his tenure in private sector specialized in finance and construction industries in a capacity of various senior management positions with many challenging achievement.</p>
                                        <p> Mr. Vajira kollurage holds a master of business administration in project management – 2018, cardiff metropolitan university, bachelor of science (major in business management – honors) – 2015, london south bank university, higher diploma in business management – 2014, auston institute of management, certificate course in construction works management – 2015, construction industry development authority.</p>
                                       <p> He started his career as a board of director at prasanna construction & interiors (pvt) ltd, leading construction company servicing to all the construction sectors. Within his management scope he has driven the company in to sustainable construction aspects and thereby the company
                                           Has managed to increase its revenue and operations in a greater scope.</p>
                                        <p>  Furthermore he has setup another successful construction venture vajira designing & construction that mainly focus the untouched areas in the industries and thereby he uplifts and facilitates the industries with eco green construction strategies that help to minimize the today’s globalization. Some of his project writes up manly focused to energy projects, apartments and second life style to the busy cities, eco tourism etc.</p>

                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-12 mt-2 leaderBox">
                                <a  data-toggle="collapse" href="#leaderTwo" role="button" aria-expanded="false" aria-controls="collapseExample">

                                    <div class="row">
                                        <div class="col-md-2 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgCircle" alt="Director"/>
                                        </div>
                                        <div class="col-md-9 mt-3 text-sm-center  text-md-left">
                                            <h4 class="boardName">MR. VIHAN ASANGA NANAYAKKARA</h4>
                                            <p class="boardPosition">Executive Director</p>
                                        </div>
                                    </div>
                                </a>


                                <div class="collapse" id="leaderTwo">
                                    <br/>
                                    <div class="col-md-12">

                                        <p> He is a member of aat institute (sl), (adms) management studies at aquinas university college, bsc. Colombo university. </p>
                                        <p> He is a founder of merryworld brand and a leading wellknown importer of raw cashew nuts to sri lanka to protect the industry  joined hand with sri lanka cashew corporation  at the time of crisis situations since 2005. He holds the chairmanship of merryworld international (pvt) ltd since 2011.</p>
                                        <p> He holds positions on the boards of other companies, as a director of optimized technologies (private) limited, he produce online exam portal to the students in schools and professional studies. And he obtained vast knowledge of foreign affairs/exposure being a director of infinite trade planners limited in uae. </p>
                                        <p> He is a nature lover and currently working to promote eco-friendly habbits and products to the nation with various organisations and universities. He is promoting 100% compostable and biodegradable products to south asia. </p>

                                    </div>
                                </div>
                            </div>
                            <div  class="col-md-12 mt-2 mb-2 leaderBox">
                                <a  data-toggle="collapse" href="#leaderThree" role="button" aria-expanded="false" aria-controls="collapseExample">

                                    <div class="row">
                                        <div class="col-md-2 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/a.jpg')}}" class="imgCircle" alt="Director"/>
                                        </div>
                                        <div class="col-md-9 mt-3 text-sm-center  text-md-left">
                                            <h4 class="boardName">MR. DANESH GUNAWARDHANA </h4>
                                            <p class="boardPosition">Executive Director</p>
                                        </div>
                                    </div>
                                </a>


                                <div class="collapse" id="leaderThree">
                                    <br/>
                                    <div class="col-md-12">

                                        <p> Mr danesh gunawardana is a professional in it having bit in colombo university and mcse in microsoft and also ccna, ncc. In his carrier worked as it lecturer in mumbai university in sri lanka branch and dowell international as manager project having sound knowledge in pharmaceutical and road construction with soil enzyme also import and export </p>
                                        <p> He is the founder of midworld imports & exports and rivalcrown established in 2002 and 2016, the main object of the both companies to imports and export, provide best spice products and import and supply of raw materials to sri lankan industries who are in injection molding. With the offers in best business partners his goals lie heavily in developing quality spice products and row materials to our customers.</p>
                                        <p> In these 18 years of business he has created many new businesses with in industry, he work closely with our clients to portray and communicate each company’s image in order to bring brands and personalities to life in an effective way. </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="management" role="tabpanel" aria-labelledby="list-messages-list">
                            <div class="row">
                                {{--<div class="col-md-12 text-center mb-5">--}}
                                    {{--<h4>MANAGEMENT TEAM</h4>--}}
                                {{--</div>--}}
                                <div  class="col-md-12 ">
                                    <p>
                                        Our senior management team consists of many industry experts, who bring an assortment of industry best practices to the table and represents a combined knowledge. This knowledge has become our strength and strength and our biggest assets, which has spread
                                    </p>
                                    <p>
                                        Headed the company in achieving heights and revolutionizing the sustainable industry with many best solutions. Our board of management comprises of three executive directors, this alone portraits the strength we represent in terms of knowledge and expertise consultants.
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox ">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12 mt-3 text-sm-center  text-md-left">
                                            <h4 class="boardName">Dr.B.Nishantha  <p class="managementAbr">(Senior Lecturer)</p></h4>
                                            <p class="managementAbr">Phd(Kln) |  CTHE(Col-SL) | MBA(CSU-Aus) | PgDip(UK) | BBA(Col-SL)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox ">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12 mt-3 text-sm-center  text-md-left">
                                            <h4 class="boardName">Dr.G.R.P.Silva  <p class="managementAbr">(Lecturer)</p></h4>
                                            <p class="managementAbr">Phd(Kln) |  CTHE(Col-SL) | MBA(CSU-Aus) | PgDip(UK) | BBA(Col-SL)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12  text-sm-center  text-md-left">
                                            <h4 class="boardName">MR.BATHANGE LAKMAL CHAMINDA WIJESIRI  </h4>
                                            <p class="managementAbr">BBA(special) | ATII | MBA(Col-Sl 2018)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12  text-sm-center  text-md-left">
                                            <h4 class="boardName">MR.VARUNA JAYASURIYA  </h4>
                                            <p class="managementAbr">Bottle Blowing Project Consultant | Investor Consultant</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12  text-sm-center  text-md-left">
                                            <h4 class="boardName">MR.K.D.N.C.PERERA  </h4>
                                            <p class="managementAbr"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12  text-sm-center  text-md-left">
                                            <h4 class="boardName">MR.Chandana Paththinige  </h4>
                                            <p class="managementAbr"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12  text-sm-center  text-md-left">
                                            <h4 class="boardName">Dr.M.D.Y.A.Madurapperuma  </h4>
                                            <p class="managementAbr"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div  class=" managementBox">
                                        <div class="col-md-12 text-center  mt-1">
                                            <img  src="{{ URL::asset('my_assets/img/leaderBoard/c.jpg')}}" class="imgManagement" alt="Director"/>
                                        </div>
                                        <div class="col-md-12  text-sm-center  text-md-left">
                                            <h4 class="boardName">Mr.Srihan Ariyasinghe  </h4>
                                            <p class="managementAbr"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
        </div>
    </div>



@endsection