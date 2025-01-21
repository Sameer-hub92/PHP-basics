<?php
if(!empty($_POST["a"]) and !empty($_POST["b"]))
{
    $ist=$_POST["a"];
    $sec=$_POST["b"];
    if(!empty($_POST["sum"]))
    {
        $ans=$ist+$sec;
        $result="Addition is $ans";
    }
    elseif($_POST["sub"]){
        $ans=$ist-$sec;
        $result="subtraction is $ans";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        <h1>Subtraction</h1>
        <form action="addsub.php" method="post">
        Enter your first value<input type="number" name="a" required><br><br>
        Enter your second value<input type="number" name="b" required><br><br>
        <input type="submit" value="Add now" name="sum"/> &nbsp;&nbsp;
        <input type="submit" value="Sub now" name="sub"/> 

</form>

<?php
if(!empty($result))
{
    echo "<h1 align='center'>$result</h1>";
}
?>
</center>
</body>
</html>