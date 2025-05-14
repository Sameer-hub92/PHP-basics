<?php

if(!empty($_POST["n"]))
{
    $i=0;
    $n=$_POST["n"];
    while($i<$n)
    {
        echo"<br>value is $i";
        $i++;
    }
    
}
?>

<form action="whileloop.php" method="post">
    Enter pattern Size <input type="number" name="n" required> <br><br>
    <button>Click Here</button>
</form> 