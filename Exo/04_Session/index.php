<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulaire avec $_SESSION   </h1>
    
    <form style="display: flex; flex-direction: column;align-items: flex-start; gap:8px" action="?" method="post">
    <input type="text" name="nom" id="nom" placeholder="nom">
    <input type="text" name="prenom" id="prenom" placeholder="prénom">
    <input type="email" name="email" id="email" placeholder="adresse email">
    <input type="password" name="mdp" id="mdp" placeholder="mot de passe">
    <button type="submit">Envoyer</button>
    </form>

    <?php 
        include "traitement.php";
    
    ?>
</body>
</html>