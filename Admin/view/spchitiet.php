<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .hidden {
            display: none;
        }

        .container {
            width: 100%;
            padding: 20px 70px;
        }

        .header {
            display: flex;
            gap: 30px;
            margin-top: 20px;
        }
        .search{
            display: flex;
        }
        .search_sp {
            width: 350px;
            height: 40px;
            border: 1px solid rgb(212, 8, 8);
        }
        .btn_search_sp i {
            color: aliceblue;
        }

        .btn_search_sp {
            background-color: brown;
            border-color: brown;
            border-radius: 3px;
        }

        .cart {
            width: 120px;
            height: 40px;
            border-radius: 5px;
            background-color: brown;
            display: flex;
            padding: 10px;
            color: aliceblue;
        }

        .cart i {
            color: aliceblue;
        }

        .cart a {
            text-decoration: none;
            color: aliceblue;
        }

        .login_register {
            display: flex;
            padding-top: 10px;
        }

        .login_register i {
            font-size: 25px;
            margin-right: 5px;
        }

        .login_register a {
            text-decoration: none;
            padding-top: 5px;
            margin-right: 5px;
        }

        .login_register p {
            padding-top: 5px;
        }

        .listmenu {
            width: 100%;
            height: 50px;
            background-color: rgb(35, 6, 182);
            margin-top: 20px;
            display: flex;
            gap: 30px;
            padding-top: 15px;
        }

        .list {
            margin-left: 20px;
            color: white;
            display: flex;
        }

        .list p {
            margin-left: 20px;
        }

        .title {
            position: relative;
            margin-right: 50px;
        }

        .title:hover .ul {
            display: block;
        }

        .ul {
            margin-top: 17px;
            display: none;
            background-color: aliceblue;
        }

        .ul li {
            display: block;
            padding: 10px 10px;
            border: 1px solid #cdcd;
        }

        .ul li a {
            text-decoration: none;
            color: rgb(41, 41, 167);
        }

        .ul li i {
            margin-right: 10px;
            font-size: 20px;
        }

        .advertisement {
            display: flex;
            color: rgb(218, 218, 9);
            margin-left: 20px;
        }

        .advertisement i {
            font-size: 20px;
            margin-right: 10px;
        }

        .advertisement p {
            font-weight: bold;
            font-size: 17px;
        }

        .banner {
            margin-top: 20px;
        }

        .banner img {
            width: 100%;
        }

        .sort {
            margin-top: 20px;
            display: flex;
        }

        .sort h3 {
            margin-right: 10px;
        }

        .listsort {
            padding: 5px 20px 5px 5px;
        }

        .product {
            margin-top: 20px;
            width: 24%;
            height: 400px;
            border: 1px solid #cdcd;
            overflow: hidden;
            float: left;
            margin-right: 10px;
        }

        .product img {
            margin-left: 20%;
        }

        .title-name {
            margin: 10px 30px;
        }

        .addcart {
            border-radius: 10px;
            width: 120px;
            height: 40px;
            background-color: rgb(225, 28, 28);
            margin-left: 100px;
            display: flex;
            padding: 10px 10px;
            transform: translateY(100px);
        }

        .addcart a {
            color: wheat;
            text-decoration: none;
        }

        .product:hover .addcart {
            transform: translateY(-270px);
            transition: 1.5s;
        }

        .list-page {
            display: flex;
            list-style: none;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin-top: 200px;
            padding-top: 20px;
        }

        .list-page .item {
            margin: 0px 15px;
            width: 37px;
            height: 37px;
            background: #cdcdcd;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list-page .item a {
            color: #fff;
            text-decoration: none;
        }

        .item:hover {
            background: rgb(49, 49, 206);
        }

        .footer {
            margin-top: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-gap: 40px;
        }

        .information h4 {
            color: rgb(212, 8, 8);
        }

        .information ul {
            margin-top: 10px;
        }

        .information ul li {
            display: block;
            padding: 10px 10px;
        }

        .information ul li a {
            text-decoration: none;
            color: rgb(20, 19, 19);
        }

        .information ul li a:hover {
            color: blue;
        }

        .internet {
            position: fixed;
            /* Vị trí tuyệt đối */
            top: 50%;
            right: 0;
        }

        .ul-internet li {
            list-style: none;
            margin-top: 10px;
        }

        .line1 {
            margin-top: 25px;
            margin-left: 30px;
            padding: 15px 160px;
            border-radius: 1px;
            cursor: pointer;
            background: rgb(216, 60, 3);
            border-color: rgb(216, 60, 3);
        }

        .line1 a {
            text-decoration: none;
            color: aliceblue;
        }

        .line1 a:hover {
            color: aliceblue;
        }

        .table-price td {
            margin-left: 10px;
        }

        .mid {
            margin-top: 20px;
            margin-left: 30px;
            font-size: small;
        }

        .td-price1 {
            color: black;

        }

        .td-price2 {
            color: rgb(212, 8, 8);
        }

        .td-price3 {
            color: brown;
        }

        .line2 {
            margin-top: 20px;
        }

        .button-giohang a {
            text-decoration: none;
            color: white;
        }

        .button-giohang {
            color: aliceblue;
            margin-left: 30px;
            float: left;
            padding: 15px 40px;
            border-radius: 1px;
            cursor: pointer;
            background: rgb(34, 34, 227);
            border-color: rgb(34, 34, 227);

        }

        .button-tragop a {
            text-decoration: none;
            color: white;
        }

        .button-tragop {
            color: aliceblue;
            margin-right: 150px;
            float: right;
            padding: 15px 40px;
            border-radius: 1px;
            cursor: pointer;
            background: rgb(34, 34, 227);
            border-color: rgb(34, 34, 227);
        }

        .hidden {
            display: none;
        }

        .container {
            width: 100%;
            padding: 20px 70px;
        }

        .header {
            display: flex;
            gap: 30px;
        }

        .search_sp {
            width: 350px;
            height: 40px;
            border: 1px solid rgb(212, 8, 8);
        }

        .btn_search_sp i {
            color: aliceblue;
        }

        .btn_search_sp {
            padding: 10px 10px;
            background-color: brown;
            border-color: brown;
            border-radius: 3px;
        }

        .login_register {
            margin-left: 90px;
            display: flex;
            padding-top: 5px;
            align-items: baseline;
        }

        .login_register i {
            font-size: 15px;
            margin-right: 10px;
        }

        .login_register a {
            text-decoration: none;
            padding-top: 5px;
            margin-right: 5px;
        }

        .login_register p {
            padding-top: 5px;
        }

        .listmenu {
            width: 100%;
            height: 50px;
            background-color: rgb(35, 6, 182);
            margin-top: 20px;
            display: flex;
            gap: 30px;
            padding-top: 15px;
        }

        .list {
            margin-left: 20px;
            color: white;
            display: flex;
        }

        .list p {
            margin-left: 20px;
        }

        .title {
            position: relative;
            margin-right: 50px;
        }
        
        .title:hover .ul {
            display: block;
        }

        .ul {
            display: none;
            padding: 0px;
            background-color: aliceblue;
        }

        .ul li {
            display: block;
            padding: 7px 29px;
            border: 1px solid #cdcd;
        }

        .ul li a {
            margin-left: 5px;
            text-decoration: none;
            color: rgb(41, 41, 167);
        }

        .ul li i {
            margin-right: 20px;
            font-size: 20px;
        }

        .advertisement {
            display: flex;
            color: rgb(218, 218, 9);
            margin-left: 20px;
            align-items: baseline;
        }

        .advertisement i {
            font-size: 20px;
            margin-right: 15px;
        }

        .advertisement p {
            font-weight: bold;
            font-size: 17px;
        }

        .banner {
            margin-top: 20px;
        }

        .banner img {
            width: 100%;
        }

        .sort {
            margin-top: 20px;
            display: flex;
        }

        .sort h3 {
            margin-right: 10px;
        }

        .listsort {
            padding: 5px 20px 5px 5px;
        }

        .product {
            margin-top: 20px;
            width: 24%;
            height: 400px;
            border: 1px solid #cdcd;
            overflow: hidden;
            float: left;
            margin-right: 10px;
        }

        .product img {
            margin-left: 20%;
        }

        .title-name {
            margin: 10px 30px;
        }

        .status-product {
            margin-top: 30px;
            display: flex;
            margin-left: 100px;
            color: rgb(39, 189, 39);
        }

        .status-product p {
            margin-left: 10px;
        }

        .col-img {
            text-align: center;
        }

        .col-img img {
            width: 40%;

        }

        .col-info ul h5 {
            margin-top: 40px;

        }
    </style>
