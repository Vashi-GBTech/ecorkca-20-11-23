<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Client Stories</title>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <style>
        .clientStoryDetails {

            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;

        }

        .current_vacancies {
            background-color: #cd1432;
            box-shadow: 0px 2px 4px 0px grey;
            border-radius: 5px;
            width: 25%;
            height: 40px;
            color: white;
            border: none;
        }

        .jobs_section {
            background-color: #eda4ad;
            width: 100%;
            padding: 1%;
            border-radius: 7px;
        }

        .primaryHeading {
            height: 85px !important;
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 1.25rem !important;
        }

        #client_stories_1 {
            min-height: 175px;
        }

        .box_shadow {
            box-shadow: var(--box-shadow);
            min-height: 404.27px;
        }
    </style>
</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <div class="clientStoriesBannaer pageBanner d-flex justify-content-around align-items-center">
        <div class="text-center">
            <p class="mainHeading text-light">Client Stories</p>
            <p class="normalText text-light">Our clients are the heart of our business!</p>
        </div>
    </div>

    <div class="row">
       <div class="col-md-3"></div>     
       <div class="col-md-6 d-flex justify-content-evenly ourSolutionDropDowndiv">
        <div  class="dropdown col-md-6"> 
         <select class="form-select" aria-label="Default select example" onchange="onSelectChanllenges()">
        <option selected  value="Your Challenges">Business Stage</option>
        <option class="options" style=" padding:5px 0px; " value="Startup">Startup</option>
        <option class="options" style=" padding:5px 0px; " value="Manage">Manage</option>
        <option class="options" style=" padding:5px 0px; " value="Growth">Growth</option>
        <option class="options" style=" padding:5px 0px; " value="Restructure">Restructure</option>
        <option class="options" style=" padding:5px 0px; " value="Exit">Exit</option>
        </select>
         </div>
        <div class="dropdown col-md-6"> 
         <select class="form-select" aria-label="Default select example">
        <option selected>Our Services</option>
        <option class="options" value="Strategy & Perfomance Consulting">Strategy & Perfomance Consulting</option>
        <!-- <option class="options" value="Onshore & Offshore Advisory">Onshore & Offshore Advisory</option> -->
        <!-- <option class="options" value="Governance Risk & Compliance">Governance Risk & Compliance</option> -->
        <option class="options" value="Business Support & Financial Reporting">Business Support & Financial Reporting</option>
        <option class="options" value="Litigation & Legal Services"> Legal & GRC Services</option>
        <option class="options" value="Financial & Capital Services">Financial & Capital Services</option>
        <option class="options" value="Digital Tansformation">Digital Tansformation</option>
        <option class="options" value="Cross Border & Merchant Banking Advice">Cross Border & Merchant Banking Advice</option>
        </select>
        </div>
        </div>
        <div class="col-md-3"></div>   
        </div>
                
    <div class="clientStoryFilter d-flex justify-content-end">
        <div class="d-flex justify-content-end mb-2 mr-3 pb-4 pt-5 w-50">

            <!-- <div class=" mx-auto w-50"> -->

            <div class="btn-group mb-2 " style="width: 30%;min-width: 250px; box-shadow: var(--box-shadow);">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; ">
                    Category
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item" type="button" id="Business_Transformation">Business Transformation</button>
                    <button class="dropdown-item" type="button" id="Digital_Transformation">Digital Transformation</button>
                    <button class="dropdown-item" type="button" id="Legal_Services">Legal Services</button>
                    <button class="dropdown-item" type="button" id="Accounting">Accounting </button>
                    <button class="dropdown-item" type="button" id="Start_up">Start-up</button>
                    <button class="dropdown-item" type="button" id="Finance">Finance</button>
                </div>
            </div>


            <!-- <div class="btn-group py-3 " style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; box-shadow: var(--box-shadow);">
                    Month
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item" type="button" id="Jan">January</button>
                    <button class="dropdown-item" type="button" id="Feb">February</button>
                    <button class="dropdown-item" type="button" id="Mar">March</button>
                    <button class="dropdown-item" type="button" id="Apr">April</button> 
                    <button class="dropdown-item" type="button" id="May">May</button>
                    <button class="dropdown-item" type="button" id="Jun">June</button>
                    <button class="dropdown-item" type="button" id="Jul">July</button>
                    <button class="dropdown-item" type="button" id="Aug">August</button>
                    <button class="dropdown-item" type="button" id="Sep">September</button>
                    <button class="dropdown-item" type="button" id="Oct">October</button>
                    <button class="dropdown-item" type="button" id="Nov">November</button>
                    <button class="dropdown-item" type="button" id="Dec">December</button>
                </div>
            </div> -->
            <!-- <div class="btn-group py-3 " style="width: 30%;">
                <button type="button" class="align-items-center btn d-flex dropdown-toggle font-weight-bold justify-content-between px-3 text-dark w-100" data-toggle="dropdown" aria-expanded="false" style="background: #f8f9fa; box-shadow: var(--box-shadow);">
                    Year
                </button>
                <div class="dropdown-menu w-100 toggled">
                    <button class="dropdown-item" type="button" id="_18">2018</button>
                    <button class="dropdown-item" type="button" id="_19">2019</button>
                    <button class="dropdown-item" type="button" id="_20">2020</button>
                    <button class="dropdown-item" type="button" id="_22">2022</button>
                    <button class="dropdown-item" type="button" id="_22">2022</button>
                </div>
            </div> -->

            <div class="select_location border p-2 mb-3 mt-1 w-25 rounded" id="clientStory_categryDD">
                <p class="border-dark form-control mb-2 mx-auto genderValue activeSelection" onclick="genderValue(this,'Male');" style="border-radius: 7px; width: 95%; ">PROBLEM 1</p>
                <p class="border-dark form-control mb-2 mx-auto   genderValue" onclick="genderValue(this,'Female');" style="border-radius: 7px; width: 95%;">PROBLEM 2</p>
                <p class="border-dark form-control mb-2 mx-auto genderValue" onclick="genderValue(this,'Other');" style="border-radius: 7px; width: 95%;">PROBLEM 3</p>
            </div>

        </div>
    </div>

    <div class="clientStoriesList row mx-0 mb-5 pb-1" id="clientStoriesList"></div>

    <div id="output-container"></div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>

