<!-- Create a PHP script that extracts a portion of an array using the array_slice() function
and displays the result. -->

<?php

$fruits = array("Strawberry", "Blue-Berry", "Pineapple", "Strawberry", "Kiwi");


$slice = array_slice($fruits, 1, 3); 


echo "Sliced Array: ";
print_r($slice);
?>

