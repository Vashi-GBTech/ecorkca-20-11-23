<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Goods and Services Tax (GST) Registration</title>
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
            <p class="mainHeading text-center text-light">Goods and Services Tax (GST) Registration</p>
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
            <p class="normalText mb-3 mt-5">GST Registration provides business organisations with a special number from the tax authorities. The purpose of this number is to collect tax on the government’s behalf and avail input tax credit.</p>
            <h1 class=" primaryHeading text-danger">Proofs required for GST Registration</h1>
            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>PAN Card of the Business or Applicant.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Identity and Address Proof along with Photographs.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>The following persons are required to submit their ID and address proof along with photographs. For ID proof, documents like PAN, passport, driving license, aadhaar card or voters identity card are eligible. For address proof, documents like passport, driving license, aadhaar card, voters identity card and ration card are eligible.</p>
                    </div>
                    <ul>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Proprietary Concern – Proprietor</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Partnership Firm / LLP – Managing/Authorized/Designated Partners The personal details of all partners need to be submitted. (The photos of only ten partners including the Managing Partner’s must be submitted)</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Hindu Undivided Family – Karta</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Company – Managing Director, Directors, Authorised Person</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Trust – Managing Trustee, Trustees, and Authorised Person</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Association of Persons or Body of Individuals – Members of the Managing Committee. The personal details of all members are to be submitted. (The photos of only ten members including the Chairman must be submitted)</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Local Authority – CEO or his equivalent</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Statutory Body – CEO or his equivalent</p>
                            </div>
                        </li>
                        <li class="mb-1">
                            <div class="d-flex">
                                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                                <p>Others – Person(s) in Charge</p>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Business Registration Document.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Bank Account Proof.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Digital Signature (hence Digital Signature Certificate must be obtained beforehand).</p>
                    </div>
                </li>
                <P>Proof of business registration must be also submitted for all types of entities except proprietorships.</P>
                <P>In case of partnership, the partnership deed is required to be submitted. In case of LLP or Company, the Certificate of incorporation from MCA must be provided. For other types of entities, registration certificate can be provided.</P>
            </ul>
        </div>
    </div>

    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <!-- <h1 class=" primaryHeading text-danger  mb-3 mt-5">Address Proof for Place of Business</h1> -->
            <h1 class=" primaryHeading text-danger mb-3 mt-4">How to register as a private limited company?</h1>
            <p class="normalText mb-3">Now that you’re ready to register and have put together everything that is required, here’s the next step!</p>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p>Apply for a Digital Signature Certificate. This can be obtained from one of six private agencies authorized by MCA 21. Company directors must submit the prescribed application form along with proof of identity and address.</p>

                </li>
                <li>
                    <p>Apply for a Director Identification Number. For this, you must first obtain a provisional DIN by filing application Form DIN-1 online. This must then be signed and sent to the ministry along with proof of identity and address. Once approved, a permanent DIN is issued.</p>

                </li>
                <li>
                    <p>Registering the company name.</p>

                </li>
                <li>
                    <p>Submitting unsigned copies of the Memorandum of Association and the Articles of Association for stamping.</p>

                </li>
                <li>
                    <p>Obtaining the Certificate of Incorporation.</p>

                </li>
                <li>
                    <p>Obtaining a company seal, Permanent Account Number and Taxation Account Number.</p>

                </li>
                <li>
                    <p> Creating a current account in the company’s name with the bank.</p>
                    <P>Registering your company helps enhance visibility and provides advantages over unregistered companies.</P>
                    <P>One of the most important steps to be taken right in the beginning is to check if the name you want for your company is available. This can be done by running a search to check the availability against other registered names and trademarks with the Ministry of Corporate Affairs and the IP India website. It may happen that the name you want is already taken, in this case, it is important to have back up names.</P>

                </li>
            </ul>
            <p class="primaryHeading text-danger mb-3 ">Proofs required to register as a Private Limited Company?</p>
            <p class="mb-3">There are two categories of proofs required to be submitted when you’re registering a company. One is identity proofs, and the other is registered office proof. Under identity proof, you will need -</p>
     
            <ul class="pl-2">
            <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Scanned copy of PAN Card or Passport (Foreign Nationals & NRIs)</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Scanned copy of Voter’s ID/Passport/Driver’s License</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Scanned copy of the latest Bank Statement/Telephone or Mobile Bill/Electricity or Gas Bill</p>
                    </div>
                </li>
            </ul>
            <p class="normalText">Under registered office proof, one requires</p>
            <ul class="pl-2">
            <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>A copy of the electricity/phone/water bill</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>NoC from the landlord in the case of rented spaces along with a copy of the notarised rental agreement</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>A copy of the sale deed/property deed in case of owned property</p>
                    </div>
                </li>
            </ul>
            <h1 class="normalText  mb-4"><span class="font-weight-bold">Note:</span> Your registered office can be your residence, it does not have to be a different commercial space.</h1>

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