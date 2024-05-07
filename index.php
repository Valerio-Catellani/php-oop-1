<?php
include __DIR__ . "/Controllers/dbrequest.php";
$movies = getAllMovies();
function getStars($value)
{
    $fullTemplate = '';
    for ($i = 0; $i < 10; $i++) {
        if ($i < $value) {
            $fullTemplate .= '<i class="fa-solid fa-star text-warning"></i>';
        } else {
            $fullTemplate .= '<i class="fa-regular fa-star"></i>';
        }
    }
    return $fullTemplate;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . "/Views/head/head.php"; ?>
    <link rel="stylesheet" href="style/hype_utility.css">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/media_query.css">
    <link rel="stylesheet" href="style/animation.css">
    <title>Esrcizione 07/05/2024</title>
</head>

<body class="bg-light-black text-white">
    <?php include __DIR__ . "/Views/body/header.php"; ?>
    <div class='container'>
        <div class='row'>
            <?php foreach ($movies as $movie) { ?>
                <div class='col col-4'>
                    <div id="<?= $movie->movieId ?>" class="my-card bg-dark rounded-1 m-2 p-1 overflow-hidden d-flex flex-column justify-content-between hype-shadow-white">
                        <div class="">
                            <h3 class="text-center fs-5 py-1 mb-0"><?= $movie->title ?></h3>
                            <p class="text-center border-black border-bottom shadow small mb-1">(<?= $movie->originalTitle ?>)</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="img-container d-flex align-items-center">
                                <img src="<?= $movie->backdropPath ?>" class="card-img-top img-fluid" alt="<?= $movie->title ?>">
                            </div>
                            <div class="info-container p-2">
                                <div class="card-body">
                                    <p class="card-text bg-dark-subtle p-1 overflow-y-auto text-dark rounded-1"><?= $movie->overview ?></p>
                                    <p class="fw-bold mb-0 border-black border-bottom">Vote Avarage:
                                        <?php
                                        $stars = intval($movie->voteAverage);
                                        echo getStars($stars);
                                        ?>
                                    </p>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fw-bold">
                                            Original Language: <?= $movie->originalLanguage ?>
                                        </p>
                                        <div class="lv-icon-container d-flex ms-2">
                                        </div>
                                    </div>
                                    <p class="mb-0"><span class="fw-bold">Popularity: <?= $movie->popularity ?></p>
                                </div>
                                <div class="card-body mt-2 d-flex align-items-center justify-content-center fs-1">
                                    <span role="button"><i class="fa-solid fa-circle-play"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
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