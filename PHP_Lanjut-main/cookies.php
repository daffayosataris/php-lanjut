<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      setcookie('username', $username, time() + (86400 * 60), "/"); 
      setcookie('password', $password, time() + (86400 * 60), "/"); 
    
    header("Location: login_cookie.php");

    }

    ?>
</body>
</html>