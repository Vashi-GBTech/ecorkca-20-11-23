<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Ecovis India</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css"> -->

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
    <link href="<?= base_url()?>assets/js/jqvmap/dist/jqvmap.min.css">


</head>
<style>
    .insideArrow {
        width: 0;
        height: 0;
        border-left: 75px solid transparent;
        border-right: 75px solid transparent;
        border-top: 100px solid;
        background-image: url(<?= base_url()?>assets/ecovis-images/our_team_banner.png);
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
        /*   border-bottom: 1px solid #000; */
        /*   border-right: 1px solid #000; */
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
        background: url(<?= base_url()?>assets/ecovis-images/our_team_banner.png);
        background-size: 100%;
        /*   background-position: center top; */
        transform: skew(-10deg, -10deg) rotate(-45deg);
        /*   transition: .3s; */
    }

    .office_state_img {
        width: 95px !important;
        height: 95px !important;
    }

    .india_team_point {
        width: 150px;
        height: 150px;
        position: absolute;
        box-shadow: 0px 2px 3px 1px lightgray;
        background-color: whitesmoke;
    }
</style>
<script>


let mainData=[];

     function onLoadPage(){

         $.ajax({
             url:"<?php echo base_url(); ?>Welcome/getAllMemberDetails",
             method:"GET",
             dataType : 'json',
             success:function(memberData){
                 var data=memberData;
                 mainData=memberData;
                 console.log("Data is ",data);
                 if (searchValue.length == 0) {
                     commomMapfunction(mainData)
                 } else {
                 onSearch();
                 }   

             },
             error:function (xhr, ajaxOptions, thrownError){
                 alert('error');
             }

         })


        
     }
 let searchArray=[];
 var selectValue=[];
 var searchValue='';
 var postFlag=0;
 var locationFlag=0;


     function commomMapfunction(array){
         // console.log("commomMapfunction",array);
         let mappedCards=[];
         array.map((member,index)=>{
                 mappedCards += ` <div class="col-md-3 mb-5 col-md-4 col-sm-6 text-center team-person-div">
                     <a href="<?=base_url()?>welcome/TeamAboutMe?name=${member.key_name}" class="memberpage">
                     <div class="mx-auto " style="width: 200px; height: 200px; overflow: hidden;">
                         <img src="<?=base_url()?>${member.image}" class="w-100 rounded-circle change-img-filter" alt="">
                     </div>
                     <div class="desc-div-team py-2">
                     <div class='py-2'>
                     <h2 class="memberName mb-0" style='' >${member.name}</h2>
                     <p class="normalText mt-2 mb-2" style= ''>${member.designation}</p>
                     <p class="details mb-0" style= ''>${member.email}</p>
                   
                     </div>
                     </div>
                 </a>
             </div>`
     })
     $("#membersDiv").html(mappedCards); 
     }

     // <p class="details mb-0" style= ''>${member.location}</p>

     function onSearch(){
         let filteredData = []; 
         let mappedCards=[];
         console.log(searchArray,'hdchjs');
         console.log(postFlag == 0 && locationFlag == 0,'flaggg');
         let mapArray= postFlag == 0 && locationFlag == 0 ?  mainData : searchArray
         if(event.target.value !== undefined){
         searchValue = event.target.value.toLowerCase();
         for (var i = 0; i < mapArray.length; i++) {
         var obj = mapArray[i];
         if (obj.name.toLowerCase().includes(searchValue) || obj.designation.toLowerCase().includes(searchValue)) { 
             filteredData.push(obj);    
         }
         }
         }
     //    console.log(filteredData,'filter data');
     searchArray=filteredData;
     console.log(searchArray,'hdchjs');
     // console.log(searchArray,'searchArray');
     commomMapfunction(filteredData);
         if (postFlag == 0 && locationFlag==0 && searchValue.length == 0) {
     
             document.getElementById("reset-button").disabled=true;
             document.getElementById("reset-button").title='No Filters Applied'
         } else {
             document.getElementById("reset-button").disabled=false;
             document.getElementById("reset-button").setAttribute.title='Clear All Filters'
         }
     }
     function onSelectPost(searchArray) {
         let mappedCards = [];
         let filteredData = [];
         
         // Determine the array to use based on searchValue and locationFlag
         let filterArray = searchValue == 0 && locationFlag == 0 ? mainData : searchArray;

         if (event.target.value == 'Our Services') {
             // If the "Our Services" option is selected, reset the postFlag and use mainData
             postFlag = 0;
             filteredData = filterArray;
             defaultSelectPost = event.target.value;
         } else {
             // If a specific post is selected, set postFlag to 1 and filter based on the selected value
             postFlag = 1;
             filteredData = filterArray.filter(function (obj) {
                 return obj.designation === event.target.value;
             });
             selectValue = filteredData;
             searchArray = filteredData;
         }
         
         commomMapfunction(filteredData);
         if (postFlag == 0 && locationFlag==0 && searchValue.length == 0) {
    
                 document.getElementById("reset-button").disabled=true;
                 document.getElementById("reset-button").title='No Filters Applied'
             } else {
                 document.getElementById("reset-button").disabled=false;
                 document.getElementById("reset-button").title='Clear All Filters';
             }
     }


     function onSelectLocation(searchArray){
         console.log(event.target.value);
         let mapArrayLocation= searchValue.length == 0 && postFlag == 0  ? mainData : searchArray
         if(event.target.value == 'location'){
             locationFlag=0;
             return commomMapfunction(mapArrayLocation)
         }
         else{
             locationFlag=1;
             var nameObject=mapArrayLocation.filter((object) => {
             return  object.location.includes(event.target.value)
             })
             console.log(nameObject);
             searchArray=nameObject;
             commomMapfunction(nameObject)
         }
         if (postFlag == 0 && locationFlag==0 && searchValue.length == 0) {
    
             document.getElementById("reset-button").disabled=true;
             document.getElementById("reset-button").title='No Filters Applied'
         } else {
             document.getElementById("reset-button").disabled=false;
             document.getElementById("reset-button").title='Clear All Filters'
         }
     }


