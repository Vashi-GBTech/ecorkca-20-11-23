<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Mentor Bi</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">
 <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/bootstrap.css">

       <!-- bootstrap javascript cdn  -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<script>
      let allCardsData = [
        {
            'startup': [
                { img: 'c1_baggingoutcomes_r.jpg', title: "Start-1(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'StartUP',marginLeft:'-26%'},
                { img: 'c2_lendinghand_r.jpg', title: "Start-1(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica',badge:'StartUP',marginLeft:'-26%' },
                { img: 'c3_Facilitationofcollective_r.png', title: "Start-1(c) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'StartUP',marginLeft:'-26%' },

            ]
        },
        {
            'manage': [
                { img: 'c4_facilitating_r.png', title: "Start-2(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica',badge:'Manage' ,marginLeft:'-27%'},
                { img: 'c5_renderingextensive_r.png', title: "Start-2(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Manage',marginLeft:'-27%'},
                { img: 'c6_assisstanceprovided_r.png', title: "Grow-1(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Manage' ,marginLeft:'-27%'},
                { img: 'c7_redesigning_of_an_r.png', title: "Grow-1(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Manage' ,marginLeft:'-27%'}
            ]
        },
        {
            'growth': [
                { img: 'c8_Tax_and_advisory_r.png', title: "Start-3(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Growth',marginLeft:'-26%'},
                { img: 'c9_Offering_continuous_r.png', title: "Start-3(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica',badge:'Growth' ,marginLeft:'-26%'},
                { img: 'c10_We_help_the_private_bank_r.png', title: "Manage-3(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica',badge:'Growth',marginLeft:'-26%' },
                { img: 'c11_We_help_the_start_ups_r.png', title: "Manage-3(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica',badge:'Growth' ,marginLeft:'-26%'},

            ]
        },
        {
            'restructure': [
                { img: 'c12_Recommendation_and_assistance_r.png', title: "Manage-1(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Restructure',marginLeft:'-35%'},
                { img: 'c13_SEKO_Group_r.png', title: "Manage-1(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Restructure',marginLeft:'-35%' },
                { img: 'c14_Scenario_Portugal_r.png', title: "Manage-3(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica'  ,badge:'Restructure',marginLeft:'-35%'},
                { img: 'c15_Ukraine_International_Airways_r.png', title: "Manage-3(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica'  ,badge:'Restructure',marginLeft:'-35%'},

            ]
        },
        {
            'exit': [
                { img: 'c7_redesigning_of_an_r.png', title: "Manage-2(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Exit',marginLeft:'-18%' },
                { img: 'c1_baggingoutcomes_r.jpg', title: "Manage-2(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Exit',marginLeft:'-18%'},
                { img: 'c9_Offering_continuous_r.png', title: "Grow-2(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Exit',marginLeft:'-18%' },
                { img: 'c14_Scenario_Portugal_r.png', title: "Grow-2(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' ,badge:'Exit' ,marginLeft:'-18%'}
            ]
        },
     
        // {
        //     'grow-2': [
        //         { img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6T3uFnfORbuzueZ9RxMphPpeRd9xQQU8jOQ&usqp=CAU', title: "Grow-2(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' },
        //         { img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQImMTtSbSJWHZkoPL5zKxtOgh33vQZWRTDQg&usqp=CAU', title: "Grow-2(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' }

        //     ]
        // },
        // {
        //     'grow-3': [
        //         { img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpfk2DrViDYNbNwI28RWMjuDXzaSyh5vhJMg&usqp=CAU', title: "Grow-3(a) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' },
        //         { img: 'https://t4.ftcdn.net/jpg/03/08/69/75/360_F_308697506_9dsBYHXm9FwuW0qcEqimAEXUvzTwfzwe.jpg', title: "Grow-3(b) card", description: 'Lizards are a widespread group of squamate reptiles, with over 6,000 species, ranging across all continents except Antarctica' }

        //     ]
        // },
        {
            'None':[]
        }

    ]
    $( document ).ready(function() {
    let mappedCards = '';
    allCardsData.map((cardData,index)=>{
        for(let x in cardData){
    
     cardData[x].map((card)=>{
        mappedCards+=  `<div class='col-md-4 d-flex '>
                        <div class="card singlecard" style="width:100%; margin: 30px 30px;">
                        <div class="d-flex"> <img class="card-img-top" src=<?= base_url()?>assets/images/clientStoriesImages/${card.img} alt="Card image cap" />
                        <span class="badge badge-danger" style="padding: 13px; margin-left:${card.marginLeft};height: fit-content;margin-top: 2%; z-index: 1;">${card.badge}</span></div> 
                            <div class="card-body">
                             <h5 class="card-title">${card.title}</h5>
                             <p class="card-text">${card.description}</p>
                            </div>
                            <div class="card-body">
            <button href="#"  type="button" class="btn btn-outline-danger"  varient='outlined'>Tell Me More</button>
        </div>
        </div> </div>`
        })
    }
     
    })

    // mappedCards+= '<div class="row">' + mappedCards.match(/(<div class='col-md-3'>){1,4}/g).map(row => `<div class="col-md-4">${row}</div>`).join('') + '</div>';
    $("#cardsdiv").html(mappedCards);
   }
  
)
function onSelectChanllenges(){
//    console.log(event.target.value,"selected");
let value=event.target.value;
        let mappedCards = '';
        if(value.toLowerCase() == 'your challenges'){
        allCardsData.map((cardData,index)=>{
        for(let x in cardData){
     cardData[x].map((card)=>{
        mappedCards+=  `<div class='col-md-4 d-flex '>
                        <div class="card singlecard" style="width:100%;">
                        <div class="d-flex"> <img class="card-img-top" src=<?= base_url()?>assets/images/clientStoriesImages/${card.img} alt="Card image cap" />
                        <span class="badge badge-danger" style="padding: 13px; margin-left:${card.marginLeft};height: fit-content;margin-top: 2%; z-index: 1;">${card.badge}</span></div> 
                            <div class="card-body">
                             <h5 class="card-title">${card.title}</h5>
                             <p class="card-text">${card.description}</p>
                            </div>
                            <div class="card-body">
            <button href="#"  type="button" class="btn btn-outline-danger"  varient='outlined'>Tell Me More</button>
        </div>
        </div> </div>`
        })
    }
    })  
}
     else{
        allCardsData.map((cardData,index)=>{
        for(let x in cardData){
            console.log(value);
        if(x== value.toLowerCase()){
            cardData[x].map((card)=>{
        mappedCards +=  `
                      <div class='col-md-4 d-flex'>
                       <div class="card  singlecard" style="width:100%;">
                        <div class="d-flex"> <img class="card-img-top" src=<?= base_url()?>assets/images/clientStoriesImages/${card.img} alt="Card image cap" />
                        <span class="badge badge-danger" style="padding: 13px; margin-left:${card.marginLeft};height: fit-content;margin-top: 2%; z-index: 1;">${card.badge}</span></div> 
                            <div class="card-body">
                             <h5 class="card-title">${card.title}</h5>
                             <p class="card-text">${card.description}</p>
                            </div>
                            <div class="card-body">
            <button href="#"  type="button" class="btn btn-outline-danger"  varient='outlined'>Tell Me More</button>
        </div>
        </div> </div>`
        })
        }
    }
    })
  }
    $("#cardsdiv").html(mappedCards);


}
  
</script>
<body>
    <!-- header  -->
    <?php include_once "header.php" ?>

    <!-- career nammer  -->
    <div class="align-items-center collabrationBanner d-flex justify-content-around pageBanner">
         
    </div>
       <div class="container">
        <div class="row">
       <div class="col-md-2"></div>     
       <div class="col-md-8 d-flex justify-content-evenly ourSolutionDropDowndiv">
        <div  class="dropdown col-md-6"> 
         <select class="form-select" aria-label="Default select example" onchange="onSelectChanllenges()">
        <option selected  value="Your Challenges">Your Challenges</option>
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
        <option class="options" value="Onshore & Offshore Advisory">Onshore & Offshore Advisory</option>
        <option class="options" value="Governance Risk & Compliance">Governance Risk & Compliance</option>
        <option class="options" value="Business Support & Financial Reporting">Business Support & Financial Reporting</option>
        <option class="options" value="Litigation & Legal Services">Litigation & Legal Services</option>
        <option class="options" value="Financial & Capital Services">Financial & Capital Services</option>
        <option class="options" value="Digital Tansformation">Digital Tansformation</option>
        <option class="options" value="Cross Border & Merchant Banking Advice">Cross Border & Merchant Banking Advice</option>
        </select>
        </div>
        </div>
        <div class="col-md-2"></div>   
        </div>

        </div>
        <div class="row " style="justify-content: center;"> 
        <div id="cardsdiv" class="col-md-10 col-sm-12" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; width: 300px;">
           <!-- cards will render here -->
        </div>
        </div>
</body>
</html>