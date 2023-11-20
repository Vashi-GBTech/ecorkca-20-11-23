<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <!-- Include Bootstrap CSS, jQuery, and SweetAlert2 CSS and JS files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<style>
    .add-partner {
        background-image: url('<?= base_url() ?>assets/ecovis-images/b-1.jpg') !important;
        background-position: center center;
        background-size: cover;
        /* Adjust the size of the background image */
        background-repeat: no-repeat;
    }

    #employeeTable_length select {
        color: black !important;
    }
    .error {
            color: red;
        }

        .error-button-class {
            background-color: #FE735C !important;
        }
</style>

<body>
    <div id='getAccess'>
        <div class="container-fluid d-flex">

            <div class='col-md-6'>
                <img src="<?= base_url() ?>assets/ecovis-images/access.jpg" alt="access"
                    style="width:inherit;height: 100vh;" class='rounded-2'>
            </div>

            <div class='col-md-6 d-flex  align-items-center justify-content-center'>
                <div class="col-md-10 ">

                    <div class='d-flex justify-content-center' style='mix-blend-mode: hard-light;'>
                        <img src="<?= base_url() ?>assets/ecovis-images/user-logo.jpg" alt="access" style="width:100px;"
                            class=''>
                    </div>
                    <h5 class=''>Access With Credentials </h5>
                    <form class=''>
                        <div class="form-group">

                            <input type="email" class="form-control" id="email" name="email" required
                                placeholder='Email'>
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="password" name="password" required
                                placeholder='Password'>
                        </div>
                        <button type="button" class="btn btn-dark w-100" onclick="checkCredentials()">Login</button>
                    </form>
                </div>
            </div>

            <!-- <div class='col-md-1'></div> -->
        </div>
    </div>

    <div class='col-md-12 px-0' id="add-partner-main-div" style='display:none' onsubmit="saveForm()">

        <div class='d-flex add-partner' id='add-partner'>
            <div class='col-md-1'></div>
            <div class='col-md-4 my-5'>
                <div class="card rounded">

                    <form id="user_form" enctype="multipart/form-data" class='px-5 py-5'>
                        <h5>Enter The Details</h5>
                        <input type="hidden" name="emp_id" id="emp_id" value="">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="post">Designation:</label>
                            <input type="text" class="form-control" id="post" name="post" required>
                        </div>

                        <div class="form-group">
                            <label for="education">Education specialization:</label>
                            <input type="text" class="form-control" id="education" name="education" required
                                placeholder='separate with " , "'>
                        </div>
                        <div class="form-group">
                            <label for="desc">Profile Description:</label>
                            <!-- <input type="text" class="form-control" id="desc" name="desc" required placeholder='write something...'> -->
                            <textarea class="form-control" name="desc" required placeholder='write something...'
                                id="exampleTextarea" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <!-- <input type="submit" value="Submit" class="btn btn-primary" onclick="saveForm()" id="form_submit"> -->
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <div id="employeeTableDiv" style='display:none;background:lightgray' class=''>
        <div class='d-flex justify-content-center py-5'>
            <div class='card col-md-10 p-3'>
                <table id="employeeTable" border="1">
                    <thead>
                        <tr>
                            <th>SR No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Email</th>
                            <th>Education</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data will be populated here using AJAX -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <!-- <br>
    <hr><hr>
    <button class="btn btn-primary" id="get_img"> Get Img</button>
    <div id="display_img" display="none">
    </div> -->
    <script>  var baseUrl = "<?= base_url() ?>";</script>
    <script>
        // function checkCredentials() {
        //     var email = document.getElementById("email").value;
        //     var password = document.getElementById("password").value;

        //     if (email === "dheeraj.r@rkabara.com" && password === "Dheeraj@rathi123") {
        //         Swal.fire({
        //             title: 'Login Successful',
        //             text: 'You can access this page.',
        //             icon: 'success'
        //         }).then((result) => {
        //             document.getElementById('add-partner-main-div').style.display = 'block';
        //             document.getElementById('employeeTableDiv').style.display = 'block';
        //             document.getElementById('getAccess').style.display = 'none';
        //         });
        //     } else {
        //         Swal.fire({
        //             title: 'Login Error',
        //             text: 'You can\'t access this page. Invalid email or password.',
        //             icon: 'error',
        //             customClass: {
        //                 confirmButton: 'error-button-class'
        //             }
        //         });
        //     }
        // }
        // $('#user_form').submit(function (e) {
        //     e.preventDefault();
        // })
        // $('#user_form').validate({
        //     rules: {
        //         name: 'required',
        //         post: 'required',
        //         education: 'required',
        //         // desc: 'required',
        //         image: 'required',
        //     }
        // });

        // function saveForm() {
        //     let formd = document.getElementById('user_form');
        //     let formData = new FormData(formd);
        //     $.ajax({
        //         url: baseUrl + 'welcome/saveData',
        //         method: "POST",
        //         data: formData,
        //         contentType: false,
        //         processData: false,
        //         success: function (data) {
        //             data = JSON.parse(data);
        //             if (data.status === 200) {
        //                 Swal.fire({
        //                     position: 'center',
        //                     icon: 'success',
        //                     title: data.msg,
        //                     showConfirmButton: false,
        //                     timer: 5000,
        //                     customClass: {
        //                         container: 'my-swal'
        //                     }
        //                 })
        //                 $('#user_form')[0].reset();
        //                 $('#image').rules('add', {
        //                     required: true   // overwrite an existing rule
        //                 });
        //                 $('#emp_id').val('');

        //                 var table = $('#employeeTable').DataTable();
        //                 table.destroy();
        //                 $('#employeeTable tbody').empty();
        //                 // $('#employeeTable').empty();
        //                 getDataTable();

        //             } else if (data.status === 201) {
        //                 Swal.fire({
        //                     position: 'center',
        //                     icon: 'error',
        //                     title: data.msg,
        //                     showConfirmButton: false,
        //                     timer: 3000,
        //                     customClass: {
        //                         container: 'my-swal'
        //                     }
        //                 })
        //             }
        //         },
        //         error: function (err) {
        //             console.log(err);
        //         }
        //     });
        // }
        // $('#get_img').on('click', function(){
        //     $.ajax({
        //         type : "GET",
        //         // async : true,
        //         // crossDomain : true,
        //         url : baseUrl+"welcome/getImage",
        //         dataType : "json",
        //         success : function(result){
        //             var html = `<img src="${baseUrl}${result}" alt="image">`;
        //             $('#display_img').css('display', 'block');
        //             $('#display_img').html(html);
        //         },
        //         error: function(e){
        //             alert("Error");
        //         }
        //     })
        // })

    </script>

    <script>
        // $(document).ready(function () {
        //     // Fetch data using AJAX and populate the table
        //     // $.ajax({
        //     //     url: "<?php echo base_url(); ?>Welcome/getAllMemberDetails",
        //     //     method: 'GET',
        //     //     dataType: 'json',
        //     //     success: function (data) {
        //     //         console.log(data, 'hbdcibsdvihlbsdjvhb');
        //     //         // Loop through the data and populate the table
        //     //         for (var i = 0; i < data.length; i++) {
        //     //             let srno = i + 1;
        //     //             var row = '<tr>';
        //     //             row += '<td>' + srno + '</td>';
        //     //             row += '<td>' + data[i].vName + '</td>';
        //     //             row += '<td>' + data[i].vPost + '</td>';
        //     //             row += '<td>' + data[i].email + '</td>';
        //     //             row += '<td>' + data[i].vEducation + '</td>';
        //     //             row += '<td class="d-flex h-100" style="border-bottom:none"><button class="btn btn-outline-warning mx-1" onclick="editEmployee(' + data[i].id + ')"><i class="fas fa-edit"></i></button> <button class="btn btn-danger mx-1" onclick="deleteEmployee(' + data[i].id + ')"><i class="fas fa-trash-alt"></i></button></td>';
        //     //             row += '</tr>';
        //     //             $('#employeeTable tbody').append(row);
        //     //         }
        //     //         // Initialize DataTable after data is populated
        //     //         $('#employeeTable').DataTable();
        //     //     },
        //     //     error: function () {
        //     //         console.log('Error fetching data.');
        //     //     }
        //     // });
        //     getDataTable();
        // });

        // function getDataTable() {
        //     $.ajax({
        //         url: "<?php echo base_url(); ?>Welcome/getAllMemberDetails",
        //         method: 'GET',
        //         dataType: 'json',
        //         success: function (data) {
        //             console.log(data, 'hbdcibsdvihlbsdjvhb');
        //             // Loop through the data and populate the table
        //             for (var i = 0; i < data.length; i++) {
        //                 let srno = i + 1;
        //                 var row = '<tr>';
        //                 row += '<td>' + srno + '</td>';
        //                 row += '<td>' + data[i].vName + '</td>';
        //                 row += '<td>' + data[i].vPost + '</td>';
        //                 row += '<td>' + data[i].email + '</td>';
        //                 row += '<td>' + data[i].vEducation + '</td>';
        //                 row += '<td class="d-flex h-100" style="border-bottom:none"><button class="btn btn-outline-warning mx-1" onclick="editEmployee(' + data[i].id + ')"><i class="fas fa-edit"></i></button> <button class="btn btn-danger mx-1" onclick="deleteEmployee(' + data[i].id + ')"><i class="fas fa-trash-alt"></i></button></td>';
        //                 row += '</tr>';
        //                 $('#employeeTable tbody').append(row);
        //             }
        //             // Initialize DataTable after data is populated
        //             $('#employeeTable').DataTable();
        //         },
        //         error: function () {
        //             console.log('Error fetching data.');
        //         }
        //     });
        // }

        // function editEmployee(employeeId) {
        //     sendId = {
        //         id: employeeId
        //     };
        //     $('#image').rules('add', {
        //         required: false   // overwrite an existing rule
        //     });

        //     $.ajax({
        //         url: "<?php echo base_url(); ?>Welcome/editMemberDetails",
        //         method: 'POST',
        //         dataType: 'json',
        //         data: sendId,
        //         success: function (data) {
        //             console.log(data, 'hbdcibsdvihlbsdjvhb');
        //             $('#emp_id').val(data.id);
        //             $('#name').val(data.vName);
        //             $('#post').val(data.vPost);
        //             $('#email').val(data.email);
        //             $('#education').val(data.vEducation);
        //             $('#exampleTextarea').val(data.vDesc);
        //             // $('#exampleTextarea').val(data.vDesc);
        //             // console.log(baseUrl + data.vImage);
        //             // $('#image').attr("src", baseUrl+data.vImage);
        //             var image = document.getElementById("image");
        //             image.src = baseUrl + data.vImage;
        //         },
        //         error: function () {
        //             console.log('Error fetching data.');
        //         }
        //     });
        // }

