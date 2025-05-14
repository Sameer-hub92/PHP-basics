<?php

if(!empty($_POST["n"]))
{
    $n=$_POST["n"];
    for($i=0;$i<$n;$i++)
    {
        echo "<br>Your i value is $i";
    }
}
?>

<form action="forloop.php" method="post">
    Enter Loop Size <input type="number" name="n" required> <br><br>
    <button>Click Here</button>
</form> 