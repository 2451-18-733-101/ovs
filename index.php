<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>
<head>
<style>
body {
  font-size: 16px;
}
</head>
</style>
<body>
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkinNZwp6WOvkX9sI9ziO25p1M1skJy0q8ig&usqp=CAU" style="position:fixed; right:0px; width:900px; height:530px; border:none;"
  alt="ovs" >
  <p><font color=#008B8B size='10'>&nbsp; "The ballot is stronger<br>&nbsp;&nbsp; than the bullet"<br><i>&nbsp; -Abraham Lincoln</i></p><br>
<p>&nbsp; Register to make a vote<br>&nbsp; Fast<br>&nbsp; Secure<br>&nbsp; Simple</font>
    <p>&nbsp;&nbsp;</p>
</p>
</body>