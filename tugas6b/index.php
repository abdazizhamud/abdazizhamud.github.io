<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
}
require 'function.php';
$dataMhs = query("SELECT * FROM dataStudent");
$number=1
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data MHS Table</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        Data Mahasiswa <strong> Teknik Informatika</strong>
        <a href="logout.php">
            <button class="btn btn-primary btn-sm" >Logoff</button>
        </a>
    </header>
    <div class="table-container">
        <div class="title-section">
            <h3>Data Mahasiswa</h3>
            <div  class="add-button ">
                <a href="tambah.php" class="btn btn-primary btn-sm" role="button">Tambah</a>
            </div> 
        </div>
        <table class="table table-striped table-bordered">
            <thead class="center">
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataMhs as $row):?>
                <tr>
                    <td><?php echo $number++?></td>
                    <td> <?php echo $row["npm"] ?> </td>
                    <td> <?php echo $row["nama"] ?> </td>
                    <td> <?php echo $row["alamat"] ?> </td>
                    <td> <?php echo $row["tgl_lhr"] ?> </td>
                    <td> <?php echo $row["jk"] ?> </td>
                    <td> <?php echo $row["email"] ?> </td>
                    <td>
                        <div class="action-button-group">
                            <a style="text-align:center;"href="hapus.php?id=<?= $row["id"];?>" class="btn btn-danger btn-sm text-center" role="button" onclick="return confirm('yakin?')">Hapus</a>
                            <a style="text-align:center;"href="update.php?id=<?= $row["id"];?>" class="btn btn-warning btn-sm text-center" role="button">Edit</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</body>
</html>
