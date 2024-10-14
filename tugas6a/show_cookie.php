<?php
$cookie_name = "user";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cookie</title>
</head>
<body>
    <h1>Show Cookie</h1>
    <?php
    if(isset($_COOKIE[$cookie_name])) {
        echo "Cookie '$cookie_name' telah diatur!<br>";
        echo "Nilai cookie: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie '$cookie_name' belum diatur.";
    }
    ?>
    <p><a href="index.php">Kembali ke halaman utama</a></p>
</body>
</html>
