<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Facilitation of collective outsources accounting, local tax compliance, and company formation services!</title>
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
                            <h5 class="primaryHeading mb-4 text-center">Facilitation of collective outsources accounting, local tax compliance, and company formation services!</h5>
                            <p class="normalText text-justify mb-4">The client is a subsidiary of a multinational company based in Turkey that functions in various fields of batteries, chargers, accessories for motive, etc.</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Our client was looking forward to the expansion of their business into Tunisia and therefore they collaborated with us- ECOVIS Kapital Network (Istanbul) They were expecting us to lend a hand and support them in the sectors for the provision of outsourcing accounting, local tax compliance and reporting services in Tunisia.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>The client was quite delighted and satiated with the work and the quality services that ECOVIS Kapital Network (Istanbul) has been offering them contrary to their activities in Turkey, they wanted to progress with ECOVIS in Tunisia, too. As a result, we connect our clients in contact with our valuable, skilled, and experienced partners at ECOVIS KDH Partners Tunisia to support them with the same quality standards that the client is expecting.</p>

                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>ECOVIS KDH Partners Tunisia has successfully been offering our client with outsource accounting, bookkeeping, local tax compliance, and reporting services of a high-quality standard. </p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p> ECOVIS is in jointefforts with SerhatUmut Aydın, Partner</p>
                                <P>ECOVIS Kapital Network, İSTANBUL,
                                </p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c3_Facilitationofcollective_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage2"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage4"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include_once 'footer.php'; ?>

    <script>
        let Business_TransformationArray = localStorage.getItem('Business_Transformation');
        let Business_TransformationArr = JSON.parse(Business_TransformationArray);
        for (let i = 0; i < Business_TransformationArr.length; i++) {
            var htmlClientStories = `<a href="${Business_TransformationArr[i].pageLink}" class="text-dark" style="text-decoration:none;"><p class="Similar_stories box_shadow mt-4 normalText px-4 py-3 text-center" style="border-radius: 8px; white-space: nowrap; letter-spacing:.5px; overflow: hidden; text-overflow: ellipsis;">${Business_TransformationArr[i].pageName}</p></a>`;
            $("#similer_stories").append(htmlClientStories);
        }

    </script>

</body>

</html>