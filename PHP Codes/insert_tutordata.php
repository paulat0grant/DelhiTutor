<html>
<head> 
</head>
<body bgcolor="lightgreen">
Tutor Page
</br>
</br>
<div id="div1"></div>
</body>
</html>

<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");


mysqli_select_db($connect,"databasetutor");
$name = $_POST['name'];
$pass = $_POST['pass'];
$Qualification = $_POST['Qualification'];
$telephone = $_POST['telephone'];

if($name=='' or $pass=='' or $Qualification=='1' or $telephone=="1")
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO tutor(username,password,Qualification,telephone)
values('$name','$pass','$Qualification','$telephone')";

$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));

echo " Successfully added information";
}
?>
<form method="post" action="tutor.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>

		
	

