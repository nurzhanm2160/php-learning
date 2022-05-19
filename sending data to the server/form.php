<?php ?>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
    <?php


    $name = 'не определенно';
    $age = 'не определенно';


    if (isset($_POST['username'])) {
        $name = strip_tags($_POST['username']);
    }

    if (isset($_POST['age'])) {
        $age = strip_tags($_POST['age']);
    }

    echo "Имя: $name<br> Возраст: $age";
    ?>
        <form method="POST">
            <p>Имя: <input name="username" type="text" /></p>
            <p>Возраст: <input name="age" type="number" /></p>
            <input type="submit" value="Отправить" />
        </form>
    </body>
</html>