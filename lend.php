<!DOCTYPE html>
<html>
<body style="background-color:GRAY;">

<h1>VALUES ARE ADDED</h1>
<p>GO BACK TO YOUR SITE</p>

</body>
</html>

<?php

   $sid = $_POST['SID'];
   $name = $_POST['NAME'];
   $bid = $_POST['BID'];
   $bname = $_POST['BNAME'];
   $date = $_POST['DATE'];



 $c = mysqli_connect("localhost","root","");

 if(mysqli_select_db($c,"library")){

   $check = mysqli_query($c,"insert into lend values('$sid','$name','$bid','$bname','$date')");

 }
echo " you can take the book";

?>

