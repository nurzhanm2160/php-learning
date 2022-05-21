<?php


$technologies = [];

if(isset($_POST['technologies']))
{
    $technologies = $_POST['technologies'];
}

echo "В массиве ".count($technologies)." элемента/элементов<br>";

foreach($technologies as $technology)
{
    echo $technology."<br>";
}

?>

<form method="POST">
    <p>ASP.NET <input type="checkbox" value="ASP.NET" name="technologies[]" /></p>
    <p>PHP <input type="checkbox" value="PHP" name="technologies[]" /></p>
    <p>DJANGO <input type="checkbox" value="DJANGO" name="technologies[]" /></p>
    <input type="submit" value="Отправить" />
</form>
