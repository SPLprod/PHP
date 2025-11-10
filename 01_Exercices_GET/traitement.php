<?php


/** Exercice 1 : Affichage des paramètres
 * 
 *  Objectif : Afficher tous les paramètres passés dans l'URL
 * 
 * 
 *  1 . En gardant la page de rendu HTML, utiliser les informations de cette page pour les passer en paramètres d'URL
 * 
 *  2 . Dans ce second fichier nommé : traitement.php, $_GET doit être récupéré, vérifié et ses paramètres affichés sur le navigateur 
 * 
 */

    if (isset($_GET["name"]) && !empty($_GET["name"]) && isset($_GET["price"]) && !empty($_GET["price"])) {
        var_dump($_GET);
    } else {
        echo "<h2 style='color : red'>Error, parameters not found.</h2>";
    }


/** Exercice 2 : Validation des paramètres
 * 
 *  Objectif : Valider les paramètres reçus dans l'URL et afficher un message d'erreur si un paramètre est manquant
 * 
 *  1 . S'assurer que les paramètres article,couleur et prix sont présents dans l'URL
 * 
 *  2. Si un ou plusieurs paramètres manquent, afficher un message d'erreur spécifique pour chacun
 * 
 *  Exemple : "<p> Le paramètre 'Article' est manquant'"
 */

    if (!$_GET["name"]) {
        echo "Missing parameter";
    }
    if (!$_GET["price"]) {
        echo "Missing parameter";
    }
    if (!$_GET["rank"]) {
        echo "Missing parameter";
    }
    
    echo "<br><br>";


/** Exercice 3 : Conversion du prix
 * 
 *  Objectif : Convertir le prix reçu dans l'URL de dollars à euros (utiliser le taux de conversion de 1 dollar = 0.92 euros)
 * 
 *  1 . Récupérer le dollars passé dans l'URL
 * 
 *  2 . Convertir en euros
 * 
 *  3 . Afficher le prix converti
 */

    echo $_GET["price"] * 0.92 . "€";

    echo "<br><br>";

/** Exercice 4 : Affichage d'un message personnalisé
 * 
 *  Objectif : Afficher un message personnalisé en fonction de la couleur passée dans l'URL
 * 
 *  1 . Récupérer la couleur passée dans l'URL
 * 
 *  2 . Afficher un message en fonction de la couleur ( exemple si couleur jaune : "<p> Cette couleur me fait penser au soleil ! </p>)
 * 
 */

    if ($_GET["rank"] == "high") {
        echo "Woaw monsieur a du gout!";
    } elseif ($_GET["rank"] == "mid") {
        echo "Mouais ça passe";
    } elseif ($_GET["rank"] == "low") {
        echo "Pigeon";
    }

    echo "<br><br>";


/** Exercice 5 : Vérification du prix minimum
 * 
 *  Objectif : Vérifier si le prix reçu dans l'URL est supérieur à un montant minimum et afficher un message appriprié
 * 
 *  1 . Déclarer un prix minimum (20 par exemple)
 * 
 *  2 . Comparer le prix reçu dans l'URL avec le prix minimum
 * 
 *  3 . Afficher un message indiquant si le prix est suffisant ou non 
 */

    if ($_GET["price"] > 20) {
        echo "WOAW C'EST CHER TOUT çA!!!";
    } else {
        echo "C'est cheap";
    }