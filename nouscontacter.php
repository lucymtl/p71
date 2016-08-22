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
    $phone_valide = (1 === !preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $phone));
    if (!$phone) {
        $phone_msg_validation = "Format du numero :514-123-123";
    }
}



//// Le champ sexe
//$sexe = ""; // Contenu du champ sexe (sexe_h ou sexe_f)
//$sexe_valide = true; // Le champ est valide par défaut
//$sexe_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le sexe n'est pas coché
//if ($receiving) {
//    $sexe_valide = array_key_exists('sexe', $_POST)
//        && in_array($_POST['sexe'], array('sexe_h', 'sexe_f')); // Le champ est valide par défaut
//    if ($sexe_valide) {
//        $sexe = $_POST['sexe'];
//    } else {
//        $sexe_msg_validation = "Le sexe n'est pas indiqué";
//    }
//}



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
</head>
<body>

<!-- HEADER -->
<section>
    <div class="col-lg-4 col-md-2 col-sm-2 col-xs-2 "><a href="accueil.php"><img src="images/logo_bfw.png" alt="logo digikan" /></a></div>
    <div class=" col-lg-8 col-md-10 col-sm-10 navbar">
        <div class="navbar-inner">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="col-md-10  col-sm-10 col-sm-offset-2 col-xs-12 btn navbar btn-navbar collapse" data-toggle="collapse" data-target=".nav-collapse">

                <span class="icon-bar">MENU</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <!--<a class="brand" href="#">DIGIKAN</a>-->

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class=" col-lg-offset-3 nav-collapse">
                <nav >
                    <ul class=" nav navbar-nav">
                        <li class=""><a href="accueil.php">ACCUEIL</a></li>
                        <li><a href="apropos.php">A PROPOS</a></li>
                        <li><a href="service.php">NOS SERVICES</a></li>
                        <li><a href="realisations.php">REALISATIONS</a></li>
                        <li><a href="nouscontacter.php">CONTACT</a></li>
                        <li><a href="Ecommerce/boutique.php">BOUTIQUE</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

</section>

<section></section>

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


<section class="contact">
    <div class="content-wrap">
        <div class="social">
            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
            <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
        </div>

        <div><img src="images/logo_bfw.png" alt="logo client"></div>

        <p><a href="mailto:hello@your-email.com">hello@digikan.com</a></p>


        <footer>
            <p class="copyright">Copyright &#169; 2016 by Lucy Ind</p>
        </footer>
    </div>
</section>

</body>
</html>