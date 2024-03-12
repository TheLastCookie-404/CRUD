<?php
    require('../config/connect.php');
    $id = $_GET['id'];
    mysqli_query($db, "DELETE FROM `crud` WHERE `crud`.`Id` = '$id';");
    if($crud == null) mysqli_query($db,"ALTER TABLE `crud` AUTO_INCREMENT = 0;");
    
    echo $id;
    header('location: ../index.php');
?>