<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Mentor Bi</title>
    <link rel="icon" href="<?=base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">
 <!-- bootstrap css cdn  -->
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/bootstrap.css">

       <!-- bootstrap javascript cdn  -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

<?php include_once "header.php" ?>

<div class='' style='background:#1d252d;height: 200px;display:flex;justify-content:center'>
<div class='aboutMeName' > <p id="name"></p></div>
</div>
<div class='container-fluid'>
    <div class="row">
        <div class="col-md-1 ">

        </div>
        <div class="col-md-3 py-4 justify-content-center" style="display: grid;" >
           <div class='w-100 justify-content-center' id="image-parent" style='display:flex;align-items:center'> 
            <img id="member-img" src="" alt="" style='width:250px ;border-radius:50%;box-shadow: 2px -1px 8px 2px;'>
        </div>
        <div class='d-flex w-100 justify-content-center py-2' style='color:#cd1432!important;font-size:20px;text-align:center;font-family:cursive'>
        <div>
             <p class='' id="post" style="font-size: 14px;font-weight: 700;color:black"></p>
             <p class='mb-0' id="email" style="font-size: 16px;"></p>
             <div class="m-4" style="height: 1px;background-color:#cd1432"></div>
        </div>
          
        </div>
       
        <div class=' w-100 d-flex justify-content-center py-2' >
        <div>
           <p class='mb-0' style='color:#cd1432!important;font-size:20px;font-family:cursive;text-align:center'>Specialist & Qualification Areas</p>
           <ul id="specialist-list" style="padding-left: 20px; margin-bottom: 0px;list-style: initial !important;text-align:center;">
             <li>list</li>
           </ul>
       </div>
         </div>
         <div class='w-100 justify-content-center d-flex py-2' >
         <!-- <div>
           <p class='mb-0' style='color:#cd1432!important;font-size:20px;font-family:cursive'>Qualifications</p>
           <ul style="padding-left: 20px; margin-bottom: 0px;list-style: initial !important;" id="qualification-list">
            <li>ACCA</li>
           </ul>
           </div> -->
         </div>
        </div>
        <div class="col-md-7 px-4" >
            <div class="" style='color:#cd1432!important;; font-family:cursive;font-size :20px;height: 130px;display: flex;' >
                <p style='display:flex;align-items:end'>A bit About me</p>
            </div>
            <p id="about-me"></p>

             <div class='d-flex w-100 justify-content-left py-2' > 
            <!-- <div>
           <button href="#"  type="button" class="btn btn-outline-danger"  varient='outlined' style="padding: 5px 49px !important;color: #cd1432 !important;border-color:#cd1432 !important">Connect on LinkedIn</button>
            </div>  -->
          </div> 
        </div>
        <div class="col-md-1">
            
        </div>
    </div>

</div>
</body>
<script>  var baseUrl = "<?= base_url() ?>";</script>
<script>

