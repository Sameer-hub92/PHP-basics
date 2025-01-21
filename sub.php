<?php
if(!empty($_POST["a"]) and !empty($_POST["b"]))
{
    $ist=$_POST["a"];
    $sec=$_POST["b"];
    $result=$ist-$sec;
    echo "Ans  is $result";
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
        <form action="sub.php" method="post">
        Enter your first value<input type="number" name="a" required><br><br>
        Enter your second value<input type="number" name="b" required><br><br>
        <button>Find subtraction</button>

</center>
</body>
</html>