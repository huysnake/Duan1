<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website N2_Mobiphone</title>
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
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
        }

        .cart {
            width: 120px;
            height: 40px;
            border-radius: 5px;
            background-color: brown;
            margin-left: 50px;
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
            height: 200px;
        }

        .title-name {
            margin: 10px 30px;
        }

        .price {
            display: grid;
            margin-top: 20px;
            grid-template-columns: 1fr 1fr;
            margin-left: 30px;
        }

        .price strong {
            color: black;
        }

        .price-real {
            display: grid;
            margin-top: 20px;
            grid-template-columns: 1fr 1fr;
            margin-left: 30px;
        }

        .price-real p {
            color: rgb(225, 28, 28);
        }

        .price-real strong {
            color: rgb(212, 8, 8);
            font-weight: bold;
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

        .addcart {
            border-radius: 10px;
            width: 120px;
            height: 40px;
            background-color: rgb(225, 28, 28);
            margin-left: 100px;
            padding: 10px 10px;
            transform: translateY(100px);
        }

        .submit {
            color: wheat;
            text-decoration: none;
            background-color: rgb(225, 28, 28);
            border: none;
            margin-left: 15px;
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
            margin-left: 80px;
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

        .btn_summit {
            margin-left: 20px;
            padding:
                5px 5px;
        }

        .mb {
            display: flex;
            grid-gap: 50px;
        }

        .img_tk {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            margin-right: 10px;
        }

        .box_content {
            margin-left: 20%;
        }

        .box_content li {
            padding: 25px 0px;
        }

        .row_hang {
            display: flex;
            margin-top: 30px;
            margin-left: 80px;
        }

        .row_hang img {
            width: 60px;
            height: 60px;
        }

        .tt_hang {
            margin-left: 20px;
        }

        .number {
            display: flex;
        }
    </style>
</head>

<body>
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
                <a href="index.php?act=addtocart" style="margin-top: -1px;"><i class="fas fa-shopping-cart"></i> Giỏ hàng</a>
            </div>
            <div class="cart">
                <a href="index.php?act=mybill" style="margin-top: -1px;"><i class="fas fa-shopping-cart"></i> Đơn hàng</a>
            </div>
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
                <div class="login_register">
                    <img src="<?php echo 'upload/' . $_SESSION['user']['img'] ?>" alt="" class="img_tk">
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
                <ul class="ul">
                    <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        $listdm = "index.php?act=sanphamdm&iddm=" . $id
                    ?>
                        <li><a href="<?php echo $listdm ?>"><i class="fas fa-mobile-alt"></i><?php echo $dm['name'] ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
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
            <img src="img/1.jpg" alt="" class="img_banner">
        </div>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="box_title" style="text-align: center; margin-bottom: 30px;margin-top: 30px;">
            <h1>Cảm ơn bạn đã đặt hàng</h1>
        </div>
        <div class="mb">
            <div class="box_content">
                <h3>Thông tin đơn hàng</h3>
                <li>Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                <li>Ngày đặt hàng : <?= $bill['bill_ngaydathang']; ?></li>
                <li>Tổng đơn hàng :<?= $bill['total']; ?></li>
                <li>Phương thức thanh toán :<?= pttt($bill['bill_pttt']); ?></li>
            </div>
            <div class="box_content">
                <h3>Thông tin đơn hàng</h3>
                <?php
                bill_chi_tiet($billct);
                ?>
            </div>
        </div>
        <div class="trangchu">
            <a href="index.php"><input type="submit" value="Trở về trang chủ"></a>
        </div>
        <footer class="footer">
            <div class="information">
                <h4>Thông tin công ty</h4>
                <ul>
                    <li><a href="">Giới thiệu công ty </a></li>
                    <li><a href="">Thông tin liên hệ </a></li>
                    <li><a href="">Thông tin tuyển dụng </a></li>
                    <li><a href="">Điều khoản giao dịch </a></li>
                </ul>
            </div>
            <div class="information">
                <h4>Quy định và chính sách</h4>
                <ul>
                    <li><a href="">Chính sách kinh doanh </a></li>
                    <li><a href="">Chính sách mua hàng</a></li>
                    <li><a href="">Chính sách bảo hàng </a></li>
                    <li><a href="">Chính sách đổi trả hàng</a></li>
                    <li><a href="">Chính sách kiểm hàng</a></li>
                </ul>
            </div>

            <div class="information">
                <h4>Mua hàng online</h4>
                <ul>
                    <li><a href="">Lợi ích mua hàng online </a></li>
                    <li><a href="">Thông tin chuyển khoản</a></li>
                    <li><a href="">Hướng dẫn mua hàng </a></li>
                    <li><a href="">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="information">
                <h4>Mọi thắc mắc liên hệ</h4>
                <ul>
                    <li><a href="">Địa chỉ : <strong>Trường Cao Đắng FPT</strong> </a></li>
                    <li><a href="">SĐT: <strong> 0332601248 </strong></a></li>
                    <li><a href="">Email: <strong>Nhóm 2 - Dự án 1@fpt.edu.vn </strong></a></li>
                    <li><a href="">Giờ mở cửa từ 8h đến 22h </a></li>
                </ul>
            </div>

        </footer>
        <div class="internet">
            <ul class="ul-internet">
                <li><a href=""><img src="img/facebook-chat.png" alt=""></a></li>
                <li><a href=""><img src="img/zalo1.png" alt=""></a></li>
                <li><a href=""><img src="img/facebook-chat.png" alt=""></a></li>
                <li><a href=""><img src="img/zalo1.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</body>

</html>