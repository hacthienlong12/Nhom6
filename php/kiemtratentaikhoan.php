<?php
    require("kiemtraketnoi.php");
    $file=fopen("..\\text\\username.txt","r");
    $datafile=fread($file, filesize("..\\text\\username.txt"));
    $sql = "SELECT Tenquanli FROM `dangnhap` WHERE Tentaikhoan='$datafile'";
    fclose($file);
    $resurt = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($resurt)) {
        $temp= $row["Tenquanli"];
    }
?>