<?php
require __DIR__ .  "/product.php";

class Food extends Products {
    public $calories;

    public function __construct($name, $price, $category, $calories){
        $this->category = "food";
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->calories = $calories;
    }

    public function savefood(){
        parent:: save();
        $pdo2 = $this->pdo; 
        $pdo2->pdo->prepare("INSERT INTO products (calories) VALUES (?)")->execute($this->calories);
    }
    
}

?>