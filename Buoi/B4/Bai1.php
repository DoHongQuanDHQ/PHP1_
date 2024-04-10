<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" width="300">
            <tr>
                <td>STT</td>
                <td>Mã Sv</td>
                <td>Họ tên</td>
                <td>Điểm</td>
            </tr>
        <?php 
            $arrclass2=[["mssv"=>"PH001","hoten"=>"huhu","diem"=>10],
            ["mssv"=>"PH002","hoten"=>"huhy","diem"=>5],
            ["mssv"=>"PH003","hoten"=>"hihi","diem"=>7]];
            foreach ($arrclass2 as $key => $sv) {
                
        ?>
            <tr>
                <td><?php echo $key+1?></td>
                <td><?php echo $sv['mssv']?></td>
                <td><?php echo $sv['hoten']?></td>
                <td><?php echo $sv['diem']?></td>
            </tr>
        <?php
        }
        ?>
</table>
</body>
</html>