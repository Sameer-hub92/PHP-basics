<?php

$student_info=array(12,34,12,57,789,6789);

// array_push($student_info,11111);
echo "<br> element are...";
array_pop($student_info);
foreach($student_info as $item)
{
    echo "<br>$item";
}

?>
