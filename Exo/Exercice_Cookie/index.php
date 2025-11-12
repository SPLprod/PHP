<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de couleur de fond</title>
    <link rel="stylesheet" href="css/style.css">
</head>
        <?php
            if (isset($_GET["delete_cookie"])) {
                setcookie("bg", "", time() - 3600);
                
            }
        ?>

<body class="<?php echo isset($_COOKIE['bg']) ? $_COOKIE["bg"] : '' ?>">
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="" method="POST">
        <input type="radio" id="" name="color" value="red">
        <label for="">Rouge</label><br>

        <input type="radio" id="" name="color" value="green">
        <label for="">Vert</label><br>

        <input type="radio" id="" name="color" value="blue">
        <label for="">Bleu</label><br>

        <input type="submit" value="Appliquer">
    </form>

    <?php
        isset($_POST["color"] )&& !empty($_POST["color"]) ? setcookie("bg", $_POST["color"], time() + 60*60*24*365) : "";
    ?>

    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>

    <h2><a href="?delete_cookie=true">Réinitialiser la couleur</a></h2>


</body>

</html>