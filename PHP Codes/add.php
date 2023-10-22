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
?>
<form method="post" action="modify.php">
<h2>Add User Information</h2>
User name   :<input type="text" name="name"><br/>
Add Telephone :<input type="text" name="value"><br/>
<input type="submit" class="myButton" name="submit" value="submit">
</form>
