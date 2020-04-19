<?php
ob_start();
define('myheader',TRUE);
require('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="simple-sidebar.css" rel="stylesheet">
</head>
<body>
	<div class="d-flex" id="wrapper">
      <div class="bg-light border-right" id="sidebar-wrapper" style="margin-top:-7px;">
          <div class="sidebar-heading"><?php echo "Welcome Admin"?></div>
          <div class="list-group list-group-flush">
          	<a href="login_configure.php" class="list-group-item list-group-item-action bg-light" id="dash" href="student_form.php">Dashboard</a>
            <a href="manage_student.php" class="list-group-item list-group-item-action bg-light" id="alloc" href="student_form.php">Manage Student</a>
            <a href="manage_building.php" id = "build" class="list-group-item list-group-item-action bg-light">Manage Building</a>
            <a href="manage_employee.php" class="list-group-item list-group-item-action bg-light">Manage Employee</a>
            <a href="manage_attendance.php" class="list-group-item list-group-item-action bg-light">Manage Attendance</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Vendor Payments</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Manage Expense</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Manage Fees</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Notice/Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-light">Setting</a>
          </div>
      </div>
      <div id="page-content-wrapper">
          <div class="container-fluid" style="margin:0px;">
          	<br><br><br>
             <div class="container">
  					<div class="row justify-content-md-center">
    					<div class="col-xm-3" style="">
      						 <div class="card" style="width: 18rem;">
  								<div class="card-body">
    								<h5 class="card-title">Add New Building Data</h5>
    								<p class="card-text">Used for Adding additional Buildings in Hostel.</p>
    								<a href="expand.php" class="card-link">Proceed</a>
  								</div>
							</div>
    					</div>
    					<div class="col-xm-auto">
    							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
    					<div class="col-xm-3" style="">
      						<div class="card" style="width: 20rem;">
  								<div class="card-body">
    								<h5 class="card-title">Edit Already Existing Building</h5>
    								<p class="card-text">Used for Changing/Deleting already existing Buldings in Hostel.</p>
    								<a href="editBuilding.php" class="card-link">Proceed</a>
  								</div>
							</div>
    					</div>
  					</div>
			</div>
      	  </div>
      </div>
    </div>
<script type="text/javascript">
	document.getElementById("build").style.pointerEvents="none";
	document.getElementById("build").style.cursor="default";
 	document.getElementById("drop").style.display = "none";
  	document.getElementById("logout").style.display = "block";
</script>
</body>
</html>