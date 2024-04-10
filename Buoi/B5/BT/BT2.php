<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr td{
            text-align: center;
            
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td>Color</td>
        
        </tr>
        <?php 
        $arr = [
            "green" => "Dòng màu xanh",
            "red" => "Dòng màu đỏ",
            "blue" => "Dòng màu xanh da trời",
            "brown" => "Dòng màu nâu",
            "yellow" => "Dòng màu vàng",
            "purple" => "Dòng màu tím",
            "gray" => "Dòng màu xám",
        ];
        foreach ($arr as $key => $col) {
        ?>
        <tr>
            <td style="background-color: green;"><?php echo $arr["green"]?></td>
            <td style="background-color: red;"><?php echo $arr["red"]?></td>
            <td style="background-color: blue;"><?php echo $arr["blue"]?></td>
            <td style="background-color: brown;"><?php echo $arr["brown"]?></td>
            <td style="background-color: yellow;"><?php echo $arr["yellow"]?></td>
            <td style="background-color: purple;"><?php echo $arr["purple"]?></td>
            <td style="background-color: gray;"><?php echo $arr["gray"]?></td>
        </tr>
        <?php 
        }
        ?>

    </table>
    

</body>
</html>
