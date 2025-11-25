<?php

/** Exercice 1 : Déclaration d'une classe
 * 
 *  Objectif : Déclarer une classe et ajouter des propriétés et des méthodes
 * 
 *  1 . Créer une classe Animal avec une propriété nom = 'Rex'
 * 
 *  2 . Ajouter une méthode faireDuBruit() qui doit afficher "Je fais du bruit";
 * 
 *  3 . Instancier la classe Animal et faire en sorte d'appeler la méthode faireDuBruit();
 *  
 */

// class Animal {
//     public $nom;

//     public function faireDuBruit() {
//         echo "Je fais du bruit";
//     }

//     public function __construct($nom) {
//         $this->nom = $nom;
//     }
// }

// $pet = new Animal("Rex");
// $pet->faireDuBruit();


/** Exercice 2 : Ajouter des propriétés et méthodes
 * 
 *  Objectif : Ajouter des propriétés et méthodes supplémentaires
 * 
 *  1 . Modifier la classe Animal pour ajouter une propriété espece = 'Chien'
 * 
 * 2 . Ajouter une méthode afficherInfo() qui affiche le nom et l'espece de l'animal
 * 
 */

// class Animal {
//     public $nom;
//     public $espece;

//     public function faireDuBruit() {
//         echo "Je fais du bruit";
//     }

//     public function __construct($nom, $espece) {
//         $this->nom = $nom;
//         $this->espece = $espece;
//     }
//     public function afficherInfo() {
//         echo $this->nom . " est un " . $this->espece ;
//     }
// }

// $pet = new Animal("Rex", "Chien");
// $pet->afficherInfo();



/** Exercice 3 : Utilisation du constructeur
 * 
 *  Objectif : Utiliser un constructeur pour initialiser les propriétés
 * 
 *  1 . Créer un constructeur dans la classe Animal pour initialiser les propriétés nom et espece
 * 
 *  2 . Créer un objet en instanciant la classe Animal 
 * 
 */

class Animal {
    public $nom;
    public $espece;

    public function faireDuBruit() {
        echo "Je fais du bruit";
    }

    public function __construct($nom, $espece) {
        $this->nom = $nom;
        $this->espece = $espece;
    }
    public function afficherInfo() {
        echo $this->nom . " est un " . $this->espece;
    }
}

$pet = new Animal("Rex", "Chien");
$pet->afficherInfo();


/** Exercice 4 : Visibilité des propriétés
 * 
 *  Objectif : Démontrer les différents niveaux de visibilité des propriétés
 * 
 *  1 . Créer une classe Personne avec les propriétés nom (public), age(private) et adresse (protected)
 * 
 *  2 . Instancier la classe Personne et tenter d'appeler chaque propriété (afficher chacune), voir le résultat
 * 
 * 
 */

class Personne {
    public $nom;
    private $age;
    protected $adresse;

    public function __construct($nom,$age,$adresse)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->adresse = $adresse;
    }

    public function unprivateThat() {
        return $this->age;
    }
}

$sonneper = new Personne("Clément", 28, "Oui");
var_dump($sonneper);


/** Exercice 5 : Héritage
 * 
 *  Objectif : Utiliser l'héritage pour étendre une classe existante
 * 
 *  1 . Créer une classe Employe qui hérite de la classe Personne
 * 
 *  2 . Ajouter une propriété salaire à l'employé et une méthode pour afficher les informations de l'employé comme : 'Cet employé s'appelle 'nom, il a 'age' ans et son salaire est de 'salaire' € par mois';
 * 
 * 
 */

class Employe extends Personne {
    public $salaire;

    public function __construct($nom,$salaire, $age,$adresse)
    {
        $this->salaire = $salaire;
        //On hérite des propriétés de la classe parent 
        parent::__construct($nom,$age,$adresse);
    }


    public function afficherSalaire() {
        //Puisque l'age est en private, on fait appelle plutôt à la méthode 'unprivateThat()' qui retourne la propriété age (l'ENCAPSULATION)
        echo "Cet employé s'appelle ". $this->nom . " il  a " . $this->unprivateThat() . "ans et son salaire est de " . $this->salaire . " € par mois";
    }
}

$employ = new Employe("Flament",1400,21,"oui");
$employ->afficherSalaire();

echo "<br><br>";

/** Exercice 6 : Méthode parent::
 * 
 * Objectif: utiliser le mot clé parent:: pour passer la valeur d'une propriété depuis une classe enfant à la classe mère
 * 
 *  1 . Créer une classe animal avec la propriété $race méthode 'faireDuBruit()' qui affichera 'le cri de $this->race';
 * 
 *  2 . Créer une classe Chien qui etend Animal avec la même propriété et méthode 'faireDuBruit()' qui affichera 'est l'aboiement', Ne pas oublier le constructeur dans la classe Chien
 * 
 * 
 */


class Animal2 extends Animal {
    public $race;

    public function __construct($nom, $espece, $race)
    {
        parent::__construct($nom, $espece);
        $this->race = $race;
    }

    public function faireDuBruit()
    {
        parent::faireDuBruit();
        echo ' le cri de ' . $this->race;
    }
}

$animal = new Animal2("Rox","Chien","Husky");
$animal->faireDuBruit();

echo "<br><br>";


/** Exercice 7 : Encapsulation
 * 
 *  Objectif : Utiliser l'encapsulation pour protéger les données
 * 
 *  1 . Créer une classe compteBancaire avec une propriété solde
 * 
 *  2 . Créer une méthode pour afficher le solde du compte
 * 
 *  3 . Créer une méthode pour déposer de l'argent sur le compte
 * 
 *  4 . La propriété ne doit pas pouvoir être modifiée depuis l'exterieur de la classe
 * 
 * 
 */

class compteBancaire {
    private $solde;

    public function __construct($solde)
    {
        $this->solde = $solde;
    }

    public function unprivateThat() {
        return $this->solde;
    }

    public function displayCount() {
        echo $this->unprivateThat() . " €" ;
    }

    public function addMoney($add) {
        echo $this->unprivateThat() + $add . " €" ;
    }
}

$account = new compteBancaire(300);
$account->displayCount();
echo "<br>";
$account->addMoney(300);

/** Exercice 8 : BONUS
 * 
 *  1 . Créer une classe Humain avec en propriété nom,age,adresse
 * 
 *  2 . Ajouter une méthode qui vérifie si l'age est un nombre positif, si c'est le cas , affecter sa valeur à $age, sinon, envoyer un message d'erreur
 */

echo "<br><br>";

class Humain {
    public $nom;
    public $age;
    public $adresse;

    public function __construct($nom, $age, $adresse)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->adresse = $adresse;
    }

    public function ageVerif() {
        if ($this->age < 0) {
            echo "Error";
        } else {
            echo $this->nom . $this->age . $this->adresse;
        }
    }
}

$man = new Humain("Maël", 21, "Oui");
$man->ageVerif();

// class Humain{
//     public $nom;
//     public $age;
//     public $adresse;
//     public function __construct($nom, $age, $adresse){
//         $this->nom = $nom;
//         if($age >= 0){
//             $this->age = $age;
//         } else {
//             throw new Exception("age incorrect bro");
//         }
//         $this->adresse = $adresse;
//     }
// }
 
// $hygbf = new Humain("mael", -50, "grr paw");
// echo "<br>";