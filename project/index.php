<?php
    require('config/connect.php');
    $crud = mysqli_query($db,"SELECT * FROM `crud`");
    $crud = mysqli_fetch_all($crud);

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="styles/main.css?=v22">
    </head>
    <body>
        <div class="wrapper">
            <div class="form-block">
                <div class="form-heading">
                    <div class="enterTxt">Введите что-нибудь</div>
                    <a href="handler\deleteAll.php"><div class="delete">× ALL</div></a>
                </div>
                <form action="handler\loader.php" method="post">
                    <input class="form-input field" type="text" name="field">
                    <input class="form-input button" type="submit" value="Нажми на меня!">
                </form>
            </div>
            <div class="form-block">
                <div class="form-heading">Смотри, шо ввёл</div>
                <? foreach($crud as $elems) { ?>
                    <div class="crud-elems">
                        <?= $elems[0] ?>. <?= $elems[1] ?>
                        <a href="handler/delete.php?id=<?= $elems[0] ?>">
                            <span class="delete">×</span>
                        </a>
                        <a href="handler/update.php?id=<?= $elems[0] ?>">
                            <span class="edit">✎</span>
                        </a>
                    </div>
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

