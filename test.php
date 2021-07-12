<?php
    
    header("Content-type:application/json");
    $connect = include($_SERVER['DOCUMENT_ROOT']."/Project/config/connect.php");
    $con = mysqli_connect($connect['server'],$connect['db_username'],$connect['db_password'],$connect['db_database']);
    if ($con)
    {
        echo ("connect success");
           
    }
    else
    {
        echo ("connect fail");
    }
    mysqli_close($con);
?>