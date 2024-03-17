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
        <title>CRUD</title>
        <link rel="stylesheet" href="styles/main.css?=v30">
    </head>
    <body>
        <div class="modal-btn" onclick="OpenModal('modal1');">Open modal</div>
        <div id="modal1" class="modal-wrapper">
            <div class="wrapper">
                <div class="form-block">
                    <div class="form-heading">
                        <div class="enterTxt">Введите что-нибудь</div>
                        <a href="handler\deleteAll.php"><div class="delete">× ALL</div></a>
                    </div>
                    <form id="form1" action="handler\loader.php" method="post">
                        <input id="input1" class="form-input field" placeholder="Введи что-то" name="field">
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
                            <span class="edit" onclick="ChangeAction('form1', 'input1', <?= $elems[0] ?>);">✎</span>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
        <script src="scripts/update.js"></script>
        <script src="scripts/modal.js"></script>
    </body>

</html>

