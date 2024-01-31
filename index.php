<?php
    //richiamo il db
    require_once __DIR__.'/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row ">
            <?php foreach($product_array as $product) { ?>
                <div class="col-4 d-flex justify-content-center">
                <div class="card card_height my-3" style="width: 18rem;">
                    <img src="<?php echo $product->image;?>" class="card-img-top" alt="<?php echo $product->title;?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->title;?></h5>
                        <span><?php echo $product->categoria->logo;?></span>
                        <span><?php echo $product->type;?></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Prezzo: <?php echo $product->prezzo."€";?></li>
                    </ul>
                    </div>
                </div>
            <?php } ?>   
        </div>
    </div>
    
</body>
</html>