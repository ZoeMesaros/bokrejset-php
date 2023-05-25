<?php

require_once 'db.php';

class BookModel extends DB
{

    protected $table = "books";

    public function getAllBooks()
    {
        return $this->getAll($this->table);
    }



    public function getAllBooksWithAuthors()
    {
        $sql = "SELECT books.title,books.year,books.pages,authors.firstname,authors.lastname FROM `books` JOIN `authors` on books.author_id=authors.id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function addBook(string $title, int $year, int $pages, int $authorId, )
    {
        $sql = "INSERT INTO {$this->table} (title,year,pages,author_id) VALUES (?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$title, $year, $pages, $authorId]);
    }
}