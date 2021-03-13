<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
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
<h4 style="color:#008B8B;"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3 style="color:#008B8B;">Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6' color=#008B8B> What is your favorite political party? <BR>
<input type="radio" name="lan" value="BJP"> BJP<BR>
<input type="radio" name="lan" value="CONGRESS">CONGRESS<BR>
<input type="radio" name="lan" value="TRS">  TRS<BR>
<input type="radio" name="lan" value="TDP">  TDP<BR>
<input type="radio" name="lan" value="NOTA">  NOTA<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" /></center>
</form>
