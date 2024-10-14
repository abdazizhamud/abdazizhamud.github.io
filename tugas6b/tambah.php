<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
}
require 'function.php';
if(isset($_POST["submit"])){
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('Data Berhasil Ditambah');
                document.location.href='index.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('Data gagal Ditambah');
                document.location.href='index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>Data Mahasiswa <strong> Teknik Informatika</strong></header>
    <div class="login-container">
        <div class="title-section">
            <h3>Tambah Data</h3>
            <div class="add-button ">
                <a href="index.php" class="btn btn-primary btn-sm" role="button">Kembali</a>
            </div> 
        </div>
        <div class="form-group-parent">
            <form action="" method="post">
                <div class="form-group" >
                    <label for="npm">NPM</label>
                    <input type="text" id="npm" name="npm" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <input type="date" id="tanggalLahir" name="tanggalLahir" required>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender">
                        <option value="Pilih Gender" disabled selected>Pilih Gender</option>
                        <option value="Laki-laki">Laki Laki</option>
                        <option value="Perempuan">Perempuan </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button class="submit-button" type="submit" name="submit">Tambah Data</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>

</body>
</html>