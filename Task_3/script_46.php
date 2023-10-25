<!-- Develop a PHP script to fill an array with a specific value using the array_fill() function. -->

<?php

$value = "Hello, World!";


$numberOfElements = 1;


$filledArray = array_fill(0, $numberOfElements, $value);


print_r($filledArray);

?>