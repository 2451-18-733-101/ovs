<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<head>
<style>
body {
  text-shadow: 2px 2px 5px #4B0082;
  font-color:#008B8B;
  font-family: "VERDANA"
}
</style>
</head>
<body>
<h4 style="color:#008B8B;"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<p style="color:#008B8B;">
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "You have voted for: " . " " . $row['voted'];
    } else {
        echo "You have not voted yet. Please submit your vote!";
    }
}
?>
</p>
</body>