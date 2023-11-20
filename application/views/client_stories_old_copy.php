<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - client Stories</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <!-- font-awesome cdn  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
            integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- bootstrap css cdn  -->
    <!-- <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap/bootstrap.css"> -->

    <!-- custom css link  -->
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <!-- box icons link  -->
    <!-- <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->

    <!-- bootstrap javascript cdn  -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- google font  -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet"> -->
    <!-- oul carousel link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <style>
        .clientStoryDetails {

            display: block;
            display: -webkit-box;
            /* margin: 0 auto; */
            /* color: #cf6824; */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;

        }

        .current_vacancies {
            background-color: #cd1432;
            box-shadow: 0px 2px 4px 0px grey;
            border-radius: 5px;
            width: 25%;
            height: 40px;
            color: white;
            /* margin-left: 37%; */
            border: none;
        }

        .jobs_section {
            background-color: #eda4ad;
            width: 100%;
            padding: 1%;
            border-radius: 7px;
        }

        .primaryHeading {
            height: 93px !important;
            display: block;
            display: -webkit-box;
            /* margin: 0 auto; */
            /* color: #cf6824; */
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        #client_stories_1 {
            min-height: 175px;
        }

        .box_shadow {
            box-shadow: var(--box-shadow);
            min-height: 404.27px;
        }

        /* .clientStoryDetails:hover {
            white-space: unset;
            overflow: hidden;
            text-overflow: ellipsis;
        } */
    </style>
