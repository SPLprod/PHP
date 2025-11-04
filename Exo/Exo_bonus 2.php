<?php

    $menu = [
        "entree" => [
            [
                "nom" => "Salade",
                "prix" => 5
            ],[
                "nom" => "Bruschetta",
                "prix" => 7.50
            ]
        ],"plat" => [
            [
                "nom" => "Couscous",
                "prix" => 5
            ],[
                "nom" => "Boeuf bourguignon",
                "prix" => 7.50
            ]
        ],
        "Dessert" => [
            [
                "nom" => "Profiterole",
                "prix" => 10
            ],[
                "nom" => "Pastel de Nata",
                "prix" => 9.99
            ]
        ]
    ];

    $personnes = ["Saliha", "Maël", "Ludovic"];

    function getRandomElmt($arr){
        $rand = random_int(0, count($arr)-1);
        return $arr[$rand];
    }

    echo "<ol>";
    foreach ($personnes as $key => $value) {
        $total = 0 ;
        echo "<li>" . $value . "</li>";
        echo "<ul>";
        foreach($menu as $key => $value){
            $randElmt = getRandomElmt($value);
            echo $randElmt["nom"] . " : " . $randElmt["prix"] . "€ <br>";
            $total += $randElmt["prix"];
        }
        echo "<p>Total = ". ($total > 20 ? "<s>$total €</s> <strong>→ ".(round($total*=0.9, 2)). "</strong>" : "<strong>" . $total . "</strong>")."! €</p>";
        echo "</ul>";
    }
    echo "</ol>";

    

?>

<!-- ============================== V.2 avec array_rand (Merci Saliha) ============================== -->

<?php
 
    $menu = [
        "entree" => [
            [
                "nom" => "Salade",
                "prix" => 5
            ],[
                "nom" => "Bruschetta",
                "prix" => 7.50
            ]
        ],"plat" => [
            [
                "nom" => "Couscous",
                "prix" => 5
            ],[
                "nom" => "Boeuf bourguignon",
                "prix" => 7.50
            ]
        ],
        "Dessert" => [
            [
                "nom" => "Profiterole",
                "prix" => 8
            ],[
                "nom" => "Pastel de Nata",
                "prix" => 9.99
            ]
        ]
    ];
 
    $personnes = ["Saliha", "Maël", "Ludovic"];
 
     echo "<ol>";
    foreach ($personnes as $key => $value) {
        echo "<li>".$value."</li> <br>";
        $total=0;
        echo "<ul>";
        foreach ($menu as $key => $value) {
          $tab  =array_rand($value);
        //   var_dump($tab);
        //   var_dump($value);
 
            echo $key." :" .$value[$tab]["nom"]." <br>   prix : ".$value[$tab]["prix"]."<br>";
            $total += $value[$tab]["prix"];
           
 
        }
        if ( $total>20){
            $somme=($total*0.9);
             echo "<p>Total = ". "<s>$total €</s> <strong>→ ".(round($somme, 2)). "</strong> €!";
        }else{
            echo "<strong>" . $total . "</strong>"." €!</p>";
        }
       
        echo "</ul>";
 
       
    }
    echo "</ol>";
 
 
 
    // function getRandomElmt($arr){
    //     $rand = random_int(0, count($arr)-1);
    //     return $arr[$rand];
    // }
 
    // echo "<ol>";
    // foreach ($personnes as $key => $value) {
    //     $total = 0 ;
    //     echo "<li>" . $value . "</li>";
    //     echo "<ul>";
    //     foreach($menu as $key => $value){
    //         $randElmt = getRandomElmt($value);
    //         echo $randElmt["nom"] . " : " . $randElmt["prix"] . "€ <br>";
    //         $total += $randElmt["prix"];
    //     }
    //     echo "<p>Total = ". ($total > 20 ? "<s>$total €</s> <strong>→ ".(round($total*=0.9, 2)). "</strong>" : "<strong>" . $total . "</strong>")."! €</p>";
    //     echo "</ul>";
    // }
    // echo "</ol>";
 
   
 
?>