<?php
    if (file_exists("..\\text")){
        unlink("..\\text\\username.txt");
        rmdir("..\\text");
    } else {
        echo "";
    }
    require("kiemtraketnoi.php");
    $sql = "SELECT * FROM `sanpham`";
    $execute = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="..\\img\\logo.jpg">
    <title>Hiện Thị</title>

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
        #productList{
            width: 90%;
            margin: 0 auto;
            margin-top: 2%;
            border: 1px solid lightgray;
            border-radius: 10px;
        }
        th,td{
            border: 1px solid lightgray;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <nav class="container">
                <a href="hienthisanpham.php" id="logo">
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
                    <li><a href="dangnhap.php"><b>Thông tin</b></a></li><!--Thông tin của người nhân viên-->
                    <li><a href="dangnhap.php"><b>Quản lý</b></a></li><!--Giới thiệu mặt hàng-->
                    <li><a href="danhgia.php"><b>Đánh giá</b></a></li><!--Đánh giá-->
                    <li><a href="hienthisanpham.php"><b>Hiện thị</b></a></li>
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
                    <a href="dangnhap.php"><b>ĐĂNG NHẬP</b></a>
                </div>
            </div>
        </div>
    </div>
    <table id="productList">
        <tr>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Ngày cập nhập</th>
            <th>Loại</th>
            <th>Tình trạng</th>
        </tr>
        <?php
            while($row = mysqli_fetch_array($execute)) {
        ?>
        <tr>
            <td><?= $row["ID"] ?></td>
            <td><?= $row["Tensanpham"] ?></td>
            <td><?= $row["Soluong"] ?></td>
            <td><?= $row["Ngaycapnhap"] ?></td>
            <td><?= $row["Loai"] ?></td>
            <td><?= $row["Tinhtrang"] ?></td>
        </tr>
        <?php  }?>
    </table>
</body>
</html>
