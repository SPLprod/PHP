<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases en PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="img_div">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>

    <h1>Les vairables PHP</h1>

    <div class="topnav">
        <a href="01_bases.php">01.Les bases</a>
        <a href="02_variables.php">02.Les variables</a>
        <a href="03_constantes.php">03.Les constantes</a>
        <a href="04_arithmetiques.php">04.Arithméthiques</a>
    </div>

    <?php
        echo "On utilise la méthode define() pour créer une constante. Elle prend 2 arguments, le nom de sa constante et sa valeur.";

        echo "<br>";
        echo "<br>";

        define("HAPPY", "Pffff non parce qu'on commence PHP");

        echo HAPPY;

        echo "<br>";
        echo "<br>";

        // Concaténation
        echo "Es-tu heureux ?" . HAPPY;

        echo "<br>";
        echo "<br>";

        echo "<h2>Constante magiques !!!</h2>";

        echo "<br>";
        echo "<br>";

        echo __DIR__ . "<br>"; // affiche le nom du chemin complet du dossier
        echo __FILE__ . "<br>"; // affiche le nom du chemin complet du fichier

    ?>
    
</body>
</html>