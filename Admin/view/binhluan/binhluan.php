<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bình luận</title>
    <style>
        /* form{
            

        } */
    </style>
</head>

<body>
    <div class="mb box_left">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2 menu_right binhluan ">
            <table>                
                <?php   
                $idpro = $_REQUEST['idpro'];
                $listbl = loadall_binhluan($idpro);          
                foreach ($listbl as $bl) {
                    extract($bl); 
                    echo '<tr><td> '.$noidung.' </td>';
                    echo '<td> '.$username.' </td>';
                    echo '<td> '.$ngaybinhluan.' </td></tr>';                          
                }
                ?>
            </table>
        </div>
        <div class="box_footer searchbox binhluanform">
            <?php
                if(!isset($_SESSION['user'])){
                    echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
                }
                else{
            ?>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" name="noidung" placeholder="Viết bình luận">
                <input type="submit" name="guibinhluan" value="Gửi">
            </form>
            <?php
                }
            ?>
        </div>

        <?php
        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['idtk'];
            $username = $_SESSION['user']['user'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser,$username, $idpro, $ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>