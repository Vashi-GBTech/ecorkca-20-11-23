<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Facilitating assistance for the expansion of Spanish automotive components producer.</title>
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
                            <h5 class="primaryHeading mb-4 text-center">Facilitating assistance for the expansion of Spanish automotive components producer.</h5>
                            <p class="normalText text-justify mb-4">Our consumer could be a major transnational company within the automotive sector, with varied plants in Spain that manufacture automotive components. The corporate required to expand one in all its plants in Northern Spain to extend its production capacity.</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>The client were expecting from us to extend its premises as the current production capacity was not large enough to satisfy the demands of the end clients. </p>
                                <P>Our client sought our advice on the feasibility of forming a new company and on real estate matters. To reduce costs, the company needed the expansion to be close to its current plant, and it wanted to understand all of the legal risks involved. </P>
                                <P>Some of the plots where the new plant could be built were the subject of an insolvency proceeding, others had zoning regulations issues, and still others had multiple owners and were difficult to manage. The client also needed to acquire heavy machinery, and because financing the operation involved a variety of options, the client enlisted the assistance of ECOVIS LEGAL SPAIN.</P>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>After excluding the advisability of incorporating a replacement company thanks to the issues which might arise in co-ordinating workforce and cross-production issues, we reviewed the varied options hospitable the client, studied the legal situation of every of the plots of land offered to the client and made a preliminary investigation of things of every piece of land within the property register. We then made an inventory of the pros and cons of every plot of land and, along side the client, we ranked the risks the client might encounter. We had in touch in mind the urgency with which the client needed to be ready to construct the extension of the plant and thus the need for more or fewer legal formalities within the acquisition of the plot of land. ECOVIS LEGAL SPAIN also presented different options for the acquisition of the plot of land, either through direct acquisition, a rental agreement with a sale option or a financial leasing agreement. along side the client we chose the simplest available option, taking into consideration all the preceding factors. it had been vital to act during a very co-ordinated manner with the client so on meet its real needs.</p>

                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Outcome</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>ECOVIS LEGAL SPAIN is now implementing the approved strategy, negotiating the different contracts with the owner of the selected plot of land, the building company and the provider of machinery, in order to assure that all three operations are coordinated correctly and to allow the client to expand its facilities and incept the operation of the plant in time to meet the requirements of its end clients.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex mb-5">
                            <div class="col-md-3 primaryHeading">Association</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p> ECOVIS is in joint efforts withChristian Koch, lawyer</p>
                                <P>ECOVIS Legal Spain</p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="col-md-5">
                        <p class="text-center mb-3"> Category: <span>Start-up</span>, <span>4th June, 2022</span></p>
                        <div class=" text-center">
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c4_facilitating_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage3"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <a href="<?= base_url()?>clientStoriesDetailPage5"><button class="btn box_shadow btn-dark normalText">NEXT STORY</button></a>
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