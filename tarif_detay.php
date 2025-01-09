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

// ID değerini URL'den al
if (isset($_GET['id'])) {
    $tarif_id = intval($_GET['id']); // Güvenlik için intval() kullanıyoruz

    // Tarif detaylarını çek
    $sql = "SELECT id, resim, yemek_adi, tarif, kalori FROM tarifler WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $tarif_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $tarif = $result->fetch_assoc();
    } else {
        echo "Tarif bulunamadı!";
        exit;
    }
} else {
    echo "Geçersiz istek!";
    exit;
}

// Sayfa başlığı ve içerik için tarif bilgilerini kullanın
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($tarif['yemek_adi']); ?> - Tarif Detayı</title>

    <link rel="stylesheet" href="css/style.css"> <!-- CSS dosyası -->

    
    <style>
body {
    font-family: Arial, sans-serif;
    line-height: 1.4;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
    display: flex;
    flex-direction: column; /* İçeriği dikeyde hizala */
    justify-content: flex-start;
    align-items: center; /* Sayfanın ortasında hizala */
    height: 100vh; /* Sayfa yüksekliğini tam doldur */
    text-align: center;
    padding-bottom: 40px; /* Alt boşluk */
}

/* Başlık ve içerik bölümü */
h1 {
    color: #333;
    font-size: 2.5em; /* Başlık boyutunu biraz daha büyütüyoruz */
    margin-top: 20px;
    margin-bottom: 10px;
    text-align: center;
    border-bottom: 2px solid #ff69b4; /* Başlık altına çizgi */
    padding-bottom: 10px;
    width: 100%; /* Başlık tam genişlikte olacak */
    margin-left: 0;
}

/* Container (içerik kutusu) */
.container {
    width: 90%;
    max-width: 800px; /* Maksimum genişlik arttırıldı */
    background-color: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border: 1px solid #e0e0e0;
    text-align: left;
    margin-top: 20px;
}

/* Resim düzenlemeleri */
img {
    display: block;
    margin: 0 auto 20px auto;
    border-radius: 8px;
    width: 100%; /* Resim genişliğini %100 yaparak sığmasını sağladık */
    max-width: 100%; /* Resim boyutunu sayfaya sığacak şekilde ayarladık */
    height: auto;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Tarif metni */
p {
    font-size: 1.1em; /* Yazı boyutunu biraz büyütüyoruz */
    margin-bottom: 10px; /* Boşlukları biraz azalttık */
    line-height: 1.4; /* Satır yüksekliğini azaltarak daha sıkı yazı */
}
/* Kalori kısmı */
strong {
    font-weight: bold;
    font-size: 1.2em;
    color: #ff69b4;
    display: inline-block; /* Satır içinde yer alması için inline-block yapıyoruz */
    text-align: left; /* Soldan hizalama */
    margin-left: 10px; /* Soldan biraz boşluk */
}


/* Anasayfaya Dön butonu */
a {
    position: fixed; /* Butonu sabit tutar */
    bottom: 0; /* Sayfanın en alt kısmına yerleştirir */
    left: 50%; /* Yatayda ortalar */
    transform: translateX(-50%); /* Butonu tam ortalar */
    display: inline-block;
    text-decoration: none;
    background-color: #ffb6c1;
    color: white;
    padding: 14px 30px;
    border-radius: 5px;
    font-size: 1.1em;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #ff69b4;
}

    </style>
</head>
<body>
    <h1><?php echo htmlspecialchars($tarif['yemek_adi']); ?></h1>
    <img src="<?php echo htmlspecialchars($tarif['resim']); ?>" alt="<?php echo htmlspecialchars($tarif['yemek_adi']); ?>" style="width: 100%; max-width: 400px;">
    
    <p><strong>Tarif:</strong></p>
    <p><?php echo nl2br(htmlspecialchars($tarif['tarif'])); ?></p>
    
    <p><strong>Kalori:</strong> <?php echo htmlspecialchars($tarif['kalori']); ?> kcal</p>
    
    <a href="web1.php">Anasayfaya Dön</a>




    
</body>
</html>
