<?php

    $dbcon = mysqli_connect("localhost","root" ,"","survey");
    
    if (mysqli_connect_errno($dbcon)) {
        echo "ไม่สามารถติดต่อฐานข้อมูล MySQL ได้".  mysqli_connect_error();
        exit;
    }
    mysqli_set_charset($dbcon, 'utf8');
?>
