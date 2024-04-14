<?php
    require("kiemtraketnoi.php");
    $id = (int) $_GET['id'];
    $sql = "DELETE FROM `sanpham` WHERE `sanpham`.`ID` = $id";
    $execute=mysqli_query($conn,$sql);
    header("location: hienthisanphamquanly.php");
?>