<?php
include_once __DIR__ . "/../../Controllers/dbrequest.php";
$books = getAllBooks();

?>

<div class='container my-2'>
    <h2>Books</h2>
    <div class='row'>
        <?php foreach ($books as $book) { ?>
            <div class='col col-4'>
                <div id="<?= $book->id ?>" class="my-card bg-dark-subtle rounded-1 m-2 p-1 overflow-hidden shadow text-dark">
                    <div class="h-small">
                        <h3 class="text-center fs-5 py-1 mb-0"><?= $book->title ?></h3>
                        <p class="text-center border-black border-bottom shadow small mb-1">(
                            <?=
                            $authorsString = implode(', ', $book->authors);

                            ?>)
                        </p>
                    </div>
                    <div class="h-high d-flex flex-column align-items-center">
                        <div class="img-container w-50">
                            <img src="<?= $book->image ?>" class="card-img-top img-fluid" alt="<?= $book->title ?>">
                        </div>
                        <div class="info-container p-2 w-100">
                            <div class="card-body">
                                <p class="card-book-text w-100 bg-light p-1 overflow-y-auto border-black text-dark rounded-1 shadow"><?= $book->description ?></p>
                                <div class="d-flex align-items-center">
                                    <p class="mb-0 fw-bold">
                                        Pages: <?= $book->pageCount ?>
                                    </p>
                                </div>
                            </div>
                            <div class="card-body mt-2 d-flex align-items-center justify-content-center fs-1">
                                <span role="button"><i class="fa-solid fa-book-open hype-hover-size"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>