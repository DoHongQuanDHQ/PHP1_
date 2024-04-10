
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table border="1" width="500">
            <tr>
                <td>ID</td>
                <td>Tên sản phẩm</td>
                <td>Ảnh</td>
                <td>Giá Tiền</td>
                <td>Giảm giá</td>
                <td>Detail</td>
                <td>ID cate</td>
            </tr>
            <?php 
                require_once 'pdo.php';
                $sql="SELECT * FROM product";
                $allPro=$conn->query($sql);
                foreach($allPro as $key => $row){
                    
            ?>
                <tr>
                    <td><?php echo $row['id_pro']?></td>
                    <td><?php echo $row['name_pro']?></td>
                    <td><img src="img/1.jpg"<?php echo $row['img']?> width="100"></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['sale']?></td>
                    <td><?php echo $row['defaul']?></td>
                    <td><?php echo $row['id_pro']?></td>
                </tr>
            <?php
                }
            ?>
        </table>
</body>
</html>