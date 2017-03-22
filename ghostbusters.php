<?php include("header.php"); ?>
<div class="film">
    <div class="container">
        <div class="panel panel-default panel_color">


            <img class="pic" src="http://shoppingbarra.com/wp-content/uploads/2016/07/cacafantasmas30junho.jpg" hspace="30"  align="left"/> 
            <div class="text">
                <h3 style="margin-bottom: 50px;"> <strong> Ghostbusters </strong> </h3> 
                <div> <span> Vizyon Tarihi :</span> <div id="blank"> 29 Temmuz 2016 </div> </div>
                <div> <span> Yapımı        :</span> <div id="blank">  2016 - ABD </div> </div>
                <div> <span> Tür           : </span> <div id="blank"> Bilim Kurgu ,  Aksiyon ,  Komedi </div> </div>
                <div> <span> Süre          : </span> <div id="blank">116 Dak. </div> </div>
                <div> <span> Yönetmen      : </span> <div id="blank">Paul Feig </div> </div>
                <div> <span> Oyuncular     : </span> <div id="blank">Kristen Wiig ,  Melissa McCarthy ,  Kate McKinnon ,  Leslie Jones ,  Chris Hemsworth </div> </div>
                <div> <span> Senaryo       : </span><div id="blank">Dan Aykroyd ,  Harold Ramis ,  Paul Feig ,  Katie Dippold </div> </div>
                <div> <span> Yapımcı       : </span><div id="blank"> Dan Aykroyd ,  Ivan Reitman </div> </div>
                <div> <span> Diğer Adı     : </span> <div id="blank">Hayalet Avcıları 3, Ghostbusters 3 </div> </div>

            </div>



            <div class="container">

                <div style="margin-left: 10%; font-family: sans-serif; font-size: 20px; margin-top: 15%; "> <strong> Film Özeti </strong> </div>
                <div style="margin:0px 30px 0px 100px; ">
                    <p>
                        Hayaletlerin gerçekten varolduğunu anlatan bir kitap yazan Erin Gilbert (Kristen Wiig) ve Abby Yates (Melissa McCarthy) eserleriyle ses getirememişlerdir. Kitabın üzerinden birkaç yıl geçtikten sonra Gilbert Columbia Üniversitesi'nde hocalık yapmak için kabul aldığında yazdığı bu kitap ortaya çıkar ve akademik camiada alay konusu olur. Ancak hayaletler Manhattan'a musallat olduğunda dünyayı kurtarmak için Gilbert, Yates, mühendis Jillian Holtzmann (Kate McKinnon) ve metroda çalışan Patty Tolan (Leslie Jones) güç birliği yapacaktır.
                        Orijinal filmin tam 32 yıl ardından gösterime giren Hayalet Avcıları'nda yepyeni bir ekiple birlikte resepsiyonist Kevin (Chris Hemsworth) gibi yeni karakterler yer alıyor.
                    </p>
                </div>


                <div class="row ">


                    <div style="margin-top:70px; margin-left:10%;" class="pics">

                        <div class="container">
                            <div class="row">
                                <div class= "col-lg-2 col-md-2 col-sm-2 col-xs-2 ">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <img src="http://img01.imgsinemalar.com/images/afis_buyuk/k/kristen-wiig-1458031797.jpg"   class="img-responsive " alt="Responsive image"/> 
                                        </div>
                                        <div class="panel-footer"> Kristen Wiig </div>
                                    </div>
                                </div>
                                <div class= "col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="ghostbusters.php" <?php
                                            if ($currentPage == 'ghostbusters.php') {
                                                echo 'class="active"';
                                            }
                                            ?> >  <img src="http://ia.media-imdb.com/images/M/MV5BMTg5NjA3ODkyMl5BMl5BanBnXkFtZTgwNTU4Mzg5NjE@._V1_UY317_CR17,0,214,317_AL_.jpg"  class="img-responsive" alt="Responsive image"/> </a>
                                        </div>
                                        <div class="panel-footer">  Melissa McCarthy </div>
                                    </div>
                                </div>
                                <div class= "col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="panel">

                                        <div class="panel-body">
                                            <img src="http://img03.imgsinemalar.com/images/afis_buyuk/k/kate-mckinnon-1433403607.jpg"   class="img-responsive" alt="Responsive image"/>
                                        </div>
                                        <div class="panel-footer">  Kate McKinnon  </div>
                                    </div>
                                </div>
                                <div class= "col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="panel">

                                        <div class="panel-body">
                                            <img src="http://img03.imgsinemalar.com/images/afis_buyuk/l/leslie-jones-1433403676.jpg"   class="img-responsive" alt="Responsive image"/>
                                        </div>
                                        <div class="panel-footer">  Leslie Jones  </div>
                                    </div>
                                </div>
                                <div class= "col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="panel">

                                        <div class="panel-body">
                                            <img src="http://img01.imgsinemalar.com/images/afis_buyuk/c/chris-hemsworth-1392665665.jpg"   class="img-responsive" alt="Responsive image" />
                                        </div>
                                        <div class="panel-footer"> Chris Hemsworth </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> 
                </div>



                <form role="form">
                    <div class="form-group">


                        <label for="comment" style="margin-right: 70%; font-family: sans-serif; font-size: 20px; margin-top: 70px;">Comment:</label>

                        <textarea class="form-control" rows="5" id="comment" style="width: 800px; margin-left: 10%;"></textarea>
                    </div>
                </form>
                <div class="checkbox spoiler">
                    <label><input type="checkbox"> Spoiler içerir! </label>
                </div>
            </div>
            <button type="button" class="btn navbar-btn3"> Gönder </button>
        </div>
    </div>