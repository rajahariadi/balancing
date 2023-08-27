<?php 
session_start();

if(!isset($_SESSION['login'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Halaman User</title>
</head>
<body>
   <h1>Selamat Datang di Halaman User</h1>
   <a href="logout.php">Logout</a>
</body>
</html>