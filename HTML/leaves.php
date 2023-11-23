<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/leave.min.css" />
    <link rel="stylesheet" href="styles/leave.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-x2ZmHbRR9Agp3Pi6bA8chsljGRq6bSSt9oUf5r5FowYXW5UJhY6OtnU5fUeVp4jqo" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/87b021b4fa.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Leave Settings</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="admin-dashboard.html">Dashboard</a></li>
<li class="breadcrumb-item active">Leave Settings</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">

<div class="card leave-box" id="leave_annual">
<div class="card-body">
<div class="h3 card-title with-switch">
Annual
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_annual" checked="">
<label class="onoffswitch-label" for="switch_annual">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>
<div class="leave-item">

<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<div class="input-block mb-3">
<label class="col-form-label">Days</label>
<input type="text" class="form-control" disabled="" fdprocessedid="taa6f8">
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="3sk4wl">Edit</button>
</div>
</div>


<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<label class="d-block col-form-label">Carry forward</label>
<div class="leave-inline-form">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_no" value="option1" disabled="">
<label class="form-check-label" for="carry_no">No</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="carry_yes" value="option2" disabled="">
<label class="form-check-label" for="carry_yes">Yes</label>
</div>
<div class="input-group">
<span class="input-group-text">Max</span>
<input type="text" class="form-control" disabled="" fdprocessedid="csic4b">
</div>
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="xxzpg">
Edit
</button>
</div>
</div>


<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<label class="d-block col-form-label">Earned leave</label>
<div class="leave-inline-form">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="earned_no" value="option1" disabled="">
<label class="form-check-label" for="earned_no">No</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="earned_yes" value="option2" disabled="">
<label class="form-check-label" for="earned_yes">Yes</label>
</div>
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="lmylrp">
Edit
</button>
</div>
</div>

</div>

<div class="custom-policy">
<div class="leave-header">
<div class="title">Custom policy</div>
<div class="leave-action">
<button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add_custom_policy" fdprocessedid="fael5"><i class="fa-solid fa-plus"></i> Add custom policy</button>
</div>
</div>
<div class="table-responsive">
<table class="table table-hover table-nowrap leave-table mb-0">
<thead>
<tr>
<th class="l-name">Name</th>
<th class="l-days">Days</th>
<th class="l-assignee">Assignee</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>5 Year Service </td>
<td>5</td>
<td>
<a href="#" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="#">John Doe</a>
</td>
<td class="text-end">
<div class="dropdown dropdown-action">
<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>


<div class="card leave-box" id="leave_sick">
<div class="card-body">
<div class="h3 card-title with-switch">
Sick
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_sick" checked="">
<label class="onoffswitch-label" for="switch_sick">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>
<div class="leave-item">
<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<div class="input-block mb-3">
<label class="col-form-label">Days</label>
<input type="text" class="form-control" disabled="" fdprocessedid="xyf659">
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="z3fso">
Edit
</button>
</div>
</div>
</div>
</div>
</div>


<div class="card leave-box" id="leave_hospitalisation">
<div class="card-body">
<div class="h3 card-title with-switch">
Hospitalisation
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_hospitalisation">
<label class="onoffswitch-label" for="switch_hospitalisation">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>
<div class="leave-item">

<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<div class="input-block mb-3">
<label class="col-form-label">Days</label>
<input type="text" class="form-control" disabled="" fdprocessedid="xa5um8">
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" disabled="">
Edit
</button>
</div>
</div>

</div>

<div class="custom-policy">
<div class="leave-header">
<div class="title">Custom policy</div>
<div class="leave-action">
<button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add_custom_policy" disabled=""><i class="fa-solid fa-plus"></i> Add custom policy</button>
</div>
</div>
<div class="table-responsive">
<table class="table table-hover table-nowrap leave-table mb-0">
<thead>
<tr>
<th class="l-name">Name</th>
<th class="l-days">Days</th>
<th class="l-assignee">Assignee</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>5 Year Service </td>
<td>5</td>
<td>
<a href="#" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="#">John Doe</a>
</td>
<td class="text-end">
<div class="dropdown dropdown-action">
<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
<a href="#" class="dropdown-item"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>


