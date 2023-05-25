<?php

class BookView
{

    public function renderAllBooksWithAuthorsAsList(array $books): void
    {
        echo "<h3>Alla böcker</h3>";
        echo "<table id=books>";
        echo "<th>Titel</th>";
        echo "<th>Författare</th>";
        echo "<th>Utgivningsår</th>";
        echo "<th>Sidor</th>";
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>{$book['title']}</td>";
            echo "<td>{$book['firstname']} {$book['lastname']}</td>";
            echo "<td>{$book['year']}</td>";
            echo "<td>{$book['pages']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    /*  public function renderAllBooksWithAuthorsAsList(array $books): void
     {
         echo "<h3>Alla böcker</h3>";
         echo "<table id=books>";
         echo "<th>Titel</th>";
         echo "<th>År</th>";
         echo "<th>Författare</th>";
         foreach ($books as $book) {
             echo "<tr>";
             echo "<td>{$book['title']}</td>";
             echo "<td>{$book['year']}</td>";
             echo "<td>{$book['firstname']} {$book['lastname']}</td>";
             echo "</tr>";
         }
         ;
         echo "</table>";
     } */
}