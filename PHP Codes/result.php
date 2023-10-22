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

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysqli_select_db ($connect,"databasetutor");
$query="SELECT * FROM members WHERE username='$uname' and password='$upass'";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

if($row = mysqli_fetch_array($results))
  { echo"Welcome ". $row['username'] ."!!<br/>";
  echo "<table  style='width:50%'>
USER INFORMATION<tr>

<th>USERNAME</th>

<th>BRANCH</th>
<th>YEAR OF PASSING</th>
</tr>";
  
  echo "<tr>";

  echo "<td>" . $row['username'] . "</td>";
  
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "</tr>";
  }
  else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
echo "</table>";

?>

<HTML>
<HEAD>
<TITLE> Home </TITLE>
</HEAD>
<BODY >
<br/><br/>
<form method="post" action="studentLogin.php" style="float:right;">
<input type="submit" class="myButton" name="add" value="LOGOUT">
</form>

<form method="post" action="add.php" style="float:right;">
<input type="submit" class="myButton" name="add" value="ADD USER INFROMATION">
</form>

<form method="post" action="new_course_reg.php" >
<input type="submit" class="myButton" name="add" value="COURSE REGISTRATION">
</form>


<?php
echo"<center><h2>REGISTERED COURSES</h2></center>";
$query="Select regis.cname, course.credit, course.instructor 
FROM course 
INNER JOIN regis 
ON course.name=regis.cname 
AND regis.uname= '$uname';";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

echo "<center><table style='width:50%'><tr><td></td><td><b>Course ID</b></td><td><b>Credits</b></td><td><b>Instructor</b></td></tr>\n";
while ($rows=mysqli_fetch_assoc($results)) {
echo "<tr><td><a href='Remove_Course.php?cname=$rows[cname]&uuname=$uname'>Remove</a></td>\n"; 
foreach($rows as $value) 
{
echo "<td>\n";  
echo $value; 
echo "</td>\n"; 
}
echo "</tr><br>\n"; 
}
echo "</table></center>\n"; 
?>
<br/>

<form name="form1" method="post" action="display_schedule.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Class Schedules">
</form>
<form method="get" action="edit_course.php" style="float:right">
<input type="submit" class="myButton" name="add" value="Edit Course(s)">
</form>

</BODY>
</HTML>
















