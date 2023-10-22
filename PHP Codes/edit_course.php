<html>
<head> 
</head>
<body bgcolor="lightgreen">
Student Page
</br>
</br>
<form name="form1" method="post" action="studentLogin.php" >
<input type="submit" class="myButton" name="Submit" value="Student Login">
</form>
</body>
</html>



<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$name=$_SESSION['username'];
mysqli_select_db ($connect,"databasetutor");
echo"COURSES TAKEN BY '$name' :<br/>";
$query="Select regis.cname, course.credit, course.instructor 
FROM course 
INNER JOIN regis 
ON course.name=regis.cname 
AND regis.uname= '$name'";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

echo "<table  border=’2’><tr><td><b>Course ID</b></td><td><b>Credits</b></td><td><b>Instructor</b></td></tr>\n";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table>\n"; 
?>

<html>
<head>
</head>
<body >
<br/>
<form method="post" action="course_edited.php">
User name   :<input type="text" name="name"><br/>
Course to change:<input type="text" name="course"><br/>
New course:<input type="text" name="new"><br/>

<input type="submit" class="myButton" name="submit" value="Change Course">
</form>
</body>
</html>	