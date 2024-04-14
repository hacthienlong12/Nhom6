<?php
    if(file_exists("..\\text\\username.txt")){
    } else {
        header("Location: chrome://kill");
    }
    require("kiemtraketnoi.php");
    if(isset($_POST['submit'])){
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $fullname=$_POST['fullname'];
        if(isset($username) && isset($password) && isset($fullname)) {
            $sql="INSERT INTO `dangnhap`(`Tentaikhoan`, `Matkhau`, `Tenquanli`) VALUES ('$username','$password','$fullname')";
            $execute=mysqli_query($conn, $sql);
            header("Location: thongtinquanly.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="..\\img\\logo.jpg">
    <title>Đăng ký</title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family:Arial, Helvetica, sans-serif
        }
        .wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10%
        }
        form{
            border: 3px solid gray;
            padding: 40px;
            border-radius: 10px;
        }
        h1{
            text-align: center;
        }
        .form input{
            width: 450px;
            align-items: center;
            height: 35px;
            border: 3px solid lightgray;
            outline: none;
            padding-left: 15px;
            margin-bottom: 20px;
            border-radius: 10px;

        }
        .form label{
            display: block;
            padding-bottom: 5px;
        }
        .login{
            display: flex;
            justify-content: space-between;
        }
        .login input{
            padding: 5px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form method="post">
        <h1>Đăng kÍ</h1>
            <div class="form">
                <label for="user">Tên tài khoản</label>
                <input type="text" name="user" require>
            </div>
            <div class="form">
                <label for="pass">Mật khẩu</label>
                <input type="password" name="pass" require>
            </div>
            <div  class="form">
                <label for="fullname">Tên quản lý</label>
                <input type="text" name="fullname" require>
            </div>
            <div class="login">
                <div>
                <a href="thongtinquanly.php"><input type="submit" name="submit" value="Đăng kí"></a>
                </div>
                <div>
                <input type="button" value="Huỷ"></a>
                </div>
            </div>
        </form>
    </div>   
</body>
</html>

