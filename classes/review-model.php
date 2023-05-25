<?php

require_once 'db.php';

class ReviewModel extends DB
{

    protected $table = "reviews";

    public function getAllReviews()
    {
        return $this->getAll($this->table);
    }

    public function addReview(int $bookid, int $userid, string $review)
    {
        $sql = "INSERT INTO {$this->table} (bookid,userid,review) VALUES (?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$bookid, $userid, $review]);
    }


    public function getAllReviewsWithBooksAndUsers()
    {
        $sql = "SELECT users.username, books.title, books.year, reviews.review FROM `users` JOIN `reviews` ON users.id = reviews.userid JOIN books ON books.id = reviews.bookid";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getAllReviewsWithBooksAuthorsAndUsers()
    {
        $sql = "SELECT users.username, books.title, authors.firstname, authors.lastname, reviews.review FROM `users` JOIN `reviews` ON users.id = reviews.userid JOIN books ON books.id = reviews.bookid JOIN `authors` ON authors.id = books.author_id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }



}