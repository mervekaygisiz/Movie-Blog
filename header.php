<?php session_start(); ?>
<?php
if ($_SESSION['loggedIn'] == "True" && basename($_SERVER['SCRIPT_FILENAME']) == "index.php") {

    header("Location: http://localhost:8080/filmler.php");
}
//yukarıdaki kodlar ile index.php sayfasından kullanıcı girişi yapıldığında ve filmler.php sayfasına aktarılmamız sağlanmıştır
?>


<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <title>  Blog Sayfam  </title> <!--- blog sayfasının bağlığı--->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="css/style.css"/>   <!--- style.css dosyası ile bağlantı yapıldı --->
            <link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>  <!--carousel özelliği sağlanması için carousel.css-->
            <link rel="stylesheet" type="text/css" href="css/owl.theme.css"/> <!--- ve owl.themes.css ile header.php bağlantısı sağlandı-->
            <script src="js/script.js"></script>   <!--- javascript kodları ile bağlantı yapıldı --->
            <script src="js/owl.carousel.min.js"></script>  <!--- carousel özelliği için gerekli javascript kodlarının bağlantısı --->


            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- telefondan bağlanılması için -->


            </head>
            <body>

                <nav class="navbar navbar-default ">
                    <div class="container-fluid">  <!--- sayfa düzenlemelerinin yapılması-->

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"> Let's talk! <?php echo $_SESSION['username']. $_SESSION['password'] ; ?> </a>
                            <!--- Let's talk! yazısının yanına kullanıcı girişi yapan kişinin kullanıcı adını eklemek için echo komutu ile session eklendi-->
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']);
?>
          
                            <ul class="nav navbar-nav " >    <!-- bulunan php sayfasına göre geçiş yapılması için aşağıdaki komutlar kullanılmıştır-->

                                <li><a href="index.php" <?php 
                                if ($currentPage == 'index.php') {
                                echo 'class="active"';
                                  }
                                ?>>Anasayfa </a></li>
                                <li><a href="filmler.php" <?php
                                if ($currentPage == 'filmler.php') {
                                echo 'class="active"';
                                 }
                                ?> >Filmler</a></li>
                                <li><a href="diziler.php" <?php
                                       if ($currentPage == 'diziler.php') {
                                           echo 'class="active"';
                                       }
                                       ?>>Diziler</a></li>
                                <li><a href="animeler.php" <?php
                                    if ($currentPage == 'animeler.php') {
                                        echo 'class="active"';
                                    }
                                       ?>>Animeler</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Tür <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Hepsi</a></li>
                                        <li><a href="#">Aksiyon</a></li>
                                        <li><a href="#">Aksiyon</a></li>
                                        <li><a href="#">Macera</a></li>
                                        <li><a href="#">Animasyon</a></li>
                                        <!-- <li role="separator" class="divider"></li> -->
                                        <li><a href="#">Suç</a></li>
                                        <li><a href="#">Biyografi</a></li>
                                        <li><a href="#">Komedi</a></li>
                                        <li><a href="#">Belgesel</a></li>
                                        <li><a href="#">Dram</a></li>
                                        <li><a href="#">Aile</a></li>
                                        <li><a href="#">Fantastik</a></li>
                                        <li><a href="#">Korku</a></li>
                                        <li><a href="#">Müzikal</a></li>
                                        <li><a href="#">Gizem</a></li>
                                        <li><a href="#">Romantik</a></li>
                                        <li><a href="#">Bilimkurgu</a></li>
                                        <li><a href="#">Savaş</a></li>
                                        <li><a href="#">Spor</a></li>
                                        <li><a href="#">Gençlik</a></li>
                                    </ul>

                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Sırala <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Vizyondaki Filmler</a></li>
                                        <li><a href="#">Popülerlik</a></li>
                                        <li><a href="#">Yıl</a></li>
                                        <li><a href="#">Değerlendirme</a></li>
                                        <li><a href="#">Son Eklenenler</a></li>
                                    </ul>
                                </li>

                                </li>
                                <li>
                                    <a href="includes/cikis.php">Çıkış</a>
                                </li>
                            </ul>



                            <form action="includes/nav.php" method="GET" class=" search-form ">  <!--mysql bağlantısı için  -->
                                <div class="form-group has-feedback">  <!-- arama butonu eklendi-->
                                    <label for="search" class="sr-only">Search</label>  
                                    <input type="text" class="form-control"name="nav" id="search" placeholder="search">
                                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                </div>
                            </form>



                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->

                </nav>
