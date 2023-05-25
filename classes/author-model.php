<?php

require_once 'db.php';

class AuthorModel extends DB
{

    protected $table = "authors";

    public function getAllAuthors()
    {
        return $this->getAll($this->table);
    }

    public function addAuthor(string $firstname, string $lastname, )
    {
        $sql = "INSERT INTO {$this->table} (firstname,lastname) VALUES (?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$firstname, $lastname]);
    }
}