<?php
require_once 'classes/user-model.php';
$userModel = new UserModel(connect($host, $db, $user, $password));
?>
<br>
<h2>Lägg till en ny användare</h2>
<form action="form-handlers/user-form-handler.php" method="post">
    <label for="username">Användarnamn<br> </label><input type="text" name="username" id="username"><br>
    <label for="email">E-post<br></label><input type="text" name="email" id="email"><br><br>
    <label for="img">Användarbild url<br></label><input type="url" name="img" id="img"><br><br>
    <button type="submit">Lägg till ny användare</button>
</form>