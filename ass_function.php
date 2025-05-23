<?php

$array=array("Name"=>"Pankaj","Branch"=>"cse","Roll"=>211);
$array2=array("Nickname"=>"Pankaj","Branch"=>"cse");

$newarray=array_intersect($array,$array2);

print_r($newarray);


?>