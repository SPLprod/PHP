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
                header("location: index.php");
                exit;
                
            }
        ?>

<body class="<?php echo isset($_COOKIE['bg']) ? $_COOKIE["bg"] : '' ?>">
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="?" method="POST">
        <input type="radio" id="" name="color" value="red">
        <label for="">Rouge</label><br>

        <input type="radio" id="" name="color" value="green">
        <label for="">Vert</label><br>

        <input type="radio" id="" name="color" value="blue">
        <label for="">Bleu</label><br>

        <input type="submit" value="Appliquer">
    </form>

    <?php
        // isset($_POST["color"] )&& !empty($_POST["color"]) ? setcookie("bg", $_POST["color"], time() + 60*60*24*365) : "";

        // Si POST est établi ET n'est pas vide
        if (isset($_POST["color"] )&& !empty($_POST["color"])) {
            // On crée le cookie "bg" (background) qui a pour valeur POST["color"] (et qui dure très longtemps (1an))
            setcookie("bg", $_POST["color"], time() + 60*60*24*365);
            header("location: index.php");
            exit;
        } 
        var_dump($_COOKIE);

    ?>

    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>

    <h2><a href="?delete_cookie=true">Réinitialiser la couleur</a></h2>


</body>

</html>