<?php 
// Classe
class Movie{

    // Variabili di istanza
    public $title;
    public $description;
    public static $years = 2024;

    public $address;

    // Costruttore
    public function __construct($_title, $_descrpition, $_address) {
        $this->title = $_title;
        $this->description = $_descrpition;
        $this->address = $_address;
    }

    //Metodo
    public function getMovie(){
        return $this->title;
    }

}


?>