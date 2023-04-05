<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Login</title>
<meta name="keywords" content="Login">
<meta name="author" content="Belloni Laura, Contegno Matteo">
<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
<div class="container">
   <form>
      <header>
      <h2>LaMa</h2>
      <p>Accedi usando una email e una password</p>
      </header>
      <div class="field-set">
         <input class="form-input" type="text" name="email" placeholder="Email" required>
         <input class="form-input" type="password" name="pass" placeholder="Password" required>
         <button class="log-in" type="submit" name="submit"> Accedi </button>
         <div class="other">
            <button class="submits frgt-pass">Password dimenticata</button>
            <button class="submits sign-up">Registrati</button>
               <i class="fa fa-user-plus" aria-hidden="true"></i>
            </button>
         </div>
         </div>
      </div>
   </form>
</div>
</body>
</html>