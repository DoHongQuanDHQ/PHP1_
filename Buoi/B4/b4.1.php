<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            // Mảng index
        $arr1 = array();
        $arr2 = [24,4,9,10,1,5,80];
        // chèn thêm 1 pt vào $arri
        $arr1[0]=3;
        $arr2[1]=6;
        array_push($arr1,5,7,3,8,22);
        // Truy xuất tới 1 ptu bất kỳ
        echo $arr2[3];
        // Duyệt all các pt của mảng
        echo "<br> Duyệt bằng for: ";
        for($i=0; $i<count($arr2); $i++){
            echo $arr2[$i],"";
        }
        array_pop($arr2);
            echo "<br>Duyệt bảng for đã xóa: ";
        for($i=0; $i<count($arr2); $i++){
            echo $arr2[$i],"";
        }
        echo "<br>Duyệt bằng foreach đày đủ: ";
        foreach ($arr2 as $key => $value) {
            echo "$value";

        }
        echo "<br>Duyệt bằng Foreach tắt: ";
        foreach ($arr2 as $value) {
            echo "$value";
        }

        // Mảng Liên Kết

        $arrSv=["PH001"=>"huhu","PH002"=>"hihi","PH003"=>"hyhy"];
        echo "<br>".$arrSv['PH002'];
        echo "<br> Duyệt All phần tử của mảng: ";
        foreach ($arrSv as $key => $value) {
            echo "$value";
        }
        
        // Mảng Mix

        echo "<br> Mảng khuyết Key Mix mảng Index";
        $arrclass1=[["HHI","huhu"],["hihh","gygy"],
        ["jiji","huy"]];

        echo "<br>".$arrclass1[2][0];
        echo "<br> Duyệt các phần tử của mảng: ";

        foreach($arrclass1 as $key => $value){
                echo "<br> ". $value[0]." và ".$value[1];
        }
        
        echo "<br> Mảng khuyết key mix mảng liên kết";

        $arrclass2=[["mssv"=>"PH001","hoten"=>"huhu","diem"=>10],
        ["mssv"=>"PH002","hoten"=>"huhy","diem"=>5],
        ["mssv"=>"PH003","hoten"=>"hihi","diem"=>7]];

        echo "<br> ".$arrclass2[1]['diem'];
        echo "<br> Duyệt All các phần tử của mảng";

        foreach($arrclass2 as $key => $sv){
            echo "<br>". $sv['hoten']. " có mã là: ". $sv['mssv'];
        }
    ?>
</body>
</html>