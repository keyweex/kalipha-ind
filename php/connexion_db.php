

<!-- page de connexion php -->
<?php 

    session_start(); // Démarrage de la session
    require_once 'database.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['email']) && !empty($_POST['password'])) // Vérifie si il existe les champs email, password et qu'ils ne sont pas vident
    {
        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        $email = strtolower($email); // email transformé en minuscule
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT pseudo, email, password FROM kalipha WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        

        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
            // Si le mail est bon niveau format
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                // Si le mot de passe est le bon
                if(password_verify($password, $data['password']))
                {
                    // On créer la session et on redirige sur loading.php
                    $_SESSION['user'] = $data['email'];
                    header('Location: loading.php');
                    die();
                }else{ header('Location:connexion.php?login_err=password'); die(); } // Sinon message d'erreur
            }else{ header('Location:connexion.php?login_err=email'); die(); }
        }else{ header('Location:connexion.php?login_err=already'); die(); }
    }