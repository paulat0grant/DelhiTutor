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
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = mysqli_connect("localhost", "root", "") or die ("check your server connection");

mysqli_select_db ($connect,"databasetutor");
$query="SELECT * FROM feedback";

$results=$connect->query($query);

echo"Welcome " ."!!<br/>";
  echo "<table  style='width:50%'>
FEEDBACK INFORMATION<tr>

<th>NAME</th>

<th>EMAIL ID</th>
<th>FEEDBACK</th>
</tr>";

if ($results->num_rows > 0) {
  // output data of each row
  while($row = $results->fetch_assoc()) {
    echo "<tr>";

  echo "<td>" . $row['name'] . "</td>";
  
  echo "<td>" . $row['eid'] . "</td>";
  echo "<td>" . $row['comment'] . "</td>";

  echo "</tr>";
	}
} else {
  echo "0 results";
}

echo "</table>";
$connect->close();
?>


