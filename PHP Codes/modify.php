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

$name=$_POST['name'];
$value=$_POST['value'];

$add = "update members SET Telephone = '$value' WHERE username = '$name'";

$query = mysqli_query($connect,$add)or die(mysqli_error($connect));

echo("Record Added Sucessfully");

?>

<html>
<body >
<form method="post" action="studentLogin.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>
</body>
</html>	