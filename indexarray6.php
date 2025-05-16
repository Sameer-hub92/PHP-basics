<?php

$student_info=array(12,34,56,78,789,6789);
$new_records=array(34,44,657,879,111);
$final_records=array_merge($student_info,$new_records);

$length=count($final_records);
echo "<br> total elements in the array are $length";



echo "<br>element Are....";

foreach($final_records as $item)
{
    echo "<br>$item";
}

?>  