<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Permanent Account Number (PAN) Application</title>
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

    <div class="align-items-center Private_Limited_CompanyBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Permanent Account Number (PAN) Application</p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="" id="Business_in_India"></div>
<!-- 
    <div class="bannerDD box_shadow bg-danger pb-4 pt-3">
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
                        <a href="<?= base_url()?>assets/Business_Restructuring.php" style="text-decoration: none;" ><button class="dropdown-item services" type="button">Business Restructuring</button></a>
                        <a href="<?= base_url()?>assets/Succession_Planning.php" style="text-decoration: none;"><button class="dropdown-item services" type="button">Succession Planning</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 d-md-flex text-center pl-5">
                <div class="btn-group py-3" style="width: 16%; min-width:285px;">
                    <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" onclick="showchildDD('servicebtn')" data-toggle="dropdown" aria-expanded="false">
                        Select category
                    </button>
                    <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                        <a href="<?= base_url()?>assets/Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Private Limited Company</button></a>
                        <a href="<?= base_url()?>assets/Limited_Liability_Partnerships.php"  style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
                        <a href="<?= base_url()?>assets/One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">One Person Company (OPC)</button></a>
                        <a href="<?= base_url()?>assets/Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Proprietorship</button></a>
                        <a href="<?= base_url()?>assets/Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Partnership</button></a>
                        <a href="<?= base_url()?>assets/Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Nidhi Company</button></a>
                        <a href="<?= base_url()?>assets/NGO_regestration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">NGO Registration</button></a>
                        <a href="<?= base_url()?>assets/Society_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Society Registration</button></a>

                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                        <button class="dropdown-item" type="button">Professional Tax Registration</button>
                    <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
                    <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
                    <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
                    <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
                    <button class="dropdown-item" type="button">Digital Signature Registration</button>
                    <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button>

                        <a href="<?= base_url()?>assets/Professional_Tax_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PTR</button></a>
                        <a href="<?= base_url()?>assets/GST.php" style="text-decoration: none;"><button class="dropdown-item" type="button">GST Registration</button></a>
                        <a href="<?= base_url()?>assets/epf_registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">EPF Registration</button></a>
                        <a href="<?= base_url()?>assets/ESI.php" style="text-decoration: none;"><button class="dropdown-item" type="button">ESI Registration</button></a>
                        <a href="<?= base_url()?>assets/PAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">PAN Application</button></a>
                        <a href="<?= base_url()?>assets/Digital_Signature_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Digital Signature Registration</button></a>
                        <a href="<?= base_url()?>assets/TAN.php" style="text-decoration: none;"><button class="dropdown-item" type="button">TAN</button></a>
                        
                    </div>
                    <div class="dropdown-menu w-100 baseofselectedService" id="Closure_of_ConcernCompanies">
                        <a href="<?= base_url()?>assets/Close_Your_Public_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Close Your Public Limited Company</button></a>
                        <a href="<?= base_url()?>assets/Closing_a_One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a One Person Company</button></a>
                        <a href="<?= base_url()?>assets/Closing_a_Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Partnership</button></a>
                        <a href="<?= base_url()?>assets/Closing_a_Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Proprietorship</button></a>
                        <a href="<?= base_url()?>assets/Closing_a_Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Nidhi Company</button></a>
                        <a href="<?= base_url()?>assets/Closing_a_Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Closing a Private Limited Company</button></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class=" primaryHeading text-danger mb-3 mt-5">What is PAN?</h1>

            <p class="normalText "><span class="font-weight-bold">PAN</span> (Permanent Account Number) is an identification number assigned to all taxpayers in India. PAN is an electronic system through which all tax related information for a person/company is recorded against a single PAN number. This acts as the primary key for storage of information and is shared across the country. Hence no two tax paying entities can have the same PAN. There are different categories for which different natures of PANs are given out. They are:</p>

            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Individual</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>HUF-Hindu undivided family</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Company</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Firms/Partnerships</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Trusts</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Society</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Foreigners</p>
                    </div>
                </li>

                <P class="mt-5 mb-3 primaryHeading text-danger ">Why should I register for PAN?</P>
                <P>Having a PAN provides each PAN Holder with a variety of benefits. These are :</P>

                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Proof of Identity</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Proof of Address</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Mandatory for Filing Taxes</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Registration of Business</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Financial transactions</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Eligibility to open and operate Bank Accounts</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Phone Connection</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Gas Connection</p>
                    </div>
                    <p><span class="font-weight-bold">Mutual Fund </span> PAN is beneficial to complete e-KYC for mutual fund investments.</p>

                </li>


                <P class="mt-5 mb-3 primaryHeading text-danger ">How to register for PAN</P>
                <P class="normalText">There are ways one can apply for a PAN :</P>
                <ul class="pl-2">
                    <li class="mb-1">
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>online</p>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>offline</p>
                        </div>
                    </li>
                </ul>

                <div class="normalText text-danger mb-3">ONLINE METHOD</div>

                <ul class="sessions pl-2">

                    <li class="mb-1">
                        <div class="d-flex">
                            <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                            <p>The first step for PAN application is to visit either the UTIISL website or TIN NSDL and then click on the option ‘New PAN’.</p>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="d-flex">
                            <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                            <p>Then choose the Form 49A that is available for the Indian Citizens. This includes NRE, NRI and OCL individuals also.</p>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="d-flex">
                            <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                            <p>After that, the applicant must fill in all the desired details that are asked from him in the form. These details are personal in nature and are full name of the applicant, address where the he is residing, his birth date, gender of the applicant, telephone number, details regarding the income of the individual etc.</p>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="d-flex">
                            <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                            <p>Once the details are filled in the form, the applicant must submit the form and pay a small amount of money in the form of processing fees.</p>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="d-flex">
                            <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                            <p>Then a proper print out of the form has to be taken along with an acknowledgement number. This number consists of 15 digits.</p>
                        </div>
                    </li>
                    <li class="mb-1">
                        <div class="d-flex">
                            <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                            <p>After that the applicant must put his signature in the space provided. Then the applicant is supposed to attach certain documents on the 15 digit acknowledgement provided to him.</p>
                        </div>
                    </li>
                </ul>




                <P class="mt-5 mb-3 primaryHeading text-danger ">Documents required for online submission</P>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Passport size photograph of the applicant himself.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Identity proof</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Address proof of the applicant where he is presently residing.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Demand Draft if the applicant wishes to make payment through DD. Once the PAN card application is submitted online, he must send the above mentioned documents to the office of the NSDL through post within the next 15 days. If every step has been followed properly, the applicant will receive the PAN card through post within the next 15 working days.</p>
                    </div>
                </li>
                <div class="normalText text-danger mb-3">OFFLINE METHOD</div>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p class="mb-1">For offline application of PAN card, the applicant has two options:</p>
                    </div>
                </li>
               <ul class="sessions pl-2">
               <li class="">
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px; visibility:hidden' class='far'>&#xf192;</i></span> -->
                        <p class="mb-1">Firstly, they can apply by downloading the PAN card application form available on the NSDL or UTIISL website.</p>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px; visibility:hidden' class='far'>&#xf192;</i></span> -->
                        <p class="mb-1">Secondly, they can also acquire the application form from various available agents of UTIISL.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px; visibility:hidden' class='far'>&#xf192;</i></span> -->
                        <p class="">Then, the applicant must fill in all the desired details that he must provide along with a host of several supporting documents.</p>
                    </div>
                </li>
               </ul>



                <P class="mt-5 mb-3 primaryHeading text-danger ">Documents required for offline application of PAN</P>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Photograph of the PAN card applicant.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Identity proof of the applicant.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p class="mb-0">Address proof of the applicant where he is presently residing.</p>
                    </div>
                </li>
                <li class="">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px; visibility:hidden' class='far'>&#xf192;</i></span>
                        <p class="mb-1">After that, the applicant must submit that filled out form along with the supporting documents to the office of NSDL. He is also supposed to make a nominal amount of payment upon form submission in the form of processing fee of the application process.</p>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px; visibility:hidden' class='far'>&#xf192;</i></span>
                        <p class="mb-1">If all the procedures are properly verified and the application process is completed, the process of PAN card issuance takes place where the applicant will receive the PAN card within the next 15 working days to the address mentioned by the applicant in the application form.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px; visibility:hidden' class='far'>&#xf192;</i></span>
                        <p class="normalText">There are different categories of individuals and organisations that can apply for PAN. The document requirements for each are different and can be found as under:</p>
                    </div>
                </li>

                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Individual Applicant:</b> POI/ POA, Aadhaar, Passport, Voter ID, Driving License.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Hindu Undivided Family:</b> An affidavit of the HUF issued by the head of HUF along with POI/POA details.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Firms/ Partnership (LLP): </b> Certificate of Registration issued by the Registrar of Firms/ Limited Liability Partnerships and Partnership Deed.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Trust:</b> Copy of Trust Deed or a copy of the Certificate of Registration Number issued by a Charity Commissioner.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Society:</b> Certificate of Registration Number from Registrar of Co-operative Society or Charity Commissioner.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Foreigners:</b> Passport, PIO/OCI card issued by the Indian Government, Bank statement of the residential country, Copy of NRE bank statement in India.</p>
                    </div>
                </li>




            </ul>
        </div>
    </div>


    <div class="lets_connect px-0 text-center">
       <a href="<?= base_url()?>contact_us"> <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey;cursor: pointer;">LET'S CONNECT</button></a>
        <h4 style="text-align:center;color:white;" class="mt-4 font-weight-normal">Didn’t find what you’re looking for? Write to us about your specific business needs!</h4>
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