<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Business Analyst</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css cdn  -->
    <!-- <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.css"> -->

    <!-- custom css link  -->
    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <!-- box icons link  -->
    <!-- <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> -->

    <!-- bootstrap javascript cdn  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <!-- oul carousel link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jqv link  -->
    <link href="./js/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<style>
    /* .insideArrow {
        width: 0;
        height: 0;
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 100px solid;
        background-image: url(./ecovis-images/our_team_banner.png);
    }


    .kwadrat2 {
        width: 232px;
        height: 120px;
        border-top: 1px solid #fff;
        overflow: hidden;
        margin-top: 5px;
    }

    .trojkat2 {
        position: relative;
        overflow: hidden;
        transform: rotate(45deg) skew(10deg, 10deg);
        width: 200px;
        height: 200px;
        margin: -190px 0 0 16px;
    }

    .trojkat_bg2 {
        position: absolute;
        width: 200%;
        height: 200%;
        top: -50%;
        left: -50%;
        z-index: -1;
        background: url(./ecovis-images/our_team_banner.png);
        background-size: 100%;
        transform: skew(-10deg, -10deg) rotate(-45deg);
    }

    .office_state_img {
        width: 85px !important;
        height: 75px !important;
    } */

    .india_team_point {
        width: 150px;
        height: 150px;
        position: absolute;
        box-shadow: 0px 2px 3px 1px lightgray;
        background-color: whitesmoke;
    }
</style>
<style>
    /* Arrow */

    .arrow {
        position: relative;
        margin: 0 auto;
        width: 140px;
        /*   border:1px solid red; */
    }

    .arrow .curve {
        border: 2px solid #BE5F4B;
        /* 	border-color: transparent transparent transparent #BE5F4B; */
        height: 36px;
        width: 0px;
        border-radius: 19px;
    }

    .arrow .point {
        position: absolute;
        left: .5px;
        bottom: 5px;
        transform: rotate(29deg);
        /* 	top: 315px; */
    }

    .arrow .point:before,
    .arrow .point:after {
        border: 2px solid #BE5F4B;
        height: 25px;
        content: "";
        position: absolute;
        top: 10px;
        transform: rotate(0deg);
    }

    .arrow .point:before {
        top: -13px;
        left: -9px;
        transform: rotate(74deg);
        -webkit-transform: rotate(-74deg);
    }

    .arrow .point:after {
        top: -20px;
        left: 5px;
        transform: rotate(15deg);
    }
