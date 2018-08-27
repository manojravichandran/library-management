<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<h1>THE LENDED BOOKS AND DETAILS</h1>
<p>VERIFY AND GO BACK TO YOUR PAGE</P>

</body>
</html>

<?php

if($c = mysqli_connect('localhost','root','')){
     if($a = mysqli_select_db($c,'library')){


       $result = mysqli_query($c,"select * from lend");

       echo "<table border='1'>
<tr>
<th>your id</th>
<th>your Name</th>
<th>Book ID</th>
<th>book name</th>
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
