<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");

mysqli_select_db($connect,"databasetutor");


$remove = "DELETE FROM regis WHERE  cname='$_GET[cname]' and uname='$_GET[uuname]'";

$results=mysqli_query($connect,$remove) or die(mysqli_error($connect));

echo " COURSE SUCESSFULLY REMOVED<br/><a href='studentLogin.php'>Back</a>";



?>

<html>
<body bgcolor="lightgreen">
</body>
</html>	
