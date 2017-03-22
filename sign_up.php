<?php

ob_start();  //  ob komutu aktive edildi
session_start();  // session komutlarını kullanabilmek için session aktive edildi

require("baglanti.php");  //baglanti.php bağlantısı sağlandı


if (isset($_POST['signup'])) {    //eğer signup butonu çalıştırıldıysa kişi bilgilerini al
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwordd = $_POST['password'];
    $agn_pdw = $_POST['agn_pdw'];  //değişkenlerde tut

    
    $stmt = $con->prepare("INSERT INTO sign_up(name,surname,username,email, password, psw_again) VALUES (?, ?, ?, ?, ?,?)"); //veritabanına ekle
    $stmt->bind_param('ssssss', $_POST['name'], $_POST['surname'], $_POST['username'], $_POST['email'], $_POST['password'],$_POST['agn_pdw']); // kaç tane bilgi ekleniyorsa o kadar 's' karakteri kullanılıyor 
    $stmt->execute(); //çalıştırıldı
    $stmt->close();
    
    header("Location: http://localhost:8080/index.php");  //işlem sonunda login yapılan sayfaya yönlendirildi
}


?>