</style>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner  -->
    <div class="align-items-center Business_AnalystBanner d-flex justify-content-around pageBanner">
        <div class="">
            <p class="mainHeading text-center text-light">Business Analyst
            </p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>
    <div class="container">
        <div class="bg-danger mt-5" onscroll="scrollingImagefunction()" id="ImageDiv">
            <img src="<?= base_url()?>assets/ecovis-images/careers_bannercroped.png" alt="" class="border border-danger rounded w-100" id="Image" style="opacity: 0.8;">
        </div>
    </div>
    <div class="ecovis_insia_banner">
        <div class="mt-5 mx-auto w-75">
            <h1 class="mb-4 primaryHeading text-center">About Us</h1>
            <p class="mb-3 normalText text-justify">ECOVIS RKCA with presence and representation of firms in India having more than 5 decades of presence and offices in Major Indian cities, a
                global footprint with associates in more than 70+ countries serving clients in Strategy & Performance Consulting, On shore and Off shore Advisory, Government, Risk & Compliance, Business Support and Financial Reporting , Legal & Litigation Services, Financial and Capital Services, Digital Transformation, Cross border and Merchant Banking Services management consulting and Wealth planning matters. Serving with core values of Responsibility towards Profession, Knowledge in People,
                Commitment towards Clients and Accountability towards the society is our key differentiator. </p>
        </div>
        <div class="mt-5 mx-auto w-75">
            <h1 class="mb-4 primaryHeading text-center">Job role</h1>
            <p class="mb-3 normalText text-justify">We are looking for a Business Analyst who could help us enhance the business aspect of our organization.</p>
            <p class="mb-3 normalText text-justify">You will have to work in coordination with other business analysts and give the updates directly to the project manager. Your responsibilities
                will include performing thorough requirement analysis, building procedure with your business guidance, ensuring proper deployment, and
                user acceptance of the product. You should have good analytical thinking and excellent verbal communication skills to be able to explain
                difficult concepts in a simple way to everybody.
            </p>
            <p class="mb-3 normalText text-justify">To do justice with the position of Business Analyst you should be capable of moving the organization towards efficiency, productivity, and
                profitability.
            </p>

        </div>
        <div class="mt-5 mx-auto w-75 row">
            <div class="col-md-4 text-center">
                <h1 class="mb-4 primaryHeading ">Experience level</h1>
                <p class="mb-3 normalText text-justify text-center">Fresher</p>
            </div>
            <div class="col-md-4 text-center">
                <h1 class="mb-4 primaryHeading">Employment type</h1>
                <p class="mb-3 normalText text-justify text-center">Internship</p>
            </div>
            <div class="col-md-4 text-center">
                <h1 class="mb-4 primaryHeading ">Location</h1>
                <p class="mb-3 normalText text-justify text-center">Mumbai</p>
            </div>
        </div>
        <div class="justify-content-center mb-5 mx-0 row" style="margin-top: 4rem; ">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="primaryHeading">Entry requirements</h1>
                        <ul style="list-style: unset;">
                            <li>Bachelor's degree in Computer Science and other related
                                courses.</li>
                            <li> Knowledge of both Information Technology and Business
                                Administration. </li>
                            <li> Proven experience as a Business Analyst.

                            </li>
                            <li> Familiarity with SQL and MS Excel.</li>
                            <li>Product testing and problem solving abilities.</li>
                            <li>Proficiency in data visualization techniques and tools.</li>
                            <li>Efficiency in creating detailed reports and presentations.</li>
                            <li> Excellent communication and interpersonal skills.
                            </li>
                            <li> Exceptional analytical, logical and reasoning skills.
                            </li>
                            <li>Experience in data visualization tools and techniques.
                            </li>
                            <li>Ability to build and maintain good relations with
                                stakeholders.
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="primaryHeading">Responsibilities</h1>
                        <ul style="list-style: unset;">
                            <li>Analyze the business structure, technology used and goals
                                of the organization.</li>
                            <li>Determine improvements in existing business processes.</li>
                            <li>Interact with business leaders and users to understand
                                how to improve the efficiency of the product and add
                                values.</li>
                            <li>Suggest and implement new features that are
                                technologically feasible, financially, and functionally
                                reasonable.</li>
                            <li>Analyze the impact of the new features introduced.</li>
                            <li>Sit with all the stakeholders to analyze and validate the
                                changes made in the business processes, information
                                system and policies.</li>
                            <li> Perform quality assurance and implement new business
                                technology.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class=".container border boreder-danger box-container font-weight-bold text-center" id="item_container">
                    <h4 class="text-center">Select Items</h1>
                        <div class="" id="ItemId-1">
                            <div class="row">
                                <div class="col-md-6" id="_1st-6">
                                    <p class=" py-2">Lorem ipsum dolor sit amet.</p>
                                </div>
                                <div class="col-md-6">
                                    <ul id="listing_tree">
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                        <li>Lorem, ipsum dolor.</li>
                                    </ul>
                                </div>
                            </div>


                        </div>
                        <div class="" id="ItemId-2">
                            <p class=" px-5 py-2">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        </div>
                        <div class="" id="ItemId-3">
                            <p class="px-5 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Velit.</p>
                        </div>
                        <div class="" id="ItemId-4">
                            <p class=" px-5 py-2">Lorem, ipsum.</p>
                        </div>
                        <div class="" id="ItemId-5">
                            <p class=" px-5 py-2">Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                        <div class="" id="ItemId-6">
                            <p class=" px-5 py-2">Lorem ipsum dolor sit.</p>
                        </div>
                        <div class="" id="ItemId-7">
                            <p class=" px-5 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, porro?</p>
                        </div>
                        <div class="" id="ItemId-8">
                            <p class=" px-5 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                </div>
            </div>
            <div class="col-md-6 border">
                <div class="box-container font-weight-bold text-center">
                    <div class="" id="Button"><button type="button" class="btn btn-danger ">Add List</button></div>
                    <div class="" id="structure"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="draggable" class="ui-widget ui-widget-content">

        <p>Drag me to trigger the chain of events.</p>

        <ul class="ui-helper-reset">
            <li id="event-start" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-play"></span>&quot;start&quot; invoked <span class="count">0</span>x</li>
            <li id="event-drag" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-arrow-4"></span>&quot;drag&quot; invoked <span class="count">0</span>x</li>
            <li id="event-stop" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-stop"></span>&quot;stop&quot; invoked <span class="count">0</span>x</li>
        </ul>
    </div>
    <div class="container-fluid mt-4 mb-5">
        <div class="row">
            <div class="col-md-11 col-sm-10">
                <div class="row" id="tablesInput">
                    <!-- <div class="col-md-3">
                        <div class="border border-dark content_stack rounded">
                            <input type="text" name="value-1" placeholder="enter your 1st velue" class="form-control border-0 " data-param="name" id="DataValue_1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border border-dark  content_stack rounded">
                            <input type="text" name="value-2" placeholder="enter your 2nd velue" data-param="name" class="form-control border-0 " id="DataValue_2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="border border-dark  content_stack rounded">
                            <input type="text" name="value-3" placeholder="enter your 3rd velue" data-param="name" class="form-control border-0 " id="DataValue_3">
                        </div>
                    </div> -->
                </div>
            </div>


            <div class="col-md-1 col-sm-2">
                <div class="">
                    <button class="btn btn-dark text-light font-weight-bold" id="_0" onclick="AddToTable()"> Add </button>
                </div>
            </div>

        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table" id="table_for_data">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>



    </div>


    <script>
        // $(function() {
        //     var $start_counter = $("#event-start"),
        //         $drag_counter = $("#event-drag"),
        //         $stop_counter = $("#event-stop"),
        //         counts = [0, 0, 0];

        //     $("#draggable").draggable({
        //         start: function() {
        //             counts[0]++;
        //             updateCounterStatus($start_counter, counts[0]);
        //             $(updateCounterStatus).css('background-color', "red");
        //             console.log(counts);
        //         },
        //         drag: function() {
        //             counts[1] = counts[1] + 1;
        //             updateCounterStatus($drag_counter, counts[1]);
        //             $(updateCounterStatus).css('background-color', "blue");

        //             console.log(counts);
        //         },
        //         stop: function() {
        //             counts[2]++;
        //             updateCounterStatus($stop_counter, counts[2]);
        //             $(updateCounterStatus).css('background-color', "yellow");

        //             console.log(counts);
        //         }
        //     });

        //     function updateCounterStatus($event_counter, new_count) {
        //         // first update the status visually...
        //         if (!$event_counter.hasClass("ui-state-hover")) {
        //             $event_counter.addClass("ui-state-hover")
        //                 .siblings().removeClass("ui-state-hover");
        //         }
        //         // ...then update the numbers
        //         $("span.count", $event_counter).text(new_count);
        //     }
        //     console.log(counts);
        // });
    </script>

    <?php include_once "footer.php" ?>

    <script src="<?= base_url()?>assets/js/javascript.js"></script>
