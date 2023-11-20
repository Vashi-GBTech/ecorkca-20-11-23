<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Tax Deduction and Collection Account Number – TAN</title>
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
            <p class="mainHeading text-center text-light">Tax Deduction and Collection Account Number – TAN
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
                        <a href="<?= base_url()?>assets/Limited_Liability_Partnerships.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
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
            <h1 class=" primaryHeading text-danger  mb-3 mt-5">What is a TAN?</h1>
            <p class="normalText">TAN stands for Tax Deduction and Collection Account Number. It is a ten digit alphanumeric number that is allotted to those who are supposed to deduct tax at source or TDS. TAN number or TAN registration is very important for businesses deducting tax at source and is required to be quoted in TDS or TCS return. Failure to apply TAN when required can attract a penalty. Once TAN is obtained, TDS returns must be filed quarterly by the business.</p>
            <!-- <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p> An LLP is a separate legal entity which allows the partners to sue each other if the need arises. Like a private limited company, even an LLP has perpetual succession, which allows the business to remain regardless of whether the partners continue to be a part of it.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p> It is also very easy to induct a new partner and transfer the partnership to them</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p> There is no limit on the number of partners an LLP can have. Also, the cost of forming an LLP is low compared to other forms and there are fewer regulations and compliance.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>An LLP can be started with the minimum amount of capital money. Capital may be in the form of tangible, movable asset like Land, machinery or intangible form</p>
                    </div>
                </li>

            </ul> -->
        </div>
    </div>


    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">Why should I apply for TAN?</h1>
            <p class="normalText">When you’re depositing tax, you must quote TAN in documents. TAN is used for deductions such as salary, interest, or dividends. When depositing tax, you must undertake these steps:</p>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p>Use Challan type 281 for deposit of tax deducted or collected at source.</p>
                </li>
                <li>
                    <p>It is important to quote the correct 10-digit TAN, along with name and address of the deductor on each challan used for depositing tax. The TAN details can be verified from the official Income Tax website <a href="www.incometaxindia.gov.in">(www.incometaxindia.gov.in)</a>, before depositing TDS or TCS.</p>
                </li>
                <li>
                    <p>For indicating separate sections and the correct nature of payment code in relevant columns, you can use separate challans.</p>
                </li>
                <li>
                    <p>TAN is a unique identification number given to those who are deducting or collecting taxes at source, on behalf of the Income Tax Department, which makes every individual tax deductor or collector identifiable by his or her TAN.</p>
                </li>
                <li>
                    <p>TDS Certificates must be issued by individuals or entities deducting or collecting tax at source. Issuance of these certificates are important so that a tax payee knows how much tax has been paid by him or her. It helps the tax payee to understand the amount of tax that has been paid and deposited with the Government. Quoting your TAN is important, so you can procure these certificates easily.</p>
                </li>
                <li>
                    <p>Generating Form 16 and Form 16A is simpler for TAN holders, through the NDSL Software.</p>
                </li>
                <li>
                    <p>Once issued, TAN is valid for lifetime, and it can be cancelled using the ‘TAN Correction Form’, if you have stopped collecting or deducting tax. It is important to have a unique TAN. In case you have multiple TANs, you must surrender the one that is not in use, and continue with a unique TAN, which you use regularly.</p>
                </li>
            </ul>
            <!-- <p class="primaryHeading text-danger mb-3 text-center">Proofs required for LLP registration</p> -->
            <!--  <p class="mb-5">One of the most important steps to be taken right in the beginning is to check if the
                name you want for your company is available. This can be done by running a search
                to check the availability against other registered names and trademarks with the
                Ministry of Corporate Affairs and the IP India website. It may happen that the name
                you want is already taken, in this case, it is important to have back up names.</p>

            <h1 class="mb-3 mt-5 primaryHeading text-danger">Proofs required for LLP registration</h1>
            <p>There are two categories of proofs required to be submitted when you’re
                registering a company. One is identity proofs, and the other is registered office
                proof. Under identity proof, you will need - </p> -->

            <!-- <h1 class="primaryHeading text-center font-weight-bold mb-4">SCANNED COPIES OF</h1> -->
        </div>

    </div>
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class=" primaryHeading text-danger mb-3">How to apply for TAN?</h1>
            <p class="normalText ">There are two modes for applying for TAN: </p>

            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Online mode</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Offline mode</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class=" normalText text-danger mb-3">OFFLINE MODE</h1>

            <ul class="pl-2 sessions">
                <li class="mb-1">
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                        <p>An application for allotment of TAN is to be filed in Form 49B in duplicate and submitted to any TIN-FC. Addresses of TIN-FCs are available at NSDL-TIN website. <a href="https://www.tin-nsdl.com">(https://www.tin-nsdl.com)</a></p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <!-- <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span> -->
                        <p>In case of an applicant, being a company which has not been registered under the Companies Act 2013, the application for allotment of Tax Deduction Account Number may be made in Form No. INC-32 (SPICe) specified under sub-section (1) of section 7 of the said Act for incorporation of the company.</p>
                    </div>
                </li>
             
            </ul>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <h1 class=" normalText text-danger mb-3">ONLINE MODE</h1>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p>On the confirmation of correct uploading of online application, an acknowledgement will be displayed on screen. The acknowledgement consists of:</p>
                    <ul class="pl-2">
                        <!-- <li class="mb-1"> -->
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Unique 14-digit acknowledgement number</p>
                        </div>
                        <!-- </li> -->
                        <!-- <li class="mb-1"> -->
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Status of the applicant</p>
                        </div>
                        <!-- </li>
                        <li class="mb-1"> -->
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Name of the applicant</p>
                        </div>
                        <!-- </li>
                        <li class="mb-1"> -->
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Contact details</p>
                        </div>
                        <!-- </li>
                        <li class="mb-1"> -->
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Payment details</p>
                        </div>
                        <!-- </li>
                        <li class="mb-1"> -->
                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Space for signature</p>
                        </div>
                        <!-- </li> -->
                    </ul>
                </li>
                <li>
                    <p> Applicant has to save the acknowledgment and should obtain a print of the same.</p>
                </li>
                <li>
                    <p> The applicant should sign the acknowledgment. Signature should only be within the box provided in the acknowledgement.</p>
                </li>
                <li>
                    <p>In case of applicants other than individual, the authorised signatory shall sign the acknowledgement and affix the appropriate seal or stamp.</p>
                </li>
                <li>
                    <p>Thumb impression, if used, should be attested by Magistrate/Notary Public/Gazetted Officer under his official seal and stamp.</p>
                </li>
                <li>
                    <p><b>Payment :</b> The applicant has to make the payment of processing fee which is Rs 55+ service tax (as applicable)</p>
                    <ul class="pl-2">
                        <!-- <li class="mb-1"> -->
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Payment can be made by</p>
                            </div>
                            <ul>
                                <div class="d-flex">
                                    <span class="pr-3"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                    <p>Demand draft</p>
                                </div>
                                <div class="d-flex">
                                    <span class="pr-3"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                    <p>Cheque</p>
                                </div>
                                <div class="d-flex">
                                    <span class="pr-3"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                    <p>E-payment (for mode and other procedure applicable in case of e-payment visit <a href="https://tin.tin.nsdl.com/tan/form49B.html">https://tin.tin.nsdl.com/tan/form49B.html</a> )</p>
                                </div>
                            </ul>
                        </div>

                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Demand draft/Cheque shall be in favour of NSDL TIN.</p>
                        </div>

                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Name of applicant and acknowledgement number should be mentioned on reverse of DD/Cheque.</p>
                        </div>

                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>DD shall be payable at Mumbai.</p>
                        </div>

                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <div class="">
                                <p class="mb-2">Applicant making payment by cheque shall deposit a local cheque (drawn on any bank) with any HDFC Bank across the country (except Dahej) . The applicant shall mention TANNSDL on deposit slip. [As amended by Finance (No. 2) Act, 2019]</p>
                                <p>On successful payment by e payment mode an acknowledgement will be displayed. Applicant shall save and print the acknowledgement and send it to NSDL as mentioned in submission of document .</p>
                            </div>
                        </div>
                        <!-- </li> -->
                    </ul>
                </li>
                <li>
                    <p>Submission of documents:</p>
                    <ul class="pl-2">
                        <!-- <li class="mb-1"> -->
                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>The duly signed acknowledgement along with DD, if any, shall be sent to NSDL at NSDL – e – Governance Infrastructure Limited, 5th floor, Mantri Sterling, Plot No. 341, Survey No. 997/8, Model colony, Near Deep Bungalow chowk, Pune – 411016.</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p>Superscribe the envelope with application for TAN – Acknowledgement number.</p>
                        </div>

                        <div class="d-flex">
                            <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                            <p> It should reach NSDL within 15 days from the date of online application</p>
                        </div>

                        <div class="d-flex flex-column">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <div class="">
                                    <p>Application will be processed only on receipt of duly signed acknowledgement and realisation of payment.</p>
                                    <P>Places from where to obtain Form 49B</P>
                                </div>
                            </div>
                            <ul>
                                <div class="d-flex">
                                    <span class="pr-3"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                    <p>Form 49B is freely downloadable from the website of Income-tax Department <a href="http://www.incometaxindia.gov.in">(http://www.incometaxindia.gov.in)</a></p>
                                </div>
                                <div class="d-flex">
                                    <span class="pr-3"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                    <p>It is also available at TIN-FCs.</p>
                                </div>
                                <div class="d-flex">
                                    <span class="pr-3"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                    <p> Legible photocopies of Form 49B or forms legibly printed exactly as per the format prescribed by Income-tax Department are also allowed to be used.</p>
                                </div>
                            </ul>
                        </div>
                    </ul>
                </li>
            </ul>
            <h1 class="primaryHeading text-danger mb-3">Proofs required for TAN Application:</h1>
            <p class="normalText mb-5"> No documents are required to be submitted along with application for allotment of TAN. However, for online application, the signed acknowledgment which is generated after filling up the form is to be forwarded to NSDL.</p>
            

        </div>
    </div>
    <div class="lets_connect px-0 text-center">
        <a href="<?= base_url()?>contact_us.php"> <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey;cursor: pointer;">LET'S CONNECT</button></a>
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