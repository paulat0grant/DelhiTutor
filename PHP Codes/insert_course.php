<html>
<head> 
</head>
<body>
<BODY bgcolor="lightgreen">
Admin Page
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
$credit = $_POST['credit'];
$instructor = $_POST['instructor'];
$fees = $_POST['fees'];

if($name=='' or $credit=='' or $instructor=='')
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO course(name,credit,instructor,fees)
values('$name','$credit','$instructor','$fees')";

$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));

echo " SUCESSFULLY ADDED INFORMATION<br/><a href='add_course.php'>Back</a>";
}
?>
