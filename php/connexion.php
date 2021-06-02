

<!DOCTYPE html>

<head>

</head>
<body>

  <!-- class css -->
  <div class="noise"></div>
  <div class="overlay"></div>
  <div class="terminal">
  <div class="login-form">

  <!-- erreur login php -->
  <?php 
    if(isset($_GET['login_err']))
    {
      $err = htmlspecialchars($_GET['login_err']);
      switch($err)
      {
        case 'password':
  ?>
    <div class="alert alert-danger">
    <strong>Erreur</strong> mot de passe incorrect
    </div>

  <?php
    break;
    case 'email':
  ?>
    <div class="alert alert-danger">
    <strong>Erreur</strong> email incorrect
    </div>

  <?php
    break;
    case 'already':
  ?>
    <div class="alert alert-danger">
    <strong>Erreur</strong> compte non existant
    </div>
  <?php
    break;
    }
      }
  ?> 
            
<!-- methode POST -->
<form action="connexion_db.php" method="post">

  <h1 class="text-center">Se Connecter</h1>    

  <div class="form-group">
  <div class="editor-field editor-field__textbox">
  <div class="editor-field__label-container">
  <label class="editor-field__label">@Email</label>
  </div>

  <input type="email" name="email" class="form-control" placeholder="Votre Email" required="required" autocomplete="off">
  </div>

  <br>

  <div class="form-group">
  <div class="editor-field editor-field__textbox">
  <div class="editor-field__label-container">
  <label class="editor-field__label">Password</label> 
  
  <br>

  <input type="password" name="password" class="form-control" placeholder="Votre mot de passe" required="required" autocomplete="off">
  </div>

  <br>

  <div class="form-group">
  <button type="submit" class="btn btn-primary btn-block">Connexion</button>
  </div>  

</form>

<br>
<br>

<!-- bouton lien vers la page inscription -->
<p class="text-center"><a href="inscription.php"> --Inscription-- </a></p>

<!-- style css -->
<style>
    @import 'https://fonts.googleapis.com/css?family=Inconsolata';

html {
  min-height: 100%;
}

body {
 
  height: 100%;
  background-color: #000000;
  background-image: radial-gradient(#11581E, #041607), url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Inconsolata', Helvetica, sans-serif;
  font-size: 1.5rem;
  color: rgba(128, 255, 128, 0.8);
  text-shadow:
      0 0 1ex rgba(51, 255, 51, 1),
      0 0 2px rgba(255, 255, 255, 0.8);
}

.noise {
  pointer-events: none;
  position: absolute;
  width: 100%;
  height: 100%;
  background-image: url("https://media.giphy.com/media/oEI9uBYSzLpBK/giphy.gif");
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
  opacity: .02;
}

.overlay {
  pointer-events: none;
  position: absolute;
  width: 100%;
  height: 100%;
  background:
      repeating-linear-gradient(
      180deg,
      rgba(0, 0, 0, 0) 0,
      rgba(0, 0, 0, 0.3) 50%,
      rgba(0, 0, 0, 0) 100%);
  background-size: auto 4px;
  z-index: 1;
}

.overlay::before {
  content: "";
  pointer-events: none;
  position: absolute;
  display: block;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(
      0deg,
      transparent 0%,
      rgba(32, 128, 32, 0.2) 2%,
      rgba(32, 128, 32, 0.8) 3%,
      rgba(32, 128, 32, 0.2) 3%,
      transparent 100%);
  background-repeat: no-repeat;
  animation: scan 3s linear 0s infinite;
}

@keyframes scan {
  0%        { background-position: 0 -100vh; }
  35%, 100% { background-position: 0 100vh; }
}

.terminal {
  box-sizing: inherit;
  position: absolute;
  height: 100%;
  width: 1000px;
  max-width: 100%;
  padding: 4rem;
  text-transform: uppercase;
}

.output {
  color: rgba(128, 255, 128, 0.8);
  text-shadow:
      0 0 1px rgba(51, 255, 51, 0.4),
      0 0 2px rgba(255, 255, 255, 0.8);
}

.output::before {
  content: "> ";
}

/*
.input {
  color: rgba(192, 255, 192, 0.8);
  text-shadow:
      0 0 1px rgba(51, 255, 51, 0.4),
      0 0 2px rgba(255, 255, 255, 0.8);
}

.input::before {
  content: "$ ";
}
*/

a {
  color: #fff;
  text-decoration: none;
}

a::before {
  content: "[";
}

a::after {
  content: "]";
}

.errorcode {
  color: white;
}
</style> 

</body>

</html>
