<?php
$families = [["Tom", "Alice"], ["Bob", "Kate"], ["Sam", "Mary"]];

foreach ($families as $family) {
    foreach ($family as $user) {
        echo $user . '<br/>';
    }
}


$phones = array(
    "apple" => array("Iphone 12", "Iphone X", "Iphone 7"),
    "samsung" => array("Galaxy s10", "Galaxy a50", "Note 7"),
    "nokia" => array("Nokia 8.3", "Nokia 3.4")
);


foreach ($phones as $brand => $items) {
    echo "<h3>$brand</h3>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo "<li>$value</li>";
    }
    echo "</ul>";
}


$gadgets = array(
    "phones" => array(
        "apple" => "iPhone 12",
        "samsung" => "Samsung S20",
        "nokia" => "Nokia 8.3"),
    "tablets" => array(
        "lenovo" => "Lenovo Yoga Smart Tab",
        "samsung" => "Samsung Galaxy Tab S5",
        "apple" => "Apple iPad Pro")
);


foreach ($gadgets as $gadget => $items) {
    echo "<h3>$gadget</h3>";
    echo "<ul>";
    foreach ($items as $key => $value) {
        echo "<li>$key : $value</li>";
    }
    echo "</ul>";
}