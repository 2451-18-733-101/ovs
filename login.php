<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<head>
<style>
input[type=submit]{
  background-color: #008B8B;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
input[type=submit]:hover {
  box-shadow: 0 12px 16px 0 #008B8B,0 17px 50px 0 rgba(0,0,0,0.19);
}
body {
  background-image: url("ovsp.jpg");
  text-shadow: 2px 2px 5px #4B0082;
  font-family: "VERDANA"
}
</style>
</head>
<body bgcolor=black ;>
<center>
<legend> <h3 style="color: #008B8B; font-size:34px;">Login for Voting </h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="5" color=#008B8B>
<form action="login_action.php" method="post" id="myform" >
Username : 
<input type="text" name="username" value="" > 
<br>
<br>
Password : 
<input type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" value="login" > 
</form></font>
</center>
</body>
<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