const clientStoriesCartArr = [{'image':'c1_baggingoutcomes_r.jpg', 'heading':'Combined efforts bagging successful outcomes!','content':'The main motive of our company which is completely aimed at is to render professional services','readmoreLink':'1', 'filter_class':'Finance'},
{'image':'c2_lendinghand_r.jpg', 'heading':'A Lending Hand for the procuration of the client!','content':'With the mission of owning and operating high-quality wireless infrastructure sites in stable markets, PTI','readmoreLink':'2','filter_class':'Finance'},
{'image':'c3_Facilitationofcollective_r.png', 'heading':'Facilitation of collective outsources accounting, local tax compliance, and company formation services!','content':'The client is a subsidiary of a multinational company based in Turkey that functions in various fields','readmoreLink':'3','filter_class':'Business_Transformation'},
{'image':'c4_facilitating_r.png', 'heading':'Facilitating assistance for the expansion of Spanish automotive components producer.','content':'Our consumer could be a major transnational company within the automotive sector, with varied plants','readmoreLink':'4','filter_class':'Business_Transformation'},
{'image':'c5_renderingextensive_r.png', 'heading':'Rendering extensive start-up services to our clients!','content':'KEO Films, which had recently won a contract to make an Australian adaptation of a UK','readmoreLink':'5','filter_class':'Start_up'},
{'image':'c6_assisstanceprovided_r.png', 'heading':'Assistance provided to electrical contractors for avoiding double taxation.','content':'Our client is a massive electrical contracting business located in New Zealand. The company has developed','readmoreLink':'6','filter_class':'Finance'},
{'image':'c7_redesigning_of_an_r.png', 'heading':'Redesigning of an American Wholesale Company.','content':'BPM Australia could be a huge, fast-moving worldwide discount company for customer merchandise. The ','readmoreLink':'7','filter_class':'Digital_Transformation'},
{'image':'c8_Tax_and_advisory_r.png', 'heading':'Tax and advisory services rendered to UK start-up','content':'Our client is an imaginative UK start-up within the field of computerized investigate and substance','readmoreLink':'8','filter_class':'Legal_Services'},
{'image':'c9_Offering_continuous_r.png', 'heading':'Offering continuous back to outside bank department with administrative reporting','content':'A department of a foreign bank was subject to certain limitations on enlisting proficient staff','readmoreLink':'9','filter_class':'Accounting'},
{'image':'c10_We_help_the_private_bank_r.png', 'heading':'We help the private bank with anti-money washing and counter-terrorism financing compliance','content':'Uruguay’s second most important private bank was gained by an international bank. Thus, the local ','readmoreLink':'10', 'filter_class':'Finance'},
{'image':'c11_We_help_the_start_ups_r.png', 'heading':'We help the start-ups gain a competitive edge in the Polish market.','content':'Our client is a young and dynamic company that provides a platform for online table reservations in restaurants.','readmoreLink':'11','filter_class':'Start_up'},
{'image':'c12_Recommendation_and_assistance_r.png', 'heading':'Recommendation and assistance to client for implementing improved internal controls.','content':'One of Uruguay\'s major passenger transport companies, regulated by the authorities, has asked','readmoreLink':'12','filter_class':'Accounting'},
{'image':'c13_SEKO_Group_r.png', 'heading':'SEKO Group located in Czech earned German Smithy Company','content':'Our client, SEKO Group, may be a driving Czech-based producer of key components for flying machine','readmoreLink':'13','filter_class':'Finance'},
{'image':'c14_Scenario_Portugal_r.png', 'heading':'Scenario of non-habitual tax resident in Portugal','content':'Our clients\' businesses are focused on providing IT services, including market observations, feasibility stu','readmoreLink':'14','filter_class':'Finance'},
{'image':'c15_Ukraine_International_Airways_r.png', 'heading':'Ukraine International Airways and ECOVIS Bondar & Bondar','content':'Ukraine International Airlines (UIA) is Ukraine’s leading airline established in 1992','readmoreLink':'15','filter_class':'Legal_Services'},

];
for(let i of clientStoriesCartArr){
    console.log(i.readmoreLink);
     clientStoriesCart(i.image, i.heading, i.content, i.readmoreLink, i.filter_class);
    // var htmlrow = `<div clas="row"></div>`;
    // $("#clientStoriesList").append(fn);

}

