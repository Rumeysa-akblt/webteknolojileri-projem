<?php

$ad = $_POST['adSoyad'] ?? '';
$email = $_POST['email'] ?? '';
$telefon = $_POST['telefon'] ?? '';
$konu = $_POST['konu'] ?? '';
$mesaj = $_POST['mesajAlani'] ?? '';
$cinsiyet = $_POST['cinsiyet'] ?? 'Belirtilmedi';
$kvkk = isset($_POST['kvkk']) ? 'Onaylandı' : 'Onaylanmadı';

?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <title>Form Sonucu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container py-5">
  <div class="card p-5 shadow">
    <h2 class="text-success mb-4">✅ Form Başarıyla Gönderildi!</h2>
    <table class="table table-bordered">
      <tr><th>Ad Soyad</th><td><?= htmlspecialchars($ad) ?></td></tr>
      <tr><th>E-posta</th><td><?= htmlspecialchars($email) ?></td></tr>
      <tr><th>Telefon</th><td><?= htmlspecialchars($telefon) ?></td></tr>
      <tr><th>Cinsiyet</th><td><?= htmlspecialchars($cinsiyet) ?></td></tr>
      <tr><th>Konu</th><td><?= htmlspecialchars($konu) ?></td></tr>
      <tr><th>Mesaj</th><td><?= htmlspecialchars($mesaj) ?></td></tr>
      <tr><th>KVKK</th><td><?= htmlspecialchars($kvkk) ?></td></tr>
    </table>
    <a href="../iletisim.html" class="btn btn-primary mt-3">Geri Dön</a>
  </div>
</div>
</body>
</html>