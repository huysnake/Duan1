<?php
function insert_account($email, $user, $pass, $diachi, $tel, $img, $ngaydangki)
{
    $sql = "INSERT INTO taikhoan(email, user, pass,diachi,tel,img,ngaydangki) values('$email', '$user', '$pass','$diachi','$tel','$img','$ngaydangki')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan()
{
    $sql = "SELECT*FROM taikhoan ORDER BY idtk DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function count_tk()
{
    $sql = "select count(*) from taikhoan";
    $count_tk = pdo_query($sql);
    return $count_tk;
}
function checkuser_role($user, $pass)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp['role'];
}
function delete_tk($id)
{
   $sql = "delete from taikhoan where idtk=" . $id;
   pdo_execute($sql);
}
function update_taikhoan($id, $user, $pass, $email, $diachi, $tel, $filename)
{
   if ($filename != '') {
      $sql = "update taikhoan set user='" . $user . "',pass='" . $pass . "',email='" . $email . "',diachi='" . $diachi . "',tel='" . $tel . "',img='" . $filename . "' where idtk= " . $id;
   } else  $sql = "update taikhoan set user='" . $user . "',pass='" . $pass . "',email='" . $email . "',diachi='" . $diachi . "',tel='" . $tel . "' where idtk= " . $id;
   pdo_execute($sql);
}
function loadone_tk($id)
{
   $sql = "select * from taikhoan where idtk=" . $id;
   $tk = pdo_query_one($sql);
   return $tk;
}