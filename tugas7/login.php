<?php
session_start();
require 'function.php'; // Ensure your database connection is set up here

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit; // Always exit after redirecting
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            $_SESSION["level"] = $row["level"]; // Store user level in session

            header("Location: index.php");
            exit; // Always exit after redirecting
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>Data Mahasiswa Teknik Informatika</header>
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
                    <input type="checkbox" id="remember">
                    <label for="remember">Ingat Saya</label>
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
