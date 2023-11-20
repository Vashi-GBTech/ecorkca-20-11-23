<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Jobs</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/bootstrap.css">

    <!-- custom css link  -->
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">

    <!-- box icons link  -->
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- bootstrap javascript cdn  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>

    <!-- <header id="Header"></header> -->

    <!-- banner   -->
    <div class="banner ">
        <img src="<?= base_url()?>assets/ecovis-images/careers_bannercroped.png" class="w-100" alt="">

        <div class="bannerDD border mx-auto pb-4 position-absolute pt-2 w-75" >
            <h3 class="text-center text-light mt-3">
                Your Biggest challenge?
            </h3>
            <div class="align-items-center bg-light mb-2 d-flex font-weight-bold justify-content-between mt-4 mx-auto problemDD px-3 py-2 rounded text-dark w-25"
                style="
            box-shadow: 0px 1px 3px 0px darkslategrey;">
                <p class="mb-0">SELECT YOUR PROBLEM</p>
                <span><i class="fa-solid fa-caret-down text-danger"></i></span>
            </div>

            <div id="gendererror"></div>
            <div class="select_location border p-2 mb-3 rounded" id="gender_value"
                style="background: #ededed; width: 95%; margin: auto; display: none;" id="">
                <p class="border-dark form-control mb-2 mx-auto genderValue activeSelection"
                    onclick="genderValue(this,'Male');" style="border-radius: 7px; width: 95%; ">Male</p>
                <p class="border-dark form-control mb-2 mx-auto   genderValue" onclick="genderValue(this,'Female');"
                    style="border-radius: 7px; width: 95%;">Female</p>
                <p class="border-dark form-control mb-2 mx-auto genderValue" onclick="genderValue(this,'Other');"
                    style="border-radius: 7px; width: 95%;">Other</p>
            </div>
        </div>
    </div>

    <!-- JOB DETAILS  -->

    <div class="job_details" style="margin-top:150px;">
        <div class="w-75 mx-auto">
            <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                <div class="col-md-3 px-0 ">
                    <h6 class="bg-danger job-title w-75 text-center font-weight-bold mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">ASSOCIATE</h6>
                </div>
                <div class="col-md-9">
                    <h4 class="font-weight-bold mt-3 py-2">ACCOUNTANT</h4>
                    <p class="w-75" style="font-size: 19px; font-weight: 500;">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                    <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger font-weight-bold text-light">VIEW DETAILS</button></div>
                </div>

            </div>
            <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                <div class="col-md-3 px-0 ">
                    <h6 class="bg-danger job-title w-75 text-center font-weight-bold mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">ASSOCIATE</h6>
                </div>
                <div class="col-md-9">
                    <h4 class="font-weight-bold mt-3 py-2">ACCOUNTANT</h4>
                    <p class="w-75" style="font-size: 19px; font-weight: 500;">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                    <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger font-weight-bold text-light">VIEW DETAILS</button></div>
                </div>

            </div>
            <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                <div class="col-md-3 px-0 ">
                    <h6 class="bg-danger job-title w-75 text-center font-weight-bold mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">ASSOCIATE</h6>
                </div>
                <div class="col-md-9">
                    <h4 class="font-weight-bold mt-3 py-2">ACCOUNTANT</h4>
                    <p class="w-75" style="font-size: 19px; font-weight: 500;">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                    <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger font-weight-bold text-light">VIEW DETAILS</button></div>
                </div>

            </div>
            <div class="row mx-0 border border-danger mb-4" style="border-radius: 7px;     box-shadow: 0px 1px 5px 1px #cececc">
                <div class="col-md-3 px-0 ">
                    <h6 class="bg-danger job-title w-75 text-center font-weight-bold mt-3 py-2 text-light" style="    box-shadow: 0px 1px 5px 1px grey">ASSOCIATE</h6>
                </div>
                <div class="col-md-9">
                    <h4 class="font-weight-bold mt-3 py-2">ACCOUNTANT</h4>
                    <p class="w-75" style="font-size: 19px; font-weight: 500;">king for enthusiastic and ambitious individuals, who enjoy working collaboratively and look beyond just 'doing the job'. In return,</p>
                    <div class="my-4 pt-2 text-center w-75"><button style="    box-shadow: 0px 1px 5px 1px grey" class="btn btn-danger font-weight-bold text-light">VIEW DETAILS</button></div>
                </div>

            </div>
        </div>
    </div>
    <div class="lets_connect px-0 text-center">
        <h3 style="text-align:center;color:white;" class="mt-3 mb-5">Didn't find your preferred job role? Connect with us anyway</h3>
            <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey">LETS CONNECT</button>
    </div>

    <!-- footer  -->
    <?php include_once "footer.php" ?>

</body>

</html>




