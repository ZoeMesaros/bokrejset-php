<?php

require 'classes/review-view.php';
require 'classes/review-model.php';


$pdo = require 'partials/connect.php';

$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();



// ==============================================
// Skapa vy nedan

include 'partials/header-reviews.php';
include 'partials/nav.php';


$reviewView->renderAllReviewsAsList($reviewModel->getAllReviewsWithBooksAndUsers());

include 'partials/review-form.php';
include 'partials/footer.php';