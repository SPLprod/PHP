<?php

/** Exercice 1 : Afficher la date actuelle
 * 
 *  Objectif : Afficher la date sous le format 'jour/mois/annee' suivi de 'heure:minute:secondes'
 * 
 *  aide : utiliser la fonction date()
 */

    echo date("d/m/Y") . " " . date("H:i:s");

    echo "<br><br>";

/** Exercice 2 : Formater une date
 * 
 *  Objectif : Transformer la date '2024-08-08' en format de type 08/08/2024
 * 
 *  aide : date() combinée à strtotime()
 */

    $date = strtotime("2024-08-08");
    echo $date;

    echo "<br>";

    $dateFormat = date("d/m/Y", $date);
    echo $dateFormat;

    echo "<br><br>";

/** Exercice 3 : Calculer l'âge d'une personne
 * 
 *  Objectif : Ecrire un script qui calcul l'age d'une personne née le '15-02-1990'
 * 
 *  aide : combinaison date() et strtotime()
 * 
 */

    $sonneper = strtotime('15-02-1990');
    $ajd = strtotime(date("d/m/Y"));

    $age = round(($ajd - $sonneper) / 60 / 60 / 24 / 365.25, 0);

    echo "Ptdrr il a " . $age . "ans il est VIEEEEEUX !!!";
    // echo "Ptdrr il a " . round((time() - $sonneper) / 60 / 60 / 24 / 365.25, 0) . "ans il est VIEEEEEUX !!!";

    echo "<br><br>";

/** Exercice 4 : Afficher le timestamp actuel
 * 
 *  Objectif : Afficher le timstamp actuel et expliquer sa signification
 * 
 *  aide : fonction time()
 * 
 */

    echo "Le timestamp : " . time() . "<br> est un décompte de seconde depuis le 1er Janvier 1970 jusqu'à aujourd'hui, la date correspond à la création du système UNIX";

    echo "<br><br>";

/** Exercice 5 : Convertir timestamp en date
 * 
 *  Objectif : Convertir le timstamp actuel en date lisible sous le format 'jour/mois/annee'
 * 
 *  Aide : combinaison date() et time()
 */

    $ajd = date("d/m/Y", time());

    echo $ajd;

    echo "<br><br>";

/** Exercice 6 : Date dans une semaine
 * 
 *  Objectif : Afficher la date qui sera exactement une semaine après la date d'aujourd'hui
 * 
 *  aide : strtotime() avec +1 week
 */

    // Quand t'as la flemme et strtotime() est trop relou
    $week = time() + (60 * 60 * 24 * 7);
    // Quand tu n'est pas ingouvernable et que tu dois lire la consigne (par contre le +1 week c'est incr)
    $week3 = strtotime("+1 week");

    echo date("d/m/Y", $week) . "<br>";
    echo date("d/m/Y", $week3);

    echo "<br><br>";

/** Exercice 7 : Nombre de jours entre deux dates (BONUS)
 * 
 *  Objectif : Calculer le nombre de jours entre le 01-01-2024 et aujourd'hui
 * 
 *  Aide : soustraire les timestamps des deux dates et les convertir en jours
 */

    $day1 = strtotime("08-04-2004");
    $day2 = time();
    $diff = round(($day2 - $day1) / 60 / 60 / 24, 0);

    echo $diff . " jours de diff" . "<br>";
    echo "Où " . round($diff /30, 0) . " mois de diff <br>";
    echo "Où " . round($diff /365.25, 0) . " années de diff";

    echo "<br><br>";

/** Exercice supp : Valider une date
*
*  Objectif : Ecrire une fonction qui valide si une date donnée sous la forme 'dd-mm-yyyy' est valide ou non
*  Testez avec plusieurs date 😉
*
*  Aide : Utiliser strtotime() et verifier si le resultat est false
*
*/

    date_default_timezone_set("Europe/Paris");

    // Note à sois-même, les dates sont par défaut en mm/dd/yyyy alors que c'est français :(
    $userdate = ["08/04/2004", "11/11/2011", "21/12/2012", "13/03/2030"];

    foreach ($userdate as $key => $value) {
        $verif = strtotime($value);
        if ($verif) {
            echo date("d/m/Y", $verif) . " " . "date valide <br>";

        }else {
            echo "date invalide <br>";
        }
    }
    