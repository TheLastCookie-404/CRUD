<?php
    require('../config/connect.php');
    mysqli_query($db,'TRUNCATE TABLE `crud`');

    header('location: ../index.php');
?>