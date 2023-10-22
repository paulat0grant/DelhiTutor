<html>
<body bgcolor="lightgreen">
Schedule Page
<br/>
<br/>
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

mysqli_select_db ($connect,"databasetutor");
$query="SELECT * FROM schedule";

$results=$connect->query($query);

echo"Welcome " ."!!<br/>";
  echo "<table  style='width:50%'>
SCHEDULES INFORMATION<tr>

<th>COURSE</th>

<th>SUBJECT</th>
<th>TUTOR</th>
<th>DATE</th>
<th>TIME</th>
<th>VENUE</th>
</tr>";

if ($results->num_rows > 0) {
  // output data of each row
  while($row = $results->fetch_assoc()) {
    echo "<tr>";

  echo "<td>" . $row['course'] . "</td>";
  
  echo "<td>" . $row['subject'] . "</td>";
  echo "<td>" . $row['teacher'] . "</td>";
  
  echo "<td>" . $row['day'] . "</td>";
  
  echo "<td>" . $row['stime'] . "</td>";
  echo "<td>" . $row['class'] . "</td>";
  echo "</tr>";
	}
} else {
  echo "0 results";
}

echo "</table>";
$connect->close();
?>


	
