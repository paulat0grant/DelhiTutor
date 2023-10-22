<html>
<head> 
</head>
<body bgcolor="lightgreen">
Student Page
</br>
</br>
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
$branch = $_POST['branch'];
$year = $_POST['year'];

if($name=='' or $pass=='' or $branch=='' or $year=="1")
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO members(username,password,branch,year)
values('$name','$pass','$branch','$year')";

$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));

echo " Successfully added information";
}
?>
	
<html>
<body>
<form method="post" action="studentLogin.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>
</body>
</html>	