</script>
<body onload="onLoadPage()">
    <!-- header  -->
    <?php include_once "header.php" ?>
    <!-- banner  -->
    <div class="ecovis_insia_banner">
        <div class="align-items-center ecovisIndiaBanner d-flex justify-content-around pageBanner">
            <div class=""> 
                 <!-- <p class="mainHeading text-center text-light" style="font-family: 'Libre Baskerville', serif; font-size:3rem; color: white;">ECOVIS India</p> -->
               <h1 style="font-family: 'Libre Baskerville', serif; font-size:3.4rem; color: white;" class="text-center  cssanimation fadeInBottom">Our Ecovis India Team</h1>
              
                 <p class="text-center cssanimation fadeInBottom" style="color: white; font-size:1.4rem;font-family:cursive">The people who inspire better business</p>
            </div>
            <!-- <img src="" alt=""> -->
            </div>
            <div class="row" style="margin-top: -80px ;flex-wrap: initial;margin-right: 0px;">
                <div class="red-info-div-1 col-md-6 col-sm-1 " style="border-radius: 0px 78px 0px 0px;">
                </div>
                <div class="red-info-div-2 col-md-6 col-sm-1" style="border-radius: 76px 0px 0px 0px;">
                </div>
                </div>
                <div class="red-info col-md-12">
                         <p class='w-75'> Enhance and grow your business using our expertise and services! Our team is our most valuable asset since they work together and integrate unique approach, backgrounds, and individual expertise to build your business.</p>
                         <p class='w-75'> Entrepreneurial Model Driven by Common values and accountable governing structure</p>
                </div>
                <div class="d-flex" >
                <div class="col-md-2"></div>     
                <div class="col-md-8 d-flex justify-content-evenly ourTeamDropDowndiv" style="flex-wrap: inherit;">
                <div  class="dropdown col-md-4 py-2"> 
                 <input type="text" name="" id="" class="team-search" placeholder="-- Search For Someone --" onkeyup="onSearch()">
                </div>
                <div class="dropdown col-md-4  py-2"> 
                <select class="form-select" aria-label="Default select example" id="form-select-post" onchange="onSelectPost()" placeholder="-- Practice Areas --">
                <option selected value="Our Services">-- Practice Areas --</option>
                <option class="options" value="Strategy & Performance Consulting">Strategy & Performance Consulting</option>
                <option class="options" value="On shore and Off shore Advisory">On shore and Off shore Advisory</option>
                <option class="options" value="Governance Risk & Compliance">Governance Risk & Compliance</option>
                <option class="options" value="Business Support & Financial Reporting">Business Support & Financial Reporting</option>
                <option class="options" value="Litigation & Legal Services">Litigation & Legal Services</option>
                <option class="options" value="Financial & Capital Services">Financial & Capital Services</option>
                <option class="options" value="Digital Transformation">Digital Transformation</option>
                <option class="options" value="Cross Border & Merchant Banking Advice">Cross Border & Merchant Banking Advice</option>
                </select>
                </div>
                <div class="dropdown col-md-4 py-2"> 
                <select class="form-select" aria-label="Default select example" onchange="onSelectLocation()" placeholder='-- Location --'>
                <option selected  value="location" >-- Location --</option>
                <option class="options" value="Nariman Point,Mumbai">Nariman Point,Mumbai</option>
                <option class="options" value="Vikhroli - W, Mumbai">Vikhroli - W, Mumbai</option>
                <option class="options" value="Kolkata">Kolkata</option>
                <option class="options" value="Dhantoli, Nagpur">Dhantoli, Nagpur</option>
                <option class="options" value="7 Mall Road, Kolkata">7 Mall Road, Kolkata</option>
                <option class="options" value="Vashi, Navi Mumbai">Vashi, Navi Mumbai </option>
                <option class="options" value="Raj Bhavan Road, Hyderabad">Raj Bhavan Road, Hyderabad</option>
                <option class="options" value="Ganga Soc, Shahibaug">Ganga Soc, Shahibaug</option>
                <option class="options" value="Konditope, Chennai">Konditope, Chennai</option>
                <option class="options" value="Shastri Nagar, New Delhi">Shastri Nagar, New Delhi</option>
                </select>
                </div>
                </div>
                <div class="col-md-2"></div>
                </div>
                   
            </div>

                <!-- <button id="playButton">Play Video</button>
               <div id="videoContainer">
               <iframe id="player2" width="560" height="315" src="https://www.youtube.com/embed/cs1e0fRyI18" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
               </div> -->


        <div class=" w-100 arrow">
            <!-- 
            <div class="border-0 kwadrat2 mt-0 mx-auto">
                <div class="trojkat2">
                    <div class="trojkat_bg2"></div>
                </div>
            </div> -->
            <!-- our team  -->
        <div class="our_team my-5">
                <!-- <h1 style="font-family: 'Libre Baskerville', serif; font-size:2.4rem; color: #d63242;" class="text-center team-person-div">Our India Team</h1>
                <div class="row justify-content-around " style="margin: 3.5rem 0rem;"> -->
                <!-- <div class="col-md-8">
                    <div class="text-center"> -->
                        <!-- <h2 class="text-center primaryHeading ">Management Board</h2> -->
                    <!-- </div>
                </div> -->
            <!-- </div> -->
            <div class="teamMets">
                
        <div class=" mx-0 row" id="membersDiv">
                
                
            <div class="row mx-0 mx-xl-5"> </div> 
        </div>
        
            <!-- <h1 style="font-family: 'Libre Baskerville', serif; font-size:2.4rem; color: black; padding:30px 0px" class="text-center  cssanimation fadeInBottom">A GLOBAL NETWORK WORKING TOGETHER</h1> -->
            <!-- <div style="width: 100%;  display: flex; justify-content: center;padding:20px 0px;background-color: #f2f2f2;">
                <img src="<?= base_url()?>assets/images/map_image/Picture500.png" class="w-75 "  alt=""></div> -->
                <!-- <div class="main-content">
                    <section class="section">
                        <div class="section-body">
                            <div class="row mx-0">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-body mb-4">
                                            <div class="mx-auto text-center w-75 position-relative">
                                                <img src="<?= base_url()?>assets/images/map_image/INDIA.png" alt="" class="w-50">
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: -2%;right: 30%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">70+ Countries Expertise Access</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 36%;right: 11%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">3000+ Clients Advised</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 67%;right: 32%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">Covering all major cities</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="top: 9%;left: 12%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">40+ Industries Served</p>
                                                </div>
                                                <div class="india_team_point align-items-center border d-flex justify-content-center rounded-circle" style="bottom: 9%;left: 17%;">
                                                    <p class="font-weight-bold mb-0 text-center" style="width: 90%;">50+ Years in India</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div> -->


            <!-- </div> -->
            
        </div>
        <div class="office_Address row mb-5 mx-0 justify-content-around">
            <div class="col-12 mb-5">
            <h1 style="font-family: 'Libre Baskerville', serif; font-size:2.4rem;" class="text-center text-danger team-person-div">Located in all the major cities</h1>

            <!-- <h3 class="font-weight-normal text-center"></h3> -->
            </div>
            <div class="col-md-6 team-person-div">
                <div class="col-md-7 mx-auto pb-2 pt-4 text-center " style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                    <div class="mb-4">
                        <img src="<?= base_url()?>assets/ecovis_icons/mumbai.png" class="office_state_img" alt="">
                        <h6 class="text-danger">CORPORATE OFFICE</h6>
                    </div>
                    <div class="">
                        <p class="small text-muted mb-0">Mentor</p>
                        <h6 class="text-danger">S C Kabra</h6>
                        <p class="px-4">515, Tulsiani chambers, Nariman Point, Mumbai 400 021</p>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="row justify-content-around my-5">
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/ahmedabad.png" class="office_state_img" alt="">
                            <h6 class="text-danger text-uppercase">ahmedabad</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">M D Kabra</h6>
                            <p>Naharraj Leela, 1 Ganga Soc, Shahibaug</p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/chennai.png" class="office_state_img" alt="">
                            <h6 class="text-danger">CHENNAI</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Rahul Nagar</h6>
                            <p>17/39, Krishnappa Tank St, Konditope, Chennai – 600 079</p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/delhi.png" class="office_state_img" alt="">
                            <h6 class="text-danger">DELHI</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Bharat Gupta</h6>
                            <p>A 531, Shastri Nagar, New Delhi – 110052</p>
                        </div>

                    </div>


                </div>
                <div class="row justify-content-around my-5">
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/hyderabad.png" class="office_state_img" alt="">
                            <h6 class="text-danger">HYDERABAD</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Jai Govind</h6>
                            <p>1st Flr, Ramky House, Raj Bhavan Road, Hyderabad – 500082 </p>
                        </div>

                    </div>

                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/indore.png" class="office_state_img" alt="">
                            <h6 class="text-danger">INDORE</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Siddharth Baghmar</h6>
                            <p>401, Fortune Ambience Business Spaces Indore (M.P) – 452001</p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/hyderabad.png" class="office_state_img" alt="">
                            <h6 class="text-danger">JAIPUR</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Chintamani Pareek</h6>
                            <p>B 77 Parshwanath colony Nirman nagar, Udhyan Path Ajmer road  Jaipur </p>
                        </div>

                    </div>

                </div>
                <div class="row justify-content-around my-5">
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/kolkata.png" class="office_state_img" alt="">
                            <h6 class="text-danger">KOLKATA</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Pradip Das</h6>
                            <p>4A/2, Anandam Apt, 7 Mall Road, Kolkata – 700 080</p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/mumbai.png" class="office_state_img" alt="">
                            <h6 class="text-danger">MUMBAI</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Hemant Vastani</h6>
                            <p>1902 C, Kailas Business Park, Vikhroli – W, Mumbai – 400 079</p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/mumbai.png" class="office_state_img" alt="">
                            <h6 class="text-danger">NAGPUR</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Deepak Heda</h6>
                            <p>2nd Floor, Bhiwapurkar Chambers, Dhantoli, Nagpur, Maharashtra 440012</p>
                        </div>

                    </div>



                </div>

                <div class="row justify-content-around my-5">
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/mumbai.png" class="office_state_img" alt="">
                            <h6 class="text-danger">Vashi</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Ram Varma</h6>
                            <p>513, Arenja Corner, Vashi, Navi Mumbai – 400 703. </p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; background-color: #f7f7f7;" >
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/ecovis_icons/kolk.png" class="office_state_img" alt="">
                            <h6 class="text-danger">PUNE</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Vishwanath Lele</h6>
                            <p>4A/2, Anandam Apartment, 7 Mall Road, Dum Dum, Kolkata 700 080 Contact: +91 88796 36056</p>
                        </div>

                    </div>
                    <div class="col-md-3 pb-2 pt-4 text-center team-person-div" style=" border-radius: 9px; box-shadow: 0px 2px 5px 1px #cac8c8; visibility:hidden;">
                        <div class="mb-4">
                            <img src="<?= base_url()?>assets/images/icon_images/hyderabad.png" class="office_state_img" alt="">
                            <h6 class="text-danger">JAIPUR</h6>
                        </div>
                        <div class="">
                            <p class="small text-muted mb-0">Mentor</p>
                            <h6 class="text-danger">Gaurav Choradia</h6>
                            <p>1st Flr, Ramky House, Raj Bhavan Road, Hyderabad – 500082 </p>
                        </div>

                    </div>

                </div>

            </div>


        </div>
    </div>
    </div>
    <!-- footer  -->
    <?php include_once "footer.php" ?>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/jqvmap/dist/jquery.vmap.min.js"></script>
    <script type="text/javascript" src="./js/jqvmap/dist/maps/jquery-jvectormap-in-merc.js" charset="utf-8"></script>
    <script src="./js/javascript.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>

    <script>
        // Get references to the input and select elements
        var filterInput = document.getElementById("team-search");
        var dropdown1 = document.getElementById("form-select-post");
        var dropdown2 = document.getElementById("form-select-location");

        // Get a reference to the Clear Filter button
        var clearFilterButton = document.getElementById("reset-button");

        // Add a click event listener to the Clear Filter button
        clearFilterButton.addEventListener("click", function () {
            // Reset the input field
            filterInput.value = "";
            console.log('cliked');
            // Reset the dropdown selections to their initial state (if it's the first option)
            dropdown1.selectedIndex = 0;
            dropdown2.selectedIndex = 0;
            commomMapfunction(mainData);
            clearFilterButton.disabled=true;
            clearFilterButton.title='No Filters Applied';
        });
    </script>

</body>

</html>