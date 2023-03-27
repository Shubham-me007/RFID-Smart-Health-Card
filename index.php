<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content=" initial-scale=1, minimum-scale=1.0, maximum-scale = 1.0, user-scalable = no, width=device-width" >
 <title>Log In : RFID smart health card</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
 <link rel="stylesheet" href="login_style.css">
</head>
<body>
 <div class="log">
 <form name="myform" action="logincheck.php" method="post" onsubmit="return validate form()">
 
 <div class="icon">
 <span class="iconify" data-icon="noto:health-worker-light-skin-tone" data-inline="false"></span>
 </div>
 
 <h1>Login Form</h1>
 
 <!-- creating login area -->
 <div class="form-group">
 <input class="form-control" type="text" name="uname" placeholder="Username"><br>
 <input class="form-control" type="password" name="pwd" placeholder="Password"><br>
 <input class="btn btn-primary btn-block" type="submit" name="login" value="Log In">
  RFID smart health card
 </div>
 </form>
 </div>
 <script> 
 //validating the form
 function validateform(){ 
 var name=document.myform.uname.value; 
 var password=document.myform.pwd.value; 
 
 //checking whether username field is blank or not
 if (name==null || name==""){ 
 alert("Name can't be blank"); 
 document.myform.uname.focus();
 return false; 
 }
 //checking whether password field is blank or not
 else if(password.length==0){ 
 alert("Password can't be blank"); 
 document.myform.pwd.focus();
 return false; 
 }
 else{
 return true;
 }
 } 
 </script> 
</body>
</html>