</head>
<div class="container">
    <div class="header">
        <div class="logo">
            <a href="index.php?act=trangchu"><img src="img/logo_header_logo_logo.png" alt=""></a>
        </div>
        <div class="search">
            <form action="" method="POST">
                <input type="text" name="kyw" id="" class="search_sp" placeholder="Tìm kiếm sản phẩm.....">
                <button name="btn_search_sp" class="btn_search_sp"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="cart">
            <a href="index.php?act=addtocart"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
        </div>
        <div class="cart">
            <a href="index.php?act=mybill"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="login_register">
                <img src="<?php echo 'upload/' . $_SESSION['user']['img'] ?>" alt="" class="img_tk" width="50px">
                <p style="margin-top: 5px;">Helo <strong><?php echo $_SESSION['user']['user'] ?></strong></p>
                <?php
                if ($_SESSION['user']['role'] == 1) {
                    echo ' <a href="admin/index.php"> <input style="margin: 0 10px;padding: 5px 0px;" type="submit" value="login admin"></a>';
                }
                ?>
                <a href="index.php?act=thoat" style="margin-left: 10px;"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        <?php
        } else {
        ?>
            <div class="login_register">
                <i class="fas fa-user-circle"></i><a href="index.php?act=dangky">Đăng ký</a>
                <p>||</p> <a style="margin-left: 5px;" href="index.php?act=dangnhap">Đăng nhập</a>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="listmenu">
        <div class="title">
            <div class="list"><i class="fas fa-bars"></i>
                <p>DANH MỤC SẢN PHẨM</p>
            </div>
        </div>
        <div class="advertisement">
            <i class="fas fa-check-circle"></i>
            <p>100% chính hãng</p>
        </div>
        <div class="advertisement">
            <i class="fas fa-funnel-dollar"></i>
            <p>Giá ưu đãi nhất</p>
        </div>
        <div class="advertisement">
            <i class="fas fa-car-side"></i>
            <p>Miễn phí vận chuyển</p>
        </div>
        <div class="advertisement">
            <i class="fas fa-thumbs-up"></i>
            <p>Bảo hành nơi sử dụng</p>
        </div>
    </div>
    <div class="banner">
        <img onclick="next()" src="img/1.jpg" alt="" class="img_banner">
    </div>

    <?php
    extract($spchitiet);
    ?>
    <div class="main">
        <div class="namesp">
            <h3><b><?php echo $spchitiet['name']; ?></b></h3>

        </div>
        <?php
        $img = "upload/" . $spchitiet['img'];
        ?>
        <div class="row">
            <div class="col">
                <div class="col-img">
                    <img src="<?php echo $img ?>" alt="">
                </div>
                <div class="col-info">
                    <ul>
                        <h5>Mô tả sản phẩm : </h5>
                        <li><?php echo $spchitiet['mota']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="col text">
                <div class="price">
                    <table class="table-price" width="400px" height="150px" bgcolor="#F0F0F0">
                        <tr>
                            <td>Giá niêm yết:</td>
                            <td class="td-price1">
                                <h3><?php echo $spchitiet['price']; ?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá bán:</td>
                            <td class="td-price2">
                                <h3><?php echo $spchitiet['price']; ?></h3>
                            </td>
                        </tr>
                        <tr>
                            <td>Giá VNPay:</td>
                            <td class="td-price3">
                                <h3><?php echo $spchitiet['price']; ?></h3>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="mid">
                    <p>Lượt truy cập : <?php echo $spchitiet['luotxem']; ?></p>
                    <p>Trạng thái : <?php echo $spchitiet['trangthai']; ?></p>
                    <p>Giao hàng tận nơi miễn phí theo chính sách vận chuyển <a href="">Xem chi tiết</a></p>
                </div>
                <div class="button">
                    <button class="line1">
                        <a href=""> <span><b>Mua ngay</b></span></a>
                        <span></span>
                    </button>
                    <div class="line2">
                        <button class="button-giohang"> <a href="index.php?act=addtocart">Cho vào giỏ</a> </button>
                        <button class="button-tragop"> <a href="">Mua trả góp</a> </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#binhluan").load("view/binhluan/binhluan.php", {
                idpro: <?= $id ?>
            });
        });
    </script>
    <div class="row" id="binhluan">

    </div>
</div>


</html>