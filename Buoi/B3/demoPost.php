<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            Họ Tên <input type="text" value="" name="hoten">
            Tuổi <input type="text" value="" name="tuoi">
                <input type="submit" value="Gửi" name="gui">
    </form>
    <?php
        
        if(isset($_POST['gui'])){
            $name=$_POST['hoten'];
            $age=$_POST['tuoi'];
            echo "Hello $name bạn năm nay $age tuổi ";
        }
    
    ?>
</body>
</html>