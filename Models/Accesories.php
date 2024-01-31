<?php
require_once __DIR__.'/Product.php';

//classe accessori 
class Accesories extends Product{
    public $description;
    public $dimensions;

    function __construct($_image, $_title, Categoria $_categoria, $_prezzo, $_type, $_description, $_dimensions){
        //richiamo il construct del padre
        parent::__construct($_image, $_title, $_categoria, $_prezzo, $_type);
        $this-> description = $_description;
        $this-> dimensions = $_dimensions;
    }

}
?>