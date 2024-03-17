<?php 
    require("config/connect.php"); 
    $simplecrud = mysqli_query($db,"SELECT * FROM `simplecrud`") or die("Ты идиот!!!");
    $simplecrud = mysqli_fetch_all($simplecrud);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles/main.css">
    </head>
    <body>
        <form action="handler\create.php" method="post">
            <input type="text" name="title"/>
            <input type="number" name="price"/>
            <input type="text" name="manufacturer"/>
            <input type="submit"/>
        </form>
    </body>
</html>