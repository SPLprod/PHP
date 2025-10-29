<?php

/** Exercice 1 : Vérifier la validité d'un âge
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable age est valide (entre 0 et 120)
 *  
 *  Afficher un message indiquant si l'âge est valide ou non 
 * 
 * petit bonus : vérifier que l'âge est un nombre entier et non un décimal
 */

    $age = 100.5;

    if ($age >= 0 && $age <=120 && is_int($age) ) {
        echo "$age : L'age est valide";
    } else {
        echo "NAN C'EST ILLEGAL!!!";
    }

    echo "<br><br>";


/** Exercice 2 : Calculer la réduction
 * 
 *  Objectif : Ecrire une condition qui applique une réduction de 10% si le montant est supérieur à 100 (créer une variable montant), et 5% si le montant est entre 50 et 100€, sinon, aucune réduction n'est appliquée
 *  Bonus: trouver comment avoir la moyenne en entier et non en décimal
 */

    if ($age >= 100) {
        $age *= 0.90;
        echo $age;
    } else if ($age > 50 && $age < 100) {
        $age *= 0.95;
        echo $age;
    }

    echo "<br><br>";

/** Exercice 3 : Afficher le jour de la semaine
 * 
 *  Objectif : Ecrire une condition 'switch' pour afficher un message en fonction du jour de la semaine, le jour est donnée par une variable $jour en number (1 pour lundi, 2 pour mardi etc...)
 * 
 */

    $jour = 3;

    switch($jour) {
        case 1 :
            echo "Il est Lundi";
            break;
        case 2 :
            echo "Il est Mardi";
            break;
        case 3 :
            echo "Il est Mercredi";
            break;
        case 4 :
            echo "Il est Jeudi";
            break;
        case 5 :
            echo "Il est Vendredi";
            break;
        case 6 :
            echo "Il est Samedi";
            break;
        case 7 :
            echo "Il est Dimanche";
            break;
    }

    echo "<br><br>";

/** Exercice 4 : Comparaison de chaines de caractères
 *  Objectif : Ecrire une condition qui compare si deux variables sont identiques, la condition doit vérifier le type ET la valeur 
 */

    $var1 = true;
    $var2 = "false";

    if ($var1 === $var2) {
        echo "Is all gud :)";
    } else {
        echo "is all bad :(";
    }

    echo "<br><br>";

/** Exercice 5 : Calcul de la moyenne
 *  
 *  Objectif : Ecrire un script qui vérifie si la moyenne trois notes est suffisante pour passer un examen, la moyenne doit être supérieure ou égale à 10 (afficher un message pour chacun des cas)
 * 
 */

    $note1 = 15;
    $note2 = 5;
    $note3 = 8.5;

    $GPA = ($note1 + $note2 + $note3) / 60 * 100;

    if ($GPA > 50) {
        echo "Youpi! j'ai eu mon BAC !!!";
    } else {
        echo "I'm so sad :'(";
    }

    echo "<br><br>";

/** Exercice 6 : Tester une variable indéfinie
 * 
 *  Objectif : Ecrire une condition qui utilisera 'isset()' pour vérifier si un variable $var est définie, si elle est définie, afficher sa valeur, sinon afficher un message indiquant qu'elle n'est pas définie
 * 
 * Tentez avec null, '', 0 
 */

    $null = false;

    if (isset($null)) {
        echo "Wow! Il existe!";
    } else {
        echo "Nope";
    }

    echo "<br><br>";

/** Exercice 7 : Valider un formulaire
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable $nom est vide avec empty(), si c'est le cas, afficher un message qui demandera à l'utilisateur de remplir le champ
 *  Pas besoin d'un formulaire, faites juste une variable et tester en changeant les valeurs: string vide, non NULL...
 * 
 */

    if (empty($nom)) {
        echo "Veuillez entrer votre nom tanpri";
    } else {
        echo "Bonjour, $nom";
    }

    echo "<br><br>";

/** Exercice 8 : Vérification d'un numéro pair ou impair
 * 
 *  Objectif : Ecrire une condition qui vérifie si une variable a une valeur paire ou impaire (utiliser modulo)
 * 
 */

    if ($note1 % 2 == 1) {
        echo "La première note est impair";
    } else {
        echo "La première note est pair";
    }

    echo "<br><br>";

/** Exercice 9 : Catégoriser une personne selon son âge
 * 
 *  Objectif : Ecrire une/des condition(s) qui classe une personnee en 'enfant','adolescent','adulte' ou 'senior' selon son age
 */

    if ($age < 0){
        echo "Futur Trunks";
    }else if ($age > 0 && $age <= 12){
        echo "Enfant";
    }else if ($age > 13 && $age < 18){
        echo "Adolescent";
    }else if ($age >= 18 && $age <= 120){
        echo "Adulte";
    }else if ($age > 120){
        echo "Probablement mort";
    }

    echo "<br><br>";

/** Exercice 10 : Vérifier la cohérence des réponses avec l'opérateur XOR
 * 
 *  Objectif : Ecrire des conditions et vérifier la cohérence de ces réponses
 * 
 *  Exemple : Nous avons une vérification a faire pour vérifier si l'utilisateur se connecte avec son empreinte digitale ou son mdp (il ne peut pas faire les deux en même temps)
 * 
 *  xor : L'une des deux conditions doit être vraie seulement, si les deux sont vraies, alors il retournera false
 *  contrairement à || (or) qui vérifiera si au moins l'une des deux conditions est vraie, même si les deux le sont
 */
 
    $fingerprint = true;
    $mdp = true;

    if ($fingerprint == true XOR $mdp == true) {
        echo "tout est en ordre, circulez!";
    } else {
        echo "il y a un truc qui cloche";
    }