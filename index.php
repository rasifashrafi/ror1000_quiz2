<?php session_start();
if(!isset($_SESSION['UserData']['Email'])){
header("location:login.php");
}
?>
welcome<br>
<br>
page2 <a href= "page2.php"> this is another page</a><br>
<a href="logout.php">log out</a>