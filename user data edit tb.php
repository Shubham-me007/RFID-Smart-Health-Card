<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
	  if ( !empty($_POST)) {
        // keep track post values
        $name = $_POST['name'];
		$id = $_POST['id'];
		$gender = $_POST['gender'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bloodgroup = $_POST['bloodgroup'];
        $diseases = $_POST['diseases'];
        $hos = $_POST['hos'];
        $dr = $_POST['dr'];
		
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "UPDATE table_the_iot_projects set name = ?,gender = ?,email = ?,mobile =?,address = ?,dob = ?,weight = ?,height = ?,bloodgroup = ?,diseases = ?,hos = ?,dr = ? WHERE id=?";
	$q = $pdo->prepare($sql);
	$q->execute(array($name,$gender,$email,$mobile,$address,$dob,$weight,$height,$bloodgroup,$diseases,$hos,$dr,$id));
	Database::disconnect();
	header("Location: user data.php");
	  }
?>