<?php

if(!empty($_POST["n"]))
{
    $n=$_POST["n"];
    for($i=0;$i<$n;$i++)
    {
        if($i==3 or $i==5)
        {
            continue;
        }
        echo "<br>Your i value is $i";
    }
}
?>

<form action="c.php" method="post">
    Enter Loop Size <input type="number" name="n" required> <br><br>
    <button>Click Here</button>
</form> 