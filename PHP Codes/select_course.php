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

$name=$_POST['cname'];
$query="SELECT uname FROM regis WHERE cname='$name'";
$results=mysqli_query($connect,$query) or die(mysqli_error($connect));

echo "Students enrolled in : ".$name."";
echo "<table  border=’2’>\n";
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
echo "</br>";
echo "</br>";
echo "<a href='admin_page.php'>Admin Login</a><br/>"; 
?>

	