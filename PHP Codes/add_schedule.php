<?php
session_start();
echo"Admin Page<br/>";
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
mysqli_select_db ($connect,"databasetutor");
echo"List of Tutor :<br/>";
$query="Select tutor.username, tutor.Qualification, tutor.telephone 
FROM tutor";


$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

echo "<table  border=’2’><tr><td><b>Tutor</b></td><td><b>Qualification</b></td><td><b>Telephone</b></td></tr>\n";
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
<body bgcolor="lightgreen">
</br>
</br>
<form method="post" action="insert_schedule.php">
<br/>
<h3 class="box-title">New Schedule</h3>
<br/>
Course   :<input type="text" name="course"><br/>
Subject :<input type="text" name="subject"><br/>
Tutor :<input type="text" name="teacher"><br/>
Date :<input type="text" name="day"><br/>
Start Time :<input type="text" name="stime"><br/>             
Venue :<input type="text" name="class"><br/>  
<input type="submit" class="myButton" name="submit" value="submit">
</form>
</body>
</html>