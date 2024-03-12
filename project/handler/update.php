<?php
    require('../config/connect.php');
    $content = $_POST['field'];
    $id = $_GET['id'];

    mysqli_query($db,"UPDATE `crud` SET `content` = '$content' WHERE `Id` = '$id' ");

    var_dump($_GET);
    //header('location: ../index.php');
?>