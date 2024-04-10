<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAI1</title>
</head>

<body>
    <h1>Liệt Kê Bảng Cửu Chương Nhỏ Hơn</h1>
    
    <form action="" method="POST"  require >
    <input type="number" name="bangcc" min="1" max="10">
    <input type="submit" value="Gửi" name="gui">

    </form>
    <?php
        if(isset($_POST['bangcc'])){
            $bangcc= $_POST['bangcc'];
            echo "<h2>Bảng cửu chương $bangcc:</h2>";
            for($i =1;$i<=10;$i++){
                $ketqua = $bangcc *$i;
                echo "$bangcc x $i = $ketqua <br>";

            }
        }
        
    ?>
</body>

</html>