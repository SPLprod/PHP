<?php
require __DIR__ .  "/food.php";

class Dessert extends Food {
    public $sweetnessLevel;

    public function __construct($name, $price, $calories){
        $this->category = "Dessert";
        $this->calories = $calories * 0.8; 
        parent::__construct($name, $price, $this->category, $this->calories);
    }

    public function savedessert(){
        parent::savefood();

    }
    
}

$test = new Dessert("tartelette framboise", 7.50, 350);

$test->savedessert();

?>