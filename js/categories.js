// js/categories.js

document.addEventListener('DOMContentLoaded', () => {
    const llistat = document.getElementById('productes-categoria');
    const detall  = document.getElementById('detall-producte');

    // Demana un fragment HTML al servidor i el posa dins del contenidor
    async function carregar(url, contenidor) {
        contenidor.innerHTML = '<p>Carregant...</p>';
        try {
            const resposta = await fetch(url);
            if (!resposta.ok) throw new Error(resposta.status);

            contenidor.innerHTML = await resposta.text();
            contenidor.scrollIntoView({ behavior: 'smooth' });
        } catch (error) {
            contenidor.innerHTML = '<p>No s\'ha pogut carregar la informació.</p>';
        }
    }

    // 1. Clic a una categoria -> llistat de productes
    document.querySelectorAll('.categoria').forEach((enllac) => {
        enllac.addEventListener('click', (event) => {
            event.preventDefault();        // evita que el navegador carregui una altra pàgina
            detall.innerHTML = '';         // amaguem el detall del producte anterior
            carregar(`index.php?accio=productes-categoria&categoria=${enllac.dataset.id}`, llistat);
        });
    });

    // 2. Clic a un producte -> detall del producte
    // Els productes s'afegeixen després de carregar la pàgina, per això escoltem
    // els clics al contenidor i mirem si s'ha clicat dins d'un .producte
    llistat.addEventListener('click', (event) => {
        const producte = event.target.closest('.producte');
        if (!producte) return;

        event.preventDefault();
        carregar(`index.php?accio=detall-producte&producte=${producte.dataset.id}`, detall);
    });
});
