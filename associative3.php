<?php
$info=array("Name"=>'Pankaj','Roll'=>124,"Branch"=>"cse");
$keys=array_values($info);
// print_r($keys);
// foreach($keys as $value)
// {
//     echo "<br>$value";  
// }
echo "Your array elements are : ----";
$n=count($chd);
for($i=0;$i<$n;$i++)
{
    echo "<br>".$chd[$i];

}

?>