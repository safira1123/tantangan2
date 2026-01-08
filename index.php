<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program PHP Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .box {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #e9f5ff;
            border-left: 5px solid #2196f3;
        }
        .box p {
            margin: 5px 0;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
// ===== BIODATA =====
$nama = "Andi";
$tahun_lahir = 2005;
$tahun_sekarang = 2026;
$umur = $tahun_sekarang - $tahun_lahir;

// ===== PERHITUNGAN =====
$a = 10;
$b = 5;
$hasil = $a + $b;
?>

<div class="container">
    <h2>Program PHP Sederhana</h2>

    <div class="box">
        <h3>Biodata</h3>
        <p>Nama: <?= $nama; ?></p>
        <p>Tahun Lahir: <?= $tahun_lahir; ?></p>
        <p>Umur: <?= $umur; ?> tahun</p>
    </div>

    <div class="box">
        <h3>Perhitungan</h3>
        <p>Nilai A: <?= $a; ?></p>
        <p>Nilai B: <?= $b; ?></p>
        <p>Hasil A + B: <?= $hasil; ?></p>
    </div>

    <div class="footer">
        © 2026 - Belajar PHP
    </div>
</div>

</body>
</html>
