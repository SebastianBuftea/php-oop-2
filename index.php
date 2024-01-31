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
?>