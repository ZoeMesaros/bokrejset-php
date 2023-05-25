<?php

class ReviewView
{

    public function renderAllReviewsAsList(array $reviews): void
    {
        echo "<h3>Recensioner</h3>";
        echo "<ul>";
        foreach ($reviews as $review) {
            echo "<li>Skriven av {$review['username']} om {$review['title']} : {$review['review']}</li>";
        }
        ;
        echo "</ul>";
    }
}