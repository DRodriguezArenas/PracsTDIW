// js/categories.js

document.addEventListener('DOMContentLoaded', () => {
    const contenidor = document.getElementById('productes-categoria');

    document.querySelectorAll('.categoria').forEach((enllac) => {
        enllac.addEventListener('click', async (event) => {
            event.preventDefault();               // <-- evita que el navegador cargue otra página

            const id = enllac.dataset.id;
            contenidor.innerHTML = '<p>Carregant...</p>';

            try {
                const resposta = await fetch(`index.php?accio=productes-categoria&categoria=${id}`);
                if (!resposta.ok) throw new Error(resposta.status);

                contenidor.innerHTML = await resposta.text();   // inserta el fragmento
                contenidor.scrollIntoView({ behavior: 'smooth' });
            } catch (error) {
                contenidor.innerHTML = '<p>No s\'han pogut carregar els productes.</p>';
            }
        });
    });
});