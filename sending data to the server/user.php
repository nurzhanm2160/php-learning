<?php

$users = [];

if(isset($_POST['users']))
{
    $users = $_POST['users'];
}

echo "В массиве ".count($users)." элемент'а<br>";

foreach ($users as $user)
{
    echo $user."<br>";
}

?>

<form method="POST">
    <p>User 1: <input type="text" name="users[]"></p>
    <p>User 2: <input type="text" name="users[]"></p>
    <p>User 3: <input type="text" name="users[]"></p>
    <input type="submit" value="Отправить" />
</form>
