<?php
if(!empty($_POST["a"]) and !empty($_POST["b"]))
{
    $ist=$_POST["a"];
    $sec=$_POST["b"];
    if(!empty($_POST['s']))
    {
        $ans=$ist+$sec;
        $result="your sum is $ans";
    }
    elseif(!empty($_POST['m']))
    {
        $ans=$ist-$sec;
        $result="your sub is $ans";
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
    <form action="#" method="post">
        <h1>Mathametical calculation</h1>
        Enter your first value<input type="number" name="a" required>
        Enter your Second value<input type="number" name="b" required>
        <input type="Submit" value="Add now" name="s">&nbsp;
        <input type="Submit" value="Sub now" name="m">

        
    </form>

    <?php
    if(!empty($result))
    {
        echo "$result";
    }

    ?>
</body>
</html>