<?php

require 'classes/author-view.php';
require 'classes/author-model.php';


$pdo = require 'partials/connect.php';

$authorModel = new AuthorModel($pdo);
$authorView = new AuthorView();



// ==============================================
// Skapa vy nedan

include 'partials/header.php';
include 'partials/nav.php';


$authorView->renderAllAuthorsAsList($authorModel->getAllAuthors());

include 'partials/author-form.php';
include 'partials/footer.php';