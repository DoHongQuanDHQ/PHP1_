<div class="row mb box">
    <div class="box_left">
        <div class="mb">
            <?php
            extract($onesp);
            ?>
            <div class="box_title"><?= $name ?></div>
            <div class="box_content">
                <?php
                extract($onesp);
                $img = $img_path . $img;
                echo '<div class="row mb spct"> <img src="' . $img . '"> </div>';
                echo $mota;
                ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <div class="mb">
            <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="box_content">
                <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    echo '<ul>
                        <li><a href="' . $linksp . '">' . $name . '</a></li>
                        <ul>';
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