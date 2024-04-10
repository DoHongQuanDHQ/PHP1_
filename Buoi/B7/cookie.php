<?php
    setcookie('user','quan',time()+900);
    if (isset($_COOKIE['user'])) {
        echo "Chao ban" .$_COOKIE['user'];

    }else {
        echo "Khong ton tai cookie";
    }



?>
<a href="chuyen.php">Chuyen trang</a>