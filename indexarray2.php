<?php
$student_info=array(12,23,99,34,56,78);
// sort($student_info);
rsort($student_info);//for descending order

// print_r($student_info);
echo "<br>Your Elements are:...";
foreach($student_info as $item)
{
    echo "<br>$item";
}


?>