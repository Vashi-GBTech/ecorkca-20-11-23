<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Ecovis Inetrnational</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <!-- <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css"> -->

    <!-- custom css link  -->
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <!-- box icons link  -->
    <!-- <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->

    <!-- bootstrap javascript cdn  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jqv link  -->
    <link href="<?= base_url()?>assets/js/jqvmap/dist/jqvmap.min.css">


</head>
<style>
    .insideArrow {
        width: 0;
        height: 0;
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 100px solid;
        background-image: url(<?= base_url()?>assets/ecovis-images/our_team_banner.png);
    }


    .kwadrat2 {
        width: 232px;
        height: 120px;
        border-top: 1px solid #fff;
        overflow: hidden;
        margin-top: 5px;
    }

    .trojkat2 {
        position: relative;
        overflow: hidden;
        transform: rotate(45deg) skew(10deg, 10deg);
        /*   border-bottom: 1px solid #000; */
        /*   border-right: 1px solid #000; */
        width: 200px;
        height: 200px;
        margin: -190px 0 0 16px;
    }

    .trojkat_bg2 {
        position: absolute;
        width: 200%;
        height: 200%;
        top: -50%;
        left: -50%;
        z-index: -1;
        background: url(<?= base_url()?>assets/ecovis-images/our_team_banner.png);
        background-size: 100%;
        /*   background-position: center top; */
        transform: skew(-10deg, -10deg) rotate(-45deg);
        /*   transition: .3s; */
    }

    .office_state_img {
        width: 85px !important;
        height: 75px !important;
    }

    .india_team_point {
        width: 180px;
        height: 180px;
        /* position: absolute; */
        box-shadow: 0px 2px 3px 1px lightgray;
        background-color: whitesmoke;
    }

    /* *{
        border: 1px solid red;
    } */
