<?php
if(!empty($_POST["a"]) and !empty($_POST["b"]))
{
    $ist=$_POST["a"];
    $sec=$_POST["b"];
    $operation=!empty($_POST['sum'])? 'sum' :(!empty($_POST['sub'])? 'sub':null);
    switch($operation)
    {
        case 'sum':
            {
                $ans=$ist+$sec;
                $result="Your Addition is $ans";
                break;
            }
            case 'sub':
                {
                  $ans=$ist-$sec;
                  $result="your subtraction is $ans";
                  break;  
                }
                default:
                {
                    $result="Plz click on button";
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
    <center>

        <h1>Mathmatic calculation</h1>
        <form action="addsub.php" method="post">
        Enter your first value<input type="number" name="a" required><br><br>
        Enter your second value<input type="number" name="b" required><br><br>
        <input type="submit" value="Add now" name="sum"/> &nbsp;&nbsp;
        <input type="submit" value="Sub now" name="sub"/> 
        <input type="submit" value="Anythink elsw" name="jk"/> 

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