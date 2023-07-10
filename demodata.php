<?php
include("config.php");

$sql="SELECT * FROM attendance";
$result=mysqli_query($con,$sql);
$num_row = mysqli_num_rows($result);
$list=array();
while($row = mysqli_fetch_array($result))
{
$list[]=$row;
}
echo json_encode($list);
?>