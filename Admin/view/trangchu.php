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
            cursor: pointer;
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
            /* V??? tr?? tuy???t ?????i */
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

        .img_tk {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            margin-right: 10px;
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
                    <input type="text" name="kyw" id="" class="search_sp" placeholder="T??m ki???m s???n ph???m.....">
                    <button name="btn_search_sp" class="btn_search_sp"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="cart">
                <a href="index.php?act=addtocart" style="margin-top: -1px;"><i class="fas fa-shopping-cart"></i> Gi??? h??ng</a>
            </div>
            <div class="cart">
                <a href="index.php?act=mybill" style="margin-top: -1px;"><i class="fas fa-shopping-cart"></i> ????n h??ng</a>
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
                    <i class="fas fa-user-circle"></i><a href="index.php?act=dangky">????ng k??</a>
                    <p>||</p> <a style="margin-left: 5px;" href="index.php?act=dangnhap">????ng nh???p</a>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="listmenu">
            <div class="title">
                <div class="list"><i class="fas fa-bars"></i>
                    <p>DANH M???C S???N PH???M</p>
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
                <p>100% ch??nh h??ng</p>
            </div>
            <div class="advertisement">
                <i class="fas fa-funnel-dollar"></i>
                <p>Gi?? ??u ????i nh???t</p>
            </div>
            <div class="advertisement">
                <i class="fas fa-car-side"></i>
                <p>Mi???n ph?? v???n chuy???n</p>
            </div>
            <div class="advertisement">
                <i class="fas fa-thumbs-up"></i>
                <p>B???o h??nh n??i s??? d???ng</p>
            </div>
        </div>
        <div class="banner">
            <img src="img/1.jpg" alt="" class="img_banner">
        </div>
        <div class="sort">
            <h3>Hi???n th??? s???n ph???m theo</h3>
            <form action="" method="POST">
                <select name="tt" id="" class="listsort">
                    <option value="4">M???i nh???t</option>
                    <option value="1">Gi?? t??ng d???n</option>
                    <option value="2">Gi?? gi???m d???n</option>
                    <option value="3">Lu???t xem</option>
                </select>
                <button name="btn_summit" class="btn_summit">Hi???n th???</button>
            </form>
        </div>
        <?php
        foreach ($listsphome as $sp) {
            extract($sp);
            $img = "upload/" . $sp['img'];
        ?>
            <div class="product">
                <a href="index.php?act=spchitiet&idsp=<?= $id ?>"> <img src="<?php echo $img ?>" alt=""></a>
                <p class="title-name"><?php echo $sp['name'] ?></p>
                <div class="price">
                    <p>Gi?? ni??m y???t :</p><strong><?php echo $sp['price'] ?> vn??</strong>
                </div>
                <div class="price-real">
                    <p>Gi?? b??n :</p><strong><?php echo $sp['price'] ?> vn??</strong>
                </div>
                <div class="status-product">
                    <i class="fas fa-check-circle"></i>
                    <p><?php echo $sp['trangthai'] ?></p>
                </div>
                <div class="addcart">
                    <form action="index.php?act=addtocart" method="POST">
                        <input type="hidden" value="<?php echo $sp['id'] ?>" name="id">
                        <input type="hidden" value="<?php echo $sp['name'] ?>" name="name">
                        <input type="hidden" value="<?php echo $sp['img'] ?>" name="img">
                        <input type="hidden" value="<?php echo $sp['price'] ?>" name="price">
                        <input type="submit" value="Add to cart" class="submit" name="addtocart">
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
        <div class="list-page">
            <div class="item" style="background: rgb(49, 49, 206);">
                <a href="">1</a>
            </div>
            <div class="item">
                <a href="">2</a>
            </div>
            <div class="item">
                <a href="">3</a>
            </div>
            <div class="item">
                <a href="">4</a>
            </div>
        </div>
    </div>
    <hr>
    <footer class="footer">
        <div class="information">
            <h4>Th??ng tin c??ng ty</h4>
            <ul>
                <li><a href="">Gi???i thi???u c??ng ty </a></li>
                <li><a href="">Th??ng tin li??n h??? </a></li>
                <li><a href="">Th??ng tin tuy???n d???ng </a></li>
                <li><a href="">??i???u kho???n giao d???ch </a></li>
            </ul>
        </div>
        <div class="information">
            <h4>Quy ?????nh v?? ch??nh s??ch</h4>
            <ul>
                <li><a href="">Ch??nh s??ch kinh doanh </a></li>
                <li><a href="">Ch??nh s??ch mua h??ng</a></li>
                <li><a href="">Ch??nh s??ch b???o h??ng </a></li>
                <li><a href="">Ch??nh s??ch ?????i tr??? h??ng</a></li>
                <li><a href="">Ch??nh s??ch ki???m h??ng</a></li>
            </ul>
        </div>

        <div class="information">
            <h4>Mua h??ng online</h4>
            <ul>
                <li><a href="">L???i ??ch mua h??ng online </a></li>
                <li><a href="">Th??ng tin chuy???n kho???n</a></li>
                <li><a href="">H?????ng d???n mua h??ng </a></li>
                <li><a href="">C??u h???i th?????ng g???p</a></li>
            </ul>
        </div>
        <div class="information">
            <h4>M???i th???c m???c li??n h???</h4>
            <ul>
                <li><a href="">?????a ch??? : <strong>Tr?????ng Cao ?????ng FPT</strong> </a></li>
                <li><a href="">S??T: <strong> 0332601248 </strong></a></li>
                <li><a href="">Email: <strong>Nh??m 2 - D??? ??n 1@fpt.edu.vn </strong></a></li>
                <li><a href="">Gi??? m??? c???a t??? 8h ?????n 22h </a></li>
            </ul>
        </div>

    </footer>
    <hr>
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