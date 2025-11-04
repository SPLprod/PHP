<?php

/*

1. Fonction sans paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greet() qui affiche "Hello, world!" lorsqu'elle est appelée.
*/

function greet() {
    echo "Hello world!";
}

greet();
echo "<br><br>";

/*
2. Fonction avec paramètres et sans valeur de retour
Exercice : Créez une fonction appelée greetUser() qui prend un paramètre $name et affiche "Hello, [name]!" où [name] est la valeur passée à la fonction.
*/

function greetUser($name) {
    echo "Hello " . $name . " !";
}

greetUser("Ryan");
echo "<br><br>";

/*
3. Fonction avec paramètres et avec valeur de retour
Exercice : Créez une fonction appelée sum() qui prend deux paramètres $a et $b, les additionne, et retourne le résultat.
*/

function sum($a, $b) {
    echo $a + $b;
}

sum(5,5);
echo "<br><br>";

/*
4. Fonction qui calcule la somme des nombres d'un tableau
Exercice : Créez une fonction appelée sumArray($numbers) qui prend un tableau de nombres $numbers en paramètre et retourne la somme de tous les éléments du tableau.
*/

function sumArray($numbers) {
    $total = 0;
    foreach ($numbers as $key => $value) {
        $total += $value;
    }
    echo $total;
}

$namba = [5,12,12,10];

sumArray($namba);
echo "<br><br>";

/*
5. Fonction avec paramètre par défaut
Exercice : Créez une fonction appelée greetWithTime() qui prend deux paramètres, un nom $name et un moment de la journée $timeOfDay (par défaut "day"), et qui affiche "Good [timeOfDay], [name]!

Rappel = vous pouvez ajouter une valeur au paramètre de fonction directement comme on a vu (exemple : function salut($name='Cynthia'){echo "Salut $name";})
".
*/

function greetWithTime($name, $timeOfDay = "day") {
    echo "Good " . $timeOfDay . ", $name!";
}

greetWithTime("Hayata");
echo "<br>";
greetWithTime("Ahmed",  "morning");
echo "<br><br>";

/*
6. Fonction qui retourne un tableau
Exercice : Créez une fonction appelée getFruits() qui ne prend aucun paramètre et retourne un tableau contenant trois noms de fruits.
*/

function getFruits() {
    $fruits = ["pomme", "poire", "banane"];
    return $fruits;
}

var_dump(getFruits());

/*
7. Fonction avec une chaîne de caractères comme paramètre
Exercice : Créez une fonction appelée reverseString($str) qui prend une chaîne de caractères $str en paramètre et retourne cette chaîne en ordre inversé.
*/

function reverseString($str) {
    echo strrev($str);
}
echo reverseString("tnahpele");
echo "<br><br>";

/*
8. Fonction avec paramètres et vérification de type
Exercice : Créez une fonction appelée  qui prend deux paramètres $a et $b. La fonction doit vérifier que $b n'est pas égal à 0 avant de diviser $a par $b et retourner le résultat. Si $b est égal à 0, la fonction doit retourner un message d'erreur.
*/

function divide($a, $b) {
    if ($b == 0) {
        echo "ça marche pas frr";
    } else {
        echo $a / $b;
    }
}
divide(5, 5);
echo "<br><br>";

/*
9. Fonction qui utilise une boucle pour générer un résultat
Exercice : Créez une fonction appelée generateMultiplicationTable($number) qui prend un nombre $number en paramètre et retourne un tableau contenant la table de multiplication de ce nombre de 1 à 10.
*/
function generateMultiplicationTable($number) {
    echo "<ul>";
    for ($i=0; $i <= 10; $i++) { 
        echo "<li> $i x $number = " . $i * $number;
    }
    echo "</ul>";
}
generateMultiplicationTable(5);
echo "<br><br>";

/*
10. Fonction avec une condition complexe
Exercice : Créez une fonction appelée checkEligibility($age, $hasLicense) qui prend en paramètre un âge $age et un booléen $hasLicense. La fonction doit retourner "Eligible" si l'utilisateur a 18 ans ou plus et possède un permis de conduire, sinon "Not Eligible".

*/

function checkEligibility($age, $hasLicense) {
    if ($age >= 18 && $hasLicense == true) {
        echo "Eligible, veuillez passez.";
    } else {
        echo "Non éligible.";
    }
}

checkEligibility(21, true);