<?php
function insert_binhluan($noidung, $iduser, $username, $idpro, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(noidung, iduser, username, idpro, ngaybinhluan) values('$noidung', '$iduser', '$username', '$idpro', '$ngaybinhluan')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro)
{
    $sql = "SELECT*FROM binhluan WHERE 1";
    if ($idpro > 0) {
        $sql .= " AND idpro='" . $idpro . "'";
    }
    $sql .= " ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_binhluan($id)
{
    $sql = "DELETE FROM  binhluan WHERE id=" . $id;
    pdo_execute($sql);
}
function loadall_bl($idpro)
{
    $sql = "SELECT binhluan.noidung as nd,binhluan.username as user,sanpham.name as name, ngaybinhluan from binhluan join sanpham on sanpham.id=binhluan.idpro where 1";
    if ($idpro > 0) {
        $sql .= " AND idpro='" . $idpro . "'";
    }
    $sql .= " ORDER BY binhluan.id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
    $listbl = pdo_query($sql);
    return $listbl;
}
