<?php
require_once('db/defines.php');
require_once('db/conn.php');

$articles = get_produit_list();
var_dump($articles);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence DIGIKAN |BOUTIQUE</title>
    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600 Merriweather|Pacifico' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- PUT THE STYLESHEET LINK HERE -->
    <link rel="stylesheet" href="css/final.css">
</head>


<body>


<?php
require ('includes/header.php'); ?>



<?php

?>
   <div id="boutique"  class="home">
       <div class="row">
            <div class=" wrap">
               <div class="col-lg-2 box">
                   <?php
                   foreach ($articles as $id => $produit) {
//                       var_dump($produit);
                 ?>
                    <div class="product full">
                            <a href="detail.php?item_id=<?= $id ?>">
                            <img src='<?="images/". $produit['picture'] ?>'/>
                      </a>
                        <span><?= $produit['name'] ?></span>
                         <span class=".prix"><?= $produit['price'] ?></span>

                            <span><?= $produit['description'] ?></span>
                            <a href="#" class="price"></a>
                       <a class= "add" href="#">add</a>

                    </div>
               </div>
                <?php
                } // foreach
                // else if empty
                ?>
                </div>
                </div>
                </div>





<?php include ('includes/footer.php'); ?>

</body>
</html>

