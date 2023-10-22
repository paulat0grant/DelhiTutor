<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$name= $_POST['myusername'];
$pass= $_POST['mypassword'];


if($name!="admin" && $pass!="admin")
  {
echo"ACCESS DENIED";
exit();
}
?>
<html>
<BODY bgcolor="lightgreen">
Admin Page
</Br>
</Br>
<form method="post" action="select_course.php">
COURSE ID:<input type="text" name="cname">
<input type="submit" class="myButton" name="submit" value="Students Enrolled">
</form>

<form method="post" action="select_student.php">
STUDENT NAME :<input type="text" name="name">
<input type="submit" class="myButton" name="submit" value="Courses Enrolled">
</form>

<form method="post" action="add_course.php">
<input type="submit" class="myButton" name="wel" value="ADD NEW COURSE">
</form>
<form method="post" action="admin_edit_course.php">
<input type="submit" class="myButton" name="submit" value="EDIT EXISTING STUDENT COURSE">
</form>
<form method="post" action="add_schedule.php">
<input type="submit" class="myButton" name="wel" value="ADD NEW SCHEDULE">
</form>
<form method="post" action="display_feedback.php">
<input type="submit" class="myButton" name="wel" value="DISPLAY FEEDBACK">
</form>

	
</body>
</html>	


