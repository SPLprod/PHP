<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test encryptage</h1>
    <p>Lien vers la documentation php : <a href="https://www.php.net/manual/en/function.password-hash.php">PHP ENCRYPTAGE</a></p>

    <?php $mdp = "Saliha" ?>

    <h3>Le mot de passe est : <?php echo $mdp ?></h3>
    
    <?php 
        // l'option est le degré d'encryptage du mot de passe, le niveau vas de 1 à 20 (du moins au plus sécure mais aussi du moins au plus consommateur en ressources)
        $option = ["cost" => 12] ;
        // on récupère le mot de passe crypté dans la variable password_hash(mot de passe, algorithme de cryptage, option)
        // algorythme disponibles : 
        // · PASSWORD_DEFAULT
        // · PASSWORD_BCRYPT
        // · PASSWORD_ARGON2I
        // · PASSWORD_ARGON2ID
        $bcrypt = password_hash($mdp, PASSWORD_BCRYPT, $option);

        //Vérifie si le mot de passe est bel et bien encrypté
        if (password_needs_rehash($bcrypt, PASSWORD_BCRYPT, $option)) {
            //Nouvel encryptage en cas d'erreur
            $newCrypt = password_hash($mdp, PASSWORD_BCRYPT, $option);
        }
    ?>

    <h3>Le mot de passe crypté (Bcrypt) : <?php echo $bcrypt ?></h3>

    <!-- Formulaire de connexion simple avec $_POST -->
    <form action="" method="post">
        <input type="text" name="test" id="test">
        <button type="submit">Envoyer</button>
    </form>

    <?php 
        // print_r( password_get_info( $bcrypt ) );

        // On vérifie d'abord si la superglobale $_POST est valide
        if(isset($_POST["test"]) && !empty($_POST["test"])) {
            // On vérifie si l'entrée utilisateur correspond au mdp crypté
            if (password_verify($_POST["test"], $bcrypt)) {
                echo 'Password is valid!';
            } else {
                echo 'Invalid password.';
            }
        }
    ?>

</body>
</html>