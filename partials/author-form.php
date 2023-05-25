<?php

require_once 'classes/author-model.php';
$authorModel = new AuthorModel(connect($host, $db, $user, $password));

?>
<br>
<h2>Lägg till en författare</h2>
<form action="form-handlers/author-form-handler.php" method="post">
    <label for="firstname">Förnamn<br> </label><input type="text" name="firstname" id="firstname"><br>
    <label for="lastname">Efternamn<br></label><input type="text" name="lastname" id="lastname"><br><br>
    <button type="submit">Lägg till författare</button>
</form>