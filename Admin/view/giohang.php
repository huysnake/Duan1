<style>
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@300;500&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-family: 'Jost', sans-serif;
    }

    /* header  */
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

    .title-giohang {
        margin: 15px 0px;
        font-size: 24px;
    }

    table {
        width: 100%;
        text-align: center;
    }

    table .all-product {
        width: 20%;
    }

    table tbody {
        margin-top: 15px;
    }

    .product-img {
        width: 30%;
        /* display: flex; */
    }

    /* Feature */

    .feature {
        width: 1200px;
        background-color: #fff;
        position: relative;
        left: 50%;
        top: -80px;
        margin-bottom: -170px;
        transform: translateX(-50%);
        padding: 15px 45px;
        border-radius: 6px;
    }

    .features {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .feature_item {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 141px;
        background-color: #f2ffff;
        margin: 0 -30px;
    }

    .feature_item img {
        width: 45px;
        height: 45px;
    }

    /* About */

    .about {
        padding: 180px 140px;
        margin-top: 10px;
        background-color: #f2ffff;
    }


    .about-cart {
        background-color: #fff;
        padding: 12px;
        border-radius: 12px;
    }

    .about-img img {
        width: 100%;
        height: 100%;
    }

    .about-content {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        padding: 70px;

    }


    .about-content h2 {
        font-size: 38px;
        margin-bottom: 20px;
        color: #383A4E;
        line-height: 48px;
    }


    .about-content p {
        font-size: 16px;
        margin-bottom: 30px;
        color: #64688C;
        line-height: 24px;
        font-weight: 300;
    }

    /* Place */

    .place {
        background-color: #f2ffff;
        padding-bottom: 172px;
    }

    .place .btn {
        background-color: #33A5FF;
    }

    .place-title {
        text-align: center;
    }

    .place-title h1 {
        font-size: 38px;
        color: #383A4E;
        margin-bottom: 24px;
    }

    .place-title p {
        font-size: 16px;
        color: #64688C;
        font-weight: 300;
        line-height: 24px;
        margin-bottom: 24px;
    }

    .slider {
        padding-top: 90px;
        position: relative;
        overflow: hidden;
    }

    .slides {
        width: 500%;
        display: flex;
        align-items: center;
        margin-left: -206px;
        transition: 1s;

    }

    .slide-box {
        background-color: #fff;
        margin-left: 18px;
        border-radius: 6px;

    }

    .slide,
    .feedback {
        width: 600px;
        margin: 10px;
        overflow: hidden;
        position: relative;
        transition: 1s;
    }

    .slide img {
        width: 100%;
        height: 400px;
        border-radius: 6px;
        transition: 1s ease;
    }

    .slide img:hover {
        transform: scale(1.2);
    }


    .slide i {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 12px;
        background-color: rgba(255, 255, 255, 0.2);
        color: #fff;
        border-radius: 50%;
        border: 2px solid #fff;
        transform: scale(0);
        transition: 0.3s ease;

    }

    .slide:hover .icon {
        transform: scale(1);
    }


    .slide span {
        display: block;
        position: absolute;
        right: 16px;
        top: 16px;
        padding: 6px 12px;
        background-color: #FFC033;
        color: #fff;
        border-radius: 6px;
    }

    .navigation-manual {
        position: absolute;
        bottom: 32px;
        right: 10px;
        background-color: #fff;
        border-radius: 24px;
        box-shadow: 1px 1px 1px 10px rgba(255, 255, 255, 0.2);
    }

    .navigation-manual i {
        padding: 16px 28px;
    }

    .feature .font {
        font-size: 30px;
        font-family: 'Monoton', cursive;
    }

    /* Room */

    .room-width {
        margin-left: -15px;
        margin-right: -15px;
    }

    .room-item {
        margin-top: 12px;
    }

    .room {
        background-color: #fff;
        border-radius: 6px;
    }

    .room-img {
        padding: 12px;
        height: 252px;
    }

    .room-img img {
        width: 100%;
        height: 100%;
        border-radius: 6px;
    }

    .room-content {
        padding: 32px;
    }

    .room-space {
        display: flex;
        align-items: center;
        list-style: none;

    }

    .room-space li {
        padding-right: 24px;
    }

    .room-space i {
        margin-right: 16px;
    }

    .room-space span {
        color: #64688C;

    }

    .room-content h1 {
        font-size: 24px;
        color: #383A4E;
        padding: 16px 0;
    }

    .room-content p {
        font-size: 15px;
        color: #64688C;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        font-weight: 400;
        word-spacing: 2px;
    }

    .room-content .room-book {
        margin-top: 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .room-book span {
        color: #FF3A33;
        font-size: 24px;
    }

    .service-img img {
        width: 100%;
        height: 100%;
        border-radius: 6px;
    }

    .service-img {
        height: 520px;
        padding: 12px;
    }

    .service {
        background-color: #fff;
        border-radius: 6px;
        position: relative;
    }

    .service:hover .service-content {
        height: 213px;
    }

    .service span {
        display: block;
        position: absolute;
        right: 32px;
        top: 32px;
        padding: 2px 12px;
        background-color: #FFC033;
        color: #fff;
        border-radius: 6px;
        box-shadow: 1px 1px 1px 5px rgba(255, 255, 255, 0.2);
    }

    .service-content {
        position: absolute;
        bottom: 0px;
        text-align: center;
        margin: 32px;
        padding: 24px;
        background-color: #fff;
        box-shadow: 1px 1px 1px 10px rgba(255, 255, 255, 0.2);
        border-radius: 6px;
        width: 328px;
        height: 85px;
        transition: 0.3s ease;
        overflow: hidden;
    }

    .service-content h1 {
        font-size: 24px;
        color: #383A4E;
        width: 100%;
    }

    .service:hover .hidden {
        display: block;
    }

    .hidden {
        display: none;
    }

    .service-content p {
        word-spacing: 2px;
        padding: 12px 0;
        font-size: 15px;
        font-weight: 300;
        color: #64688C
    }


    .service-content .btn {
        padding: 12px 24px;
        font-size: 15px;
        font-weight: 400;
        box-shadow: none;
        background-color: #33A5FF;
    }

    .feedback-img h1 {
        color: #383A4E;
        margin-top: 18px;
        font-weight: 400;
    }

    .feedback-img span {
        color: #64688C;
        margin: 16px 0;
        font-size: 15px;
        display: block;
    }

    .feedback-img img {
        width: 70px;
        border-radius: 50%;
    }

    .feedback {
        text-align: center;
        padding: 24px;
        background-color: #f2ffff;
    }

    .feedback-content i {
        color: #EBA744;
        font-size: 15px;
    }

    .feedback-content p {
        font-size: 15px;
        color: #64688C;
        line-height: 24px;
        word-spacing: 2px;
        padding: 24px 12px;
    }

    /* Footer */

    /* modal */
    .modal-section {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: #a1a1a14f;

    }

    .auth_form__container {
        display: flex;
        flex-direction: column;
        width: 400px;
        padding: 0px 40px;
        background-color: #fff;
        margin-left: 50%;
        transform: translateX(-50%);
        border-radius: 4px;
    }

    .auth_form__container h4 {
        font-size: 22px;
        text-align: center;
        margin: 32px 0 24px 0;

    }

    .auth_form__container p {
        font-size: 16px;
        opacity: 0.8;
        text-align: center;
        padding-bottom: 24px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-lable {
        font-size: 16px;
    }

    .form-group input {
        width: 100%;
        height: 36px;
        outline: none;
        font-size: 15px;
        padding-left: 18px;
        margin-top: 6px;
        border-radius: 3px;
        border: 1px solid #33A5FF;
    }

    .invalid input {
        border: 1px solid #DC143C;
    }

    .form-message {
        font-size: 14px;
        color: red;
        margin-bottom: 8px;
    }


    .modal-section .btn3 {
        width: 100%;
        padding: 12px;
        border-radius: 6px;
        outline: none;
        border: none;
        font-weight: 600;
        font-size: 14px;
        background-color: #3ABDC1;
        color: #fff;
        margin: 24px 0;
    }

    .modal_overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .auth_form__container span {
        cursor: pointer;
    }

    .close {
        position: absolute;
        font-size: 16px;
        top: 100px;
        right: 24px;
        padding: 6px 12px;
        background-color: #fff;
        border-radius: 2px;
    }

    .close:hover {
        color: #FFF;
        background-color: red;
    }

    .form_hiden {
        display: none;
    }

    .room-main {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 50px;
    }


    .room-main img {
        width: 80%;

    }

    .room-small {
        display: flex;
        align-items: center;
    }

    .room-small--item img {
        width: 100%;
        height: 96px;
        padding: 12px;

    }

    .roomDetail {
        display: flex;
        margin-bottom: 50px;
    }

    .sign-room--detail .room-content {
        padding: 0 24px;
    }

    .sign-room--detail .seaarch_room form {
        flex-direction: column;
    }

    .comment {
        padding-top: 100px;
        padding-bottom: 100px;
        background-color: #ecfafb;
    }

    .comment-title {
        margin-bottom: 24px;

    }

    .comment textarea {
        width: 100%;
        height: 300px;
        padding: 24px;
        font-size: 16px;
        border-radius: 6px;
    }


    .comment .btn2 {
        background-color: #33A5FF;
        color: #fff;
        margin-top: 24px;
    }

    .comment_list {
        margin-top: 50px;
    }

    .comment_list-item {
        display: flex;
        margin-bottom: 24px;
    }

    .comment_list-item--avt {

        margin-right: 24px;


    }

    .comment_list-item--avt img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .comment_list-item--content h1 {
        color: #383A4E;
    }

    .comment_list-item--content span {
        color: #64688C;
    }

    .booking_list {
        height: 100%;
        padding: 0px 50px;
    }

    .booking_list table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        white-space: nowrap;
    }

    .booking_list table img {
        width: 100px;
        height: 70px;
    }

    .booking_list table td:nth-child(1) {
        width: 100px;
        text-align: center;
    }

    .booking_list table td:nth-child(2) {
        width: 150px;
        text-align: center;
    }

    .booking_list table td:nth-child(3) {
        width: 200px;
        overflow: hidden;
    }

    .booking_list table td:nth-child(4),
    .booking_list table td:nth-child(5),
    .booking_list table td:nth-child(6),
    .booking_list table td:nth-child(7),
    .booking_list table td:nth-child(8) {
        width: 150px;
        text-align: center;
    }

    /* .booking_list table td:nth-child(5) input {
    width: 70px;
padding: 10px 5px 10px 15px;
} */

    .booking_list table thead {
        border: 1px solid #e2e9e1;
        border-left: none;
        border-right: none;
    }

    .booking_list table tbody tr {
        border: 1px solid #e2e9e1;
        border-left: none;
        border-right: none;
        border-top: none;
    }

    .booking_list table thead td {
        font-size: 15px;
        font-weight: 700;
        padding: 18px 0;
        text-transform: uppercase;

    }

    .booking_list table tbody tr td {
        padding-top: 15px;
    }

    .booking_list table tbody td {
        font-size: 14px;
    }

    .booking_list i {
        padding: 12px;

    }

    .booking_list i:hover {
        color: red;
    }

    .booking_list tr input {
        padding: 12px;
        border-radius: 4px;
    }

    .booking_header {
        margin-top: 82px;
        padding: 32px;
        margin-bottom: 32px;
    }

    .total {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 32px;

    }

    .total span {
        color: #383A4E;
    }

    .total .btn {
        background-color: red;
        color: white;
        box-shadow: none;
        margin-left: 32px;
        width: 113px;
        height: 36px;
        border-radius: 10px;
        border: none;
        cursor: pointer;

    }

    .img_tk {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        margin-right: 10px;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        <!-- main  -->

        <div class="booking_list">
            <table width="100%">
                <thead>
                    <td>Hình ảnh</td>
                    <td>Tên sản phẩm</td>
                    <td>Giá sản phẩm</td>
                    <td>Số lượng</td>
                    <td>Tổng đơn hàng</td>
                    <td style="margin-left: 2000px;">Xóa sản phẩm</td>

                </thead>
                <tbody>
                    <?php
                    $tongtien = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $img = 'upload/';
                        $hinh = $img . $cart[2];
                        $tang = 'index.php?act=tang&id=' . $cart[0];
                        $giam = 'index.php?act=giam&id=' . $cart[0];
                        $tong = $cart[3] * $cart[4];
                        $thaydoi = 'index.php?act=thaydoi&iddh=' . $cart[0];
                        $tongtien += $tong;
                        $soluong = ' <form action="" method="post"><input type="text" name="soluong" id="" va></form>';
                        $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><i class="fa-solid fa-trash"></i></a></td>';
                        echo '<tr>
                        <th><img style="width: 90px;height: 80px;" src=" ' . $hinh . ' " alt=""></th>
                        <th>' . $cart[1] .  '</th>
                        <th>' . $cart[3] . ' vnđ'.'</th>
                        <th style="display:flex"> <a href="' . $giam . '">-</a> . <form action="'.$thaydoi.'" method="post"><input type="text" name="soluong" id="" value="' . $cart[4] . '"></form> .  <a href="' . $tang . '">+</a></th>
                        <th> ' . $tong .' vnđ'. '</th>
                        ' . $xoasp_td . '
                    </tr>
                               ';
                        $i += 1;
                    }
                    ?>
                </tbody>
            </table>
            <div class="total">
                <h4>Tổng số tiền: <span><?php echo $tongtien ?> vnđ</span></h4>
                <a href="index.php?act=bill"> <button class="btn">Thanh toán</button></a>
            </div>

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

        </div>

</body>

</html>