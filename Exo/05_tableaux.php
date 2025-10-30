<?php

/**Exercice 1 : Créer un tableau simple
 *  Objectif : Créez un tableau contenant les noms de vos cinq films préférés.
 *  Instructions :
 *  Déclarez le tableau avec les titres des films.
 *  Affichez chaque film sur une ligne séparée dans un var_dump().
 */

    $fav_movies = ["Retour vers le Futur", "Truman show", "Terminator", "Ready Player One", "Wakfu OAV"];

    var_dump($fav_movies[0]);
    var_dump($fav_movies[1]);
    var_dump($fav_movies[2]);
    var_dump($fav_movies[3]);
    var_dump($fav_movies[4]);

/** Exercice 2 : Ajouter et supprimer des éléments d'un tableau
 *   Objectif : Manipulez un tableau en ajoutant et en supprimant des éléments.
 *   Instructions :
 *   Créez un tableau avec quelques fruits.
 *   Ajoutez un fruit à la fin du tableau.
 *   Supprimez le premier fruit du tableau. Chercher la méthode qui permet de le faire
 *   Affichez le tableau modifié.
 */

    $fruits = ["pomme", "poire", "banane", "citron"];

    $fruits[] = "Cassis";
    unset($fruits[0]);

    print_r($fruits);

    echo "<br><br>";

/** Exercice 3 : Créer et afficher un tableau associatif
 *   Objectif : Travaillez avec un tableau associatif.
 *   Instructions :
 *   Créez un tableau associatif qui contient les informations suivantes : prénom, nom, et âge.
 *   Affichez chaque information avec une phrase descriptive.
 */

    $guilty = [
        "nom" => "Flament",
        "prénom" => "Maël ",
        "age" => 21
    ];

    echo "L'individu se nomme " . $guilty["prénom"] . $guilty["nom"] . ", il est agé de " . $guilty["age"] . " ans.";
    echo "<br><br>";

/**Exercice 4 : Compter les éléments d'un tableau
 *  Objectif : Utilisez les fonctions count() et sizeof().
 *  Instructions :
 *  Créez un tableau avec plusieurs villes.
 *  Affichez le nombre d'éléments dans le tableau.
 */

    $villes = ["Paris", "Montmorency", "Fontainebleau", "Montpelier"];

    echo sizeof($villes);
    echo "<br><br>";

/** Exercice 5 : Créer un tableau multidimensionnel
 *   Objectif : Créez un tableau multidimensionnel et accédez à ses éléments.
 *   Instructions :
 *   Créez un tableau multidimensionnel avec des informations sur plusieurs étudiants : prénom, nom, et note.
 *   Affichez la note du premier étudiant.
 */

    $students = [
        0 => [
            "prenom" => "Jean",
            "nom" => "Charles",
            "note" => 15
        ],
        1 => [
            "prenom" => "Saliha",
            "nom" => "JeSaisPas",
            "note" => 20
        ],
        2 => [
            "prenom" => "Moi",
            "nom" => "Encore",
            "note" => 8.5
        ]
    ];

    echo $students[0]["note"];
    echo "<br><br>";

/** Exercice 6 : Modifier un tableau multidimensionnel
 *   Objectif : Modifiez un tableau multidimensionnel.
 *   Instructions :
 *   Utilisez le tableau multidimensionnel créé dans l'exercice précédent.
 *   Changez la note du deuxième étudiant.
 *   Affichez toutes les informations du tableau modifié.
 */

    $students[1]["note"] = 19.5;

    print_r($students);
    echo "<br><br>";

/** Exercice 7 : Boucle for pour parcourir un tableau
 *   Objectif : Utilisez une boucle for pour parcourir un tableau.
 *   Instructions :
 *   Créez un tableau avec les mois de l'année.
 *   Utilisez une boucle for pour afficher chaque mois.
 */

    $month = ["January", "February", "March", "April", "May", "June", "Jully", "August", "September (do you remember ?)", "October", "November", "December"];

    foreach ($month as $months ) {
        echo "Month :  $months <br>";
    }
    echo "<br><br>";

/** Exercice 8 bonus : Rechercher une valeur dans un tableau
 *   Objectif : Cherchez une valeur spécifique dans un tableau.
 *   Instructions :
 *   Créez un tableau avec des numéros aléatoires.
 *   Cherchez si un numéro spécifique est présent dans le tableau. Trouver la méthode pour
 *   Affichez un message en fonction du résultat de la recherche.
 */

    $rndm = [13254,536584,687,5869847,1,98796847];

    foreach ($rndm as $spe ) {
        if ($spe == 1) {
            echo "Found our NAMBA WAN!!!!!!!";
        }
    }
    echo "<br><br>";

/** Exercice 9 : Fusionner deux tableaux (Bonus)
 *   Objectif : Fusionnez deux tableaux en un seul.
 *   Instructions :
 *   Créez deux tableaux : un contenant des prénoms et un autre contenant des noms de famille.
 *   Fusionnez ces deux tableaux pour créer un tableau de noms complets.
 *   Affichez chaque nom complet sur une ligne.
 * 
 *  Aide: utiliser des boucles for
 */

    $snom = [];
    array_push($snom, $guilty["nom"]);
    
    foreach ($students as $student ) {
        // echo $student["nom"];
        array_push($snom, $student["nom"]);
    }

    print_r($snom);

    $names = ["Riri", "Fifi", "Loulou"];
    $surname = ["Grigri", "Frifri", "Grougrou"];

    $ducks = [];

    for ($i = 0; $i < count($names); $i++) {
        $ducks[] = [
            "nom" => $names[$i],
            "prenom" => $surname[$i]
        ];
    }

    print_r($ducks);