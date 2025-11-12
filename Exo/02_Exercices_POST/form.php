<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fomrulaire 2</title>
</head>

<body>
    <h1>Formulaire 2</h1>

    <?php
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $email = htmlspecialchars($_POST["email"]);
        $mdp = htmlspecialchars($_POST["mdp"]);
        $ville = htmlspecialchars($_POST["ville"]);
        $pays = htmlspecialchars($_POST["pays"]);
    ?>

    <form style="display: flex; flex-direction: column;align-items: flex-start; gap:8px" method="post">
        <input type="text" name="nom" id="nom" placeholder="nom" value="<?php echo $nom; ?>">
        <input type="text" name="prenom" id="prenom" placeholder="prenom" value="<?php echo $prenom; ?>">
        <input type="email" name="email" id="email" placeholder="adresse e-mail" value="<?php echo $email; ?>">
        <input type="password" name="mdp" id="mdp" placeholder="mot de passe" value="<?php echo $mdp; ?>">
        <input type="text" name="ville" id="ville" placeholder="ville" value="<?php echo $ville; ?>">
        <input type="text" name="pays" id="pays" placeholder="pays" value="<?php echo $pays; ?>">
        <button type="submit">Envoyer</button>
    </form>

    <?php
    include "traitement.php";
    ?>

</body>

</html>