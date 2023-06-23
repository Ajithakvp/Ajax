
<?php
include("config.php");


$name=$_POST['name'];
$text=$_POST['text'];
$sql="INSERT into attendance(name,text) VALUE('$name','$text')";
$result=mysqli_query($con,$sql);
?>