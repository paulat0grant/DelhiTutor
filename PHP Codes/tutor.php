<?php
session_start();
session_destroy();
session_start();
$_SESSION['authuser']=1;

if(isset($_POST['save_btn']))
    {
        //write some of your code here, if necessary
        
     
	 
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysqli_select_db ($connect,"databasetutor");
$query="SELECT * FROM tutor WHERE username='$uname' and password='$upass'";

$results=mysqli_query($query) or die(mysqli_error());

if($row = mysqli_fetch_array($results))
{
echo'<script> window.location="SchoolDB/tutor_result.php"; </script> ';
}
else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
  }
?>
<HTML>
<HEAD>
<TITLE> Home </TITLE>
</HEAD>
<BODY bgcolor="lightgreen">
Tutor Page
<table  width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#ADD8E6">
<tr>
<form name="form1" method="get" action="result_tutor.php" onsubmit="return validate(this);">
<td>
<table  width="100%" border="0" cellpadding="7" cellspacing="1" bgcolor="#ADD8E6">
<tr>
<td colspan="3"><strong><center><h2>Tutor Login</h2></center></strong></td>
</tr>
<tr>
<td></td>
<td><center><input name="myusername" placeholder="USERNAME" type="text" id="myusername"></center></td>
</tr>
<tr>
<td></td>
<center><td><center><input name="mypassword" placeholder="PASSWORD" type="password" id="mypassword"></center></td></center>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" class="myButton" name="Submit" value="LOGIN"></td>
</form>
<form name="form2" method="post" action="newtutorreg.php">
<td><input type="submit" class="myButton" name="newreg" value="SIGN UP"></td>
</form>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
<form name="form1" method="post" action="admin_page.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Admin Login">
</form>
<form name="form2" method="post" action="studentLogin.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Student Login">
</form>
</BODY>
</HTML>
	
