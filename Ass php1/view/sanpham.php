<div class="row mb box">
    <div class="box_left">
        <div class="mb">
            <div class="box_title">SẢN PHẨM <strong>
                    <?= $tendm ?>
                </strong></div>
            <div class="box_content rowpr">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $images = $img_path . $img;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i = 11)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo '<div class="box_product ' . $mr . '">
                    <div class="img"><a href="' . $linksp . '">
                        <img src="' . $images . '" alt=""></a>
                    </div>
                    <p>$' . $price . '</p>
                    <a href="' . $linksp . '">' . $name . '</a>
                </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
    </div>
    <div class="box_right">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>