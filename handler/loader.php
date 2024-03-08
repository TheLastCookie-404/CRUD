<?php
    require("../config/connect.php");
    $content = $_POST["field"];
    
    mysqli_query($db,"INSERT INTO `crud` (`content`) VALUES ('$content')");

    

    header("location: ../index.php");
?>