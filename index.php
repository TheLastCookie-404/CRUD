<?php
    require("config/connect.php");
    $crud = mysqli_query($db,"SELECT * FROM `crud`");
    $crud = mysqli_fetch_all($crud);

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles/main.css?=v1">
    </head>
    <body>
        <div class="wrapper">
            <div class="form-block">
                <div class="form-heading">Введите что-нибудь</div>
                <form action="handler\loader.php" method="post">
                    <input class="form-input field" type="form" name="field">
                    <input class="form-input button" type="submit" value="Нажми на меня!">
                </form>
            </div>
            <div class="form-block">
                <div class="form-heading">Смотри, шо ввёл</div>
                <? foreach($crud as $elems) { ?>
                    <div class="crud-elems"><?= $elems[0] ?> <?= $elems[1] ?></div>
                <? } ?>
            </div>
        </div>
        
        <!-- <?php
            echo "<pre>";
                var_dump($crud);
            echo "</pre>";
        ?> -->
    </body>

</html>

