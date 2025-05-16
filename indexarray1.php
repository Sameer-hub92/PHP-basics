<?php 

$student_info=array("pankaj","rohan","sameer","muskan");
 
//echo "your value is ".$student_info[2];
echo "Your array elements are:....";
// foreach($student_info as $chandigarh)
// {
//     if($chandigarh=='rohan' or $chandigarh=='sameer')
//     {
//         continue;
//     }
// echo "<br>$chandigarh";
// }
$total=count($student_info);


for($i=0;$i<$total;$i++)
{
    echo "<br>".$student_info[$i];
}
?>