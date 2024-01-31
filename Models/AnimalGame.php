<?php
require_once __DIR__.'/Product.php';

//classe Animal Game
class AnimalGame extends Product{
    public $material;
    public $sound;
    
     function __construct($_image, $_title, Categoria $_categoria, $_prezzo, $_type, $_material, $_sound){
        //richiamo il construct del padre
        parent::__construct($_image, $_title,  $_categoria, $_prezzo, $_type);
        $this-> material = $_material;
        $this-> sound = $_sound; 
     }
} ?>