<?php

require_once 'classes/book-model.php';
require_once 'classes/author-model.php';
require_once 'classes/user-model.php';
$bookModel = new bookModel(connect($host, $db, $user, $password));
$authorModel = new authorModel(connect($host, $db, $user, $password));
$userModel = new userModel(connect($host, $db, $user, $password));
?>

<br>
<h2>Lägg till ny recension</h2>
<form action="form-handlers/review-form-handler.php" method="post">
    <select name="userid" id="userid">
        <option value="">Välj en användare</option>
        <?php
        $users = $userModel->getAllUsers();
        foreach ($users as $user) {
            echo "<option value='{$user['id']}'>
                    {$user['username']}
                </option>";
        }
        ?>
    </select><br>
    <select name="bookid" id="bookid">
        <option value="">Välj en bok</option>
        <?php
        $books = $bookModel->getAllBooks();
        foreach ($books as $book) {
            echo "<option value='{$book['id']}'>
                    {$book['title']}
                </option>";
        }
        ?>
    </select><br>
    <label for="lastname">Recension <br></label><textarea name="review" id="review"></textarea><br>
    <button type="submit">Lägg till recension</button>
</form>