<?php

require_once 'classes/author-model.php';
$authorModel = new AuthorModel(connect($host, $db, $user, $password));

?>
<br>
<h2>Lägg till en bok</h2>
<form action="form-handlers/book-form-handler.php" method="post">
    <label for="title">Titel <br> </label><input type="text" name="title" id="title"><br><br>
    <label for="year">Publicerad år <br></label><input type="text" name="year" id="year"><br><br>
    <label for="year">Antal sidor <br></label><input type="text" name="pages" id="pages"><br><br>
    <select name="author-id" id="author">
        <option value="">--Välj en författare--</option>

        <?php
        $authors = $authorModel->getAllAuthors();
        foreach ($authors as $author) {
            echo "<option value='{$author['id']}'>
                    {$author['firstname']} {$author['lastname']}
                </option>";
        }
        ?>
    </select><br><br>
    <a class="authorLink" href="authors.php">Lägg till en ny författare</a><br><br>
    <button type="submit">Lägg till bok</button>
</form>