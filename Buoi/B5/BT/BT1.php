<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>RockBand</td>
            <td>Song1</td>
            <td>Song2</td>
            <td>Song3</td>
        </tr>
        <?php
        $rockBands=[["hoten"=>"Beatles","nhac1"=>"Love Me Do","nhac2"=>"Hey Jude","nhac3"=>"Helter Skelter"],
                    ["hoten"=>"Rolling Stones","nhac1"=>"Waiting on a Friend","nhac2"=>"Angie","nhac3"=>"Yesterday| Papers"],
                    ["hoten"=>"Eagles","nhac1"=>"Life in the Fast Lane","nhac2"=>"Hotel California","nhac3"=>"Best of My Love"]];
        foreach ($rockBands as $key => $nc) {
        ?>
        <tr>
            <td><?php echo $nc["hoten"] ?></td>
            <td><?php echo $nc["nhac1"] ?></td>
            <td><?php echo $nc["nhac2"] ?></td>
            <td><?php echo $nc["nhac3"] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>