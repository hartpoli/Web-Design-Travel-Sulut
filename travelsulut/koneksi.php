<?php 
 
$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "travelsulut";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>