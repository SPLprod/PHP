<?php
require_once __DIR__ .  "/../config/db.php";

class Products{
    public $name;
    public $price;
    public $category;
    public $pdo;
    

    public function __construct($name, $price, $category)
    {
        //A ne plus jamais reproduire 
        $this->pdo = (new Database("food_truck"))->pdo; 
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function save(){
        // Note à soi-même : n'oublie pas les crochets dans le execute sinon les injections SQL vont être violents 
        $this->pdo->prepare("INSERT INTO products (name, price, category) VALUES (?,?,?)")->execute([$this->name, $this->price, $this->category]);
        
    }
    public function getAll(){
        // Don't do that 
        // $pdo2 = $this->pdo->pdo;
        $result = $this->pdo->query("SELECT * FROM products");
        $getAll = $result->fetchAll(PDO::FETCH_ASSOC);

        return $getAll;
    }
}

// $test = new Products("test",25,"test");
// $test->save();
// $getAll = $test->getAll();
// var_dump($getAll);
?>