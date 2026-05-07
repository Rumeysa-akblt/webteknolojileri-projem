<?php

// Doğru kullanıcı bilgileri - kendin değiştir
$dogruKullanici = "rumeysa.akbulut2@ogr.sakarya.edu.tr";
$dogruSifre = "B251210103";

$kullanici = $_POST['kullaniciAdi'] ?? '';
$sifre = $_POST['sifre'] ?? '';

// Boş alan kontrolü
if ($kullanici === '' || $sifre === '') {
    header("Location: ../login.html?hata=bos");
    exit();
}

// Kullanıcı adı ve şifre kontrolü
if ($kullanici === $dogruKullanici && $sifre === $dogruSifre) {
    // Başarılı giriş
    echo '<!DOCTYPE html>
    <html lang="tr">
    <head>
      <meta charset="UTF-8" />
      <title>Hoşgeldiniz</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
    <div class="container py-5 text-center">
      <div class="card p-5 shadow mx-auto" style="max-width:500px;">
        <i class="bi bi-check-circle-fill text-success" style="font-size:4rem;"></i>
        <h2 class="mt-3 text-success">Hoşgeldiniz!</h2>
        <p class="lead">' . htmlspecialchars($dogruSifre) . '</p>
        <a href="../index.html" class="btn btn-primary mt-3">Ana Sayfaya Git</a>
      </div>
    </div>
    </body>
    </html>';
} else {
    // Hatalı giriş
    header("Location: ../login.html?hata=yanlis");
    exit();
}
?>