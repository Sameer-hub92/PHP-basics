<?php
if(!empty($_POST['a']))
{
$ist=$_POST["a"];

switch($_POST["a"])
{
    case 'red':
    {
        echo "Your color is  red";
        break;
    }
    case 'blue':
    {
        echo "Your color is blue";
        break;
    }
    case 'green':
    {
        echo "Your color is green";
        break;
    }
    default:
    {
        echo "Your color is not found";
    }


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
    <form action="switch.php" method="post">
    Enter your color <input type="text" name="a" required>
    <input type="submit" value="click here" >

</body>
</html>

