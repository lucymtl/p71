<?php
require_once('db/defines.php');
require_once('db/conn.php');
//require_once('utils/panier.php');
//$categories = get_categories();

//var_dump($categories);
// Est-ce qu'il y a une categorie (cat_id)  présente dans l'url ?
//$prod_id = false; // Initialiser u premier des items
//if (array_key_exists('prod_id', $_GET) && array_key_exists($_GET['prod_id'], $produit)) {
//    $prod_id = $_GET['prod_id'];
//}
//$tshirt = get_produit_list($prod_id);

$articles = get_produit_list();
//var_dump($articles);

//$total = $articles['price'];
//var_dump($total);
//var_dump($articles);
?>


<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-08-26
 * Time: 11:56
 */
//$products = array(
//
//    array(
//        "name" => 'T-shirt trop de Poutine',
//        "description" => 'blaaaaaa,',
//        "price" =>25,
//        "priceTTC" =>30.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '1'
//    ) ,
//
//
//
//    array(
//        "name" => 'T-shirt SOKR',
//        "description" => 'blaaaaaa,',
//        "price" =>20,
//        "priceTTC" =>25.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '2'
//    ),
//
//
//    array(
//        "name" => 'Trop de Poutine" Bleu',
//        "description" => 'blaaaaaa,',
//        "price" =>35,
//        "priceTTC" =>37.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '1'
//    ) ,
//
//    array(
//        "name" => 'T Shirt Trop de Poutine Noir',
//        "description" => 'blaaaaaa,',
//        "price" =>30,
//        "priceTTC" =>32.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '2'
//    ) ,
//
//    array(
//        "name" => 'T-shirt Trop de Poutine Noir modele poche',
//        "description" => 'blaaaaaa,',
//        "price" =>38,
//        "priceTTC" =>39.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '1'
//    ) ,
//
//    array(
//        "name" => 'T-shirt Trop de Poutine Bleu modele poche',
//        "description" => 'blaaaaaa,',
//        "price" =>32,
//        "priceTTC" =>33.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '2'
//    ) ,
//
//    array(
//        "name" => 'T-shirt Trop de Poutine Bleu modele poche',
//        "description" => 'blaaaaaa,',
//        "price" =>32,
//        "priceTTC" =>34.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '1'
//    ) ,
//
//
//    array(
//        "name" => 'Coque de telephone',
//        "description" => 'blaaaaaa,',
//        "price" =>32,
//        "priceTTC" =>32.15,
//        "photo" => 'logo_bfw.png',
//        "count" => '2'
//    )
//
//
//
//);

//$total =65;
//$totalttc =80.45;
//$paypal="#";
//$port = 10.0;
//$user ="lucilleindomba_api1.gmail.com";
//$password = "FSW3DGCM9QEQ8GL5";
//$signature = "An5ns1Kso7MWUdW4ErQKJJJ4qi4-AF8YR7cRvea4HWQnm8QiZTF4wuef";
//
//
//$params = array(
//    'METHOD' => 'SetExpressCheckout',
//    'VERSION' => '124.0',
//    'USER' => $user,
//    'SIGNATURE' => $signature,
//    'PWD' => $password,
//    'RETURNURL' => 'https://localhost/P71_progress/projet/process.php',
//    'CANCELURL' => 'https://localhost/projet_final_p71/cancel.php',
//
//    'PAYMENTREQUEST_0_AMT' => $totalttc + $port,
//    'PAYMENTREQUEST_0_CURRENCYCODE' => 'CAD',
//    'PAYMENTREQUEST_0_SHIPPINGAMT' => $port,
//    'PAYMENTREQUEST_0_ITEMAMT' => $totalttc,
//
//);
//Affichage des produits dans le panier de l'interface de test SandBox recapitaulatif
//foreach ($products as $k => $product){
//    $params["L_PAYMENTREQUEST_0_NAME$k" ] = $product['name'];
//    $params["L_PAYMENTREQUEST_0_DESC$k"] = $product ['description'];
//    $params["L_PAYMENTREQUEST_0_AMT$k"] = $product ['priceTTC'];
//    $params["L_PAYMENTREQUEST_0_QTY$k"] = $product ['count'];
//}



/******TEST du code  pour connexion avec ma BDD*******
 *********************************************/
$paypal="#";
$port = 10.0;
$user ="lucilleindomba_api1.gmail.com";
$password = "FSW3DGCM9QEQ8GL5";
$signature = "An5ns1Kso7MWUdW4ErQKJJJ4qi4-AF8YR7cRvea4HWQnm8QiZTF4wuef";
$params = array(
    'METHOD' => 'SetExpressCheckout',
    'VERSION' => '124.0',
    'USER' => $user,
    'SIGNATURE' => $signature,
    'PWD' => $password,
    'RETURNURL' => 'https://localhost/P71_progress/projet/process.php',
    'CANCELURL' => 'https://localhost/projet_final_p71/cancel.php',
    'PAYMENTREQUEST_0_AMT' => get_produit_list()['price']+ $port,
    'PAYMENTREQUEST_0_CURRENCYCODE' => 'CAD',
    'PAYMENTREQUEST_0_SHIPPINGAMT' => $port,
//    'PAYMENTREQUEST_0_ITEMAMT' => $totalttc,

);

