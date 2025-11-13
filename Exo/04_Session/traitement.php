<?php 

    // var_dump($_POST);

    function lenverif($x, $max, $min) {
        if (strlen($x) > $max) {
        echo '<p style="color:red">' . $x . " dépasse la limite (30 caractères max)</p>" ;
    }  elseif (strlen($x) < $min) {
        echo "<p style='color:red'>" . $x . " est en dessous de la limite (2 caractères min)</p>";
    } else {

    }
   }

   if (isset($_POST["nom"]) && !empty($_POST["nom"]) && isset($_POST["prenom"]) && !empty($_POST["prenom"]) && isset($_POST["mdp"]) && !empty($_POST["mdp"])) {
    lenverif($_POST["nom"], 30, 2);
    lenverif($_POST["prenom"], 30, 2);
    lenverif($_POST["mdp"], 20, 6);
   }
   

   foreach ($_POST as $key => $value) {
    $_SESSION["$key"] = trim($value);
   }

   var_dump($_SESSION);
   print_r($_SESSION);

    // sleep(10);

    if (!empty($_SESSION["nom"]) && !empty($_SESSION["prenom"]) && !empty($_SESSION["email"]) && !empty($_SESSION["mdp"])) {
        header("location:acceuil.php");
        exit();
    }
    
   

   
?>