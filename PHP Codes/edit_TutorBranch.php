<html>
<head> 
</head>
<body bgcolor="lightgreen">
Tutor Page
</br>
</br>
<form name="form1" method="post" action="tutor.php" >
<input type="submit" class="myButton" name="Submit" value="Login page">
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
echo"Education of '$name' :<br/>";
$query="Select tutor.username, tutor.Qualification, tutor.telephone 
FROM tutor Where username='$name'";


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
<br/>
<form method="post" action="Branch_edited.php">
User name   :<input type="text" name="name"><br/>
Telephone to change:<input type="text" name="telephone"><br/>
New Telephone:<input type="text" name="new"><br/>

<input type="submit" class="myButton" name="submit" value="Change Telephone">
</form>
</body>
</html>	