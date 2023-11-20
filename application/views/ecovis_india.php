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
  let MembersDatas=[
  { key:'Pankaj_Bhargava',
    img: '<?= base_url()?>assets/ourTeam_B&W/01_Pankaj_Bhargava.jpg', 
    Name: "Pankaj Bhargava",
    emailId: 'Pankaj_Bhargava@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Strategy & Performance Consulting',
    location:'7 Mall Road, Kolkata'
  },
  { key:'Sanjeev_Bindal',
    img: '<?= base_url()?>assets/ourTeam_B&W/06_Sanjeev_Bindal.jpg', 
    Name: "Sanjeev Bindal",
    emailId: 'Pankaj_Bhargava@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Litigation & Legal Services',
    location:'Ganga Soc, Shahibaug'
  },
  { key:'Dheeraj_Rathi',
    img: '<?= base_url()?>assets/ourTeam_B&W/02_Dheeraj_rathi.jpg', 
    Name: "Dheeraj Rathi",
    emailId: 'Dheeraj_Rathi@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Cross border & Merchant Banking Advice',
    location:'Raj Bhavan Road, Hyderabad'
  },
  { key:'Shruti_Ambegaonkar',
    img: '<?= base_url()?>assets/ourTeam_B&W/22_shruti.jpg', 
    Name: "Shruti Ambegaonkar",
    emailId: 'Shruti_Ambegaonkar@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Strategy & Performance Consulting',
    location:'Vikhroli - W, Mumbai '
  },
  { key:'Deepa_Rathi',
    img: '<?= base_url()?>assets/ourTeam_B&W/21_Deepa_rathi.png', 
    Name: "Deepa Rathi",
    emailId: 'Deepa_Rathi@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post :'On shore and Off shore Advisory',
    location:'Konditope, Chennai',
  },
  { key:'Pankaj_Monga',
    img: '<?= base_url()?>assets/ourTeam_B&W/23_pankaj_monga.jpeg', 
    Name: "Pankaj Monga",
    emailId: 'Pankaj_Monga@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Legal, Risk and IPR Practice',
    location:'Shastri Nagar, New Delhi'
  },
  { key:'Manish_Adukia',
    img: '<?= base_url()?>assets/ourTeam_B&W/05_Manish_Adukia.jpg', 
    Name: "Manish Adukia",
    emailId: 'Manish_Adukia@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Business Support & Financial Reporting',
    location:'Ganga Soc, Shahibaug'
  },
  { key:'Litigation',
    img: '', 
    Name: "Litigation",
    emailId: 'Litigation@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Litigation,GRC Transaction Advisory',
    location:'Kolkata'
  },
  { key:'Parag_Shah',
    img: '<?= base_url()?>assets/ourTeam_B&W/09_Parag_Shah.jpg', 
    Name: "Parag shah",
    emailId: 'Parag_shah@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Lead Financial and Capital Services',
    location:'Nariman Point,Mumbai'
  },
  { key:'Bharat_Mishra',
    img: '<?= base_url()?>assets/ourTeam_B&W/03_Bharat_Mishra.jpg', 
    Name: "Bharat Mishtra",
    emailId: 'Bharat_Mishtra@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Digital Transformation',
    location:'Dhantoli, Nagpur'
  },
  { key:'D._Bala',
    img: '<?= base_url()?>assets/ourTeam_B&W/10_Bala.png', 
    Name: "D. Bala",
    emailId: 'D_Bala@ecovis.co.uk' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Cross Border & Merchant Banking Advice',
    location:'Vashi, Navi Mumbai'
  },
  
  ]
  let Members =[
  { key:'Rameshwarlal_Badrilalji_Kabra',
    img: '', 
    Name: `Rameshwarlal Badrilalji Kabra`,
    emailId: 'rlkabra@rkca.net' ,
    specialist:['Close to 5 decades of experience across industries ', 'geographies and economic cycles.'],
    qualification:['B Com','FCA', 'CFE','CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Taxation',
    location:'7 Mall Road, Kolkata'
  },
  { key:'Asit_Pal',
    img: '<?= base_url()?>assets/ourTeam_B&W/asit_pal.png', 
    Name: "Asit Pal",
    emailId: 'asit@rkca.net' ,
    specialist:[],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Mentor',
    location:'7 Mall Road, Kolkata'
  },
  { key:'M_D_Kabra',
    img: '<?= base_url()?>assets/ourTeam_B&W/MDKabra.png', 
    Name: "M. D. Kabra",
    emailId: 'md.kabra@ecovis.co.uk' ,
    specialist:[],
    qualification:[],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Taxation',
    location:'7 Mall Road, Kolkata'
  },
  {  key:'S_C_Kabra',
    img: '<?= base_url()?>assets/ourTeam_B&W/SCKabra.png', 
    Name: "S. C. Kabra",
    emailId: 'sc.kabra@ecovisrkca.com' ,
    specialist:[],
    qualification:[],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Taxation',
    location:'7 Mall Road, Kolkata'
  },
  { key:'R_S_Kela',
    img: '<?= base_url()?>assets/ourTeam_B&W/r.s.kela.png', 
    Name: "R. S. Kela",
    emailId: 'rs.kela@ecovisrkca.com' ,
    specialist:['Tax Planning', 'Transfer Pricing',' Tax Litigation'],
    qualification:['LLB', 'Law','Advocate'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Strategy & Performance Consulting',
    location:'7 Mall Road, Kolkata'
  },
  {  key:'Dheeraj_Rathi',
    img: '<?= base_url()?>assets/ourTeam_B&W/02_Dheeraj_rathi.jpg', 
    Name: "Dheeraj Rathi",
    emailId: 'drathi@ecovisrkca.com' ,

    specialist:['Business Strategy Management Systems Consulting',"Risk Management Process Improvement Change Management"],

    qualification:['B Tech (JNVU)', 'MoM (IIT,B)','CIRM (APICS)',"USA Certified Fraud Examiner- USA","Forensic Audito"],

    linkedIn:'#',
    class:'col-lg-3',
    post:'Org Growth and Expansion',
    location:'Raj Bhavan Road, Hyderabad'
  },
  { key:'Pankaj_Bhargav',
    img: '<?= base_url()?>assets/ourTeam_B&W/01_Pankaj_Bhargava.jpg', 
    Name: "Pankaj Bhargav",
    emailId: 'Pankaj_Bhargava@ecovis.co.uk' ,
    specialist:['Human Resources Management Facilitation','Business Growth',
    'Business Strategy'],
    qualification:['B.Tech(IITB)',' PGDM HR (IIM K)','CToPF'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Org Culture and Accountability',
    location:'7 Mall Road, Kolkata'
  },
  { key:'Sanjeev_Bindal',
    img: '<?= base_url()?>assets/ourTeam_B&W/06_Sanjeev_Bindal.jpg', 
    Name: "Sanjeev Bindal",
    emailId: 'sanjeev.bindal@rkca.net' ,

    specialist:['Mergers and Acquisitions','Initial Public Offerings','Litigation Management','Compliance and Regulatory Affairs'],

    qualification:['LLB' ,'Law','FCS | Diploma in IPR and Insolvency Professional'],

    linkedIn:'#',
    class:'col-lg-3',
    post:'Litigation & Legal Services',
    location:'Ganga Soc, Shahibaug'
  },
  { key:'Deepa_Rathi',
    img: '<?= base_url()?>assets/ourTeam_B&W/21_Deepa_rathi.png', 
    Name: "Deepa Rathi",
    emailId: 'deepa@rkabra.net' ,
    specialist:['Information System Audit','Public Relations','Resolution Professional'],
    qualification:['CA','A certified Insolvency professional and Depository Participant| DISA |Concurrent Auditor| Forensic Auditor | Qualified CompanySecretary'],
    linkedIn:'#',
    class:'col-lg-3',
    post :'On shore and Off shore Advisory',
    location:'Konditope, Chennai',
  },
  { key:'Shruti_Ambegaonkar',
    img: '<?= base_url()?>assets/ourTeam_B&W/22_shruti.jpg', 
    Name: "Shruti Ambegaonkar",
    emailId: 'Shruti_Ambegaonkar@ecovisrkca.in' ,
    // specialist:['Corporate Tax','International Tax','VAT'],
    // qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Lead Strategy and Performance Consulting',
    location:'Vikhroli - W, Mumbai '
  },
  { key:'Manish_Adukia',
    img: '<?= base_url()?>assets/ourTeam_B&W/05_Manish_Adukia.jpg', 
    Name: "Manish Adukia",
    emailId: 'manish.a@ecovisrkca.com' ,
    specialist:['Business Valuation', 'Forensic Accounting', 'Strategic Financial Planning','Treasury Management', 'Capital Budgeting'],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Lead Business Support  and Financial Reporting',
    location:'Ganga Soc, Shahibaug'
  },
  { key:'Parag_Shah',
    img: '<?= base_url()?>assets/ourTeam_B&W/09_Parag_Shah.jpg', 
    Name: "Parag shah",
    emailId: 'Parag_shah@ecovis.co.uk' ,
    specialist:['Investment Analysis', 'Financial Forecasting Fraud Detection', 'Litigation Support Capital Budgeting','Financial Risk Management'],

    qualification:['Business law and auditing |CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Financial & Capital Services',
    location:'Nariman Point,Mumbai'
  },
  { key:'Bharat_Mishra',
    img: '<?= base_url()?>assets/ourTeam_B&W/03_Bharat_Mishra.jpg', 
    Name: "Bharat Mishtra",
    emailId: 'bharat@gbtech.in' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['B Tech (IIT-G)', 'MS (Georgia Tech, USA)','MBA (SP Jain)'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Lead Digital Transformation and Tech Solution',
    location:'Dhantoli, Nagpur'
  },
  { key:'D_Balasubramaniam',
    img: '<?= base_url()?>assets/ourTeam_B&W/10_Bala.png', 
    Name: "D. Balasubramaniam",
    emailId: 'd.bala@ecovisrkca.com' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['MBA','Financial and Banking Service'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Lead Legal and GRC Services',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Siddharth_Baghmar',
    img: '<?= base_url()?>assets/ourTeam_B&W/13_Siddharth_Baghmar.jpg', 
    Name: "Siddharth Baghmar",
    emailId: 'D_Bala@ecovis.co.uk' ,
    specialist:['Financial and Banking Service','Direct Taxation',' Indirect Taxation', 'Statutory & Internal Audits & GST.'],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Cross Border & Merchant Banking Advice',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Sanjay_Surana',
    img: '<?= base_url()?>assets/ourTeam_B&W/07_Sanjay_Surana.jpg', 
    Name: "Sanjay Surana",
    emailId: 'D_Bala@ecovis.co.uk' ,
    specialist:['Tax Planning','Transfer Pricing','GST Consulting','International Taxation'],
    qualification:['B Comm', 'FCA','DISA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Cross Border & Merchant Banking Advice',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Rajendra_Kothari',
    img: '', 
    Name: "Rajendra_Kothari",
    emailId: 'r.kothari@ecovisrkca.com' ,
    specialist:['Financial and Banking Service','Direct Taxation',' Indirect Taxation', 'Statutory & Internal Audits & GST.'],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Business Franchise',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Ram_Verma',
    img: '<?= base_url()?>assets/ourTeam_B&W/08_Ram_Verma.jpg', 
    Name: "Ram Verma",
    emailId: 'r.verma@ecovisrkca.com' ,
    specialist:['Statutory audits', 'internal audits','bank audits  & accounts across the industry sectors.'],
    qualification:['CA','Financial and Banking Service'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Business Franchise',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Manju_Latha_Boob',
    img: '<?= base_url()?>assets/ourTeam_B&W/12_Manju_Latha_Boob.jpg', 
    Name: "Manju Latha Boob",
    emailId: 'manju@ecovisrkca.com' ,
    specialist:['Taxation','Auditing','Financial Consulting'],
    qualification:['B Com', 'FCA', 'CFE (USA)'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Pradip_Das',
    img: '<?= base_url()?>assets/ourTeam_B&W/pradip-das.png', 
    Name: "Pradip Das",
    emailId: 'pradip@ecovisrkca.com',
    specialist:['Financial and Banking Service'],
    qualification:['B Com', 'FCA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Senior Partner',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Jaigovind_Boob',
    img: '<?= base_url()?>assets/ourTeam_B&W/14_Jaigovind_boob.jpg', 
    Name: "Manju Latha Boob",
    emailId: 'jaigovind@ecovisrkca.com' ,
    specialist:['Risk Management Consulting','Forensic Accounting','Corporate Governance', 'Process Optimization'],
    qualification:['B Com', 'FCA', 'CFE (USA)'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Rahul_Nagar',
    img: '<?= base_url()?>assets/ourTeam_B&W/11_Rahul_Nagar.jpg', 
    Name: "Rahul Nagar",
    emailId: 'jaigovind@ecovisrkca.com' ,
    specialist:['Assurance Services','Transaction Advisory','Internal Audits'],
    qualification:['B Com', 'FCA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Vashi, Navi Mumbai'
  },
  { key:'Pankaj_Monga',
    img: '<?= base_url()?>assets/ourTeam_B&W/23_pankaj_monga.jpeg', 
    Name: "Pankaj Monga",
    emailId: 'Pankaj_Monga@ecovis.co.uk' ,
    specialist:['Anti-Counterfeiting','Anti-Diversion','Product Tampering','IP Strategy'],
    qualification:['Diploma in Tax law', 'Diploma in Corporate laws and management'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Legal, Risk and IPR Practice',
    location:'Shastri Nagar, New Delhi'
  },
  { key:'K_C_Gupta',
    img: '<?= base_url()?>assets/ourTeam_B&W/kc_gupta.png', 
    Name: "K. C. Gupta",
    emailId: 'Pankaj_Monga@ecovis.co.uk' ,
    specialist:['Taxation'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Shastri Nagar, New Delhi'
  },
  ]
    let searchArray=[];
    var selectValue=[];
    var searchValue='';
    var postFlag=0;
    var locationFlag=0;
        function commomMapfunction(array){
            let mappedCards=[];
            array.map((member,index)=>{
                    mappedCards += ` <div class="${member.class} mb-5 col-md-4 col-sm-6 text-center team-person-div">
                        <a href="<?= base_url()?>TeamAboutMe?name=${member.key}" class="memberpage">
                        <div class="mx-auto " style="width: 200px; height: 200px; overflow: hidden;">
                            <img src=${member.img} class="w-100 rounded-circle change-img-${member.key}" alt="">
                        </div>
                        <div class="desc-div-team py-2">
                        <div class='py-2'>
                        <h2 class="memberName mb-0" style='' >${member.Name}</h2>
                        <p class="normalText mt-2 mb-2" style= ''>${member.post}</p>
                        <p class="details mb-0" style= ''>${member.emailId}</p>
                        <p class="details mb-0" style= ''>${member.location}</p>
                        </div>
                        </div>
                    </a>
                </div>`
        })
        $("#membersDiv").html(mappedCards); 
        }

        function onLoadPage(){
        if (searchValue.length == 0) {
            commomMapfunction(Members)
        } else {
        onSearch();
        }   
        }

        function onSearch(){
            let filteredData = []; 
            let mappedCards=[];
            let mapArray= postFlag == 0 && locationFlag == 0 ?  Members : searchArray
            if(event.target.value !== undefined){
            searchValue = event.target.value.toLowerCase();
            for (var i = 0; i < mapArray.length; i++) {
            var obj = mapArray[i];
            if (obj.Name.toLowerCase().includes(searchValue) || obj.post.toLowerCase().includes(searchValue)) {
            
                filteredData.push(obj);
                
            }
            }
            }
        //    console.log(filteredData,'filter data');
        searchArray=filteredData;
        commomMapfunction(filteredData);
        }
        function onSelectPost(){
            let mappedCards=[];
            let filteredData=[];
            let filterArray= searchValue  == 0 && locationFlag == 0 ? Members : searchArray;
            let count=0;
            console.log('visited' , count );
        console.log(searchArray,"###");
            if(event.target.value == 'Our Services'){
                postFlag=0;
                filteredData = filterArray;
                console.log(filteredData);
                defaultSelectPost=event.target.value;
            }
            else{
                postFlag=1;
            filteredData = filterArray.filter(function(obj) {
            return obj.post === event.target.value;
            });
            selectValue=filteredData
            searchArray=filteredData;
            }
            commomMapfunction(filteredData);
        }

        function onSelectLocation(){
            console.log(event.target.value);
            let mapArrayLocation= searchValue.length == 0 && postFlag == 0  ? Members : searchArray
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
    // document.addEventListener("DOMContentLoaded", function() {
    //   var player;

    //   function onYouTubeIframeAPIReady() {
    //     player = new YT.Player("videoContainer", {
    //       height: "100%",
    //       width: "100%",
    //       videoId: "znqUwx0b0HI", // Replace {VIDEO_ID} with the actual YouTube video ID
    //       playerVars: {
    //         autoplay: 1,
    //         controls: 1,
    //         modestbranding: 1,
    //         rel: 0
    //       },
    //       events: {
    //         onReady: onPlayerReady()
    //       }
    //     });
    //   }

    //   function onPlayerReady(event) {
    //     document.getElementById("playButton").addEventListener("click", function() {
    //       player.playVideo();
    //       document.getElementById("playButton").style.display = "none";
    //     });
    //   }

    //   // Load the YouTube Iframe API script
    //   var tag = document.createElement("script");
    //   tag.src = "https://www.youtube.com/iframe_api";
    //   var firstScriptTag = document.getElementsByTagName("script")[0];
    //   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    // });
  </script>

</body>

</html>