</body>
<style>
    .box-container p {
        border: 1px solid gray;
        background-color: #efefef;
        padding: 5px 3px;
        width: 80%;
        margin: .5rem auto 0;
        border-radius: 6px;
        cursor: pointer;
    }
</style>
<script>
    const array_to_Checkarrow = [];
    var fatch_itemId = document.querySelectorAll('[id^="ItemId-"]');
    for (let i = 0; i < fatch_itemId.length; i++) {
        fatch_itemId[i].addEventListener('click', AddInStrure.bind(this, fatch_itemId[i]));
    }
    var counter = 0;

    function AddInStrure(div, element_id) {
        var arrow = `<div class="things">
  <div class="content">
    <div class="arrow">
      <div class="curve"></div>
      <div class="point"></div>
    </div>
  </div> 
 
</div>`;
        counter++;
        if (array_to_Checkarrow.length < 1) {
            $(div).clone().attr("id", `removeItem_${counter}`).appendTo('#structure');
            array_to_Checkarrow.push(counter);
            // console.log(array_to_Checkarrow);
            $(div).hide();
        } else {
            $(arrow).clone().appendTo(`#structure`);
            $(div).clone().attr("id", `removeItem_${counter}`).appendTo('#structure');
            array_to_Checkarrow.push(counter);
            // console.log(array_to_Checkarrow);
            $(div).hide();

        }
    }

    function scrollingImagefunction() {
        $("#Image").css('opacity', '.1');
    }

    const allArray = [
        ['value-1', 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7'],
        ['value-1', 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7', 'value-8', 'value-9', 'value-10'],
        ['value-1', 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7', 'value-8', 'value-9', 'value-10', 'value-11', 'value-12'],
        ['value-1', 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7', 'value-8', 'value-9', 'value-10', 'value-11', 'value-12', 'value-13', 'value-14'],
        ['value-1', 'value-2', 'value-3', 'value-4', 'value-5', 'value-6', 'value-7', 'value-8', 'value-9', 'value-10', 'value-11', 'value-12', 'value-13', 'value-14', 'value-15', 'value-16'],
    ]
    for (let i = 0; i < allArray.length; i++) {
        for (let j = 0; j < i.length; j++) {
            console.log(allArray[i][j]);

        }
    }



    const tableDataValue = []
    var tableCounter = 0;

    function AddToTable() {
        var value_1 = $("#DataValue_1").val();
        var value_2 = $("#DataValue_2").val();
        var value_3 = $("#DataValue_3").val();


        var c1 = $("#DataValue_1").data("name");
        var c2 = $("#DataValue_2").data("name");
        var c3 = $("#DataValue_3").data("name");


        tableCounter++
        console.log(value_1 + " " + value_2 + " " + value_3);
        var table = `
                    <tbody>
                        <tr>
                            <th scope="row">${tableCounter}</th>
                            <td>${value_1}</td>
                            <td>${value_2}</td>
                            <td>${value_3}</td>
                        </tr>
                    </tbody>`;
        $("#table_for_data").append(table);
        $("#DataValue_1").val('');
        $("#DataValue_2").val('');
        $("#DataValue_3").val('');
        const object_1 = {};
        object_1.c1 = value_1;
        object_1.c2 = value_2;
        object_1.c3 = value_3;
        tableDataValue.push(object_1);



        console.log(tableDataValue);
        console.log(object_1);
    }
    const globleComponetArray = [];
    // const Control = function() {
    //     this.inputValues = [];
    //     this.add = function(value) {
    //         this.inputValues.push(value);
    //     };
    //     this.remove = function(index) {
    //         this.inputValues.splice(index, 1);
    //     }
    // };

    const inputArray = [{"name": "label","type": "text","isQuery": true,"attributes": "","defaultValue": ""},{"name": "label","type": "dropdown","isQuery": true,"attributes": "","defaultValue": ""}];



    var ComponentCounter = 0;
    getComponent(inputArray);

    function getComponent(inputArray) {

        let globleArrayLenght = globleComponetArray.length;

        for (let i = 0; i < inputArray.length; i++) {
            ComponentCounter++
            if (inputArray[i].type == 'dropdown') {
                var ComponentStructure = `<div class="col-md-3">
                                                <div class="border border-dark content_stack rounded">
                                                    <select name="${inputArray[i].name}" id="input_${globleArrayLenght}_${ComponentCounter}" placeholder="enter your 1st velue" class="form-control border-0 ">
                                                        <option value="_1">1</option>
                                                        <option value="_2">2</option>
                                                        <option value="_3">3</option>
                                                        <option value="_4">4</option>
                                                    </select>
                                                </div>
                                            </div>`;

            } else {
                var ComponentStructure = `<div class="col-md-3">
                                            <div class="border border-dark content_stack rounded">
                                                <input type="${inputArray[i].type}" name="${inputArray[i].name}" placeholder="enter your 1st velue" class="form-control border-0 " data-param="name" id="input_${globleArrayLenght}_${ComponentCounter}">
                                            </div>
                                        </div>`;
            }
            $(ComponentStructure).appendTo("#tablesInput");
            // console.log(ComponentStructure);

        }
        globleComponetArray.push({
            "id": globleArrayLenght,
            'inputNumber': inputArray.length,
            // "componentValues": []
        });

    }
    console.log(globleComponetArray);

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>

<script>
    const components=[];

const Control=function (){
      this.inputValues=[];
      this.add = function(value){
        this.inputValues.push(value);
    };
     this.remove= function(index){
        this.inputValues.splice(index,1);
    }
};
let control1= new Control();
let control2= new Control();

control1.add({id:1,name:"abc"})
control2.add({id:2,name:"pqr"})
// control3.add({id:3,name:"pour"})

components.push(control1,control2);
console.log(control1.inputValues)
// console.log("---------------")      
console.log(control2.inputValues)
// console.log(components);

</script>