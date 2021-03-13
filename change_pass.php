<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
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
<body>
<center><h3 style="color:#008B8B;">Change Password</h3></center>
<h4 style="color:#008B8B;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<center style="color:#008B8B;"><form action="change_pass_action.php" method="post" id="myform">
Current Password :
<input type="password" name="cpassword" value="" >
<br>
<br>
New Password:
<input type="password" name="npassword" value="" >
<br>
<br>
Confirm New Password:
<input type="password" name="cnpassword" value="" >
<br>
<br>
<input type="submit" name="cpass" value="UPDATE" >
</form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
</body>