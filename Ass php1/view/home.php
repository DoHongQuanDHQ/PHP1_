<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/addmin.css">
    <link rel="stylesheet" href="view/css/style.css">
    <title>Assignment1</title>
</head>

<body>
    <div class="container">
        <div class="row mb menu">
            <ul>
                <li class="mr"><a href="index.php">Trang chủ</a></li>
                <li class="mr"><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li class="mr"><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li class="mr"><a href="index.php?act=gopy">Góp ý</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="row mb box">
            <div class="box_left">
                <div class="row mb">
                    <div class="banner sli">
                        <!--image slider start-->
                        <div class="slider">
                            <div class="slides">
                                <!--slide images start-->
                                <div class="slide first">
                                    <img src="view/images/banner1.jpg" alt="">
                                </div>
                                <!--slide images end-->
                            </div>
                        </div>
                        <!--image slider end-->
                    </div>
                </div>
                <div class="rowpr ">
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $images = $img_path . $img;
                        if (($i == 2) || ($i == 5) || ($i == 8)) {
                            $mr = "";
                        } else {
                            $mr = "mr";
                        }
                        echo '<div class="box_product box_cart ' . $mr . '">
                    <div class="img"><a href="' . $linksp . '">
                        <img src="' . $images . '" alt=""></a>
                    </div>
                    <p>$' . $price . '</p>
                    <a href="' . $linksp . '">' . $name . '</a>
                    <div class= "btnaddtocart">
                    <form action="index.php?act=addtocart" method="POST">
                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng"  class = "addgiohang">
                    </form>
                    </div>
                </div>';
                        $i += 1;
                    }
                    ?>
                </div>
            </div>
            <div class="box_right">
                <div class="mb">
                    <div class="box_title">DANH MỤC</div>
                    <div class="box_content2 menu_right">
                        <ul>
                            <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkcat = "index.php?act=sanpham&iddm=" . $id;
                                echo '<li>
                            <a href="' . $linkcat . '">' . $name . '</a>
                        </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="box_footer searchbox">
                        <form action="index.php?act=sanpham" method="POST">
                            <input type="text" name="kyw" placeholder="Từ khóa tìm kiếm">
                            <input type="submit" name="search" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="mb">
                    <div class="box_title">TOP 10 YÊU THÍCH</div>
                    <div class="box_content">
                        <?php
                        foreach ($dstop10 as $sp) {
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=" . $id;
                            $img = $img_path . $img;
                            echo '<div class="box mb top10">
                        <img src="' . $img . '" alt="">
                        <a href="' . $linksp . '">' . $name . '</a>
                    </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb footer">
            <p>Copyright @ 2022</p>
        </div>
    </div>
</body>

</html>