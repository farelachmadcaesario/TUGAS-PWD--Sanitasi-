<?php

// Fungsi sanitasi (Bagus, pertahankan ini!)
function bersihkan($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// PERBAIKAN 1: Gunakan '??' (Null Coalescing)
// Artinya: Ambil $_POST['nim'], tapi jika tidak ada, isi dengan string kosong ''
// Kita bersihkan SETELAH memastikan datanya ada.

$nim           = bersihkan($_POST['nim'] ?? ''); 
$nama          = bersihkan($_POST['nama'] ?? '');
$umur          = bersihkan($_POST['umur'] ?? '');
$tempat_lahir  = bersihkan($_POST['tempat_lahir'] ?? '');
$tanggal_lahir = bersihkan($_POST['tanggal_lahir'] ?? '');
$no_hp         = bersihkan($_POST['no_hp'] ?? ''); // Pastikan HTML name="no_hp"
$alamat        = bersihkan($_POST['alamat'] ?? '');
$email         = bersihkan($_POST['email'] ?? '');

// Sanitasi kota
$kota = bersihkan($_POST['kota'] ?? '-');

// Sanitasi jenis kelamin
$jk = bersihkan($_POST['jk'] ?? '-');

// Sanitasi status kawin
$status = bersihkan($_POST['status'] ?? '-');

// Sanitasi checkbox hobi
$hobi_output = "Tidak ada hobi"; // Default value
if (!empty($_POST['hobi'])) {
    $hobi_list = [];
    foreach ($_POST['hobi'] as $h) {
        $hobi_list[] = bersihkan($h);
    }
    $hobi_output = implode(", ", $hobi_list);
}
?>

<!DOCTYPE html>
<html lang="id"> <head>
    <meta charset="UTF-8">
    <title>Hasil Data POST</title>
    <style>
        /* Sedikit CSS agar mata tidak sakit membacanya */
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        b { display: inline-block; width: 120px; }
    </style>
</head>
<body>

<h2>Hasil Input Data Mahasiswa (Metode POST)</h2>

<p><b>NIM:</b> <?= $nim ?></p>
<p><b>Nama:</b> <?= $nama ?></p>
<p><b>Umur:</b> <?= $umur ?></p>
<p><b>Tempat Lahir:</b> <?= $tempat_lahir ?></p>
<p><b>Tanggal Lahir:</b> <?= $tanggal_lahir ?></p>
<p><b>No HP:</b> <?= $no_hp ?></p>
<p><b>Alamat:</b> <?= $alamat ?></p>

<p><b>Kota:</b> <?= $kota ?></p>

<p><b>Jenis Kelamin:</b> <?= $jk ?></p>
<p><b>Status:</b> <?= $status ?></p>
<p><b>Hobi:</b> <?= $hobi_output ?></p>
<p><b>Email:</b> <?= $email ?></p>

</body>
</html>