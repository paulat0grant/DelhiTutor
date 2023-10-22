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
$connect = mysqli_connect("localhost","root","") or die ("check your server connection.");

mysqli_select_db($connect,"databasetutor");

echo "<h2>Course Registration</h2>";
$query="SELECT course.name, course.fees FROM course";
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));
echo"<b>Available courses</b> <table  border=’2’>
<tr>\n
<th>COURSE</th>
<th>Fees</th>
</tr><br>\n";
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
<body >
<form method="post" action="student_course.php">
<br/>
Your User Name   :<input type="text" name="name"><br/>
Course ID :<input type="text" name="course"><br/>
Fees Paid :<input type="text" name="fpaid">
<br/>
<input type="submit" class="myButton" name="submit" value="Register">
</form>
</body>
</html>	
