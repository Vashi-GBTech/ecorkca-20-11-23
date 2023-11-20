<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Closing a Nidhi Company</title>
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
            <p class="mainHeading text-center text-light">Closing a Nidhi Company</p>
        </div>
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
    <div class="row justify-content-center ">
        <div class="col-lg-8 col-md-10">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">Why should I register as a Private Limited Company?</h1>
            <p class="normalText">The procedure to shut down a Nidhi Company completely takes about six months.</p>

            <p class="normalText">First, a company closure is filed under Form STK 2 (Earlier form was FTE) along with the government fees of Rs.5000/- and some necessary docs. In order to do this, it is important to note the cases where closure can be filed.</p>
            <!-- <p class="normalText"></p> -->


            <!-- <ul class="pl-2">
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Tax Flexibility and Savings: OPC makes a valid contract with its shareholder or directors. Since there is only one member in the company, this means as a director you can receive remuneration, as a lessor you can receive rent, as a creditor you can advance money to your own company and earn interest. Directors’ remuneration, rent and interest are a deductible expense which reduces the profitability of the Company and ultimately brings down taxable income of your business.</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>An OPC is completely controlled and managed by the Single Owner. It leads to quick decision making and execution. There is no scope for a clash of opinions</p>
                    </div>
                </li>
                <li class="mb-1">
                    <div class="d-flex">
                        <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                        <p>Legal Status and Social Recognition for Your Business: OPC is the most popular business structure in the world. Large organizations prefer to deal with private limited companies instead of proprietorship firms. Private Limited business structure enjoys corporate status society which helps the entrepreneur to attract quality workforce and helps to retain them by giving corporate designations, like directorships.</p>
                    </div>
                </li>
            </ul> -->
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
        <h1 class="mb-3 mt-5 primaryHeading text-danger">A company closure can be filed after the following steps have been followed:</h1>

            <!-- <h1 class="mb-3 mt-5 primaryHeading text-danger">How to register an OPC?</h1> -->
            <p class="normalText">Now that you’re ready to register and have put together everything that is required, here’s the next step!</p>
            <ul class="mb-4 pb-1 pl-3 sessions">
                <li>
                    <p><b>Clearing Liabilities:</b> The first step is paying off all the liabilities of the company. Since a Nidhi company involves a lot of deposits, an noc has to be taken from every member of the company.</p>
                </li>
                <li>
                    <p><b>Obtaining 75% consent:</b> This is a new requirement for Nidhi company closure. At least 75% consent is required from the shareholders/members of the company. Also, one director must be authorised to take care of all the closure formalities.</p>
                </li>
                <li>
                    <p><b>Preparing application: </b> Once consent has been gathered, the next step is preparing the application and filing it with the RoC.</p>
                </li>
                <li>
                    <p class=""><b>Preparing application:</b> Once consent has been gathered, the next step is preparing the application and filing it with the RoC.</p>
                    <!-- <div class="d-flex ml-3">
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
                    </div> -->
                </li>
                <li>
                    <p>Once the application and all the other documents are submitted and approved, the RoC sends a notice.</p>
                </li>
            </ul>


            <h1 class="mb-3 mt-5 primaryHeading text-danger">Documents Required for Nidhi Company Closure</h1>
            <h1 class="normalText mb-3">Mandatory Documents:</h1>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Indemnity Bond notarized by Directors (STK 3)</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>The latest Statement of Accounts</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>A statement of Accounts containing the assets & liabilities of the Company. This statement must be audited by a CA</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Affidavit in Form STK 4 by every Company</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p class="mb-4">Special Resolution or Consent of 75% Members</p>
            </div>


            <h1 class="normalText mb-3">Optional Documents (If applicable)</h1>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Bank Account Closure Certificates</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p class="mb-4">PAN Card of the Company</p>
            </div>

            <h1 class="normalText mb-3">Requirements for Nidhi Company Wind up (Closure)</h1>
            <p>It requires a special resolution or consent of at least 75% of the shareholders/members. Further the company closure request should be filed after repaying all creditors, disposal of all assets and closing all bank accounts. Further, kindly note the following points:</p>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p>Take NOC form after clearing the dues/liabilities.</p>
            </div>
            <div class="d-flex ml-3">
                <span class="pr-3 text-danger"><i style='font-size:13px' class='far'>&#xf192;</i></span>
                <p class="mb-5">If you are registered with any government department, then you must seek NOC to close the business operations etc.</p>
            </div>
           


        </div>

    </div>
    <div class="lets_connect px-0 text-center">
        <a href="./contact_us"> <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey;cursor: pointer;">LET'S CONNECT</button></a>
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