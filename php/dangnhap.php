<?php
    require("kiemtraketnoi.php");
    if(isset($_POST['submit'])){
        $Username = $_POST['username'];
        $Password = $_POST['password'];

        $sql = "SELECT * FROM `dangnhap` WHERE Tentaikhoan = '$Username' AND Matkhau = '$Password'";
        $execute = mysqli_query($conn, $sql);
        $message="Tài khoản hoặc mật khẩu không đúng, vui lòng kiểm tra lại";
    }
    if(isset($Username) && isset($Password)) {
        if(mysqli_num_rows($execute) == 1){
            mkdir("..\\text");
            $file=fopen("..\\text\\username.txt","w+");
            fwrite($file,$Username);
            fclose($file);
            header('location: hienthisanphamquanly.php');
        }else{
            echo "<script type='text/javascript'>alert('$message')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        #wrapper{
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
        h2{
            text-align: center;
            margin-bottom: 15px;
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
    <div id="wrapper">
        <form action="" method="post">
            <h2>Đăng Nhập</h2>
            <div class="form">
                <div>
                    <label for="tên đăng nhập">Tên đăng nhập</label>
                </div>
                <input type="text" name="username"id="username" required>
            </div>
            <div class="form">
                <div>
                    <label for="tên đăng nhập">Mật khẩu</label>
                </div>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="login">
                <div>
                    <input type="submit" name="submit" value="Đăng nhập">
                </div>
                <div>
                    <a href="hienthisanpham.php"><input type="button" value="Hủy"></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>