<?php
function bill_chi_tiet($listbill)
{
    $img = 'upload/';
    $tong = 0;
    $i = 0;
    foreach ($listbill as $cart) {
        $hinh = $img . $cart['img'];
        $tong = $tong + $cart['thanhtien'];
        echo '<div class="row_hang">
        <img src="' . $hinh . '" alt="">
        <div class="tt_hang">
            <p>' . $cart[4] . '</p> <br>
            <div class="number">
                <p>Giá:<Strong>' . $cart['price'] .' vnđ</Strong></p>
                <p style="margin-left: 20px;">Số lượng:   <strong>✔ ' . $cart['soluong'] . '</></p>
            </div>
        </div>
    </div>     ';
        $i += 1;
    }
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4];
        $tong = $tong + $ttien;
    }
    return $tong;
}
function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,bill_ngaydathang,total) values ('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang') ";
    return  pdo_execute_return_lastInsertID($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill') ";
    return  pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "select * from bill where 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_ttdh($n)
{
    switch ($n) {
        case 0:
            $tt = 'Đơn hàng mới';
            break;
        case 1:
            $tt = 'Đang xử lí';
            break;
        case 2:
            $tt = 'Đang giao hàng';
            break;
        case 3:
            $tt = 'Đã giao xong';
            break;
        case 4:
            $tt='Đã hủy';
            break;
        default:
            $tt = 'Đơn hàng mới';
            break;
    }
    return $tt;
}
function upload_dh($ttdh,$iddh){
    $sql = "update bill set bill_status='" . $ttdh . "' where id= " . $iddh;
   pdo_execute($sql);
}
function count_sp_dem(){
    $sql = "select sanpham.name as name,sanpham.img as img ,sum(cart.soluong) as soluong from cart join sanpham on sanpham.id=cart.idpro group by idpro order by soluong desc ";
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_user($iduser){
    $sql = "SELECT * FROM bill WHERE iduser=".$iduser;
    $sql .= " order by id desc";
    $listbill = pdo_query($sql);
    return $listbill;
}
function update_tt_dh($idbill){
    $sql = "update bill set bill_status='" . 4 . "' where id= " . $idbill;
   pdo_execute($sql);
}
function count_dh()
{
    $sql = "select count(*) from bill";
    $count_dh = pdo_query($sql);
    return $count_dh;
}
function get_tk($n)
{
    switch ($n) {
        case 0:
            $tt = 'User';
            break;
        case 1:
            $tt = 'admin';
            break;
    }
    return $tt;
}
function pttt($n){
    switch ($n) {
        case 1:
            $tt = 'Thanh toán trực tiếp ';
            break;
        case 2:
            $tt = 'Thanh toán online';
            break;
    }
    return $tt;
}