<!-- Create a PHP script that flips the keys and values of an associative array using the
array_flip() function. -->

<?php

$colors = array(
    "red" => "Dragon-Fruit",
    "yellow" => "Banana",
    "green" => "Kiwi",
    "purple" => "Grape"
);

$flipped = array_flip($colors);

echo "Flipped associative array:<br>";
print_r($flipped);

?>
