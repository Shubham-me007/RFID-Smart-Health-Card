<?php
$connection=mysqli_connect("localhost","root" ,"","nodemcu_rfid_iot_projects");
$result1=mysqli_query($connection,"SELECT bloodgroup,COUNT(bloodgroup) AS total FROM table_the_iot_projects GROUP BY bloodgroup ORDER BY total");
$result2=mysqli_query($connection,"SELECT diseases,COUNT(diseases) AS total FROM table_the_iot_projects GROUP BY diseases ORDER BY total");
?>
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
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
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
		
		#barchart1_material,#barchart2_material {
            border: 1px outset black;
        }
		
		</style>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
		
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart1); 
	  
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart2);
	  
      function drawChart1() {
        var data1 = google.visualization.arrayToDataTable([
          ['bloodgroup','total'],
          <?php
		    if(mysqli_num_rows($result1)>0)
			{
			while($row=mysqli_fetch_array($result1))
			{
			echo"['".$row['bloodgroup']."','".$row['total']."'],";	
			}
			}
		  ?>
        ]);

        var options1 = {
          chart: {
            title: 'Records of Bloodgroup of paitents',
            subtitle: 'A+ | A- | B+ | B- | AB+ | AB- | O+ | O-',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart1_material'));

        chart.draw(data1, google.charts.Bar.convertOptions(options1));
      }
	  
	   function drawChart2() {
        var data2 = google.visualization.arrayToDataTable([
          ['diseases','total'],
          <?php
		    if(mysqli_num_rows($result2)>0)
			{
			while($row=mysqli_fetch_array($result2))
			{
			echo"['".$row['diseases']."','".$row['total']."'],";	
			}
			}
		  ?>
        ]);

        var options2 = {
          chart: {
            title: 'Records of diseases of paitents',
            subtitle: ' cardiovascular | lung | cancer | liver | kidney ',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart2_material'));

        chart.draw(data2, google.charts.Bar.convertOptions(options2));
      }
    </script>
  </head>
  <body>
     <h2 align="center">RFID smart health card</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a class="active" href="analysis.php">Analysis</a></li>
			<li><a href="hospital center.php">Hospital center</a></li>
			<li><a href="about us.php">About us</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul>
	<center>
	<br>
    <div id="barchart1_material" style="width: 600px; height: 400px;"></div><br><br>
    <div id="barchart2_material" style="width: 600px; height: 400px;"></div>
	</center>
  </body>
</html>


  