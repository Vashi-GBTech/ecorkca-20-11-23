<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Offering continuous back to outside bank department with administrative reporting
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
                            <h5 class="primaryHeading mb-4 text-center">Offering continuous back to outside bank department with administrative reporting</h5>
                            <p class="normalText text-justify mb-4">A department of a foreign bank was subject to certain limitations on enlisting proficient staff</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>The bank is required to comply with the rules of the Central Bank, which set out the prerequisites for guaranteeing the proper bookkeeping of operations as well as minimizing assess bookkeeping and compliance dangers, but did not have a adequate number of proficient staff to bargain with this.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>With the day by day onsite back of one of our experts and help given a multidisciplinary group, methods for the bookkeeping of operations, the arrangement of data complying with the rules of the Central Bank, the administration of every day operational issues, and month to month and yearly charge arranging were looked into.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>We have a lasting group at the bank working on this task and it is presently the fourth successive year in which we have performed these assignments to our client’s fulfillment.</p>
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
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c9_Offering_continuous_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage8"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage10"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include_once 'footer.php'; ?>

    <script>
        let Accounting = localStorage.getItem('Accounting');
        // console.log(Digital_Transformation);
        let AccountingArr = JSON.parse(Accounting);
        // console.log(Digital_TransformationArr);
        for (let i = 0; i < AccountingArr.length; i++) {
            var htmlClientStories = `<a href="${AccountingArr[i].pageLink}" class="text-dark" style="text-decoration:none;"><p class="Similar_stories box_shadow mt-4 normalText px-4 py-3 text-center" style="border-radius: 8px; white-space: nowrap; letter-spacing:.5px; overflow: hidden; text-overflow: ellipsis;">${AccountingArr[i].pageName}</p></a>`;
            $("#similer_stories").append(htmlClientStories);
        }

    </script>

</body>

</html>