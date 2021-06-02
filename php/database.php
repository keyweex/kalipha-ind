
<!-- connexion à la base de donnéees en php -->
<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=db_kalipha;charset=utf8", "root", "");  // je spécifie que je suis en localhost, puis je lui indique le nom de ma base de données ainsi que l'identifiant et le mot de passe
    }
    catch(PDOException $e)   // catch les erreurs et les affiches
    {
        die('Erreur : '.$e->getMessage());
    }