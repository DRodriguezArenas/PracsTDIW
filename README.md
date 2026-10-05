# PracsTDIW — Joia Justa (joieria ètica i sostenible)

Botiga virtual de la pràctica de TDIW (grup `tdiw-e6`). Venem joies fetes amb
plata reciclada i or Fairmined, amb pedres de comerç just.

## Sessió 1

| Fitxer | Contingut |
|---|---|
| `.htaccess` | Control d'accés amb autenticació bàsica d'Apache |
| `index.html` | Pàgina d'inici: llistat de categories |
| `productes.html` | Llistat de productes d'una categoria (Anells) |
| `producte.html` | Detall d'un producte |
| `registre.html` | Formulari de registre amb validació HTML5 |
| `login.html` | Formulari d'inici de sessió |
| `css/estils.css` | Full d'estils (CSS3, sense frameworks) |
| `img/` | Imatges SVG de les categories i el logotip |

### Passos al servidor (deic-docencia)

```bash
ssh -p 170 tdiw-e6@deic-dc17.uab.cat
cd ~/public_html
# copiar-hi els fitxers d'aquest repositori i després:
htpasswd -c .htpasswd tdiw-e6          # crea la contrasenya d'accés al web
find /home/TDIW/tdiw-e6/public_html -type d -exec chmod 755 {} \;
find /home/TDIW/tdiw-e6/public_html -type f -exec chmod 644 {} \;
```

El `.htpasswd` NO es puja al repositori: s'ha de generar al servidor.
L'antic `index.html` del professor s'ha reanomenat a `index1.html`.
