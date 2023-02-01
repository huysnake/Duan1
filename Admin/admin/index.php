<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
  include '../model/danhmuc.php';
  include '../model/sanpham.php';
  include '../model/pdo.php';
  include '../model/cart.php';
  include '../model/taikhoan.php';
  include '../model/binhluan.php';
  $count_tk = count_tk();
  $count_sp_out = count_sp_out();
  $count_sp = count_sp();
  $list_tk = loadall_taikhoan();
  $count_dh = count_dh();
  if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
      case 'adddm':
        if (isset($_POST['btn_submit'])) {
          $tendm = $_POST['ten_dm'];
          if ($_POST['ten_dm'] == '') {
            $thongbao = 'Bạn cần nhập tên danh mục';
          } else {
            insert_danhmuc($tendm);
          }
        }
        include 'danhmuc/add.php';
        break;
      case 'listdm':
        $listdm = loadall_danhmuc();
        include 'danhmuc/list.php';
        break;
      case 'xoadm':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_danhmuc($_GET['id']);
        }
        $listdm = loadall_danhmuc();
        include "danhmuc/list.php";
        break;
      case 'suadm':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $dm = loadone_danhmuc($_GET['id']);
        }
        include 'danhmuc/update.php';
        break;
      case 'updatedm':
        if (isset($_POST['capnhap'])) {
          $tendm = $_POST['ten_dm'];
          $id = $_POST['id'];
          update_danhmuc($id, $tendm);
        }
        $listdm = loadall_danhmuc();
        include "danhmuc/list.php";
        break;
      case 'xoatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_tk($_GET['id']);
        }
        $list_tk = loadall_taikhoan();
        include 'taikhoan/list.php';
        break;
      case 'listbl':
        $listsp = loadall_sanpham('', 0);
        if (isset($_POST['listok'])) {
          $idsp = $_POST['idsp'];
        } else {
          $idsp = 0;
        }
        $listbl = loadall_bl($idsp);
        include 'binhluan/list.php';
        break;
      case 'suatk':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $tk = loadone_tk($_GET['id']);
        }
        include 'taikhoan/update.php';
        break;
      case 'update':
        if (isset($_POST['update']) && ($_POST['update'])) {
          $id = $_POST['idtk'];
          $email = $_POST['email'];
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $tel = $_POST['tel'];
          $diachi = $_POST['diachi'];
          $filename = $_FILES['file']['name'];
          $up_dir = 'upload/';
          $up_file = $up_dir . $_FILES['file']['name'];
          update_taikhoan($id, $user, $pass, $email, $diachi, $tel, $filename);
        }
        $list_tk = loadall_taikhoan();
        include 'taikhoan/list.php';
        break;
      case 'listsp':
        $listdm = loadall_danhmuc();
        if (isset($_POST['listok'])) {
          $kyw = $_POST['kyw'];
          $iddm = $_POST['iddm'];
        } else {
          $kyw = '';
          $iddm = 0;
        }
        $listsp = loadall_sanpham($kyw, $iddm);
        include 'sanpham/list.php';
        break;
      case 'addsp':
        $listdm = loadall_danhmuc();
        if (isset($_POST['btn_submit'])) {
          $luotxem = $_POST['luotxem'];
          $tensp = $_POST['ten_sp'];
          $price = $_POST['price'];
          $soluong = $_POST['soluong'];
          if ($_POST['soluong'] > 5) {
            $trangthai = '✔Còn hàng';
          } else if ($_POST['soluong'] === 0) {
            $trangthai = '🧩Hết hàng';
          } else $trangthai = '⚡Sắp hết hàng';
          $iddm = $_POST['iddm'];
          $color = $_POST['color'];
          $mota = $_POST['mota'];
          $filename = $_FILES['file']['name'];
          $up_dir = '../upload/';
          $up_file = $up_dir . $_FILES['file']['name'];
          if (move_uploaded_file($_FILES['file']['tmp_name'], $up_file)) {
          } else {
            $file = 'Bạn chưa upload file';
          }
          if (empty($_POST['ten_sp'])) {
            $check_name = 'Bạn chưa nhập tên sản phảm';
          }
          if (empty($_POST['luoxem'])) {
            $check_luotxem = 'Bạn chưa nhập lượt xem';
          }
          if (empty($_POST['price'])) {
            $check_price = 'Bạn chưa nhập giá sản phẩm';
          }
          if (empty($_POST['soluong'])) {
            $check_soluong = 'Bạn chưa nhập số lượng sản phảm';
          }
          if (empty($_POST['color'])) {
            $check_color = 'Bạn chưa chọn màu sản phảm';
          }
          if (empty($_POST['trangthai'])) {
            $check_trangthai = 'Bạn chưa chọn trạng thái  sản phảm';
          }
          if (empty($_POST['mota'])) {
            $check_mota = 'Bạn chưa nhập mô tả sản phảm';
          } else insert_sanpham($tensp, $price, $filename, $soluong, $trangthai, $color, $mota, $luotxem, $iddm);
        }
        include 'sanpham/add.php';
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
        include 'donhang/list.php';
        break;
      case 'spout':
        $listdm = loadall_danhmuc();
        if (isset($_POST['listok'])) {
          $kyw = $_POST['kyw'];
          $iddm = $_POST['iddm'];
        } else {
          $kyw = '';
          $iddm = 0;
        }
        $listsp = loadall_sp_out($kyw, $iddm);
        include 'sanpham/listout.php';
        break;
      case 'xoasp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          delete_sanpham($_GET['id']);
        }
        $listsp = loadall_sanpham('', 0);
        include 'sanpham/list.php';
      case 'suasp':
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
          $sp = loadone_sanpham($_GET['id']);
        }
        $listdm = loadall_danhmuc();
        include 'sanpham/update.php';
        break;
      case 'updatesp':
        if (isset($_POST['capnhap'])) {
          $id = $_POST['id'];
          $luotxem = $_POST['luotxem'];
          $tensp = $_POST['ten_sp'];
          $price = $_POST['price'];
          $soluong = $_POST['soluong'];
          if ($_POST['soluong'] > 5) {
            $trangthai = '✔Còn hàng';
          } else if ($_POST['soluong'] == 0) {
            $trangthai = '✨Hết hàng';
          } else $trangthai = '⚡Sắp hết hàng';
          $iddm = $_POST['iddm'];
          $color = $_POST['color'];

          $mota = $_POST['mota'];
          $filename = $_FILES['file']['name'];
          $up_dir = '../upload/';
          $up_file = $up_dir . $_FILES['file']['name'];
          if (move_uploaded_file($_FILES['file']['tmp_name'], $up_file)) {
          } else {
            $file = 'Bạn chưa upload file';
          }
          update_sanpham($id, $tensp, $price, $soluong, $color, $mota, $filename, $luotxem, $iddm, $trangthai);
        }
        if (isset($_POST['listok'])) {
          $kyw = $_POST['kyw'];
          $iddm = $_POST['iddm'];
        } else {
          $kyw = '';
          $iddm = 0;
        }
        $listsp = loadall_sanpham($kyw, $iddm);
        $listdm = loadall_danhmuc();
        include "sanpham/list.php";
        break;
      case 'donghang':
        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
          $kyw = $_POST['kyw'];
        } else {
          $kyw = "";
        }
        $listbill = loadall_bill($kyw, 0);
        include 'donhang/list.php';
        break;
      case 'ctdh':
        $iddh = $_GET['iddh'];
        $bill = loadone_bill($iddh);
        $list_cart_idbill = loadall_cart($iddh);
        include 'donhang/ctdonhang.php';
        break;
      case 'capnhapdh':
        if (isset($_POST['ttdh'])) {
          $ttdh_old = $_POST['ttdh_old'];
          $ttdh = $_POST['ttdh'];
          $iddh = $_POST['iddh'];
          if ($ttdh_old == 4) {
            echo 'Đơn hàng đã hủy không thể cập nhập';
          } else if ($ttdh <= $ttdh_old) {
            echo 'Bạn không thể cập nhập trạng thái đơn hàng cũ';
          } else {
            upload_dh($ttdh, $iddh);
          }
        }
        if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
          $kyw = $_POST['kyw'];
        } else {
          $kyw = "";
        }
        $listbill = loadall_bill($kyw, 0);
        include 'donhang/list.php';
        break;
      case 'thongke':
        if (isset($_POST['btn_summit'])) {
          $tg = $_POST['tg'];
        } else {
          $tg = 5;
        }
        $sp_dem = count_sp_dem();
        $listbill = loadall_bill('', 0);
        include 'donhang/thongke.php';
        break;
      case 'listtk':
        include 'taikhoan/list.php';
        break;
      default:
        include 'dashboard/dashboard.php';
    }
  } else {
    include 'dashboard/dashboard.php';
  }
} else {
  header('Location: a.php');
}
