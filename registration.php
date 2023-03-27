<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>
		
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
		}
		
		textarea {
			resize: none;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: #10a0c5;
			width: 70%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #000000;}

		ul.topnav li a.active {background-color: #000000;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		img {
			width:30%;
			height:30%;
			border:1px solid #000;
			border-radius:4px;
		}
		h2 { 
           font-family:RockWell;
        }
		body{
			background-image: url("white1.jpg");
			background-position: center;
			background-repeat: no-repeat;
            background-size: 100% 100%;
			background-attachment: fixed;
        }
		</style>
		
		<title>Registration : RFID smart health card</title>
	</head>
	
	<body>

		<h2 align="center">RFID smart health card</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a class="active" href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="analysis.php">Analysis</a></li>
            <li><a href="hospital center.php">Hospital center</a></li>
			<li><a href="about us.php">About us</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>

		<div class="container">
			<br>
			<div class="center" style="margin: 0 auto; width:495px; border-style: solid;">
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form class="form-horizontal" action="insertDB.php" method="post" >
				
				<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<img id="img1" src="iphoto.jpg"/> 
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">ID</label>
						<div class="controls">
							<textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required></textarea>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Name</label>
						<div class="controls">
							<input id="div_refresh" name="name" type="text"  placeholder="Enter Name of patient" pattern="^[a-zA-Z]+([\s][a-zA-Z]+)*$" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Gender</label>
						<div class="controls">
							<select name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="others">others</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Email Address</label>
						<div class="controls">
							<input name="email" type="email" placeholder="Enter Email" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Mobile Number</label>
						<div class="controls">
							<input name="mobile" type="text" placeholder="Enter Mobile Number" maxlength="10" Pattern="[1-9]{1}[0-9]{9}" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">address</label>
						<div class="controls">
							<input name="address" type="text"  placeholder="Enter Address" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">DOB</label>
						<div class="controls">
							<input name="dob" type="date"  placeholder="Enter DOB" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Weight(in kg)</label>
						<div class="controls">
							<input name="weight" type="text"  maxlength="2" placeholder="Enter Weight" Pattern="^[4-9]+[0-9]*$" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Height(in cm)</label>
						<div class="controls">
							<input name="height" type="text"  maxlength="3" placeholder="Enter Height" Pattern="^[1-9]+[0-9]*$" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Blood group</label>
						<div class="controls">
							<select name="bloodgroup">
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B+">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB+">AB-</option>
								<option value="O+">O-</option>
								<option value="O-">O-</option>
							</select>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Diseases</label>
						<div class="controls">
							<input name="diseases" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Hospital Allocated</label>
						<div class="controls">
							<input name="hos" type="text"  placeholder="" required>
						</div>
					</div>
					
                    <div class="control-group">
						<label class="control-label">Doctor Allocated</label>
						<div class="controls">
							<input name="dr" type="text"  placeholder="" required>
						</div>
					</div>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Save</button>
                    </div>
				</form>
				
			</div>               
		</div> 
	</body>
</html>