<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-08-26
 * Time: 11:56
 */
$products = array(

    array(
    "name" => 'T-shirt trop de Poutine',
    "description" => 'blaaaaaa,',
    "price" =>25,
        "priceTTC" =>30.15,
    "photo" => 'logo_bfw.png',
    "count" => '1'
    ) ,



    array(
        "name" => 'T-shirt SOKR',
        "description" => 'blaaaaaa,',
        "price" =>20,
        "priceTTC" =>25.15,
        "photo" => 'logo_bfw.png',
        "count" => '2'
    ) ,


    array(
        "name" => 'Trop de Poutine" Bleu',
        "description" => 'blaaaaaa,',
        "price" =>35,
        "priceTTC" =>37.15,
        "photo" => 'logo_bfw.png',
        "count" => '1'
    ) ,

    array(
        "name" => 'T Shirt Trop de Poutine Noir',
        "description" => 'blaaaaaa,',
        "price" =>30,
        "priceTTC" =>32.15,
        "photo" => 'logo_bfw.png',
        "count" => '2'
    ) ,

    array(
        "name" => 'T-shirt Trop de Poutine Noir modele poche',
        "description" => 'blaaaaaa,',
        "price" =>38,
        "priceTTC" =>39.15,
        "photo" => 'logo_bfw.png',
        "count" => '1'
    ) ,

    array(
        "name" => 'T-shirt Trop de Poutine Bleu modele poche',
        "description" => 'blaaaaaa,',
        "price" =>32,
        "priceTTC" =>33.15,
        "photo" => 'logo_bfw.png',
        "count" => '2'
    ) ,

    array(
        "name" => 'T-shirt Trop de Poutine Bleu modele poche',
        "description" => 'blaaaaaa,',
        "price" =>32,
        "priceTTC" =>34.15,
        "photo" => 'logo_bfw.png',
        "count" => '1'
    ) ,


    array(
        "name" => 'Coque de telephone',
        "description" => 'blaaaaaa,',
        "price" =>32,
        "priceTTC" =>32.15,
        "photo" => 'logo_bfw.png',
        "count" => '2'
    )



);

$total = 358;
$totalttc =371.8;
$paypal="#";

$user ="lucilleindomba_api1.gmail.com";
$password = "FSW3DGCM9QEQ8GL5";
$signature = "An5ns1Kso7MWUdW4ErQKJJJ4qi4-AF8YR7cRvea4HWQnm8QiZTF4wuef";


$params = array(
    'METHOD' => 'SetExpressCheckout',
    'USER' => $user,
    'SIGNATURE' => $signature,
    'PWD' => $password,
    'RETURNURL' => 'http://localhost/projet_final_p71/boutique.php',
    'CANCELNURL' => 'http://localhost/projet_final_p71/boutique.php',



    'PAYMENTREQUEST_0_AMT' => $totalttc,
    'PAYMENTREQUEST_0_CURRENCYCODE' => 'CAD'

);
 $endpoint = 'https://api-3T.paypal.com/nvp';
$curl = curl_init();
curl_setopt_array($curl,array(
    CURLOPT_URL => $endpoint,
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $params,
    CURLOPT_RETURNTRANSFER =>1,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_VERBOSE =>1
));

$response = curl_exec($curl);
$responseArray = array();
parse_str( $response,$responseArray);
var_dump($responseArray);
curl_close($curl);
die();



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
    <link rel="stylesheet" href="css/modal.css">
    <!--  <link rel="stylesheet" href="css/test.css">-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>