</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>


    <!-- career nammer  -->

    <!-- <div class="align-items-center bannerDiv d-flex justify-content-around pageBanner">
       <div class="">
       <p class="mainHeading text-center text-dark">OUR TEAM</p>
        <p class="normalText text-center text-dark">The people who intensify business capabilities</p>
       </div>
        <img src="" alt="">
    </div> -->

    <div class="clientStoriesBannaer pageBanner d-flex justify-content-around align-items-center">
        <div class="text-center">
            <p class="mainHeading text-light">Client Stories</p>
            <p class="normalText text-light">Our clients are the heart of our business!</p>
        </div>
    </div>
    <!-- <div class="banner position-relative">
        <img src="./ecovis-images/mentor_bi_banner.jpg" style="height:100vh" class="w-100" alt="">
       
    </div> -->
    <!-- <div class="bg-danger pb-4 pt-3" style="box-shadow: var(--box-shadow);">
        <p class="text-center text-light mt-3 w-50 mx-auto" style="font-weight: var(--box_normal_text);">
            Career routes aren't direct all the time. We enroll a different blend of people by taking a gander at your true capacity
            and desire. Our wide scope of administration and industry specialisms guarantees there's a lot of scope for you to
            learn and foster in accordance with your interests.
        </p>
        <div class=" mx-auto w-50">
          
            <div id="indexProblem" class="align-items-center bg-light d-flex font-weight-bold justify-content-between mt-4 mx-auto problemDD px-3 py-2 rounded text-dark">
                <p class="mb-0">Select category</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div>
        </div>

        <div class="select_location border p-2 mb-3 mt-1 w-25 rounded" id="indexProblemDD">
            <p class="border-dark form-control mb-2 mx-auto genderValue activeSelection" onclick="genderValue(this,'Male');" style="border-radius: 7px; width: 95%; ">PROBLEM 1</p>
            <p class="border-dark form-control mb-2 mx-auto   genderValue" onclick="genderValue(this,'Female');" style="border-radius: 7px; width: 95%;">PROBLEM 2</p>
            <p class="border-dark form-control mb-2 mx-auto genderValue" onclick="genderValue(this,'Other');" style="border-radius: 7px; width: 95%;">PROBLEM 3</p>
        </div>

    </div> -->
    <!-- <div class="row mx-0 justify-content-around bg-danger">
        <div class="col-md-8">
            <div class="text-center">
                <p class="w-75 mx-auto text-center text-light " style="font-size: 19px; padding: 6rem 0rem;">Career routes aren't direct all the time. We enroll a different blend of people by taking a gander at your
                    true capacity and desire. Our wide scope of administration and industry specialisms guarantees there's
                    a lot of scope for you to learn and foster in accordance with your interests.</p>
            </div>
        </div>
    </div> -->

    <!-- <div class="row justify-content-around " style="margin: 3.5rem 0rem;">
        <div class="col-md-8">
            <div class="text-center">
                <h2 class="text-center mb-5" style="font-size: var(--primary_Font_size); font-weight:var(--heading_font_weight);">We will believe in bringing out the best out from the people who work with us</h2>

                <p class="w-75 mx-auto  text-center " style="font-size: var(--secondry_font_size); font-weight:var(--box_normal_text);">At Ecovis, we re pleased to develop our own ability by fostering our people right from the start through to
                    proficient capabilities and beyond. We likewise value the benefit of enrolling experienced staff with in depth
                    knowledge and skills. This assists us to infuse and curate new ideas and perspective to our team.</p>

            </div>
        </div>
    </div> -->

    <div class="clientStoryFilter d-flex justify-content-end">
        <div class="d-flex justify-content-around mb-2 pb-4 pt-5 w-50">

            <!-- <div class=" mx-auto w-50"> -->
            <div class="btn-group py-3 " style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; box-shadow: var(--box-shadow);">
                    Category
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item" type="button" id="Business_Transformation">Business Transformation</button>
                    <button class="dropdown-item" type="button" id="Digital_Transformation">Digital Transformation</button>
                    <button class="dropdown-item" type="button" id="Legal_Services">Legal Services</button>
                    <button class="dropdown-item" type="button" id="Accounting">Accounting </button>
                    <button class="dropdown-item" type="button" id="Start_up">Start-up</button>
                    <button class="dropdown-item" type="button" id="Finance">Finance</button>
                </div>
            </div>
            <div class="btn-group py-3 " style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; box-shadow: var(--box-shadow);">
                    Month
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item" type="button" id="Jan">January</button>
                    <button class="dropdown-item" type="button" id="Feb">February</button>
                    <button class="dropdown-item" type="button" id="Mar">March</button>
                    <button class="dropdown-item" type="button" id="Apr">April</button>
                    <button class="dropdown-item" type="button" id="May">May</button>
                    <button class="dropdown-item" type="button" id="Jun">June</button>
                    <button class="dropdown-item" type="button" id="Jul">July</button>
                    <button class="dropdown-item" type="button" id="Aug">August</button>
                    <button class="dropdown-item" type="button" id="Sep">September</button>
                    <button class="dropdown-item" type="button" id="Oct">October</button>
                    <button class="dropdown-item" type="button" id="Nov">November</button>
                    <button class="dropdown-item" type="button" id="Dec">December</button>
                </div>
            </div>
            <div class="btn-group py-3 " style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; box-shadow: var(--box-shadow);">
                    Year
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item" type="button" id="_18">2018</button>
                    <button class="dropdown-item" type="button" id="_19">2019</button>
                    <button class="dropdown-item" type="button" id="_20">2020</button>
                    <button class="dropdown-item" type="button" id="_22">2022</button>
                    <button class="dropdown-item" type="button" id="_22">2022</button>
                </div>
            </div>
            <!-- <div id="clientStory_categry" class="align-items-center bg-light d-flex font-weight-bold justify-content-between mt-4 px-3 py-2 rounded text-dark w-25">
                <p class="mb-0">Category</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div>
            <div id="clientStory_categry" class="align-items-center bg-light d-flex font-weight-bold justify-content-between mt-4 px-3 py-2 rounded text-dark w-25">
                <p class="mb-0">Month</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div>
            <div id="clientStory_categry" class="align-items-center bg-light d-flex font-weight-bold justify-content-between mt-4 px-3 py-2 rounded text-dark w-25">
                <p class="mb-0">Year</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div> -->
            <!-- </div> -->

            <div class="select_location border p-2 mb-3 mt-1 w-25 rounded" id="clientStory_categryDD">
                <p class="border-dark form-control mb-2 mx-auto genderValue activeSelection" onclick="genderValue(this,'Male');" style="border-radius: 7px; width: 95%; ">PROBLEM 1</p>
                <p class="border-dark form-control mb-2 mx-auto   genderValue" onclick="genderValue(this,'Female');" style="border-radius: 7px; width: 95%;">PROBLEM 2</p>
                <p class="border-dark form-control mb-2 mx-auto genderValue" onclick="genderValue(this,'Other');" style="border-radius: 7px; width: 95%;">PROBLEM 3</p>
            </div>

        </div>
    </div>

    <div class="clientStoriesList row mb-5 pb-1" id="clientStoriesList">

        <!-- <div class="mx-auto" style="width: 80%;"> -->
        <div class="mb-3 mx-0 row px-5 px-sm-3">
            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Finance cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c1_baggingoutcomes_r.jpg" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;     max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Combined efforts bagging successful outcomes!</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">The main motive of our company which is completely aimed at is to render professional services to its potential clients from different fields of the varied economy sectors.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage1"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Finance cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c2_lendinghand_r.jpg" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem;    max-height: 219.58px;" class="w-100 client_stories_images" alt="">

                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">A Lending Hand for the procuration of the client!</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">With the mission of owning and operating high-quality wireless infrastructure sites in stable markets, PTI was established in the year 2013.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage2"> <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Business_Transformation cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c3_Facilitationofcollective_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Facilitation of collective outsources accounting, local tax compliance, and company formation services!</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">The client is a subsidiary of a multinational company based in Turkey that functions in various fields of batteries, chargers, accessories for motive, etc.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage3"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Business_Transformation cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c4_facilitating_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Facilitating assistance for the expansion of Spanish automotive components producer.</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Our consumer could be a major transnational company within the automotive sector, with varied plants in Spain that manufacture automotive components. </p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage4"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Start_up cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c5_renderingextensive_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Rendering extensive start-up services to our clients!</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage5"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Finance cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c6_assisstanceprovided_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Assistance provided to electrical contractors for avoiding double taxation.</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Our client is a massive electrical contracting business located in New Zealand. The company has developed industrial electrical and control systems and expanded its activities to Australia. </p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage6"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Digital_Transformation cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c7_redesigning_of_an_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Redesigning of an American Wholesale Company.</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">BPM Australia could be a huge, fast-moving worldwide discount company for customer merchandise. </p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage7"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>
                            \
                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Legal_Services cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c8_Tax_and_advisory_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Tax and advisory services rendered to UK start-up</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Our client is an imaginative UK start-up within the field of computerized investigate and substance curation/maintenance.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage8"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Accounting cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c9_Offering_continuous_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Offering continuous back to outside bank department with administrative reporting</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">A department of a foreign bank was subject to certain limitations on enlisting proficient staff.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage9"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Finance cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c10_We_help_the_private_bank_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">We help the private bank with anti-money washing and counter-terrorism financing compliance</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Uruguay’s second most important private bank was gained by an international bank. Thus, the local bank was obliged to adjust to the rules and controls of its modern head office.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage10"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Start_up cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c11_We_help_the_start_ups_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">We help the start-ups gain a competitive edge in the Polish market.</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Our client is a young and dynamic company that provides a platform for online table reservations in restaurants. The company currently provides services in 12 countries around the world and is constantly striving to expand its market scope.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage11"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Accounting cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c12_Recommendation_and_assistance_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Recommendation and assistance to client for implementing improved internal controls</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">One of Uruguay's major passenger transport companies, regulated by the authorities, has asked to review its purchasing process and cash flow.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage12"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Finance cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c13_SEKO_Group_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">SEKO Group located in Czech earned German Smithy Company</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Our client, SEKO Group, may be a driving Czech-based producer of key components for flying machine fly motors and steam turbines. </p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage13"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Finance cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c14_Scenario_Portugal_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Scenario of non-habitual tax resident in Portugal</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Our clients' businesses are focused on providing IT services, including market observations, feasibility studies, competitive assessments, IT project management support, and standard software maintenance. </p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage14"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>


            <div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Legal_Services cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/c15_Ukraine_International_Airways_r.png" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">Ukraine International Airways and ECOVIS Bondar & Bondar</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">Ukraine International Airlines (UIA) is Ukraine’s leading airline established in 1992.</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage15"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>




            <!-- <div class="col-lg-4 mb-4 col-md-6 col-sm-12 ">
                <div class="box_shadow pt-2 px-3 rounded">
                    <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P>
                    <h4 class="clientStoryHeading text-justify py-2">Rendering extensive start-up services to our clients!</h4>
                    <p class="clientStoryDetails text-justify">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div> -->
            <!-- <div class="col-lg-4 mb-4 col-md-6 col-sm-12 ">
                <div class="box_shadow pt-2 px-3 rounded">
                    <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P>
                    <h4 class="clientStoryHeading text-justify py-2">Rendering extensive start-up services to our clients!</h4>
                    <p class="clientStoryDetails text-justify">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div> -->
            <!-- <div class="col-lg-4 mb-4 col-md-6 col-sm-12 ">
                <div class="box_shadow pt-2 px-3 rounded">
                    <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P>
                    <h4 class="clientStoryHeading text-justify py-2">Rendering extensive start-up services to our clients!</h4>
                    <p class="clientStoryDetails text-justify">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div> -->



        </div>

        <!-- </div> -->
        <!-- <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div> -->
    </div>

    <!-- <div class="clientStoriesList mb-5 pb-1">
        <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="mx-auto" style="width: 80%;">
            <div class="border border-danger mb-4 mx-0 px-4 row" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                <P class="d-flex justify-content-end mb-0 mt-2 mx-3 small w-100" style="font-weight: var(--box_normal_text);">Category: <span class="mx-2"> Start-up</span> <span class="">4th June, 2022</span></P>
                <h4 class="clientStoryHeading py-2">Rendering extensive start-up services to our clients!</h4>
                <div class="align-items-end d-flex justify-content-between">
                    <p class="clientStoryDetails w-75">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV series, was put in touch
                        with Ecovis Sydney in November 2012 because they needed to establish their imprint quickly, before Christmas!....</p>
                    <div class="d-flex justify-content-end">
                        <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 mr-3 px-3 py-2">Read more...</span>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- <div class="job_details">
                <div class="w-75 mx-auto">
                    <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;box-shadow: 0px 1px 5px 1px #cececc">
                        <div class="col-md-3 px-0 ">
                            <h6 class="bg-danger job-title w-75 text-center mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">MANAGER</h6>
                        </div>
                        <div class="col-md-9">
                            <h4 class=" job_post mt-3 py-2">Marketing head</h4>
                            <p class=" job_post_discription w-75">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                            <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger px-4 font-weight-bold text-light">VIEW DETAILS</button></div>
                        </div>

                    </div>
                    <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                        <div class="col-md-3 px-0 ">
                            <h6 class="bg-danger job-title w-75 text-center  mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">MANAGER</h6>
                        </div>
                        <div class="col-md-9">
                            <h4 class=" job_post mt-3 py-2">Marketing head</h4>
                            <p class="job_post_discription w-75">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                            <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger  px-4 font-weight-bold text-light">VIEW DETAILS</button></div>
                        </div>

                    </div>
                    <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                        <div class="col-md-3 px-0 ">
                            <h6 class="bg-danger job-title w-75 text-center  mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">MANAGER</h6>
                        </div>
                        <div class="col-md-9">
                            <h4 class="job_post mt-3 py-2">Marketing head</h4>
                            <p class="job_post_discription w-75">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                            <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger px-4 font-weight-bold text-light">VIEW DETAILS</button></div>
                        </div>

                    </div>
                    <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                        <div class="col-md-3 px-0 ">
                            <h6 class="bg-danger job-title w-75 text-center mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">MANAGER</h6>
                        </div>
                        <div class="col-md-9">
                            <h4 class="job_post  mt-3 py-2">Marketing head</h4>
                            <p class="job_post_discription w-75">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                            <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger px-4 font-weight-bold text-light">VIEW DETAILS</button></div>
                        </div>

                    </div>
                </div>
            </div> -->
    <!-- <div class="lets_connect px-0 text-center">
            <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey">LETS CONNECT</button>
            <h4 style="text-align:center;color:white;" class="mt-4 font-weight-normal">Didn't find your preferred job role? Connect with us anyway</h4>
        </div> -->
    <!-- 
    <div class="row justify-content-around ">
        <div class="col-md-8">
            <div class="jobs_section w-75 mx-auto">
                <h2 style="text-align:center;" class="mb-5 pb-1">JOBS AT ECOVIS INDIA</h2>
                <h4 style="font-size: large;" class="text-center mb-5">If you are intrigued with our work join us and we can develop together.</h4>
                <div class="text-center mb-5">
                    <button type="submit" class="current_vacancies text-light btn">CURRENT VACANCIES<i class="fa-solid fa-angle-right" style="margin-left:10px; text-shadow:0px 5px 4px black"></i></button>

                </div>
            </div>
        </div>
    </div> -->



    <div id="output-container"></div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>

