<!DOCTYPE html>
<html>
<head>
    <title>Form Data (POST)</title>
</head>
<body>

<h2>Form Input Data Mahasiswa - POST</h2>
<form action="proses_post_sanitasi.php" method="POST">
    NIM : <input type="text" name="nim"><br><br>
    Nama : <input type="text" name="nama"><br><br>
    Umur : <input type="number" name="umur"><br><br>
    Tempat Lahir : <input type="text" name="tempat_lahir"><br><br>
    Tanggal Lahir : <input type="date" name="tanggal_lahir"><br><br>
    Alamat : <br>
    <textarea name="alamat" rows="4" cols="30"></textarea><br><br>
    
    No. HP : <input type="text" name="no_hp"><br><br>
    
    Kota :
    <select name="kota">
        <option value="Semarang">Semarang</option>
        <option value="Solo">Solo</option>
        <option value="Salatiga">Salatiga</option>
        <option value="Kudus">Kudus</option>
        <option value="Pekalongan">Pekalongan</option>
    </select><br><br>

    Jenis Kelamin :<br>
    <input type="radio" name="jk" value="Laki-laki"> Laki-laki
    <input type="radio" name="jk" value="Perempuan"> Perempuan
    <br><br>

    Status : <br>
    <input type="radio" name="status" value="kawin"> Kawin
    <input type="radio" name="status" value="belum kawin"> Belum Kawin
    <br><br>

    Hobi : <br>
    <input type="checkbox" name="hobi[]" value="Membaca"> Membaca <br> 
    <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga <br> 
    <input type="checkbox" name="hobi[]" value="Musik"> Musik <br> 
    <input type="checkbox" name="hobi[]" value="Traveling"> Traveling <br> 
    <br><br>

    Email : <input type="email" name="email"><br><br>
    <input type="submit" value="Kirim">
</form>

</body>
</html>