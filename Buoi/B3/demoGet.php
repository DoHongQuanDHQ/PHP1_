<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Họ Tên <input type="text" value="" name="hoten">
        Tuổi <input type="text" value="" name="tuoi">
            <input type="submit" value="Gửi" name="gui">
    </form>
    <?php
        if(isset($_GET['gui'])){
            $name=$_GET['hoten'];
            $age=$_GET['tuoi'];
            echo "Hello $name bạn năm nay $age tuổi ";
        }
    ?>
</body>
</html>