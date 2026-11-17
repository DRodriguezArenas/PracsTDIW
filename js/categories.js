// js/categories.js

document.addEventListener('DOMContentLoaded', () => {
    const llistat = document.getElementById('productes-categoria');
    const detall  = document.getElementById('detall-producte');
    const modal   = document.getElementById('modal-producte');

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

    function obrirModal()  { modal.classList.add('oberta');    document.body.classList.add('sense-scroll'); }
    function tancarModal() { modal.classList.remove('oberta'); document.body.classList.remove('sense-scroll'); }

    // 1. Clic a una categoria -> llistat de productes
    document.querySelectorAll('.categoria').forEach((enllac) => {
        enllac.addEventListener('click', async (event) => {
            event.preventDefault();        // evita que el navegador carregui una altra pàgina

            document.querySelectorAll('.categoria').forEach((c) => c.classList.remove('activa'));
            enllac.classList.add('activa');

            await carregar(`index.php?accio=productes-categoria&categoria=${enllac.dataset.id}`, llistat);
            llistat.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // 2. Clic a un producte -> detall del producte dins la finestra emergent
    // Els productes s'afegeixen després de carregar la pàgina, per això escoltem
    // els clics al contenidor i mirem si s'ha clicat dins d'un .producte
    llistat.addEventListener('click', (event) => {
        const producte = event.target.closest('.producte');
        if (!producte) return;

        event.preventDefault();
        obrirModal();
        carregar(`index.php?accio=detall-producte&producte=${producte.dataset.id}`, detall);
    });

    // 3. Tancar la finestra: botó ×, clic a fora o tecla Esc
    modal.addEventListener('click', (event) => {
        if (event.target === modal || event.target.closest('.tancar-modal')) tancarModal();
    });
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') tancarModal();
    });

    // 4. El botó "Afegir al cabàs" encara no fa res (sessió 4): evitem que recarregui la pàgina
    detall.addEventListener('submit', (event) => {
        event.preventDefault();
        const missatge = detall.querySelector('.missatge-cabas');
        if (missatge) missatge.textContent = 'El cabàs estarà disponible molt aviat.';
    });
});
