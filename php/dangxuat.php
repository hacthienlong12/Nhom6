<?php
    if (file_exists("..\\text")){
        unlink("..\\text\\username.txt");
        rmdir("..\\text");
    } else {
        echo "";
    }
    header("Location: hienthisanpham.php");
?>