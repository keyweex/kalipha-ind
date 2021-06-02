

<!doctype html>

<head>
   
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- temps d'attente avant de passer sur la page principal -->
    <meta http-equiv="refresh" content="6.5;URL='accueil.php'">
    
</head>

<body>

  <div class="container">
  <div class="typer">
    <div>Bienvenue sur le site Kalipha.com</div>
    <div>Votre site préféré sur la sécurité informatique</div>
  </div>
            

       
<!-- style css -->
<style>

html,
body,
.container
{
  height: 100%;
}

body
{
  background: #111;
  color: white;
}

.container
{
  display: flex;
}

.typer
{
  font-family: monospace;
  font-size: 1.5rem;
  margin: auto;
  padding: 0;
  border-right: 1ch solid #FFFFFF00;
  position: relative;
  animation: color 17s linear forwards;
  text-shadow: 0 0 0.25rem currentColor;
}


.typer::after
{
  content: '';
  position: absolute;
  top: 0;
  right: -1ch;
  bottom: 0;
  width: 1ch;
  display: block;
  animation: caret 1s ease-in infinite forwards;
  background: currentColor;
  box-shadow: 0 0 0.25rem currentColor;
}

.typer > div
{
  width: 0;
  overflow: hidden;
  white-space: pre;  
}

.typer > div:nth-child(1)
{
  --type-width: 33ch;
  animation:
    type 3.6s steps(33, end) 2s forwards,
    type 3s steps(33, end) 8.6s reverse forwards,
    toggle 0s 12.2s forwards;
}

.typer > div:nth-child(2)
{
  height: 0;
  --type-width: 47ch;
  animation:
    toggle 0s 12.2s reverse forwards,
    type 4.8s steps(47, end) 14.2s forwards;
}
 
@keyframes toggle
{
  from { height: auto; }
  to   { height: 0; }
}

@keyframes type
{
  from { width: 0; }
  to   { width: var(--type-width) }
}

@keyframes caret
{
  from { opacity: 1; }
  25%  { opacity: 1; }
  50%  { opacity: 0; }
  to   { opacity: 0; }
}

@keyframes color
{
  from { color: #FF0000; }
  64.21% { color: #FF0000; }
  85.91% { color: #00FF00; }
  to { color: #00FF00; }
}


</style>
    
</body>

</html>