<?php
session_start();
$_SESSION['authuser']=1;

?>
<HTML>
<HEAD>
<TITLE> Home </TITLE>
</HEAD>
<BODY bgcolor="lightgreen">
Admin Page
<center>
<table  width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#ADD8E6" >
<tr>
<form name="form1" method="post" action="result_admin.php" onsubmit="return validate(this);">
<td>
<table  width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#ADD8E6">
<tr>
<td colspan="3"><strong><center><h2>Admin Login</h2></center></strong></td>
</tr>
<tr>
<td>AdminID:</td>
<td><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" class="myButton" name="Submit" value="LOGIN"></td>
</form>

</tr>
</table>
</td>
</tr>
</table>
</center>
<form name="form1" method="post" action="studentLogin.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Student Login">
</form>
<form name="form1" method="post" action="tutor.php" style="float:left">
<input type="submit" class="myButton" name="Submit" value="Tutor Login">
</form>
</BODY>
</HTML>

