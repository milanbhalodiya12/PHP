<!-- Write a PHP script that removes duplicate values from an associative array using the
array_unique() function. -->

<?php


$fruits = array("Apple", "Grapes","Banana","Kiwi","Mango","Apple","Mango");

$unique = (array_unique($fruits));

print_r($unique);

?>