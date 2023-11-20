<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Closing a Private Limited Company</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <style>
        .sessions {
            margin-top: 2rem;
            border-radius: 12px;
            position: relative;
        }

        .sessions li:last-child {
            border: 0px;
            padding-bottom: 0;
        }

        .sessions li:before {
            content: '\2713';
            color: white;
            /* padding: 5px; */
            font-weight: 600;
            display: flex;
            padding: 0px 0px 0px 0px;
            width: 25px;
            height: 25px;
            background: #dc3545;
            /* border: 1px solid white; */
            box-shadow: 2px 2px 0px #bab5f8;
            /* box-shadow: 2px 2px 0px #bab5f8; */
            border-radius: 50%;
            position: absolute;
            left: -15px;
            top: -1px;
            justify-content: center;
            align-items: center;
            margin-bottom: 0;
        }

        .sessions li {
            padding-bottom: 1.5rem;
            border-left: 3px dashed #dc3545;
            position: relative;
            padding-left: 20px;
            margin-left: 10px;


        }
    </style>
</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner image  -->

    <div class="align-items-center One_Person_CompanyBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Closing a Private Limited Company</p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="" id="Business_in_India"></div>

    <!-- <div class="bannerDD box_shadow bg-danger pb-4 pt-3">
        <h3 class="text-center text-light mt-3">
            Your Business Need
        </h3>
        <div class="row" id="Your_Business_needs">
            <div class="col-md-6 col-sm-12 d-md-flex justify-content-end text-center pr-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
                        Select service
                    </button>
                    <div class="dropdown-menu FIRSTserviceDD w-100">
                        <button class="dropdown-item services" id="" onclick="showDD('FormationCompanies', 'Formation')" type="button">Formation</button>
                        <button class="dropdown-item services" id="" onclick="showDD('RegistrationCompanies','Registration')" type="button">Registration</button>
                        <button class="dropdown-item services" id="" onclick="showDD('Closure_of_ConcernCompanies','Closure of Concern')" type="button">Closure of Concern</button>
                        <a href="./Business_Restructuring.php" style="text-decoration: none;" ><button class="dropdown-item services" type="button">Business Restructuring</button></a>
                        <a href="./Succession_Planning.php" style="text-decoration: none;"><button class="dropdown-item services" type="button">Succession Planning</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-md-flex text-center pl-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" onclick="showchildDD('servicebtn')" data-toggle="dropdown" aria-expanded="false">
                        Select category
                    </button>
                    <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                        <a href="./Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Private Limited Company</button></a>
                        <a href="./Limited_Liability_Partnerships.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
                        <a href="./One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">One Person Company (OPC)</button></a>
                        <a href="./Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Proprietorship</button></a>
                        <a href="./Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Partnership</button></a>
                        <a href="./Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Nidhi Company</button></a>
                        <a href="./NGO_regestration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">NGO Registration</button></a>
                        <a href="./Society_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Society Registration</button></a>

                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                        <button class="dropdown-item" type="button">Professional Tax Registration</button>
                    <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
                    <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
                    <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
                    <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
                    <button class="dropdown-item" type="button">Digital Signature Registration</button>
                    <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button>

                        <a href="./Professional_Tax_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PTR</button></a>
                        <a href="./GST.php" style="text-decoration: none;"><button class="dropdown-item" type="button">GST Registration</button></a>
                        <a href="./epf_registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">EPF Registration</button></a>
                        <a href="./ESI.php" style="text-decoration: none;"><button class="dropdown-item" type="button">ESI Registration</button></a>
                        <a href="./PAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PAN Application</button></a>
                        <a href="./Digital_Signature_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Digital Signature Registration</button></a>
                        <a href="./TAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">TAN</button></a>

                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="Closure_of_ConcernCompanies">
                        <a href="./Close_Your_Public_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Close Your Public Limited Company</button></a>
                        <a href="./Closing_a_One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a One Person Company</button></a>
                        <a href="./Closing_a_Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Partnership</button></a>
                        <a href="./Closing_a_Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Proprietorship</button></a>
                        <a href="./Closing_a_Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Nidhi Company</button></a>
                        <a href="./Closing_a_Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Private Limited Company</button></a>

                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 col-md-10 ">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">Closing a Private Limited Company</h1>
            <p class="normalText">There are many reasons which lead to the closure of a private limited company. When this happens, certain steps and procedures are needed to be followed. Business owners must abide by certain legal laws and regulations when closing a private limited company.</p>

            <h1 class="mb-3 mt-5 primaryHeading text-danger">There are four ways in which a private limited company can be wound up</h1>

            <ol class="pl-4">
                <li class="mb-1 pl-2">
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                        <p><b>Selling the Company :</b> Selling a Private Limited Company is similar to voluntary winding up of a Company. By selling the major shares of the company it can be done. It is not exactly a winding up but the stakes are transferred to another individual or entity and the majority shareholders are settled of their stocks and responsibilities.</p>
                    </div>
                </li>
                <li class="mb-1 pl-2 mb-3">
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                        <p><b>Mandatory Winding Up :</b> Any company registered under Companies Act, 2013 which did an unlawful act, fraudulent act or even if the company contributed any kind of action in some fraudulent or unlawful activities then such company would be wound up mandatorily by the Tribunal. The process of mandatory winding up</p>
                    </div>
                    <ul class="pl-3">
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>The petition will be filed by the company or any contributors to the company or registrar of the companies or trade creditors of the company or central or state government.</p>
                            </div>

                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>All the documents supplemented by petition will be audited by a practising CA and the view given by the Auditor on the financial statement must be unqualified.</p>
                            </div>

                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>The Petition should be advertised in a daily newspaper at least for 14 days and the advertisement should be in English and regional language of that area.</p>
                            </div>

                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p class="mb-2">Form 11 is necessary for the order of winding up the company. Form 11 should include :</p>
                            </div>

                            <ol type="A" class="ml-3">
                                <li>Complete audited books of the accounts up to the date of the order need to be submitted.</li>
                                <li class="mb-3">Date, place, and time for the company liquidator should be provided.</li>
                                <!-- <p>The process of voluntary winding up </p> -->
                            </ol>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Assets and the documents of the assets should be surrendered.</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p class="">If the tribunal finds all the accounts are in order and all the necessary compliance have been fulfilled, the tribunal would pass the order for dissolving the company within a period 60 days of receiving the claim. After the passing of the order by the tribunal, the registrar will then issue a notice to the Official Gazette affirming that such company is dissolved.</p>
                            </div>
                        </li>

                    </ul>
                </li>
                <li class="mb-1 pl-2">
                    <p><b>Voluntary Winding Up:</b> Voluntarily winding up of a private limited company requires long procedural compliance to follow. There are certain compulsory requirements which have to be finished to close down a company voluntarily.</p>
                    <ul class="pl-3">
                        <li>
                            <p class="normalText">The process of voluntary winding up –</p>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>As per the Companies Act 2013, Board Resolution is necessary to wind up the company voluntarily. However, the majority of directors must approve for winding up.</p>
                            </div>

                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Special Resolution is necessary to wind up the company where 3/4th of the total Shareholders must cast their vote in approval of winding up the company.</p>
                            </div>

                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>The approval of the trade creditors is also necessary to wind up the company. Trade Creditors have to give their approval that they don’t have any responsibility if the company gets wound up.</p>
                            </div>

                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p class="mb-2">Declaration of Solvency has to be made by the company and the same must be accepted by the trade creditors of the company. Company’s credibility in Declaration of Solvency needs to be shown by the company.</p>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>All the above processes shall be presented and filed in the respective form, and even after the company gets wound up then also company’s name shall be forbidden for 2 years to be taken by any other company.</p>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="mb-1 pl-2">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                        <p>Defunct Company Winding Up</p>
                        <p>As per the Companies Act, 2013, a defunct Company is a company which has gained the position of a Dormant Company. The government provides some relief to such defunct or dormant company because there are no financial transactions that are carried out by the dormant companies.</p>
                        <p class="normalText">The process for winding up a defunct company-</p>
                        <p>A Defunct or Dormant Company can be wind up with an advance process which requires the submission of the STK-2 form. Hence, Form STK-2 is necessary in order to wind up a defunct company. The form STK-2 needs to be filled by the Registrar of Companies and the same needs to be duly signed by the director of the company approved by its board to do so.</p>
                        <p>So, these are the four processes by which a private limited company can be closed.</p>
                        <p>The procedure for closing a private limited company is clearly explained above. The procedure varies based on the reason for closing the company. A clear understanding of the procedure can help to complete the closure process quickly without any legal issues.</p>
                </li>
            </ol>

        </div>
    </div>

    <!-- <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 border-bottom border-danger">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">How should I register as a Private Limited Company?</h1>
            <p class="normalText">According to the Company Law, 2003, there are certain requirements that need to be met before you can register as a private limited company.</p>
            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>At least two directors and at the most fifteen directors</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>A name for it that isn’t the same as any previously registered companies or trademarked names.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Authorized capital of one lakh.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>A registered office address (Now this doesn’t mean you have to have a different office space, any address even your rented home, can be a registered address as long as it fulfills the required conditions w.r.t to NoCs etc)</p>
                    </div>
                </li>
                
            </ul>
        </div>
    </div> -->

    <!-- <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">How to register an OPC?</h1>
            <p class="normalText">Now that you’re ready to register and have put together everything that is required, here’s the next step!</p>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p>The first step is to apply for the Digital Signature Certificate (DSC) of the proposed Director.</p>
                </li>
                <li>
                    <p>Once the Digital Signature Certificate (DSC) is obtained, the next step is to apply for the Director Identification Number (DIN) of the proposed Director in SPICe Form along with the name and the address proof of the director. Form DIR-3 is the

                        option only available for existing companies. It means with effect from January 2018, the applicant need not file Form DIR-3 separately. Now DIN can be applied within SPICe form (Simplified Proforma for Incorporating Company Electronically) for up to three directors.</p>
                </li>
                <li>
                    <p>Name Approval Application: The next step while incorporating an OPC is to decide on the name of the Company. Once the name is approved by the MCA we move on to the next step.</p>
                </li>
                <li>
                    <p class="normalText">Submitting all the required documents to the Registrar of Companies:</p>
                    <div class="d-flex ml-3">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The Memorandum of Association (MoA) and Articles of Association need to be submitted. The MoA contains the objects to be followed by the Company or stating the business for which the company is going to be incorporated. The Articles of Association AoA lays down the by-laws on which the company will operate.</p>
                    </div>
                    <div class="d-flex ml-3">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p">Since there is only one Director and member, a nominee on behalf of such person has to be appointed in case of death or incapacitation. Then the nominee takes his place. His consent in Form INC-3 will be taken along with his PAN card and Aadhar Card.</p>
                    </div>
                    <div class="d-flex ml-3">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Proof of the Registered office of the proposed Company along with the proof of ownership and a NOC from the owner.</p>
                    </div>
                    <div class="d-flex ml-3">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Affidavit and Consent of the proposed Director of Form INC-9 and DIR-2 respectively and then a declaration by the professional certifying that all compliances have been made.</p>
                    </div>
                </li>
                <li>
                    <p>Filing of forms with MCA: All these documents will be attached to SPICe Form, SPICe-MOA and SPICe-AOA along with the DSC of the Director and the professional, and will be uploaded to the MCA site for approval. After uploading, Form 49A and 49B will be generated for the PAN and TAN generation of the Company which have to be uploaded to MCA after affixing the DSC of the proposed Director.</p>
                </li>
                <li>
                    <p>Issue of the certificate of Incorporation: On verification, the Registrar of Companies (ROC) will issue a Certificate of Incorporation and business can be commenced.</p>
                </li>

            </ul>


            <h1 class="mb-3 mt-5 primaryHeading text-danger">What is required to register as a One Person Company?</h1>
            <h1 class="normalText mb-3">Proofs to be given as Promoter :</h1>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Copy of Passport or PAN Card</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Copy of Passport (Foreign Nationals & NRIs) or PAN Card</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Copy of Current Bank Account Statement/Phone or Mobile Invoice/Electricity or Gas Invoice</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Scanned passport-sized photo</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p class="mb-5">Specimen autograph or impression (blank document with autograph</p>
            </div>


        </div>

    </div> -->

    <div class="lets_connect px-0 text-center">
        <a href="<?= base_url()?>contact_us"> <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey;cursor: pointer;">LET'S CONNECT</button></a>
        <h5 style="text-align:center;color:white;" class="mt-4  font-weight-normal">Didn’t find what you’re looking for? Write to us about your specific business needs!</h5>
    </div>
    <?php include_once "footer.php" ?>
    <script src="<?= base_url()?>assets/bootstrap/js/javascript.js"></script>
    <script>
        $("#servicebtn").click(function() {
            $(".FIRSTserviceDD").slideDown();
        });

        function showDD(id, name) {
            $("#servicebtn").attr("attr-selected", id);
            $(".baseofselectedService").slideUp();
            $("#servicebtn").text('').text(name);

        }

        function showchildDD(id) {
            $(".baseofselectedService").hide();
            var childId = $("#" + id).attr('attr-selected');
            $("#" + childId).slideDown();
        }

        $(document).mouseup(function(e) {
            if ($(e.target).closest(".baseofselectedService").length === 0) {
                $(".baseofselectedService").slideUp();
                $(".FIRSTserviceDD").slideUp();
            }
        });
    </script>
</body>

</html>