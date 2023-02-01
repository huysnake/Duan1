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
            height: 790px;
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

        .table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 100%;
        }

        .table tr th {
            border: 1px solid #cdcd;
            padding: 10px 13px;
        }

        .table thead tr th {
            font-size: 13px;
        }

        .table thead {
            background-color: #cdcdcd;
        }

        .img_sp {
            width: 50px;
            height: 50px;
        }

        .table tbody tr th a {
            padding-left: 10px;
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

        .act {
            margin-top: 20px;
            display: flex;
        }

        .kyw {
            width: 200px;
            height: 30px;
            border-radius: 10px;
            padding: 5px 5px;
        }

        .kyw_cate {
            height: 30px;
            padding: 5px 5px;
            margin-left: 15px;
            border-radius: 5px;
        }

        .btn_kyw {
            height: 30px;
            height: 30px;
            padding: 5px 5px;
            margin-left: 10px;
            border-radius: 5px;
        }

        .new-product {
            margin-left: 550px;
            text-decoration: none;
            padding: 10px 10px;
            background-color: aquamarine;
            border-radius: 10px;
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
                <h4>Danh sách đơn hàng</h4>
            </div>
            <div class="act">
                <form action="" method="POST">
                    <input type="text" name="kyw" id="" class="kyw" placeholder="Tìm kiếm theo tên mã đơn hàng...">
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã đơn hàng</th>
                        <th>Tên người đặt</th>
                        <th>Địa chỉ nhận hàng</th>
                        <th>Ngày đặt hàng</th>
                        <th>Số điện thoại</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng đơn hàng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $ctdh = 'index.php?act=ctdh&iddh=' . $bill['id'];
                        $tt = get_ttdh($bill['bill_status']);
                        $huy = 'index.php?act=huydh&iddh=' . $bill['id'];
                    ?>

                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th><?php echo  $bill['id'] ?></th>
                            <th><?php echo $bill['bill_name'] ?></th>
                            <th><?php echo $bill['bill_address'] ?></th>
                            <th><?php echo $bill['bill_ngaydathang'] ?></th>
                            <th><?php echo $bill['bill_tel'] ?></th>
                            <th><?php echo $bill['total'] ?></th>
                            <th><?php echo $tt ?></th>
                            <th>
                                <a href="<?php echo $ctdh ?>"><input type="submit" value="xem chi tiết" name="ctdh"></a>
                                <?php
                                if ($bill['bill_status'] != 2 && $bill['bill_status'] != 3 && $bill['bill_status'] != 4) {
                                ?>
                                    <a href="<?php echo $huy ?>">Huỷ đơn</a>
                                <?php
                                }
                                ?>
                            </th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>