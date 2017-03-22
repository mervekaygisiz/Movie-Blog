<?php
    session_start();
    session_destroy(); //kullanıcı çıkışı yapılması istendiğinde bağlantı kopsun
    header("Location: http://localhost:8080/index.php");  //login sayfasının olduğu sayfaya geçilsin
?>
