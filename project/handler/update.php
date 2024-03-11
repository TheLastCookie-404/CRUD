<?php
    require('../config/connect.php');
    $content = $_POST['content'];

    mysqli_query($db,"UPDATE `crud` SET `content` = '$content' ");

    var_dump($_POST);
    //header('location: ..index.php');
?>