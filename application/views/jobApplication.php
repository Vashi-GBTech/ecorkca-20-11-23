<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Job Application</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">


    <!-- custom css link  -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <style>
        #location_icon {
            font-size: 50px;
            margin-right: 8%;
            margin-top: 5px;
            color: #cd1432;
        }

        .locations {
            margin-left: 25%;
            margin-top: 12%;
        }

        #comm_icon {
            font-size: 50px;
            /* color: #cd1432;
        margin: 15px; */
        }

        .communication {
            margin-left: 25%;
            margin-top: 10%;
        }

        .lets_connect {
            background-color: #cd1432;
            height: 30%;
            margin: 10px;
        }

        .lets_connect_button {
            background-color: transparent;
            border-radius: 5px;
            width: 15%;
            height: 15%;
            color: white;
            margin-top: 0px;
            border: 1px solid white;
            justify-content: center;
        }
    </style>
</head>

<body>

    <!-- header -->
    <?php include_once "header.php" ?>

    <!-- banner   -->
    <div class="align-items-center jobapplicationBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Work with Us
            </p>
        </div>
    </div>
    <div class="banner ">
        <!-- <img src="./ecovis-images/careers_bannercroped.png" class="w-100" alt=""> -->

        <!-- <div class="bannerDD pb-4 pt-2">
            <h3 class="text-center text-light mt-3">
                Let’s Connect
            </h3>
            <div class="font-weight-bold mb-2 mt-4 mx-auto problemDD py-2 text-light text-center" style="width: 60%;">
                <p class="mb-0">Career routes aren't direct all the time. We enroll a different blend of people by
                    taking a
                    gander at your true capacity and desire. Our wide scope of administration and industry
                    specialisms guarantees there's </p>
            </div>

        </div> -->

        <div class="justify-content-around mt-5 mx-0 row">
            <div class="col-md-10">
                <div class="align-items-center mb-4 row">
                    <div class="col-md-6">
                        <h3 class="mb-4 mt-4 text-center">Job Application</h3>
                        <form action="" class="form-group" method="post">
                            <input type="text" name="" id="" class="form-control bg-light box_shadow p-2  mx-auto w-75" placeholder="Name">
                            <input type="text" name="" id="" class="form-control bg-light box_shadow p-2  mt-4 mx-auto w-75" placeholder="Mobile No.">
                            <input type="text" name="" id="" class="form-control bg-light box_shadow p-2  mt-4 mx-auto w-75" placeholder="Email">
                            <select name="functional_area" id="functional_area" class="form-control box_shadow mt-4 bg-light p-2  mx-auto w-75">
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                                <option>Functional Area</option>
                            </select>
                            <input type="file" name="" id="" class="form-control bg-light box_shadow p-2  mt-4 mx-auto w-75" placeholder="Upload CV in Doc or Pdf format">
                            <button type="submit" class="form-control box_shadow mt-5 border-0 bg-danger mt-4 text-light font-weight-bold mx-auto w-25" style="box-shadow: 0px 2px 4px 0px gray;">SUBMIT</button>
                        </form>
                    </div>
                    <div class="col-md-6">

                        <div class="mx-auto normalText text-justify w-75">
                            <p>At Ecovis, we re pleased to develop our own ability by
                                fostering our people right from the start through to
                                proficient capabilities and beyond. We likewise value
                                the benefit of enrolling experienced staff with in depth
                                knowledge and skills. This assists us to infuse and
                                curate new ideas and perspective to our team.</p>
                        </div>
                        <!-- <div class="box_shadow pb-4 pt-4 px-5 text-center">
                            <h1 class="primaryHeading mb-3">JOBS AT ECOVIS INDIA</h1>
                            <p class="mb-4">If you are intrigued with our work join us and we can devlop together</p>
                            <div class="">
                                <button class="btn btn-danger normalText text-light mb-2"> <span>CURRENT VACANCIES</span> <span><i class="fa-solid text-light font-weight-bold fa-angle-right"></i></span></button>

                            </div>
                        </div> -->
                        <!-- <div class="locations d-flex align-items-center">
                            <i class="fa-solid fa-location-dot" id="location_icon"></i>
                            <a href="./ecovis_india.html">
                                <button type="submit" class="bg-danger box_shadow btn font-weight-bold  text-light">VIEW OUR
                                    LOCATIONS</button>
                            </a>
                        </div> -->
                        <!-- <div class="communication">
                            <i class="fa-envelope fa-solid mx-3 text-danger" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-linkedin" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-instagram" id="comm_icon"></i>
                            <i class="fa-brands mx-3 text-danger fa-facebook" id="comm_icon"></i>
                        </div> -->

                    </div>
                </div>
            </div>

        </div>
      
        <!-- <div class="row justify-content-around mx-0">
            <div class="col-md-9">
                <h4 class="mb-4 mt-4 text-center">Want to know more about us?Leave us a message</h3>
                    <form action="" class="form-group mb-5" method="post">
                        <div class="d-flex justify-content-between mb-5">
                            <input type="text" name="email" id="email" class="form-control bg-light box_shadow ml-4" style="width:40% !important"  placeholder="Email"
                            style="margin-right:15px;">
                            <div class="d-flex justify-content-between" style="width:55% !important">
                                <input type="text" name="first_name" id="first_name" class="form-control box_shadow bg-light mr-3"
                                placeholder="First Name">
                            <input type="text" name="last_name" id="last_name" class="form-control box_shadow bg-light "
                                placeholder="Last Name">
                            </div>
                       
                        </div>
                        
                        <span style="font-size:20px;">Your message or query : </span>
                        <textarea class="form-control box_shadow bg-light mt-2 mb-3" rows="3" style=" border-radius: 6px;"></textarea>
                        <p style="font-size:20px;" class="mb-2 text-center">Our team will get in touch with you as soon as possible</p>
                        <div class="text-center">
                        <button type="submit" class="bg-danger btn box_shadow font-weight-bold text-light" style="width: 12%;">SUBMIT</button>

                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-6">
                           
                        </div>
                    </div>
            </div>

        </div> -->
    </div>
    <div class="lets_connect px-0 m-0 text-center">
    <a href="<?= base_url()?>careers"><button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey">CAREER PATHS</button></a>

            <h3 class="mt-3 text-center text-light ">Explore our job vaccancies</h3>
        </div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

</body>

</html>