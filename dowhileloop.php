<?php

if(!empty($_POST["n"]))
{
    $i=0;
    $n=$_POST["n"];
    do
    {
        echo "<br>value is $i";
        $i++;
    }
    while($i<$n);
    
}
?>

<form action="dowhileloop.php" method="post">
    Enter pattern Size <input type="number" name="n" required> <br><br>
    <button>Click Here</button>
</form> 