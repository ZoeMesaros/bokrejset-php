<?php

require '../classes/user-model.php';
$userModel = new UserModel(require '../partials/connect.php');

if (isset($_POST['username'], $_POST['email'], $_POST['img'])) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $img = filter_var($_POST['img'], FILTER_SANITIZE_SPECIAL_CHARS);
    $userModel->addUser($username, $email, $img);

    header("Location: ../users.php");
}