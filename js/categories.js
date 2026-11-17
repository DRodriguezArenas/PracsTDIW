// js/categories.js
// Llistat de productes i detall de producte amb FETCH (sense recarregar la pàgina).

document.addEventListener('DOMContentLoaded', () => {
    const llistat = document.getElementById('productes-categoria');
    const detall  = document.getElementById('detall-producte');

    // Demana un fragment HTML al servidor i el posa dins del contenidor
    async function carregar(url, contenidor) {
        contenidor.innerHTML = '<p class="carregant">Carregant...</p>';
        try {
            const resposta = await fetch(url);
            if (!resposta.ok) throw new Error(resposta.status);
            contenidor.innerHTML = await resposta.text();
        } catch (error) {
            contenidor.innerHTML = '<p class="buit">No s\'ha pogut carregar la informació.</p>';
        }
    }

    // ---------- 1. Clic a una categoria -> llistat de productes ----------
    document.querySelectorAll('.categoria').forEach((enllac) => {
        enllac.addEventListener('click', async (event) => {
            event.preventDefault();        // evita que el navegador carregui una altra pàgina

            document.querySelectorAll('.categoria').forEach((c) => c.classList.remove('activa'));
            enllac.classList.add('activa');

            await carregar(`index.php?accio=productes-categoria&categoria=${enllac.dataset.id}`, llistat);
            llistat.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // ---------- 2. Detall de producte ----------
    // La classe "veient-producte" al <body> amaga la resta de la pàgina (CSS)
    // i mostra només el detall, com si fos una pàgina nova.
    async function obrirProducte(id) {
        document.body.classList.add('veient-producte');
        window.scrollTo(0, 0);
        await carregar(`index.php?accio=detall-producte&producte=${id}`, detall);
    }

    function tancarProducte() {
        document.body.classList.remove('veient-producte');
        detall.innerHTML = '';
        if (llistat.innerHTML !== '') llistat.scrollIntoView();
    }

    // Els productes s'afegeixen després de carregar la pàgina (llistat i "També et pot agradar"),
    // per això escoltem els clics a tot el document i mirem si s'ha clicat dins d'un .producte
    document.addEventListener('click', (event) => {
        const producte = event.target.closest('.producte');
        if (producte) {
            event.preventDefault();
            history.pushState({ producte: producte.dataset.id }, '', `#producte-${producte.dataset.id}`);
            obrirProducte(producte.dataset.id);
            return;
        }

        if (event.target.closest('.tornar')) {
            history.back();                // torna a l'estat anterior (el llistat)
        }
    });

    // Botó "enrere" del navegador
    window.addEventListener('popstate', (event) => {
        if (event.state && event.state.producte) {
            obrirProducte(event.state.producte);
        } else {
            tancarProducte();
        }
    });

    // ---------- 3. Formulari del detall ----------
    // Botons − i + de la quantitat
    detall.addEventListener('click', (event) => {
        const boto = event.target.closest('.menys, .mes');
        if (!boto) return;

        const input = detall.querySelector('.quantitat input');
        const valor = parseInt(input.value, 10) || 1;
        input.value = boto.classList.contains('mes') ? valor + 1 : Math.max(1, valor - 1);
    });

    // "Afegir al cabàs" encara no fa res (sessió 4): evitem que recarregui la pàgina
    detall.addEventListener('submit', (event) => {
        event.preventDefault();
        detall.querySelector('.missatge-cabas').textContent = 'El cabàs estarà disponible molt aviat.';
    });
});
