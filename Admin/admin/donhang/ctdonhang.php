<?php
 echo $bill['bill_status'];
?>
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

        .new-product {
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
                <h4>Danh sách danh mục</h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã đơn hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Ngày đặt</th>
                        <th>Phương thức thanh toán</th>
                        <th>Nơi nhận hàng</th>
                        <th>Số điện thoại nhận hàng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <th><?php echo $bill['id'] ?></th>
                        <th>
                            <ul style="list-style: none;">
                                <!-- <li>a ✔</li>
                                <li>b </li> -->
                                <?php
                                foreach ($list_cart_idbill as $cart) {
                                   extract($cart);
                                   ?>
                                     <li><?php echo $cart['name'] ?>   ✔<?php echo $cart['soluong'] ?></li>
                                   <?php
                                }
                                ?>
                            </ul>
                        </th>
                        <th><?php echo $bill['bill_ngaydathang'] ?></th>
                        <th><?php echo $bill['bill_pttt'] ?></th>
                        <th><?php echo $bill['bill_address'] ?></th>
                        <th><?php echo $bill['bill_tel'] ?></th>
                        <th><?php echo $bill['total'] ?></th>
                    </tr>
                </tbody>
            </table>
            <form action="index.php?act=capnhapdh" method="post">
                <select name="ttdh" id="" style="width: 100%;padding: 10px 10px;margin-top: 20px;margin-bottom: 20px;">
                    <option value="0">Đơn hàng mới</option>
                    <option value="1">Đang xử lí</option>
                    <option value="2">Đang giao hàng</option>
                    <option value="3">Đã giao xong</option>
                </select>
                <br>
                <a href="index.php?act=capnhapdh">
                    <input type="hidden" name="ttdh_old" value="<?php echo $bill['bill_status'] ?>">
                    <input type="hidden" name="iddh" value="<?php echo $bill['id'] ?>">
                    <input type="submit" value="capnhap" name="capnhap">
                </a>
            </form>
        </div>
    </div>
</body>

</html>