<?php
    $userName = $_POST["username"];
    $passWord = $_POST["password"];

    // echo $userName . "<br>" . $passWord;

    $result =  ($userName = "admin" && $passWord = "123") ? "Đăng nhập thành công" : "Đăng nhập thất bại";
    
    echo $result;