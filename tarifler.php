<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yemek_blog";

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Yemek tariflerini dinamik olarak getiren fonksiyon
function getRecipeCard($conn, $yemekAdi, $yemekId, $varsayilanResim) {
    $sql = "SELECT resim FROM tarifler WHERE yemek_adi = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $yemekAdi);
    $stmt->execute();
    $result = $stmt->get_result();

    $resimYolu = $varsayilanResim;

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $resimYolu = $row['resim'];
    }

    $stmt->close();

    // Dinamik tarif bağlantısı (ID üzerinden)
    $tarifLink = "tarif_detay.php?id=" . $yemekId; // Güncelleme yapıldı

    // HTML çıktısını döndür
    return "
        <div class='box'>
            <div class='box-head'>
                <img src='" . htmlspecialchars($resimYolu) . "' alt='" . htmlspecialchars($yemekAdi) . "'>
                <h3>" . htmlspecialchars($yemekAdi) . "</h3>
            </div>
            <div class='box-bottom'>
                <a href='" . htmlspecialchars($tarifLink) . "' class='btn-proje'>Tarifi İncele</a>
            </div>
        </div>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/7ab486c0f3.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezzet Dünyası</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/style.css"> <!-- CSS dosyası -->
    <script src="index.js"></script>
</head>
<body>
    <section id="menu">
        <div id="logo">
            <a href="web1.php" style="color: white;">LEZZET DÜNYASI</a>
        </div>
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

    <!-- Slider alanı -->
    <section class="slider">
        <div class="slides">
            <div class="slide"><img src="resimler/images tiramisu.jpeg" alt="Proje 1"></div>
            <div class="slide"><img src="resimler/indir (1).jpeg" alt="Proje 2"></div>
            <div class="slide"><img src="resimler/iclikofte-5.webp" alt="Proje 3"></div>
            <div class="slide"><img src="resimler/indir.jpeg" alt="Proje 4"></div>
        </div>
        <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
        <button class="next" onclick="plusSlides(1)">&#10095;</button>
    </section>

    <!-- Projeler alanı -->
    <section class="projeler">
        <h1>YEMEK TARİFLERİMİZ</h1>
        <div class="box-container">
            <?php
            // Yemek tariflerini dinamik olarak al
            $sql = "SELECT id, yemek_adi FROM tarifler"; // Veritabanındaki tüm yemek adlarını al
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Tarifler varsa, her birini döngü ile ekle
                while ($row = $result->fetch_assoc()) {
                    $yemekAdi = $row['yemek_adi'];
                    $yemekId = $row['id']; // Tarifin ID'si
                    echo getRecipeCard($conn, $yemekAdi, $yemekId, 'resimler/varsayilan-resim.jpeg');
                }
            } else {
                echo "<p>Henüz tarif bulunmamaktadır.</p>";
            }
            ?>
        </div>
    </section>

    <!-- Footer alanı -->
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
                        <li><a href="#">@lezzetdünyasi</a></li>
                        <li><a href="tel:0 532 408 53 94">0533 678 87 87</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="credit">
            created by <span>Helin Akyıldız</span> | all rights reserved
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
