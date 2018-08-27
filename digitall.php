<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">

<h1>THE INFORMATION ABOUT STUDENT RECORDED</h1>
<p>VERIFY AND GO BACK TO YOUR PAGE</P>

</body>
</html>
<?php

$sid= $_POST['SID'];
$name = $_POST['NAME'];
$sidi = $_POST['SIDI'];
$intime = $_POST['IN'];
$outime = $_POST['OUT'];

$date = getdate();
 if($c = mysqli_connect('localhost','root','')){
          echo "done";
     if($a = mysqli_select_db($c,'library')){

      echo "done";
       if(mysqli_query($c,"insert into digital values('$sid','$name','$sidi','$intime','$outime')"))
          echo "done";
     }

 }

?>
