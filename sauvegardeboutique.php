<?php
//require_once('db/defines.php');
//require_once('db/conn.php');
//
//$articles = get_produit_list();
////var_dump($articles);
//
//?>
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Agence DIGIKAN |BOUTIQUE</title>-->
<!--    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->-->
<!--    <link href="css/bootstrap.css" rel="stylesheet">-->
<!--    <link href="css/bootstrap-responsive.css" rel="stylesheet">-->
<!---->
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600 Merriweather|Pacifico' rel='stylesheet' type='text/css'>-->
<!--    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">-->
<!---->
<!---->
<!--    <!-- PUT THE STYLESHEET LINK HERE -->-->
<!--    <link rel="stylesheet" href="css/final.css">-->
<!--    <link rel="stylesheet" href="css/modal.css">-->
<!--    <!--  <link rel="stylesheet" href="css/test.css">-->-->
<!--    <!--[if lt IE 9]>-->
<!--    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<!--    <![endif]-->-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
<!--</head>-->
<!---->
<!---->
<!--<body>-->
<!---->
<!---->
<?php
//require ('includes/header.php'); ?>
<!---->
<!---->
<!---->
<!---->
<!--    <section  id="mainindex" class="row">-->
<!--        <h2>NOTRE CATALOGUE</h2>-->
<!---->
<!--        <div class="index ">-->
<!---->
                    <?php
                    foreach ($articles as $id => $produit) {
                    //       var_dump($produit);
                    ?>
            <div class=" expertise col-lg-offset-2 ">
                <div class=" toto col-lg-6">
                        <div class="col-lg-6 box product full">
                                <img src='<?="images/". $produit['picture'] ?>'/>
                            <p><?= $produit['name'] ?></p>
                            <p class=".prix"><?= $produit['price'] ?></p>
                            <p class="voir"><?= $produit['description'] ?></p>
                            <a class= "add" href="#">add</a>
                            <a href="detail.php?item_id="<?= $id ?>>Acheter</a>
                            <!--Ici l'ajout du modal pour ensuite rediriger vers le paiement
                            <div id="detail_produit">
                                <h3></h3>
                                <img src="" />
                                <p></p>
                                <div id="resa"><a class="reservation" href="reservation.php">Voir en détails</a></div>
                            </div>
                        </div>
                        </div>

                </div>

            </div>

        <?php
        } // foreach
        ?>
<!---->
<!--    </section>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<?php //include ('includes/footer.php'); ?>
<!--<script src="js/page_boutique.js"></script>-->
<!--<script src="js/modal_boutique.js"></script>-->
<!--<script src="js/jquery-2.2.3.min.js"></script>-->
<!--<script src="js/jquery-ui.min.js"></script>-->
<!--</body>-->
<!--</html>-->
<!---->