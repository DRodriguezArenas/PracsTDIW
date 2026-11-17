// js/funcions.js

// Mostra els productes d'una categoria sense recarregar la pàgina (FETCH)
async function mostraProductes(idCategoria){
    var resposta = await fetch("index.php?accio=productes-categoria&categoria=" + idCategoria);
    var respostaTxt = await resposta.text();
    document.getElementById("productes").innerHTML = respostaTxt;
    document.getElementById("productes").scrollIntoView();
}

// Mostra el detall d'un producte sense recarregar la pàgina (FETCH)
async function mostraProducte(idProducte){
    var resposta = await fetch("index.php?accio=detall-producte&producte=" + idProducte);
    var respostaTxt = await resposta.text();
    document.getElementById("detall").innerHTML = respostaTxt;
    document.body.className = "veient-producte";   // el CSS amaga la resta i mostra el detall
    window.scrollTo(0, 0);
}

// Tanca el detall i torna al llistat de productes
function tancaProducte(){
    document.body.className = "";
    document.getElementById("productes").scrollIntoView();
}

// Menú desplegable d'usuari amb jQuery
$(document).ready(function(){
    $("#boto-usuari").click(function(){
        $("#desplegable").slideToggle();
    });
});
