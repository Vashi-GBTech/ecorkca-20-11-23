<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOVISRKCA - Mentor Bi</title>
    <link rel="icon" href="<?= base_url()?>assets/images/ecovis_logoes/Ecovis_rkca_logo_ball.png" type="image/icon type">

</head>

<body>
    <!-- header  -->
    <?php include_once "header.php" ?>

    <!-- career nammer  -->
    <div class="align-items-center collabrationBanner d-flex justify-content-around pageBanner">
        <div class="">
            <!-- <p class="mainHeading text-center text-light">mentor BI</p> -->
            <div class="text-center">
                <img src="<?= base_url()?>assets/images/ecovis_logoes/Mentor_bi.png" class="mb-4" style="width: 180px !important;" alt="">

            </div>
            <p class="mx-auto normalText text-center text-justify text-light w-75">In a world defined by constant disruption, there is a growing need to impact business on multiple dimensions
                to ensure sustainable growth. No one person has all the answers. In this context, it becomes imperative for
                leaders to leverage the wisdom of many to find the solutions. It is this expertise of that mentor-bi consultants
                bring to partner businesses & leaders with this purpose of creating business impact. We call it <a href="https://mentor-bi.com/About-us" class="font-weight-bold" style="text-decoration: none; color:#df7b45;">“Co-creating Business
                Impact”</a>.</p>
        </div>
        <!-- <img src="" alt=""> -->
    </div>


    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->

        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <META HTTP-EQUIV="Expires" CONTENT="-1">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-B2F7122P0S"></script> -->
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-B2F7122P0S');
        </script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
        <!-- <link rel="icon" href="Mentor_Images/M-Logo.png"> -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" type="text/css" href="new_mentor_view.css"> -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&amp;display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/css_style.css"> -->
        <!-- <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf_viewer.min.css"> -->
        <!-- <title>Mentor</title> -->
        <style>
            body {
                font-family: raleway !important;

            }

            table th {
                padding: 7px !important;
            }

            table td {
                font-weight: 900;
                padding-left: 12px;
                border-top: none !important;
            }
        </style>
    </head>

    <body>

        <style>
    

            @media (max-width: 1280px) and (orientation: portrait) {
                #add_note {
                    display: none;
                }
                canvas {
                    height: 100vh;
                    width: 100vw;
                }
            } 

            .navbar_image {
                padding-left: 25px;
            }

            .navbar-brand:hover {
                background-color: transparent !important;
            }



            .class_active {
                background-color: #8e9196;
                color: white;
            }

            .recommend_button {
                border-radius: 19px;
                color: white;
                text-shadow: 2px 2px 4px #000000;
                background-color: #f58144;
                border-color: f58144;
                line-height: 19px;
                font-size: 16px;
                margin-bottom: 19px;
            }

            .recommend_button:hover {
                border-radius: 19px;
                color: white;
                text-shadow: 2px 2px 4px #000000;
                background-color: #f58144;
                border-color: f58144;
                line-height: 19px;
                font-size: 16px;
                margin-bottom: 19px;
            }

            .table_text {
                font-size: 15px;
                font-family: raleway !important;
            }

            .table_text th {
                font-weight: normal;
            }

            .table_text td {
                font-weight: normal;
            }


            .align_text {
                text-align: center;
            }
        </style>

        <div class="container" style="max-width:100%">
            <div id="main_divs">
                <div class="w-100 text-center mb-4" id="add_note">
                    <p class="mb-4 mt-4 primaryHeading text-center text-secondary">Select Your Challenges</p>

                    <div><b style="color: grey;font-size: 19px;">Initiate Business Impact</b>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="container" style="max-width: 100%;font-weight:normal;">
                            <!--  row 1 start -->
                            <form id="challenge_form">
                                <table class="table table-bordered table_text">
                                    <thead style="background-color:#818286;color:white;text-decoration:none;">
                                        <tr>
                                            <th rowspan="2" style="text-align:center;vertical-align:middle;">Sr. <br> No.</th>
                                            <th rowspan="2" style="vertical-align:middle;">Which of these challenges are you experiencing the most in your organisation? <br>Rank your <span style="text-decoration:underline;font-weight:bold;">Top3</span> Challenges with 1 being your top most challenge and click on Recommend Tools. </th>
                                            <th colspan="3" style="text-align:center;">Rank</th>

                                        </tr>
                                        <tr style="text-align:center;">

                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>

                                        </tr>
                                    </thead>
                                    <tbody id="tbody_challenge">
                                        <input type="hidden" id="ans_data" value="">
                                        <tr>
                                            <td class="align_text">1</td>
                                            <td id="que1">I see a lot of opportunities for business growth. However, the rest of the team is not aligned with it.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_1" value="Value Dynamics Diagnostic">
                                                <input type="radio" name="rank_1" id="q1_rank_1" value="Making Strategic Choices" onclick="radioSelect(1,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q1_rank_2" value="Making Strategic Choices" onclick="radioSelect(1,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q1_rank_3" value="Making Strategic Choices" onclick="radioSelect(1,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">2</td>
                                            <td id="que2">Our growth has not been as fast as we would like it to be.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_2" value="Value Dynamics Diagnostic">
                                                <input type="radio" name="rank_1" id="q2_rank_1" value="Making Strategic Choices" onclick="radioSelect(2,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q2_rank_2" value="Making Strategic Choices" onclick="radioSelect(2,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q2_rank_3" value="Making Strategic Choices" onclick="radioSelect(2,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">3</td>
                                            <td id="que3">We have not succeeded with many of our new products as planned.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_3" value="Value Dynamics Diagnostic">
                                                <input type="radio" name="rank_1" id="q3_rank_1" value="Making Strategic Choices" onclick="radioSelect(3,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q3_rank_2" value="Making Strategic Choices" onclick="radioSelect(3,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q3_rank_3" value="Making Strategic Choices" onclick="radioSelect(3,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">4</td>
                                            <td id="que4">Our profitability is not as high as we want it to be.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_4" value="Contact Us">
                                                <input type="radio" name="rank_1" id="q4_rank_1" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(4,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q4_rank_2" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(4,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q4_rank_3" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(4,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">5</td>
                                            <td id="que5">We have cash flow challenges.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_5" value="Contact Us">
                                                <input type="radio" name="rank_1" id="q5_rank_1" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(5,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q5_rank_2" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(5,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q5_rank_3" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(5,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">6</td>
                                            <td id="que6">If only we had more funds, we would grow faster.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_6" value="Contact Us">
                                                <input type="radio" name="rank_1" id="q6_rank_1" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(6,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q6_rank_2" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(6,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q6_rank_3" value="Enhancing Capital & Financial Effectiveness" onclick="radioSelect(6,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">7</td>
                                            <td id="que7">We struggle in assessing the performance of our people</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_7" value="Performance Culture Profile">
                                                <input type="radio" name="rank_1" id="q7_rank_1" value="Enhancing Performance & Execution" onclick="radioSelect(7,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q7_rank_2" value="Enhancing Performance & Execution" onclick="radioSelect(7,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q7_rank_3" value="Enhancing Performance & Execution" onclick="radioSelect(7,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">8</td>
                                            <td id="que8">We are not consistent in our performance year-on-year.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_8" value="Performance Culture Profile">
                                                <input type="radio" name="rank_1" id="q8_rank_1" value="Enhancing Performance & Execution" onclick="radioSelect(8,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q8_rank_2" value="Enhancing Performance & Execution" onclick="radioSelect(8,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q8_rank_3" value="Enhancing Performance & Execution" onclick="radioSelect(8,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">9</td>
                                            <td id="que9">We have difficulty in scaling up.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_9" value="Performance Culture Profile">
                                                <input type="radio" name="rank_1" id="q9_rank_1" value="Enhancing Performance & Execution" onclick="radioSelect(9,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q9_rank_2" value="Enhancing Performance & Execution" onclick="radioSelect(9,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q9_rank_3" value="Enhancing Performance & Execution" onclick="radioSelect(9,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">10</td>
                                            <td id="que10">We have incured penalty or financial losses due to non compliance.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_10" value="GRC Ecosystem Diagnostic, GRC Implementation Validation Assessment">
                                                <input type="radio" name="rank_1" id="q10_rank_1" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(10,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q10_rank_2" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(10,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q10_rank_3" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(10,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">11</td>
                                            <td id="que11">Our statutory audits highlight many areas of improvement.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_11" value="GRC Ecosystem Diagnostic, GRC Implementation Validation Assessment">
                                                <input type="radio" name="rank_1" id="q11_rank_1" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(11,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q11_rank_2" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(11,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q11_rank_3" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(11,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">12</td>
                                            <td id="que12">We are constantly fire fighting.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_12" value="GRC Ecosystem Diagnostic, GRC Implementation Validation Assessment">
                                                <input type="radio" name="rank_1" id="q12_rank_1" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(12,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q12_rank_2" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(12,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q12_rank_3" value="Governance, Risk Mitigation & Compliance" onclick="radioSelect(12,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">13</td>
                                            <td id="que13">Our employees are not clear about their responsibilities.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_13" value="Talent Ecosystem Assessment Map">
                                                <input type="radio" name="rank_1" id="q13_rank_1" value="Engaging with Talent" onclick="radioSelect(13,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q13_rank_2" value="Engaging with Talent" onclick="radioSelect(13,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q13_rank_3" value="Engaging with Talent" onclick="radioSelect(13,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">14</td>
                                            <td id="que14">We don't get best quality talent.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_14" value="Talent Ecosystem Assessment Map">
                                                <input type="radio" name="rank_1" id="q14_rank_1" value="Engaging with Talent" onclick="radioSelect(14,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q14_rank_2" value="Engaging with Talent" onclick="radioSelect(14,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q14_rank_3" value="Engaging with Talent" onclick="radioSelect(14,this.id)"></td>
                                        </tr>
                                        <tr>
                                            <td class="align_text">15</td>
                                            <td id="que15">My team is not competent enough.</td>
                                            <td class="align_text"><input type="hidden" id="queDiag_15" value="Talent Ecosystem Assessment Map">
                                                <input type="radio" name="rank_1" id="q15_rank_1" value="Engaging with Talent" onclick="radioSelect(15,this.id)">
                                            </td>
                                            <td class="align_text"><input type="radio" name="rank_2" id="q15_rank_2" value="Engaging with Talent" onclick="radioSelect(15,this.id)"></td>
                                            <td class="align_text"><input type="radio" name="rank_3" id="q15_rank_3" value="Engaging with Talent" onclick="radioSelect(15,this.id)"></td>
                                        </tr>
                                        <!--<tr>
								<td>2</td>
								<td id="que2">Our growth has not been as fast as we would like it to be.</td>
								<td><input type="hidden" id="queDiag_2" value="Value Dynamics Diagnostic">
									<input type="radio" name="rank_1" id="q2_rank_1" value="Making Strategic Choices" onclick="radioSelect(2,this.id)"></td>
								<td><input type="radio" name="rank_2" id="q2_rank_2" value="Making Strategic Choices" onclick="radioSelect(2,this.id)"></td>
								<td><input type="radio" name="rank_3" id="q2_rank_3" value="Making Strategic Choices" onclick="radioSelect(2,this.id)"></td>
							 </tr>-->

                                    </tbody>
                                </table>
                                <div class="col-sm-12" style="text-align:right"><button type="button" class="btn btn-default recommend_button" onclick=challenge_que()>RECOMMEND SOLUTIONS</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!--footer-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
        <script src="own_pdf.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.entry.min.js"></script>-->
    </body>

    <script>
        $(document).ready(function() {
            localStorage.removeItem('arraypush');

            if (array1.length < 3) {
                $(".recommend_button").attr("disabled", "disabled");
            } else {
                $(".recommend_button").removeAttr("disabled");
            }
        });

        function challenge_question() {
            $.ajax({
                type: "POST",
                url: "https://mentor-bi.com/adduser.php",
                data: $('#challenge_form').serialize(),
                dataType: 'json',
                success: function(success) {
                    console.log(success);
                    if (success.status === 200) {
                        sessionStorage.email = $('#email').val();
                        downloadSinfleFile();
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function get_new_data(question_id, rank) {
            var aa = document.getElementById("ans_data").value;
            var res = aa.split(",");
            // console.log(res);
            // alert(res.length);
            for (i = 0; i < res.length; i++) {
                var arr = res[i];
                var res1 = arr.split("^");
                var que_id = res1[0];
                var ranko = res1[1];
                var old_str = que_id + "^" + rank;
                var new_str = question_id + "^" + rank;
                //console.log(aa);
                if (ranko == rank) {
                    //var res_p = aa.replace(old_str, ''); 
                    //console.log(old_str);
                    //console.log(new_str);
                    res[i] = new_str;

                }

            }
            console.log(res.join(","));
            var k = res.join(",");
            document.getElementById("ans_data").value = k;
        }
        var count = 0;
        var array1 = [];
        var arraylcl = localStorage.getItem('arraypush');
        //alert(arraylcl);
        if (arraylcl == null) {} else {
            array1 = arraylcl;
            console.log(array1);
        }
        var que_array = [];

        function radioSelect(question_id, option_id) {
            //alert(question_id);

            var opt_name = document.getElementById(option_id).name;
            //alert(opt_name);
            const index = array1.indexOf(opt_name);
            var str = $("#ans_data").val();

            if (index > -1) {

                get_new_data(question_id, opt_name);
                // already exist
            } else {
                //

                str += question_id + "^" + opt_name + ",";

                $("#ans_data").val(str);
                // str =str.replace(/,+$/,'');
                array1.push(opt_name);
                if (array1.length < 3) {
                    $(".recommend_button").attr("disabled", "disabled");
                } else {
                    $(".recommend_button").removeAttr("disabled");
                }
                /* array1.push(question_id);
                var opt_value=$("#"+option_id+"").val();
                var diag_value=$("#queDiag_"+question_id+"").val();
                var que_value=$("#que"+question_id+"").html();
                que_array.push(q_id=question_id,q_value=que_value,opt_value=opt_value,diag_value=diag_value); */

            }
            //count array length
            //length==3
            //alert  ==only three ques
            console.log(array1);
            console.log(que_array);
            if (array1.length > 3) {

            }
        }

        function challenge_que() {
            //alert(array1);
            var que_array1 = $("#ans_data").val();
            //alert(que_array1);
            localStorage.setItem('question_array', que_array1);
            localStorage.setItem('arraypush', array1);
            window.location.href = "https://mentor-bi.com/Solution&diagnosticTool.php";
        }
    </script>

    </html>






    <!-- footer  -->
    <?php include_once "footer.php" ?>

</body>

</html>