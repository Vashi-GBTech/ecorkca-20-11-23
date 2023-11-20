<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Proprietorship</title>
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
            <p class="mainHeading text-center text-light">Proprietorship</p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="" id="Business_in_India"></div>

    <!-- <div class="bannerDD box_shadow bg-danger pb-4 pt-3">
        <h3 class="text-center text-light mt-3">
            Your Business need
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
                        <a href="<?= base_url()?>assets/Business_Restructuring.php" style="text-decoration: none;"><button class="dropdown-item services" type="button">Business Restructuring</button></a>
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
        <div class="col-lg-8 col-md-10">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">What is a Sole Proprietorship?</h1>
            <p class="normalText">A sole proprietorship is when a business is owned and governed by one person. This type of business can be started in 15 days. This makes it one of the most popular kinds of businesses to begin in the unsystematic sector, specifically among merchants and small traders. For a sole proprietorship business, registrations are not required as they are identified by alternate registrations such as GST registrations. However, its liability is unlimited and it does not have an eternal succession.</p>

            <h1 class="mb-3 mt-5 primaryHeading text-danger">Why should I register as a Sole Proprietorship?</h1>
            <!-- <p class="normalText">Unlike public limited company & private limited company, the liability of the member will be to the extent he has invested in the business. In an OPC, one person holds all the shares and has complete authority over the operation of the business.</p> -->

            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Ease of setting up : A sole proprietorship business does not have any specific registration requirements and the proprietor’s legal identity is used by the business. Hence, a proprietorship can be started without any registration.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Ease of operation : Decisions happen faster since there is only one decision maker. There is no concept of a board meeting or approval from other persons in a proprietorship firm.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>No profit sharing : No other business, other than that of a sole proprietorship and one person company, entitles the owner as the sole beneficiary of profits. In all other types of an entity like a partnership, LLP or company, profit has to be shared with at least one other person.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Lower compliance requirements since a proprietorship firm is not registered with any Government authority like the Ministry of Corporate Affairs. Further, the proprietor would only have to file income tax returns if the firm has taxable income of more than Rs.2.5 lakhs per annum.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Lower tax liability due to a variety of deductions available to the sole proprietorship setting.</p>
                    </div>
                </li>
            </ul>
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

    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10 ">
            <!-- <h1 class="mb-3 mt-5 primaryHeading text-danger">How to register as a sole proprietorship?</h1> -->
            <!-- <p class="normalText">Now that you’re ready to register and have put together everything that is required, here’s the next step!</p> -->
            <!-- <ul class="mb-4 pb-1 pl-3 sessions">
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
                    <p>
                        The Memorandum of Association (MoA) and Articles of Association need to be submitted. The MoA contains the objects to be followed by the Company or stating the business for which the company is going to be incorporated. The Articles of Association AoA lays down the by-laws on which the company will operate.</p>


                    <p>Since there is only one Director and member, a nominee on behalf of such person has to be appointed in case of death or incapacitation. Then the nominee takes his place. His consent in Form INC-3 will be taken along with his PAN card and Aadhar Card.</p>
                    <p>Proof of the Registered office of the proposed Company along with the proof of ownership and a NOC from the owner.</p>
                    <p>Affidavit and Consent of the proposed Director of Form INC-9 and DIR-2 respectively and then a declaration by the professional certifying that all compliances have been made.</p>

                </li>
                <li>
                    <p>Filing of forms with MCA: All these documents will be attached to SPICe Form, SPICe-MOA and SPICe-AOA along with the DSC of the Director and the professional, and will be uploaded to the MCA site for approval. After uploading, Form 49A and 49B will be generated for the PAN and TAN generation of the Company which have to be uploaded to MCA after affixing the DSC of the proposed Director.</p>
                </li>
                <li>
                    <p>Issue of the certificate of Incorporation: On verification, the Registrar of Companies (ROC) will issue a Certificate of Incorporation and business can be commenced.</p>
                </li>

            </ul> -->
            <!-- <p class="normalText">Registering your company helps enhance visibility and provides advantages over unregistered companies.</p>
            <p class="mb-5">One of the most important steps to be taken right in the beginning is to check if the
                name you want for your company is available. This can be done by running a search
                to check the availability against other registered names and trademarks with the
                Ministry of Corporate Affairs and the IP India website. It may happen that the name
                you want is already taken, in this case, it is important to have back up names.</p> -->

            <h1 class="mb-3 mt-5 primaryHeading text-danger">Proofs required for sole proprietorship registration</h1>
            <p class="normalText">To register a Sole Proprietorship, the following documents are required</p>
            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Aadhar Card</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>PAN Card</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Bank Account</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Registered office proof</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Lower tax liability due to a variety of deductions available to the sole proprietorship setting.</p>
                    </div>
                </li>
            </ul>
            <p class="normalText">Although sole proprietor doesn’t require any specific registrations, he is advised to obtain a few registrations to make his business function smoothly.</p>
            <!-- <h1 class="primaryHeading text-center font-weight-bold mb-4">SCANNED COPIES OF</h1> -->
            <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Registering as SME</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Shop and Establishment Act License</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>GST Registration</p>
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