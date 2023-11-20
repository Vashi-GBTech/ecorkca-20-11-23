<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Rendering extensive start-up services to our clients!
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
                            <h5 class="primaryHeading mb-4 text-center">Rendering extensive start-up services to our clients!</h5>
                            <p class="normalText text-justify mb-4">KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV
                                series, was put in touch with Ecovis Sydney in November 2012 because they needed to
                                establish their imprint quickly, before Christmas!</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>KEO Films, which had recently won a contract to make an Australian adaptation of a UK TV
                                    series, was put in touch with Ecovis Sydney in November 2012 because they needed to
                                    establish their imprint quickly, before Christmas!</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>We quickly identified the best structure for combining asset protection,
                                    tax efficiency (in terms of their UK/Australia interaction), and
                                    management of their new Australian business.</p>
                                <p> This included a main trading company, a secondary company to hold a
                                    primary production property, and a third company to hold the
                                    intellectual property that they expected to develop in Australia.</p>
                                <p> We had all three companies registered with ASIC (with David Conley as
                                    resident director for each) and registered for all necessary taxes with
                                    the ATO and OSR within a few days.</p>

                                <p>We ensured that any necessary agreements between the three entities
                                    and the UK parent were considered, in order to satisfy Australian/UK
                                    laws and potential transfer pricing issues, by referring them to a local
                                    commercial lawyer.</p>
                                <p>We ensured that the client was advised on options for potential
                                    secondments of UK employees to Australia to assist in the local
                                    operations through a referral to a local immigration agent, and we
                                    enabled the client to quickly determine the best fit for their needs
                                    through a referral to several banks, and they were able to purchase.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>KEO Films were benefitted for five years in Australian but due to
                                    commercial reasons ceased operations in 2017 and reverted to a license
                                    arrangement with local third-party producers.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>David Conley, Director,

                                    ECOVIS Clarc Jacobs, Sydney, Australia

                                    david.conley@ecovis.com.au</p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c5_renderingextensive_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
               <a href="<?= base_url()?>clientStoriesDetailPage4"> <button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage6"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include_once 'footer.php'; ?>
    <script>
        let Start_upArray = localStorage.getItem('Business_Transformation');
        let Start_upArr = JSON.parse(Start_upArray);
        for (let i = 0; i < Start_upArr.length; i++) {
            var htmlClientStories = `<a href="${Start_upArr[i].pageLink}" class="text-dark" style="text-decoration:none;"><p class="Similar_stories box_shadow mt-4 normalText px-4 py-3 text-center" style="border-radius: 8px; white-space: nowrap; letter-spacing:.5px; overflow: hidden; text-overflow: ellipsis;">${Start_upArr[i].pageName}</p></a>`;
            $("#similer_stories").append(htmlClientStories);
        }

    </script>

</body>

</html>