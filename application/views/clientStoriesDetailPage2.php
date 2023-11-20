<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - A Lending Hand for the procuration of the client!
    </title>
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
                            <h5 class="primaryHeading mb-4 text-center">A Lending Hand for the procuration of the client!</h5>
                            <p class="normalText text-justify mb-4">With the mission of owning and operating high-quality wireless infrastructure sites in stable markets, PTI was established in the year 2013.</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>In the initial stage, PTI commissioned us to convert the annual financial statements of its company in Colombia from IFRS to US GAAP. They valued Ecovis' work ethic and accordingly hired us to handle their tax services in Costa Rica. In the meantime, the company's CEO and CFO have confirmed that it intends to contract services with us in all other locations.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Ecovis Costa Rica offers the client a fanatical service supervised by its accounting and tax partner. Our client was positively affected by Ecovis’ prompt responses to their requests. The PTI account was once handled by an esteemed international skilled services firm. Having compared our services with theirs, our client determined to award Ecovis with their account.</p>

                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Ecovis is operating PTI’s tax matters in Costa Rica and will be extending its range of services to PTI both in Costa Rica and to all their other locations.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>ECOVIS is in joint efforts with Alberto Porras Rojas, Partner, ECOVIS GCF Costa Rica</p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c2_lendinghand_r.jpg" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage1"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
               
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage3"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
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