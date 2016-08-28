/**
 * Created by lulu on 2016-08-21.
 */
'use srtict';

$(function(){
    console.log('Le dom est chargé.');

    $('#envoyer').click(function () {
        valid = true;
        if ($('#nom').val() == "") {
            $('#nom').css('border-color', '#FFF0000');
            $('#nom').next('.error-msg').fadeIn.text('Champs pas valide');

            valid = false;
        }
        else {
            $('#nom').css('border-color', '#FF0000');
            $('#nom').next('.error-msg').text('Veuillez entrer un mom valide');

        }


        if ($('#email').val() == "") {
            $('#email').css('border-color', '#FFF0000');
            $('#email').next('.error-msg').fadeIn.text('Champs pas valide');
            valid = false;
        }

        else {
            if (!$('#email').val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i));
            $('#email').css('border-color', '#FF0000');
            $('#email').next('.error-msg').text('Veuillez entrer un email valide');

        }

        if ($('#commentaire').val() == "") {
            $('#commentaire').css('border-color', '#FFF0000');
            $('#commentaire').next('.error-msg').fadeIn.text('Veuillez entre un message');
            valid = false;
        }
        else {
            if (!$('#commentaire').val());
            $('#commentaire').css('border-color', '#00FF00');
            $('#commentaire').next('.error-msg').text('Vous n avaez pas remplir de messsage');

        }

        return valid;




    });

    });






