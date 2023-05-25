<?php

require 'classes/user-view.php';
require 'classes/user-model.php';

$pdo = require 'partials/connect.php';

$userModel = new UserModel($pdo);
$userView = new UserView();

// ==============================================
// Skapa vy nedan

include 'partials/header-users.php';
include 'partials/nav.php';

$userView->renderAllUsersAsList($userModel->getAllUsers());
echo "<a href=user-remove.php><h1>Ta bort en användare</h1></a>";

include 'partials/user-form.php';
include 'partials/user-edit-form.php';
include 'partials/footer.php';