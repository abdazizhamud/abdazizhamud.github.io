<?php
// Menghapus cookie dengan mengaturnya kedaluwarsa di masa lalu
setcookie("user", "", time() - 3600, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cookie</title>
</head>
<body>
    <h1>Delete Cookie</h1>
    <p>Cookie telah dihapus! Kembali ke <a href="index.php">halaman utama</a>.</p>
</body>
</html>
