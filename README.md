# Movies PHP Class

Sito web che mostra una lista di film, ciascuno con:

- Immagine della locandina
- Nome del film
- Autore
- Anno di produzione
- Generi a cui appartiene il film

I dati dei film vengono presi dal file db.php che a sua volta istanzia un array di oggetti Movie.
La classe Movie è costituita dalle variabili che determinano le caratteristiche del film(nome,autore,anno,generi e url della locandina) e da un costruttore che istanzia l'oggetto Movie.
All'interno di index.php viene importato il file main.php che gestisce i dati da db.php: vengono scorsi i campi di ciascun movie tramite un foreach e i dati vengono stampati a schermo.
