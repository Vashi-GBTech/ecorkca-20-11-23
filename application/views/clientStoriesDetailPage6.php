<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Assistance provided to electrical contractors for avoiding double taxation.
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
                            <h5 class="primaryHeading mb-4 text-center">Assistance provided to electrical contractors for avoiding double taxation.</h5>
                            <p class="normalText text-justify mb-4">Our client is a massive electrical contracting business located in New Zealand. The company has developed industrial electrical and control systems and expanded its activities to Australia. </p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Our client required master counsel on fitting Australian tax assessment alternatives to particularly dodge twofold tax collection and adjust its monetary detailing periods from the Australian monetary year finishing on 30 June to Modern Zealand’s assess year finishing on 31 Walk. In expansion, ECOVIS KGA given help with the set-up and audit of modern finance conventions.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>We checked on the company’s exchanging history and corporate structure that had been set up in Australia by past consultants. We at that point considered an assortment of arrangements with a pro/con investigation, and in discussion with ECOVIS KGA prescribed the ideal arrangement for our client. This approach permitted us to supply the client with an encompassing and down to business survey of the situation and present them with the foremost reasonable arrangements to their problem.</p>

                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>ECOVIS KGA’s suggestions were acknowledged and the client continued with execution. We are presently working to advance interchange budgetary year-end announcing and are helping with bookkeeping and finance work set-up.</p>
                            </div>
                        </div>
                        <hr>
                        <!-- <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p> ECOVIS is in joint efforts withChristian Koch, lawyer</p>
<P>ECOVIS Legal Spain</p>
                            </div>
                        </div> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c6_assisstanceprovided_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage5"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage7"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
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