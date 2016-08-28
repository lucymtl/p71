'use strict';




var TshirttropdePoutine = {
    name : 'T-shirt trop de Poutine',
    description : 'blaaaaaa,',
    prix :25,
    photo : 'logo_bfw.png'
};

var TshirtSOKR = {
    name : 'T-shirt SOKR',
    description : 'blaaaaaa,',
    prix :20,
    photo : 'logo_bfw.png'
};

var TshirtTropdePoutineBleu = {
    name : 'T-shirt "Trop de Poutine" Bleu',
    description : 'blaaaaaa,',
    prix :35,
    photo : 'logo_bfw.png'
};

var TShirtTropdePoutineNoir = {
    name : 'T Shirt Trop de Poutine Noir',
    description : 'blaaaaaa,',
    prix :30,
    photo : 'logo_bfw.png'
};

var TshirtTropdePoutineNoirmodelepoche = {
    name : 'T-shirt Trop de Poutine Noir modele poche',
    description : 'blaaaaaa,',
    prix :30,
    photo : 'logo_bfw.png'
};

var TshirtTropdePoutineBleumodelepoche1 = {
    name : 'T-shirt Trop de Poutine Bleu modele poche',
    description : 'blaaaaaa,',
    prix :35,
    photo : 'logo_bfw.png'
};

var TshirtTropdePoutineBleumodelepoche = {
    name : 'T-shirt Trop de Poutine Bleu modele poche',
    description : 'blaaaaaa,',
    prix :35,
    photo : 'logo_bfw.png'
};

var Coquedetelephone = {
    name : 'Coque de telephone',
    description : 'blaaaaaa,',
    prix :25,
    photo : 'logo_bfw.png'
};



var mesproduits = {
    //site_name : 'EVASION',
    //categories : ['Europe','Amerique','Antilles'],
    produits : [
        TshirttropdePoutine,
        TshirtSOKR,
        TshirtTropdePoutineBleu,
        TShirtTropdePoutineNoir,
        TshirtTropdePoutineNoirmodelepoche,
        TshirtTropdePoutineBleumodelepoche1,
        TshirtTropdePoutineBleumodelepoche,
        Coquedetelephone
    ]
};




//Fonction pour la vue du modal box dans la page boutique.
$(function(){
    console.log('LE DOM EST CHARGÉ!');
//Ajout d'une classe en jQuery pour creer un bouton qui permettra de faire apparaitre la modal box
    $('.voir')
        .addClass('forfait_detail')
        .text('Détails sur le produit JAVASCRIPT')
        .insertAfter('.add');

    $('.forfait_detail').click(function(){
        //var numero_forfait = $(this).closest('li').prop('data-idforfait');
        //console.log(numero_forfait);
        var article = mesproduits.produits[numero_article]; // Le produit cliqué
        $('#detail_produit').find('h3').html(mesproduits.name);
        $('#detail_produit').find('img').attr('src','images/'+ mesproduits.photo);
        $('#detail_produit').find('p').html(mesproduits.description);
        $('#detail_produit').find('a.reservation')
            .prop('href', 'reservation.html?idproduits=' + numero_article);//renoi vers pay Pal

        mb_open('#detail_produit');
    });




});







//$(function(){
//    // Au chargement de la page, on crée le catalogue (liste des forfaits)
//    for (var i = 0 ; i <= DBNAME.products.length - 1;  i++) {
//        var article =DBNAME.products()[i]; // Le produit considéré
//        // Créer et accrocher un nouveau li
//        var new_li = $('<li>')
//            .appendTo('.col-lg-2 box')
//            .prop('data-idforfait', i);
//        // Créer et accrocher un nouveau h3
//        $('<h3>')
//            .appendTo(new_li)
//            .text(forfait.name);
//        // Créer et accrocher un nouveau img
//        $('<img>')
//            .appendTo(new_li)
//            .prop('src', 'images/' + forfait.photo)
//            .prop('alt', 'blabla');
//        $('<p>')
//            .appendTo(new_li)
//            .html(forfait.description);
//        $('<a href="#">')
//            .appendTo(new_li)
//            .addClass('forfait_detail')
//            .text('Détails');
//        $('<ul>')
//            .appendTo(new_li)
//            .append('<li>'+'Prix :'+forfait.prix+'$'+' </li>')
//            .append('<li>'+'Destination :'+forfait.categorie+'</li>')
//            .append('<li>'+'Période début saison :' + (forfait.date_debut.toLocaleDateString("fr-FR")) + '</li>')
//            .append('<li>'+'Période fin saison :' + (forfait.date_fin.toLocaleDateString("fr-FR")) +'</li>');
//    }