<?php 
$soluong=$_POST['soluong'];
$id=$_GET['iddh'];
$i=0;
for($i=0;sizeof($_SESSION['mycart']);$i++){
    if($_SESSION['mycart'][$i][0]==$id){
        $_SESSION['mycart'][$i][4]=$soluong;
        break;
    }
}
 header('Location:index.php?act=viewcart');
?>