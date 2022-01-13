<?php

    $dbhost="113.164.246.25:4308";
    $usname="root";
    $passwd="TEL4VN!@#Intern2021@12";
    $dbname="testdb";

    $connect = mysqli_connect($dbhost, $usname, $passwd, $dbname);
    if($connect) {  
        mysqli_query($connect, "SET NAMES 'utf8'");
    } else {
        echo "Failed to connect".mysqli_connect_error();
    }
    
?>