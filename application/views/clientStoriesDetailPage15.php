<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Ukraine International Airways and ECOVIS Bondar & Bondar</title>
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
                            <h5 class="primaryHeading mb-4 text-center">Ukraine International Airways and ECOVIS Bondar & Bondar</h5>
                            <p class="normalText text-justify mb-4">Ukraine International Airlines (UIA) is Ukraine’s leading airline established in 1992.</p>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">The Context</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>ECOVIS Bondar & Bondar has been acting as legal counsel to UIA and representing the corporate in various corporate and dispute resolution matters for several years.</p>
                            </div>

                        </div>
                        <hr>
                        <div class="d-flex">
                            <div class="col-md-3 primaryHeading">Our Solutions</div>
                            <div class="col-md-9 normalText text-justify mb-4">
                                <p>We have recently successfully represented UIA in several significant disputes in Ukrainian courts.</p>
                                <P>In March 2015 we proved in court the position of UIA consistent with which the Ministry of Infrastructure of Ukraine isn't authorized to issue air route operating permits. Representing UIA, we challenged the legitimacy of the Resolution of the Ministry of Infrastructure No. 245 of 23.04.2013, approving the Order of issuance and cancellation of air route operating permits. </P>
                                <P>At the top of 2014 – beginning of 2015 we successfully represented UIA in several disputes with the Ministry of Infrastructure of Ukraine with reference to the cancellation of UIA’s air route operating permits.</P>
                                <P>We also represented UIA during a long-lasting dispute with Swissport International, which commenced back in 2012. The dispute revolved around participatory interest in Interavia, one among the leading handling companies providing a comprehensive range of aircraft ground handling services and passenger services at international airports in Ukraine. At the top of November 2014 the Supreme Economic Court of Ukraine reasserted the choice recognizing UIA’s property rights over Interavia.</P>
                                <P>At the top of 2014 we also successfully represented UIA in two disputes delivered to the courts by Boryspil International Airport. Ukrainian commercial courts fully dismissed the claim to UIA to gather over UAH 37 million of debt for non-contractual ground handling services, supposedly provided by the claimant. The courts also decided to not uphold the claim to oblige UIA to enter into a further agreement to the bottom handling services agreement with Boryspil Airport. The Supreme Economic Court of Ukraine confirmed the execution of the agreement in UIA version.</P>
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
                            <img src="<?= base_url()?>assets/images/clientStoriesImages/c15_Ukraine_International_Airways_r.png" style="border-radius: 10px; filter:brightness(.5)" class="w-75 clientStoriesDetailPageImage" alt="">
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
                <a href="<?= base_url()?>clientStoriesDetailPage14"><button class="btn box_shadow btn-dark normalText">PREVIOUS STORY</button></a>
                <button class="btn box_shadow btn-danger normalText mx-2">CLIENT STORIES</button>
                <!-- <button class="btn box_shadow btn-dark normalText">NEXT STORY</button> -->
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include_once 'footer.php'; ?>
    <script>
        let Legal_Services = localStorage.getItem('Legal_Services');
        // console.log(Digital_Transformation);
        let Legal_ServicesArr = JSON.parse(Legal_Services);
        // console.log(Digital_TransformationArr);
        for (let i = 0; i < Legal_ServicesArr.length; i++) {
            var htmlClientStories = `<a href="${Legal_ServicesArr[i].pageLink}" class="text-dark" style="text-decoration:none;"><p class="Similar_stories box_shadow mt-4 normalText px-4 py-3 text-center" style="border-radius: 8px; white-space: nowrap; letter-spacing:.5px; overflow: hidden; text-overflow: ellipsis;">${Legal_ServicesArr[i].pageName}</p></a>`;
            $("#similer_stories").append(htmlClientStories);
        }

    </script> 

</body>

</html>