//         function deleteEmployee(employeeId) {
//             Swal.fire({
//                 title: 'Are you sure?',
//                 text: 'You are about to delete this user.',
//                 icon: 'warning',
//                 showCancelButton: true,
//                 confirmButtonColor: '#3085d6',
//                 cancelButtonColor: '#d33',
//                 confirmButtonText: 'Yes, delete it!',
//                 cancelButtonText: 'Cancel'
//             }).then((result) => {
//                 if (result.isConfirmed) {
//                     $.ajax({
//                         url: baseUrl + 'Welcome/deleteMember',
//                         type: 'POST',
//                         data: {
//                             emp_id: employeeId
//                         },
//                         success: function (data) {
//                             data = JSON.parse(data);
//                             console.log(data);
//                             if (data.status === 200) {
//                                 Swal.fire({
//                                     position: 'center',
//                                     icon: 'success',
//                                     title: data.msg,
//                                     showConfirmButton: false,
//                                     timer: 5000,
//                                     customClass: {
//                                         container: 'my-swal'
//                                     }
//                                 })
//                                 if ($.fn.DataTable.isDataTable('#employeeTable')) {
//                                     $('#employeeTable').DataTable().destroy();
//                                 }
//                                 $('#employeeTable tbody').empty();
//                                 getDataTable();
//                             } else if (data.status === 201) {
//                                 Swal.fire({
//                                     position: 'center',
//                                     icon: 'error',
//                                     title: data.msg,
//                                     showConfirmButton: false,
//                                     timer: 3000,
//                                     customClass: {
//                                         container: 'my-swal'
//                                     }
//                                 });
//                             }
//                         }
//                     });
//                 }
//             });
//     return false;
// }


    </script>
</body>