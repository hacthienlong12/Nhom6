<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="nhom6";
    try {
        $conn=mysqli_connect($servername,$username,$password,$databasename);
        header("Location: .\\php\\hienthisanpham.php");
    } catch (mysqli_sql_exception $e){
        header("Location: chrome://kill");//tạo mất kết nối với máy chủ của 1 trang web
    }
?>