const clientStoriesCartArr = [{'image':'c1_baggingoutcomes_r.jpg', 'heading':'Combined efforts bagging successful outcomes!','content':'The main motive of our company which is completely aimed at is to render professional services','readmoreLink':'1'},
{'image':'c2_lendinghand_r.jpg', 'heading':'A Lending Hand for the procuration of the client!','content':'With the mission of owning and operating high-quality wireless infrastructure sites in stable markets, PTI','readmoreLink':'2'},
{'image':'c3_Facilitationofcollective_r.png', 'heading':'Facilitation of collective outsources accounting, local tax compliance, and company formation services!','content':'The client is a subsidiary of a multinational company based in Turkey that functions in various fields','readmoreLink':'3'},
{'image':'c4_facilitating_r.png', 'heading':'Facilitating assistance for the expansion of Spanish automotive components producer.','content':'Our consumer could be a major transnational company within the automotive sector, with varied plants','readmoreLink':'4'},
{'image':'c5_renderingextensive_r.png', 'heading':'Rendering extensive start-up services to our clients!','content':'KEO Films, which had recently won a contract to make an Australian adaptation of a UK','readmoreLink':'5'},
{'image':'c6_assisstanceprovided_r.png', 'heading':'Assistance provided to electrical contractors for avoiding double taxation.','content':'Our client is a massive electrical contracting business located in New Zealand. The company has developed','readmoreLink':'6'},
{'image':'c7_redesigning_of_an_r.png', 'heading':'Redesigning of an American Wholesale Company.','content':'BPM Australia could be a huge, fast-moving worldwide discount company for customer merchandise. The ','readmoreLink':'7'},
{'image':'c8_Tax_and_advisory_r.png', 'heading':'Tax and advisory services rendered to UK start-up','content':'Our client is an imaginative UK start-up within the field of computerized investigate and substance','readmoreLink':'8'},
{'image':'c9_Offering_continuous_r.png', 'heading':'Offering continuous back to outside bank department with administrative reporting','content':'A department of a foreign bank was subject to certain limitations on enlisting proficient staff','readmoreLink':'9'},
{'image':'c10_We_help_the_private_bank_r.png', 'heading':'We help the private bank with anti-money washing and counter-terrorism financing compliance','content':'Uruguay’s second most important private bank was gained by an international bank. Thus, the local ','readmoreLink':'10'},
{'image':'c11_We_help_the_start_ups_r.png', 'heading':'We help the start-ups gain a competitive edge in the Polish market.','content':'Our client is a young and dynamic company that provides a platform for online table reservations in restaurants.','readmoreLink':'11'},
{'image':'c12_Recommendation_and_assistance_r.png', 'heading':'Recommendation and assistance to client for implementing improved internal controls.','content':'One of Uruguay\'s major passenger transport companies, regulated by the authorities, has asked','readmoreLink':'12'},
{'image':'c13_SEKO_Group_r.png', 'heading':'SEKO Group located in Czech earned German Smithy Company','content':'Our client, SEKO Group, may be a driving Czech-based producer of key components for flying machine','readmoreLink':'13'},
{'image':'c14_Scenario_Portugal_r.png', 'heading':'Scenario of non-habitual tax resident in Portugal','content':'Our clients\' businesses are focused on providing IT services, including market observations, feasibility stu','readmoreLink':'14'},
{'image':'c15_Ukraine_International_Airways_r.png', 'heading':'Ukraine International Airways and ECOVIS Bondar & Bondar','content':'Ukraine International Airlines (UIA) is Ukraine’s leading airline established in 1992','readmoreLink':'15'},

];
for(let i of clientStoriesCartArr){
    console.log(i.readmoreLink);
     clientStoriesCart(i.image, i.heading, i.content, i.readmoreLink);
    // var htmlrow = `<div clas="row"></div>`;
    // $("#clientStoriesList").append(fn);

}

