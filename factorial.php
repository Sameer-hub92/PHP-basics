<?php

if(!empty($_POST["n"]))
{
    $n=$_POST["n"];
    $factorial=1;
    
for ($i = 1; $i <= $n; $i++) {
    $factorial=$factorial* $i;
}
echo "Factorial of $n is $factorial";

}
?>

<form action="factorial.php" method="post">
    Enter factorial number<input type="number" name="n" required> <br><br>
    <button>Click Here</button>
</form> 