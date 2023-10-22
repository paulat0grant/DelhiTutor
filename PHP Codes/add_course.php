<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

?>
<html>
<head>
<title>NEW COURSE REGISTRATION</title>
</head>
<body bgcolor="lightgreen">
Admin Page
</br>
</br>
<form name="form1" action="studentLogin.php" >
<input type="submit" class="myButton" name="Submit" value="Login">
</form>

<h2>NEW COURSE REGISTRATION</h2>


<form method="post" action="insert_course.php">
 
Course ID :<input type="text" name="name"><br/>
Credit :<input type="text" name="credit"><br/>
Instructor :<input type="text" name="instructor"><br/>
Fees: <input type="text" name="fees"><br/>

<input type="submit" class="myButton" name="submit" value="Register">

</body>
</html>	
