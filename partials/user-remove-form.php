<?php
require_once 'classes/user-model.php';
$userModel = new UserModel(connect($host, $db, $user, $password));
?>
<br>
<h2>Ta bort en användare</h2>
<form action="form-handlers/user-remove-form-handler.php" method="post">
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
    <button type="submit">Ta bort</button>
</form>