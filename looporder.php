<?php
 $a=34;
 $b=++$a;
 $a=$b++;
 $a=$b;
 echo "your a value is $a";
 echo "<br>your b value is $b";
?>

<br><br><br>
<?php
 $a=90;
 $b=--$a;
 $b=$a++;
 $a=$b++;
 $b=$a;
 echo "<br>your a value is $a";
 echo "<br> your b value is $b";

?>
<br><br><br>


<?php
$a=800;
$b=$a++;
$b=$b--;
$a=--$b;
$b=$a;
echo "<br> your a value is $a";
echo "<br> your b value is $b";
?>