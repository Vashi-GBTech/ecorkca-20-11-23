<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Marketing Head</title>
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
        background: url(./ecovis-images/our_team_banner.png);
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
        width: 150px;
        height: 150px;
        position: absolute;
        box-shadow: 0px 2px 3px 1px lightgray;
        background-color: whitesmoke;
    }
</style>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner  -->
    <div class="align-items-center marketing_headBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Marketing Head</p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="ecovis_insia_banner">
        <div class="mt-5 mx-auto w-75">
            <h1 class="mb-4 primaryHeading text-center">About Us</h1>
            <p class="mb-3 normalText text-justify">ECOVIS RKCA with presence and representation of firms in India having more than 5 decades of presence and offices in Major Indian cities, a
                global footprint with associates in more than 70+ countries serving clients in Strategy & Performance Consulting, On shore and Off shore Advisory, Government, Risk & Compliance, Business Support and Financial Reporting
, Legal & Litigation Services, Financial and Capital Services, Digital Transformation, Cross border and Merchant Banking Services management consulting and Wealth planning matters. Serving with core values of Responsibility towards Profession, Knowledge in People,
                Commitment towards Clients, and Accountability towards the society is our key differentiator. </p>
        </div>
        <div class="mt-5 mx-auto w-75">
            <h1 class="mb-4 primaryHeading text-center">Job role</h1>
            <p class="mb-3 normalText text-justify">We're recruiting for a Head of Marketing to manage all of our marketing initiatives, involving social media and digital marketing, along with
                advertising and creative projects. Formulation of plans to help establish our brand, allocating resources to various projects, and defining
                short and long term department goals are all tasks of the Head of Marketing. </p>
        </div>
        <div class="mt-5 mx-auto w-75 row">
            <div class="col-md-4 text-center">
                <h1 class="mb-4 primaryHeading ">Experience level</h1>
                <p class="mb-3 normalText text-justify text-center">Senior</p>
            </div>
            <div class="col-md-4 text-center">
                <h1 class="mb-4 primaryHeading">Employment type</h1>
                <p class="mb-3 normalText text-justify text-center">Full-time</p>
            </div>
            <div class="col-md-4 text-center">
                <h1 class="mb-4 primaryHeading ">Location</h1>
                <p class="mb-3 normalText text-justify text-center">Vashi</p>
            </div>
        </div>
        <div class="justify-content-center mb-5 mx-0 row" style="margin-top: 4rem; ">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="primaryHeading">Entry requirements</h1>
                        <ul style="list-style: unset;">
                            <li> Work experience as Head of Marketing or VP Marketing, preferably within our industry</li>
                            <li> Experience running successful marketing campaigns </li>
                            <li>Solid knowledge of web analytics, SEO, and Google Adwords</li>
                            <li>Experience with CRM software</li>
                            <li>Leadership skills with the ability to set and prioritize goals</li>
                            <li>Analytical mind</li>
                            <li>BSc or MSc in Marketing or relevant field</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="primaryHeading">Responsibilities</h1>
                        <ul style="list-style: unset;">
                            <li>Craft strategies for all Marketing teams, including Digital, Advertising, Communications and Creative</li>
                            <li>Set, monitor and report on team goals</li>
                            <li>Design branding, positioning and pricing strategies</li>
                            <li>Ensure our brand message is strong and consistent across all channels and marketing efforts (like events, email campaigns, web pages and promotional material</li>
                            <li>Analyze consumer behavior and determine customer personas </li>
                            <li>Identify opportunities to reach new market segments and expand market share</li>
                            <li>Monitor competition (acquisitions, pricing changes and new products and its feature</li>
                            <li>Co-ordinate sales and marketing efforts to boost brand awareness</li>
                            <li>Participate in the quarterly and annual planning of company objectives</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
     
    </div>

    <?php include_once "footer.php" ?>

    <script src="<?= base_url()?>assets/js/javascript.js"></script>

</body>

</html>