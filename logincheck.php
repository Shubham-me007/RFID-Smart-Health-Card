<?php
 error_reporting(0);
 //pre-define username||paswword
 $uname = "admin";
 $pwd = "admin";
 if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
 header("Location: home.php");
 }
 else{
 echo "<script>alert('Wrong username or password');</script>";
 echo "<script>location.href='index.php'</script>";
 }
?>