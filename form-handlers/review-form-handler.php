<?php

require '../classes/review-model.php';
$reviewModel = new ReviewModel(require '../partials/connect.php');


if (isset($_POST['bookid'], $_POST['userid'], $_POST['review'])) {
    $bookid = filter_var($_POST['bookid'], FILTER_SANITIZE_NUMBER_INT);
    $userid = filter_var($_POST['userid'], FILTER_SANITIZE_NUMBER_INT);
    $review = filter_var($_POST['review'], FILTER_SANITIZE_SPECIAL_CHARS);
    $reviewModel->addReview($bookid, $userid, $review);

    header("Location: ../reviews.php");
}