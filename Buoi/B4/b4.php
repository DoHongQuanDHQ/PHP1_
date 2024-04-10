<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Demo function

    // Hàm ko có giá trị trả về
        function tong($a,$b){
            echo "Tổng 2 số là: ".($a+$b);
        }
        tong (5,4);

        // Hàm có giá trị trả về 
        function tong2so($a, $b=10){
            return $a + $b;
        }
        echo " <br> Tổng1: ". tong2so(5,5);
        echo " <br> Tổng2: ". tong2so(5);
    ?>
</body>
</html>