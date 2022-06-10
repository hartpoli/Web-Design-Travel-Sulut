<?php 
 
include 'koneksi.php'; // Include koneksi.php
 
error_reporting(0); // Menghilangkan error
 
session_start(); // Memulai session
 
if (isset($_SESSION['username'])) { // Jika session username ada
    header("Location: index.php"); // Redirect ke index.php
}

if (isset($_POST['submit'])) { // Jika tombol submit ditekan
    $username = $_POST['username']; // Ambil isi dari inputan username
    $email = $_POST['email']; // Ambil isi dari inputan email
    $password = md5($_POST['password']); // Ambil isi dari inputan password dan encrypt dengan md5
    $cpassword = md5($_POST['cpassword']); // Ambil isi dari inputan confirm password dan encrypt dengan md5
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'"; // Query untuk memilih semua data dari tabel users
        $result = mysqli_query($conn, $sql); // Eksekusi querynya
        if (!$result->num_rows > 0) { // Jika data tidak ada
            $sql = "INSERT INTO users (username, email, password) 
                    VALUES ('$username', '$email', '$password')"; // Query untuk menambahkan data ke tabel users (username, email, password)
            $result = mysqli_query($conn, $sql); // Eksekusi query
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>"; // Alert jika berhasil
                $username = ""; // Setelah berhasil, kosongkan data username
                $email = ""; // Setelah berhasil, kosongkan data email
                $_POST['password'] = ""; // Setelah berhasil, kosongkan data password
                $_POST['cpassword'] = ""; // Setelah berhasil, kosongkan data confirm password
            } else {
                echo "<script>alert('Maaf! Terjadi kesalahan.')</script>"; // Alert jika gagal
            }
        } else {
            echo "<script>alert('Maaf! Email Sudah Terdaftar.')</script>"; // Alert jika email sudah terdaftar
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>"; // Jika password dan confirm password tidak sesuai
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
    <link rel="icon" href="asset1/logo1.jpg">
    
    
    <title>Travelsulut Register</title> <!-- Judul -->
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email"> <!-- Form untuk login -->
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p> 
            <div class="input-group"> <!-- Input username -->
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group"> <!-- Input email -->
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group"> <!-- Input password -->
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group"> <!-- Input confirm password -->
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group"> <!-- Input submit -->
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p> <!-- Link untuk login -->
        </form> <!-- AKHIR FORM -->
    </div>
</body>
</html>