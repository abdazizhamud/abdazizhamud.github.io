<?php
require 'function.php';
if(isset($_POST["register"])){
    if(registrasi($_POST)>0){
        echo " <script> alert('user baru berhasil ditambahkan'); </script> ";

    }
}else{
    echo mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="styles.css">
</head>
<body >
    <header>Data Mahasiswa <strong> Teknik Informatika</strong></header>
    <div class="wrapper">
        <div class="auth-container">
            <form action="" method="post">
                <h1 class="auth-title">Registrasi</h1>
                <div class="auth-form">
                    <input type="text" placeholder="Masukan username" name="username" id="username" required>
                </div>
                <div class="auth-form">
                    <input type="password" placeholder="Masukan Password" name="password" id="password" required>
                </div>
                <div class="auth-form">
                    <input type="password" placeholder="Konfirmasi Password" name="password2" id="password2" required>
                </div>
                <div class="auth-checkbox">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I accept all terms & conditions</label>
                </div>
                <button type="submit" name="register" class="submit-btn">Register Now</button>
    
                <p class="login-link">
                    Already have an account? <a href="login.php">Login now</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
