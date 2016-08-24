/**
 * Created by findomba on 2016-08-24.
 */

var mb_data = {
    'container' : null // Le conatiner pour le modal_box, placé automatiquement en fin de body de la page
};

/**
 * Rechercher le container du modal_box et s'il n'existe pas (1ère fois), le créer
 * mettre à jour la variable mb_container
 */
function mb_create_container() {
    mb_data.container = $('.mb_container');
    if (mb_data.container.length == 0) { // N'existe pas : il faut le créer
        mb_data.container = $('<div>')
            .addClass('mb_container')
            .appendTo('body');
        $('<div>')
            .appendTo(mb_data.container)
            .addClass('mb_background')
            .on('click', function() {
                mb_close();
            });
        console.log('mb_container créé');
    }
}

/**
 * Afficher la modal_box et son contenu
 *
 * @param target (string) : Sélecteur de l'élément (une boite de dialogue) à afficher dans le container dans le modal_box
 * @param closingItems (string) : Sélecteur du ou des éléments qui doivent fermer (au click) le modal_box
 * @param css_options : Des options css à surcharger dans le fond du container
 */
function mb_open(target, closingItems, css_options) {
    console.log('Ouverture de ', target);
    if (mb_data.container === null) {
        mb_create_container();
    }
    if (css_options !== undefined) {
        mb_data.container.find('.mb_background').css(css_options);
    }
    var clone = $(target)
        .clone()
        .addClass('mb_item')
        .appendTo(mb_data.container)
        .show()
        .parent() // Remonter juste d'un cran = C'est le mb_container
        .fadeIn();

    if (closingItems !== undefined) {
        clone
            .find(closingItems) // Sélectionne parmi les enfants les deux liens <a> de fermeture
            .on('click', function() {
                mb_close(); // Appel de fermer avec l'élément <a>
            });
    }
}

/**
 * Fermer la boite de dialogue
 */
function mb_close() {
    console.log('Fermeture de la boite de dialogue');
    $(mb_data.container)
        .fadeOut(10000,function(){
            $(this)
                .find('.mb_item')
                .remove();
        });
}



