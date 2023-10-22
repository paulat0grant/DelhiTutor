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

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysqli_select_db ($connect,"databasetutor");
$query="SELECT * FROM tutor WHERE username='$uname' and password='$upass'";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

if($row = mysqli_fetch_array($results))
  { echo"Welcome ". $row['username'] ."!!<br/>";
  echo "<table  style='width:50%'>
USER INFORMATION<tr>

<th>USERNAME</th>

<th>QUALIFICATION</th>
<th>TELEPHONE</th>
</tr>";
  
  echo "<tr>";

  echo "<td>" . $row['username'] . "</td>";
  
  echo "<td>" . $row['Qualification'] . "</td>";
  echo "<td>" . $row['telephone'] . "</td>";
  echo "</tr>";
  }
  else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
echo "</table>";

?>

<HTML>
<BODY>
<br/><br/>
<form method="post" action="tutor.php" style="float:right;">
<input type="submit" class="myButton" name="add" value="LOGOUT">
</form>
<br/>

<form name="form1" method="post" action="display_schedule.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Class Schedules">
</form>
<form method="get" action="edit_TutorBranch.php" style="float:right">
<input type="submit" class="myButton" name="add" value="Edit Branches">
</form>

</BODY>
</HTML>
















