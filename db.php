<?php 

// collego tutte le altre pagine .php
    require_once __DIR__.'/Models/Accesories.php';
    require_once __DIR__.'/Models/AnimalGame.php';
    require_once __DIR__.'/Models/FoodPet.php';

  // creo le categorie degli animali
    $categoria_1= new Categoria ('cane','<i class="fa-solid fa-dog"></i>');
    $categoria_2= new Categoria ('gatto','<i class="fa-solid fa-cat"></i>');
    $categoria_3= new Categoria ('pesce','<i class="fa-solid fa-fish"></i>');
    $categoria_4= new Categoria ('uccello','<i class="fa-solid fa-crow"></i>');


  //creo tutti i foodpet
/*   ($_image, $_title,  $_categoria, $_prezzo, $_type, $_grams, $_ingredients, $_dosage); */
    $foodpet_1= new FoodPet('https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', 'Royal Canin Mini Adult',  $categoria_1, 15, 'PeetFood', '1000g', 'Pollame/Mais', '150g al giorno');
    $foodpet_2= new FoodPet('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large ', $categoria_1, 20, 'PeetFood', '2000g', 'Tonno e Riso', '200g al giorno');
    $foodpet_2= new FoodPet('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina ', $categoria_2, 3.50, 'PeetFood', '400g', 'vitello', 'intera scatola');
    $foodpet_2= new FoodPet('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi ', $categoria_3, 4, 'PeetFood', '250ml', 'misto alghe', 'non indicato');
    

    //creo tutti gli accessori 
    var_dump($categoria_1)
?>