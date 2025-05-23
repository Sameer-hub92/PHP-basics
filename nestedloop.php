<?php

if(!empty($_POST["n"]))
{
    $n=$_POST["n"];
    // for($i=0;$i<$n;$i++)
    // {
        
    //     for($j=0;$j<$i;$j++)   

    //     {
    //     echo "$j";
    //     }
    //     echo "<br>";
    // }

    for($i=$n;$i>1;$i--)
    {
        for($j=$n;$j>$i;$j++)
        {
            echo "*";
        }
        echo "<br>";
    }
}
?>

<form action="nestedloop.php" method="post">
    Enter pattern Size <input type="number" name="n" required> <br><br>
    <button>Click Here</button>
</form> 