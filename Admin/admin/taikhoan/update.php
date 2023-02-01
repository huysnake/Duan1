<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí thành viên</title>
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
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
            gap: 50px;
            margin-top: 20px;
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

        .text {
            padding: 30px 0px;
        }

        .alo {
            width: 820px;
            height: 900px;
            margin-left: 280px;
            background-color: #F3F5F7;
        }

        .alo .anhchi input[type="radio"] {
            margin: 30px 5px 30px 40px;
        }

        .alo .email,
        .alo .dangnhap,
        .alo .matkhau,
        /* .alo .nhaplaimatkhau, */
        .alo .hoten,
        .alo .sdt,
        /* .alo .ngaysinh, */
        .alo .diachi,
        .alo .tick .alo .hinhanh {
            margin-left: 70px;
            margin-bottom: 30px;


        }


        .alo .email input[type="email"],
        .alo .dangnhap input[type="text"],
        .alo .matkhau input[type="password"],
        /* .alo .nhaplaimatkhau input[type="password"], */
        .alo .hoten input[type="text"],
        .alo .dangnhap input[type="password"],
        .alo .sdt input[type="number"] {
            width: 75%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px gainsboro solid;

        }

        /* .alo .ngaysinh select {
            width: 24%;
            border-radius: 5px;
            border: 1px gainsboro solid;
            padding: 10px;
            margin-top: 10px;
            margin-right: 7px;
        } */

        .alo .diachi textarea {
            border-radius: 5px;
            border: 1px gainsboro solid;
            margin-top: 10px;

        }

        .alo .submit input[type="submit"] {
            border: 1px gainsboro solid;
            padding: 15px 40px;
            border-radius: 5px;
            cursor: pointer;
            background-color: rgb(165, 121, 199);
            margin-left: 290px;
            color: white;
            font-weight: bold;
            font-size: 17px;
            margin-top: 20px;
        }

        .button1 {
            margin-top: 70px;
            margin-left: 100px;
            padding: 15px 40px;
            border-radius: 5px;
            cursor: pointer;
            background: rgb(216, 60, 3);
            border-color: rgb(216, 60, 3);
        }

        .button1 a {
            text-decoration: none;
            color: white;
            font-size: 15px;
        }

        .button1 i {
            padding-right: 25px;
            font-size: 15px;
        }


        .button2 {
            float: right;
            margin-top: 70px;
            margin-right: 180px;
            padding: 15px 40px;
            border-radius: 5px;
            cursor: pointer;
            background: rgb(34, 34, 227);
            border-color: rgb(34, 34, 227);

        }

        .button2 a {
            text-decoration: none;
            color: white;
            font-size: 15px;
        }

        .button2 i {
            padding-right: 25px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
          extract($tk)
        ?>
        <div class="alo">
            <form action="index.php?act=update" method="post" enctype="multipart/form-data">
                <br>
                <div class="email">
                    Email <span style="color:red">(*)</span> <br>
                    <input type="email" name="email" placeholder="Nhập email" value="<?php echo $tk['email'] ?>">
                </div>

                <div class="dangnhap">
                    Tên đăng nhập <span style="color:red">(*)</span> <br>
                    <input type="text" name="user" placeholder="Nhập tên đăng nhập" value="<?php echo $tk['user'] ?>">
                </div>
                <div class="matkhau">
                    Mật khẩu <span style="color:red">(*)</span> <br>
                    <input type="password" name="pass" placeholder="Nhập mật khẩu" value="<?php echo $tk['pass'] ?>">
                </div>
                <div class="sdt">
                    Số điện thoại <span style="color:red">(*)</span> <br>
                    <input type="number" name="tel" placeholder="Nhập SĐT" value="<?php echo $tk['tel'] ?>">
                </div>
                <div class="diachi">
                    Địa chỉ<span style="color:red">(*)</span> <br>
                    <input  id="" name="diachi" cols="85" rows="6"  value="<?php echo $tk['diachi'] ?>"></input>
                </div>
                <div class="hinhanh" style="margin-left: 70px;">
                    Hình ảnh<span style="color:red">(*)</span> <br>
                    <input type="file" name="file" id="">
                </div>
                <input type="hidden" name="idtk" value="<?php echo $tk['idtk'] ?>">
                <div class="submit">
                    <label>
                        <input type="submit" name="update" value="Update">
                    </label>
                </div>




            </form>



        </div>

    </div>
</body>

</html>