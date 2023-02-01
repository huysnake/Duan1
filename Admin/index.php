<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'model/pdo.php';
include 'model/cart.php';
include 'model/taikhoan.php';
if (!isset($_SESSION['mycart']))   $_SESSION['mycart'] = [];
if (isset($_POST['btn_summit'])) {
  $tt = $_POST['tt'];
} else {
  $tt = 0;
}
if (isset($_POST['btn_search_sp'])) {
  $kyw = $_POST['kyw'];
} else {
  $kyw = '';
}
$listsphome = loadall_sanpham_home($tt, $kyw);
$listdm = loadall_danhmuc();
if (isset($_GET['act'])) {
  $act = $_GET['act'];
  switch ($act) {
    case 'dangky':
      if (isset($_POST['dangky']) && ($_POST['dangky'])) {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $tel = $_POST['tel'];
        $diachi = $_POST['diachi'];
        $ngaydangky = date('Y/m/d h:i:s');
        $filename = $_FILES['file']['name'];
        $up_dir = 'upload/';
        $up_file = $up_dir . $_FILES['file']['name'];
        if (move_uploaded_file($_FILES['file']['tmp_name'], $up_file)) {
        } else {
          $tb_file = 'Bạn chưa upload file';
        }
        if (empty($_POST['email'])) {
          $tb_email = 'Bạn chưa nhập email';
        }
        if (empty($_POST['user'])) {
          $tb_user = 'Bạn chưa nhập uername';
        }
        if (empty($_POST['pass'])) {
          $tb_pass = 'Bạn chưa nhập pass';
        }
        if (empty($_POST['tel'])) {
          $tb_tel = 'Bạn chưa nhập số điện thoại';
        }
        if (empty($_POST['diachi'])) {
          $tb_diachi = 'Bạn chưa nhập địa chỉ';
        } else {
          insert_account($email, $user, $pass, $diachi, $tel, $filename, $ngaydangky);
          $thongbao = "Đăng ký thành công. Đăng nhập để sử dụng chức năng";
        }
      }
      include 'view/dangky.php';
      break;
    case 'huydh':
      $idbill = $_GET['iddh'];
      update_tt_dh($idbill);
      if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
        $kyw = $_POST['kyw'];
      } else {
        $kyw = "";
      }
      $listbill = loadall_bill($kyw, 0);
      include 'view/mybill.php';
      break;
    case 'dangnhap':
      if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $checkuser = checkuser($user, $pass);

        if ($_POST['user'] != '' && $_POST['pass'] != '') {
          if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            header('Location: index.php');
          } else {
            $thongbao = "Tài khoản không tồn tại vui lòng kiểm tra HOẶC đăng kí mới";
          }
        } else {
          if (isset($_POST['user'])) {
            $tb_user = 'Bạn chưa nhập uername';
          }
          if (isset($_POST['pass'])) {
            $tb_pass = 'Bạn chưa nhập pass';
          }
        }
      }
      include 'view/dangnhap.php';
      break;
    case 'thaydoi':
      include 'view/thaydoi.php';
      break;
    case 'sanphamdm':
      if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
        $kyw = $_POST['kyw'];
      } else {
        $kyw = '';
      }
      if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
        $iddm = $_GET['iddm'];
      } else {
        $iddm = 0;
      }
      $listsp_dm = loadall_sanpham($kyw, $iddm);

      $ten_dm = load_ten_dm($iddm);
      include 'view/sanpham.php';
      break;
    case 'thoat':
      session_unset();
      header('Location: index.php');
      break;
    case 'trangchu':
      include 'view/trangchu.php';
      break;
    case 'addtocart':
      if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = $_POST['img'];
        $price = $_POST['price'];
        $soluong = 1;
        $ttien = $soluong * $price;
        $f = 0;
        $i = 0;
        for ($i = 0; $i < sizeof($_SESSION['mycart']); $i++) {
          if ($_SESSION['mycart'][$i][0] == $id) {
            $f = 1;
            $_SESSION['mycart'][$i][4]++;
            break;
          }
        }
        if ($f == 0) {
          $spadd = [$id, $name, $img, $price, $soluong, $ttien];
          $_SESSION['mycart'][] = $spadd;
        }
      }
      include 'view/giohang.php';
      break;
    case "viewcart":
      include 'view/giohang.php';
      break;
    case 'delcart':
      if (isset($_GET['idcart'])) {
        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
      } else {
        $_SESSION['mycart'] = [];
      }
      header('Location:index.php?act=viewcart');
      break;
    case 'billconfirm':
      if (isset($_POST['thanhtoan']) && ($_POST['thanhtoan'])) {
        if (isset($_SESSION['user'])) {
          $iduser = $_SESSION['user']['idtk'];
        } else $iduser = 0;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pttt = $_POST['pttt'];
        $tel = $_POST['tel'];
        $ngaydathang = date('Y/m/d h:i:s');
        $tongdonhang = tongdonhang();
        $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt,  $ngaydathang, $tongdonhang);
        foreach ($_SESSION['mycart'] as $cart) {
          $tong = $cart[3] * $cart[4];
          insert_cart($_SESSION['user']['idtk'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $tong, $idbill);
        }
        $_SESSION['mycart'] = [];
      }
      $bill = loadone_bill($idbill);
      $billct = loadall_cart($idbill);
      include "view/billconform.php";
      break;
    case 'bill':
      include 'view/bill.php';
      break;
    case 'tang':
      include 'view/tang.php';
      break;
    case 'giam':
      include 'view/giam.php';
      break;
    case 'spchitiet':
      if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
        $idsp = $_GET['idsp'];

        $spchitiet = loadone_sanpham($idsp);
      }
      include 'view/spchitiet.php';
      break;
    case 'mybill':
      $listbill = loadall_cart_user($_SESSION['user']['idtk']);
      include "view/mybill.php";
      break;
    default:
      include 'view/trangchu.php';
  }
} else {
  include 'view/trangchu.php';
}
