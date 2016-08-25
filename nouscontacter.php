<?php

//var_dump($_SERVER['REQUEST_METHOD']);

/*Validation des données (seulement si on est en POST) */
//var_dump($_POST);
$receiving = ('POST' === $_SERVER['REQUEST_METHOD']); // On est en réception des données de formulaire

// Le champ text nom
$prenom = ""; // Contenu du champ nom
$prenom_valide = true; // Le champ est valide par défaut
$prenom_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ nom n'est pas valide
if ($receiving && array_key_exists('prenom', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $prenom_valide = (1 === preg_match('/\w{2,}/', $prenom));
    if (!$prenom_valide) {
        $prenom_msg_validation = "Le prenom doit comporter au moins deux lettres";
    }
}



// Le champ text nom
$nom = ""; // Contenu du champ nom
$nom_valide = true; // Le champ est valide par défaut
$nom_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le champ nom n'est pas valide
if ($receiving && array_key_exists('nom', $_POST)) {
    // Filtrer les caractères invalides (caractères incompatibles avec le SQL)
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    // Validation du nom avec
    $nom_valide = (1 === preg_match('/\w{2,}/', $nom));
    if (!$nom_valide) {
        $nom_msg_validation = "Le nom doit comporter au moins deux lettres";
    }
}




$email= "";
$email_valide = true;
$email_msg_validation = '';
if ($receiving && array_key_exists('email',$_POST)) {
    $email = filter_input(INPUT_POST, 'email',FILTER_VALIDATE_EMAIL);
//    $emailErr = "Email is required";
    $email_valide = (1 === preg_match('/\w{2,}/', $email));
    // check if e-mail address is well-formed
    if (!$email) {
        $email_msg_validation = "format email invalide";
    }
}


$phone= "";
$phone_valide = true;
$phone_msg_validation = '';
if ($receiving && array_key_exists('phone',$_POST)) {
    $phone = filter_input(INPUT_POST, 'phone',FILTER_VALIDATE_EMAIL);
    $phone_valide = (1 === !preg_match("/[1-9][01][0-9]-?[0-9]{3}-=[0-9]{4}", $phone));
    if (!$phone) {
        $phone_msg_validation = "Format du numero invalide";
    }
}


// Un champ commentaire (textarea)
$commentaire = ""; // Contenu du champ commentaire
$commentaire_valide = true; // Le champ est valide par défaut
$commentaire_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le commentaire n'est pas suffisamment rempli
if ($receiving) {
    $commentaire_valide = array_key_exists('commentaire', $_POST);
    $commentaire = filter_input(INPUT_POST, 'commentaire', FILTER_SANITIZE_STRING);
    $commentaire_valide = (1 === preg_match('/\w{10,}/', $commentaire));
    if ( ! $commentaire_valide) {
        $commentaire_msg_validation = "Le commentaire doit contenir au moins dix caractères";
    }
}



//$infolettre = "";
//$infolettre_valide = true; // Le champ est valide par défaut
//$infolettre_msg_validation = ''; // Le message à renvoyer à l'utilisateur
//if ($receiving) {
//    $infolettre_valide = array_key_exists('infolettre', $_POST)
//        && is_array($_POST,'infolettre');
//    if ($infolettre_valide) {
//        $infolettre = $_POST,'infolettre'; // Attention $role est un array ici
//    } else {
//        $role_msg_validation = "Aucun role n'est sélectionné";
//    }
//}



/************Pour le renvoi vers la boite gmail************************************/
////form validation vars
//$formok = true;
//$errors = array();
//
////sumbission data
//$ipaddress = $_SERVER['REMOTE_ADDR'];
//$date = date('d/m/Y');
//$time = date('H:i:s');
//
////form data
//$name = $_POST['name'];
//$email = $_POST['email'];
//$telephone = $_POST['telephone'];
//$enquiry = $_POST['enquiry'];
//$message = $_POST['message'];
//$apikey = 'key';
//$listID = 'id';
//
//
////
//if (!empty($_POST['newsletter'])) {
//    $url = sprintf('http://api.mailchimp.com/1.2/?method=listSubscribe&apikey=%s&id=%s&email_address=%s&merge_vars[OPTINIP]=%s&merge_vars[NAME]=name&output=json', $apikey, $listID, $email, $_SERVER['REMOTE_ADDR']);
//    $ch = curl_init($url);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    $data = curl_exec($ch);
//    curl_close($ch);
//    $arr = json_decode($data, true);
//
//}
////validate form data
//
////validate name is not empty
//if(empty($name)){
//    $formok = false;
//    $errors[] = "You have not entered a name";
//}
//
////validate email address is not empty
//if(empty($email)){
//    $formok = false;
//    $errors[] = "You have not entered an email address";
////validate email address is valid
//}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//    $formok = false;
//    $errors[] = "You have not entered a valid email address";
//}
//
////validate message is not empty
//if(empty($message)){
//    $formok = false;
//    $errors[] = "You have not entered a message";
//}
////validate message is greater than 20 charcters
//elseif(strlen($message) < 20){
//    $formok = false;
//    $errors[] = "Your message must be greater than 20 characters";
//}
//
////send email if all is ok
//if($formok){
//    $headers = "From: email.ca" . "\r\n";
//    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//
//    $emailbody = "<p>You have recieved a new message from the enquiries form on your website.</p>
//                  <p><strong>Name: </strong> {$name} </p>
//                  <p><strong>Email Address: </strong> {$email} </p>
//                  <p><strong>Telephone: </strong> {$telephone} </p>
//                  <p><strong>Message: </strong> {$message} </p>
//                  <p>This message was sent from the IP Address: {$ipaddress} on {$date} at {$time}</p>";
//
//    mail("email@gmail.com","New Enquiry",$emailbody,$headers);
//
//}
//
////what we need to return back to our form
//$returndata = array(
//    'posted_form_data' => array(
//        'name' => $name,
//        'email' => $email,
//        'telephone' => $telephone,
//        'message' => $message
//    ),
//    'form_ok' => $formok,
//    'errors' => $errors
//);
//
//
//
//
////if this is not an ajax request
//if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
//    //set session variables
//    session_start();
//    $_SESSION['cf_returndata'] = $returndata;
//
//    //redirect back to form
//    header('location: ' . $_SERVER['HTTP_REFERER']);
//}
//


?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence DIGIKAN |NOUS CONTACTER</title>
    <!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600 Merriweather|Pacifico' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- PUT THE STYLESHEET LINK HERE -->
    <link rel="stylesheet" href="css/final.css">
    <!--  <link rel="stylesheet" href="css/test.css">-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>

<!-- HEADER -->

<?php
include ('includes/header.php'); ?>



<section class="row"></section>

<section class="row real">

        <div class=" mandat ">
            <div class=" col-lg-5 img-g">
                <img src="images/img_femme_travail.jpg" width="650" height="400" alt="logo client">
                <p class="msg">Prenez contact avec nous même pour prendre  un Café!</p>
                <span class="msg">Nous vous repondrons dans les plus brefs délais!</span>
            </div>

            <div class="col-lg-5 ">

                <form class="form-horizontal" method="post">-->
                    <fieldset>
                    <legend class="text-center header">HELLO!</legend>
                    <div class="form-group">
                    <div class=" col-md-10 col-md-offset-1">
                        <span <?= $receiving && ( ! $prenom_valide) ? 'class="invalide"' : '' ?>>
                    <label for="prenom">Prénom*</label>
                    <input id="prenom" name="prenom" type="text" value="<?= $prenom ?>" placeholder="prenom" class="form-control">
                            <?php if ($receiving && ( ! $prenom_valide)) {
                                echo "<span class='msg_validation'>$prenom_msg_validation<span>";
                            } ?>
                    </div>
                    </div>
                            </span>

                    <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <span <?= $receiving && ( ! $nom_valide) ? 'class="invalide"' : '' ?>>
                    <label for="nom">Nom*</label>
                    <input id="nom" name="nom" type="text" value="<?= $nom ?>" placeholder="nom" class="form-control">
                        <?php if ($receiving && ( ! $nom_valide)) {
                            echo "<span class='msg_validation'>$nom_msg_validation<span>";
                        } ?>
                    </div>
                    </div>
                        </span>



                    <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <span <?= $receiving && ( ! $email_valide) ? 'class="invalide"' : '' ?>>
                    <label for="email">Courriel*</label>
                    <input id="email" name="email" type="text" value="<?= $email ?>"   placeholder="Courriel" class="form-control">
                            <?php if ($receiving && ( ! $email_valide)) {
                                echo "<span class='msg_validation'>($email_msg_validation)<span>";
                            } ?>
                    </div>
                    </div>
</span>

                    <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                         <span <?= $receiving && ( ! $phone_valide) ? 'class="invalide"' : '' ?>>
                    <label for="phone">Télephone*</label>
                    <input id="phone" name="phone" type="text" value="<?= $phone ?>"  placeholder="telephone" class="form-control">
                             <?php if ($receiving && ( ! $phone_valide)) {
                                 echo "<span class='msg_validation'>($phone_msg_validation)<span>";
                             } ?>
                    </div>
                    </div>
</span>



                        <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <span <?= $receiving && ( ! $commentaire_valide) ? 'class="invalide"' : '' ?>>
                    <label for="commentaire">Message*</label>
                    <textarea class="form-control" id="commentaire" name="commentaire" placeholder="Trez votre message ici ..." rows="7"><?= $commentaire ?></textarea>
                            <?php if ($receiving && ( ! $commentaire_valide)) {
                                echo "<span class='msg_validation'>$commentaire_msg_validation<span>";
                            } ?>
                    </div>
                    </div>
                        </span>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                        <span <?= $receiving && ( ! $infolettre_valide) ? 'class="invalide"' : '' ?>>
                            <label for="infolettre">Je souhaite souscrire à votre Newsletter</label>
                            <input type="checkbox" id=infolettre" name="infolettre" value="infolettre"
                                <?= $receiving && is_array($infolettre) && in_array('role_lecteur',$infolettre) ? 'checked="checked"' : '' ?>
                            />

                            <?php if ($receiving && (!$infolettre_valide)) {
                                echo "<span class='msg_validation'>$infolettre_msg_validation<span>";
                            } ?>
                            </div>
                             </div>
                        </span>











                        <div class="form-group">
                    <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                        <button><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">Relancer la page</a></button>
                    </div>
                    </div>
                    </fieldset>
                    </form>
            </div>
        </div>

</section>

<section class="row"></section>

<?php
include ('includes/footer.php'); ?>
<!--<section class="contact">-->
<!--    <div class="content-wrap">-->
<!--        <div class="social">-->
<!--            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>-->
<!--            <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>-->
<!--            <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>-->
<!--            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>-->
<!--        </div>-->
<!---->
<!--        <div><img src="images/logo_bfw.png" alt="logo client"></div>-->
<!---->
<!--        <p><a href="mailto:hello@your-email.com">hello@digikan.com</a></p>-->
<!---->
<!---->
<!--        <footer>-->
<!--            <p class="copyright">Copyright &#169; 2016 by Lucy Ind</p>-->
<!--        </footer>-->
<!--    </div>-->
<!--</section>-->

</body>
</html>