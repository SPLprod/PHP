<?php 

    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=workshop_php',  // driver mysql + nom du serveur de la BDD + nom de la BDD 
            'root',   // pseudo de la BDD
            '',   // mdp de la BDD 'root' pour MAC et '' pour Windows
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // pour afficher les messages d'erreur SQL
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'  // définition du jeu de caractères des échanges avec la BDD
            ]
    );
        echo '<p>Connexion à la base de données réussie !</p>';

    } catch (PDOException $e) {
        // Si une erreur survient lors de la connexion, on la capture
        echo '<p class="error">Erreur de connexion à la base de données : ' . $e->getMessage() . '</p>';
        // error_log($e->getMessage(), 3, 'chemin/vers/le/fichier_log.log'); // Pour enregistrer l'erreur dans un fichier de log
        die; // Arrête le script si la connexion échoue
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop PHP</title>
</head>
<body>

    <form style="display: flex; flex-direction:column; align-items:start" action="" method="post">
        <input type="text" name="name" id="name" placeholder="nom">
        <input type="email" name="email" id="email" placeholder="adresse e-mail">
        <input type="password" name="mdp" id="mdp" placeholder="mot de passe">

        <input type="text" name="food" id="food" placeholder="food">
        <input type="text" name="place" id="place" placeholder="place">
        <button type="submit">Envoyer</button>
    </form>
    

    <?php 

    var_dump($_POST);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"]) && isset($_POST["food"]) && !empty($_POST["food"]) && isset($_POST["place"]) && !empty($_POST["place"])) {
            
            $result = $pdo->prepare("INSERT INTO fav_food (name) VALUES (?)")->execute([$_POST["food"]]);
            $foreign1 = $pdo->lastInsertId();
            
            $result = $pdo->prepare("INSERT INTO fav_place (name) VALUES (?)")->execute([$_POST["place"]]);
            $foreign2 = $pdo->lastInsertId();
            
            $resultat = $pdo->prepare("INSERT INTO users (name, email, mdp, id_fav_food, id_fav_place) VALUES (?, ?, ?, ?, ?)")->execute([$_POST["name"], $_POST["email"], password_hash($_POST["mdp"], PASSWORD_BCRYPT), $foreign1, $foreign2]);

            $display = $pdo->query("SELECT *, fav_place.name AS placeName, fav_food.name AS foodName FROM users INNER JOIN fav_food ON id_fav_food = fav_food.id INNER JOIN fav_place ON id_fav_place = fav_place.id");

            $employe = $display->fetch(PDO::FETCH_ASSOC);

            var_dump($employe);

            
        }
        else {echo "FLOP 2";}
    } else {
        echo "FLOP";
    }
    

    ?>
</body>
</html>