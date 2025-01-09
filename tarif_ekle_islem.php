<?php
include("baglanti.php");

// Formdan gelen veriler
$yemek_adi = $_POST['yemek_adi'];
$tarif = $_POST['tarif'];
$kalori = $_POST['kalori'];

// Resim yükleme işlemi
$resim = null;

if (!empty($_FILES['resim']['name'])) {
    $hedef_klasor = 'resimler/'; 
    
    if (!file_exists($hedef_klasor)) {
        mkdir($hedef_klasor, 0777, true);
    }
    
    $resim = $hedef_klasor . basename($_FILES['resim']['name']);
    
    if (!move_uploaded_file($_FILES['resim']['tmp_name'], $resim)) {
        die("Resim yükleme işlemi başarısız oldu!");
    }
}

// Veritabanına ekleme
$sql = "INSERT INTO tarifler (yemek_adi, tarif, kalori, resim) VALUES ('$yemek_adi', '$tarif', $kalori, '$resim')";

if ($baglan->query($sql) === TRUE) {
    echo "<script>alert('Tarif başarıyla eklendi!'); window.location.href='panel.php';</script>";
} else {
    echo "Hata: " . $sql . "<br>" . $baglan->error;
}

$baglan->close();
?>
