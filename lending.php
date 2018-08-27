<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<h1>THE INFORMATION ABOUT STUDENT</h1>
<p>VERIFY AND GO BACK TO YOUR PAGE</P>

</body>
</html>
<?php

$sid = $_POST['SID'];

 if($c = mysqli_connect('localhost','root','')){

     if($a = mysqli_select_db($c,'library')){

       $result = mysqli_query($c,"select sid,name,bid,bname,date from lend where sid = '$sid'");

     echo "<table border='1'>
<tr>
<th>sid</th>
<th>name Out</th>
<th>bid</th>
<th>bname</th>
<th>date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['sid'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['bname'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "</tr>";
}
echo "</table>";


     }

 }

?>