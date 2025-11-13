<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Bienvenue <?php echo htmlspecialchars($_SESSION["prenom"]) ?></h1>

<h2>Infos :</h2>

<ul>
    <li><?php echo "Nom : " . htmlspecialchars($_SESSION["nom"]) ?></li>
    <li><?php echo "Prénom : " . htmlspecialchars($_SESSION["prenom"]) ?></li>
    <li><?php echo "Adresse email : " . htmlspecialchars($_SESSION["email"]) ?></li>
    <li><?php echo "Mot de passe : " . htmlspecialchars($_SESSION["mdp"]) ?></li>
</ul>

<a href="?deco=1">Déconnexion</a>


<?php 

    if (isset($_GET["deco"]) && !empty($_GET["deco"]) && $_GET["deco"] == 1) {
        $_GET["deco"] = 0;
        $_SESSION = [];
        session_destroy();
        header("location:index.php");
        die();
    }

?>

</body>
</html>