<?php
    session_start();
    if(isset($_SESSION["login"])){
        header("Location: index.php");
    }
    require 'function.php';
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $hasil=mysqli_query($conn, "SELECT * from users WHERE username='$username'");
        if(mysqli_num_rows($hasil)===1){
            $row=mysqli_fetch_assoc($hasil);
            if(password_verify($password, $row["password"])){
                $_SESSION["login"]=true;
                header("Location: index.php");
                exit;
            }
        }
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
                <h1 class="auth-title">Login</h1>
                <div class="auth-form">
                    <input type="text" placeholder="Masukan username" name="username" id="username" required>
                </div>
                
                <div class="auth-form">
                    <input type="password" placeholder="Masukan Password"  name="password" id="password" required>
                </div>
                <div class="auth-checkbox">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I accept all terms & conditions</label>
                </div>
                <div class="auth-checkbox">
                    <input type="checkbox" id="terms" >
                    <label for="terms">Ingat Saya</label>
                </div>
                <button type="submit" name="login" class="submit-btn">Login Now</button>
    
                <p class="login-link">
                    Belum Punya Akun? <a href="registrasi.php">Register Now</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
