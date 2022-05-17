<?php
    include_once('db.php');

    $name =$_POST['Name_1'];
    $phone =$_POST['Phone_no'];


    if (mysql_query("INSERT INTO `users` (`name`,`phone`) VALUES ('".mysql_real_escape_string($name)."','".mysql_real_escape_string($phone)."')")) {
        echo 'Success!'
    } else {
        echo mysql_error();
        exit;
    }
?>