</style>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner  -->

    <div class="align-items-center ecovisInternationalBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">ECOVIS International
            </p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="ecovis_insia_banner">

        <!-- <div class="position-relative">
        <img src="./ecovis-images/our_team_banner.png" class="w-100" style="height: 50vh;" alt="">
            <p class="banner_text">ECOVIS INDIA</p>
        </div> -->
        <div class=" w-100 arrow">

            <!-- <div class="border-0 kwadrat2 mt-0 mx-auto">
                <div class="trojkat2">
                    <div class="trojkat_bg2"></div>
                </div>
            </div> -->
            <!-- our team  -->
            <div class="our_team mt-5">
                <h1 class="text-center primaryHeading mb-4">A Global network working together</h1>
                <h3 class="normalText text-center">Helping your business fly</h3>
                <div class="w-75 mx-auto">
                    <img src="<?= base_url()?>assets/images/map_image/ecovis-international-world-map.png" class="w-100" alt="">
                </div>
                <div class="justify-content-around row mx-0 mb-5">
                    <div class="col-lg-9 col-md-10">
                        <div class="row mx-0">
                            <div class="col-md-4">
                                <div class="india_team_point mx-auto align-items-center flex-column border d-flex justify-content-center rounded-circle">
                                    <h1 class="mainHeading mb-3 text-danger">80+</h1>
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Operating in more than 80 countries</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="india_team_point mx-auto align-items-center flex-column border d-flex justify-content-center rounded-circle">
                                    <h1 class="mainHeading mb-3 text-danger">9000+</h1>
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Team of experts</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="india_team_point mx-auto align-items-center flex-column border d-flex justify-content-center rounded-circle">
                                    <h1 class="mainHeading mb-3 text-danger">5</h1>
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Spanning 5 continents</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-around row  mx-0">
                    <div class="col-lg-6 col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="india_team_point mx-auto align-items-center flex-column border d-flex justify-content-center rounded-circle">
                                    <h1 class="mainHeading mb-3 text-danger">15th</h1>
                                    <p class="normalText mb-0 text-center" style="width: 90%;">Ranked 15th in the world</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="india_team_point mx-auto align-items-center border flex-column d-flex justify-content-center rounded-circle">
                                    <h1 class="mainHeading mb-3 text-danger">$ 1bn</h1>
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Global revenue</p>
                                </div>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="india_team_point mx-auto align-items-center border d-flex justify-content-center rounded-circle" >
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">70+ Countries Expertise Access</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="justify-content-around row mx-0 mb-5">
                    <div class="col-lg-9 col-md-10">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="align-items-center bg-danger d-flex justify-content-center mt-5 mx-auto py-5 text-light" style="border-radius: 10px; max-height: 120px;">
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Access to accounting, tax, audit and legal professionals across the globe</p>
                                </div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-md-5">
                                <div class="align-items-center bg-danger d-flex justify-content-center mt-5 mx-auto py-5 text-light" style="border-radius: 10px;max-height: 120px;">
                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Covering ALL major economic centres</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="main-content">
                    <section class="section">
                        <div class="section-body">
                            <div class="row mx-0">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-body mb-4">
                                            <div id="visitorMap" class="position-relative" style="width: 600px; height: 700px;margin:auto;">
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 1%;right: 21%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">70+ Countries Expertise Access</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 33%;right: -25%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">2000+ Clients Advised</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 67%;right: 9%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Covering all major cities</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 23%;left: -29%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">40+ Industries Served</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="bottom: 14%;left: -18%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">50+ Years in India</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div> -->
            </div>

            <div class="">
                <p class="mb-4 mt-5 mx-auto primaryHeading px-3 text-center w-75">The name ECOVIS, a combination of the terms economy and vision, expresses both our international character and focus on the
                    future and growth of our clients.</p>
            </div>
            <div class="renduring_blogs">
                <div class="justify-content-center mx-0 row py-3">
                    <div class="col-md-8">
                        <div class=" mb-3 row" style="border-bottom: 1px solid #cd1432;">
                            <div class="col-3 px-0">
                                <p class="primaryHeading text-danger">No matter where you do business, we have specialists who can help</p>
                            </div>
                            <div class="col-9">
                                <p class="ml-3 pl-4 text-justify" style=" font-size: var(--secondry_font_size);">
                                    ECOVIS Wingrave Yeats are a proud member of ECOVIS International,
                                    a network of like minded firms delivering consistent, high-quality
                                    expertise in over 80 countries, including the major trading centres
                                    across the globe.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center mx-0 row py-3">
                    <div class="col-md-8">
                        <div class=" mb-3 row" style="border-bottom: 1px solid #cd1432;">
                            <div class="col-3 px-0">
                                <p class="primaryHeading text-danger">Global expertise with local faces</p>
                            </div>
                            <div class="col-9">
                                <p class="ml-3 pl-4 text-justify" style=" font-size: var(--secondry_font_size);">
                                    Offering the best of both worlds, we aim to combine the personal,
                                    proactive and practical approach of a local professional firm with the
                                    wealth and diversity of international experience and expertise that
                                    can be expected from a global organisation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="justify-content-center mx-0 row py-3">
                    <div class="col-md-8">
                        <div class=" mb-3 row">
                            <div class="col-3 px-0">
                                <p class="primaryHeading text-danger">It s a family affair</p>

                            </div>
                            <div class="col-9">
                                <p class="ml-3 pl-4 text-justify" style=" font-size: var(--secondry_font_size);">
                                    Each Partner is invested in growing the ECOVIS International network
                                    for our clients benefit by nurturing and developing our relationships
                                    and special family culture which is embraced by all member firms.
                                    This is why, when you come to an ECOVIS firm with a multinational
                                    service need, we help manage your project by bringing together
                                    experts from a wide range of industry sectors and disciplines to
                                    provide a service that is specially tailored to your needs.
                                </p>
                                <p class="ml-3 pl-4 text-justify" style=" font-size: var(--secondry_font_size);">
                                    “We don t put you through to just anybody, we know the right person
                                    who will work with you and us to make it a success. We know each
                                    other well and work together regularly on a range of projects".
                                </p>
                                <p class="ml-3 pl-4 mb-0 text-justify" style=" font-size: var(--secondry_font_size);">
                                    Robert McCann
                                </p>
                                <p class="ml-3 pl-4 text-justify" style=" font-size: var(--secondry_font_size);">
                                    Chairman of the Supervisory Board of ECOVIS International

                                </p>
                                <p class="ml-3 pl-4 text-justify" style=" font-size: var(--secondry_font_size);">
                                    With our commitment to high quality standards of service delivery,
                                    our partner led approach and specialist knowledge; we are a credible
                                    alternative to the larger firms in providing a seamless, affordable
                                    global solution tailored to your business needs.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/jqvmap/dist/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="./js/jqvmap/dist/maps/jquery-jvectormap-in-merc.js" charset="utf-8"></script>
    <script src="./js/javascript.js"></script>

</body>

</html>