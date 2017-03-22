<?php include_once("header.php"); ?>  <!-- header.php include edildi yani sayfalar arası birleştirme işlemi sağlandı-->

<div class="page">   


    <div class="row"> <!--sayfa bootstap özelliği ile responsible yapıldı -->
        <div class="col-md-4 col-md-offset-4 col-xs-8 col-xs-offset-2 login">
            <h2 class="text-center"> Hesabınıza giriş yapın  </h2> 

            <?php   //kullanıcı eksik veya yanlış bilgi girdiğinde error hatası verildi
            if (isset($_SESSION['error'])) {
                echo "<div class=\"alert alert-danger\">" . $_SESSION['error'] . "</div>";
                unset($_SESSION['error']);
            }
            ?>
            
            <form  action="includes/login.php" method="POST"> <!-- mysqli bağlantısı için login.php ile bağlantı yapıldı-->
                <label for="username"/>   <!--kullanıcının adını ve şifresini girmesi için gerekli kodlar -->
                <input type="text" class="form-control" placeholder="Username:" name="username" id="username"/> 
                <label for="password"/>
                <input type="password" class="form-control" placeholder="Password:" name="password" id="password" /> 
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label> <!--check button yapıldı kullanıcı girişini hatırlaması için -->
                </div>

                <button type="submit" class="btn navbar-btn"> Login </button>  <!--login butonu oluşturuldu -->
                <a href="signin.php" <?php   //sign up butonuna tıklandığında signin.php sayfasına geçiş yapılması için gerekli kodlar
                if ($currentPage == 'signin.php') {
                    echo 'class="active"';
                }
                ?> ><button type="button" class="btn navbar-btn">Sign up</button> </a>
            </form>
        </div>
    </div>
</div>



