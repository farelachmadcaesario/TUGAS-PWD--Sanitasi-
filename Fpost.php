<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa (Full Validasi)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Input Data Mahasiswa</h2>
    
    <form action="proses_post_sanitasi.php" method="POST" id="formMahasiswa">
        
        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" id="nim" maxlength="14" placeholder=". . . . . . . . . . . . . .">
            <small class="error-msg" id="error-nim"></small>
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Nama Lengkap...">
            <small class="error-msg" id="error-nama"></small>
        </div>

        <div class="form-group">
            <label>Umur</label>
            <input type="text" name="umur" id="umur" placeholder="Contoh: 19">
            <small class="error-msg" id="error-umur"></small>
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" placeholder="Kota kelahiran">
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" rows="3" placeholder="Alamat lengkap..."></textarea>
        </div>

        <div class="form-group">
            <label>No. HP</label>
            <input type="text" name="no_hp" placeholder="08xxxx">
        </div>

        <div class="form-group">
            <label>Kota</label>
            <select name="kota">
                <option value="">-- Pilih Kota --</option>
                <option value="Semarang">Semarang</option>
                <option value="Solo">Solo</option>
                <option value="Salatiga">Salatiga</option>
                <option value="Kudus">Kudus</option>
                <option value="Pekalongan">Pekalongan</option>
            </select>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <label><input type="radio" name="jk" value="Laki-laki"> Laki-laki</label>
                <label><input type="radio" name="jk" value="Perempuan"> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div class="radio-group">
                <label><input type="radio" name="status" value="Kawin"> Kawin</label>
                <label><input type="radio" name="status" value="Belum Kawin"> Belum Kawin</label>
            </div>
        </div>

        <div class="form-group">
            <label>Hobi</label>
            <div class="checkbox-group">
                <label><input type="checkbox" name="hobi[]" value="Membaca"> Membaca</label>
                <label><input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</label>
                <label><input type="checkbox" name="hobi[]" value="Musik"> Musik</label>
                <label><input type="checkbox" name="hobi[]" value="Traveling"> Traveling</label>
            </div>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="nama@email.com">
        </div>

        <input type="submit" value="Kirim Data" id="btnSubmit">
    </form>
</div>
<script src="script.js"></script>
</body>
</html> 