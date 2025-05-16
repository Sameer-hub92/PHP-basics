<?php
$student_info=array(12,23,99,12,34,56,12,78);

$newdata=array_unique($student_info);
echo "<br>Your Elements are:...";
foreach($newdata as $item)
{
    echo "<br>$item";
}


?>