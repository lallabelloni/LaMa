<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Registration</title>
<meta name="keywords" content="Registration">
<meta name="author" content="Belloni Laura, Contegno Matteo">
<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
<div class="overlay">
   <form>
      <div class="container">
         <header>
         <h2>LaMa</h2>
         <p>Registrati usando una email valida e una password</p>
         </header>
         <div class="field-set">
            <input class="form-input" type="text" name="firstname" placeholder="Nome">
            <input class="form-input" type="text" name="lastname" placeholder="Cognome">
            <input class="form-input" type="text" name="email" placeholder="Email" required>
            <input class="form-input" type="password" name="pass" placeholder="Password" required>
            <input class="form-input" type="password" name="confirm" placeholder="Conferma password" required>
            <button class="log-in" type="submit" name="submit"> Registrati </button>
         </div>
         <div class="other">
            <button class="btn submits frgt-pass">Password dimenticata</button>
            <button class="btn submits sign-up">Accedi</button>
               <i class="fa fa-user-plus" aria-hidden="true"></i>
            </button>
         </div>
      </div>
   </form>
</div>
</body>
</html>