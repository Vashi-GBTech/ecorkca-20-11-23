
function BusinessInIndiaAppend(params) {
    var Business_in_India_html = `<div class="bannerDD box_shadow bg-danger pb-4 pt-3">
<h3 class="text-center text-light mt-3">
Looking for India Entry Strategy
</h3>
<div class="row mx-0" id="Your_Business_needs">
    <div class="col-md-6 col-sm-12 d-md-flex justify-content-end text-center pr-5">
        <div class="btn-group py-3" style="width: 16%; min-width:285px;">
            <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" id="servicebtn" data-toggle="dropdown" aria-expanded="false">
            What you need
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
            How we support
            </button>
            <div class="dropdown-menu w-100 baseofselectedService" id="FormationCompanies">
                <a href="./Private_Limited_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Private Limited Company</button></a>
                <a href="./Limited_Liability_Partnerships.php"  style="text-decoration: none;"><button class="dropdown-item" type="button">Limited Liability Partnerships</button></a>
                <a href="./One_Person_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">One Person Company (OPC)</button></a>
                <a href="./Proprietorship.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Proprietorship</button></a>
                <a href="./Partnership.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Partnership</button></a>
                <a href="./Nidhi_Company.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Nidhi Company</button></a>
                <a href="./NGO_regestration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">NGO Registration</button></a>
                <a href="./Society_Registration.php" style="text-decoration: none;"><button class="dropdown-item" type="button">Society Registration</button></a>

            </div>
            <div class="dropdown-menu w-100 baseofselectedService" id="RegistrationCompanies">
                <!-- <button class="dropdown-item" type="button">Professional Tax Registration</button>
            <button class="dropdown-item" type="button">Goods and Services Tax Registration</button>
            <button class="dropdown-item" type="button">Employee Provident Fund (EPF) Registration</button>
            <button class="dropdown-item" type="button">Employees’ State Insurance (ESI) Registration</button>
            <button class="dropdown-item" type="button">Permanent Account Number (PAN) Application</button>
            <button class="dropdown-item" type="button">Digital Signature Registration</button>
            <button class="dropdown-item" type="button">Tax Deduction and Collection Account Number – TAN</button> -->

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
</div>`;
$("#Business_in_India").append(Business_in_India_html);

}
BusinessInIndiaAppend();