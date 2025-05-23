<?php
$message="";
    
    if(!empty($_GET['a']))
    {
        $ist=$_GET['a'];
        for($i=1;$i<=10;$i++)
        {
        
            $message.= $ist."*".$i."=".$ist*$i."<br>";
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
    <h1>Table</h1>
    <form action="#" method="get">
        Enter any value : <input type="number" name="a" required><br><br>
        <button>Submit</button>
    </form>
    <?php
        if(!empty($message))
        {
            echo $message;
        }
    ?>
</body>
</html>