let Members =[
   { key:'Rameshwarlal_Badrilalji_Kabra',
    img: '', 
    Name: `Rameshwarlal Badrilalji <br> Kabra`,
    emailId: 'rlkabra@rkca.net' ,
    specialist:['Close to 5 decades of experience across industries ', 'geographies and economic cycles.'],
    qualification:['B Com','FCA', 'CFE','CA'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Taxation',
    location:'7 Mall Road, Kolkata',
    about :[
      "I am Rameshwarlal Badrilalji Kabra, a highly experienced financial professional with close to five decades of experience across industries, geographies, and economic cycles. As the Founding Partner of ECOVIS RKCA, I have played an instrumental role in developing the firm's capabilities and reputation in the industry.",
      "I hold a Bachelor's degree in Commerce and am a Chartered Accountant (CA). Additionally, I am a Certified Fraud Examiner (CFE), which highlights my expertise in detecting, investigating, and preventing fraud. My vast experience and knowledge in finance have made me a trusted advisor to my clients, and I have served clients across various sectors such as education and training, telecommunication, and healthcare.",
      "Throughout my career, I have gained a deep understanding of the market, which has enabled me to provide my clients with valuable insights and solutions to their financial challenges. As the Founding Partner of ECOVIS RKCA, I have been responsible for leading the firm's financial strategy and ensuring that our team delivers high-quality services to our clients.",
      "Apart from my professional achievements, I am also actively involved in various social initiatives aimed at improving the lives of the underprivileged. Giving back to society is a cause close to my heart, and I have supported several charitable causes over the years.",
      "In conclusion, I take great pride in my accomplishments in the field of finance and banking. My expertise, experience, and leadership have helped establish ECOVIS RKCA as a trusted financial and banking service provider in the industry."
    ]
   },
   { key:'Asit_Pal',
    img: './OurTeam/asit_pal.png', 
    Name: "Asit Pal",
    emailId: 'asit@rkca.net' ,
    specialist:[],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Mentor',
    location:'7 Mall Road, Kolkata',
    about: []
   },
  { key:'M_D_Kabra',
    img: './OurTeam/MDKabra.png', 
    Name: "M. D. Kabra",
    emailId: 'md.kabra@ecovis.co.uk' ,
    specialist:[],
    qualification:[],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Taxation',
    location:'7 Mall Road, Kolkata',
    about:[]
  },
  {  key:'S_C_Kabra',
    img: './OurTeam/SCKabra.png', 
    Name: "S. C. Kabra",
    emailId: 'sc.kabra@ecovisrkca.com' ,
    specialist:[],
    qualification:[],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Taxation',
    location:'7 Mall Road, Kolkata',
    about:[]
  },
  { key:'R_S_Kela',
    img: './OurTeam/r.s.kela.png', 
    Name: "R. S. Kela",
    emailId: 'rs.kela@ecovisrkca.com' ,
    specialist:['Tax Planning', 'Transfer Pricing',' Tax Litigation'],
    qualification:['LLB', 'Law','Advocate'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Strategy & Performance Consulting',
    location:'7 Mall Road, Kolkata',
    about:[
      "Hello, I am RS Kela, a legal professional with extensive experience in handling litigations in the Supreme Court, high courts, and tribunals. I hold an LLB degree and have worked as an Advocate in the field of litigation and legal services for over five decades.",
      "Throughout my long and illustrious career, I have handled cases across all major branches of law, and my expertise in tax planning, transfer pricing, and tax litigation is well-known in the legal fraternity. I have also worked extensively in the field of biotechnology and have been involved in several high-profile cases involving cross-border transactions, advance pricing agreements, transfer pricing documentation, and appellate practice.",
      "As a legal professional, I am committed to providing my clients with the best possible legal advice and solutions. I understand that legal issues can be complex and stressful, and I take a compassionate and client-centric approach to every case I handle. My goal is to ensure that my clients' interests are protected and that they achieve the best possible outcome in their legal matter.",
      "Apart from my legal practice, I am also deeply committed to giving back to society. I have been involved in several charitable initiatives over the years and have worked with organizations that aim to uplift the underprivileged and marginalized sections of society.",
      "In conclusion, my 50 years of experience in the legal profession has given me a deep understanding of the intricacies of the law and the legal system. As a legal professional, I am committed to providing my clients with the best possible legal advice and solutions, and I am proud of the positive impact I have had on the lives of my clients and the community at large."
    ]
  },
  {  key:'Dheeraj_Rathi',
    img: './OurTeam/02_Dheeraj_rathi.jpg', 
    Name: "Dheeraj Rathi",
    emailId: 'drathi@ecovisrkca.com' ,

    specialist:['Business Strategy Management Systems Consulting',"Risk Management Process Improvement Change Management"],

    qualification:['B Tech (JNVU)', 'MoM (IIT,B)','CIRM (APICS)',"USA Certified Fraud Examiner- USA","Forensic Audito"],

    linkedIn:'#',
    class:'col-lg-4',
    post:'Cross border & Merchant Banking Advice',
    location:'Raj Bhavan Road, Hyderabad',
    about:[
      "Hey there! My name is Dheeraj Rathi, and I am the Managing Director at ECOVIS RKCA. My educational background includes a Bachelor's degree in Technology from JNVU, a Master's degree in Management from IIT Bombay, and a Certified in Integrated Resource Management (CIRM) from APICS. I am also a USA Certified Fraud Examiner and Forensic Auditor.",

      "I specialize in information technology, and my expertise extends to industries such as cement and textile. As a business strategist, I focus on management systems and risk consulting. I have had the privilege of working with Johnson and Johnson for over 10 years, where I gained invaluable experience in business strategy, management systems, and consulting.",

      "My areas of specialization include risk management, process improvement, and change management. I believe that effective risk management is critical to the success of any business, and I have worked with various organizations to help them develop and implement risk management strategies that are tailored to their specific needs.",

      "Process improvement is another area where I have made significant contributions. By streamlining processes and eliminating inefficiencies, I have helped organizations achieve significant cost savings and improve their bottom line.",

      "In addition to my work at ECOVIS RKCA, I am also deeply interested in promoting sustainable development and protecting the environment. I strongly believe that businesses have a crucial role to play in tackling climate change and ensuring a greener future for generations to come. I actively seek out opportunities to work with organizations that share this vision and use my expertise in management systems and risk consulting to help them achieve their sustainability goals. As a responsible citizen and a passionate environmentalist, I strive to make a positive impact on the planet and inspire others to do the same."
    ]
  },
  { key:'Pankaj_Bhargava',
    img: './OurTeam/01_Pankaj_Bhargava.jpg', 
    Name: "Pankaj Bhargava",
    emailId: 'Pankaj_Bhargava@ecovis.co.uk' ,
    specialist:['Human Resources Management Facilitation','Business Growth',
    'Business Strategy'],
    qualification:['B.Tech(IITB)',' PGDM HR (IIM K)','CToPF'],
    linkedIn:'#',
    class:'col-lg-4',
    post:'Strategy & Performance Consulting',
    location:'7 Mall Road, Kolkata',
    about:[
      "Hi there, my name is Pankaj Bhargava and I am the Managing Director at ECOVIS RKCA. I have a B. Tech degree from IIT Bombay and a PGDM in HR from IIM Kolkata. With over 25 years ofexperience in Human Resources and Organization Development, I have worked with various organizations in their business growth journey.",

      "One of my notable achievements is being the only certified CToPF (Certified ToP Facilitator) in India. This certification has enabled me to excel in my field and provide the best services to our clients.",

      "At ECOVIS RKCA, I specialize in taxation and have worked with various sectors such as infrastructure, metals, and mining. My expertise lies in human resources management, facilitation, business growth, and business strategy.I believe in building strong partnerships with organizations and providing them with management systems and risk consulting services to enhance their performance analysis and improvement. My focus is always on providing the best solutions to our clients, and I work hard to ensure that our clients' needs are met with the utmost satisfaction. I am passionate about my work and strive to make a positive impact in the industry. With my experience and expertise, I am committed to bringing success to our clients and the organization as a whole."
    ]
  },
  { key:'Sanjeev_Bindal',
    img: './OurTeam/06_Sanjeev_Bindal.jpg', 
    Name: "Sanjeev Bindal",
    emailId: 'sanjeev.bindal@rkca.net' ,

    specialist:['Mergers and Acquisitions','Initial Public Offerings','Litigation Management','Compliance and Regulatory Affairs'],

    qualification:['LLB' ,'Law','FCS | Diploma in IPR and Insolvency Professional'],

    linkedIn:'#',
    class:'col-lg-4',
    post:'Litigation & Legal Services',
    location:'Ganga Soc, Shahibaug',
    about :[
      "Hello there, my name is Sanjeev Bindal and I am a Partner at ECOVIS RKCA. I have a degree in Law and am a Fellow Member of the Institute of Company Secretaries of India (FCS). I have also pursued a Diploma in Intellectual Property Rights (IPR) and am an Insolvency Professional.With 23 years of experience in the legal field, I have handled various aspects of litigation and legal services, particularly in the retail sector. My expertise lies in JV, M&A, IPO, Secretarial matters, Litigation, Contract Management, Compliances & Regulatory Affairs.",

      "I have worked extensively in the areas of Mergers and Acquisitions, Initial Public Offerings, Litigation Management, Compliance and Regulatory Affairs. I have also been involved in Joint Ventures, Secretarial Matters, Contract Management, and Risk Management.",

      "I have had the opportunity to work with some of the biggest names in the retail industry and have assisted them in navigating complex legal issues related to mergers and acquisitions, joint ventures, regulatory compliance, and other matters.",

      "I strongly believe that my role as a legal professional is not just limited to providing legal advice but also to help my clients achieve their business objectives in a legal and ethical manner. I strive to understand the business needs of my clients and provide practical legal solutions that align with their goals.In addition to my professional work, I am also involved in various social initiatives aimed at giving back to the community. I believe that we have a responsibility to use our skills and expertise to make a positive impact on society and am committed to doing my part in this regard."
    ]
  },
  { key:'Deepa_Rathi',
    img: './ourTeam/deepa-rathi.jpg', 
    Name: "Deepa Rathi",
    emailId: 'deepa@rkabra.net' ,
    specialist:['Information System Audit','Public Relations','Resolution Professional'],
    qualification:['CA','A certified Insolvency professional and Depository Participant| DISA |Concurrent Auditor| Forensic Auditor | Qualified CompanySecretary'],
    linkedIn:'#',
    class:'col-lg-4',
    post :'On shore and Off shore Advisory',
    location:'Konditope, Chennai',
    about:[
      "Hello, my name is Deepa Rathi and I am a Managing Director at ECOVIS RKCA. I am a Chartered Accountant with 24 years of experience in financial restructuring, auditing, company law matters, and information system audit. I am also a certified Insolvency Professional, Depository Participant, DISA, and Forensic Auditor. My expertise extends to industries such as banking, gems and jewellery, and medical devices, and I have had the opportunity to serve international clients as well.",

      "I am passionate about helping organizations navigate the complexities of information technology and cybersecurity. In addition to my expertise in financial and legal matters, I also specialize in IT risk management, disaster recovery planning, digital forensics, and IT governance and compliance. I understand the importance of crisis management and reputation management in today's fast-paced digital landscape, and I am committed to helping organizations protect their assets and manage risks effectively. In addition to my corporate responsibilities, I am passionate about giving back to the community. I firmly believe in using my expertise and skills to make a positive impact on society. I have been involved in various initiatives aimed at empowering women, including providing education and skill-building programs.",

      "I believe that supporting women's empowerment is crucial to building a more inclusive society and promoting gender equality. By providing access to education and training, we can equip women with the tools they need to thrive in the workplace and achieve their goals.",

      "As a Resolution Professional, I have experience in debt resolution, liquidation and winding-up, asset recovery and realization, and legal proceedings. I believe that my diverse skill set and experience enable me to provide comprehensive solutions to clients across various industries. I am dedicated to staying up-to-date with the latest developments in my field and am constantly learning and growing as a professional."
    ]
  },
  { key:'Shruti_Ambegaonkar',
    img: './ourTeam/shruti-ambegaonkar.jpg', 
    Name: "Shruti Ambegaonkar",
    emailId: 'Shruti_Ambegaonkar@ecovisrkca.in' ,
    specialist:[],
    qualification:[],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Strategy & Performance Consulting',
    location:'Vikhroli - W, Mumbai ',
    about:[]
  },
  { key:'Manish_Adukia',
    img: './OurTeam/05_Manish_Adukia.jpg', 
    Name: "Manish Adukia",
    emailId: 'manish.a@ecovisrkca.com' ,
    specialist:['Business Valuation', 'Forensic Accounting', 'Strategic Financial Planning','Treasury Management', 'Capital Budgeting'],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Business Support & Financial Reporting',
    location:'Ganga Soc, Shahibaug',
    about:[
      "Hey there! As a Partner at ECOVIS RKCA, I have had the privilege of working with a diverse range of clients across various industries. My name is Manish Adukia, and my passion lies in providing top-notch business support, financial reporting, and investment banking advisory services to my clients. With over 15 years of experience in the field of finance and accounting, I have developed a unique set of skills that allows me to provide customized solutions to each of my clients.",

      "My expertise lies in business support, financial reporting, audits, and investment banking advisory services. I specialize in business valuation, forensic accounting, strategic financial planning, treasury management, and capital budgeting.Throughout my career, I have had the privilege of working with a wide range of clients, from startups to multinational corporations. My approach to client service is to always be attentive to their needs and provide tailored solutions that help them achieve their goals.",

      "In addition to my work at ECOVIS RKCA, I am also passionate about giving back to society. I have been involved in various initiatives aimed at promoting financial literacy and empowering women. As a financial professional, I believe that it is my responsibility to help others become financially independent and achieve their dreams.When I am not working, I enjoy traveling and exploring new cultures. I believe that experiencing different ways of life can broaden our perspectives and help us become more empathetic and understanding individuals. I am also an avid reader and enjoy learning about history, economics, and business strategy.Overall, I am deeply committed to providing exceptional client service, and I am always looking for ways to improve and innovate. Whether it's helping clients navigate complex financial challenges or supporting social causes, I am dedicated to making a positive impact on the world around me."
    ]
  },
  { key:'Parag_Shah',
    img: './OurTeam/09_Parag_Shah.jpg', 
    Name: "Parag shah",
    emailId: 'Parag_shah@ecovis.co.uk' ,
    specialist:['Investment Analysis', 'Financial Forecasting Fraud Detection', 'Litigation Support Capital Budgeting','Financial Risk Management'],

    qualification:['Business law and auditing |CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Financial & Capital Services',
    location:'Nariman Point,Mumbai',
    about:[
      "Hi, my name is Parag Shah and I am a Partner at ECOVIS EKCA. I have over 27 years of experience in various financial projects and industries, specializing in corporate finance, working capital, structured trade, and debt restructuring. My expertise also includes raising debts/equity, factorization, business modelling, finance strategy, and project feasibility.",

      "As a Chartered Accountant and a member of the Chartered Institute of Management Accountants (CIMA), I have a solid background in financial and banking services, particularly in the ports and roads sectors. Over the years, I have developed a strong skill set in business financial modeling, forensic financial analysis, strategic financial planning, treasury management, business valuation, human resources management, corporate finance, and regulatory compliance.",

      "I am particularly adept at investment analysis, financial forecasting, fraud detection, litigation support, capital budgeting, and financial risk management. My goal is to help my clients achieve their financial objectives and navigate complex financial challenges with confidence.I am dedicated to delivering top-notch business law and auditing services to clients at ECOVIS EKCA. Building strong client relationships is crucial to understanding their specific requirements and developing customizedsolutions that add value. I am confident that my extensive experience and expertise can assist businesses in achieving their goals and expanding their operations."
    ]
  },
  { key:'Bharat_Mishra',
    img: './OurTeam/03_Bharat_Mishra.jpg', 
    Name: "Bharat Mishtra",
    emailId: 'bharat@gbtech.in' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['B Tech (IIT-G)', 'MS (Georgia Tech, USA)','MBA (SP Jain)'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Digital Transformation',
    location:'Dhantoli, Nagpur',
    about:[]
  },
  { key:'D_Balasubramaniam',
    img: './OurTeam/10_D._Bala.JPG', 
    Name: "D. Balasubramaniam",
    emailId: 'd.bala@ecovisrkca.com' ,
    specialist:['Corporate Tax','International Tax','VAT'],
    qualification:['MBA','Financial and Banking Service'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Cross Border & Merchant Banking Advice',
    location:'Vashi, Navi Mumbai',
    about:[]
  },
  { key:'Siddharth_Baghmar',
    img: './OurTeam/13_Siddharth_Baghmar.jpg', 
    Name: "Siddharth Baghmar",
    emailId: 'D_Bala@ecovis.co.uk' ,
    specialist:['Financial and Banking Service','Direct Taxation',' Indirect Taxation', 'Statutory & Internal Audits & GST.'],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Cross Border & Merchant Banking Advice',
    location:'Vashi, Navi Mumbai',
    about:[]
  },
  { key:'Sanjay_Surana',
    img: './OurTeam/07_Sanjay_Surana.jpg', 
    Name: "Sanjay Surana",
    emailId: 'D_Bala@ecovis.co.uk' ,
    specialist:['Tax Planning','Transfer Pricing','GST Consulting','International Taxation'],
    qualification:['B Comm', 'FCA','DISA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Cross Border & Merchant Banking Advice',
    location:'Vashi, Navi Mumbai',
    about:[
      "Hello there! I am Sanjay Surana, As someone who strongly believes in the power of financial planning and compliance, I am excited to share with you my experience and expertise in the field of taxation. It has been said that taxes are the price we pay for a civilized society, and I couldn't agree more. My goal as a Senior Partner at ECOVIS RKCA is to help businesses navigate the complexities of income tax matters and ensure compliance with regulatory requirements.",

      "With a Bachelor's degree in Commerce and my designation as a Fellow Chartered Accountant, I have honed my skills in various areas of taxation, including income tax consulting, compliance, litigation, and advisory. I am also a certified DISA professional, which has provided me with additional expertise in information systems auditing.",

      "My focus is on providing advisory planning and compliance services to corporates in the banking and business franchise sectors. I understand that every business is unique and requires customized solutions to meet their specific needs. Whether it is tax planning, transfer pricing, GST consulting, or international taxation, my team and I work closely with clients to develop strategies that minimize their tax liabilities and maximize their profitability.At ECOVIS RKCA, we believe in building long-term relationships with our clients based on trust and mutual respect. Our goal is to provide high-quality, reliable, and efficient services that help businesses achieve their financial objectives. With my extensive experience and commitment to excellence, I am confident in my ability to assist businesses in navigating the complex world of taxation and ensuring their financial success."
    ]
  },
  { key:'Rajendra_Kothari',
    img: './ourTeam_B&W/10_Bala.png', 
    Name: "Rajendra_Kothari",
    emailId: 'r.kothari@ecovisrkca.com' ,
    specialist:['Financial and Banking Service','Direct Taxation',' Indirect Taxation', 'Statutory & Internal Audits & GST.'],
    qualification:['CA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Business Franchise',
    location:'Vashi, Navi Mumbai',
    about:[]
  },
  { key:'Ram_Verma',
    img: './OurTeam/08_Ram_Verma.jpg', 
    Name: "Ram Verma",
    emailId: 'r.verma@ecovisrkca.com' ,
    specialist:['Statutory audits', 'internal audits','bank audits  & accounts across the industry sectors.'],
    qualification:['CA','Financial and Banking Service'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Business Franchise',
    location:'Vashi, Navi Mumbai',
    about:[]
  },
  { key:'Manju_Latha_Boob',
    img: './OurTeam/12_Manju_Latha_Boob.jpg', 
    Name: "Manju Latha Boob",
    emailId: 'manju@ecovisrkca.com' ,
    specialist:['Taxation','Auditing','Financial Consulting'],
    qualification:['B Com', 'FCA', 'CFE (USA)'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Vashi, Navi Mumbai',
    about:[
      "Hey there, My name is Manju Latha Boob, and I am a partner at ECOVIS RKCA. I believe that everyone has the potential to achieve their goals and succeed in their endeavours. As an insolvency professional, certified forensic auditor, and certified concurrent auditor, I have a strong commitment to helping individuals and businesses navigate the complex world of taxation and financial management.",

      "My expertise in taxation covers both direct and indirect taxes, including GST, and I specialize in conducting statutory and management audits. I have extensive experience in the automobile and chemicals industries and am committed to providing the highest quality advisory and compliance services to our clients.",

      "In addition to taxation and auditing, I also offer financial consulting services that include direct and indirect taxation, GST, statutory audits, management audits, financial planning, and compliance services. I believe that every individual and business has unique needs and goals, and I work closely with my clients to develop tailored solutions that meet their specific requirements.",

      "My philosophy is based on a strong belief in the power of knowledge and the importance of staying up-to-date with the latest trends and developments in the field. As a B Com, FCA, CFE (USA) certified professional, I am dedicated to continuous learning and development to ensure that I can provide the highest level of service and expertise to my clients."

    ]
  },
  { key:'Pradip_Das',
    img: './OurTeam/pradip-das.png', 
    Name: "Pradip Das",
    emailId: 'pradip@ecovisrkca.com',
    specialist:['Financial and Banking Service'],
    qualification:['B Com', 'FCA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Senior Partner',
    location:'Vashi, Navi Mumbai',
    about:[]
  },
  { key:'Jaigovind_Boob',
    img: './OurTeam/14_Jaigovind_boob.jpg', 
    Name: "Jaigovind Boob",
    emailId: 'jaigovind@ecovisrkca.com' ,
    specialist:['Risk Management Consulting','Forensic Accounting','Corporate Governance', 'Process Optimization'],
    qualification:['B Com', 'FCA', 'CFE (USA)'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Vashi, Navi Mumbai',
    about:[
      "Hey there, my name is Jaigovind Boob and I am a Partner at ECVIS RKCA. With a B Com and FCA qualification, I have also earned certifications as a CFE (USA), Certified Concurrent Auditor and Certified Forensic Auditor. My expertise lies in Financial and Banking Services, with a focus on industries such as E-commerce, Education and Training, and Electronic System Design and Manufacturing.",

      "I have been in the industry for over 19 years, providing advisory services to large and medium-sized clients. My work primarily involves Internal Audits, Risk Management, Forensic Investigation, Due Diligence, Enterprise Risk Management, and Internal Financial Controls. I take pride in being able to provide my clients with valuable insights that help them optimize their processes and make informed decisions.",

      "As a Risk Management Consultant, I have helped many clients identify and mitigate potential risks, improving their overall resilience and stability. Additionally, I am a specialist in Forensic Accounting, having conducted numerous investigations and helped clients prevent fraud and financial mismanagement.Corporate Governance is another area that I am passionate about, and I have worked with several clients to implement effective governance frameworks. I am also experienced in Process Optimization, helping clients to streamline their operations and increase efficiency.",

      "My services extend to Internal Control Design and Implementation, Fraud Investigation and Prevention, Compliance Auditing and Reporting, and Cost Reduction and Efficiency Enhancement. I believe that by providing tailored solutions to my clients, I am able to help them achieve their goals and succeed in their respective industries.In conclusion, I am a dedicated and experienced professional who takes pride in providing high-quality advisory services to my clients. My expertise in Financial and Banking Services, along with my certifications and qualifications, allow me to offer valuable insights and solutions that help my clients succeed."
    ]
  },
  { key:'Rahul_Nagar',
    img: './OurTeam/11_Rahul_Nagar.jpg', 
    Name: "Rahul Nagar",
    emailId: 'jaigovind@ecovisrkca.com' ,
    specialist:['Assurance Services','Transaction Advisory','Internal Audits'],
    qualification:['B Com', 'FCA'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Vashi, Navi Mumbai',
    about:[]
  },
  { key:'Pankaj_Monga',
    img: './ourTeam/pankaj_monga.jpeg', 
    Name: "Pankaj Monga",
    emailId: 'Pankaj_Monga@ecovis.co.uk' ,
    specialist:['Anti-Counterfeiting','Anti-Diversion','Product Tampering','IP Strategy'],
    qualification:['Diploma in Tax law', 'Diploma in Corporate laws and management'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Legal, Risk and IPR Practice',
    location:'Shastri Nagar, New Delhi',
    about:[]
  },
  { key:'K_C_Gupta',
    img: './OurTeam/kc_gupta.png', 
    Name: "K. C. Gupta",
    emailId: 'Pankaj_Monga@ecovis.co.uk' ,
    specialist:['Taxation'],
    qualification:['ACCA','PH.D'],
    linkedIn:'#',
    class:'col-lg-3',
    post:'Partner',
    location:'Shastri Nagar, New Delhi',
    about:[]
  },
];


let mainData=[];

function onLoadPage(){

   


   
}
let loremIpsum=[
  "Hello, I’m Kate. As an Audit and Advisory Partner, I love working in the creative industries; enabling storytellers, content creators and editors to focus on their business, whilst trusting me and the team to look after the audit and accounting compliance and supporting their journey.",

  "Since joining Ecovis in 2007 I help creatives answer the question “how do I know what I need to know, when I don’t know I need to know it?” and am there every step of the way. From starting out (or perhaps walking out), through periods of high demand for their content and acceleration of their financial performance to an eventual exit, be that succession planning or weighing-up investment opportunities",

  "As Head of Media & Entertainment I am hugely passionate about supporting growing businesses and helping them realise their aspirational dreams. I am calm and conscientious, always available to help solve problems and help navigate tricky waters. I love nothing more than connecting with my peers, clients, team, contacts and competitors over a coffee or glass of wine.",

  " As an Audit Partner I take my responsibilities to help improve the standards of our profession seriously, and to ensure that we deliver what we say, when we say we will, with the utmost focus on quality, always."
]
$( document ).ready(function() {
  $.ajax({
        url:"<?php echo base_url(); ?>Welcome/getAllMemberDetails",
        method:"GET",
        dataType : 'json',
        success:function(memberData){
            // var data=memberData;
            mainData=memberData;
            console.log("Data is ",memberData); 
            let  url=window.location.href;
   let MemberName=url.split('?name=').pop();


      let data=mainData.filter(data => data.key_name === MemberName)
        console.log(data[0],'jnkjvbdfk');
        let profiledata=data[0];
        $("#name").html(profiledata.name);
        $("#email").html(profiledata.email);
        $('#post').html(profiledata.designation);
    var image = document.getElementById("member-img");
    var imageParent = document.getElementById("image-parent");
    image.src = baseUrl+profiledata.image; 
    imageParent.appendChild(image);
    let mappedSpecialist;
    let specialist=profiledata.education.length == 0 ? ['-'] :profiledata.education;
    let mapSpecialist= `<li class="mb-0 remove-width fw-bold" style='width: 240px;list-style: none;font-weight: 500;'>${profiledata.education}</li>`
    
    $('#specialist-list').html(mapSpecialist);
    let aboutMe = profiledata.key_name.length == 0 ? loremIpsum : loremIpsum;
    let mapAboutMe=aboutMe.map((data,index)=>{
      return `<p>${data}</p>`
    });
    $('#about-me').html(mapAboutMe);
        },
        error:function (xhr, ajaxOptions, thrownError){
            alert('error');
        }

    })
 



// let qualification=profiledata.vEducation.length == 0 ? ['-'] :profiledata.vEducation;
// let mapQualification=qualification.map((data,index)=>{
//   return  `<li class="mb-0 remove-width" style='width: 240px;'>${data}</li>`
// })

// $('#qualification-list').html(mapQualification);

}
)
</script>
</html>
