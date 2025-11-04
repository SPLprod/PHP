<?php

// Afficher toutes les réponses

/** Exercice 1 : Boucle while basique
 * 
 *  Objectif : Créer une boucle while qui affiche les nombres pairs de 0 à 20
 * 
 */

    $i = 0;

    while ($i <= 20) {
        
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
        ++$i;
    }

    echo "<br><br>";


/** Exercice 2 : Générer une liste d'années avec une boucle while
 * 
 *  Ojectif : Afficher les années de 2000 à l'année actuelle (qui doit être incluse) dans une liste non ordonnée (<ul>)
 * 
 */

    $i = 2000;

    echo "<ul>";
    while ($i <= 2025) {
        echo "<li>" . $i . "</li><br>";
        ++$i;
    }

    echo "</ul><br><br>";

/** Exercice 3 : Boucle do...while
 * 
 *  Objectif : Utiliser une boucle do...while pour afficher les multiples de 3 inférieurs à 30. La variable de départ équivaut à 3
 * 
 * 
 */

    $i = 3;

    do {
        echo $i . "<br>";
        $i += 3;
    } while ($i <= 30);

    echo "<br><br>";

/** Exercice 4 : Boucle for
 * 
 *  Objectif : Créer une boucle for qui affiche une table de multiplication (de 1 à 10) pour un nombre donné
 * 
 */

    
    $b = 5;

    for ($a = 0; $a<=10; ++$a) {
        echo $a . " x " . $b . " = " . $a * $b . "<br>";
    }

    echo "<br><br>";

/** Exercice 5 : Boucles imbriquées pour créer une grille
 * 
 *  Objectif : Créer une boucle for qui affiche une grille de 5x5 dans un tableau html (<table>).
 *             Chaque cellule doit contenir les coordonnées de la cellule (par exemple (1,1) pour la première cellule)
 * 1,1  1,2  1,3  1,4  1,5
 * 2,1  2,2  2,3 ...
 * ...
 * ...
 * ...
 * 5,1  5,2 ...
 */

    echo "<table><tbody>";

    for ($r = 1; $r <= 5; ++$r) {
        echo "<tr>";
            for ($c = 1; $c <= 5; ++$c) {
                echo "<td style='padding : 8px; border : black 1px solid'>" . $r . "," . $c . "</td>";
            }
        echo "</tr>";
    }

    echo "</table></tbody>";

/** Exercice 6 : foreach pour un tableau associatif
 * 
 *  Objectif : Créer un tableau associatif avec les informations suivantes : 'prenom','nom','email','age'
 *             Afficher chaque information sous la forme clé : valeur dans des paragraphes, l'email doit être dans un lien (<a>)
 * 
 */

    $info = [
        "prenom" => "Issa",
        "nom" => "Issadi",
        "age" => 20,
        "email" => "issadi@mail.fr"
    ];

    foreach ($info as $key => $value) {
        if ($key == "email") {
            echo "<p><a href = $value>" . $value . "</p></a><br>";
        } else {
            echo "<p>" . $value . "<p>";
        }
    }

/** Exercice 7 : Foreach avec des clés personnalisées
 *  
 *  Objectif : Créer un tableau associatif représentant un menu de navigation, les clés seront les titres des pages ('accueil','produits','contact') et les valeurs les liens correspondants.
 * 
 * Afficher chaque element du menu sous forme de liens (<a>)
 * 
 * 
 */

    $nav = [
        "acceuil" => "#",
        "produit" => "#",
        "contact" => "#"
    ];
    
    echo "<ul>";
    foreach ($nav as $key => $value) {
        echo "<li><a href='$value'>". $key . "</a></li>";
    }

    echo "</ul>";

/** Exercice 8 : Boucles imbriquées et conditions
 * 
 *  Objectif : Créer un tableau HTML de 10x10 dans lequel chaque cellule contient un nombre aléatoire entre 1 et 100. 
 * Regarder random_int pour la génération des nombres aléatoires 
 * 
 * 
 */

    echo "<table><tbody>";

    for ($r = 1; $r <= 10; ++$r) {
        echo "<tr>";
            for ($c = 1; $c <= 10; ++$c) {
                echo "<td style='padding : 8px; border : black 1px solid'>" . random_int(1, 100) . "</td>";
            }
        echo "</tr>";
    }

    echo "</table></tbody>";


/** Exercice 9 : Tableau de tableaux avec foreach
 * 
 *  Objectif : Créer un tableau contenant trois sous tableaux, chacun représentera une personne avec les clés 'prenom','nom','age'. 
 * 
 *  Afficher toutes les informations sous forme de liste HTML ordonnées ('<ol>'), où chaque personne a sa propre sous-liste (<ul>)
 * 
 *  Résultat attendu : 
 * 
 *  <ol> 
 *  <li> Personne 1 </li>
 *  <ul> 
 *  <li> prénom : prenom </li>
 *  <li> nom : nom </li>
 *  <li> age: age </li>
 *  </ul>
 *  <li> Personne 2 </li>
 * 
 */

    $people = [
        [
            "prenom" => "yes",
            "nom" => "sir",
            "age" => 15
        ],
        [
            "prenom" => "no",
            "nom" => "sir",
            "age" => 20
        ],
        [
            "prenom" => "oui",
            "nom" => "monsieur",
            "age" => 15
        ]
    ];

    echo "<ol>";

    for ($i=0; $i < count($people); $i++) { 
        echo "<li> Personne " . $i + 1 . "</li>";
        echo "<ul>";
        foreach ($people[$i] as $key => $value) {
            echo "<li>" . $key . " : " . $value . "</li>";
        }
        echo "</ul>";
    }

    echo "</ol>";

?>