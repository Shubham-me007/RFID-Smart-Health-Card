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
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
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
		
		<title>Home : RFID smart health card</title>
	</head>
	
	<body>
	<h2 align="center">Welcome to RFID smart health card</h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="analysis.php">Analysis</a></li>
			<li><a href="hospital center.php">Hospital center</a></li>
			<li><a href="about us.php">About us</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
		<br>
		
		<video width="35%" autoplay loop>
		<source src="Rfidhomebg.mp4" type="video/mp4">
		</video>
	</body>
</html>