foreach ($articles as $id => $produit){
    $params["L_PAYMENTREQUEST_0_NAME$id" ] = $produit['name'];
    $params["L_PAYMENTREQUEST_0_DESC$id"] = $produit ['description'];
    $params["L_PAYMENTREQUEST_0_AMT$id"] = $produit['price'];
//    $params["L_PAYMENTREQUEST_0_QTY$id"] = $produit ['count'];
}



$params = http_build_query($params);
//
$endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
$curl = curl_init();
curl_setopt_array($curl,array(
    CURLOPT_URL => $endpoint,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER =>1,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
//    CURLOPT_CAINFO => ,
    CURLOPT_VERBOSE =>1
));
//
$response = curl_exec($curl);
$responseArray = array();
parse_str( $response,$responseArray);
//var_dump($responseArray);

if(curl_errno($curl)){
    var_dump(curl_error($curl));
    curl_close($curl);
    die();
}else{
    if($responseArray['ACK'] == 'Success'){

    }else{
        var_dump($responseArray);
        die();
    }
    curl_close($curl);


}

//curl_close($curl);

$paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' .$responseArray['TOKEN'];
//var_dump($paypal);


/*********FIN test pour connextion avec ma BDD
******************************************/



//
//$params = http_build_query($params);
////
//$endpoint = 'https://api-3T.sandbox.paypal.com/nvp';
//$curl = curl_init();
//curl_setopt_array($curl,array(
//    CURLOPT_URL => $endpoint,
//    CURLOPT_POST => 1,
//    CURLOPT_POSTFIELDS => $params,
//    CURLOPT_RETURNTRANSFER =>1,
//    CURLOPT_SSL_VERIFYPEER => false,
//    CURLOPT_SSL_VERIFYHOST => false,
////    CURLOPT_CAINFO => ,
//    CURLOPT_VERBOSE =>1
//));
////
//$response = curl_exec($curl);
//$responseArray = array();
//parse_str( $response,$responseArray);
////var_dump($responseArray);
//
//if(curl_errno($curl)){
//    var_dump(curl_error($curl));
//    curl_close($curl);
//    die();
//}else{
//    if($responseArray['ACK'] == 'Success'){
//
//    }else{
//        var_dump($responseArray);
//        die();
//    }
//    curl_close($curl);
//
//
//}
//
////curl_close($curl);
//
//$paypal = 'https://www.sandbox.paypal.com/webscr?cmd=_express-checkout&token=' .$responseArray['TOKEN'];
////var_dump($paypal);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence DIGIKAN |BOUTIQUE</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
<!--<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600 Merriweather|Pacifico' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!--     PUT THE STYLESHEET LINK HERE -->
    <link rel="stylesheet" href="css/final.css">
    <link rel="stylesheet" href="css/modal.css">
     <link rel="stylesheet" href="css/test.css">
<!--    [if lt IE 9]>-->
<!--    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>-->
<!--    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>


<body>

<?php
//require ('includes/header.php'); ?>


<!--<style>-->
<!--    table{-->
<!--        background-color: blue;-->
<!--    }-->
<!--</style>-->

<!--Partir tuto pour connection a Pay pal
-------------------------------------------->

<!--<div>-->
<!--    <div>-->
<!--        <div>-->
<!---->
<!---->
<!--            <table class="table table-hover" method="post">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                <th>Produits</th>-->
<!--                <th>Quantite</th>-->
<!--                <th>Prix HT</th>-->
<!--                <th>Prix TTC</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!---->
<!--                <tbody>-->
<!---->
<!--                --><?php //foreach ($products as $k =>$product)
//                {;?>
<!--                <tr>-->
<!--                    <td>--><?//= $product['name']?><!--</td>-->
<!--                    <td>--><?//= $product['count']?><!--</td>-->
<!--                    <td>--><?//= $product['price']?><!--</td>-->
<!--                    <td>--><?//= $product['priceTTC']?><!--$</td>-->
<!---->
<!---->
<!--                </tr>-->
<!--                --><?php
//                }
//                ;?>
<!---->
<!--                <tr>-->
<!--                    <td colspan="2"></td>-->
<!--                    <td><strong>Total</strong></td>-->
<!--                    <td>--><?//= $total?><!--$</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--            <p>-->
<!--                <a href="--><?//= $paypal;?><!--" class="btn btn-primary">Payer</a>-->
<!--                >-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!-- Fin Partir tuto pour connection a Pay pal
-------------------------------------------->





<!--Debut de mon code origine
-------------------------------------------->
<?php
require ('includes/header.php'); ?>




    <section  id="mainindex" class="row">
        <h2>NOTRE CATALOGUE</h2>

        <div class="index ">

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

        </section>

            <?php include ('includes/footer.php'); ?>
<!--            <script src="js/page_boutique.js"></script>-->
<!--            <script src="js/modal_boutique.js"></script>-->
            <script src="js/jquery-2.2.3.min.js"></script>
            <script src="js/jquery-ui.min.js"></script>

</body>
</html>
