<?php
if (!empty($_POST)){
   extract($_POST);
    $valid = true;
    if (empty($nom)){
        $valid=false;
        $erreurnom ="Vous navez pas rempli votre nom";
    }
if (!preg_match('/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i',$email)){
    $valid=false;
    $erreuremail ="Votre email n'est pas valide";
    echo'email pas valid';

    }

    if (empty($email)){
        $valid=false;
        $erreuremail ="Vous navez pas rempli votre email";
    }


    if (empty($commentaire)){
        $valid=false;
        $erreurcommentaire ="Vous navez pas rempli votre message";
    }

    if($valid){
       $to= 'lucyindomba@gmail.com';
        $sujet = $nom. 'a contacté le site Agence DIGIKAN';
        $header = "From: apache@panel.projetisi.com \n";
        $header = "Reply-To: $email";
        $commentaire = stripslashes($commentaire);
        $nom = stripslashes($nom);
        $message = stripslashes($commentaire);
        if (mail($to,$sujet,$message,$header)){
        $erreur = 'Votre message nous ai bien parvenu';
    unset($nom);
    unset($email);
    unset($commentaire);
        }
        else{
            $erreur = 'Une erreur est survenue votre mail est pas envoyé';
        }
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
    <!--  <link rel="stylesheet" href="css/test.css">-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


</head>
<body>

<!-- HEADER -->

<?php
//include ('includes/header.php'); ?>



<section class="row"></section>

<div class="row ">

        <div class=" mandat ">
            <div class=" col-lg-5 img-g">
                <img src="images/logo_evenko.jpg" width="650" height="400" alt="logo client">

            </div>

            <div class="col-lg-7 ">

                <form class="col-lg-8 col-lg-offset-2   " action="nouscontacter.php" method="post">
                    <fieldset>
                    <legend class="">HELLO!</legend>
                        <p class="msg">Prenez contact avec nous même pour prendre  un Café!</p>
                        <p class="msg">Nous vous repondrons dans les plus brefs délais!</p>
                        <?php if (isset($erreur)){echo " <p>$erreur</p>"; }
                        ?>

                    <div class="">
                    <div class="col-md-10 col-md-offset-1">
                    <label for="nom">Nom*</label>
                    <input id="nom" name="nom" type="text" value="<?php if(isset($nom)) echo $nom ;?>" placeholder="nom" class="">
                    <span class="error-msg"><?php if(isset($erreurnom)) echo $erreurnom ;?></span>
                    </div>
                    </div>




                    <div class="">
                    <div class="col-md-10 col-md-offset-1">
                    <label for="email">Courriel*</label>
                    <input id="email" name="email" type="text" value="<?php if(isset($email)) echo $email; ?>"   placeholder="Courriel" class="">
                        <span class="error-msg"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
                    </div>
                    </div>


                    <div class="">
                    <div class="col-md-10 col-md-offset-1">
                    <label for="phone">Télephone*</label>
                    <input id="phone" name="phone" type="text" value=""  placeholder="telephone" class="">
                        <span class="error-msg"></span>
                    </div>
                    </div>




                        <div class="">
                    <div class="col-md-10 col-md-offset-1">
                    <label for="commentaire">Message*</label>
                    <textarea class="" id="commentaire" name="commentaire" placeholder="Trez votre message ici ..." rows="7"><?php if(isset($commentaire)) echo $commentaire ?></textarea>
                        <span class="error-msg"><?php if(isset($erreurcommentaire)) echo $erreurcommentaire; ?></span>
                    </div>
                    </div>


                        <div class="">
                            <div class="col-md-10 col-md-offset-1">

                            <label for="infolettre">Je souhaite souscrire à votre Newsletter</label>
                            <input type="checkbox" id=infolettre" name="infolettre" value="infolettre">
                            </div>
                             </div>




                        <div class="">
                    <div class="col-md-12 text-center">
                    <button id="envoyer" type="submit" class="">Envoyer</button>
                        <button><a href="<?= basename($_SERVER["SCRIPT_FILENAME"]) ?>">Relancer la page</a></button>
                    </div>
                    </div>
                    </fieldset>
                    </form>
            </div>
        </div>

</div>

<section class="row"></section>

<?php
include ('includes/footer.php'); ?>

<script type="text/javascript" src="js/contact.js"></script>
<script src="https://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>