<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Ecovis</title>
    <link rel="icon" href="<?= base_url()?> assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <style>
        .client_stories_details {
            display: block;
            display: -webkit-box;
            /* margin: 0 auto; */
            /* color: #cf6824; */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .client_stories_heading {
            display: block;
            display: -webkit-box;
            /* margin: 0 auto; */
            /* color: #cf6824; */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;

        }
      
    </style>

</head>

<body>

    <!-- header -->
    <?php include_once "header.php" ?>

    <!-- ecovis banner  -->
    <div id="homebannner" class="carousel slide" style="height: 450px;" data-ride="carousel">
        <div class="carousel-inner h-100">
            <div class=" carousel-item active">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/homepage_b1_ecovis_india.png" style="height: 450px;" alt="First slide">
                <!-- <img class="d-block w-100" src="./ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem;" class="">RKCA INDIA</h1>
                        <h3 class="font-weight-normal">Together we build Foundations of tomorrow</h3>
                        <a href="<?= base_url()?>ecovis_india"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">OUR OFFICES</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/homepage_b2_our_team.png" style="height: 450px;" alt="Second slide">
                <!-- <img class="d-block w-100" src="./ecovis-images/careers_banner.png" style="height: 450px;" alt="Second slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent;">RKCA INDIA</h1>
                        <h3 class="font-weight-normal">The people who intensify our Business</h3>
                        <a href="<?= base_url()?>ecovis_india"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">OUR TEAM</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/homepage_b3_job_vaccancies.png" style="height: 450px;" alt="Third slide">
                <!-- <img class="d-block w-100" src="./ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent">RKCA INDIA</h1>
                        <h3 class="font-weight-normal">Build your future with us </h3>
                        <a href="<?= base_url()?>careers"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">CAREER PATHS</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/lets_connect.png" style="height: 450px;" alt="Forth slide">
                <!-- <img class="d-block w-100" src="./ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption">
                    <div class="animate__animated animate__fadeInDown">
                        <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent">RKCA INDIA</h1>
                        <!-- <h3 class="font-weight-normal">Network with us</h3> -->
                        <a href="<?= base_url()?>careers"> <button class="btn text-light mt-5" style="border: 2px solid whitesmoke; background-color: transparent;">LET'S CONNECT</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url()?>assets/images/ecovis_banners/mentor_bi.png" style="height: 450px;" alt="Fifth slide">
                <!-- <img class="d-block w-100" src="./ecovis-images/homepage_banner.jpg" style="height: 450px;" alt="First slide"> -->
                <div class="carousel-caption ">
                    <div class="animate__animated animate__fadeInDown">
                        <img src="<?= base_url()?>assets/images/ecovis_logoes/Mentor_bi.png" class="w-25 mb-3 mt-4" style="min-width: 120px;" alt="">
                        <!-- <h1 style="font-family: 'Libre Baskerville', serif; font-size: 2.5rem; color:transparent">RKCA  INDIA</h1> -->
                        <h3 class="font-weight-normal">An initiative for Business Transformation</h3>

                        <!-- <p class="normalText">An initiative for Business Transformation</p> -->
                        <!-- <h3 class="font-weight-normal">Network with us</h3> -->
                        <a href="<?= base_url()?>careers"> <button class="btn text-light mt-3" style="border: 2px solid whitesmoke; background-color: transparent;">EXPLORE</button></a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev " href="#homebannner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homebannner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- banner problem solving drop down  -->
    <div class="" id="Business_in_India"></div>

    <!-- <div class="bannerDD box_shadow bg-danger pb-4 pt-3">
        <h3 class="text-center text-light mt-3">
            Your Business in India
        </h3>
        <div class="row" id="Your_Business_needs">
            <div class="col-md-6 col-sm-12 d-md-flex justify-content-end text-center pr-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
                        Select service
                    </button>
                    <div class="dropdown-menu FIRSTserviceDD w-100">
                        <button class="dropdown-item services" id="" onclick="showDD('FormationCompanies', 'Formation')" type="button">Formation</button>
                        <button class="dropdown-item services" id="" onclick="showDD('RegistrationCompanies','Registration')" type="button">Registration</button>
                        <button class="dropdown-item services" id="" onclick="showDD('Closure_of_ConcernCompanies','Closure of Concern')" type="button">Closure of Concern</button>
                        <a href="./Business_Restructuring.php" style="text-decoration: none;" ><button class="dropdown-item services" type="button">Business Restructuring</button></a>
                        <a href="./Succession_Planning.php" style="text-decoration: none;"><button class="dropdown-item services" type="button">Succession Planning</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-md-flex text-center pl-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" onclick="showchildDD('servicebtn')" data-toggle="dropdown" aria-expanded="false">
                        Select category
                    </button>
                    <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                        <a href="./Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Private Limited Company</button></a>
                        <a href="./Limited_Liability_Partnerships.php"  style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
                        <a href="./One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">One Person Company (OPC)</button></a>
                        <a href="./Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Proprietorship</button></a>
                        <a href="./Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Partnership</button></a>
                        <a href="./Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Nidhi Company</button></a>
                        <a href="./NGO_regestration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">NGO Registration</button></a>
                        <a href="./Society_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Society Registration</button></a>

                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                      

                        <a href="./Professional_Tax_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PTR</button></a>
                        <a href="./GST.php" style="text-decoration: none;"><button class="dropdown-item" type="button">GST Registration</button></a>
                        <a href="./epf_registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">EPF Registration</button></a>
                        <a href="./ESI.php" style="text-decoration: none;"><button class="dropdown-item" type="button">ESI Registration</button></a>
                        <a href="./PAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PAN Application</button></a>
                        <a href="./Digital_Signature_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Digital Signature Registration</button></a>
                        <a href="./TAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">TAN</button></a>
                        
                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="Closure_of_ConcernCompanies">
                        <a href="./Close_Your_Public_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Close Your Public Limited Company</button></a>
                        <a href="./Closing_a_One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a One Person Company</button></a>
                        <a href="./Closing_a_Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Partnership</button></a>
                        <a href="./Closing_a_Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Proprietorship</button></a>
                        <a href="./Closing_a_Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Nidhi Company</button></a>
                        <a href="./Closing_a_Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Private Limited Company</button></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- offering services  -->
    <div class="my-5">
        <h2 class="text-center ">Practice Area At Glance</h2>

    </div>
    <div class="row mx-0 justify-content-center">
        <div class="col-lg-10 col-sm-11">
            <div class="row mx-0 mb-4">

                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>Strategy_Performance_Consulting_services" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons  ">
                                <div class=" w-75 mx-auto services_logo Strategy_Performance_Consulting_logo "></div>
                                <!-- <img src="./ecovis_icons/Assurance.png" class="w-75" alt=""> -->
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading">Strategy & Performance Consulting </h4>
                            <p class="offeringservicesdetails">Giving you the certainty to drive open and straightforward development.</p>
                        </div>
                    </a>

                </div>
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="text-center">
        <div class="mx-auto service_icons">
            <img src="./ecovis_icons/Assurance.png" class="w-75" alt="">
        </div>
        <h4 class="offeringservicesHeading">Strategy & Performance Consulting </h4>
        <p class="offeringservicesdetails">Giving you the certainty to drive open and straightforward development</p>
    </div>
</div> -->
                <!-- <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>Onshore_Offshore_Advisory" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto Onshoreb_logo services_logo"></div>
                                <img src="./ecovis_icons/TAXATION-removebg.png" class="w-75" alt=""> comment this line
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Onshore & Offshore advisory</h4>
                            <p class="offeringservicesdetails">Ecovis has experience offering both onshore and offshore advisory services.</p>
                        </div>
                    </a>


                </div> -->
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>Government_risk_compliance" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto Risk_Compliance_logo services_logo"></div>
                                <!-- <img src="./new_icon_images/Governanceb_black.png" class="w-75" alt=""> -->
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Legal and GRC Services</h4>
                            <p class="offeringservicesdetails">We prepare organizations for any unexpected challenges.</p>
                        </div>
                    </a>


                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>BusinessSupportandFinancialReporting" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto businessSupport_logo services_logo"></div>
                                <!-- <img src="./new_icon_images/BusinessSupportb.png" class="w-75" alt=""> -->
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Business support & financial Reporting</h4>
                            <p class="offeringservicesdetails">Offering accounting business support to grow your business.</p>
                        </div>
                    </a>

                </div>
                <!-- 
</div>
<div class="row mx-0"> -->
<!-- 
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>LitigationLegalServices" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto services_logo Legalb_logo"></div>

                                <img src="./new_icon_images/Legalb.png" class="w-75" alt=""> cooment this line
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Legal & Litigation Services</h4>
                            <p class="offeringservicesdetails">We create a platform to offer you legal services and consultancy.</p>
                        </div>
                    </a>


                </div> -->
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>Financial_and_Capital_Services" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto services_logo financial_capital_Services"></div>

                                <!-- <img src="./ecovis_icons/Growth-Services.png" class="w-75" alt=""> -->
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Financial & Capital Services </h4>
                            <p class="offeringservicesdetails">We want to build a long-term value in the financial services business by transforming it from the ground up.</p>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>Digital_transformation" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto Digital_Transformationb_logo services_logo"></div>

                                <!-- <img src="./new_icon_images/Digital_Transformationb.png" class="w-75" alt=""> -->
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Digital Transformation</h4>
                            <p class="offeringservicesdetails">Transform and foster your business digitally using our digital transformation services.</p>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 serviceColomn">
                    <a href="<?= base_url()?>Crossborderandmerchantbankingservices" class="text-dark" style="text-decoration: none;">
                        <div class="text-center">
                            <div class="mx-auto service_icons">
                                <div class=" w-75 mx-auto Capacityb_logo services_logo"></div>

                                <!-- <img src="./new_icon_images/Capacityb.png" class="w-75" alt=""> -->
                            </div>
                            <h4 class="offeringservicesHeading primaryHeading text-capitalize">Cross border & merchant banking advice</h4>
                            <p class="offeringservicesdetails">Capacity and Capability building is becoming one of the fundamental responsibilities, and it is evolving into a high-quality service.</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <!-- <div class="offer_services" style="margin-top: 7rem;">

        <h2 class="text-center " style="margin-bottom: 4rem;">Services offered by our experts at Ecovis</h2>

        <div class="row mx-0 justify-content-around">
            <div class="col-md-10">
                <div class="row justify-content-around">
                    <div class="col-md-4 col-lg-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Assurance.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Assurance</h4>
                            <p>Giving you the certainty to drive open and straightforward development</p>
                        </a>
                    </div>
                    <div class="col-md-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/TAXATION-removebg.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Taxation</h4>
                            <p>Assisting Companies With overseeing
                                Accounting and Tax commitments</p>
                        </a>

                    </div>
                    <div class="col-md-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/RISK COMPLIANCE.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Risk & Compliance</h4>
                            <p>Preparing organizations for any unexpected,
                                distinguishing, alleviating chances, and
                                reinforcing business culture.</p>
                        </a>

                    </div>
                    <div class="col-md-3 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Business-Support.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Accounting Business support</h4>
                            <p>Offering accounting business support to
                                grow your business.
                            </p>
                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="row mx-0 justify-content-around mt-5">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/LEgal-Support.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Legal Services</h4>
                            <p>We create a platform to offer you legal
                                services and consultancy</p>
                        </a>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Growth-Services.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Growth Services</h4>
                            <p>We demonstrate and further develop your
                                business quality by offering growth services</p>
                        </a>

                    </div>
                    <div class="col-md-4 text-center">
                        <div class="align-items-center border d-flex justify-content-around mx-auto service_icons">
                            <img src="./ecovis icons/Digital-Transformation.png" class="w-75" alt="">
                        </div>
                        <a href="#" style="text-decoration:none" class="text-dark">
                            <h4 class="mt-3">Digital Transformation</h4>
                            <p>Transform and foster your business digitally
                                using our digital transformation services</p>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <!-- Client stories  -->
    <div class="mainHeading text-center  mt-5" id="client_Stories">
        <h2 class="text-capitalize mainHeading mb-5">Know Us through Our Clients</h2>
    </div>
    <div class=" owl-carousel owl-theme mt-4 mb-0 position-relative">
        <div class="1 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c1_baggingoutcomes_r.jpg" class="w-100 client_stories_images" alt="">
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Combined efforts bagging successful outcomes!</h5>
                    <p class="client_stories_details text-justify">The main motive of our company which is completely aimed at is to render professional services to its potential clients from different fields of the varied economy sectors.</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>clientStoriesDetailPage1"><span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="2 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c2_lendinghand_r.jpg" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">A Lending Hand for the procuration of the client!</h5>
                    <p class="client_stories_details text-justify mb-2">With the mission of owning and operating high-quality wireless infrastructure sites in stable markets, PTI was established in the year 2013.</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>clientStoriesDetailPage2"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="3 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c3_Facilitationofcollective_r.png" class="w-100 client_stories_images" alt="">


                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Facilitation of collective outsources accounting, local tax compliance, and company formation services!</h5>
                    <p class="client_stories_details text-justify mb-2">The client is a subsidiary of a multinational company based in Turkey that functions in various fields of batteries, chargers, accessories for motive, etc.</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>clientStoriesDetailPage3"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="4 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c4_facilitating_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Facilitating assistance for the expansion of Spanish automotive components producer.</h5>
                    <p class="client_stories_details text-justify mb-2">Our consumer could be a major transnational company within the automotive sector, with varied plants in Spain that manufacture automotive components. </p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>clientStoriesDetailPage4"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="5 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c5_renderingextensive_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Rendering extensive start-up services to our clients!</h5>
                    <p class="client_stories_details text-justify mb-2">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series,</p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>clientStoriesDetailPage5"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <div class="6 item  client_story">
            <div class=" float-right">
                <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c6_assisstanceprovided_r.png" class="w-100 client_stories_images" alt="">

                <!-- <img src="./ecovis-images/our_team_banner.png" class="w-100" alt=""> -->
                <div class="pb-3 pt-4 px-4">
                    <h5 class="client_stories_heading text-center">Assistance provided to electrical contractors for avoiding double taxation.</h5>
                    <p class="client_stories_details text-justify mb-2">Our client is a massive electrical contracting business located in New Zealand. </p>
                    <div class="d-flex justify-content-end">
                        <a href="<?= base_url()?>clientStoriesDetailPage6"> <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span></a>

                        <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal px-2 py-2">Read more...</span> -->
                    </div>
                    <!-- <a href="#" style="text-decoration: none;">Read More</a> -->
                </div>


            </div>
        </div>
        <!-- <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div>
        <div class="item border p-4 client_story">
            <h5 class="">Combined efforts bagging successful
                outcomes!</h5>
            <p>The main motive of our company which is completely aimed at is to render professional services to its
                potential clients from different fields of the varied economy sectors. Out of the services facilitated
                so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose
                functionality was for the accommodation services, gym facilities, social events, restaurants and sports
                events, etc. <a href="#" style="text-decoration: none;">Read More</a></p>
        </div> -->

    </div>
    <div class="text-center">
        <a href="<?= base_url()?>client_stories"><button class="badge-pill btn btn-danger font-weight-bold mb-5 px-5">Explore All</button></a>
    </div>

    <!-- footer  -->
    <?php include_once "footer.php" ?>


    <script>
        $("#indexProblem").click(function() {
            $("#indexProblemDD").slideToggle("fast");
        });
    </script>

    <!-- oul carousel javascript cdn  -->
    <script src="<?= base_url()?>assets/bootstrap/js/javascript.js"></script>
    <!-- <script src="./js/javascript.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<div class='nav-btn prev-slide bg-light prenavigate'> <i class='fa-solid fa-chevron-left text-danger'></i></div>", "<div class='nav-btn next-slide bg-light postnavigate'> <i class='fa-chevron-right fa-solid text-danger'></i></div>"],

            autoplay: false,
            autoplayTimeout: 3000,
            autoWidth: false,
            autoplayHoverPause: true,
            smartSpeed: 1300,
            responsive: {
                0: {
                    items: 1
                },
                500: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1440: {
                    items: 4
                }
            }
        })



        $("#servicebtn").click(function() {
            $(".FIRSTserviceDD").slideDown();
        });

        function showDD(id, name) {
            $("#servicebtn").attr("attr-selected", id);
            $(".baseofselectedService").slideUp();
            $("#servicebtn").text('').text(name);

        }

        function showchildDD(id) {
            $(".baseofselectedService").hide();
            var childId = $("#" + id).attr('attr-selected');
            $("#" + childId).slideDown();
        }

        $(document).mouseup(function(e) {
            if ($(e.target).closest(".baseofselectedService").length === 0) {
                $(".baseofselectedService").slideUp();
                $(".FIRSTserviceDD").slideUp();
            }
        });
    </script>
</body>

</html>