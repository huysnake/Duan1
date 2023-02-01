<?php
session_start();
ob_start();
include '../model/pdo.php';
include '../model/taikhoan.php';
if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    echo $user;
    echo $pass;
    $check_role = checkuser_role($user, $pass);
    $_SESSION['role'] = $check_role;
    echo $check_role;
    if ($check_role == 1) {
        header('Location: index.php');
    } else {
        header('Location: a.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập admin</title>
</head>
<style>
       .alo {
            width: 780px;
            height: 2000px;
            margin-left: 370px;
            background-color: #F3F5F7;
        }
        .alo .dangnhap,
        .alo .matkhau,
        .alo .tick{
            margin-left: 140px;
            margin-bottom: 30px;
        }
        .alo .dangnhap input[type="text"],
        .alo .matkhau input[type="password"]{
            width: 75%;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            border: 1px gainsboro solid;
        
        }
        .alo .submit input[type="submit"] {
            border: 1px gainsboro solid;
            padding: 15px 40px;
            border-radius: 5px;
            cursor: pointer;
            background-color: rgb(165, 121, 199);
            margin-left: 290px;
            color: white;
            font-weight: bold;
            font-size: 17px;
            margin-top: 20px;
        }
        h2{
            text-align: center;
        }
</style>

<body>
<h2>Đăng nhập để vào Admin</h2>
    <div class="alo" style="height: 400px;">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <br>
            <div class="dangnhap">
                Email hoặc Tên đăng nhập <span style="color:red">(*)</span> <br>
                <input type="text" name="user" placeholder="Vui lòng nhập số điện thoại hoặc email của bạn" required="">
            </div>
            <div class="matkhau">
                Mật khẩu <span style="color:red">(*)</span> <br>
                <input type="password" name="pass" placeholder="Nhập mật khẩu">

            </div>
            <div class="tick">
                <input type="checkbox"> Nhớ mật khẩu
            </div>
            <div class="submit">
                <label>
                    <input type="submit" name=dangnhap value="ĐĂNG NHẬP">
                </label>
            </div>

        </form>
    </div>
</body>

</html>