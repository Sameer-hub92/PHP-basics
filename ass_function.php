<?php

$array=array("Name"=>"Pankaj","Branch"=>"cse","Roll"=>211);

// array_push($array,"Department","IT");
// $array2=array("Nickname"=>"Pankaj","Branch"=>"cse");
// $array3=array("name"=>"Pankaj","Branch"=>"icse");

// $newarray=array_intersect($array,$array2,$array3); // value based

// $newarray=array_intersect_key($array,$array2);

if(array_key_exists("branch",$array))
{
    echo "Key is present";
}
else{
    echo "Key is not Present";
}



// print_r($array);


?>