<!-- <?php
if (isset($_COOKIE['$user'])) {
    echo "Chao ban" . $_COOKIE['user'] . "o lai trang";

} else {
    echo "Khong ton tai cookie";
}

?> -->

<?php
    session_start();
    if (isset($_SESSION['$user'])) {
        echo "Chao ban" . $_SESSION['user'] . "o lai trang";

    } else {
        echo "Khong ton tai session";
    }

?>