function clientStoriesCart(image, heading, content, ReadMoreBadgeLink, filter_class) {
     cartHtml = `<div class="col-xl-3 col-lg-4 mb-4 col-md-6 col-sm-12 client_stories_card ${filter_class} cover">
                <div class="box_shadow rounded">
                    <!-- <P class="d-flex justify-content-between mt-2 small" style="font-weight: var(--box_normal_text);"> <span class="mx-2">Category: Start-up</span> <span class="">4th June, 2022</span></P> -->
                    <img id="client_stories_1" src="<?= base_url()?>assets/images/clientStoriesImages/${image}" style="border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; max-height: 219.58px;" class="w-100 client_stories_images" alt="">
                    <div class="px-3">
                        <h4 class="primaryHeading text-justify py-2">${heading}</h4>
                        <!-- <div class="align-items-end d-flex justify-content-between"> -->
                        <p class="clientStoryDetails text-justify">${content}</p>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url()?>clientStoriesDetailPage${ReadMoreBadgeLink}"><span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span></a>

                            <!-- <span class="badge badge-danger badge-pill font-italic font-weight-normal mb-3 px-3 py-2">Read more...</span> -->
                        </div>
                    </div>
                </div>

                <!-- </div> -->
            </div>`;
    $("#clientStoriesList").append(cartHtml);
}


    $(function() {

        $('.toggled button').click(function() {
            var get_id = this.id;
            var get_current = $('.clientStoriesList .' + get_id);
            console.log(get_current);
            $('.cover').not(get_current).hide(500);
            get_current.show(500);
        });


    });


    // finance filter 

    var finamce_heading = $(".Finance").children().children(1).children("h4");
    var finamce_pageLink = $(".Finance").children().children(1).children().children("a");
    // console.log(finamce_pageLink);
    const FinanceArray = [];

    for (let i = 0; i < finamce_heading.length; i++) {
        let obj = {};
        obj["pageName"] = finamce_heading[i].innerHTML;
        obj["pageLink"] = finamce_pageLink[i].href;
        FinanceArray.push(obj);
    }

    localStorage.setItem("FinanceArray", JSON.stringify(FinanceArray));

    // Business_Transformation 

    var Business_Transformation_heading = $(".Business_Transformation").children().children(1).children("h4");
    var Business_Transformation_pageLink = $(".Business_Transformation").children().children(1).children().children("a");
    const Business_TransformationArray = [];
    for (let i = 0; i < Business_Transformation_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Business_Transformation_heading[i].innerHTML;
        obj["pageLink"] = Business_Transformation_pageLink[i].href;
        Business_TransformationArray.push(obj);
    }
    // console.log(Business_TransformationArray);
    localStorage.setItem("Business_Transformation", JSON.stringify(Business_TransformationArray));

    // Start_up 

    var Start_up_heading = $(".Start_up").children().children(1).children("h4");
    var Start_up_pageLink = $(".Start_up").children().children(1).children().children("a");
    const Start_upArray = [];
    for (let i = 0; i < Start_up_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Start_up_heading[i].innerHTML;
        obj["pageLink"] = Start_up_pageLink[i].href;
        Start_upArray.push(obj);
    }
    // console.log(Start_upArray);

    localStorage.setItem("Business_Transformation", JSON.stringify(Start_upArray));

    //Digital_Transformation

    var Digital_Transformation_heading = $(".Digital_Transformation").children().children(1).children("h4");
    var Digital_Transformation_pageLink = $(".Digital_Transformation").children().children(1).children().children("a");
    const Digital_TransformationArray = [];
    for (let i = 0; i < Digital_Transformation_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Digital_Transformation_heading[i].innerHTML;
        obj["pageLink"] = Digital_Transformation_pageLink[i].href;
        Digital_TransformationArray.push(obj);
    }
    // console.log(Digital_TransformationArray);

    localStorage.setItem("Digital_Transformation", JSON.stringify(Digital_TransformationArray));


  
// Legal_Services

var Legal_Services_heading = $(".Legal_Services").children().children(1).children("h4");
    var Legal_Services_pageLink = $(".Legal_Services").children().children(1).children().children("a");
    const Legal_ServicesArray = [];
    for (let i = 0; i < Legal_Services_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Legal_Services_heading[i].innerHTML;
        obj["pageLink"] = Legal_Services_pageLink[i].href;
        Legal_ServicesArray.push(obj);
    }
    // console.log(Legal_ServicesArray);

    localStorage.setItem("Legal_Services", JSON.stringify(Legal_ServicesArray));

    // Accounting 

    var Accounting_heading = $(".Accounting").children().children(1).children("h4");
    var Accounting_pageLink = $(".Accounting").children().children(1).children().children("a");
    const AccountingArray = [];
    for (let i = 0; i < Accounting_heading.length; i++) {
        let obj = {};
        obj["pageName"] = Accounting_heading[i].innerHTML;
        obj["pageLink"] = Accounting_pageLink[i].href;
        AccountingArray.push(obj);
    }
    console.log(AccountingArray);

    localStorage.setItem("Accounting", JSON.stringify(AccountingArray));



</script>

</html>