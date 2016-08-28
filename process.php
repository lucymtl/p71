<?php
/**
 * Created by PhpStorm.
 * User: findomba
 * Date: 2016-08-27
 * Time: 17:40
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
    )


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



);

$total =65;
$totalttc =80.45;
$paypal="#";
$port = 10.0;
$user ="lucilleindomba_api1.gmail.com";
$password = "FSW3DGCM9QEQ8GL5";
$signature = "An5ns1Kso7MWUdW4ErQKJJJ4qi4-AF8YR7cRvea4HWQnm8QiZTF4wuef";


$params = array(
    'METHOD' => 'GetExpressCheckoutDetails',
    'VERSION' => '124.0',
    'TOKEN' => $_GET['token'],
    'USER' => $user,
    'SIGNATURE' => $signature,
    'PWD' => $password,
);


$params = http_build_query($params);

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
var_dump($responseArray);

?>





