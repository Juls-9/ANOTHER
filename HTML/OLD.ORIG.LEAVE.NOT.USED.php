<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---LINKS--->
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/leave.min.css" />
    <link rel="stylesheet" href="styles/leave.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Noto+Sans+HK&family=Tilt+Neon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <!---//LINKS//--->

    <!---SCRIPTS--->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-x2ZmHbRR9Agp3Pi6bA8chsljGRq6bSSt9oUf5r5FowYXW5UJhY6OtnU5fUeVp4jqo" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
    <!---//SCRIPTS//--->

    <title>Leave Form</title>
</head>
<body>
<div class="content container-fluid">
     <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">LEAVE FORM</h3>
                <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Leave Management</li>
                </ul>
            </div>
        </div>
    </div>
    <!---ROW OF CARDS--->
    <div class="row">

    <!---START OF FORM CARDS--->
        <div class="col-sm-6">
            <div class="card leave-box" id="leave_annual">
                <div class="card-body">

                    <!---FORM PHP TO DATABASE CONNECT--->
                <!--<form action="EXAMPLE LANG.php" method="POST">--->
                    <!---//FORM PHP TO DATABASE CONNEC//T--->
                    <form action="frontController.php" method="post">
                <div class="card-title width-switch mb-3">Annual
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box row">
                                    <div class="input-block mb-3">
                                        <!---ROW AND COL OF FORMS--->
                                        <div class="row">
                                            <div class="leave-right">
                                                        <label for="">FILL UP</label>
                                                        
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-01-12" max="2099-01-01"  >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-01-12" max="2099-01-01"  >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name">
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." >
                                                </div>
                                                <div class="col-sm-6 mb-0">
                                                <label for="paidleave" class="form-label">Paid Leave?</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_no" value="option1" >
                                                    <label class="form-check-label" for="carry_no">No</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_yes" value="option2" >
                                                    <label class="form-check-label" for="carry_yes">Yes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 mt-3">
                                                <button type="submit" name="lff" class="btn">Submit</button>
                                                </div> 
                                                 <span class="error" ><i class="fa-solid fa-circle-exclamation" style="color: #ff0000;"></i><?php if(isset($_SESSION["msg"])){echo $_SESSION["msg"];}elseif(isset($_SESSION["err"])){echo $_SESSION["err"];} ?></span>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    
                </div>
                </form>
            </div>
            <!---END OF FIRST CARD--->

            <!---START OF SECOND CARD--->
            <div class="col-sm-6">
            <div class="card leave-box" id="leave_sick">
                <div class="card-body">

                <!---SECOND FORM PHP TO DATABASE CONNECT--->
                <!--<form action="EXAMPLE LANG.php" method="POST">--->
                    <!---//FORM PHP TO DATABASE CONNEC//T--->

                <div class="card-title width-switch mb-3">Sick
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box row">
                                    <div class="input-block mb-3">
                                        <div class="row">
                                            <div class="leave-right">
                                                        <label for="">FILL UP</label>
                                                        <button class="leave-edit-btn" fdprocessedid="3sk4wl">Edit</button>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-12-12" max="2099-01-01" disabled="disabled" >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-12-12" max="2099-01-01"  disabled="disabled">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" disabled >
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." disabled>
                                                  </div>
                                                  <div class="col-sm-12 mt-3">
                                                <button type="submit" class="btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                </div>
            </div>
            <!---3RD CARD--->

            <div class="col-sm-6">
            <div class="card leave-box" id="leave_hospitalisation">
                <div class="card-body">

                 <!---SECOND FORM PHP TO DATABASE CONNECT--->
                <!--<form action="EXAMPLE LANG.php" method="POST">--->
                    <!---//FORM PHP TO DATABASE CONNEC//T--->

                <div class="card-title width-switch mb-3">Hospitalisation
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box row">
                                    <div class="input-block mb-3">
                                        <div class="row">
                                            <div class="leave-right">
                                                        <label for="">FILL UP</label>
                                                        <button class="leave-edit-btn" fdprocessedid="3sk4wl">Edit</button>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-12-12" max="2099-01-01" disabled="disabled" >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-12-12" max="2099-01-01"  disabled="disabled">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" disabled >
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." disabled>
                                                  </div>
                                                  <div class="col-sm-12 mt-3">
                                                <button type="submit" class="btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                </div>
            </div>

            <!---4RTH CARD--->
            <div class="col-sm-6">
            <div class="card leave-box" id="leave_maternity">
                <div class="card-body">

                <!---SECOND FORM PHP TO DATABASE CONNECT--->
                <!--<form action="EXAMPLE LANG.php" method="POST">--->
                <!---//FORM PHP TO DATABASE CONNECT//--->

                <div class="card-title width-switch mb-3">Maternity (for Female only)
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box row">
                                    <div class="input-block mb-3">
                                        <div class="row">
                                            <div class="leave-right">
                                                        <label for="">FILL UP</label>
                                                        <button class="leave-edit-btn" fdprocessedid="3sk4wl">Edit</button>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-12-12" max="2099-01-01" disabled="disabled" >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-12-12" max="2099-01-01"  disabled="disabled">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" disabled >
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." disabled>
                                                  </div>
                                                  <div class="col-sm-12 mt-3">
                                                <button type="submit" class="btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                </div>
            </div>

            <!---5TH CARD--->
            <div class="col-sm-6">
            <div class="card leave-box" id="leave_paternity">
                <div class="card-body">

                <!---SECOND FORM PHP TO DATABASE CONNECT--->
                <!--<form action="EXAMPLE LANG.php" method="POST">--->
                <!---//FORM PHP TO DATABASE CONNECT//--->

                <div class="card-title width-switch mb-3">Paternity leave (for Male only)
                    </div>
                    <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box row">
                                    <div class="input-block mb-3">
                                        <div class="row">
                                            <div class="leave-right">
                                                        <label for="">FILL UP</label>
                                                        <button class="leave-edit-btn" fdprocessedid="3sk4wl">Edit</button>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-12-12" max="2099-01-01" disabled="disabled" >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-12-12" max="2099-01-01"  disabled="disabled">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" disabled >
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." disabled>
                                                  </div>
                                                  <div class="col-sm-12 mt-3">
                                                <button type="submit" class="btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                </div>
            </div>

            <!---6H CARD--->
            <div class="col-sm-6">
                <div class="card leave-box" id="leave_lop">
                    <div class="card-body">

                    <!---SECOND FORM PHP TO DATABASE CONNECT--->
                <!--<form action="EXAMPLE LANG.php" method="POST">--->
                <!---//FORM PHP TO DATABASE CONNECT//--->

                    <div class="card-title width-switch mb-3">LOP
                            </div>
                        <div class="leave-item">
                        <div class="leave-row">
                            <div class="leave-left">
                                <div class="input-box row">
                                    <div class="input-block mb-3">
                                        <div class="row">
                                            <div class="leave-right">
                                                        <label for="">FILL UP</label>
                                                        <button class="leave-edit-btn" fdprocessedid="3sk4wl">Edit</button>
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="startDate" class="form-label">Start Date:</label>
                                                        <input type="date" class="form-control" id="startDate" name="startDate" min="2015-12-12" max="2099-01-01" disabled="disabled" >
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="endDate" class="form-label">End Date:</label>
                                                        <input type="date" class="form-control" id="endDate" name="endDate" min="2015-12-12" max="2099-01-01"  disabled="disabled">
                                                </div>
                                                <div class="col-sm-4 mb-3">
                                                        <label for="phoneNumber" class="form-label">Phone Number:</label>
                                                         <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter your phone number" disabled>
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" disabled >
                                                </div>
                                                <div class="col-sm-4">
                                                        <label for="middleName" class="form-label">Middle Name</label>
                                                        <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Middle Name" disabled >
                                                </div>
                                                <div class="col-sm-12">
                                                        <label for="middleName" class="form-label">Reason</label>
                                                        <input type="text" class="form-control custom-textarea" id="reason" name="reason" placeholder="ADD YOUR REASONS HERE..." disabled>
                                                  </div>
                                                  <div class="col-sm-12 mt-3">
                                                <button type="submit" class="btn">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                        

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







<!---SCRIPTS--->
<script>
    var editButtons = document.querySelectorAll(".leave-edit-btn");

    for (var i = 0; i < editButtons.length; i++) {
        editButtons[i].addEventListener("click", function(event) {
            var parentLeaveRow = this.parentElement.parentElement;
            var inputsToEnable = parentLeaveRow.querySelectorAll('input, radio, select');

            if (this.textContent === "Edit") {
                // Toggle to "Save" mode
                this.textContent = "Save";
                // Enable the input fields for editing
                inputsToEnable.forEach(function(input) {
                    input.removeAttribute("disabled");
                });

                // Uncheck radio buttons
                parentLeaveRow.querySelectorAll('input[type="radio"]').forEach(function(radio) {
                    radio.checked = false;
                });
            } else {
                // Toggle back to "Edit" mode
                this.textContent = "Edit";
                // Here you can save the changes to the server
                // Disable the input fields again after saving if needed
                inputsToEnable.forEach(function(input) {
                    input.setAttribute("disabled", "disabled");
                });
            }
        });
    }
</script>

</body>
</html>