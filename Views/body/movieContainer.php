 <?php
    include_once __DIR__ . "/../../Controllers/dbrequest.php";
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
    $title = getAllMovies();
    ?>

 <div class='container my-2'>
     <h2>Movies</h2>
     <div class='row'>
         <?php foreach ($movies as $movie) { ?>
             <div class='col col-4'>
                 <div id="<?= $movie->id ?>" class="my-card bg-dark rounded-1 m-2 p-1 overflow-hidden d-flex flex-column justify-content-between hype-shadow-white">
                     <div class="h-small">
                         <h3 class="text-center fs-5 py-1 mb-0"><?= $movie->title ?></h3>
                         <p class="text-center border-black border-bottom shadow small mb-1">(<?= $movie->originalTitle ?>)</p>
                     </div>
                     <div class="d-flex flex-column h-high">
                         <div class="img-container d-flex align-items-center">
                             <img src="<?= $movie->image ?>" class="card-img-top img-fluid" alt="<?= $movie->title ?>">
                         </div>
                         <div class="info-container p-2">
                             <div class="card-body">
                                 <p class="card-text bg-dark-subtle p-1 overflow-y-auto text-dark rounded-1"><?= $movie->description ?></p>
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
                                 <span role="button"><i class="fa-solid fa-circle-play hype-hover-size"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         <?php } ?>
     </div>
 </div>