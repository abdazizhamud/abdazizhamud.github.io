<?php
// Mengatur cookie yang akan disimpan selama 1 jam (3600 detik)
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // "/" berarti cookie tersedia di seluruh domain
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
</head>
<body>
    <h1>Set Cookie</h1>
    <p>Cookie telah disimpan! Kembali ke <a href="index.php">halaman utama</a>.</p>
</body>
</html>
