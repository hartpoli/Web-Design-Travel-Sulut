<?php 
 
include 'koneksi.php';

// mengkoneksikan dengan database travelsulut
 
error_reporting(0);
 
session_start();

// mulai session
    
if (isset($_SESSION['username'])) {
    header("Location: index.php");
} // jika sudah ada session, maka akan langsung diarahkan ke index.php
 
if (isset($_POST['submit'])) {
    $email = $_POST['email']; // mengambil data dari form
    $password = md5($_POST['password']); // mengambil data dari form
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'"; // query untuk mencocokkan data

    $result = mysqli_query($conn, $sql);
    // hasilnya nanti akan kita panggil berdasarkan variabel $conn pada koneksi.php dan $sql pada baris ke-17

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result); // nantinya kita akan mengambil data dari database yang telah kita panggil
        $_SESSION['username'] = $row['username']; // kita buat session untuk username
        header("Location: index.php"); // dan kita arahkan ke halaman index.php
    } else {
        echo "<script>alert('Email atau password Anda Tidak Valid. Silahkan coba lagi!')</script>"; 
        // jika tidak sesuai maka akan muncul alert
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="asset1/logo1.jpg">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Travel Sulut</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">  <!-- ini adalah alert -->
        <?php echo $_SESSION['error']?> <!-- ini adalah session error -->
    </div>
 
    <div class="container"> <!-- ini adalah container -->
        <form action="" method="POST" class="login-email"> <!-- ini adalah form -->
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p> <!-- ini adalah login-text -->
            <div class="input-group"> <!-- ini adalah input-group -->
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required> <!-- ini adalah input email -->
            </div>
            <div class="input-group">  <!-- ini adalah input-group -->
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> <!-- ini adalah input password --> 
            </div>
            <div class="input-group"> <!-- ini adalah input-group -->
                <button name="submit" class="btn">Login </button> <!-- ini adalah button -->
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="registrasi.php">Register</a></p> <!-- ini adalah login-register-text -->
        </form>
    </div>
</body>
</html>