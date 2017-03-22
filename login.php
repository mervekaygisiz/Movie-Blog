<?php
include("baglanti.php");

session_start();  // session komutlarını kullanabilmek için session aktive edildi
$stmt = $con->prepare("SELECT password FROM sign_up WHERE username = ?");  //veritabanındaki sign_up dosyasından usernamein password bilgisini çek

$stmt->bind_param('s', $_POST['username']); // kaç tane bilgi ekleniyorsa o kadar 's' karakteri kullanılıyor ve girilen username kontrol ediliyor

$stmt->execute();

$stmt->bind_result($password); // 

$stmt->fetch();

$stmt->close(); 
  if($_POST['password'] != "" && $_POST['password'] == $password){ // kullanıcının girdiği şifre veritabanındaki ile uyuşuyor mu

   $_SESSION['username'] = $_POST['username']; //uyuşuyorsa girilen şifreyi sessiona gönder
   $_SESSION['loggedIn'] = "True";  //sorun kontrolü için işlem sağlanıyorsa true'ya eşitle. buraya girmezse false çıkacak
   
  header("Location: http://localhost:8080/filmler.php"); // giriş başarılı ise filmler sayfasına geçiş yapılsın

  }else {  //kullanıcı hatalı giriş yaptığı zaman 'hatalı' şeklinde uyarı gösterilmesi sağlansın
      $_SESSION['error']="hatali";
    header("Location: http://localhost:8080/index.php"); // daha sonra login yapılan yere tekrar yönlendirilsin
}
?>