/**
 * Created by lulu on 2016-08-21.
 */
$(function () {
    console.log("Le dom est chargé");

$('#envoyer').click(function () {
    valid = true;
    if($("#prenom").val() == "") {
        $('#prenom').next('.error-message').fadeIn.text('Veuillez entrez un prenom');

        valid = false;
    }
    else {
        $('#prenom').next('.error-message').fadeOut();

    }

    if($("#nom").val() == "") {
        $('#nom').next('.error-message').fadeIn.text('Veuillez entrez un nom');

        valid = false;
    }

    if($("#email").val() == "") {
        $('#email').next('.error-message').fadeIn.text('Veuillez entrez un Courriel');

        valid = false;
    }

    if($("#phone").val() == "") {
        $('#phone').next('.error-message').fadeIn.text('Veuillez entrez  un telephone valide');

        valid = false;
    }

    return valid;
});
    
});