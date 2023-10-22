<html>
<head>
</head>
<body bgcolor="lightgreen">
<div id="div1"></div>
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

$course = $_POST['course'];
$subject = $_POST['subject'];
$teacher = $_POST['teacher'];
$day = $_POST['day'];
$stime = $_POST['stime'];
$class = $_POST['class'];

if($course=='' or $subject=='' or $teacher=='' or $day=='' or $stime=='' or $class=='')
echo"ERROR IN REGISTRATION";

else{
$insert = "INSERT INTO schedule(course, subject, teacher, day, stime, class)
values('$course','$subject','$teacher','$day','$stime','$class')";

$results=mysqli_query($connect,$insert) or die(mysqli_error($connect));

echo " SUCESSFULLY ADDED INFORMATION<br/><a href='add_schedule.php'>Back</a>";
}
?>

	