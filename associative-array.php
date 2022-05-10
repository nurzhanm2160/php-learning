<?php
    $words = array('green' => 'зеленный', 'red' => 'красный', 'blue' => 'синий', 'purple' => 'фиолетовый');
    $words = ['green' => 'зеленный', 'red' => 'красный', 'blue' => 'синий', 'purple' => 'фиолетовый'];


    $countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
    echo $countries["Spain"];   // Madrid
    echo "<br />";
    $countries["Spain"] = "Barcelona";
    echo $countries["Spain"];   // Barcelona


    foreach ($words as $word)
    {
        echo "word: $word </br>";
    }

    $data = [1=> "Tom", "id132" => "Sam", 56 => "Bob"];
    echo $data[1];  // Tom
    echo "<br />";
    echo $data["id132"];    // Sam