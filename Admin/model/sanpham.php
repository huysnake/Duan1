<?php
function insert_sanpham($tensp, $price, $filename, $soluong, $trangthai, $color, $mota, $luotxem, $iddm)
{
   $sql = "insert into sanpham(name,price,img,soluong,trangthai,color,mota,luotxem,iddm) values ('$tensp','$price','$filename','$soluong','$trangthai','$color','$mota','$luotxem','$iddm') ";
   pdo_execute($sql);
}
function count_sp()
{
   $sql = "select count(*) from sanpham";
   $count_sp = pdo_query($sql);
   return $count_sp;
}
function loadall_sanpham($kyw, $iddm)
{
   $sql = "select *from sanpham where 1";
   if ($kyw != "") {
      $sql .= " and name like '%" . $kyw . "%'";
   }
   if ($iddm > 0) {
      $sql .= " and iddm like '%" . $iddm . "%'";
   }
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}
function count_sp_out()
{
   $sql = "select count(*) from sanpham where soluong<5";
   $count_sp_out = pdo_query($sql);
   return $count_sp_out;
}
function loadall_sp_out($kyw, $iddm)
{
   $sql = "select * from sanpham where soluong<5";
   if ($kyw != "") {
      $sql .= " and name like '%" . $kyw . "%'";
   }
   if ($iddm > 0) {
      $sql .= " and iddm like '%" . $iddm . "%'";
   }
   $count_sp_out = pdo_query($sql);
   return $count_sp_out;
}
function delete_sanpham($id)
{
   $sql = "delete from sanpham where id=" . $id;
   pdo_execute($sql);
}
function loadone_sanpham($id)
{
   $sql = "select * from sanpham where id=" . $id;
   $sp = pdo_query_one($sql);
   return $sp;
}
function update_sanpham($id, $tensp, $price, $soluong, $color, $mota, $filename, $luotxem, $iddm, $trangthai)
{
   if ($filename != '') {
      $sql = "update sanpham set name='" . $tensp . "',mota='" . $mota . "',soluong='" . $soluong . "',color='" . $color . "',price='" . $price . "',img='" . $filename . "',luotxem='" . $luotxem . "',iddm='" . $iddm . "',trangthai='" . $trangthai . "' where id= " . $id;
   } else  $sql = "update sanpham set name='" . $tensp . "',mota='" . $mota . "',soluong='" . $soluong . "',color='" . $color . "',price='" . $price . "',luotxem='" . $luotxem . "',iddm='" . $iddm . "',trangthai='" . $trangthai . "' where id= " . $id;
   pdo_execute($sql);
}
function loadall_sanpham_home($tt, $kyw)
{
   $sql = "select *from sanpham where 1";
   if ($tt == 1) {
      $sql .= " order by price desc limit 0,8 ";
   } else if ($tt == 3) {
      $sql .= " order by price asc limit 0,8 ";
   } else if ($tt == 2) {
      $sql .= " order by luotxem desc limit 0,8 ";
   } else if ($tt == 4) {
      $sql .= " order by id desc limit 0,8 ";
   }
   if ($kyw != '') {
      $sql .= " and name like '%" . $kyw . "%'";
   }
   $listsanpham = pdo_query($sql);
   return $listsanpham;
}
function load_ten_dm($iddm){
   if($iddm>0){
    $sql="select * from danhmuc where id=".$iddm;
    $dm= pdo_query_one($sql);
    extract($dm);
    return $name;
   }
   else return "";
   }
   
