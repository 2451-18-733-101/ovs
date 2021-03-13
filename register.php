<script src='https://www.google.com/recaptcha/api.js'></script>
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
<legend> <h3 style="color: #008B8B; font-size: 34;"> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="5" color=#008B8B >
<form action= "reg_action.php" method= "post" id="myform" >
Firstname:
<input type="text" name="firstname" value="" />
<br>
<br>
Lastname: 
<input type="text" name="lastname" value="" />
<br>
<br>
Username: 
<input type="text" name="username" value="" />
<br>
<br>

Password: 
<input type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<input type="submit" name="submit" value="Next" />
</font>
</form>
</center>
<script type= "text/javascript" >
var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>



