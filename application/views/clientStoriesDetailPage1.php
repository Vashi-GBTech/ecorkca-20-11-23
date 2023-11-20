<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Combined efforts bagging successful outcomes!
    </title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

</head>

<body>
    <!-- header -->
    <?php include_once 'header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-4">
                <a href="<?= base_url()?>assets/client_stories" class="text-dark"><span class="px-3 py-1"><i class="fa-solid fa-arrow-left-long"></i></span></a>
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
                            <h5 class="primaryHeading mb-4 text-center">Combined efforts bagging successful outcomes!</h5>
                            <p class="normalText text-justify mb-4">The main motive of our company which is completely aimed at is to render professional services to its potential clients from different fields of the varied economy sectors. Out of the services facilitated so far, in the year 2015, one of our clients in need of the services was a non-profit organization whose functionality was for the accommodation services, gym facilities, social events, restaurants and sports events, etc.</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>The organization from us needed to identify and detect opportunities for a positive outcome in determining the cash flow.</p>
                                <P>After going into an in-depth and vast and comprehensive assessment, we could detect drawbacks in terms of accession of goods & services and decentralization or fragmentation of purchases carried out in the absence of the policies that defined the basis of the goods and services. </P>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>In conjunction with the GIA Integral Supply Management, we formulated a plan to achieve initial success in terms of influencing cash flow, and a corresponding plan to integrate the procedure into the client’s organizational culture and build the supply management platform that would allow flow with transparency according to policies defined by senior management. Henceforth, the arbitration attained achieved savings within the region of 11% of the total purchases made. This percentage, further resulted in utilization, as the basis for determination of the cost of the consultancy service facilitated. </p>
                                
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Presently, the client is enjoying the perks of savings achieved by applying our methodology, plan, and strategies, and by making an enhancement to its technological platform. </p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>ECOVIS is in joint efforts with Rodrigo Moreno Navarrete, Chief Executive Officer, ECOVIS Colombia </p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c1_baggingoutcomes_r.jpg" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <!-- <button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button> -->
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>assets/clientStoriesDetailPage2"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
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