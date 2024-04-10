<?php
    // Bài1
    echo "Bài 1";
    echo "<br>";
        $x=10;
        if($x>0)
            echo "$x la so duong";
        else if($x==0)
            echo "$x khong phai la so am hay duong"; 
        else
            echo"$x la so am"; 
        echo "<br/>";
        $y=19;
        if($y % 2==0)
            echo "$y la so chan";
        else 
            echo "$y la so le";
        echo "<br/>";
    
// BAI2:
    echo "Bài 2";
    echo "<br>";
        echo "Diem Tin Hoc: ";
        // echo "<br/>";
        $diem = 5;
        if($diem <= 9)
            echo "Xuat Sac";
        else if($diem <+ 9)
            echo "Gioi";
        else if($diem <= 8)
            echo "Kha";
        else if($diem <= 6.5)
            echo "Trung Binh";
        else
            echo "Kem";
        echo "<br/>";

// BAI3:
    echo "Bài 3";
    echo "<br>";

        // echo "3 cạnh trên có tạo thành tam giác khong:";
        // echo "<br/>";

        // $a=5;
        // $b=5;
        // $c=10;
        
        // $ab = $a+$b;
        // $bc= $b+$c;
        // $ca= $c+$a;
        // if($a<=0 || $b <=0 || $c <=0)
        //     echo "Day khong phai la tam giac";
        // if(($ab+$bc=$ca) && ($bc+$ca=$ab) && ($ca+$ab=$bc))
        //     echo "Tổng 2 cạnh lớn hơn 1 cạnh"  ;  
        $a = 5; 
        $b = 6; 
        $c = 7; 

        if ($a > 0 && $b > 0 && $c > 0) {
            if (($a + $b > $c) && ($b + $c > $a) && ($c + $a > $b)) { 
                echo "Ba cạnh $a, $b, $c lập thành một tam giác.";
            } else {
                echo "Ba cạnh $a, $b, $c không lập thành một tam giác.";
            }
        } else {
            echo "Các cạnh phải có giá trị dương.";
        }
        echo "<br>";

//BAI4:
    echo "Bài 4";
    echo "<br>";    
        echo "Số Lớn nhất là:";
        $x=6;
        $y=5;
        $z=4;
        
        if($x >= $y && $x >= $z)
            echo "$x";
        else if($y >= $x && $y >= $z)
            echo "$y";
        else
            echo "$z";
            
?>