<!-- Create a PHP script that removes duplicate values from an array using the array_unique()
function. -->

<?php

$Milan = array(1, 5, 10, 133, 44, 44, 58);

$unique = array_unique($Milan);


echo "Main Array: ";

print_r($Milan);

echo "<br><br>";

echo "New Array: ";
print_r($unique);
?>