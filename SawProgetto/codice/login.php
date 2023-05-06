<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta name="keywords" content="Login">
<meta name="author" content="Belloni Laura, Contegno Matteo">
<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
<?php session_start();?>
   <header>
   <div onclick="window.location.href='home.php'" class="logo">
      <b>LaMa</b>
   <div class="linkTo"> 
      <p> Non hai un account? <a href="registration.php" id="aRegister">Registrati</a></p>
   </div>
   </header>
   <div class = "box-form">
      <p>Accedi usando una email valida e una password</p>
   <form class="form" action="login.php" method="post">
      <input class="form-input" type="text" name="email" placeholder="Email" required><br>
      <input class="form-input" type="password" name="pass" placeholder="Password" required><br>
      <input type="submit" name="submit" value="Accedi" class="button" rel="noopener noreferrer"> 
   </form>
   </div>
   <footer>
      <p class="footer">© 2023 Belloni Laura, Contegno Matteo</p>
   </footer>
</body>
</html>