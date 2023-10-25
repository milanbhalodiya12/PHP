<!-- Develop a PHP script to extract the keys from an associative array using the array_keys()
function. -->

<?php

$student = array(
    "first_name" => "Milan",
    "last_name" => "Bhalodiya",
    "age" => 21,
    "email" => "milanbhalodiya410@gmail.com"
);

$keys = array_keys($student);

echo "Keys from the associative array:<br>";

print_r($keys);

?>
