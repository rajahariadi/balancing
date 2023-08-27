<?php 
// HALAMAN LOGIN

session_start();
$pesan = "";

if(isset($_SESSION['login'])){
   header('location:home-admin.php') || header('location:home-user.php');
}

if(isset($_POST['login'])){
   $userForm = $_POST['username'];
   $passForm = $_POST['password'];

   $userBenar = "admin";
   $passBenar = "admin";

   $userTrue = "user";
   $passTrue = "user";

   if($userForm == $userBenar && $passForm == $passBenar){
      // login
      $_SESSION['login'] = $userBenar;
      // redirect ke hal admin
      header('location:home-admin.php');
   } else if ($userForm == $userTrue && $passTrue == $passTrue) {
      $_SESSION['login'] = $userTrue;
      header('location:home-user.php');
   } else {
      $pesan = "Username dan Password salah";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
</head>
<body>
   <form action="" method="POST">
      <label for="username">Username: </label><br/>
      <input type="text" id="username" name="username" placeholder="Enter Username"><br/>
      <label for="password">Password: </label><br/>
      <input type="password" id="password" name="password" placeholder="Enter Password"><br/>
      <input type="submit" name="login" value="Login">
      <p style="color: red;" ><?= $pesan ?></p>
   </form>
</body>
</html>