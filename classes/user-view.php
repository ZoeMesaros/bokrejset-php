<?php

class UserView
{

    public function renderAllUsersAsList(array $users): void
    {

        echo "<h3>Alla Rejsare</h3>";
        echo "<div class=\"wrapper\">";
        foreach ($users as $user) {
            echo "<div class=\"userCard\">";
            echo "<img class=\"profileImg\" src={$user['img']}>";
            echo "<h3 class=\"userName\">{$user['username']}</h3>";
            echo "</div>";
        }
        echo "</div>";
    }
}