function clientStoriesCart(image, heading, content, ReadMoreBadgeLink) {
     cartHtml = `<div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card Start_up cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/${image}" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">${heading}</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">${content}</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage${ReadMoreBadgeLink}"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>`;
    $("#clientStoriesList").append(cartHtml);
}


    $(function() {

        $('.toggled button').click(function() {
            var get_id = this.id;
            var get_current = $('.clientStoriesList .' + get_id);
            console.log(get_current);


            $('.cover').not(get_current).hide(500);
            get_current.show(500);
        });


    });


    // finance filter 

    var finamce_heading = $(".Finance").children().children(1).children("h4");
    var finamce_pageLink = $(".Finance").children().children(1).children().children("a");
    // console.log(finamce_pageLink);
    const FinanceArray = [];

    for (let i = 0; i < finamce_heading.length; i++) {
        let obj = {};
        obj["pageName"] = finamce_heading[i].innerHTML;
        obj["pageLink"] = finamce_pageLink[i].href;
        FinanceArray.push(obj);
    }

    localStorage.setItem("FinanceArray", JSON.stringify(FinanceArray));

    // Business_Transformation 

    var Business_Transformation_heading = $(".Business_Transformation").children().children(1).children("h4");
    var Business_Transformation_pageLink = $(".Business_Transformation").children().children(1).children().children("a");
    const Business_TransformationArray = [];
    for (let i = 0; i < Business_Transformation_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Business_Transformation_heading[i].innerHTML;
        obj["pageLink"] = Business_Transformation_pageLink[i].href;
        Business_TransformationArray.push(obj);
    }
    // console.log(Business_TransformationArray);
    localStorage.setItem("Business_Transformation", JSON.stringify(Business_TransformationArray));

    // Start_up 

    var Start_up_heading = $(".Start_up").children().children(1).children("h4");
    var Start_up_pageLink = $(".Start_up").children().children(1).children().children("a");
    const Start_upArray = [];
    for (let i = 0; i < Start_up_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Start_up_heading[i].innerHTML;
        obj["pageLink"] = Start_up_pageLink[i].href;
        Start_upArray.push(obj);
    }
    // console.log(Start_upArray);

    localStorage.setItem("Business_Transformation", JSON.stringify(Start_upArray));

    //Digital_Transformation

    var Digital_Transformation_heading = $(".Digital_Transformation").children().children(1).children("h4");
    var Digital_Transformation_pageLink = $(".Digital_Transformation").children().children(1).children().children("a");
    const Digital_TransformationArray = [];
    for (let i = 0; i < Digital_Transformation_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Digital_Transformation_heading[i].innerHTML;
        obj["pageLink"] = Digital_Transformation_pageLink[i].href;
        Digital_TransformationArray.push(obj);
    }
    // console.log(Digital_TransformationArray);

    localStorage.setItem("Digital_Transformation", JSON.stringify(Digital_TransformationArray));


  
// Legal_Services

var Legal_Services_heading = $(".Legal_Services").children().children(1).children("h4");
    var Legal_Services_pageLink = $(".Legal_Services").children().children(1).children().children("a");
    const Legal_ServicesArray = [];
    for (let i = 0; i < Legal_Services_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Legal_Services_heading[i].innerHTML;
        obj["pageLink"] = Legal_Services_pageLink[i].href;
        Legal_ServicesArray.push(obj);
    }
    // console.log(Legal_ServicesArray);

    localStorage.setItem("Legal_Services", JSON.stringify(Legal_ServicesArray));

    // Accounting 

    var Accounting_heading = $(".Accounting").children().children(1).children("h4");
    var Accounting_pageLink = $(".Accounting").children().children(1).children().children("a");
    const AccountingArray = [];
    for (let i = 0; i < Accounting_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Accounting_heading[i].innerHTML;
        obj["pageLink"] = Accounting_pageLink[i].href;
        AccountingArray.push(obj);
    }
    console.log(AccountingArray);

    localStorage.setItem("Accounting", JSON.stringify(AccountingArray));



</script>

</html>