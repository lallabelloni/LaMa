<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Registration</title>
<meta name="keywords" content="Registration">
<meta name="author" content="Belloni Laura, Contegno Matteo">
<link rel="stylesheet" type="text/css" href="../css/registration.css">
</head>
<body>
<?php session_start();?>
   <header>
      <div onclick="window.location.href='home.php'" class="logo">
         <img src="..\layout\lama.svg" alt="Logo di Lama"></img>
         <b>LaMa</b>
      </div>
      <div class="linkTo"> 
	      <p> Hai già un account? <a href="login.php" id="aRegister">Accedi</a></p>
      </div>
   </header>
   <div class = "box-form">
      <p>Registrati usando una email valida e una password</p>
      <form class="form" action="registration.php" method="post">
         <input type="text" name="firstname" placeholder="Nome*" required><br>
         <input type="text" name="lastname" placeholder="Cognome*" required><br>
         <input type="text" name="email" placeholder="Email*" required><br>
         <input type="password" name="pass" placeholder="Password*" required><br>
         <input type="password" name="confirm" placeholder="Conferma password*" required><br>
         <p>*Campo obbligatorio</p>
         <input type="submit" name="submit" value="REGISTRATI" class="button" rel="noopener noreferrer">
      </form>
      
   </div>
   <footer>
      <p class="footer">© 2023 Belloni Laura, Contegno Matteo</p>
   </footer>
</body>
</html>