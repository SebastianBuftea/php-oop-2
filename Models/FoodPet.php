<?php 
require_once __DIR__.'/Product.php';

//classe Food pet
class FoodPet extends Product{
    public $grams;
    public $ingredients;
    public $dosage;

     function __construct($_image, $_title, Categoria $_categoria, $_prezzo, $_type, $_grams, $_ingredients, $_dosage){
       //richiamo il construct del padre
       parent::__construct($_image, $_title, $_categoria, $_prezzo, $_type);
       $this-> grams = $_grams;
       $this-> ingredients = $_ingredients;
       $this-> dosage = $_dosage; 
    }

    public function view(){
        return $this-> title." ".$this-> ingredients." ".$this->categoria->name;
    }
} 
?>