
# Nuovo progetto in Laravel 10 + SASS + BOOTSTRAP 5.X
Prima di tutto eseguiamo il primo comando di installazione di npm

 - Eseguiamo `npm install`
 - Eseguiamo il comando per aggiungere SASS `npm i --save-dev sass` o `npm install -D sass`
 - Modifichiamo la cartella `resources/css` in `resources/scss`
 - Modifichiamo il file `resources/css/app.css` in `resources/scss/app.scss`
 - Modifichiamo il file `vite.config.js` aggiungendo a plugins il path
   giusto 
                   ```plugins: [
                           laravel({
                               input: 'resources/scss/app.scss', 'resources/js/app.js'],
                               refresh: true,
                           }),
                       ],
                   ```
 - Aggiungiamo un alias a `vite.config.js` per facilitare l'accesso a
   resources
                   ``` 
                   resolve: {
                           alias: {
                               '~resources': "/resources/"
                           }
                       }
                   ```
 - Aggiungiamo `import "~resources/scss/app.scss";` al nostro file
   `resources/js/app.js`
 - Aggiungiamo `@vite("resources/js/app.js")` ad ogni layput della
   nostra applicazione
 - Aggiungiamo  `resources/js/app.js` una direttiva per la corretta
   gestione delle immagini ``` import.meta.glob([
       '../img/**' ]); ```
 - Aggiungiamo `package-lock.json` al file `.gitignore`

## AGGIUNGIAMO BOOTSTRAP 5 AL NOSTRO PROGETTO

 - Installiamo attraverso npm i due pacchetti necessari al funzionamento
   di Bootstrap  `npm i bootstrap @popperjs/core`
 - Aggiungo in cima al file `vite.config.js` questa riga `const path =
   require("path");`
 - Aggiungo agli alias  ```  alias: {
               '~resources': "/resources/",
               '~bootstrap': path.resolve(__dirname, "node_modules/bootstrap")
           } ```
 - Aggiungiamo `@use "~bootstrap/scss/bootstrap" as *;` al file
   `resources/scss/app.scss`
 - Aggiungiamo `import * as bootstrap from "bootstrap";` al file
   `resources/js/app.js`

## COME USARE UN TEMPLATE REPOSITORY

 - Apri la repository su github e clicca su "use this template" e poi
   creo una nuova repository
 - Le diamo un nome come richiesto
 - La cloniamo direttamente dalla nostra IDE (vscode)
 - Apriamo la repository
 - Eseguiamo `npm install`
 - Eseguiamo `composer install`
 - Eseguiamo il comando di generazione della chiave univoca del nostro
   progetto `php artisan key:generate`
 - Eseguiamo i due comandi di esecuzione costante in due terminali
   separati(anche paralleli, volendo) `npm run dev` `php artisan serve`
