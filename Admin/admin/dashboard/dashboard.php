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
            height: 100%;
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

        .list-title {
            width: 100%;
            height: 300px;
            background-color: #cdcd;
            padding: 15px 20px;
            margin-top: 20px;
        }

        .conut-client {
            width: 40%;
            height: 100px;
            background-color: white;
            float: left;
            margin-left: 60px;
            display: flex;
        }

        .conut-product {
            width: 40%;
            height: 100px;
            background-color: white;
            float: left;
            margin-left: 60px;
            display: flex;
        }

        .conut-bill {
            width: 40%;
            height: 100px;
            background-color: white;
            float: left;
            margin-left: 60px;
            margin-top: 50px;
            display: flex;
        }

        .conut-out {
            width: 40%;
            height: 100px;
            background-color: white;
            float: left;
            margin-left: 60px;
            margin-top: 50px;
            display: flex;
        }

        .icon {
            width: 70px;
            height: 70px;
            background-color: #99FFCC;
            text-align: center;
            margin-top: 15px;
            margin-left: 20px;
            border-radius: 10px;
        }

        .icon i {
            color: #00FF00;
            font-size: 25px;
            margin-top: 20px;
        }

        .title-icon h4 {
            margin-top: 20px;
            margin-left: 20px;
            color: #FF3333;
        }

        .title-icon h5 {
            margin-left: 20px;
            color: black;
            font-size: 15px;
            margin-top: 5px;
            border-bottom: 1px solid #cdcd;
            padding-bottom: 5px;
        }

        .title-icon p {
            font-size: 15px;
            color: #555555;
            margin-left: 20px;
            margin-top: 5px;
        }

        .new-peopo {
            width: 100%;
            height: 400px;
            background-color: #EEEEEE;
            padding: 15px 20px;
            margin-top: 20px;

        }

        .new-peopo h2 {
            border-bottom: 3px solid #FFFF00;
            padding-bottom: 10px;
        }

        .table {
            border-collapse: collapse;
            margin-top: 20px;
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
    </style>
</head>

<body>
    <div class="container">
        <div class="box-left">
            <div class="information">
                <img src="../img/25.jpg" alt="">
                <h5>Admin</h5>
                <p>Ch??o m???ng tr??? l???i</p>
            </div>
            <div class="list">
                <ul>
                    <li><a href="index.php?act=dashboard"><i class="fas fa-palette"></i>
                            <p>B???ng ??i???u khi???n</p>
                        </a></li>
                    <li><a href="index.php?act=listdm"><i class="fas fa-list"></i>
                            <p>Danh m???c</p>
                        </a></li>
                    <li><a href="index.php?act=listsp"><i class="fas fa-wallet"></i>
                            <p>S???n ph???m</p>
                        </a></li>
                    <li><a href="index.php?act=listtk"><i class="fas fa-users"></i>
                            <p>Kh??ch h??ng</p>
                        </a></li>
                    <li><a href="index.php?act=listbl"><i class="fas fa-comment"></i>
                            <p>B??nh lu???n</p>
                        </a></li>
                    <li><a href="index.php?act=donghang"><i class="fas fa-file-invoice-dollar"></i>
                            <p>????n h??ng</p>
                        </a></li>
                    <li><a href="index.php?act=thongke"><i class="fas fa-flag-checkered"></i>
                            <p>Th???ng k??</p>
                        </a></li>
                        <li><a href="../index.php"><i class="fas fa-sign-out-alt"></i>
                            <p>Trang ch???</p>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="box-right">
            <div class="title">
                <h4>B???ng ??i???u khi???n</h4>
            </div>
            <div class="list-title">
                <a href="index.php?act=listtk">
                    <div class="conut-client">
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="title-icon">
                            <h4>T???NG KH??CH H??NG</h4>
                            <h5><?php echo $count_tk[0][0] ?> kh??ch h??ng</h5>
                            <p>T???ng s??? kh??ch h??ng ???????c qu???n l??...</p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="conut-product">
                        <div class="icon" style="background-color: #66CCFF;">
                            <i class="fas fa-poll" style="color: #0066CC;"></i>
                        </div>
                        <a href="index.php?act=listsp" style="text-decoration: none;">
                            <div class="title-icon">
                                <h4>T???NG S???N PH???M</h4>
                                <h5><?php echo $count_sp[0][0] ?> s???n ph???m</h5>
                                <p>T???ng s??? s???n ph???m ???????c qu???n l??...</p>
                            </div>
                        </a>
                    </div>
                </a>
                <a href="index.php?act=donghang">
                    <div class="conut-bill">
                        <div class="icon" style="background-color: #FFCC66;">
                            <i class="fas fa-shopping-bag" style="color: #FF9933;"></i>
                        </div>
                        <div class="title-icon">
                            <h4>T???NG ????N H??NG</h4>
                            <h5><?php echo $count_dh[0][0] ?> ????n h??ng</h5>
                            <p>T???ng s??? h??a ????n b??n h??ng...</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="new-peopo">
                <h2>Kh??ch h??ng m???i</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>M?? kh??ch h??ng</th>
                            <th>T??n kh??ch h??ng</th>
                            <th>S??? ??i???n tho???i </th>
                            <th>Email</th>
                            <th>?????a ch???</th>
                            <th>H??nh ???nh</th>
                            <th>Vai tr??</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                           foreach($list_tk as $tkm){
                            $img='../upload/';
                            $hinh=$img.$tkm['img'];
                            $date = date('Y/m/d h:i:s');
                            $date1 = date_create($date);
                            $date2 = date_create($tkm['ngaydangki']);
                            $diff = date_diff($date2, $date1)->format("%a");
                            if($diff<5){
                            
                        ?>
                          <tr>
                            <th><?=$tkm['idtk']?></th>
                            <th><?=$tkm['user']?></th>
                            <th><?=$tkm['tel']?></th>
                            <th><?=$tkm['email']?></th>
                            <th><?=$tkm['diachi']?></th>
                            <th><img src="<?=$hinh?>" alt="" width="70px"></th>
                            <th><?=$tkm['role']?></th>
                        </tr>
                        <?php
                           }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>