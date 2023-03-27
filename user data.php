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
		
		.table {
			margin: auto;
			width: 100%; 
		}
		
		thead {
			color: #FFFFFF;
		}
		h2{
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
		
		<title>User Data : RFID smart health card</title>
	</head>
	
	<body>
		<h2>RFID smart health card</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a class="active" href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="analysis.php">Analysis</a></li>
			<li><a href="hospital center.php">Hospital center</a></li>
            <li><a href="about us.php">About us</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
		<br>
		<div class="container">
            <div class="row">
                <h3>User Data Table</h3>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#10a0c5" color="#FFFFFF">
					  <th>ID</th>
					  <th>Name</th>
					  <th>Gender</th>
					  <th>Email</th>
                      <th>Mobile Number</th>
                      <th>Address</th>
                      <th>DOB</th>
                      <th>Weight(in kg)</th>
                      <th>Height(in cm)</th>
                      <th>Blood group</th>
                      <th>Diseases</th>
                      <th>Hospital Allocated</th>
                      <th>Doctor Allocated</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM table_the_iot_projects ORDER BY name ASC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id'] . '</td>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['gender'] . '</td>';
							echo '<td>'. $row['email'] . '</td>';
							echo '<td>'. $row['mobile'] . '</td>';
							echo '<td>'. $row['address'] . '</td>';
							echo '<td>'. $row['dob'] . '</td>';
							echo '<td>'. $row['weight'] . '</td>';
							echo '<td>'. $row['height'] . '</td>';
							echo '<td>'. $row['bloodgroup'] . '</td>';
							echo '<td>'. $row['diseases'] . '</td>';
							echo '<td>'. $row['hos'] . '</td>';
							echo '<td>'. $row['dr'] . '</td>';
							echo '<td><a class="btn btn-success" href="user data edit page.php?id='.$row['id'].'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-danger" href="user data delete page.php?id='.$row['id'].'">Delete</a>';
							echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
				</table>
			</div>
		</div> 
	</body>
</html>