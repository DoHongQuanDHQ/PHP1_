<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Vd1: nhập vào điểm A ... F. In ra màn hình dựa vào điểm 
        // Nếu điểm A -> XS
        // $diem ="A";
        // switch ($diem) {
        //     case 'A':
        //         echo "Xuat sac";
        //         break;
        //     case 'B':
        //         echo "Gioi";
        //         break;
        //     case 'C':
        //         echo "Trung Binh";
        //         break;
        //     case 'D':
        //         echo "Yeu, Kem";
        //         break;
        //     case 'E':
        //         echo "Xuat sac";
        //         break;
        //     default:
        //         echo "Nhap sai";
        //         break;
        // }
        
        // v2: IN ra các số từ 0..n

        // $n = 10;
        // $i = 0;
        // while ($n <= $n) {
        //     echo "$i";
        //     $i ++;
        // }

        echo "<br> In ra các số từ 0->30";
            for ($i=0; $i <= 30; $i++) { 
            echo "$i ";
            }
        echo "<br> in ra các số từ 30->0";
            for ($i=30; $i <= 0 ; $i++) { 
            echo "$i ";
        }
        echo "<br>in ra các số chẵn từ 0->30";
            for ($i=0; $i <=30; $i +=2) { 
                echo "$i";
            }
        echo "<br>in ra các số lẻ từ 0->30";
            for ($i=0; $i <=30; $i +=1) { 
                echo "$i ";
            }
        echo "<br>in ra các số chia hết cho 3 và 5 từ 0->30";
        for ($i=0; $i <=30; $i++) { 
            if($i%3);
        }
    ?>
</body>
</html>