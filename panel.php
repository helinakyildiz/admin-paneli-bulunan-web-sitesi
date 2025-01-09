<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Panel</h1>

<?php
session_start();
if ($_SESSION["user"] == "") {
    echo "<script>window.location.href='cikis.php'</script>";
} else {
    echo "Kullanıcı adınız: " . $_SESSION['user'] . "<br>";
    echo "<a href='cikis.php'>ÇIKIŞ YAP </a><br><br><br>";
}
?>

<h2>İletişim Mesajları</h2>
<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>E-mail</th>
    <th>Telefon</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>
  <?php
  include("baglanti.php");
  $sec = "SELECT * FROM iletisim";
  $sonuc = $baglan->query($sec);

  if ($sonuc->num_rows > 0) {
      while ($cek = $sonuc->fetch_assoc()) {
          echo "
          <tr>
          <td>" . $cek['adsoyad'] . "</td>
          <td>" . $cek['email'] . "</td>
          <td>" . $cek['telefon'] . "</td>
          <td>" . $cek['konu'] . "</td>
          <td>" . $cek['mesaj'] . "</td>
          </tr>
          ";
      }
  } else {
      echo "<tr><td colspan='5'>Veritabanında kayıtlı hiçbir veri bulunamamıştır.</td></tr>";
  }
  ?>
</table>

<h2>Tarif Ekle</h2>
<form action="tarif_ekle_islem.php" method="POST" enctype="multipart/form-data">
    <label>Yemek Adı:</label><br>
    <input type="text" name="yemek_adi" required><br><br>

    <label>Tarif:</label><br>
    <textarea name="tarif" rows="5" required></textarea><br><br>

    <label>Kalori:</label><br>
    <input type="number" name="kalori" required><br><br>

    <label>Resim:</label><br>
    <input type="file" name="resim" accept="image/*"><br><br>

    <button type="submit">Ekle</button>
</form>

<h2>Eklenen Tarifler</h2>
<table id="customers">
  <tr>
    <th>Yemek Adı</th>
    <th>Tarif</th>
    <th>Kalori</th>
    <th>Resim</th>
  </tr>
  <?php
  $tarifSec = "SELECT * FROM tarifler ORDER BY created_at DESC";
  $tarifSonuc = $baglan->query($tarifSec);

  if ($tarifSonuc->num_rows > 0) {
      while ($tarif = $tarifSonuc->fetch_assoc()) {
          echo "
          <tr>
          <td>" . $tarif['yemek_adi'] . "</td>
          <td>" . $tarif['tarif'] . "</td>
          <td>" . $tarif['kalori'] . " kcal</td>
          <td>";
          if (!empty($tarif['resim'])) {
              echo "<img src='" . $tarif['resim'] . "' alt='" . $tarif['yemek_adi'] . "' width='100'>";
          }
          echo "</td>
          </tr>
          ";
      }
  } else {
      echo "<tr><td colspan='4'>Henüz tarif eklenmemiş.</td></tr>";
  }
  ?>
</table>

</body>
</html>
