<!DOCTYPE html>
<html>
<body>

<?php
$arr = array("CIS/AP/23F/5767","CIS/AP/24F/5768","CIS/tP/23F/5769","CIS/AP/23F/5770","CIS/Tn/23F/5771","CIS/AP/23F/5773","CIS/AP/23F/5775","CIS/AP/23G/5800","CIS/AP/23G/5801","CIS/TN/23F/5799");
sort($arr);

$clength = count($arr);
for($x = 0; $x < $clength; $x++) {

 $i=strripos($arr[$x],"/");
 $i=$i+1;
$arrx[$x]=substr($arr[$x],0,$i);

}
$arr2=array_values(array_unique($arrx));
//print_r($arr);
function find_string_in_array ($arr, $string) {

    return array_filter($arr, function($value) use ($string) {
        return strpos($value, $string) !== false;
    });

}

for($y = 0; $y < count($arr2); $y++) {


$results[] = find_string_in_array ($arr, $arr2[$y]);

if( empty($results) ) { echo 'No matches found.'; }
else { 

$res=str_replace($arr2[$y],"",$results[$y]);
echo $arr2[$y].implode(',', $res);echo '<br>'; }
}
/*echo '<pre>';
print_r($results);
echo '</pre>';
for($k=0;$k<count($results);$k++)
{
for($m=0;$m<count($clength);$m++)
{
echo $results[$k][$m]."<br>";
}
}*/
?>

</body>
</html>