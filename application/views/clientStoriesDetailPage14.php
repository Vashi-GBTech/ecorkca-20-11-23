<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Scenario of non-habitual tax resident in Portugal</title>
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
                            <h5 class="primaryHeading mb-4 text-center">Scenario of non-habitual tax resident in Portugal</h5>
                            <p class="normalText text-justify mb-4">Our clients' businesses are focused on providing IT services, including market observations, feasibility studies, competitive assessments, IT project management support, and standard software maintenance. </p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>As an engineer, our client chose to not found out a indebtedness company, but to register at the tax office as a self-employed entrepreneur instead. He has no employees, therefore the business activities are performed by him alone.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Ecovis's goal is to help the client reduce his tax liability in Portugal and make his business more profitable. </p>
                                <P>On his behalf we have successfully obtained irregular residency status in Portugal which allows him to benefit from a special flat tax rate of 20% for a period of 10 years. We adopted this status when the scheme was first introduced and before the tax authorities carried out internal screening procedures, which made it more difficult to achieve it in a short time. </P>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>Nowadays, our client runs a well-established commerce, which is subject to this uncommon enactment and benefits from this non-habitual inhabitant status. We too give him with other administrations, such as bookkeeping, invoicing and common charge consultancy.</p>
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
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c14_Scenario_Portugal_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage13"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage15"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
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