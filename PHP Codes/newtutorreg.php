<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"databasetutor");


?>
<html>
<head>
<title>TUTOR REGISTRATION</title>
</head>
<body bgcolor="lightgreen">
Tutor Page
</br>
</br>
<form method="post" action="insert_tutordata.php">
<br/>
<h2>TUTOR REGISTRATION</h2>
Name :<input type="text" name="name"><br/>
Password :<input type="password" name="pass"><br/>
Highest Qualification :<input type="text" name="Qualification"><br/>
Telephone:<input type="text" name="telephone"><br/>


<input type="submit" class="myButton" name="submit" value="Register">

</form>
</body>
</html>	
	

