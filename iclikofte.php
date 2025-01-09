<?php
// Veritabanı bağlantısını kur
$conn = new mysqli('localhost', 'root', '', 'yemek_blog');

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Yemek adı TİRAMİSU olan satırı sorgula
$sql = "SELECT resim,yemek_adi,tarif, kalori FROM tarifler WHERE yemek_adi = 'İÇLİ KÖFTE'";
$result = $conn->query($sql);

$resimYolu = '';
$tarif = '';
$kalori = '';
$yemek_adi = '';

if ($result->num_rows > 0) {
    // Sonuçları al
    $row = $result->fetch_assoc();
    $yemek_adi = $row['yemek_adi'];
    $resimYolu = $row['resim'];  // Resim sütunundan gelen değer
    $tarif = $row['tarif'];      // Tarif sütunundan gelen değer
    $kalori = $row['kalori'];    // Kalori sütunundan gelen değer
} else {
    // Varsayılan değerler
    $resimYolu = 'resimler/varsayilan-resim.jpeg';
    $tarif = 'Bu tarif şu anda mevcut değil.';
    $kalori = 'Belirtilmedi';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/7ab486c0f3.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Dünyası</title>
    <link rel="stylesheet" href="css/tarifler.css">
</head>

<body>
    <section id="menu">
        <div id="logo">
            <a href="web1.html">LEZZET DÜNYASI</a>
        </div>
        <nav id="nav">
            <a href="web1.php"><i class="fa-solid fa-house ikon"></i>ANASAYFA</a>
            <a href="hakkimizda.html"><i class="fa-solid fa-building ikon"></i>HAKKIMIZDA</a>
            <a href="projelerimiz.html"><i class="fa-solid fa-building ikon"></i>TARİFLER</a>
            <a href="iletisim.php"><i class="fa-solid fa-phone ikon"></i>İLETİŞİM</a>
        </nav>
    </section>

    <!-- Tarif alanı -->
    <div class="content">
        <div class="recipe-image">
            <img src="<?php echo htmlspecialchars($resimYolu); ?>" alt="Yemek Görseli">
        </div>

        <div class="recipe-info">
            <h2>Yemek Adı: <?php echo htmlspecialchars($yemek_adi); ?></h2>
            <p>Tarif: <?php echo htmlspecialchars($tarif); ?></p>
            <p class="calories">Kalori: <?php echo htmlspecialchars($kalori); ?> kcal</p>
        </div>

        <button class="like-button"><i class="fa-solid fa-thumbs-up"></i> Beğen</button>

        <div class="comment-section">
            <h3>Yorumlar</h3>
            <form class="comment-form">
                <input type="text" name="username" placeholder="Adınız" required>
                <textarea name="comment" placeholder="Yorumunuzu buraya yazın..." rows="5" required></textarea>
                <button type="submit">Gönder</button>
            </form>
        </div>
    </div>

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
            <a href="projelerimiz.html">Projelerimiz</a>
        </div>

        <div class="credit">
            created by <span>Helin Akyıldız</span> | all rights reserved
        </div>
    </section>
</body>

</html>
