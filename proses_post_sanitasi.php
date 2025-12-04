<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Hasil Data Mahasiswa</h2>
    
    <div class="result-item">
        <span class="result-label">NIM</span>
        <span><?= $nim ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Nama</span>
        <span><?= $nama ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Umur</span>
        <span><?= $umur ?> Tahun</span>
    </div>

    <div class="result-item">
        <span class="result-label">Tempat/Tgl Lahir</span>
        <span><?= $tempat_lahir ?>, <?= $tanggal_lahir ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">No. HP</span>
        <span><?= $no_hp ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Alamat</span>
        <span><?= $alamat ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Kota</span>
        <span><?= $kota ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Jenis Kelamin</span>
        <span><?= $jk ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Status</span>
        <span><?= $status ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Hobi</span>
        <span><?= $hobi_output ?></span>
    </div>

    <div class="result-item">
        <span class="result-label">Email</span>
        <span><?= $email ?></span>
    </div>

    <a href="Fpost.php" style="display:block; text-align:center; margin-top:20px; text-decoration:none; color:#1a73e8; font-weight:bold;">&larr; Kembali ke Form</a>

</div>

</body>
</html>