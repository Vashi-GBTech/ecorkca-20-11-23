<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Business Restructuring</title>
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

    <div class="align-items-center Business_RestructuringBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Business Restructuring</p>
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
                        <a href="./Business_Restructuring.php" id="" onclick="showDD('Business_Restructuring','Business Restructuring')" style="text-decoration: none;" ><button class="dropdown-item services" type="button">Business Restructuring</button></a>
                        <a href="./Succession_Planning.php" id="" onclick="showDD('Succession Planning','Succession Planning')" style="text-decoration: none;"><button class="dropdown-item services" type="button">Succession Planning</button></a>
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
        <div class="col-lg-8 col-md-10 ">
            <h1 class="mb-3 mt-5 primaryHeading text-danger">Business Restructuring</h1>
            <p class="normalText">The Insolvency and Bankruptcy Code, 2016 (IBC) is the newly introduced bankruptcy
                law of India that seeks to consolidate the previous prevailing frameworks for
                business restructuring. Its meant to take prudent enterprise risk taking by creating a
                single law for insolvency and bankruptcy. The bankruptcy code meant to be onestop solution for resolving insolvencies which previously was a long process that did
                not offer an economically viable arrangement. The code aims to protect the
                interests of small investors and make the process of doing business less
                cumbersome.

            </p>
            <p class="normalText">Given the law is relatively new in nature and the nature of business environment is disruptive and dynamic, there are frequent changes to the nuances of Insolvency and Bankruptcy Code with the latest Amendments pertaining to Insolvency and
                Bankruptcy Board of India (Voluntary Liquidation Process, Amendment) Regulations 2020, and evolving framework which is emerging on
                Indian business scene.

            </p>
            <p class="normalText">With a dedicated team of experts ranging from Lawyers, Accountants, Company Secretaries, and Management Consultants to understand, keep track of changes in both the regulatory framework and business environment with respect to
                Resolution Practices, we approach this area with one of the most prepared teams to handle any resolution and ensure value preservation.

            </p>
            <p class="normalText mb-5">Our experience with the Banking Sector for the last 50 years and experts in 10 cities
                (Economic Clusters) of India helps to assist our clients in preventive as well as
                stressful situations.


            </p>

           
        </div>
    </div>
    <div class="lets_connect px-0 text-center">
       <a href="<?= base_url()?>jobApplication"> <button type="submit" class="lets_connect_button" style="box-shadow: 0px 1px 4px 1px grey;cursor: pointer;">LET'S CONNECT</button></a>
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