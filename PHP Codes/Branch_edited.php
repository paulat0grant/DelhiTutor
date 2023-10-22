<html>
<head>
</head>
<body bgcolor="lightgreen">
Tutor Page
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

$name=$_POST['name'];
$telephone=$_POST['telephone'];
$new=$_POST['new'];

$query = "update tutor SET telephone = '$new' WHERE username = '$name' AND telephone = '$telephone'";
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));
echo"<a href='edit_TutorBranch.php'>Back</a><br/>TELEPHONE CHANGED SUCESSFULLY";

?>


