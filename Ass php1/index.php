<?php
session_start();
include "model/pdo.php";
include "model/products.php";
include "global.php";
include "model/categories.php";

$spnew = loadall_pro_home();
$dsdm = loadall_cat();
$dstop10 = loadall_pro_top10();


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_pro($id);
                extract($onesp);
                $sp_cungloai = load_pro_cungloai($id, $iddm);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_pro($kyw, $iddm);
            $tendm = load_ten_dm($iddm);
            include "view/sanpham.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

