
<?php
    if(file_exists("..\\text\\username.txt")){
    } else {
        header("Location: chrome://kill");
    }
    require("kiemtraketnoi.php");
    if (isset($_POST['submit'])) {
        $Id=$_POST['id'];
        $Tensanpham=$_POST['name'];
        $Soluong=$_POST['count'];
        $Ngaycapnhat=$_POST['date'];
        $Loai=$_POST['type'];
        $Tinhtrang=$_POST['status'];
        if(isset($Id) && isset($Tensanpham) && isset($Soluong) && isset($Ngaycapnhat) && isset($Loai) && isset($Tinhtrang)) {
            $sql = "UPDATE `sanpham` SET `ID`='$Id',`Tensanpham`='$Tensanpham',`Soluong`='$Soluong',`Ngaycapnhap`='$Ngaycapnhat',`Loai`='$Loai',`Tinhtrang`='$Tinhtrang' WHERE `ID`='$Id'";
            $execute = mysqli_query($conn, $sql);
            header("location: ..\\php\\hienthisanphamquanly.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="..\\img\\logo.jpg">
    <title>Quản lý</title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family:Arial, Helvetica, sans-serif
        }
        body{
           background-color : while;
        }
        .container {
            margin-left: 30px;
        }
        #header{
            background-color:lightgray;
            display: flex;
            justify-content: space-between;
        }
        nav{
            display: flex;
        }
        #main-menu{
            display: flex;
            list-style: none;
            margin-left: 50px;
        }
        .lg{
            display: flex;
            border: 1px solid black;
            background-color:#49422F;
            border-radius: 5px;
            padding-right: 5px;
        }
        #logo{
            padding: 15px 0px;
            display: block;
            text-decoration: none;
            font-size:20px;
            color:black;
            display: flex;
        }
        #logo img{
            width: 40px;
            height:40px;
        }
        #logo h4{
            display: block;
            margin-top: 10px;
        }
       #main-menu li a{
            color: black;
            text-decoration: none;
            display: block;
           padding: 25px 24px; 
            font-size: 20px;
        }
        #main-menu li a:hover{
            color: white;
            transition: all 0.5s;
        }
        .login{
            padding: 20px 30px;
            margin-top:5px;
            
        }
        .login a{
            text-decoration: none;
            color: black;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }
        .login a:hover{
            background-color: black;
            color: white;
            transition: all 0.5s;  
        }
        .search{
            background-color: white;
            margin-top: 25px;
            margin-bottom: 25px;
            border-radius: 5px;
        }
        .search input{
            outline: none;
            border: 0px solid white;
            width:300px;
            padding-left:15px
        }
        .search img{
            width: 12px;
            margin-right: 10px;
            margin-top: 6px;
        }
        .support{
            margin-top: 15px;
            margin-left: 30px;
        }
        .support img{
            width: 40px;
        }
        .ql{
            display: flex;
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
        .update{
            display: flex;
            justify-content: space-between;
        }
        .update input{
            padding: 5px 20px;
            border-radius: 5px;
        }
        #formupdate{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 3%;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
<nav class="container">
                <a href="hienthisanphamquanly.php" id="logo">
                    <div class="lg">
                        <div>
                            <img src="..\\img\\logo.jpg">
                        </div>
<div>
                            <h4>nhóm 6</h4>
                        </div>
                    </div>
                </a>
                <ul id="main-menu">
                    <li><a href="thongtinquanly.php"><b>Thông tin</b></a></li><!--Thông tin của người nhân viên-->
                    <li><a href="themsanpham.php"><b>Quản lý</b></a></li><!--Giới thiệu mặt hàng-->
                    <li><a href="danhgiaquanly.php"><b>Đánh giá</b></a></li><!--Đánh giá-->
                    <li><a href="hienthisanphamquanly.php"><b>Hiện thị</b></a></li>
                </ul>
            </nav>
            <div class="ql">
                <div class="search">
                    <input type="text">
                    <img src="..\\img\\search.png" alt="">
                </div>
                <div class="support">
                    <a href="https://zalo.me/g/tmnohv799"><img src="..\\img\\support.png" alt=""></a>
                </div>
                <div class="login">
                    <a href="thongtinquanly.php" id="dangnhap"><b>ĐĂNG NHẬP</b></a>
                </div>
            </div>
        </div>
    </div>
<?php
    require("kiemtratentaikhoan.php");
?>
<script>
    var name="<?php echo $temp;?>";// lấy dữ liệu từ mã php
    document.getElementById("dangnhap").innerHTML = `Hello, ${name}`;//thay thế nội dung id mang tên dangnhap
</script>
    <div id="formupdate">
        <form action="" method="post">
            <h2>Thêm sản phẩm</h2>
            <div class="form">
                <div>
                    <label >Mã sản phẩm</label>
                </div>
                <input type="text" name="id" id="id" placeholder="Mã id cần chỉnh sửa" required>
            </div>
            <div class="form">
                <div>
                    <label>Tên sản phẩm</label>
                </div>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form">
                <div>
                    <label>Số lượng</label>
                </div>
                <input type="text" name="count" id="count" required>
            </div>
            <div class="form">
                <div>
                    <label>Ngày cập nhập</label>
                </div>
                <input type="text" name="date" id="date" required>
            </div>
            <div class="form">
                <div>
                    <label>Loại</label>
                </div>
                <input type="text" name="type" id="type" required>
            </div>
            <div class="form">
                <div>
                    <label>Tình trạng</label>
                </div>
                    <input type="text" name="status" id="status" required>
                </div>
            <div class="update">
                <div>
                    <input type="submit" name="submit" value="Cập nhập lại">
                </div>
                <div>
                    <a href="hienthisanpham.php"><input type="button" value="Hủy"></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
