<?php

// Utiliser form.php pour le formulaire
// Créer un formulaire avec en champ (nom,prenom,email,motdepasse,ville,pays)

/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 * 
 */

    // SALIHA VER.
    // function verif($x): bool
    // {
    //     if (isset($x) && !empty($x)) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // $err = [];
    // $data = [
    //     "user_name" => '',
    //     "user_prenom" => '',//Value qui sertà rien!
    //     "user_mail" => '',
    //     "user_mdp" => '',
    //     "user_ville" => '',
    //     "user_pays" => ''
    
    // ];
    
    // if (verif($_POST)) {
    //     foreach ($data as $key => $value) {
    //         if ($_POST[$key] === '') {
    //             echo "Veuillez renseigner " . $key . "<br>";
    //         }
    //     }
    // }

    // MAEL VER.
    // function chkPost($key){
    //     if(array_key_exists($key, $_POST)){
    //         if(isset($_POST[$key]) && !empty($_POST[$key])){
    //             return htmlspecialchars($_POST[$key]);
    //         }
    //     }
    //     return false;
    // }

    function verif($x): bool
    {
        if (isset($x) && !empty($x)) {
            return true;
        } else {
            return false;
        }
    }
    
    echo verif($_POST["nom"]) ? "" : "<p style='color:red'>Informations manquante (nom)</p>" ;
    echo verif($_POST["prenom"]) ? "" : "<p style='color:red'>Informations manquante (prenom)</p>" ;
    echo verif($_POST["email"]) ? "" : "<p style='color:red'>Informations manquante (adresse email)</p>" ;
    echo verif($_POST["mdp"]) ? "" : "<p style='color:red'>Informations manquante (mot de passe)</p>" ;
    echo verif($_POST["ville"]) ? "" : "<p style='color:red'>Informations manquante (ville)</p>" ;
    echo verif($_POST["pays"]) ? "" : "<p style='color:red'>Informations manquante (pays)</p>" ;

    echo "<br>";

/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de copier/coller le traitement de l'exercice 1)
 * 
 */

    // var_dump($_POST) ;

    foreach ($_POST as $key => $value) {
        if ($key == "nom") {
            echo "Nom : " . htmlspecialchars($value) . "<br>";
        } elseif ($key == "prenom") {
            echo "Prénom : " . htmlspecialchars($value) . "<br>";
        } elseif ($key == "email") {
            echo "Adresse e-mail : " . htmlspecialchars($value) . "<br>";
        } elseif ($key == "mdp") {
            echo "Mot de passe : " . htmlspecialchars($value) . "<br>";
        } elseif ($key == "ville") {
            echo "Ville : " . htmlspecialchars($value) . "<br>";
        } else {
            echo "Pays : " . htmlspecialchars($value) . "<br>";
        }
    }


    // MAEL VER.
    // $champs = ["nom","prenom","email","mdp","ville","pays"];
    // foreach($champs as $champ){
    //     if($input = chkPost($champ)){
    //         echo "$champ = $input --- ";
    //     }
    // }


/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */



/** Exercice 4 : Limitation de longueur pour mot de passe 
 * 
 *  Objectif : Limiter la longueur de le mot de passe  saisie par l'utilisateur à 130 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ mot de passe 
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 */

    function verifmdp($x): bool
        {
            if (strlen($x) <= 130) {
                return true;
            } else {
                return false;
            }
        }
    
    echo (verifmdp($_POST["mdp"])) ? "" : "<p style='color:red'>Le mot de passe dépasse la limite de 130 caractères</p>" ; 

    echo "<br><br>";

/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */

    echo strtoupper($_POST["ville"]) . "<br><br><h2>merci pour votre soumission</h2>";
