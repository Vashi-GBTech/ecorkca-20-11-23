<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - We help the private bank with anti-money washing and counter-terrorism financing compliance</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

</head>

<body>
    <!-- header -->
    <?php include_once 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-4">
                <a href="<?= base_url()?>client_stories" class="text-dark"><span class="px-3 py-1"><i class="fa-solid fa-arrow-left-long"></i></span></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-11">
                <div class="row">
                    <div class="col-md-7">
                        <!-- <div class="col-md-8"> -->
                        <div>
                            <h5 class="primaryHeading mb-4 text-center">We help the private bank with anti-money washing and counter-terrorism financing compliance</h5>
                            <p class="normalText text-justify mb-4">Uruguay’s second most important private bank was gained by an international bank. Thus, the local bank was obliged to adjust to the rules and controls of its modern head office.</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>In order to comply with head office rules relating to the avoidance of money laundering and the financing of terrorism, data records on clients considered high-risk had to be analyzed to meet the requests of head office’s ask for the data contained in these records.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Data records relating to all possibly high-risk clients were analyzed and checked to guarantee that all required data was total in arrange to comply with head office rules and directions. All lost data was recognized and along these lines gotten by the bank. Hence compliance was effectively accomplished and head office lauded the bank for its execution.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>We have a skilled group of experts at the bank always overhauling data records and guaranteeing that head office rules and directions are being complied with.</p>
                            </div>
                        </div>
                        <hr>
                        <!-- <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>David Conley, Director,

                                    ECOVIS Clarc Jacobs, Sydney, Australia

                                    david.conley@ecovis.com.au</p>
                            </div>
                        </div> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c10_We_help_the_private_bank_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
                        </div>
                        <div class="">
                            <h4 class="text-center mainHeading mt-5 border-top pt-5">Similar stories</h4>
                            <div id="similer_stories"></div>


                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <a href="<?= base_url()?>clientStoriesDetailPage9"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage11"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include_once 'footer.php'; ?>
    <script>
        let FinanceArray = localStorage.getItem('FinanceArray');
        let financeArr = JSON.parse(FinanceArray);
        for (let i = 0; i < financeArr.length; i++) {
            var htmlClientStories = `<a href="${financeArr[i].pageLink}" class="text-dark" style="text-decoration:none;"><p class="Similar_stories box_shadow mt-4 normalText px-4 py-3 text-center" style="border-radius: 8px; white-space: nowrap; letter-spacing:.5px; overflow: hidden; text-overflow: ellipsis;">${financeArr[i].pageName}</p></a>`;
            $("#similer_stories").append(htmlClientStories);
        }

    </script>

</body>

</html>