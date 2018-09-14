<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<h1>THE INFORMATION ABOUT STUDENT IN DIGITAL LIBRARY</h1>
<p>VERIFY AND GO BACK TO YOUR PAGE</P>

</body>
</html>
<?php

$sid = $_POST['SID'];

 if($c = mysqli_connect('localhost','root','')){

     if($a = mysqli_select_db($c,'library')){

       $result = mysqli_query($c,"select sid,name,sidi,intime,outime from digital where sid = '$sid'");

     echo "<table border='1'>
<tr>
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>SYSTEM ID</th>
<th>INTIME</th>
<th>OUTIME</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['sid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['sidi'] . "</td>";
echo "<td>" . $row['intime'] . "</td>";
echo "<td>" . $row['outime'] . "</td>";
echo "</tr>";
}
echo "</table>";


     }

 }

?>