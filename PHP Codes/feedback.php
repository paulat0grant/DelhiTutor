<HTML>
<HEAD>
</HEAD>
<BODY bgcolor="lightgreen">
Feedback Page
</br>
</br>
</BODY>
</HTML>

<?php
$name = $_POST['name'];
$eid = $_POST['eid'];
$comment = $_POST['comment'];

$connect = mysqli_connect("localhost", "root", "");



$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");
	
mysqli_select_db ($connect,"databasetutor");
	
$query = "insert into feedback(name, eid, comment)"." values('$name', '$eid', '$comment')";

$results=mysqli_query($connect,$query) or die(mysqli_error($connect));


echo" YOUR FEEDBACK SUBMITTED";

?>

