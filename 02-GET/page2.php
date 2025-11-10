<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détail du produit</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="logo">
        <img src="./img/logo_poleS.png" alt="Logo poleS">
    </div>
    <?php
    //--------------------------
    // La superglobale $_GET
    //--------------------------
    // $_GET représente l'url. Il s'agit d'une superglobale, et comme toutes les superglobales, il s'agit d'un array. Superglobale signifie que ce tableau est disponible dans tous les contextes du script, y compris dans l'espace local des fonctions. 

    // Dans notre exemple, les informations transitent dans l'url de la manière suivante :     ?article=jean&couleur=bleu&prix=30
    // La syntaxe de l'url est donc :   page.php?indice1=valeur1&indiceN=valeurN
    // La superglobale $_GET transforme les informations passées dans l'url en cet array : $_GET = array('incide1' => 'valeur1', 'indiceN' => 'valeurN');  

    var_dump($_GET);

    // On vérifie si les index sont définies et pas vide
    if(isset($_GET["clth"]) && isset($_GET["color"]) && isset($_GET["price"]) && !empty($_GET["clth"]) && !empty($_GET["color"]) && !empty($_GET["price"])) {
        echo "<div class='details'>";
        echo "<h1>Description de l'article</h1>";

        // foreach ($_GET as $key => $value) {
        //     if ($key == "price") {
        //         echo "<p>Prix : " . $value . "€</p>";
        //     } else if ($key == "color") {
        //         echo "<p>Couleur : " . $value . "</p>";
        //     } else {
        //         echo "<p>Article : " . $value . "</p>";
        //     }
        // }

        echo "<p>Article : " . $_GET["clth"] . "</p>";
        echo "<p>Couleur : " . $_GET["color"] . "</p>";
        echo "<p>Prix : " . $_GET["price"] . "€</p>";
        
        echo "</div>";
    } else {
        echo "<p class='error'>Aucun article n'a été trouvé</p>";
    }

    if(isset($_GET["produit"]) && !empty($_GET["produit"])) {
        $produit = htmlspecialchars($_GET["produit"]); // On sécurise un minimum les données qu'on affiche

        echo "<p>Résultat de la recherche: $produit</p>";
    } else {
        echo "<p>Aucun résultat trouvé !</p>";
    }

    ?>
</body>

</html>