<?php

class Product{
    public $image;
    public $title;
    public $categoria;
    public $prezzo;
    public $type;
    
    public function __construct($_image, $_title, $_categoria, $_prezzo, $_type){
        $this-> image = $_image;  
        $this-> title = $_title;
        $this-> categoria = $_categoria;
        $this-> prezzo = $_prezzo;
        $this-> type = $_type;

    }
}

class FoodPet extends Product{
    public $grams;
    public $ingredients;
    public $dosage;

     function __construct($_image, $_title, $_categoria, $_prezzo, $_type, $_grams, $_ingredients, $_dosage){
       parent::__construct($_image, $_title, $_categoria, $_prezzo, $_type);
       $this-> grams = $_grams;
       $this-> ingredients = $_ingredients;
       $this-> dosage = $_dosage; 
    }
}

class AnimalGame extends Product{
    public $material;
    public $sound;

     function __construct($_image, $_title, $_categoria, $_prezzo, $_type, $_material, $_sound){
        parent::__construct($_image, $_title, $_categoria, $_prezzo, $_type);
        $this-> material = $_material;
        $this-> sound = $_sound; 
     }
}

class Accesories extends Product{
    public $description;
    public $dimensions;

    function __construct($_image, $_title, $_categoria, $_prezzo, $_type, $_description, $_dimension){
        parent::__construct($_image, $_title, $_categoria, $_prezzo, $_type);
        $this-> description = $_description;
        $this-> dimension = $_dimension;
    }

}

?>