<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/Views/head/head.php"; ?>
    <link rel="stylesheet" href="style/hype_utility.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/media_query.css">
    <link rel="stylesheet" href="style/animation.css">
    <title>PHP OOP 1</title>
</head>

<body class="bg-light-black text-white">
    <?php include __DIR__ . "/Views/body/header.php"; ?>
    <main>
        <?php include __DIR__ . "/Views/body/movieContainer.php"; ?>
        <?php include __DIR__ . "/Views/body/bookContainer.php"; ?>
    </main>

</body>

<?php include __DIR__ . "/Views/body/footer.php" ?>

</html>




<!-- TASK
Ciao ragazzi,
esercizio di oggi:
nome repo: php-oop-1
Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un progetto in cui:
 - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
Aggiungere una classe parent Product ed estendere Movie da Product
Aggiungere una classe Book che estende anch'essa Product

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies e di books.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato per ogni classe
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
Buon pomeriggio e buon lavoro ! :muscolo:
P.S. Vi allego 2 json per avere qualche dato da utilizzare per i vostri film e libri (modificato) 
-->