<?php

class AuthorView
{

    public function renderAllAuthorsAsList(array $authors): void
    {
        echo "<h3>Författare</h3>";
        echo "<ul>";
        foreach ($authors as $author) {
            echo "<li>{$author['firstname']} {$author['lastname']}</li>";
        }
        echo "</ul>";
    }
}
?>