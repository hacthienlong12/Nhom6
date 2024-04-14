
<?php
    require("kiemtraketnoi.php");
    $sql = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='1';";
    $sql_1 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='2';";
    $sql_2 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='3';";
    $sql_3 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='4';";    
    $sql_4 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='5';";
    $sql_5 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='6';";
    $sql_6 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='7';";
    $sql_7 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='8';";
    $sql_8 = "SELECT `Tenkhachhang`,`Sao`,`Danhgia` FROM `khachhang` WHERE STT='9';";
    $execute = mysqli_query($conn,$sql);
    $execute_1 = mysqli_query($conn,$sql_1);
    $execute_2 = mysqli_query($conn,$sql_2);
    $execute_3 = mysqli_query($conn,$sql_3);
    $execute_4 = mysqli_query($conn,$sql_4);
    $execute_5 = mysqli_query($conn,$sql_5);
    $execute_6 = mysqli_query($conn,$sql_6);
    $execute_7 = mysqli_query($conn,$sql_7);
    $execute_8 = mysqli_query($conn,$sql_8);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link REL="SHORTCUT ICON" HREF="..\\img\\logo.jpg">
    <title>Đánh giá</title>

    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family:Arial, Helvetica, sans-serif
        }
        body{
           background-color : white;
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
        .rate{
            width: 90%;
            margin-top: 40px;
            margin-left: 5%;
            background-color: lavender;
            border-radius: 20px;
            padding: 40px;
        }
        p{
            padding: 5px 20px;
        }
        .user{
            font-weight:bold;
        }
        .comment{
            border: 3px solid lightgray;
            border-radius: 10px;
            background-color: lightgray;
            margin-bottom: 10px;
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
        <div class="rate">
            <div class="comment">
                <p class="user" id="TKHang_1">Tên khách hàng</p>
                <p id="BLKHang_1">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_2">Tên khách hàng</p>
                <p id="BLKHang_2">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_3">Tên khách hàng</p>
                <p id="BLKHang_3">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_4">Tên khách hàng</p>
                <p id="BLKHang_4">Bình luận</p>
            </div>
            <div class="comment" >
                <p class="user" id="TKHang_5">Tên khách hàng</p>
                <p id="BLKHang_5">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_6">Tên khách hàng</p>
                <p id="BLKHang_6">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_7">Tên khách hàng</p>
                <p id="BLKHang_7">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_8">Tên khách hàng</p>
                <p id="BLKHang_8">Bình luận</p>
            </div>
            <div class="comment">
                <p class="user" id="TKHang_9">Tên khách hàng</p>
                <p id="BLKHang_9">Bình luận</p>
            </div>
        </div>
    </div>
    <?php
        while($row = mysqli_fetch_array($execute)) {
            $Tenkhachhang_1=$row["Tenkhachhang"];
            $Sao_1=$row["Sao"];
            $Danhgia_1=$row["Danhgia"];
    ?>
    <script>
        var TKH_1="<?php echo $Tenkhachhang_1;?>";
        document.getElementById("TKHang_1").innerHTML = `${TKH_1}`;
        var DGKH_1="<?php echo 'Đã đánh giá '.$Sao_1.' sao với bình luận {'.$Danhgia_1.'}.';?>";
        document.getElementById("BLKHang_1").innerHTML = `${DGKH_1}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_1)) {
            $Tenkhachhang_2=$row["Tenkhachhang"];
            $Sao_2=$row["Sao"];
            $Danhgia_2=$row["Danhgia"];
    ?>
    <script>
        var TKH_2="<?php echo $Tenkhachhang_2;?>";
        document.getElementById("TKHang_2").innerHTML = `${TKH_2}`;
        var DGKH_2="<?php echo 'Đã đánh giá '.$Sao_2.' sao với bình luận {'.$Danhgia_2.'}.';?>";
        document.getElementById("BLKHang_2").innerHTML = `${DGKH_2}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_2)) {
            $Tenkhachhang_3=$row["Tenkhachhang"];
            $Sao_3=$row["Sao"];
            $Danhgia_3=$row["Danhgia"];
    ?>
    <script>
        var TKH_3="<?php echo $Tenkhachhang_3;?>";
        document.getElementById("TKHang_3").innerHTML = `${TKH_3}`;
        var DGKH_3="<?php echo 'Đã đánh giá '.$Sao_3.' sao với bình luận {'.$Danhgia_3.'}.';?>";
        document.getElementById("BLKHang_3").innerHTML = `${DGKH_3}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_3)) {
            $Tenkhachhang_4=$row["Tenkhachhang"];
            $Sao_4=$row["Sao"];
            $Danhgia_4=$row["Danhgia"];
    ?>
    <script>
        var TKH_4="<?php echo $Tenkhachhang_4;?>";
        document.getElementById("TKHang_4").innerHTML = `${TKH_4}`;
        var DGKH_4="<?php echo 'Đã đánh giá '.$Sao_4.' sao với bình luận {'.$Danhgia_4.'}.';?>";
        document.getElementById("BLKHang_4").innerHTML = `${DGKH_4}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_4)) {
            $Tenkhachhang_5=$row["Tenkhachhang"];
            $Sao_5=$row["Sao"];
            $Danhgia_5=$row["Danhgia"];
    ?>
    <script>
        var TKH_5="<?php echo $Tenkhachhang_5;?>";
        document.getElementById("TKHang_5").innerHTML = `${TKH_5}`;
        var DGKH_5="<?php echo 'Đã đánh giá '.$Sao_5.' sao với bình luận {'.$Danhgia_5.'}.';?>";
        document.getElementById("BLKHang_5").innerHTML = `${DGKH_5}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_5)) {
            $Tenkhachhang_6=$row["Tenkhachhang"];
            $Sao_6=$row["Sao"];
            $Danhgia_6=$row["Danhgia"];
    ?>
    <script>
        var TKH_6="<?php echo $Tenkhachhang_6;?>";
        document.getElementById("TKHang_6").innerHTML = `${TKH_6}`;
        var DGKH_6="<?php echo 'Đã đánh giá '.$Sao_6.' sao với bình luận {'.$Danhgia_6.'}.';?>";
        document.getElementById("BLKHang_6").innerHTML = `${DGKH_6}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_6)) {
            $Tenkhachhang_7=$row["Tenkhachhang"];
            $Sao_7=$row["Sao"];
            $Danhgia_7=$row["Danhgia"];
    ?>
    <script>
        var TKH_7="<?php echo $Tenkhachhang_7;?>";
        document.getElementById("TKHang_7").innerHTML = `${TKH_7}`;
        var DGKH_7="<?php echo 'Đã đánh giá '.$Sao_7.' sao với bình luận {'.$Danhgia_7.'}.';?>";
        document.getElementById("BLKHang_7").innerHTML = `${DGKH_7}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_7)) {
            $Tenkhachhang_8=$row["Tenkhachhang"];
            $Sao_8=$row["Sao"];
            $Danhgia_8=$row["Danhgia"];
    ?>
    <script>
        var TKH_8="<?php echo $Tenkhachhang_8;?>";
        document.getElementById("TKHang_8").innerHTML = `${TKH_8}`;
        var DGKH_8="<?php echo 'Đã đánh giá '.$Sao_8.' sao với bình luận {'.$Danhgia_8.'}.';?>";
        document.getElementById("BLKHang_8").innerHTML = `${DGKH_8}`;
    </script>
    <?php  }?>
    <?php
        while($row = mysqli_fetch_array($execute_8)) {
            $Tenkhachhang_9=$row["Tenkhachhang"];
            $Sao_9=$row["Sao"];
            $Danhgia_9=$row["Danhgia"];
    ?>
    <script>
        var TKH_9="<?php echo $Tenkhachhang_9;?>";
        document.getElementById("TKHang_9").innerHTML = `${TKH_9}`;
        var DGKH_9="<?php echo 'Đã đánh giá '.$Sao_9.' sao với bình luận {'.$Danhgia_9.'}.';?>";
        document.getElementById("BLKHang_9").innerHTML = `${DGKH_9}`;
    </script>
    <?php  }?>
    </body>
</html>
