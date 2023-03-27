  <!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		div{
			margin-left:15%;
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
		
        body{
			background-image: url("white1.jpg");
			background-position: center;
			background-repeat: no-repeat;
            background-size: 100% 100%;
			background-attachment: fixed;
        }
		h2{
			font-family:RockWell;
		}
		</style>
		
		<title>Hospital center : RFID smart health card</title>
	</head>
	
	<body>
	<h2 align="center">RFID smart health card</h2>
		<ul class="topnav">
			<li><a href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="analysis.php">Analysis</a></li>
			<li><a class="active" href="hospital center.php">Hospital center</a></li>
			<li><a href="about us.php">About us</a></li>
			<li><a href="logout.php">logout</a></li>
		</ul><br>
		<div>
          <h1><u>Hospitals in Patna, Bihar</u></h1><br>
          <h3>Patna Medical College Hospital(PMCH), Patna</h3>
          <p>Ashok Rajpath, Patna University Campus, Patna, Bihar 800001.</p>
          <h3>Nalanda Medical College Hospital (NMCH), Patna</h3>
          <p>Agam Kuan Flyover, Sadikpur, Patna, Bihar 800007.</p>
          <h3>Indira Gandhi Institute of Medical Sciences (IGIMS), Patna</h3>
          <p>Bailey Rd, Sheikhpura, Patna, Bihar 800014.</p>
          <h3>All India Institute of Medical Sciences(AIIMS), Patna</h3>
          <p>Patna - Aurangabad Rd, Phulwari Sharif, Patna, Bihar 801507.</p>
          <h3>Lok Nayak Jaiprakash Narayan Hospital (bone specialist hospital), Rajbanshi Nagar, Patna</h3>
          <p>Rajvanshi Nagar, Patna, 800023, Bihar.</p>
          <h3>Shyamal hospital</h3>
          <p>Shyamal hospital, Near State Bank of India Ashiana Nagar post office Khajpura, Jyotipuram Colony, Rukanpura, Patna, Bihar 800025.</p>         
          <h3>Shri Jagannath Seva Sadan Gynecology Hospital</h3>
          <p>202, M I G, Near Malahi Pakdi Chowk, Kankarbagh, Patna - 800020.</p>
          <h3>Paras HMRI Hospital Patna</h3>
          <p>NH 30, Bailey Rd, MLA Colony, Raja Bazar, Indrapuri, Patna, Bihar 800014.</p>
		  <h3>Pristyn Care - Patna</h3>
          <p>Holy Promise Hospital, Shivpuri , Patna</p>
          <h3>Holy Promise (Tie up via Pristyn Care)</h3>
          <p>Shivpuri, Rajbansi Nagar, Patna, Bihar 800029 , Patna</p>
		  <h3>Asian City Hospital (Tie up via Pristyn Care)</h3>
          <p>behind P&M Mall, Patliputra Industrial Area, Patliputra Colony, Patna, Bihar 800013 , Patna</p>
		  <h3>Niveda Hospital (Tie up via Pristyn Care)</h3>
          <p>G44, PC Colony, Near park No.22, Main road, Kankarbagh, Patna, Bihar 800020 , Patna</p>
          <h3>Saroj Nursing Home (Tie up via Pristyn Care)</h3>
          <p>A-17, Ashiana - Digha Rd, Abhiyanta Nagar, Ram Nagari, Rukanpura, Patna, Bihar 800025 , Patna</p>
          <h3>Dr Bimal Hospital (Tie up via Pristyn Care)</h3>
          <p>Raj Ballabh Singh Dwar, Narayan Path Adarsh Colony, Bailey Rd, Saguna More, Patna, Bihar 801503 , Patna</p>
          <h3>Aadhvik Hospital(Tie up via Pristyn Care)</h3>
          <p>Ashiana Digha Road A/25, Ashiana - Digha Rd, Abhiyanta Nagar, Magistrate Colony, Rukanpura, Patna - 800025</p>
          <h3>Holy Promise Hospital (Tie up via Pristyn Care)</h3>
          <p>Shivpuri, Near Energy Park , Patna - 800029</p>
          <h3>Medipark Hospital (Tie up via Pristyn Care)</h3>
          <p>Patliputra Colony , Patna - 800013Patliputra Colony , Patna - 800013</p>
          <h3>Indira IVF (Patna)</h3>
          <p>4th Floor, Kashyap Complex, Above Big Bazar, Bailey Road , Patna - 800014</p>
          <h3>Aastha Hospital</h3>
          <p>G-62, Rajni Path, P.C Colony, Kankarbagh , Patna - 800020</p>
          <h3>Ruban Memorial Hospital</h3>
          <p>19, Patliputra Colony Near Patliputra Golamber, Patna - 800013</p>
          <h3>Aastha Lok Hospital</h3>
          <p>N/4, Professor Colony, Near Kendriya Vidyalaya Kankarbagh, Patna - 800020</p>
          <h3>Ishwar Dayal Memorial Hospital</h3>
          <p>N. R. Tower, Khemnichak More, Hanuman Nagar, New Bypass Road Kankarbagh, Patna - 800020</p>
          <h3>Kurji Holy Family Hospital</h3>
          <p>Kurji More, Sadaquat Ashram GPO, Patna - 800010</p>
          <h3>Pulse Emergency Hospital Pvt. Ltd.</h3>
          <p>New Bye Pass Road, Opposite Patna Central School Kankarbagh, Patna - 800020</p>
          <h3>Bimal Hospital & Research Centre Pvt. Ltd.</h3>
          <p>Bailey Road, Saguna More , Patna - 801503</p>
          <h3>Ruban Emergency Hospital</h3>
          <p>S P Verma Road, Near Frazer Road Dak Bunglow Road, Patna - 800001</p>
          <h3>Ford Hospital and Research center Pvt. Ltd.</h3>
          <p>New Bypass (NH-30), Khemnichak, PS - Ramkrishna Nagar PO - New Jaganpura, Patna - 800027</p>
          <h3>Sri Ram Hospital</h3>
          <p>NC-1C, Lohia Nagar Kankarbagh, Patna - 800020</p>
          <h3>Anandita Hospital</h3>
          <p>13/C, Rajendra Nagar , Patna - 800016</p>
          <h3>Jagdish Memorial Hospital</h3>
          <p>Lohiya Nagar, Behind Geological Survey Of India Kankarbagh, Patna - 800020</p>
          <h3>Medizone Hospitals Pvt. Ltd.</h3>
          <p>MIGH-43, Behind Shalimar Sweets Kankarbagh, Patna - 800020</p>
          <h3>Sahyog Hospital (Patna)</h3>
          <p>40, Patliputra colony , Patna - 800013</p>
          <h3>Chanakya Hospital</h3>
          <p>N-7, Patrakar Nagar Kankarbagh, Patna - 800020</p>
          <h3>Satyam Hospital</h3>
          <p>Bailey Road, Behind Leather World Showroom Sheikhpura, Patna - 800014</p>
          <h3>Apollo Trauma Center Hospital</h3>
          <p>Main Road Kankarbagh, Patna - 800020</p>
          <h3>S. S. Hospital Anisabad (Patna)</h3>
          <p>East Of LAL Panch Mandir Anisabad, Patna - 800002</p>
          <h3>Udayan Hospital</h3>
          <p>Near Rajapur Pul West Boring Canal Road, Patna - 800003</p>
          <h3>Palika Vinayak Hosital Pvt. Ltd.</h3>
          <p>Kankarbagh Main Road, Beside Bahadurpur Flyover Kankarbagh, Patna - 800020</p>
          <h3>S M Lifecare Hospital</h3>
          <p>Shantikunj, Phulwarisharif, Opposite Petrol Pump Haroon Nagar, Patna - 801505</p>
          <h3>Shyamal Hospital</h3>
          <p>Bally Road, B V College, Near Regional Institute Of Management Maurya Path, Patna - 800014</p>
          <h3>Rainbow Emergency and Trauma Hospital</h3>
          <p>Rainbow Hospital, Malahi Pakdi Chowk, Near Sonali Petrol Pump Mahatma Gandhi Setu Path, Patna - 800020</p>
          <h3>Green Life Hospital</h3>
          <p>Star Complex, Khagaul Main Road, Near Surya Mandir Anisabad, Patna - 800002</p>
          <h3>R. N. Super Speciality Hospital Pvt. Ltd.</h3>
          <p>Bailey Road, B V College, Near Shiv Mandir Khajpura Mahalla, Patna - 800014</p>
          <h3>Shiva Hospital</h3>
          <p>GC-3B Doctors Colony, Shiva Hospital Road Kankarbagh, Patna - 800020</p>
          <h3>Shivam Hospital and Research Institute</h3>
          <p>V/19 Ground 1st And 2nd Floor, Near Kendirya Vidyalay, Vidyapuri Kankarbagh, Patna - 800020</p>
          <h3>Shri Sai Hospital (Kankarbagh Road)</h3>
          <p>Plot no DS/2, Behind Geological Survey of India, Near Mahendralok Apartment, Kankarbagh Road , Patna - 800020</p>
          <h3>Patna IVF and Endosurgery Centre</h3>
          <p>Opposite P and M Mall, 80-B,, Mall Rd, Patliputra Industrial Area Patliputra Colony, Patna - 800013</p>
          <h3>Vatsalya Mamta Fertility Centre</h3>
          <p>House No. 234, 235, Near Laddu Gopal Patliputra Colony, Patna - 800013</p>
          <h3>A.H IVF and Infertility Research Centre (AHIIRC)</h3>
          <p>401, Exhibition Rd, Old Jakkanpur Fraser Road Area, Patna - 800001</p>
		  </div>
	</body>
</html>	  