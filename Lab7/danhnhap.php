<?php
        session_start();
        include_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['btnsubmit'])) {
            $user = $_POST['username'];
            $password = $_POST['password'];
            // Thực hiện truy vấn SQL để kiểm tra tên đăng nhập và mật khẩu
            $sql = "SELECT * FROM `dangki` WHERE username='$user' and password='$password'";
            $result=$conn->query($sql);
            // Kiểm tra kết quả truy vấn
            if ($result->rowCount() ==1) {
                $_SESSION['username']=$user;
                header("Location: trangchu.php");
                exit; 
            } else {
                echo "Thông tin đăng nhập không chính xác";
            }
        }
    ?>
    <h2>Đăng Nhập</h2>
    <form action="" method="post">
        <input type="text" name="username" id="" placeholder="Username"><br>
        <input type="password" name="password" id="" placeholder="Password"><br> 
        <input type="submit" value="Đăng Nhập" name="btnsubmit">
    </form>
</body>
</html>
