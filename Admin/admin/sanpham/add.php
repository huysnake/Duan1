<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .container {
            width: 100%;
            padding: 20px 70px;
            display: grid;
            grid-template-columns: 200px 1fr;
            grid-gap: 20px;
        }

        .box-left {
            height: 740px;
            border: 1px solid #cdcd;
            background-color: #063970;
        }

        .information {
            text-align: center;
            border-bottom: 1px solid #cdcd;
        }

        .information img {
            height: 60px;
            width: 60px;
            margin-top: 10px;
            border-radius: 50%;
        }

        .information h5 {
            font-size: 15px;
            margin-top: 10px;
            font-weight: bold;
            color: azure;
        }

        .information p {
            font-size: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            font-weight: bold;
            color: azure;
        }

        .list {
            margin-top: 10px;
        }

        .list ul li {
            list-style: none;
            padding: 10px 10px;
        }

        .list ul li:hover {
            background-color: #abdbe3;
        }

        .list ul li a {
            display: inline-flex;
            text-decoration: none;
            color: aliceblue;
        }

        .list ul li a i {
            font-size: 20px;
            margin-right: 10px;
        }

        .list ul li a p {
            font-size: 20px;
        }

        .list ul li:hover p {
            color: black;
        }

        .list ul li:hover a {
            color: black;
        }

        .title {
            width: 100%;
            height: 50px;
            background-color: #cdcd;
            padding: 15px 20px;
        }

        .title h4 {
            font-size: 20px;
            font-weight: bold;
        }

        .form {
            margin-top: 40px;
            margin-left: 20px;
        }

        .row {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 30px;
            margin-bottom: 30px;

        }

        .form-group label {
            font-size: 15px;
            font-weight: bold;
        }

        .form-group {
            display: grid;
            grid-template-rows: 1fr 1fr;
        }

        .form-group input {
            padding: 5px 0px 5px 20px;
            border-radius: 10px;
            height: 40px;
            background-color: #EEEEEE;
            border: none;
        }

        .select {
            padding: 5px 0px 5px 20px;
            border-radius: 10px;
            height: 40px;
            background-color: #EEEEEE;
            border: none;
        }

        .act-sp a {
            padding: 10px 10px;
            border-radius: 10px;
            text-decoration: none;
            background-color: #FFCCCC;
            margin-right: 20px;
        }

        .act-sp button {
            padding: 10px 10px;
            border-radius: 10px;
            text-decoration: none;
            background-color: #66FF99;
            margin-right: 20px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box-left">
            <div class="information">
                <img src="../img/25.jpg" alt="">
                <h5>Trần Ngọc Đông</h5>
                <p>Chào mừng trở lại</p>
            </div>
            <div class="list">
            <ul>
                    <li><a href="index.php?act=dashboard"><i class="fas fa-palette"></i>
                            <p>Bảng điều khiển</p>
                        </a></li>
                    <li><a href="index.php?act=listdm"><i class="fas fa-list"></i>
                            <p>Danh mục</p>
                        </a></li>
                    <li><a href="index.php?act=listsp"><i class="fas fa-wallet"></i>
                            <p>Sản phẩm</p>
                        </a></li>
                    <li><a href="index.php?act=listtk"><i class="fas fa-users"></i>
                            <p>Khách hàng</p>
                        </a></li>
                    <li><a href=""><i class="fas fa-comment"></i>
                            <p>Bình luận</p>
                        </a></li>
                    <li><a href="index.php?act=donghang"><i class="fas fa-file-invoice-dollar"></i>
                            <p>Đơn hàng</p>
                        </a></li>
                    <li><a href="index.php?act=thongke"><i class="fas fa-flag-checkered"></i>
                            <p>Thống kê</p>
                        </a></li>
                        <li><a href="../index.php"><i class="fas fa-sign-out-alt"></i>
                            <p>Trang chủ</p>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="box-right">
            <div class="title">
                <h4>Thêm mới sản phẩm</h4>
            </div>
            <form action="" class="form" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="ten_sp" id="">
                        <p style="color:red"> <?php
                                                if (isset($check_name) && ($check_name != '')) echo $check_name;
                                                ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Số lượng</label>
                        <input type="text" name="soluong" id="">
                        <p style="color:red"> <?php
                                                if (isset($check_soluong) && ($check_soluong != '')) echo $check_soluong;
                                                ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Đơn giá</label>
                        <input type="text" name="price" id="">
                        <p style="color:red"> <?php
                                                if (isset($check_price) && ($check_price != '')) echo $check_price;
                                                ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="">Hình ảnh</label>
                        <input type="file" name="file" id="" style="padding-top: 10px;padding-left: 10px;">
                        <p style="color:red"> <?php
                                                if (isset($file) && ($file != '')) echo $file;
                                                ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục sản phẩm</label>
                        <select name="iddm" id="" class="select">
                            <?php
                            foreach ($listdm as $dm) {
                                extract($dm);
                            ?>
                                <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Luợt xem</label>
                        <input type="text" name="luotxem" id="">
                        <p style="color:red"> <?php
                                                if (isset($check_luotxem) && ($check_luotxem != '')) echo $check_luotxem;
                                                ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="">Màu sắc</label>
                        <select name="color" id="" class="select">
                            <option value="">Màu sắc</option>
                            <option value="Đen">Đen</option>
                            <option value="Xám">xám</option>
                            <option value="Xanh nhạt">Xanh nhạt</option>
                        </select>
                        <p style="color:red"> <?php
                                                if (isset($check_color) && ($check_color != '')) echo $check_color;
                                                ?></p>
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả</label>
                        <input type="text" name="mota" id="">
                        <p style="color:red"> <?php
                                                if (isset($check_mota) && ($check_mota != '')) echo $check_mota;
                                                ?></p>
                    </div>
                </div>
                <div class="act-sp">
                    <button name="btn_submit">Lưu lại</button> <a href="">Hủy bỏ</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>