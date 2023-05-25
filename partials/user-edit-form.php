<?php
require_once 'classes/user-model.php';
$userModel = new UserModel(connect($host, $db, $user, $password));
?>
<br>
<h2>Redigera en befintlig användare</h2>
<form action="form-handlers/user-edit-form-handler.php" method="post">
    <select name="id" id="id">
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
    <label for="username">Nytt användarnamn<br></label><input type="text" name="username" id="username"><br><br>
    <label for="email">Ny E-post<br></label><input type="text" name="email" id="email"><br><br>
    <label for="img">Ny Användarbild url<br></label><input type="url" name="img" id="img"><br><br>
    <button type="submit">Redigera</button>
</form>