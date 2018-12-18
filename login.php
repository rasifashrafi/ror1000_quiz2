<form action="" method="post" name="Login_Form">
 <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
   <?php if(isset($msg)){?>
   <tr>
     <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
   </tr>
   <?php } ?>
   <tr>
     <td colspan="2" align="center" valign="top"><h3>Login</h3></td>
   </tr>
   <tr>
     <td align="right" valign="top">Email</td>
     <td><input name="Email" type="text" class="Input"></td>
   </tr>
   <tr>
     <td align="right">Password</td>
     <td><input name="Password" type="password" class="Input"></td>
   </tr>
   <tr>
     <td> </td>
     <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
   </tr>
 </table>
</form>
<?php session_start();
if(isset($_POST['Submit'])){
$logins = array('asd@yahoo.com' => '1234','zxc@yahoo.com' => '4321','rasif@yahoo.com' => '1234');
$Email = isset($_POST['Email']) ? $_POST['Email'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

if (isset($logins[$Email]) && $logins[$Email] == $Password){
$_SESSION['UserData']['Email']=$logins[$Email];
header("location:index.php");
} else {
// $msg="<span style='color:red'>Invalid Login Details</span>";
echo "<h4 style='margin-left:42vw;'>invalid</h4>";
}
}
?>