<?php 
    session_start();
    $_SESSION['user']="quan";
    if (isset($_SESSION['user'])) {
        # code...
        echo "Chao ban" .$_SESSION['user'];
    } else {
        # code...
        echo "Khong co session nao";
    }
    

?>
<a href="chuyen.php">Chuyen trang</a>