<div class="card leave-box" id="leave_maternity">
<div class="card-body">
<div class="h3 card-title with-switch">
Maternity <span class="subtitle">Assigned to female only</span>
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_maternity" checked="">
<label class="onoffswitch-label" for="switch_maternity">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>
<div class="leave-item">
<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<div class="input-block mb-3">
<label class="col-form-label">Days</label>
<input type="text" class="form-control" disabled="" fdprocessedid="hnc3be">
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="4u6fgs">
Edit
</button>
</div>
</div>
</div>
</div>
</div>


<div class="card leave-box" id="leave_paternity">
<div class="card-body">
<div class="h3 card-title with-switch">
Paternity <span class="subtitle">Assigned to male only</span>
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_paternity">
<label class="onoffswitch-label" for="switch_paternity">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
</div>
<div class="leave-item">
<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<div class="input-block mb-3">
<label class="col-form-label">Days</label>
<input type="text" class="form-control" disabled="" fdprocessedid="004n6">
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" disabled="">
Edit
</button>
</div>
</div>
</div>
</div>
</div>


<div class="card leave-box mb-0" id="leave_custom01">
<div class="card-body">
<div class="h3 card-title with-switch">
LOP
<div class="onoffswitch">
<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="switch_custom01" checked="">
<label class="onoffswitch-label" for="switch_custom01">
<span class="onoffswitch-inner"></span>
<span class="onoffswitch-switch"></span>
</label>
</div>
<button class="btn btn-danger leave-delete-btn" type="button" fdprocessedid="nxc8v">Delete</button>
</div>
<div class="leave-item">

<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<div class="input-block mb-3">
<label class="col-form-label">Days</label>
<input type="text" class="form-control" disabled="" fdprocessedid="u40a6g">
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="xbwdc">Edit</button>
</div>
</div>


<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<label class="d-block col-form-label">Carry forward</label>
<div class="leave-inline-form">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="carryForward" id="carry_no_01" value="option1" disabled="">
<label class="form-check-label" for="carry_no_01">No</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="carryForward" id="carry_yes_01" value="option2" disabled="">
<label class="form-check-label" for="carry_yes_01">Yes</label>
</div>
<div class="input-group">
<span class="input-group-text">Max</span>
<input type="text" class="form-control" disabled="" fdprocessedid="1fwcs">
</div>
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="p1ogwh">
Edit
</button>
</div>
</div>


<div class="leave-row">
<div class="leave-left">
<div class="input-box">
<label class="d-block col-form-label">Earned leave</label>
<div class="leave-inline-form">
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" disabled="">
<label class="form-check-label" for="inlineRadio1">No</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" disabled="">
<label class="form-check-label" for="inlineRadio2">Yes</label>
</div>
</div>
</div>
</div>
<div class="leave-right">
<button class="leave-edit-btn" fdprocessedid="ipe8sh">
Edit
</button>
</div>
</div>

</div>

<div class="custom-policy">
<div class="leave-header">
<div class="title">Custom policy</div>
<div class="leave-action">
<button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add_custom_policy" fdprocessedid="dlq40c"><i class="fa-solid fa-plus"></i> Add custom policy</button>
</div>
</div>
<div class="table-responsive">
<table class="table table-hover table-nowrap leave-table mb-0">
<thead>
<tr>
<th class="l-name">Name</th>
<th class="l-days">Days</th>
<th class="l-assignee">Assignee</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>5 Year Service </td>
<td>5</td>
<td>
<a href="#" class="avatar"><img src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="#">John Doe</a>
</td>
<td class="text-end">
<div class="dropdown dropdown-action">
<a aria-expanded="false" data-bs-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
<div class="dropdown-menu dropdown-menu-right">
<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit_custom_policy"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete_custom_policy"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>

</div>
</div>
</div>

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