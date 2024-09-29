<?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $birthplace=$_POST['birthplace'];
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];
    $hobi=$_POST['hobi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pribadi</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding:0;
            padding-top:20px;
        }
        .container{
            padding:20px;
            max-width:600px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 style="text-align:center;">Hasil Formulir</h2>
        <p>Nama: <span><?php echo strtoupper($nama)?></span></p>
        <p>Alamat: <span><?php echo strtoupper($alamat)?></span></p>
        <p>Tempat Lahir: <span><?php echo $birthplace?></span></p>
        <p>Tanggal Lahir: <span><?php echo $birthdate?></span></p>
        <p>Gender: <span><?php echo $gender?></span></p>
        <p>Hobi: <span><?php echo $hobi?></span></p>
    </div>
</body>
</html>