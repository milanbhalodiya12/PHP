<!-- Develop a PHP script that searches for a specific element in an array using the
array_search() function and displays the index if found. -->

<?php

$MyArray = array("Dragon-Fruit", "Strawberry", "Blue-Berry");


$SearchElement = "Apple";


$FoundIndex = array_search($SearchElement, $MyArray);

if ($FoundIndex !== false) {

    echo "The element '$SearchElement' was found at index $FoundIndex.";

} else {
    echo "The element '$SearchElement' was not found in the array.";
}
?>
