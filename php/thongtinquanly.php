<?php
    if(file_exists("..\\text\\username.txt")){
    } else {
        header("Location: chrome://kill");
    }
    require("kiemtraketnoi.php");
    $myfile=fopen("..\\text\\username.txt","r");
    $datamyfile=fread($myfile, filesize("..\\text\\username.txt"));
    $sql = "SELECT * FROM `nhanvien` WHERE Tentaikhoan='$datamyfile';";
    $execute = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="..\\img\\logo.jpg">
    <title>Thông Tin Quản Lý</title>

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
            padding-left:15px;
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
        .info{
            width: 400px;
            margin-left: 100px;
            border: 3px solid black;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            background-color: rgb(0, 0, 0);
        }
        p{
            padding: 10px 0px;
            color:whitesmoke;
            font-size: 16px;
        }
        .ginfo{
            display: flex;
            border: 3px solid lightgray;
            padding: 20px 0px;
            border-radius: 20px;
            background-color: lightgray;
            margin-top: 1%;
            justify-content: space-between;
        }
        .img{
          margin-right: 100px;
        }
        .img img{
            margin-left:100px;
        }
       h2{
        text-align: center;
        margin-top: 10px;

       }
       .button{
            width: 11%;
            margin : 0px auto;
            padding-top: 7px;
            
       }
        
        .logout{
            margin-left: 50px;
            margin-bottom: 10px;
        }
        .logout input{
            background-color: lightgreen;
            color: white;
            font-weight: bold; 
            padding:10px ;
            border-radius: 5px;
            margin-left:5px;
       }
       .register input {
        background-color:rgba(255, 0, 0, 0.692);
        color: white;
        font-weight: bold;
        padding:10px;
        border-radius: 5px;
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
                    <a href="thongtinquanly.php"  id="dangnhap"><b>ĐĂNG NHẬP</b></a>
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
        <h2>Thông tin nhân viên</h2>
        <div class="ginfo">
            <div class="info">
                <div>
                   <p>Mã nhân Viên</p>
                    <p>Họ và tên</p>
                    <p>Ngày sinh</p>
                    <p>Giới tính</p>
                    <p>Quê quán</p>
                    <p>Bằng cấp</p>
                    <p>Loại bằng</p>
                    <p>Ngày vào làm</p>
                    <p>Ngày nhận chức</p>
                    <p>Nơi ở</p>
                    <p>Chứng minh nhân dân</p>
                    <p>Chức vụ</p>
                    <p>Tên tài khoản</p>
                    <p>Mật khẩu</p>
                    <p>Email</p>
                </div>
                <div>
                    <p id="manhanvien">Mã nhân Viên</p>
                    <p id="hovaten">Họ và tên</p>
                    <p id="ngaysinh">Ngày sinh</p>
                    <p id="gioitinh">Giới tính</p>
                    <p id="quequan">Quê quán</p>
                    <p id="bangcap">Bằng cấp</p>
                    <p id="loaibang">Loại bằng</p>
                    <p id="ngayvaolam">Ngày vào làm</p>
                    <p id="ngaynhanchuc">Ngày nhận chức</p>
                    <p id="noio">Nơi ở</p>
                    <p id="chungminhnhandan">Chứng minh nhân dân</p>
                    <p id="chucvu">Chức vụ</p>
                    <p id="tentaikhoan">Tên tài khoản</p>
                    <p id="matkhau">Mật khẩu</p>
                    <p id="email">Email</p>
                 </div>
                 <?php
                    while($row = mysqli_fetch_array($execute)) {
                        $Masonhanvien=$row["Masonhanvien"];
                        $Hovaten=$row["Hovaten"];
                        $Ngaysinh=$row["Ngaysinh"];
                        $Gioitinh=$row["Gioitinh"];
                        $Quequan=$row["Quequan"];
                        $Bangcap=$row["Bangcap"];
                        $Loaibang=$row["Loaibang"];
                        $Ngayvaolam=$row["Ngayvaolam"];
                        $Ngaynhanchuc=$row["Ngaynhanchuc"];
                        $Noio=$row["Noio"];
                        $Cancuoccongdan=$row["Cancuoccongdan"];
                        $Chucvu=$row["Chucvu"];
                        $Tentaikhoan=$row["Tentaikhoan"];
                        $Matkhau=$row["Matkhau"];
                        $Email=$row["Email"];
                ?>
                <script>
                    var MANV="<?php echo $Masonhanvien;?>";// lấy dữ liệu từ mã php
                    document.getElementById("manhanvien").innerHTML = `${MANV}`;
                    var TNV="<?php echo $Hovaten;?>";// lấy dữ liệu từ mã php
                    document.getElementById("hovaten").innerHTML = `${TNV}`;
                    var NSNV="<?php echo $Ngaysinh;?>";// lấy dữ liệu từ mã php
                    document.getElementById("ngaysinh").innerHTML = `${NSNV}`;
                    var GTNV="<?php echo $Gioitinh;?>";// lấy dữ liệu từ mã php
                    document.getElementById("gioitinh").innerHTML = `${GTNV}`;
                    var QQNV="<?php echo $Quequan;?>";// lấy dữ liệu từ mã php
                    document.getElementById("quequan").innerHTML = `${QQNV}`;
                    var BCNV="<?php echo $Bangcap;?>";// lấy dữ liệu từ mã php
                    document.getElementById("bangcap").innerHTML = `${BCNV}`;
                    var LBNV="<?php echo $Loaibang;?>";// lấy dữ liệu từ mã php
                    document.getElementById("loaibang").innerHTML = `${LBNV}`;
                    var NVLNV="<?php echo $Ngayvaolam;?>";// lấy dữ liệu từ mã php
                    document.getElementById("ngayvaolam").innerHTML = `${NVLNV}`;
                    var NNCNV="<?php echo $Ngaynhanchuc;?>";// lấy dữ liệu từ mã php
                    document.getElementById("ngaynhanchuc").innerHTML = `${NNCNV}`;
                    var NONV="<?php echo $Noio;?>";// lấy dữ liệu từ mã php
                    document.getElementById("noio").innerHTML = `${NONV}`;
                    var CCCDNV="<?php echo $Cancuoccongdan;?>";// lấy dữ liệu từ mã php
                    document.getElementById("chungminhnhandan").innerHTML = `${CCCDNV}`;
                    var CVNV="<?php echo $Chucvu;?>";// lấy dữ liệu từ mã php
                    document.getElementById("chucvu").innerHTML = `${CVNV}`;
                    var TTKNV="<?php echo $Tentaikhoan;?>";// lấy dữ liệu từ mã php
                    document.getElementById("tentaikhoan").innerHTML = `${TTKNV}`;
                    var MKNV="<?php echo $Matkhau;?>";// lấy dữ liệu từ mã php
                    document.getElementById("matkhau").innerHTML = `${MKNV}`;
                    var ENV="<?php echo $Email;?>";// lấy dữ liệu từ mã php
                    document.getElementById("email").innerHTML = `${ENV}`;
                </script>
            </div>
            <div class="img">
                    <img src='..\\avatar\\<?= $row["img"] ?>' alt="" width="615px" height="auto"></td>
            </div>
            <?php  }?>
        </div>
        <div class="button">
                <div class="logout">
                    <a href="dangxuat.php"><input type="button" value="Đăng xuất"></a>
                </div>
                <div class="register">
                    <a href="dangki.php"><input type="button" value="Đăng Kí tài khoản nhân viên"></a>
                </div>
            </div>
    </div>
</body>
</html>