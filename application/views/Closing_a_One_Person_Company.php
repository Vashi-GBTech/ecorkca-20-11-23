<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Closing a One Person Company</title>
    <link rel="icon" href="./images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

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
            <p class="mainHeading text-center text-light">Closing a One Person Company
            </p>
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
    <div class="row justify-content-center mb-5 ">
        <div class="col-lg-8 col-md-10 border-bottom border-danger">
        <h1 class=" primaryHeading text-danger mb-3 mt-5">Closing a One Person Company</h1>
            <p class="normalText ">Winding up a One Person Company in India generally involves the following steps:</p>
            <p>Passing of a special resolution with the consent of 2/3rd in value of the creditors of the OPC. (This is for voluntary winding up of the company)
A notice regarding the resolution must be submitted to the relevant ROC within 10 days of its approval from the creditors. Along with this, a declaration must also be submitted stating that the OPC has no debts. If there are debts, they will be paid by selling off its assets within a year.
Filing an application with the concerned ROC to strike off the OPC along with submitting a Board Resolution in favor of winding up. In case the OPC has been inactive for one year after incorporation, then the FTE Form needs to be filed with the ROC. This should happen within 30 days from the date of signing the statement of assets and liabilities of the closing OPC.
The resolution for winding up must be advertised in the Official Gazette and a widely circulated newspaper where the head office/registered office is located.</p>
<p>A Registered Liquidator must be appointed to carry out the necessary tasks for the winding up of the OPC. This liquidator must maintain and submit all required reports and accounts to the Tribunal and RoC
Submission of the Statement of Accounts, Statement of Assets and Liabilities, Indemnity Bond, etc.</p>
<p>If the Tribunal and the Registrar are satisfied they will pass the winding up, and declare the OPC closed.</p>
           
            <!-- <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The company is unable to pay back its debts</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The tribunal orders the company to be shut down</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The company has not filed financial statements or annual returns in the previous five years continuously, the company has acted against the sovereignty and integrity of the state and India, friendly relations with foreign states, public order, decency or morality</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The company has been involved in some fraudulent activity and is guilty of misconduct</p>
                    </div>
                </li>

            </ul> -->
        </div>
    </div>

    <!-- <div class="row justify-content-center mb-5">
        <div class="col-lg-8 col-md-10 border-bottom border-danger">
        <h1 class=" primaryHeading text-danger mb-3">Winding up a One Person Company in India generally involves the following steps</h1>


            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Passing of a special resolution with the consent of 2/3rd in value of the creditors of the OPC. (This is for voluntary winding up of the company)</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>A notice regarding the resolution must be submitted to the relevant ROC within 10 days of its approval from the creditors. Along with this, a declaration must also be submitted stating that the OPC has no debts. If there are debts, they will be paid by selling off its assets within a year.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Filing an application with the concerned ROC to strike off the OPC along with submitting a Board Resolution in favor of winding up. In case the OPC has been inactive for one year after incorporation, then the FTE Form needs to be filed with the ROC. This should happen within 30 days from the date of signing the statement of assets and liabilities of the closing OPC.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The resolution for winding up must be advertised in the Official Gazette and a widely circulated newspaper where the head office/registered office is located.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>A registered Liquidator must be appointed to carry out the necessary tasks for the winding up of the OPC. This liquidator must maintain and submit all required reports and accounts to the Tribunal and RoC</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Submission of the Statement of Accounts, Statement of Assets and Liabilities, Indemnity Bond, etc.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>If the Tribunal and the Registrar are satisfied they will pass the winding up, and declare the OPC closed.</p>
                    </div>
                </li>

            </ul>
        </div>
    </div> -->
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10">
        <h1 class=" primaryHeading text-danger mb-3">Documents Required for OPC Company Closure</h1>


            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Incorporation Documents:</b> MoA/AoA, Certificate of Incorporation, PAN card, other registration certificates.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Accounting Information:</b> Most recent year’s financial statements. These must be prepared 30 days before filing the application.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Details of Activities:</b> Details of the period of time the company has been operative and when the operations were discontinued.
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>Legal Liabilities:</b> A statement regarding any pending litigations involving the company.
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>NOC from Creditors:</b> The company needs to provide an NOC for closure from creditors. The draft needs to be provided by LW experts).</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p><b>NOC from Regulatory Bodies:</b> An NoC for closure of the company must be obtained from the Income Tax Department, SEBI, RBI, etc. if relevant.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">Documents Required for OPC Company Closure</h1>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p>The first step is applying for a digital signature of the designated partners since LLP documents are filed online and need to be digitally signed.</p>
                </li>
                <li>
                    <p>The second step is applying for the DIN of all the designated partners or those intending to be designated partner of the LLP. This is made via eForm DIR-3.</p>
                </li>
                <li>
                    <p>The next step is reserving the Name. For this, an LLP-RUN (Limited Liability Partnership-Reserve Unique Name) is filed for the reservation of name of proposed LLP. Before quoting the name in the form, it is recommended the</p>
                    <p>be checked for similar names that already exist since the name will only be approved if the name is not undesirable in the opinion of the Central Government and does not resemble any existing partnership firm or an LLP or a body corporate or a trademark.</p>
                </li>
                <li>
                    <p>After reserving the name, there is incorporation. The process for incorporation is submitting FiLLiP(Form for incorporation of Limited Liability Partnership) which shall be filed with the Registrar who has jurisdiction over the state in which the registered office of the LLP is situated.</p>
                </li>
                <li>
                    <p>This step is filing the Limited Liability Partnership Agreement. This step is very important as it defines the rights you will have as a partner. The LLP agreement governs the mutual rights and duties amongst the partners and also between the LLP and its partners. The agreement becomes active when the LLP is registered via form 3 on the MCA portal and must be done within 30 days of the date of incorporation.</p>
                </li>
                <li>
                    <p>Obtaining a company seal, Permanent Account Number and Taxation Account Number.</p>
                </li>
                <li>
                    <p>Creating a current account in the company’s name with the bank.</p>
                </li>
            </ul>
          <p class="primaryHeading text-danger mb-3 text-center">Proofs required for LLP registration</p>
            

            <h1 class="primaryHeading text-center font-weight-bold mb-4">SCANNED COPIES OF</h1>
        </div>

    </div>

    <div class="row mx-0 justify-content-center mb-5">
        <div class="col-md-10">
            <div class="row">
                <div class="col-12">
                    <h1 class="primaryHeading text-danger mb-3">From Partners:</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="border px-3 border-danger d-flex justify-content-center align-items-center" style="height: 120px; border-radius:15px">
                        <div class="text-center">
                            <p class="normalText mb-0">Copy of PAN card/Passport (for Foreign Nationals and NRIs)</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="border px-3 border-danger d-flex justify-content-center align-items-center" style="height: 120px; border-radius:15px">
                        <div class="text-center">
                            <p class="normalText mb-0">Copy of AADHAR/Voter ID/Passport/Driver’s License</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="border px-3 border-danger d-flex justify-content-center align-items-center" style="height: 120px; border-radius:15px">
                        <div class="text-center">
                            <p class="normalText mb-0">Copy of bank statement/phone bill/electricity or gas bill</p>

                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <p class="normalText"><span class="font-weight-bold">P.S:</span> One of the partners must self attest the documents mentioned above. The documents must be notarised in case of foreign nationals and NRIs if currently in India or a non-Commonwealth country, and apostilled if in a Commonwealth country.</p>
                </div>



            </div>

        </div>
        <div class="col-lg-3 col-md-6 mt-4 border-bottom border-danger col-sm-12">

        </div>
    </div>
    <div class="row mx-0 justify-content-center">
        <div class="col-md-10">
            <div class="row mb-4 pb-2">
                <div class="col-12">
                    <h1 class="primaryHeading text-danger mb-3">For the office:</h1>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="border px-3 border-danger d-flex justify-content-center align-items-center" style="height: 120px; border-radius:15px">
                        <div class="text-center">
                            <p class="normalText mb-0">Copy of bank statement/phone bill/electricity or gas bill</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="border px-3 border-danger d-flex justify-content-center align-items-center" style="height: 120px; border-radius:15px">
                        <div class="text-center">
                            <p class="normalText mb-0">Copy of notarized rent agreement if rented property along with NoC from landlord</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="border px-3 border-danger d-flex justify-content-center align-items-center" style="height: 120px; border-radius:15px">
                        <div class="text-center">
                            <p class="normalText mb-0">Copy of Sale Deed/Property Deed in English in case of owned property</p>
                        </div>
                    </div>
                </div>




            </div>
            <h1 class="normalText text-center mb-4"><span class="font-weight-bold">Note:</span> Your registered office can be your residence, it does not have to be a different commercial space.</h1>
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