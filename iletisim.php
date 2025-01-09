<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://kit.fontawesome.com/7ab486c0f3.js" crossorigin="anonymous"></script>
  <!--font awesomeden gerekli ikonların eklenebilmesi için lazım olan kodlar-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lezzet Dünyası İletişim</title>

  <!--<link rel="shortcut icon" type="ba-v yapı" href="ba-v.jpg">logonun arama çubuğunda görünmesi-->

  <!--google font dan istediğimiz yazı stilini kullanmak için lazım olan kodlar-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/style.css"><!--css sayfası ile bağlantı-->

  <style>
    .contact {
      padding: 20px;
    }

    .heading {
      text-align: center;
      margin-bottom: 40px;
      font-size: 2.5rem;
      color: #333;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
      justify-content: space-between;
      margin: 0 auto;
      width: 80%;

    }

    .map {
      flex: 1;
      border: 0;
    }

    form {
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .inputBox {
      display: flex;
      flex-direction: column;
      margin-bottom: 15px;
      margin-top: 15px;
    }

    .inputBox label {
      margin-bottom: 5px;
      font-weight: bold;
    }

    .inputBox input,
    .inputBox textarea {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 1rem;
      width: 100%;
    }

    .inputBox textarea {
      resize: vertical;
      height: 100px;
    }

    .contact .row form .btn {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #333;
      color: white;
      font-size: 1rem;
      cursor: pointer;
      align-self: flex-start;
      border-radius: 20px;
    }

    .btn:hover {
      opacity: 0.9;
    }
  </style>
</head>

<body>

  <section id="menu"><!-- menu alanının oluşturulması-->
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
    <nav id="nav">
    <a href="web1.php"><i class="fa-solid fa-house ikon"></i>ANASAYFA</a>
           
           <a href="hakkimizda.html"><i class="fa-solid fa-building ikon"></i>HAKKIMIZDA</a>
           
           <a href="tarifler.php"><i class="fa-solid fa-building ikon"></i>TARİFLER</a>
           <a href="iletisim.php"><i class="fa-solid fa-phone ikon"></i>İLETİŞİM</a>
    </nav>
</section>

  <section class="contact">
    <h1 class="heading">İletişime Geç</h1>

    <div class="row">
    

        <form action="iletisim.php" method="post">
          <div class="inputBox">
            <label for="name">Adınız Soyadınız</label>
            <input type="text" id="name" name="name" placeholder="Ad Soyad" required>
          </div>
          <div class="inputBox">
            <label for="email">E-posta Adresiniz</label>
            <input type="email" id="email" name="email" placeholder="E-posta" required>
          </div>
          <div class="inputBox">
            <label for="phone">Telefon Numaranız</label>
            <input type="tel" id="phone" name="phone" placeholder="Telefon Numarası" required>
          </div>
          <div class="inputBox">
            <label for="subject">Konu</label>
            <input type="text" id="subject" name="subject" placeholder="Konu" required>
          </div>
          <div class="inputBox">
            <label for="message">Mesajınız</label>
            <textarea id="message" name="message" placeholder="Mesaj" required></textarea>
          </div>
  
          <input type="submit" class="btn" value="Gönder">
        </form>

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
      
      <a href="tarifler.php">Tarifler</a>

    </div>

    <div class="inner">

      <div class="helpful_links">
        <div class="inner_list">
          <div class="inner_title">
            <a href="iletisim.php">İletişim</a>
          </div>
          <ul>
          <li>
            <a href="#">@lezzetdünyasi</a></li>
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
if(isset($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["subject"], $_POST["message"]))
{
  $adsoyad=$_POST["name"];
  $email=$_POST["email"];
  $telefon=$_POST["phone"];
  $konu=$_POST["subject"];
  $mesaj=$_POST["message"];


  $ekle="INSERT INTO iletisim( adsoyad, email, telefon, konu, mesaj) 
  VALUES ('".$adsoyad."','".$email."','".$telefon."','".$konu."','".$mesaj."')";

  if($baglan->query($ekle)==TRUE){
    echo"<script>alert('mesajınız başarı ile gönderilmiştir')</script>";
  }
}

?>