<?php

require_once __DIR__ ."\..\config\Database.php";
// Gestion des requêtes ici !

class Contact {

    public $db;

    public function __construct()
    {
        $this->db = new Database("classe_poo");
    }

    public function addContact() {
        $this->db->insertDB([$_POST["name"],$_POST["email"],$_POST["phone"]]);
    }

    public function showContact() {
        // var_dump($this->db->selectDB());
        $select = $this->db->selectDB();
        for ($i=0;$i<count($select);++$i) {
            echo "<li>";
            foreach ($select[$i] as $key => $value) {
                if ($key == "id") {
                    continue;
                }
                echo $key. " : ".$value;
            }
            echo "</li>";
        }
        
    }
}