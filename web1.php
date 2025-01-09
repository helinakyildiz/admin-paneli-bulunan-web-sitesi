<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/7ab486c0f3.js" crossorigin="anonymous"></script>
    <!--font awesomeden gerekli ikonların eklenebilmesi için lazım olan kodlar-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Dünyası</title>

    <!-- <link rel="shortcut icon" type="ba-v yapı" href="ba-v.jpg">logonun arama çubuğunda görünmesi-->

    <!--google font dan istediğimiz yazı stilini kullanmak için lazım olan kodlar-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/style.css"><!--css sayfası ile bağlantı-->

</head>

<body>
    <section id="menu" ><!-- menu alanının oluşturulması-->
        <div id="logo">
            <a href="web1.html"><!--logo için bağlantı oluşturulması-->
                <a href="web1.php" style="color: white;"><i class=""></i>LEZZET DÜNYASI</a>
            </a>
        </div><!--logonun eklenmesi-->
        <div class="hamburger" id="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <nav id="nav"  >
            <a href="web1.php"><i class="fa-solid fa-house ikon"></i>ANASAYFA</a>

            <a href="hakkimizda.html"><i class="fa-solid fa-building ikon"></i>HAKKIMIZDA</a>

            <a href="tarifler.php"><i class="fa-solid fa-building ikon"></i>TARİFLER</a>
            <a href="iletisim.php"><i class="fa-solid fa-phone ikon"></i>İLETİŞİM</a>
        </nav>
    </section>

    <section id="anasayfa"><!--banner alanının oluşturulması-->
        <div id="black"><!--banner alanına konulan resmin gölgeli bir şekilde gösterilmesi için black ıd sine 
            sahip bir oluşturup css de bunu düzenliyoruz-->

            <img src="resimler/images.jpeg" alt="Lezzet Dünyası Banner" style="width: 100%; height: 600px;">

        </div>
        <div id="icerik"><!--banner alanında yazılacak olan içerik-->
            <h2  style="color: black;">Lezzet Dünyası</h2>
            <hr width="200" align="left"  style="color: black;">
            <p  style="color: black;">“Lezzet dünyasına hoş geldiniz, burada her tarif bir macera!”</p>

        </div>
    </section>
    <!--hakkımızda-->

    <section class="about">
        <h1 class="heading">Hakkımızda</h1>
        <div class="row">
            <div class="image">
                <img src="resimler/images tiramisu.jpeg" alt="hakkımızda">
            </div>
            <div class="content">
                <p>
                    Merhaba!

                    Lezzetin birleştirici gücüne inanarak yola çıktık. Amacımız, mutfağınızı şenlendirecek, sofralarınıza
                    tat katacak ve sevdiklerinizle paylaşabileceğiniz en özel tarifleri sunmak. Geleneksel Türk mutfağından
                    modern dünya lezzetlerine kadar geniş bir yelpazede tarifler hazırlıyor ve yemek pişirme deneyiminizi
                    daha keyifli hale getirmek için pratik öneriler sunuyoruz.
                </p>

                <a href="hakkimizda.html" class="btn">daha fazlası</a>

            </div>
        </div>
    </section>

    <!--projeler alanı-->
    <section class="projeler">
        <h1>YEMEK TARİFLERİMİZ</h1>
        <div class="box-container">

            <div class="box">
                <div class="box-head">
                    <img src="resimler/images tiramisu.jpeg" alt="proje1">
                    <h3>TİRAMİSU</h3>

                </div>
                <div class="box-bottom">
                <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                
                </div>
            </div>

            <div class="box">
                <div class="box-head">
                    <img src="resimler/images.jpeg" alt="proje1">
                    <h3>MAGNOLİA</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>

            <div class="box">
                <div class="box-head">
                    <img src="resimler/iclikofte-5.webp" alt="proje1">
                    <h3>İÇLİ KÖFTE</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>

            <div class="box">
                <div class="box-head">
                    <img src="resimler/indir (1).jpeg" alt="proje1">
                    <h3>BROWNİ</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>

            <div class="box">
                <div class="box-head">
                    <img src="resimler/indir (3).jpeg" alt="proje1">
                    <h3>DOMATES ÇORBASI</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>

            <div class="box">
                <div class="box-head">
                    <img src="resimler/indir.jpeg" alt="proje1">
                    <h3>KARNIYARIK</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>
     
            <div class="box">
                <div class="box-head">
                    <img src="resimler/kelle-paca-corbasi-yeni.jpg" alt="proje1">
                    <h3>KELLE PAÇA ÇORBASI</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>

            <div class="box">
                <div class="box-head">
                    <img src="resimler/zerde-tatlisi-yemekcom.webp" alt="proje1">
                    <h3>ZERDE TATLISI</h3>

                </div>
                <div class="box-bottom">
                    <a href="tarifler.php" class="btn-proje">Tarifi İncele</a>
                </div>
            </div>
        </div>
    </section>

    <!--footer alanı-->
    <section class="footer">

        <div class="share">
            <a href="#" class="fab fa-facebook"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-youtube"></a>
        

        </div>

        <div class="links">
            <a href="web1.php">Anasayfa</a>
            <a href="hakkimizda.html">Hakkımızda</a>
            <a href="tarifler.php">Tariflerimiz</a>

        </div>

        <div class="inner">

            <div class="helpful_links">
                <div class="inner_list">
                    <div class="inner_title">
                        <a href="iletisim.php">İletişim</a>
                    </div>
                    <ul>
                        <li><a href="#">@lezzetdünyasi</a></li>
                        <li><a href="tel:0 532 408 53 94">0533 678 87 87</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="credit">
            created by <span>Helin Akyıldız</span> | all rigths reserved
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const hamburger = document.getElementById('hamburger');
            const nav = document.getElementById('nav');

            hamburger.addEventListener('click', function() {
                nav.classList.toggle('show');
            });
        });
    </script>
</body>

</html>

<?php
include("baglanti.php");

?>