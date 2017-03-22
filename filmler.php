<?php include_once("header.php"); ?>
<?php session_start();?>


<div class="filmler">
    <div class="container">
        <div style="font-family:sans-serif; font-size:25px; margin: 50px 0px 10px 15px;">  Vizyondaki Filmler </div>
        <div id="owl-demo">  <!--carousel özelliği eklendi, bunun için kütüphaneler eklenilmişti ve id'si css dosyasında işlendi -->

            <div class="item"><img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" alt="Owl Image"></div>  <!--carousele fotoğraflar linkleri ile eklendi -->
            <div class="item"><img src="http://shoppingbarra.com/wp-content/uploads/2016/07/cacafantasmas30junho.jpg" alt="Owl Image"></div>
            <div class="item"><img src="http://www.hdfilmmerkezi.com/uploads/film/2015/02/malefiz-409.jpg"></div>
            <div class="item"><img src="https://upload.wikimedia.org/wikipedia/en/1/19/I_Origins_poster.jpg" alt="Owl Image"></div>
            <div class="item"><img src="http://onlinefilm.co/uploads/film/2015/12/the-intern-izle-582.jpg" alt="Owl Image"></div>
            <div class="item"><img src="http://onlinefilm.co/uploads/film/2015/12/the-intern-izle-582.jpg" alt="Owl Image"></div>
            <div class="item"><img src="http://onlinefilm.co/uploads/film/2015/12/the-intern-izle-582.jpg" alt="Owl Image"></div>
            <div class="item"><img src="http://onlinefilm.co/uploads/film/2015/12/the-intern-izle-582.jpg" alt="Owl Image"></div>

        </div>
        <div class="row ">
            <div style="margin-top:70px;">  <!--tablo şeklinde bootstrap komutlarının yardımı ile filmler fotoğraflar şeklinde eklendi -->
                <div class= "col-lg-2  col-md-3   col-sm-4 col-xs-5"> <!--sayfa istenilien boyutlara göre responsible yapıldı -->
                    <div class="panel pic_panel">
                        <div class="panel-body"> 
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg"  class="img-responsive" alt="Responsive image"/> 
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">
                        <div class="panel-body">
                            <a href="ghostbusters.php" <?php  // ghostbusters fotoğrafına tıklandığında ghostbusters.php sayfasına geçiş yapıldı-->
                            if ($currentPage == 'ghostbusters.php') {
                                echo 'class="active"';
                            }
                            ?> >  <img src="http://shoppingbarra.com/wp-content/uploads/2016/07/cacafantasmas30junho.jpg" class="img-responsive" alt="Responsive image"/> </a>
                        </div>
                        <div class="panel-footer">  Ghostbuters </div>
                    </div>
                </div>
                <div class= "col-lg-2    col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://www.ereglideyasam.com/image/sinema/360857.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  The Legend of Tarzan </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://www.hdfilmmerkezi.com/uploads/film/2015/02/malefiz-409.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Malefiz </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="https://upload.wikimedia.org/wikipedia/en/1/19/I_Origins_poster.jpg"class="img-responsive" alt="Responsive image" />
                        </div>
                        <div class="panel-footer"> I Origins </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://onlinefilm.co/uploads/film/2015/12/the-intern-izle-582.jpg"class="img-responsive" alt="Responsive image" />
                        </div>
                        <div class="panel-footer">  The Intern </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">
                        <div class="panel-body">
                            <img src="http://720pizle.com/i/afis/b/a4088.jpg" class="img-responsive" alt="Responsive image" />
                        </div>
                        <div class="panel-footer">  Inside out </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">
                        <div class="panel-body">
                            <img src="http://www.fragmangaleri.com/wp-content/uploads/2016/01/the-danish-girl-poster-2.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  The Danish Girl </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg"class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg"class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">
                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">
                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg" class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg"class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>
                <div class= "col-lg-2   col-md-3   col-sm-4 col-xs-5">
                    <div class="panel pic_panel">

                        <div class="panel-body">
                            <img src="http://tr.web.img3.acsta.net/pictures/15/12/14/18/05/178689.jpg"class="img-responsive" alt="Responsive image"/>
                        </div>
                        <div class="panel-footer">  Deadpool </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
    
