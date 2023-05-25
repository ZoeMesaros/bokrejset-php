<?php

require 'classes/book-view.php';
require 'classes/book-model.php';


$pdo = require 'partials/connect.php';

$bookModel = new BookModel($pdo);
$bookView = new BookView();



// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';


$bookView->renderAllBooksWithAuthorsAsList($bookModel->getAllBooksWithAuthors());

include 'partials/book-form.php';
include 'partials/footer.php';