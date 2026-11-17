// js/menu.js
// Menú desplegable d'usuari fet amb jQuery.

$(function () {
    // Obrir / tancar el menú en clicar el botó
    $('.boto-usuari').on('click', function (event) {
        event.stopPropagation();
        $('.desplegable').slideToggle(150);
    });

    // Tancar el menú si es clica a qualsevol altre lloc de la pàgina
    $(document).on('click', function () {
        $('.desplegable').slideUp(150);
    });
});
